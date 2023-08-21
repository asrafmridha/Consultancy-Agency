<?php

namespace App\Http\Controllers;

use App\Models\Iframe;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class IframeController extends Controller
{
    function index(): View
    {
        $embed = Iframe::first();
        return view('backend.iframe.edit', compact('embed'));
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'embed_link' => 'required|string',
        ]);
        Iframe::find($id)->update($request->all());
        return back()->withSuccess("Updated Successfully");
    }
}
