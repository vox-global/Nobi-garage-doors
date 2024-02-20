@extends('layouts.front.app')
@section('content')

<section class="banner-home">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 banner-home-inner-col">
          <div class="container banner-home-inner">
            <h1 class="f-black ">Nobi<span class="f-red s-bold"> Garage Doors<br>
                Your Door</span> to Reliability</h1>
            <p class="f-black py-4">Elevate your home’s appeal with flawless garage door repair and installation services.</p>
            <a href="contact-us" class="btn btn-regular homepage-for-desktop-btn">Get Started</a>
            <a href="tel:0452234001" class="btn btn-regular homepage-for-mobile-btn">Call Now</a>
            <p></p>
          </div>
        </div>
        <div class="col-lg-6 banner-side-img-home ">
          <img width="100%" height="100%" src="assets/images/banner-side.webp?v=1" class="banner-side" alt="Nobi Garage Doors">
        </div>
      </div>
    </div>
  
  </section>
  
  <section class="production bg-red sec-padding ps-4">
    <div class="container">
      <div class="row production-row">
        <div class="col-lg-3" id="production">
          <h6 class="f-white s-bold">Expert Technicians</h6>
          <p class="f-white f-11">Backed by years of experience</p>
        </div>
        <div class="col-lg-3" id="measurement">
          <h6 class="f-white s-bold">Customization</h6>
          <p class="f-white f-11">Options at your disposal</p>
        </div>
        <div class="col-lg-3" id="installation">
          <h6 class="f-white s-bold">Prompt Repairs</h6>
          <p class="f-white f-11">Get back on track</p>
        </div>
        <div class="col-lg-3" id="experience">
          <h6 class="f-white s-bold">Transparency</h6>
          <p class="f-white f-11">Built a long-term relationship</p>
        </div>
      </div>
    </div>
  </section>
  
  <section class="home-form">
    <div class="container">
      <h1 class="form-h1">Get an Estimate</h1>
      <h2 class="form-h2">Fill our your details and we will get back to you at the earliest</h2>
      <form class="home-form" method="POST" action="mail.php">
        <input type="text" name="firstname" class="form-control" id="firstname" placeholder="First Name*" required>
        <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name*" required>
        <input type="email" name="email" class="form-control" id="email" placeholder="Email*" required>
        <input type="tel" class="form-control" name="phonenumber" id="phone-number" placeholder="Phone Number*" required>
        <input type="text" name="propertyaddress" class="form-control" id="property-address" placeholder="Property Address*" required>
        <button type="submit" class="btn btn-nav-outer">Submit</button>
      </form>
      {{-- <?php if ($_GET['submitted'] == 1) : ?>
        <p class="th-alert">Thanks for getting in touch, your query will be answered shortly.</p>
      <?php endif; ?> --}}
      <h1 class="h-black">
        Enhancing Entrances to Revamp your Space with Expert Garage Door Installation and Repair Services
      </h1>
    </div>
  </section>
  
  <section class="what-we-do">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 inner-para">
          <h1 class="h-black what-we-do">
            What We Do?
          </h1>
          <p class="sec-para">Nobi Garage Doors is your trusted partner for premium and expert garage door installation and repair services. With combined experience of over 40 years and integrating latest technology, we offer all types of garage doors installation and repair. Our products include:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;• Sectional garage doors<br>
            &nbsp;&nbsp;&nbsp;&nbsp;• Roll-up garage doors<br>
            &nbsp;&nbsp;&nbsp;&nbsp;• Swing-out carriage doors<br>
            &nbsp;&nbsp;&nbsp;&nbsp;• Side-hinged garage doors<br>
            <!-- <a href="garage-door-installation" class="btn btn-nav-outer selection">View More</a> -->
        </div>
        <div class="col-lg-8 img-sec">
          <div class="box-1">
            <h6>Colour</h6>
            <img width="100%" height="100%" src="assets/images/img-inner-1.webp" alt="Nobi Garage Doors" class="img-inner">
          </div>
          <div class="box-2">
            <h6>Style</h6>
            <img width="100%" height="100%" src="assets/images/img-inner-2.webp" alt="Nobi Garage Doors" class="img-inner">
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="who-we-are">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 img-sec">
          <div class="box-1">
            <h6>Colour</h6>
            <img width="100%" height="100%" src="assets/images/img-inner-3.webp" alt="Nobi Garage Doors" class="img-inner">
            <div class="text-img-inner f-white">SHIMMERING CHAMPAGNE*</div>
          </div>
          <div class="box-2">
            <h6>Style</h6>
            <img width="100%" height="100%" src="assets/images/img-inner-4.webp" alt="Nobi Garage Doors" class="img-inner">
            <div class="text-img-inner f-white">NULLARBOR SMOOTH</div>
          </div>
        </div>
        <div class="col-lg-4">
          <h1 class="h-black what-we-do">
            Who We Are?
          </h1>
          <p class="sec-para">Welcome to Nobi Garage Doors, your premier destination for top-tier garage door installation and repair services. At Nobi, we blend expertise with a commitment to excellence, ensuring durable, stylish solutions. Trust our skilled team for precision installations and efficient repairs, delivering unmatched quality and customer satisfaction. Elevate your space with Nobi Garage Doors.</p>
          <!-- <a href="" class="btn btn-nav-outer selection">LEARN MORE</a> -->
        </div>
      </div>
    </div>
  </section>
  
  <section class="where-we-work">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 content-work">
          <h1 class="h-black what-we-do">
            How We Work?
          </h1>
          <p class="sec-para">You can contact us by filling our contact form or call us directly to book an appointment. Our team comes at your house for inspection and scout your requirements. After we measure and decide what’s best for you, we provide you a custom quote and then get to work immediately.</p>
          <!-- <a href="" class="btn btn-nav-outer selection">ABOUT US</a> -->
        </div>
        <div class="col-lg-8 img-sec">
          <div class="box-1">
            <h6>Colour</h6>
            <img width="100%" height="100%" src="assets/images/img-inner-5.webp" alt="Nobi Garage Doors" class="img-inner">
          </div>
          <div class="box-2">
            <h6>Style</h6>
            <img width="100%" height="100%" src="assets/images/img-inner-6.webp" alt="Nobi Garage Doors" class="img-inner">
          </div>
          <div class="box-3">
            <h6>Configuration</h6>
            <img width="100%" height="100%" src="assets/images/img-inner-7.webp" alt="Nobi Garage Doors" class="img-inner">
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <section class="cms sec-padding">
    <div class="container">
      <div class="row ">
        <div class="col-lg-8 ">
          <div class="promotion-banner">
            <span class="f-white bg-red px-5 py-2 shadowy sale-banner">Bumper Sale</span>
            <h1 class="f-black py-3 s-bold text-left">Install/Upgrade <span class="f-red">your Garage door to </span> <br> Smart Doors
            </h1>
            <p class="py-2">Control your garage door with your mobile app and remote to enhance <br> your convenience. Get it done right with Nobi Garage Doors.</p>
            <div class="details">
              <span class=" f-white bg-red px-5 py-2 text-center shadowy rotate">Start Date 10th JAN!</span>
              <span class=" f-white bg-red px-5 py-2 text-center shadowy rotate">End Date 30th JAN!</span>
              <div class="price-tag">
                <h5 class="original-price f-white text-center">1,800AU$</h5>
                <h1 class="sales-price f-white">1,200 AU$</h1>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <img width="100%" height="100%" src="assets/images/gal2.webp" class="img-fluid" alt="Nobi Garage Doors">
        </div>
      </div>
    </div>
  </section>
  <!-- testimonial -->
  <section class="testimonial sec-padding bg-red">
    <h1 class="f-white text-center pt-5">Customer Reviews</h1>
    <div class="container">
  
      <div class="img-comas"><img width="100%" height="100%" src="assets/images/coma1.webp" alt="Nobi Garage Doors"></div>
      <div class="owl-carousel owl-theme" id="testimonial-carousel">
        <div class="item">
          <p class="text-center py-3 f-white">“Prompt and efficient! Nobi Garage Doors fixed my door in no time. Professional service, fair pricing, and excellent communication. A reliable choice for any garage door needs.”</p>
          <img width="100%" height="100%" src="assets/images/carous1.webp" alt="Nobi Garage Doors" id="test-img" class="pb-3 testimonial-img">
  
          <img width="100%" height="100%" src="assets/images/stars.webp" alt="Nobi Garage Doors" id="test-img">
          <h6 class="f-white pt-2">- Jack Kevin</h6>
        </div>
        <div class="item">
          <p class="text-center py-3 f-white">“Outstanding craftsmanship! Nobi Garage Doors installed a custom door that perfectly complements my home. They exceeded my expectations with attention to detail and quality materials.”</p>
          <img width="100%" height="100%" src="assets/images/carous2.webp" alt="Nobi Garage Doors" id="test-img" class="pb-3">
          <img width="100%" height="100%" src="assets/images/stars.webp" alt="Nobi Garage Doors" id="test-img">
          <h6 class="f-white pt-2">- Olivia Matthews</h6>
        </div>
        <div class="item">
          <p class="text-center py-3 f-white">“Nobi Garage Doors is a game-changer. Fast response, fair pricing, and exceptional service. They turned a stressful repair into a smooth experience. Grateful for their expertise and professionalism.”</p>
          <img width="100%" height="100%" src="assets/images/carous3.webp" alt="Nobi Garage Doors" id="test-img" class="pb-3">
          <img width="100%" height="100%" src="assets/images/stars.webp" alt="Nobi Garage Doors" id="test-img">
          <h6 class="f-white pt-2">- Marcus White</h6>
        </div>
        <div class="item">
          <p class="text-center py-3 f-white">"Nobi Garage Doors transformed my home with a sleek, modern door. The installation was seamless, and the team's expertise exceeded my expectations. Highly recommend!”</p>
          <img width="100%" height="100%" src="assets/images/carous4.webp" alt="Nobi Garage Doors" id="test-img" class="pb-3">
          <img width="100%" height="100%" src="assets/images/stars.webp" alt="Nobi Garage Doors" id="test-img">
          <h6 class="f-white pt-2">- Lisa H.</h6>
        </div>
  
  
      </div>
      <div class="img-comas coma2"><img width="100%" height="100%" src="assets/images/coma2.webp" alt="Nobi Garage Doors"></div>
    </div>
  
  
  </section>
  
  <section class="best">
    <h1 class="f-black text-center">What Makes us Different?</h1>
    <div class="container">
      <div class="row production-row">
        <div class="col-lg-3 inner-col-best" id="years">
          <h4 class="counter-numbers">10+</h4>
          <h6 class="f-black s-bold text-center">Years of experience</h6>
        </div>
        <div class="col-lg-3 inner-col-best" id="products">
          <h4 class="counter-numbers">800+</h4>
          <h6 class="f-black s-bold text-center">Successful Projects</h6>
        </div>
        <div class="col-lg-3 inner-col-best" id="projects">
          <h4 class="counter-numbers">20+</h4>
          <h6 class="f-black s-bold text-center">Qualified and experience technicians</h6>
        </div>
        <div class="col-lg-3 inner-col-best" id="offices">
          <h4 class="counter-numbers">1 Day</h4>
          <h6 class="f-black s-bold text-center">Response time</h6>
        </div>
      </div>
    </div>
  </section>
  
@endsection
