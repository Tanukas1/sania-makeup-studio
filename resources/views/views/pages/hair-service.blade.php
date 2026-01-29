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
            <h1 class="breadcumb-title">Hair <span class="inner-text">Services</span></h1>
            <ul class="breadcumb-menu">
                <li><a href="/">Home</a></li>
                <li>Hair Services</li>
            </ul>
        </div>
    </div>
</div>

<section class="services-section space space-extra-bottom">
    <div class="container">

        <div class="section-title">
            <h2>Our <span class="inner-text">Hair Services</span></h2>
            <p>Sania Malik Unisex Salon – Premium Beauty & Grooming</p>
        </div>

        <div class="accordion" id="servicesAccordion">
            <div class="row">
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