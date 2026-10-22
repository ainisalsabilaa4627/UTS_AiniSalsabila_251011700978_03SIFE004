<?php

use Illuminate\Support\Facades\Route;
use App\Models\Sport;

Route::get('/', function () {
    $search = request('search');

    $sports = Sport::when($search, function ($query, $search) {
        $query->where(function ($q) use ($search) {
            $q->where('name', 'like', '%' . $search . '%')
              ->orWhere('category', 'like', '%' . $search . '%');
        });
    })->paginate(6)->withQueryString();

    return view('sports.index', compact('sports', 'search'));
})->name('sports.index');

Route::get('/sports/{sport}', function (Sport $sport) {
    return view('sports.show', compact('sport'));
})->name('sports.show');

Route::get('/tentang-kami', function () {
    return view('sports.tentang-kami');
})->name('tentang-kami');