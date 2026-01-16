@extends('layout.master')
@section('css')
<style>
    :root {
        --primary: #9a563a;
        --accent: #c07858;
        --bg: #fdf8f5;
        --dark: #1e293b;
    }

    /* Section */
    .services-section {
        padding: 70px 0;
        background: var(--bg);
    }

    /* Title */
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

    /* Accordion */
    .accordion-item {
        border: 0;
        border-radius: 18px;
        margin-bottom: 25px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0, 0, 0, .08);
    }

    .accordion-header {
        background: linear-gradient(135deg, var(--primary), var(--accent));
    }

    .accordion-button {
        background: transparent;
        color: #fff;
        font-size: 1.3rem;
        font-weight: 700;
        padding: 22px 30px;
        box-shadow: none !important;
    }

    .accordion-button:not(.collapsed) {
        background: linear-gradient(135deg, var(--primary), var(--accent));
        color: #fff;
    }

    .accordion-button::after {
        filter: brightness(100);
    }

    .accordion-body {
        background: #fff;
        padding: 0px 25px;
    }

    /* Service Cards */
    .service-category {
        background: #fff;
        border-radius: 16px;
        padding: 35px;
        margin-bottom: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, .07);
    }

    .service-header {
        display: flex;
        align-items: center;
        gap: 15px;
        margin-bottom: 20px;
        border-bottom: 3px solid var(--primary);
        padding-bottom: 15px;
    }

    .service-icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: linear-gradient(135deg, var(--primary), var(--accent));
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 22px;
    }

    .service-header h3 {
        font-weight: 800;
        margin: 0;
    }

    /* List */
    .service-item {
        display: flex;
        justify-content: space-between;
        padding: 12px 0;
        border-bottom: 1px dashed #e5e7eb;
    }

    .service-item:last-child {
        border: none;
    }

    .service-price {
        font-weight: 700;
        color: var(--primary);
    }
</style>
@endsection

@section('content')

<!-- Breadcrumb Section -->
<div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg-4.jpg">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Our <span class="inner-text">Academy</span></h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="/">Home</a></li>
                    <li>Academy</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Services Section with Tabs -->
<section class="services-section">
    <div class="container">
        <div class="section-title">
            <h2>Our <span class="inner-text">Services & Courses</span></h2>
            <p>Comprehensive training programs with complete price details</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed"
                            data-bs-toggle="collapse"
                            data-bs-target="#mensGrooming">
                            Men's Grooming
                        </button>
                    </h2>

                    <div id="mensGrooming" class="accordion-collapse collapse">
                        <div class="accordion-body">

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
                            <div class="service-item"><span>Full Hair Colour (Fashion Shade)</span><span>₹1200</span></div>
                            <div class="service-item"><span>Full Hair Highlights</span><span>₹1500</span></div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed"
                            data-bs-toggle="collapse"
                            data-bs-target="#groomMakeup">
                            Groom Makeup
                        </button>
                    </h2>

                    <div id="groomMakeup" class="accordion-collapse collapse">
                        <div class="accordion-body">

                            <div class="service-item"><span>Basic</span><span>₹3000</span></div>
                            <div class="service-item"><span>Luxurious</span><span>₹6000</span></div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection