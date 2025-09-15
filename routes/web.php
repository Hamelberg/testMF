<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('page.password')->group(function () {
    Route::get('/locked', function () {
        return view('locked'); 
    });

    Route::post('/locked', function () {
        return view('locked'); //halaman kunci
    });

    // Halaman yang dilindungi password
    Route::get('/locked', function () {
        return view('partials.content');
    });

    Route::get('/logout', function (\Illuminate\Http\Request $request) {
        $request->session()->forget('page_unlocked'); // hapus session
        return redirect('/locked'); // balik ke halaman password
    })->name('logout');


    // Halaman PDF
    Route::get('/pdfs', [PdfController::class, 'index'])->name('pdf.index');
    Route::get('/pdfs/create', [PdfController::class, 'create'])->name('pdf.create');
    Route::post('/pdfs', [PdfController::class, 'store'])->name('pdf.store');
    Route::get('/pdfs/{filename}', [PdfController::class, 'show'])->name('pdf.show');
    Route::get('/pdfs/{filename}/download', [PdfController::class, 'download'])->name('pdf.download');

    Route::get('/it', function () {
        return view('it.it');
    })->name('it.it');

    Route::post('/it', function (\Illuminate\Http\Request $request) {
    // proses data form di sini
        return view('it.it', ['data' => $request->all()]);
    })->name('it.store');


});

