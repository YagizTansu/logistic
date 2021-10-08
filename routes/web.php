<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/anasayfa', function () {
    return view('index');
});
//kurumsal
Route::get('/haberler', function () {
    return view('kurumsal/haberler');
});
Route::get('/arac-filomuz', function () {
    return view('kurumsal/arac-filomuz');
});
Route::get('/kurumsal', function () {
    return view('kurumsal/kurumsal');  
});

//hizmetler
Route::get('/karayolu', function () {
    return view('hizmetler/kara');  
});
Route::get('/havayolu', function () {
    return view('hizmetler/hava');  
});
Route::get('/denizyolu', function () {
    return view('hizmetler/deniz');  
});
Route::get('/minivan', function () {
    return view('hizmetler/minivan');  
});
Route::get('/proje', function () {
    return view('hizmetler/proje');  
});
Route::get('/depolama', function () {
    return view('hizmetler/depolama');  
});

//sektörel bilgiler
Route::get('/incoterms', function () {
    return view('sektörel-bilgiler/incoterms');
});
Route::get('/dis-ticaret-kisatlmalari', function () {
    return view('sektörel-bilgiler/dis-ticaret-kisaltmalari');
});
Route::get('/uld-ölcüleri', function () {
    return view('sektörel-bilgiler/uld-ölcüleri');
});
Route::get('/konteyner-ölcüleri', function () {
    return view('sektörel-bilgiler/konteyner-ölcüleri');
});
Route::get('/kargo-hacim-hesaplama', function () {
    return view('sektörel-bilgiler/kargo-hacim-hesaplama');
});
Route::get('/tir-ölcüleri', function () {
    return view('sektörel-bilgiler/tir-ölcüleri');
});

//İNSAN KAYNAKLARI
Route::get('/acik-pozisyonlar', function () {
    return view('insan-kaynaklari/acik-pozisyonlar');
});
Route::get('/is-basvuru-formu', function () {
    return view('insan-kaynaklari/is-basvuru-formu');
});


Route::get('/about', function () {
    return view('about');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/elements', function () {
    return view('elements');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/blog_details', function () {
    return view('blog_details');
});
Route::get('/iletisim', function () {
    return view('iletisim');
});
