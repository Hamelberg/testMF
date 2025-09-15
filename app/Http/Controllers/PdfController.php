<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PdfController extends Controller
{
    public function index()
    {
        $files = Storage::disk('public')->files('pdfs');
        // ambil hanya nama file
        $files = array_map('basename', $files);

        return view('pdfs.index', compact('files'));
    }

    public function create()
    {
        return view('pdfs.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pdf' => 'required|file|mimes:pdf|max:10240', // max 10MB
        ]);

        $file = $request->file('pdf');

        $filename = Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME))
                    . '-' . time() . '.' . $file->getClientOriginalExtension();

        $path = $file->storeAs('pdfs', $filename, 'public');

        return redirect()->route('pdf.index')->with('success', 'PDF berhasil di-upload: '.$filename);
    }

    public function show($filename)
    {
        $path = 'pdfs/'.$filename;
        if (! Storage::disk('public')->exists($path)) {
            abort(404);
        }

        $url = Storage::disk('public')->url($path);
        return view('pdfs.show', compact('url', 'filename'));
    }

    public function download($filename)
    {
        $path = 'pdfs/'.$filename;
        if (! Storage::disk('public')->exists($path)) {
            abort(404);
        }

        return Storage::disk('public')->download($path);
    }
}
