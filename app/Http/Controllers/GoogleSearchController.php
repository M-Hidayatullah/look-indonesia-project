<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoogleSearchController extends Controller
{
    public function organizationSchema()
    {
        return response()->json([
            "@context" => "https://schema.org",
            "@type" => "TravelAgency",
            "name" => "Look Indonesia Adventure",
            "url" => "https://lookindonesia.com",
            "logo" => "https://lookindonesia.com/frontend/assets/img/logo.png",
            "sameAs" => [
                "https://web.facebook.com/lookindonesia.adventure",
                "https://www.instagram.com/lookindonesia.adventure"
            ]
        ]);
    }
}
