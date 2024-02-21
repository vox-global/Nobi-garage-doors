@extends('layouts.front.app')
@section('content')
    <section class="banner-home banner-installation inner-banner banner-door-repair blogs-banner"
    style="background-image: url('{{ !empty($content->banner_image) ? asset('storage/' . $content->banner_image) : '' }}')">
        <div class="container text-center">
            <h1 class="inner-main-text"> {{ $content->banner_heading ?? '' }} <span class="sub-text"><span></h1>
            <p class="py-4 inner-banner-para"> {{ $content->banner_text ?? '' }}</p>
        </div>
        <div class="inner-banner-overlay">
    </section>
    @include('layouts.front.cta')
@endsection
