@extends('layouts.front.app')
@section('content')
    <section class="banner-home banner-installation banner-door-repair project-inner-page">
        <div class="container text-center ">
            <h1 class="f-black pt-5 fs-1"><span class="f-white s-bold fs-1 mb-4">{{ $project->name ?? '' }}</h1>
            <div class="links-to-jump">
                <a href="{{ route('home') }}" class="contact-inner-links f-white">Homepage</a><span
                    class="f-white">&nbsp;>&nbsp;</span>
                <a href="{{ route('projects') }}" class="contact-inner-links f-white">Projects</a><span
                    class="f-white">&nbsp;>&nbsp;</span>
                <a href="{{ route('project-inner', ['slug' => $project->slug]) }}"
                    class="contact-inner-links f-white">{{ $project->name ?? '' }}</a>
            </div>


        </div>
        <div class="overflow-project-inner"></div>
    </section>

    <section class="project-showcase">
        <div class="container ">
            <img width="100%" height="100%" src="{{ $project->image }}" class="project-showcase-img"
                alt="{{ $project->name }}">
            <a href="{{ route('projects') }}" class="btn btn-regular mt-4 ms-5">
                {{ $content->inner_page_button_text ?? '' }}</a>
            <h1 class="f-black pt-4 ms-5 project-showcase-heading"> {{ $content->inner_page_heading ?? '' }}
            </h1>

        </div>
    </section>

    @include('layouts.front.cta')
@endsection
