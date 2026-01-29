@extends('layout.master')
@section('css')
<style>
    .makeup-section {
        background: #faf7f5;
    }

    .makeup-title {
        text-align: center;
        margin-bottom: 60px;
    }

    .makeup-title h2 {
        font-size: 38px;
        font-weight: 700;
        color: #9a563a;
    }

    .makeup-title p {
        color: #777;
        max-width: 700px;
        margin: auto;
    }

    .makeup-card {
        background: #fff;
        border-radius: 18px;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.08);
        overflow: hidden;
        border-top: 6px solid #9a563a;
    }

    .makeup-card-header {
        background: linear-gradient(135deg, #9a563a, #7b3f29);
        color: #fff;
        padding: 25px;
        text-align: center;
    }

    .makeup-card-header h3 {
        margin: 0;
        font-size: 26px;
        font-weight: 700;
        color: #fff;
    }

    .makeup-table .item {
        display: flex;
        justify-content: space-between;
        padding: 14px 25px;
        border-bottom: 1px dashed #ddd;
    }

    .makeup-table .item:last-child {
        border-bottom: none;
    }

    .makeup-table .item span:first-child {
        font-weight: 600;
    }

    .makeup-table .item span:last-child {
        color: #9a563a;
        font-weight: 700;
    }

    .makeup-note {
        background: #fdf4f0;
        padding: 20px;
        border-left: 4px solid #9a563a;
        margin: 20px;
        border-radius: 10px;
        font-size: 15px;
    }

    .venue-box {
        margin-top: 40px;
        background: #9a563a;
        color: #fff;
        padding: 25px;
        text-align: center;
        border-radius: 15px;
        font-size: 20px;
        font-weight: 600;
    }
</style>
@endsection
@section('content')
<div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg-4.jpg">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Makeup </h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="/">Home</a></li>
                    <li>Makeup </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<section class="makeup-section space-top space-extra-bottom">
    <div class="container">
        <div class="makeup-title">
            <h2>Professional Makeup Services</h2>
            <p>Premium bridal and party makeup by certified artists using high-end products for flawless beauty.</p>
        </div>
        <div class="row g-4">
            <!-- Sania Malik -->
            <div class="col-lg-6">
                <div class="makeup-card">
                    <div class="makeup-card-header">
                        <h3>Makeup by Sania Malik</h3>
                    </div>
                    <div class="makeup-table">
                        <div class="item"><span>Party Makeup</span><span>₹8,000/-</span></div>
                        <div class="item"><span>Haldi / Mehndi</span><span>₹10,000/-</span></div>
                        <div class="item"><span>Engagement / Cocktail / Sangeet</span><span>₹18,000/-</span></div>
                        <div class="item"><span>Bridal (HD)</span><span>₹30,000/-</span></div>
                        <div class="item"><span>Reception</span><span>₹25,000/-</span></div>
                    </div>
                    <div class="makeup-note">
                        Includes: Lashes, Lenses, Hairstyling, Draping, Makeup & Nail Paint <br>
                        <strong>Additional:</strong> ₹5,000/- for Air Brush
                    </div>
                </div>
            </div>
            <!-- Senior Artist -->
            <div class="col-lg-6">
                <div class="makeup-card">
                    <div class="makeup-card-header">
                        <h3>Makeup by Senior Artist</h3>
                    </div>

                    <div class="makeup-table">
                        <div class="item"><span>Party Makeup</span><span>₹4,000/-</span></div>
                        <div class="item"><span>Haldi / Mehndi</span><span>₹6,000/-</span></div>
                        <div class="item"><span>Engagement / Cocktail / Sangeet</span><span>₹15,000/-</span></div>
                        <div class="item"><span>Bridal / Reception</span><span>₹18,000/-</span></div>
                    </div>

                    <div class="makeup-note">
                        Includes: Lashes, Lenses, Hairstyling, Draping, Makeup & Nail Paint <br>
                        <strong>Additional:</strong> ₹5,000/- for Air Brush
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">

            <!-- Extra Light Makeup -->
            <div class="col-lg-6 mb-4">
                <div class="makeup-card">
                    <div class="makeup-card-header">
                        <h3>Extra Light Makeup</h3>
                    </div>

                    <div class="makeup-table">
                        <div class="item"><span>Basic Makeup</span><span>₹3,000/-</span></div>
                        <div class="item"><span>MAC Makeup</span><span>₹3,500/-</span></div>
                    </div>

                    <div class="makeup-note">
                        Includes: Light Makeup & Hairstyle (Straightening / Simple Bun)
                    </div>
                </div>
            </div>

            <!-- Makeup Trial & Add Ons -->
            <div class="col-lg-6 mb-4">
                <div class="makeup-card">
                    <div class="makeup-card-header">
                        <h3>Makeup Trial & Add-Ons</h3>
                    </div>

                    <div class="makeup-table">
                        <div class="item"><span>Half Face (Senior Artist)</span><span>₹1,000/-</span></div>
                        <div class="item"><span>Half Face (Sania Malik)</span><span>₹2,000/-</span></div>
                        <div class="item"><span>Only Hair Do</span><span>₹1,500/-</span></div>
                        <div class="item"><span>Only Lashes / Lens</span><span>₹500/-</span></div>
                        <div class="item"><span>Classic Draping</span><span>₹500/-</span></div>
                        <div class="item"><span>Styling Draping</span><span>₹1,000/-</span></div>
                    </div>
                </div>
            </div>

        </div>

        <div class="venue-box">
            Venue Makeup in Lucknow – <strong>₹3,000/- Extra</strong>
        </div>

    </div>
</section>
@endsection