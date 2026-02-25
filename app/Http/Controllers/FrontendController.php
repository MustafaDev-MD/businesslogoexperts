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
        // Could fetch all services from DB if needed
        $services = [
            ['name' => 'Performance Marketing', 'slug' => 'performance-marketing'],
            ['name' => 'Social Media Growth', 'slug' => 'social-media-growth'],
            ['name' => 'Content Marketing', 'slug' => 'content-marketing'],
            ['name' => 'PPC & Paid Ads', 'slug' => 'ppc-paid-ads'],
            ['name' => 'Brand Strategy', 'slug' => 'brand-strategy'],
            ['name' => 'Conversion Optimization', 'slug' => 'conversion-optimization'],
        ];

        return view('frontend.service', compact('services'));
    }

    // Single service page
    public function singleService($slug)
    {
        // Optionally, fetch the service from DB using $slug
        // $service = Service::where('slug', $slug)->firstOrFail();

        return view('frontend.single-services', compact('slug'));
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
