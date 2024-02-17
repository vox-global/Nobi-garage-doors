@extends('layouts.front.app')
@section('content')
    <main class="main__content_wrapper">

        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content">
                            <h1 class="breadcrumb__content--title text-white mb-10">About Us</h1>
                            <ul class="breadcrumb__content--menu d-flex">
                                <li class="breadcrumb__content--menu__items"><a class="text-white" href="index.php">Home</a>
                                </li>
                                <li class="breadcrumb__content--menu__items"><span class="text-white">About Us</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <!-- Start about section -->
        <section class="about__section section--padding mb-95">
            <div class="container">
                <div class="about__content text-center">
                    <h2 class="about__content--maintitle mb-25">Welcome to Sketchbook Online</h2>
                    <p class="about__content--desc mb-25">At Sketchbook Online we inspire through creativity, providing our
                        artists a paved way for their careers. We let them express their productivity through their
                        imagination and creative potential. We assist buyers to find exquisite masterpieces of art that
                        stand out in the crowd. Through this way, we connect our artists and buyers with dedication.</p>
                    <h4 class="about__author--name mb-25">Creativity takes courage.</h4>
                    <p class="about__content--desc mb-25">At Sketchbook Online we inspire through creativity, providing our
                        artists a paved way for their careers. We let them express their productivity through their
                        imagination and creative potential. We assist buyers to find exquisite masterpieces of art that
                        stand out in the crowd. Through this way, we connect our artists and buyers with dedication.</p>
                </div>
        </section>
        <!-- End about section -->

        <!-- Start company bio section -->
        <section class="about__section section--padding pt-0 mb-95">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-9">
                        <div class="about__content">
                            <h2 class="about__content--maintitle mb-25">Company Bio</h2>
                            <p class="about__content--desc mb-20">Rhonda and Kelton are a husband-and-wife team who love to
                                travel and meet amazing people from all over the world and are inspired by their stories.
                                They both love creating art and décor items. Rhonda is licensed interior designer, has
                                degrees in merchandising and interior design. Kelton enjoys creating pastel artwork and has
                                also made beautiful carved artistic pieces. Together, they're building Sketchbook Online as
                                a forum for artists to motivate, inspire, encourage, and give back to the community. They
                                believe that art teachers connecting with students, artists connecting with buyers, and
                                artist connecting with each other for support are crucial for the future of art education.
                                This way, they can give back to the arts community in time and monetary support. Rhonda and
                                Kelton currently provide small scholarships to Texas Tech University design school and want
                                to expand the outreach to Art schools. They are involved in their small Texas Hill Country
                                community of Boerne, as well as their community church. Our philosophy is, we are a
                                faith-based company enhancing the environment through the beauty of art and design. Plus,
                                it's just plain fun to connect with other creative individuals. Client satisfaction is the
                                ultimate goal of Sketchbook Online by responding to the desire for an exceptional experience
                                as both artist or art buyer.</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="about__thumbnail d-flex">
                            <div class="about__thumbnail--items">
                                <img class="about__thumbnail--img border-radius-5 display-block"
                                    src="{{ asset('front/img/about/company-bio.jpg') }}" alt="about-thumbnail">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End company bio section -->

        <!-- Start mission statement section -->
        <section class="about__section section--padding mb-95 pt-0">
            <div class="container">
                <div class="about__content text-center">
                    <h2 class="about__content--maintitle mb-25">Mission Statement</h2>
                    <p class="about__content--desc mb-25">Sketchbook Online is an innovative platform designed to promote,
                        encourage, and motivate art sales. Our mission is to unlock the creativity of artists by providing
                        them with powerful tools for managing and selling their artwork online. We believe that everyone
                        should have access to creative opportunities regardless of experience or budget, so we strive to be
                        a valuable resource for both new and established creators alike. Our vision is a world where all
                        creatives can discover success in expressing their passions through art without any obstacles. With
                        our suite of features, we're committed to helping artists bring their visions into reality no matter
                        what situation they come from.</p>
                </div>
        </section>
        <!-- End mission statement section -->

        <!-- Start about rhonda bio section -->
        <section class="about__section section--padding pt-0 mb-95">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-4">
                        <div class="about__thumbnail d-flex">
                            <div class="about__thumbnail--items">
                                <img class="about__thumbnail--img border-radius-5 display-block"
                                    src="{{ asset('front/img/about/rhonda.jpg') }}" alt="about-thumbnail">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="about__content">
                            <h2 class="about__content--maintitle mb-25">About Rhonda</h2>
                            <p class="about__content--desc mb-20">Rhonda Vandiver-White is a registered interior designer in
                                Texas and Tennessee and holds degrees in both interior design and fashion and textile
                                merchandising. Her interior design projects have been featured in high-profile magazines and
                                media such as TIME, Southern Accents, and Texas Ranch. She has earned award-winning
                                recognition and completed interior design projects for many top socialites, locally and
                                internationally. Rhonda believes in capturing the individual's personality and creating a
                                warm and inviting elegance that is unique to style and function, along with attention to the
                                tiniest details and providing value-based design solutions She loves helping artists and
                                buyers find the right piece of art for their home or business. Her years of experience have
                                given her a keen eye for detail, and she enjoys working one-on-one with clients to create
                                pieces that perfectly represent their unique style. Rhonda enjoys creating and teaching
                                others how to create seasonal décor items that enhance their space and are interesting and
                                unique.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End about rhonda section -->

        <!-- Start about kelton bio section -->
        <section class="about__section section--padding pt-0 mb-95">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-8">
                        <div class="about__content">
                            <h2 class="about__content--maintitle mb-25">About Kelton</h2>
                            <p class="about__content--desc mb-20">Kelton has always had a creative bent. He started having a
                                passion for art in high school and then began carving dragons, wizards and cowboys, ad
                                created wire copper trees. Working with Rhonda, they made unique decorative décor pieces for
                                homes and businesses. He sketches, plans, and designs accent pieces and art out of wood,
                                glass, and metal. Kelton has perfected his sketchbook use and enjoys helping artists improve
                                their skills and find their own unique style. Kelton loves anything creative and is always
                                up for a new project. His latest talent includes learning and creating beautiful pastel
                                landscapes. Kelton enjoys the process of taking an idea and making it a reality. He looks
                                forward to connecting to other artists and sharing their unique experiences and stories.
                                Sketchbook Online is a great way to give back to anyone wanting to learn from other artists
                                and share their passion for art.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about__thumbnail d-flex">
                            <div class="about__thumbnail--items">
                                <img class="about__thumbnail--img border-radius-5 display-block"
                                    src="{{ asset('front/img/about/kelton.jpg') }}" alt="about-thumbnail">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End about kelton section -->

    </main>
@endsection
