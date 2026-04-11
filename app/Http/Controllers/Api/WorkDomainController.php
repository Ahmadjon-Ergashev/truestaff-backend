<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\WorkDomain;
use Illuminate\Http\Request;

class WorkDomainController
{
    public function index()
    {
        return WorkDomain::orderBy('sort_order')->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name_uz' => 'required|string',
            'name_en' => 'required|string',
            'name_ru' => 'nullable|string',
            'image_url' => 'nullable|string',
            'icon' => 'nullable|string',
            'sort_order' => 'nullable|integer',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/domains'), $filename);
            $validated['image_url'] = '/uploads/domains/' . $filename;
        }

        return WorkDomain::create($validated);
    }

    public function update(Request $request, WorkDomain $workDomain)
    {
        $validated = $request->validate([
            'name_uz' => 'sometimes|string',
            'name_en' => 'sometimes|string',
            'name_ru' => 'sometimes|string',
            'image_url' => 'nullable|string',
            'icon' => 'nullable|string',
            'sort_order' => 'nullable|integer',
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/domains'), $filename);
            $validated['image_url'] = '/uploads/domains/' . $filename;
        }

        $workDomain->update($validated);
        return $workDomain;
    }

    public function destroy(WorkDomain $workDomain)
    {
        $workDomain->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}
