<?php

namespace App\Http\Controllers;

use App\Models\PackageRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Mail\PackageRequestMail;
use Illuminate\Support\Facades\Http;

class PackageFormController extends Controller
{
    public function index($serviceSlug, $packageSlug)
    {
        $services = config('custom_services');

        $service = collect($services)->firstWhere('slug', $serviceSlug);

        if (!$service) {
            abort(404);
        }

        $package = collect($service['pricing']['plans'])
            ->firstWhere(fn($p) => Str::slug($p['name']) === $packageSlug);

        if (!$package) {
            abort(404);
        }

        return view('frontend.package-form', [
            'service' => $service,
            'package' => $package
        ]);
    }

    public function submit(Request $request)
    {
        // Honeypot
        if ($request->filled('website')) {
            return response()->json(['status' => 'error', 'message' => 'Spam detected'], 422);
        }

        // Time check
        if (!$request->filled('form_time') || (time() - $request->input('form_time') < 3)) {
            return response()->json(['status' => 'error', 'message' => 'Too fast'], 422);
        }

        // Captcha required
        // if (!$request->filled('g-recaptcha-response')) {
        //     return response()->json(['status' => 'error', 'message' => 'Please complete captcha'], 422);
        // }

        // Verify reCAPTCHA
        // $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        //     'secret' => config('services.recaptcha.secret'),
        //     'response' => $request->input('g-recaptcha-response'),
        // ]);

        // $data = $response->json();

        // if (!($data['success'] ?? false)) {
        //     return response()->json(['status' => 'error', 'message' => 'Captcha failed'], 422);
        // }

        // Validation
        $validated = $request->validate([
            'service' => 'required',
            'package' => 'required',
            'first_name' => 'required|string|max:255',
            'last_name'  => 'nullable|string|max:255',
            'email'      => 'required|email:rfc,dns',
            'subject'    => 'nullable|string|max:255',
            'message'    => 'required|string',
            'files.*'    => 'file|max:51200|mimes:jpg,png,gif,mp4,pdf,doc,docx,zip,txt',
        ]);

        // File upload
        $uploadedFiles = [];

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                $uploadedFiles[] = [
                    'path' => $file->store('package-files', 'public'),
                    'name' => $file->getClientOriginalName(),
                ];
            }
        }

        // Save DB
        PackageRequest::create([
            'service' => $validated['service'],
            'package' => $validated['package'],
            'first_name' => $validated['first_name'],
            'last_name' => $validated['last_name'] ?? null,
            'email' => $validated['email'],
            'subject' => $validated['subject'] ?? null,
            'message' => $validated['message'],
            'files' => json_encode($uploadedFiles),
        ]);

        // Send Email
        Mail::to(config('mail.admin_address'))->send(
            new PackageRequestMail([
                'service'    => $validated['service'],
                'package'    => $validated['package'],
                'first_name' => $validated['first_name'],
                'last_name'  => $validated['last_name'] ?? '',
                'email'      => $validated['email'],
                'subject'    => $validated['subject'] ?? '',
                'message'    => $validated['message'],
                'files'      => $uploadedFiles,
            ])
        );

        return response()->json([
            'status' => 'success',
            'message' => 'Form submitted successfully!'
        ]);
    }
}
