@extends('layout.master')
@section('css')
<style>
    .banner-slider {
        position: relative;
    }

    /* ðŸ”¥ Overlay Content */
    .banner-overlay {
        position: absolute;
        top: 17%;
        left: 4%;
        transform: translateY(-50%);
        z-index: 5;
        color: #fff;
    }

    /* Banner Image */
    .banner-owl img {
        height: 90vh;
        width: 100%;
        object-fit: cover;
    }

    /* Owl Nav Container */
    .banner-owl .owl-nav {
        position: absolute;
        top: 50%;
        width: 100%;
        transform: translateY(-50%);
        display: flex;
        justify-content: space-between;
        pointer-events: none;
    }

    /* Prev & Next Buttons */
    .banner-owl .owl-nav button {
        background: rgba(0, 0, 0, 0.4) !important;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        pointer-events: all;
    }

    .banner-prev,
    .banner-next {
        font-size: 28px;
        color: #fff;
        line-height: 50px;
    }

    /* Left & Right Position */
    .banner-owl .owl-prev {
        margin-left: 20px;
    }

    .banner-owl .owl-next {
        margin-right: 20px;
    }

    /* Banner Image Fix */
    .banner-owl img {
        width: 100%;
        height: 90vh;
        object-fit: cover;
        object-position: center;
    }

    /* Tablet */
    @media (max-width: 991px) {
        .banner-owl img {
            height: 70vh;
        }
    }

    /* Mobile */
    @media (max-width: 767px) {
        .banner-owl img {
            height: 60vh;
            object-fit: cover;
            object-position: center;
        }
    }

    /* Small Mobile */
    @media (max-width: 480px) {
        .banner-owl img {
            height: 55vh;
        }
    }

    .img-1 img {
        width: 300px;
        height: 450px;
        object-fit: cover;
    }

    /* Mobile view */
    @media (max-width: 767px) {
        .img-1 img {
            width: 100%;
            height: 400px;
        }
    }
</style>
@endsection
@section('content')
<section class="banner-slider">
    <div class="media-style3 banner-overlay">
        <div class="circle-btn style2">
            <a href="{{url('/about')}}" class="btn-icon">
                <i class="far fa-arrow-right"></i>
            </a>
            <div class="btn-text">
                <svg viewBox="0 0 150 150">
                    <text>
                        <textPath href="#textPath">
                            Sania Malik Sania Malik Sania Malik Sania Malik
                        </textPath>
                    </text>
                </svg>
            </div>
        </div>
        <div class="media-body">
            <span class="media-label">_skincare inspires</span>
            <p class="media-title">Specialty SPA</p>
        </div>
    </div>
    <div class="owl-carousel banner-owl">
        <div class="item">
            <img src="{{ asset('assets/img/new-home/banner-1.webp') }}" alt="Banner 1">
        </div>

        <!--<div class="item">-->
        <!--    <img src="{{ asset('assets/img/new-home/banner-2.webp') }}" alt="Banner 2">-->
        <!--</div>-->
    </div>
</section>

<!--<div class="bg-theme space-extra">-->
<!--    <div class="container">-->
<!--        <div class="row vs-carousel text-center" data-slide-show="6" data-lg-slide-show="4" data-md-slide-show="3"-->
<!--            data-sm-slide-show="2" data-xs-slide-show="2">-->
<!--            <div class="col-auto"><img src="{{asset('assets/img/new-home/brand/becca.png')}}" alt="brand"></div>-->
<!--            <div class="col-auto"><img src="{{asset('assets/img/new-home/brand/dior.png')}}" alt="brand"></div>-->
<!--            <div class="col-auto"><img src="{{asset('assets/img/new-home/brand/estee-beauty.png')}}" alt="brand"></div>-->
<!--            <div class="col-auto"><img src="{{asset('assets/img/new-home/brand/huda.png')}}" alt="brand"></div>-->
<!--            <div class="col-auto"><img src="{{asset('assets/img/new-home/brand/mac.png')}}" alt="brand"></div>-->
<!--            <div class="col-auto"><img src="{{asset('assets/img/new-home/brand/nars.png')}}" alt="brand"></div>-->
<!--            <div class="col-auto"><img src="{{asset('assets/img/new-home/brand/tarte.png')}}" alt="brand"></div>-->

<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<section class="overflow-hidden space-top space-extra-bottom bg-gradient-2">
    <div class="shape-mockup jump-reverse-img d-none d-xxl-block" data-top="22%" data-left="-7%">
        <div class="curb-shape1"></div>
    </div>
    <!-- <div class="shape-mockup jump-img d-none d-xxxl-block" data-top="17%" data-right="13%"><img
            src="assets/img/shape/leaf-1-4.png" alt="shape"></div> -->
    <div class="container">
        <div class="row gx-55">
            <div class="col-lg-4 col-xxl-auto align-self-center wow fadeInUp" data-wow-delay="0.2s">
                <div class="px-xxl-4 mx-xxl-3 pb-md-4 pb-lg-0">
                    <div class="img-box3">
                        <div class="shape-line"><svg viewBox="0 0 442 357">
                                <path class="shape-line"
                                    d="M220.6 3C339.98 3 437.1 100.12 437.1 219.5V351.99H440.1V219.5C440.1 160.87 417.27 105.75 375.81 64.29C334.35 22.83 279.23 0 220.6 0C161.97 0 106.85 22.83 65.39 64.29C28.67 101.01 6.57 148.46 2 199.56H5.02C15.12 89.5 107.94 3 220.6 3Z" />
                                <path class="shape-dot"
                                    d="M7 198.5C7 200.433 5.433 202 3.5 202C1.567 202 0 200.433 0 198.5C0 196.567 1.567 195 3.5 195C5.433 195 7 196.567 7 198.5Z" />
                                <path class="shape-dot"
                                    d="M442 353.5C442 355.433 440.433 357 438.5 357C436.567 357 435 355.433 435 353.5C435 351.567 436.567 350 438.5 350C440.433 350 442 351.567 442 353.5Z" />
                            </svg></div>
                        <div class="text-shape"><svg viewBox="0 0 408 579">
                                <path id="textboxpath"
                                    d="M0 204C0 91.3339 91.3339 0 204 0V0C316.666 0 408 91.3339 408 204V316.879V375C408 487.666 316.666 579 204 579V579C91.3339 579 0 487.666 0 375V204Z">
                                </path><text>
                                    <textPath href="#textboxpath" startOffset="810">Professional Makeup Artist</textPath>
                                </text>
                            </svg></div>
                        <div class="img-1"><img src="{{asset('assets/img/new-home/about1.webp')}}" alt="about"></div>
                        <div class="img-2 jump-img"><img src="{{asset('assets/img/shape/leaf-1-7.png')}}" alt="about"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xxl align-self-center wow fadeInUp" data-wow-delay="0.3s"><span
                    class="sec-subtitle">Experience SaniaMalik <span class="sec-subtext">25 Years</span></span>
                <h2 class="sec-title2">About <span class="text-theme">Us</span></h2>
                <!-- <p class="quote-text">We think your skin should look and refshed matter your lifestyle Wellnez.</p> -->
                <div class="row gx-25">
                    <div class="col-md-6">
                        <div class="feature-style1">
                            <div class="vs-icon"><img src="assets/img/icon/ab-f-2-1.png" alt="icon"></div>
                            <h3 class="feature-title h5"><a class="text-inherit" href="services-details">Our Story</a></h3>
                            <div class="arrow-shape"><i class="arrow"></i><i class="arrow"></i><i
                                    class="arrow"></i><i class="arrow"></i></div>
                                 <p class="feature-text">
                                    Elevating the essence of luxury in Lucknow, Sania Malik Unisex Salon blends creativity, expertise, and passion to deliver exceptional beauty experiences.
                                </p>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-style1">
                            <div class="vs-icon"><img src="assets/img/icon/ab-f-2-2.png" alt="icon"></div>
                            <h3 class="feature-title h5"><a class="text-inherit" href="services-details">Our Vision</a></h3>
                            <div class="arrow-shape"><i class="arrow"></i><i class="arrow"></i><i
                                    class="arrow"></i><i class="arrow"></i></div>
                            <p class="feature-text">
                                Transcending traditional beauty in Lucknow, Sania Malik Unisex Salon aspires to redefine elegance through premium services and professional excellence.
                            </p>

                        </div>
                    </div>
                    <div class="package-btn text-center"><a href="{{url('/about')}}" class="vs-btn style3">About Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="space">
    <div class="parallax" data-parallax-image="assets/img/bg/sr-bg-10-1.jpg"></div>
    <div class="container z-index-common">
        <div class="row justify-content-center text-center">
            <div class="col-md-9 col-lg-7 col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="title-area"><span class="sec-subtitle text-white">What We Offer</span>
                    <h2 class="sec-title text-white">Our Services</h2>
                </div>
            </div>
        </div>
        <div class="row gx-20 gy-gx service5-slider justify-content-center vs-carousel wow fadeInUp"
            data-wow-delay="0.2s" data-slide-show="4" data-lg-slide-show="3" data-md-slide-show="2"
            data-sm-slide-show="2">
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="service-style5">
                    <div class="service-icon"><img src="assets/img/icons/sr-7-1.svg" alt="icon"></div>
                    <div class="service-content">
                        <h3 class="service-title h4"><a class="text-inherit" href="{{url('/makeup-service')}}">Makeup</a></h3>
                        <p class="service-text">Experience a metamorphosis from tension to tranquility Massage,
                            facials, salon</p>
                    </div><a href="{{url('/makeup-service')}}" class="service-btn"><i class="far fa-plus"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="service-style5">
                    <div class="service-icon"><img src="assets/img/icons/sr-7-2.svg" alt="icon"></div>
                    <div class="service-content">
                        <h3 class="service-title h4"><a class="text-inherit" href="{{url('/hair-service')}}">Hair Service</a></h3>
                        <p class="service-text">Experience a metamorphosis from tension to tranquility Massage,
                            facials, salon</p>
                    </div><a href="{{url('/hair-service')}}" class="service-btn"><i class="far fa-plus"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="service-style5">
                    <div class="service-icon"><img src="assets/img/icons/sr-7-3.svg" alt="icon"></div>
                    <div class="service-content">
                        <h3 class="service-title h4"><a class="text-inherit" href="{{url('/salon-service')}}">Salon Service</a>
                        </h3>
                        <p class="service-text">Experience a metamorphosis from tension to tranquility Massage,
                            facials, salon</p>
                    </div><a href="{{url('/salon-service')}}" class="service-btn"><i class="far fa-plus"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="service-style5">
                    <div class="service-icon"><img src="assets/img/icons/sr-7-4.svg" alt="icon"></div>
                    <div class="service-content">
                        <h3 class="service-title h4"><a class="text-inherit" href="{{url('/nail-service')}}">Nails</a></h3>
                        <p class="service-text">Experience a metamorphosis from tension to tranquility Massage,
                            facials, salon</p>
                    </div><a href="{{url('/nail-service')}}" class="service-btn"><i class="far fa-plus"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="service-style5">
                    <div class="service-icon"><img src="assets/img/icons/sr-7-5.svg" alt="icon"></div>
                    <div class="service-content">
                        <h3 class="service-title h4"><a class="text-inherit" href="{{url('/eye-lash-extension')}}">Eyelash Extension</a></h3>
                        <p class="service-text">Experience a metamorphosis from tension to tranquility Massage,
                            facials, salon</p>
                    </div><a href="{{url('/eye-lash-extension')}}" class="service-btn"><i class="far fa-plus"></i></a>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="service-style5">
                    <div class="service-icon"><img src="assets/img/icons/sr-7-5.svg" alt="icon"></div>
                    <div class="service-content">
                        <h3 class="service-title h4"><a class="text-inherit" href="{{url('/groom-service')}}">Unisex Salon</a></h3>
                        <p class="service-text">Experience a metamorphosis from tension to tranquility Massage,
                            facials, salon</p>
                    </div><a href="{{url('/groom-service')}}" class="service-btn"><i class="far fa-plus"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="space-top space-extra-bottom pt-20">
    <div class="container">
        <div class="title-area text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible;"><span class="sec-subtitle"></span>
            <h2 class="sec-title">Portfolio</h2>
            <div class="sec-shape"><img src="assets/img/shape/sec-shape-1.png" alt="shape"></div>
        </div>
        <div class="row gx-30">
            <div class="mb-30 col-6 col-sm-6 col-lg-3">
                <div class="gallery-box"><img src="{{asset('assets/img/new-home/gallery/1.webp')}}" alt="Gallery Image"
                        class="w-100"> <a href="{{asset('assets/img/new-home/gallery/1.webp')}}" class="popup-image gal-btn"><i
                            class="far fa-plus"></i></a></div>
            </div>
            <div class="mb-30 col-6 col-sm-6 col-lg-3">
                <div class="gallery-box"><img src="{{asset('assets/img/new-home/gallery/2.webp')}}" alt="Gallery Image"
                        class="w-100"> <a href="{{asset('assets/img/new-home/gallery/2.webp')}}" class="popup-image gal-btn"><i
                            class="far fa-plus"></i></a></div>
            </div>
            <div class="mb-30 col-6 col-sm-6 col-lg-3">
                <div class="gallery-box"><img src="{{asset('assets/img/new-home/gallery/3.webp')}}" alt="Gallery Image"
                        class="w-100"> <a href="{{asset('assets/img/new-home/gallery/3.webp')}}" class="popup-image gal-btn"><i
                            class="far fa-plus"></i></a></div>
            </div>
            <div class="mb-30 col-6 col-sm-6 col-lg-3">
                <div class="gallery-box"><img src="{{asset('assets/img/new-home/gallery/4.webp')}}" alt="Gallery Image"
                        class="w-100"> <a href="{{asset('assets/img/new-home/gallery/4.webp')}}" class="popup-image gal-btn"><i
                            class="far fa-plus"></i></a></div>
            </div>
            <div class="mb-30 col-6 col-sm-6 col-lg-3">
                <div class="gallery-box"><img src="{{asset('assets/img/new-home/gallery/5.webp')}}" alt="Gallery Image"
                        class="w-100"> <a href="{{asset('assets/img/new-home/gallery/5.webp')}}" class="popup-image gal-btn"><i
                            class="far fa-plus"></i></a></div>
            </div>
            <!-- <div class="mb-30 col-sm-6 col-lg-3">
                <div class="gallery-box"><img src="{{asset('assets/img/new-home/gallery/6.webp')}}" alt="Gallery Image"
                        class="w-100"> <a href="{{asset('assets/img/new-home/gallery/6.webp')}}" class="popup-image gal-btn"><i
                            class="far fa-plus"></i></a></div>
            </div> -->
            <div class="mb-30 col-6 col-sm-6 col-lg-3">
                <div class="gallery-box"><img src="{{asset('assets/img/new-home/gallery/7.webp')}}" alt="Gallery Image"
                        class="w-100"> <a href="{{asset('assets/img/new-home/gallery/7.webp')}}" class="popup-image gal-btn"><i
                            class="far fa-plus"></i></a></div>
            </div>
            <div class="mb-30 col-6 col-sm-6 col-lg-3">
                <div class="gallery-box"><img src="{{asset('assets/img/new-home/gallery/8.webp')}}" alt="Gallery Image"
                        class="w-100"> <a href="{{asset('assets/img/new-home/gallery/8.webp')}}" class="popup-image gal-btn"><i
                            class="far fa-plus"></i></a></div>
            </div>
            <div class="mb-30 col-6 col-sm-6 col-lg-3">
                <div class="gallery-box"><img src="{{asset('assets/img/new-home/gallery/9.webp')}}" alt="Gallery Image"
                        class="w-100"> <a href="{{asset('assets/img/new-home/gallery/9.webp')}}" class="popup-image gal-btn"><i
                            class="far fa-plus"></i></a></div>
            </div>
            <div class="mb-30 col-6 col-sm-6 col-lg-3">
                <div class="gallery-box"><img src="{{asset('assets/img/new-home/gallery/10.webp')}}" alt="Gallery Image"
                        class="w-100"> <a href="{{asset('assets/img/new-home/gallery/10.webp')}}" class="popup-image gal-btn"><i
                            class="far fa-plus"></i></a></div>
            </div>
            <!-- <div class="mb-30 col-6 col-sm-6 col-lg-3">
                <div class="gallery-box"><img src="{{asset('assets/img/new-home/gallery/11.webp')}}" alt="Gallery Image"
                        class="w-100"> <a href="{{asset('assets/img/new-home/gallery/11.webp')}}" class="popup-image gal-btn"><i
                            class="far fa-plus"></i></a></div>
            </div> -->
            <div class="mb-30 col-6 col-sm-6 col-lg-3">
                <div class="gallery-box"><img src="{{asset('assets/img/new-home/gallery/12.webp')}}" alt="Gallery Image"
                        class="w-100"> <a href="{{asset('assets/img/new-home/gallery/12.webp')}}" class="popup-image gal-btn"><i
                            class="far fa-plus"></i></a></div>
            </div>
            <div class="mb-30 col-6 col-sm-6 col-lg-3">
                <div class="gallery-box"><img src="{{asset('assets/img/new-home/gallery/13.webp')}}" alt="Gallery Image"
                        class="w-100"> <a href="{{asset('assets/img/new-home/gallery/13.webp')}}" class="popup-image gal-btn"><i
                            class="far fa-plus"></i></a></div>
            </div>
            <div class="mb-30 col-6 col-sm-6 col-lg-3">
                <div class="gallery-box"><img src="{{asset('assets/img/new-home/gallery/14.webp')}}" alt="Gallery Image"
                        class="w-100"> <a href="{{asset('assets/img/new-home/gallery/14.webp')}}" class="popup-image gal-btn"><i
                            class="far fa-plus"></i></a></div>
            </div>

            <div class="col-12 text-center mb-30 pt-lg-3"><a href="{{url('/portfolio')}}" class="vs-btn style12">View More Gallery<i
                        class="ps-2 pe-0 far fa-arrow-right"></i></a></div>
        </div>
    </div>
</section>


<section class="space" data-bg-src="assets/img/bg/sr-bg-9-1.jpg">
    <!-- <div class="shape-mockup jump-img d-none d-xl-block" data-right="0" data-bottom="-9%"><img
            src="assets/img/shape/b-s-1-1.png" alt="shape"></div>
    <div class="shape-mockup jump-reverse-img d-none d-xl-block" data-left="0" data-bottom="-13%"><img
            src="assets/img/shape/b-s-1-2.png" alt="shape"></div> -->
    <div class="container">
        <div class="row gx-0">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                <form action="#" class="form-style7">
                    <div class="media-style6">
                        <div class="media-icon"><i class="fal fa-calendar-alt"></i></div>
                        <div class="media-bod"><span class="media-label">Take support at any time</span>
                            <p class="media-title">Book An Appointment</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6"><input type="text" placeholder="Name"></div>
                         <div class="form-group col-md-6"><input type="number" placeholder="Phone Number"></div>
                        <div class="form-group col-md-12"><input type="email" placeholder="Email Address"></div>
                        <div class="form-group col-12"><select>
                                <option disabled="disabled" hidden selected="selected">Select Subject</option>
                                <option>Makeup Services</option>
                                <option>Hair Services</option>
                                <option>Nail Services</option>
                                <option>Other Services</option>
                            </select></div>
                        <div class="form-group col-12"><textarea placeholder="Write your message"></textarea></div>
                        <div class="form-btn col-12"><button class="vs-btn" type="submit">Make Appointment</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6">
                <div class="schedule-box1">
                    <div class="schedule-img mega-hover"><img src="assets/img/bg/schedule-img-1-1.jpg" alt="banner">
                    </div>
                    <div class="schedule-content"><span class="schedule-label">Time Schedule</span>
                        <h2 class="schedule-title">Opening Hours</h2>
                        <p class="schedule-time">Mon-Fri: 9 AM - 6 PM</p>
                        <p class="schedule-time">Saturday: 10 AM - 3 PM</p>
                        <p class="schedule-time">Sunday: Closed</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="space-top space-extra-bottom bg-light">

    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-md-9 col-lg-7 col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="title-area">
                    <h2 class="sec-title4">Client's Review</h2>
                    <p class="sec-text">Access to our fitness centre and pool is free to all our hotel guests. For
                        non guests membership packages are available.</p>
                </div>
            </div>
        </div>
        <div class="row vs-carousel wow fadeInUp" data-wow-delay="0.2s" data-slide-show="2" data-lg-slide-show="2"
            data-center-mode="true" data-xl-center-mode="true" data-ml-center-mode="true"
            data-lg-center-mode="true">
            <div class="col-lg-4">
                <div class="testi-style3"><span class="testi-icon"><i class="fas fa-quote-right"></i></span>
                    <div class="testi-avater"><img src="assets/img/testi/testi-auth-3-1.png"
                            alt="Testimonial Author"></div>
                    <div class="testi-content">
                        <div class="testi-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <p class="testi-text">I have got my make up done from Sania on many occasions. She is just perfect in her art of makeup. She has magic in her hands. She and her team listens to us patiently whatever we require. I would highly recommend Sania and her team to all of you. </p>
                        <h3 class="testi-name">Tanya Manas</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testi-style3"><span class="testi-icon"><i class="fas fa-quote-right"></i></span>
                    <div class="testi-avater"><img src="assets/img/testi/testi-auth-3-2.png"
                            alt="Testimonial Author"></div>
                    <div class="testi-content">
                        <div class="testi-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <p class="testi-text">Thank you so much #bridesbysaniamalikunisexsalon And thank you Gurleen di for this beautiful nails extension for this amazing offer price 💖Thank you so much ❤️Would highly recommend #bridesbysaniamalikunisexsalon for the extensions</p>
                        <h3 class="testi-name">Riya Rao</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testi-style3"><span class="testi-icon"><i class="fas fa-quote-right"></i></span>
                    <div class="testi-avater"><img src="assets/img/testi/testi-auth-3-3.png"
                            alt="Testimonial Author"></div>
                    <div class="testi-content">
                        <div class="testi-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <p class="testi-text">I must say this is the best place with best professional etiquettes with heartwarming gestures by Sania and all her staff. I chose her for my younger sister's wedding and I think I will choose here over and over again for all my pals and known. What I expected and narrated to Sania, she did exactly the same. I would definitely want to highlight that the makeup stayed in place from afternoon to the next day's morning. ..Go for this artist and you'll not regret❤</p>
                        <h3 class="testi-name">Sameeksha Srivastava</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testi-style3"><span class="testi-icon"><i class="fas fa-quote-right"></i></span>
                    <div class="testi-avater"><img src="assets/img/testi/testi-auth-3-3.png"
                            alt="Testimonial Author"></div>
                    <div class="testi-content">
                        <div class="testi-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <p class="testi-text">I had a haircut at Brides by Sania Malik and I couldn't be happier with the outcome. Stylist Rajkumar understood what I wanted and delivered a fantastic haircut. The attention to detail and skill showcased in every snip made the experience exceptional. My new look has garnered compliments, and I'm genuinely satisfied with the service. Highly recommend it for a top-notch haircut experience!</p>
                        <h3 class="testi-name">Shrashank Tripathi</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="testi-style3"><span class="testi-icon"><i class="fas fa-quote-right"></i></span>
                    <div class="testi-avater"><img src="assets/img/testi/testi-auth-3-3.png"
                            alt="Testimonial Author"></div>
                    <div class="testi-content">
                        <div class="testi-rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i
                                class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                        <p class="testi-text">I was super impressed with the care and attention I received at my facial appointment at #bridesbysaniamalik. Ruby welcomed me in with a friendly smile. First Impressions count so much! Ruby is truly Great! She was very tentative and thorough on explaining with detail what she was doing and what products she was using on my face. I felt relaxed and at ease. I was pretty impressed with the final result. My face and neck have never felt better. Thanks Again #bridesbysaniamalik, your services are Amazing! I definitely will recommend you to my friends and family. 👍👍</p>
                        <h3 class="testi-name">Neha Raj</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('js')
<script>
    $(document).ready(function() {
        $('.banner-owl').owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplayHoverPause: false,
            nav: true, // âœ… PRE / NEXT ENABLE
            dots: false,
            navText: [
                "<span class='banner-prev'>&#10094;</span>",
                "<span class='banner-next'>&#10095;</span>"
            ]
        });
    });
</script>

@endsection