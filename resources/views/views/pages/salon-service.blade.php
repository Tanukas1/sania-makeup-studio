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

<!-- Banner -->
<div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg-4.jpg">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Salon <span class="inner-text">Services</span></h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>Salon Services</li>
            </ul>
        </div>
    </div>
</div>

<section class="services-section space-top space-extra-bottom">
    <div class="container">
        <div class="section-title">
            <h2>Our <span class="inner-text">Salon Services</span></h2>
            <p>Sania Malik Unisex Salon – Premium Beauty & Grooming</p>
        </div>
        <div class="accordion" id="servicesAccordion">
            <!-- THREADING -->
            <div class="row">
                <div class="col-md-6">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#s1">
                                Threading
                            </button>
                        </h2>
                        <div id="s1" class="accordion-collapse collapse show">
                            <div class="accordion-body">
                                <div class="service-item"><span>Eyebrows</span><span>₹60</span></div>
                                <div class="service-item"><span>Chin</span><span>₹50</span></div>
                                <div class="service-item"><span>Upper Lip</span><span>₹50</span></div>
                                <div class="service-item"><span>Side Lock</span><span>₹70</span></div>
                                <div class="service-item"><span>Forehead</span><span>₹50</span></div>
                                <div class="service-item"><span>Full Face</span><span>₹400</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#s2">
                                Bleach
                            </button>
                        </h2>
                        <div id="s2" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <div class="service-item"><span>Face</span><span>₹600</span></div>
                                <div class="service-item"><span>Half Arms</span><span>₹300</span></div>
                                <div class="service-item"><span>Feet</span><span>₹300</span></div>
                                <div class="service-item"><span>Full Arms</span><span>₹500</span></div>
                                <div class="service-item"><span>Under Arms</span><span>₹250</span></div>
                                <div class="service-item"><span>Front/Back</span><span>₹600</span></div>
                                <div class="service-item"><span>Full Body</span><span>₹3500</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#s3">
                                D-Tan
                            </button>
                        </h2>
                        <div id="s3" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <div class="service-item"><span>Sara D-Tan Pack</span><span>₹600</span></div>
                                <div class="service-item"><span>O3 D-Tan Pack</span><span>₹1000</span></div>
                                <div class="service-item"><span>Half Back / Front</span><span>₹300</span></div>
                                <div class="service-item"><span>Full Back / Front</span><span>₹600</span></div>
                                <div class="service-item"><span>Full Body</span><span>₹3500</span></div>
                                <div class="service-item"><span>Hand D-Tan Pack</span><span>₹700</span></div>
                                <div class="service-item"><span>Legs D-Tan Pack</span><span>₹1000</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#s4">
                                Waxing
                            </button>
                        </h2>
                        <div id="s4" class="accordion-collapse collapse">
                            <div class="accordion-body">

                                <!-- Price Heading -->
                                <div class="service-item fw-bold border-bottom pb-2 mb-2">
                                    <span>Service</span>
                                    <span>Honey / Rica</span>
                                </div>

                                <div class="service-item">
                                    <span>Chin / Upper Lips / Lower Lips / Nose</span>
                                    <span>₹100 / ₹150</span>
                                </div>

                                <div class="service-item">
                                    <span>Side Lock</span>
                                    <span>₹150 / ₹200</span>
                                </div>

                                <div class="service-item">
                                    <span>Full Face</span>
                                    <span>₹500 / ₹600</span>
                                </div>

                                <div class="service-item">
                                    <span>Full Arms</span>
                                    <span>₹200 / ₹500</span>
                                </div>

                                <div class="service-item">
                                    <span>Under Arms</span>
                                    <span>₹100 / ₹200</span>
                                </div>

                                <div class="service-item">
                                    <span>Half Legs</span>
                                    <span>₹250 / ₹350</span>
                                </div>

                                <div class="service-item">
                                    <span>Full Legs</span>
                                    <span>₹500 / ₹700</span>
                                </div>

                                <div class="service-item">
                                    <span>Full Back / Front</span>
                                    <span>₹200 / ₹500</span>
                                </div>

                                <div class="service-item">
                                    <span>Bikini</span>
                                    <span>₹1500 / ₹2000</span>
                                </div>

                                <div class="service-item">
                                    <span>Full Body (Without Bikini Line)</span>
                                    <span>₹2000 / ₹3000</span>
                                </div>

                                <div class="service-item">
                                    <span>Tummy</span>
                                    <span>₹400 / ₹600</span>
                                </div>

                                <div class="service-item">
                                    <span>Buttocks Wax</span>
                                    <span>₹400 / ₹600</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#s5">
                                Manicure & Pedicure
                            </button>
                        </h2>
                        <div id="s5" class="accordion-collapse collapse">
                            <div class="accordion-body">

                                <!-- Heading -->
                                <div class="service-item fw-bold border-bottom pb-2 mb-2">
                                    <span>Service</span>
                                    <span>Manicure / Pedicure</span>
                                </div>

                                <div class="service-item">
                                    <span>Basic</span>
                                    <span>₹500 / ₹600</span>
                                </div>

                                <div class="service-item">
                                    <span>D-Tan</span>
                                    <span>₹800 / ₹1000</span>
                                </div>

                                <div class="service-item">
                                    <span>Café H & F</span>
                                    <span>₹1000 / ₹1200</span>
                                </div>

                                <div class="service-item">
                                    <span>Pedipie</span>
                                    <span>₹800 / ₹900</span>
                                </div>

                                <div class="service-item">
                                    <span>Spa</span>
                                    <span>₹1000 / ₹1200</span>
                                </div>

                                <div class="service-item">
                                    <span>Alga</span>
                                    <span>₹1500 / ₹1800</span>
                                </div>

                                <div class="service-item">
                                    <span>Bombini Ice Cream Pedicure</span>
                                    <span>₹1500 / ₹2000</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#s6">
                                Finishing Touches
                            </button>
                        </h2>
                        <div id="s6" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <div class="service-item"><span>Shape & File</span><span>₹200</span></div>
                                <div class="service-item"><span>Shape & Polish</span><span>₹200</span></div>
                                <div class="service-item"><span>Nail Colour Change</span><span>₹100</span></div>
                                <div class="service-item"><span>Shape & French Polish</span><span>₹500</span></div>
                                <div class="service-item"><span>Gel Nail Paint</span><span>₹500</span></div>
                                <div class="service-item"><span>Nail Extension Removal</span><span>₹500</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#s7">
                                Express Cleaning
                            </button>
                        </h2>
                        <div id="s7" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <div class="service-item"><span>Regular Cleanup</span><span>₹500</span></div>
                                <div class="service-item"><span>Fruit Cleanup</span><span>₹700</span></div>
                                <div class="service-item"><span>D-tan Cleanup</span><span>₹1000</span></div>
                                <div class="service-item"><span>Acne Reduction Cleanup</span><span>₹1500</span></div>
                                <div class="service-item"><span>Insta Fair Cleanup</span><span>₹1500</span></div>
                                <div class="service-item"><span>03 Cleanup</span><span>₹2000</span></div>
                                <div class="service-item"><span>Kanpeki Cleanup</span><span>₹2000</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#s8">
                                Skin Rituals (Facials)
                            </button>
                        </h2>
                        <div id="s8" class="accordion-collapse collapse">
                            <div class="accordion-body">

                                <div class="service-item">
                                    <span>Raga Facial</span>
                                    <span>₹1500</span>
                                </div>

                                <div class="service-item">
                                    <span>Fruit Punch</span>
                                    <span>₹2000</span>
                                </div>

                                <div class="service-item">
                                    <span>Cheryl's Facial</span>
                                    <span>₹2500</span>
                                </div>

                                <div class="service-item">
                                    <span>Skin Lightning Facial</span>
                                    <span>₹3000</span>
                                </div>

                                <div class="service-item">
                                    <span>Agelock Facial</span>
                                    <span>₹3500</span>
                                </div>

                                <div class="service-item">
                                    <span>O3 Diamond Facial</span>
                                    <span>₹4000</span>
                                </div>

                                <div class="service-item">
                                    <span>Casmara Facial</span>
                                    <span>₹4500</span>
                                </div>

                                <div class="service-item">
                                    <span>Kanpeki Facial</span>
                                    <span>₹5000</span>
                                </div>

                                <div class="service-item">
                                    <span>Hydra Facial</span>
                                    <span>₹6000</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
              
                <div class="col-md-6">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#s16">
                                Body Polishing
                            </button>
                        </h2>
                        <div id="s16" class="accordion-collapse collapse">
                            <div class="accordion-body">

                                <div class="service-item fw-bold">
                                    <span>90 Minutes</span>
                                    <span></span>
                                </div>

                                <div class="service-item fst-italic text-muted">
                                    <span>(Cleansing + Body Massage + Exfoliation + Steam + Shower)</span>
                                    <span></span>
                                </div>

                                <div class="service-item"><span>Fresh Fruit</span><span>₹1500</span></div>
                                <div class="service-item"><span>Rose</span><span>₹2000</span></div>
                                <div class="service-item"><span>Chocolate Delight</span><span>₹2200</span></div>
                                <div class="service-item"><span>De-Tan</span><span>₹3000</span></div>
                                <div class="service-item"><span>Premium Polishing</span><span>₹4000</span></div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#s17">
                                Body Massage
                            </button>
                        </h2>
                        <div id="s17" class="accordion-collapse collapse">
                            <div class="accordion-body">

                                <div class="service-item"><span>Back Massage (20 Min)</span><span>₹2000</span></div>
                                <div class="service-item"><span>Foot Reflexology (10 Min)</span><span>₹400</span></div>
                                <div class="service-item"><span>Hand Reflexology (10 Min)</span><span>₹400</span></div>
                                <div class="service-item"><span>Head + Back + Shoulder Massage (25 Min)</span><span>₹1500</span></div>
                                <div class="service-item"><span>Aroma Massage (30 Min)</span><span>₹2000</span></div>
                                <div class="service-item"><span>Olive Oil Massage (30 Min)</span><span>₹2500</span></div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


@endsection