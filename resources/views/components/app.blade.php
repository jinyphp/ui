<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @if (isset($seo_title))
        <title>{{$seo_title}}</title>
        @endif

        @stack('css')
    </head>

    <body>
        {{$slot}}


        <x-set-actions></x-set-actions>

        @stack('scripts')
    </body>
</html>
