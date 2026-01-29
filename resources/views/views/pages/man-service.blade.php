@extends('layout.master')

@section('css')
<style>
    :root {
        --primary: #9a563a;
        --accent: #c07858;
        --bg: #fdf8f5;
        --dark: #1e293b;
    }

    .services-section {
        background: var(--bg);
    }

    .section-title {
        text-align: center;
        margin-bottom: 50px;
    }

    .section-title h2 {
        font-size: 2.6rem;
        font-weight: 800;
        color: var(--dark);
    }

    .section-title .inner-text {
        color: var(--primary);
    }

    .section-title p {
        color: #64748b;
    }

    /* STATIC CARD */
    .service-card {
        background: #fff;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0, 0, 0, .08);
        margin-bottom: 30px;
    }

    .service-card-header {
        background: linear-gradient(135deg, var(--primary), var(--accent));
        color: #fff;
        padding: 22px 30px;
        font-size: 1.3rem;
        font-weight: 700;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .service-card-header i {
        font-size: 16px;
        opacity: .9;
    }

    .service-card-body {
        padding: 10px 30px 20px;
    }

    .service-item {
        display: flex;
        justify-content: space-between;
        padding: 12px 0;
        border-bottom: 1px dashed #e5e7eb;
        font-size: 15px;
    }

    .service-item:last-child {
        border-bottom: none;
    }

    .service-item span:last-child {
        font-weight: 700;
        color: var(--primary);
    }
</style>
@endsection

@section('content')

<!-- Breadcrumb -->
<div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg-4.jpg">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Our <span class="inner-text">Academy</span></h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>Academy</li>
            </ul>
        </div>
    </div>
</div>

<section class="services-section space-top space-extra-bottom">
    <div class="container">

        <div class="section-title">
            <h2>Our <span class="inner-text">Groom Service</span></h2>
            <p>Comprehensive training programs with complete price details</p>
        </div>
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="service-card">
                    <div class="service-card-header">
                        Men's Grooming
                    </div>
                    <div class="service-card-body">
                        <div class="service-item"><span>Full Face Threading</span><span>₹200</span></div>
                        <div class="service-item"><span>Eye Brow Shaping</span><span>₹100</span></div>
                        <div class="service-item"><span>Face Massage</span><span>₹500</span></div>
                        <div class="service-item"><span>Hair Wash + Conditioner</span><span>₹200</span></div>
                        <div class="service-item"><span>Hair Cut</span><span>₹250</span></div>
                        <div class="service-item"><span>Beard Trim</span><span>₹300</span></div>
                        <div class="service-item"><span>Clean Shave</span><span>₹150</span></div>
                        <div class="service-item"><span>Moustache Colour</span><span>₹200</span></div>
                        <div class="service-item"><span>Hairstyle Change</span><span>₹200</span></div>
                        <div class="service-item"><span>Beard Colour</span><span>₹400</span></div>
                        <div class="service-item"><span>Full Hair Colour (With Ammonia)</span><span>₹800</span></div>
                        <div class="service-item"><span>Full Hair Colour (Without Ammonia)</span><span>₹1000</span></div>
                        <div class="service-item"><span>Fashion Shade Colour</span><span>₹1200</span></div>
                        <div class="service-item"><span>Full Hair Highlights</span><span>₹1500</span></div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="service-card">
                    <div class="service-card-header">
                        Groom Makeup
                    </div>
                    <div class="service-card-body">
                        <div class="service-item"><span>Basic</span><span>₹3000</span></div>
                        <div class="service-item"><span>Luxurious</span><span>₹6000</span></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
