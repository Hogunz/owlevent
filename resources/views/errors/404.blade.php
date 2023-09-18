{{-- @extends('errors::illustrated-layout')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found')) --}}

<x-guest-layout>
    <div class="flex justify-center">
        <span class="text-7xl uppercase">Page not Found!</span>
    </div>
</x-guest-layout>
