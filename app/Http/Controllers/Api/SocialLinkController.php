<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SocialLink;
use Illuminate\Http\Request;

class SocialLinkController
{
    public function index()
    {
        return SocialLink::all();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'platform' => 'required|string',
            'url' => 'required|string',
        ]);

        return SocialLink::create($validated);
    }

    public function update(Request $request, SocialLink $socialLink)
    {
        $validated = $request->validate([
            'platform' => 'sometimes|string',
            'url' => 'sometimes|string',
        ]);

        $socialLink->update($validated);
        return $socialLink;
    }

    public function destroy(SocialLink $socialLink)
    {
        $socialLink->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}
