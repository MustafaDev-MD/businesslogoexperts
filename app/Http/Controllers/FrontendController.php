<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Frontend Page Methods
    |--------------------------------------------------------------------------
    |
    | Each method returns a Blade view corresponding to a public-facing page.
    |
    */

    // Home page
    public function index()
    {
        return view('frontend.index');
    }

    // About page
    public function about()
    {
        return view('frontend.about');
    }

    // Blog listing page
    public function blog()
    {
        return view('frontend.blog');
    }

    // Single blog post page
    public function singlePost()
    {
        return view('frontend.single-post');
    }

    // Case studies page
    public function caseStudies()
    {
        return view('frontend.case-studies');
    }

    // Contact page
    public function contact()
    {
        return view('frontend.contact');
    }

    // FAQ page
    public function faq()
    {
        return view('frontend.faq');
    }

    // Pricing page
    public function pricing()
    {
        return view('frontend.pricing');
    }

    // Partnership page
    public function partnership()
    {
        return view('frontend.partnership');
    }

    // Services listing page
    public function service()
    {
        $services = config('custom_services');
        return view('frontend.service', compact('services'));
    }

    public function singleService($slug)
    {
        $slug = trim($slug); // remove trailing spaces
        $services = config('custom_services');

        $service = collect($services)->firstWhere('slug', $slug);

        if (!$service) {
            abort(404);
        }

        return view('frontend.single-services', compact('service', 'services'));
    }

    // Team page
    public function team()
    {
        return view('frontend.team');
    }

    // Testimonials page
    public function testimonial()
    {
        return view('frontend.testimonial');
    }

    /*
    |--------------------------------------------------------------------------
    | 404 Page Not Found
    |--------------------------------------------------------------------------
    |
    | This method returns the custom 404 error page when a route is not found.
    |
    */
    public function pageNotFound()
    {
        return response()->view('frontend.errors.404', [], 404);
    }
}
