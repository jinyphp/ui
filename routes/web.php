<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/**
 * 마크다운 문서 메뉴얼
 */
Route::get('/jinyui/docs/{slug1?}/{slug2?}/{slug3?}/{slug4?}/{slug5?}/{slug6?}/{slug7?}', function(){
    return (new \Jiny\Pages\Http\MarkdownController("docs"))->index();
    //[::class,"index"]
});
