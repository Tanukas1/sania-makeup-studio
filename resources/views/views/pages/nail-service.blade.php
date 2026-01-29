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

    /* Card Wrapper */
    .service-card {
        background: #fff;
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0, 0, 0, .08);
    }

    /* Header (Accordion Look) */
    .service-card-header {
        background: linear-gradient(135deg, var(--primary), var(--accent));
        color: #fff;
        padding: 22px 30px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-size: 1.3rem;
        font-weight: 700;
    }

    .service-card-header i {
        font-size: 18px;
        opacity: .9;
    }

    /* Body */
    .service-card-body {
        padding: 10px 30px 20px;
        background: #fff;
    }

    /* List */
    .service-item {
        display: flex;
        justify-content: space-between;
        padding: 14px 0;
        border-bottom: 1px dashed #e5e7eb;
        font-size: 15px;
    }

    .service-item:last-child {
        border-bottom: none;
    }

    
</style>
@endsection

@section('content')

<!-- Banner -->
<div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg-4.jpg">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Nail <span class="inner-text">Services</span></h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>Nail Services</li>
            </ul>
        </div>
    </div>
</div>

<section class="services-section space space-extra-bottom">
    <div class="container">
        <div class="section-title">
            <h2>Our <span class="inner-text">Nail Services</span></h2>
            <p>Sania Malik Unisex Salon – Premium Beauty & Grooming</p>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-12">
                <!-- STATIC CARD -->
                <div class="service-card">
                    <div class="service-card-header">
                        Nails Care & Extensions
                    </div>
                    <div class="service-card-body">
                        <div class="service-item"><span>Nail Removal</span><span>₹500</span></div>
                        <div class="service-item"><span>Nail Accessories</span><span>₹100 per Nail</span></div>
                        <div class="service-item"><span>Nail Art</span><span>₹100 per Nail</span></div>
                        <div class="service-item"><span>Gel Nail Paint</span><span>₹700 onward</span></div>
                        <div class="service-item"><span>Temporary Extension with Art</span><span>₹600 onward</span></div>
                        <div class="service-item"><span>Acrylic Extension</span><span>₹2000 onward</span></div>
                        <div class="service-item"><span>Gel Extension</span><span>₹1000 onward</span></div>
                        <div class="service-item"><span>Refilling</span><span>₹1000 onward</span></div>
                        <div class="service-item"><span>French / Ombre Nails</span><span>₹1500 onward</span></div>
                        <div class="service-item"><span>French Tip</span><span>₹700 onward</span></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection