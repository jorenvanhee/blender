<?php
$locales = collect(config('app.locales'));
$current = locale();
?>

{{-- Only render if the site is multilingual and we're on the homepage --}}
@if(!$locales->isEmpty() && request()->path() === $current)

    <link rel="alternate" hreflang="x-default" href="{{ URL::to('/') }}">

    @foreach($locales as $locale)
        <link rel="alternate" hreflang="{{ $locale }}" href="{{ url($locale) }}">
    @endforeach
@endif
