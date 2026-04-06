<?php

namespace App\Http\Controllers;

use App\Models\AdminUser;
use App\Models\ContactInquiry;
use App\Models\SiteContent;
use App\Models\SiteImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    // Admin Login
    public function login(Request $request) {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();
            return response()->json(['success' => true]);
        }

        return response()->json(['error' => 'Invalid credentials'], 401);
    }

    // Site Content
    public function getContent() {
        return response()->json(SiteContent::all());
    }

    public function updateContent(Request $request) {
        $request->validate([
            'key' => 'required',
            'lang' => 'required',
            'content' => 'required',
        ]);

        $content = SiteContent::updateOrCreate(
            ['key' => $request->key, 'lang' => $request->lang],
            ['content' => $request->content]
        );

        return response()->json($content);
    }

    // Contact Inquiries
    public function submitInquiry(Request $request) {
        $data = $request->validate([
            'fullName' => 'required|string',
            'company' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        $inquiry = ContactInquiry::create([
            'full_name' => $data['fullName'],
            'company' => $data['company'],
            'email' => $data['email'],
            'message' => $data['message'],
        ]);

        return response()->json($inquiry, 201);
    }

    // Site Images
    public function getImages() {
        return response()->json(SiteImage::all());
    }

    public function updateImage(Request $request) {
        $request->validate([
            'key' => 'required|string',
            'url' => 'required|string',
        ]);

        $image = SiteImage::updateOrCreate(
            ['key' => $request->key],
            ['url' => $request->url]
        );

        return response()->json($image);
    }
}
