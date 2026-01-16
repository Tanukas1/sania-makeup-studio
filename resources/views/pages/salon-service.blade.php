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

<section class="services-section">
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
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#s9">
                                Hair Services
                            </button>
                        </h2>
                        <div id="s9" class="accordion-collapse collapse">
                            <div class="accordion-body">

                                <div class="service-item">
                                    <span>Hair Wash (Shampoo) (Blast Dry)</span>
                                    <span>₹250 onward</span>
                                </div>

                                <div class="service-item">
                                    <span>Keratin Wash (Blast Dry)</span>
                                    <span>₹450 onward</span>
                                </div>

                                <div class="service-item">
                                    <span>Hair Wash + Blow Dry</span>
                                    <span>₹600 onward</span>
                                </div>

                                <div class="service-item">
                                    <span>Moroccan Hair Wash</span>
                                    <span>₹500 onward</span>
                                </div>

                                <div class="service-item">
                                    <span>Nanoplastia Hair Wash</span>
                                    <span>₹500 onward</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#s10">
                                Hair Cuts
                            </button>
                        </h2>
                        <div id="s10" class="accordion-collapse collapse">
                            <div class="accordion-body">

                                <div class="service-item">
                                    <span>Basic Cut</span>
                                    <span>₹300</span>
                                </div>

                                <div class="service-item">
                                    <span>Fringe Cut</span>
                                    <span>₹300</span>
                                </div>

                                <div class="service-item">
                                    <span>Normal Haircut & Styling</span>
                                    <span>₹500</span>
                                </div>

                                <div class="service-item">
                                    <span>Change of Styling Haircut</span>
                                    <span>₹1000</span>
                                </div>

                                <div class="service-item">
                                    <span>Kids Hair Cut</span>
                                    <span>₹200</span>
                                </div>

                                <div class="service-item">
                                    <span>Split End Removal</span>
                                    <span>₹800</span>
                                </div>

                                <div class="service-item">
                                    <span>Change of Styling Kids Haircut</span>
                                    <span>₹500</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#s11">
                                Hair Care
                            </button>
                        </h2>
                        <div id="s11" class="accordion-collapse collapse">
                            <div class="accordion-body">

                                <!-- Head Massage -->
                                <div class="service-item fw-bold mt-2">
                                    <span>Head Massage (Without Shampoo)</span>
                                    <span></span>
                                </div>
                                <div class="service-item"><span>Coconut Oil</span><span>₹600 onward</span></div>
                                <div class="service-item"><span>Olive Oil</span><span>₹500 onward</span></div>
                                <div class="service-item"><span>Moroccan Oil</span><span>₹1000 onward</span></div>

                                <!-- Hair Spa -->
                                <div class="service-item fw-bold mt-3">
                                    <span>Hair Spa</span>
                                    <span>Short / Medium / Long</span>
                                </div>
                                <div class="service-item"><span>Hydrating</span><span>₹1000 / ₹1400 / ₹2000 onward</span></div>
                                <div class="service-item"><span>Anti Frizz Hair Spa</span><span>₹2000 / ₹2500 / ₹3000 onward</span></div>
                                <div class="service-item"><span>Anti Dandruff</span><span>₹2000 / ₹2500 / ₹3000 onward</span></div>
                                <div class="service-item"><span>Anti Hair Fall</span><span>₹2000 / ₹2500 / ₹3000 onward</span></div>
                                <div class="service-item"><span>Moroccan Spa</span><span>₹3000 / ₹4000 / ₹5000 onward</span></div>
                                <div class="service-item"><span>Macademia Treatment</span><span>₹2500 / ₹3500 / ₹4500 onward</span></div>
                                <div class="service-item"><span>Olaplex Treatment</span><span>₹2000 / ₹3000 / ₹4000 onward</span></div>

                                <!-- Texture Services -->
                                <div class="service-item fw-bold mt-3">
                                    <span>Texture Services</span>
                                    <span>Short / Medium / Long</span>
                                </div>
                                <div class="service-item"><span>Keratin</span><span>₹3500 / ₹4500 / ₹5500 onward</span></div>
                                <div class="service-item"><span>Rebonding</span><span>₹4500 / ₹5500 / ₹6500 onward</span></div>
                                <div class="service-item"><span>Smoothening</span><span>₹4000 / ₹5000 / ₹6000 onward</span></div>
                                <div class="service-item"><span>Botox</span><span>₹5000 / ₹6000 / ₹7000 onward</span></div>
                                <div class="service-item"><span>Nanoplastia Treatment</span><span>₹6000 / ₹8000 / ₹10000 onward</span></div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#s12">
                                Hair Colour Techniques
                            </button>
                        </h2>
                        <div id="s12" class="accordion-collapse collapse">
                            <div class="accordion-body">

                                <div class="service-item fw-bold">
                                    <span>Root Touchups</span>
                                    <span></span>
                                </div>

                                <div class="service-item">
                                    <span>Standard (Majirel Equal)</span>
                                    <span>₹1200 onward</span>
                                </div>

                                <div class="service-item">
                                    <span>Premium (Inoa / Equal)</span>
                                    <span>₹1400 onward</span>
                                </div>

                                <div class="service-item">
                                    <span>Global Hair Colour (Majirel)</span>
                                    <span>₹4000 onward</span>
                                </div>

                                <div class="service-item">
                                    <span>Balayage Colour</span>
                                    <span>₹6000 onward</span>
                                </div>

                                <div class="service-item">
                                    <span>Colour Change</span>
                                    <span>₹8000 onward</span>
                                </div>

                                <div class="service-item">
                                    <span>Crown Area Highlights</span>
                                    <span>₹2000 onward</span>
                                </div>

                                <div class="service-item">
                                    <span>Full Hair Highlights</span>
                                    <span>₹3500 onward</span>
                                </div>

                                <div class="service-item">
                                    <span>Per-Foil Highlights</span>
                                    <span>₹500 onward</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#s13">
                                Hair Styling
                            </button>
                        </h2>
                        <div id="s13" class="accordion-collapse collapse">
                            <div class="accordion-body">

                                <div class="service-item">
                                    <span>Express Blow Dry</span>
                                    <span>₹600 onward</span>
                                </div>

                                <div class="service-item">
                                    <span>Ironing</span>
                                    <span>₹1000 onward</span>
                                </div>

                                <div class="service-item">
                                    <span>Tong Curling</span>
                                    <span>₹1000 onward</span>
                                </div>

                                <div class="service-item">
                                    <span>Hair Ups / Buns</span>
                                    <span>₹1000 onward</span>
                                </div>

                                <div class="service-item">
                                    <span>Braids</span>
                                    <span>₹1500 onward</span>
                                </div>

                                <div class="service-item">
                                    <span>Creative Hair Styling</span>
                                    <span>Price on Consultation</span>
                                </div>

                                <div class="service-item">
                                    <span>Crimping</span>
                                    <span>₹500 onward</span>
                                </div>

                                <div class="service-item fst-italic text-muted mt-2">
                                    <span>Wash Not Included</span>
                                    <span></span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#s14">
                                Nails Care & Extensions
                            </button>
                        </h2>
                        <div id="s14" class="accordion-collapse collapse">
                            <div class="accordion-body">

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
                <div class="col-md-6">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#s15">
                                Eyelashes Extension
                            </button>
                        </h2>
                        <div id="s15" class="accordion-collapse collapse">
                            <div class="accordion-body">

                                <div class="service-item"><span>Natural</span><span>₹3000</span></div>
                                <div class="service-item"><span>Heavy</span><span>₹4000</span></div>
                                <div class="service-item"><span>Mink</span><span>₹6000</span></div>

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
                <!-- HAIR EXTENSION -->
                <div class="col-md-6">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed"
                                data-bs-toggle="collapse"
                                data-bs-target="#hairExtension">
                                Hair Extension
                            </button>
                        </h2>

                        <div id="hairExtension" class="accordion-collapse collapse">
                            <div class="accordion-body">
                                <div class="service-item">
                                    <span>Short Hair (18 to 20 Inch)</span>
                                    <span>₹25,000</span>
                                </div>
                                <div class="service-item">
                                    <span>Medium Hair (22 to 24 Inch)</span>
                                    <span>₹30,000</span>
                                </div>
                                <div class="service-item">
                                    <span>Long Hair (26 to 28 Inch)</span>
                                    <span>₹35,000</span>
                                </div>
                                <div class="service-item">
                                    <span>Extra Long Hair (Onwards)</span>
                                    <span>₹40,000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection