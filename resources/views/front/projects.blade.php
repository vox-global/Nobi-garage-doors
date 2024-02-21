@extends('layouts.front.app')
@section('content')
    <section class="banner-home banner-installation banner-door-repair inner-banner banner-contact"
        style="background-image: url('{{ !empty($content->banner_image) ? asset('storage/' . $content->banner_image) : '' }}')">
        <div class="container text-center">
            <h1 class="inner-main-text"> {{ $content->banner_heading ?? '' }} <span class="sub-text"><span></h1>
            <p class="py-4 inner-banner-para"> {{ $content->banner_text ?? '' }}</p>
            <a href="tel:{{ $settings['phone_number'] }}" class="inner-btn"> {{ $content->banner_button_text ?? '' }}</a>
        </div>
        <div class="inner-banner-overlay">
    </section>


    <section class="gallery-section mt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="masonry">

                    @foreach ($projects as $key => $project)
                        <div class="item {{$key %4 == 0 ? "no-" : ""}}expand">
                            <img width="100%" height="100%" src="{{ $project->image }}">
                            <div class="item-text">{{ $project->name }}</div>
                            <div class="plus-icon-img">
                                <a href="{{route('project-inner',['slug' => $project->slug])}}"><img width="100%" height="100%"
                                        src="{{ asset('front/images/plus.webp') }}" alt="{{ $project->name }}"
                                        class="plus-icon"></a>
                            </div>
                            <div class="overlay"></div>

                        </div>
                    @endforeach

                    {{-- <div class="item no-expand">
                        <img width="100%" height="100%" src="assets/images/liverpool.webp">
                        <div class="item-text">Liverpool</div>
                        <div class="plus-icon-img">
                            <a href="project/liverpool"><img width="100%" height="100%" src="assets/images/plus.webp"
                                    alt="Nobi Garage Doors" class="plus-icon"></a>
                        </div>
                        <div class="overlay"></div>

                    </div>
                    <div class="item expand">
                        <img width="100%" height="100%" src="assets/images/Penrith.webp">
                        <div class="item-text">Penrith</div>
                        <div class="plus-icon-img">
                            <a href="project/Penrith"><img width="100%" height="100%" src="assets/images/plus.webp"
                                    alt="Nobi Garage Doors" class="plus-icon"></a>
                        </div>
                        <div class="overlay"></div>
                    </div>
                    <div class="item no-expand">
                        <img width="100%" height="100%" src="assets/images/Guilford.webp">
                        <div class="item-text">Guilford</div>
                        <div class="plus-icon-img">
                            <a href="project/Guilford"><img width="100%" height="100%" src="assets/images/plus.webp"
                                    alt="Nobi Garage Doors" class="plus-icon"></a>
                        </div>
                        <div class="overlay"></div>
                    </div>
                    <div class="item expand">
                        <img width="100%" height="100%" src="assets/images/Chatswoood.webp">
                        <div class="item-text">Chatswoood</div>
                        <div class="plus-icon-img">
                            <a href="project/Chatswoood"><img width="100%" height="100%" src="assets/images/plus.webp"
                                    alt="Nobi Garage Doors" class="plus-icon"></a>
                        </div>
                        <div class="overlay"></div>
                    </div>
                    <div class="item expand">
                        <img width="100%" height="100%" src="assets/images/St-Ives.webp">
                        <div class="item-text">St Ives</div>
                        <div class="plus-icon-img">
                            <a href="project/St-Ives"><img width="100%" height="100%" src="assets/images/plus.webp"
                                    alt="Nobi Garage Doors" class="plus-icon"></a>
                        </div>
                        <div class="overlay"></div>
                    </div>
                    <div class="item no-expand">
                        <img width="100%" height="100%" src="assets/images/Kings-Ford.webp">
                        <div class="item-text">Kings Ford</div>
                        <div class="plus-icon-img">
                            <a href="project/Kings-Ford"><img width="100%" height="100%" src="assets/images/plus.webp"
                                    alt="Nobi Garage Doors" class="plus-icon"></a>
                        </div>
                        <div class="overlay"></div>
                    </div>
                    <div class="item expand">
                        <img width="100%" height="100%" src="assets/images/Dover-Heights.webp">
                        <div class="item-text">Dover Heights</div>
                        <div class="plus-icon-img">
                            <a href="project/Dover-Heights"><img width="100%" height="100%"
                                    src="assets/images/plus.webp" alt="Nobi Garage Doors" class="plus-icon"></a>
                        </div>
                        <div class="overlay"></div>
                    </div>

                    <div class="item no-expand">
                        <img width="100%" height="100%" src="assets/images/Bellla-Vista.webp">
                        <div class="item-text">Bellla Vista</div>
                        <div class="plus-icon-img">
                            <a href="project/Bellla-Vista"><img width="100%" height="100%"
                                    src="assets/images/plus.webp" alt="Nobi Garage Doors" class="plus-icon"></a>
                        </div>
                        <div class="overlay"></div>
                    </div>
                    <div class="item no-expand">
                        <img width="100%" height="100%" src="assets/images/Kiribilli.webp">
                        <div class="item-text">Kiribilli</div>
                        <div class="plus-icon-img">
                            <a href="project/Kiribilli"><img width="100%" height="100%" src="assets/images/plus.webp"
                                    alt="Nobi Garage Doors" class="plus-icon"></a>
                        </div>
                        <div class="overlay"></div>
                    </div>
                    <div class="item expand">
                        <img width="100%" height="100%" src="assets/images/Newtown.webp">
                        <div class="item-text">Newtown</div>
                        <div class="plus-icon-img">
                            <a href="project/Newtown"><img width="100%" height="100%" src="assets/images/plus.webp"
                                    alt="Nobi Garage Doors" class="plus-icon"></a>
                        </div>
                        <div class="overlay"></div>
                    </div>
                    <div class="item no-expand">
                        <img width="100%" height="100%" src="assets/images/Croydon-park.webp">
                        <div class="item-text">Croydon park</div>
                        <div class="plus-icon-img">
                            <a href="project/Croydon-park"><img width="100%" height="100%"
                                    src="assets/images/plus.webp" alt="Nobi Garage Doors" class="plus-icon"></a>
                        </div>
                        <div class="overlay"></div>
                    </div>
                    <div class="item expand">
                        <img width="100%" height="100%" src="assets/images/Bondi.webp">
                        <div class="item-text">Bondi</div>
                        <div class="plus-icon-img">
                            <a href="project/Bondi"><img width="100%" height="100%" src="assets/images/plus.webp"
                                    alt="Nobi Garage Doors" class="plus-icon"></a>
                        </div>
                        <div class="overlay"></div>
                    </div>

 --}}


                </div>
            </div>



        </div>
        </div>
    </section>

    @include('layouts.front.cta')
@endsection
