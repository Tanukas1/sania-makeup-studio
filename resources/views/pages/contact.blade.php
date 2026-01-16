@extends('layout.master')
@section('css')
<style>
    .contact-card {
        background: #fff;
        padding: 35px 25px;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
        transition: .3s;
        height: 100%;
    }

    .contact-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
    }

    .contact-icon {
        width: 65px;
        height: 65px;
        border-radius: 50%;
        background: #f6ebe0;
        color: #b8742a;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        margin: 0 auto 20px;
    }

    .contact-card h6 {
        font-weight: 600;
        margin-bottom: 10px;
        color: #222;
    }

    .contact-card p {
        color: #777;
        font-size: 14px;
        margin: 0;
        line-height: 1.6;
    }
</style>
@endsection
@section('content')
<div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg-4.jpg">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Contact <span class="inner-text">Us</span></h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="/">Home</a></li>
                    <li>Contact <span class="inner-text">Us</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="space">
    <div class="container">
        <div class="row g-4 text-center contact-cards mb-30">
            <!-- Address -->
            <div class="col-md-4">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fal fa-headset text-theme"></i>
                    </div>
                    <h6>Visit Our Place</h6>
                    <p>Central Park West LA87, New York</p>
                </div>
            </div>
            <!-- Time -->
            <div class="col-md-4">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fal fa-headset text-theme"></i>
                    </div>
                    <h6>Office Schedule</h6>
                    <p>Monday to Saturday<br>16:00 – 19:00</p>
                </div>
            </div>
            <!-- Email -->
            <div class="col-md-4">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fal fa-headset  text-theme"></i>
                    </div>
                    <h6>Quick Contact</h6>
                    <p>info@example.com</p>
                </div>
            </div>
        </div>
        <div class="row gx-70 mt-30">
            <div class="col-lg-6  mb-lg-0 wow fadeInUp" data-wow-delay="0.2s">
                <div class="text-center text-lg-start"><span class="sec-subtitle">Experience</span>
                    <h2 class="sec-title3 h1 text-uppercase mb-xxl-2 pb-xxl-1">Get in <span
                            class="text-theme">Touch</span></h2>
                    <div class="col-xxl-10 pb-xl-3">
                        <p class="pe-xxl-4">We think your skin should look and refshed matter Nourish your outer
                            inner beauty with our essential</p>
                    </div>
                </div>
                <form action="https://html.vecurosoft.com/wellnez/demo/mail.php" method="POST"
                    class="ajax-contact form-style6">
                    <div class="row">
                        <div class="form-group col-md-6"><input type="text" placeholder="First Name"></div>
                        <div class="form-group col-md-6"><input type="text" placeholder="Last Name"></div>
                        <div class="form-group col-md-6"><input type="email" placeholder="Email Address"></div>
                        <div class="form-group col-md-6"><input type="number" placeholder="Phone Number"></div>
                        <div class="form-group col-12"><select>
                                <option selected="selected" hidden disabled="disabled">Select Subject</option>
                                <option>Makeup Services</option>
                                <option>Hair Services</option>
                                <option>Nail Services</option>
                                <option>Other Services</option>
                            </select></div>
                        <div class="form-group col-12"><textarea placeholder="Write your message"></textarea></div>
                        <div class="from-btn"><button class="vs-btn style7">Make Appointment</button></div>
                    </div>
                </form>

            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="contact-map"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28478.554178206454!2d80.987891!3d26.8457!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399be37a211231ab%3A0x65f2ffdf370974b2!2sBRIDES%20BY%20SANIA%20MALIK%20UNISEX%20SALON!5e0!3m2!1sen!2sin!4v1768219533126!5m2!1sen!2sin" width="600" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>

            </div>
        </div>
    </div>
</section>
@endsection