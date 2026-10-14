<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('/robots.txt', fn () => response()
    ->view('seo.robots')
    ->header('Content-Type', 'text/plain; charset=UTF-8'));

Route::get('/sitemap.xml', fn () => response(
    '<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL.
    '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"><url><loc>'.e(url('/')).'</loc></url></urlset>'.PHP_EOL
)->header('Content-Type', 'application/xml; charset=UTF-8'));

Route::get('/llms.txt', fn () => response()
    ->view('seo.llms')
    ->header('Content-Type', 'text/markdown; charset=UTF-8'));
