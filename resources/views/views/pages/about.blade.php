@extends('layout.master')
@section('css')
<style>
    :root {
        --primary-color: #9a563a;
        --primary-dark: #7a3e2a;
        --primary-light: #c4876d;
        --gold-accent: #d4af37;
        --dark-color: #1e293b;
        --light-bg: #f8fafc;
    }

    /* Hero Stats Section */
    .hero-stats {
        background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
        padding: 35px 0;
        position: relative;
        overflow: hidden;
    }

    .hero-stats::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 500px;
        height: 500px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 50%;
    }

    .hero-stats::after {
        content: '';
        position: absolute;
        bottom: -30%;
        left: -5%;
        width: 400px;
        height: 400px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 50%;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
        position: relative;
        z-index: 1;
    }

    .stat-item {
        text-align: center;
        color: white;
        padding: 15px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 15px;
        backdrop-filter: blur(10px);
        transition: all 0.3s ease;
    }

    .stat-item:hover {
        transform: translateY(-10px);
        background: rgba(255, 255, 255, 0.15);
    }

    .stat-icon {
        font-size: 50px;
        margin-bottom: 20px;
        color: var(--gold-accent);
    }

    .stat-number {
        font-size: 48px;
        font-weight: 700;
        margin-bottom: 10px;
        color: white;
    }

    .stat-label {
        font-size: 16px;
        opacity: 0.9;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* About Story Section */
    .about-story {
        background: white;
    }

    .section-title {
        text-align: center;
        margin-bottom: 60px;
    }

    .section-title h2 {
        font-size: 42px;
        font-weight: 700;
        color: var(--dark-color);
        margin-bottom: 15px;
        position: relative;
        display: inline-block;
    }

    .section-title h2::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 80px;
        height: 3px;
        background: linear-gradient(90deg, var(--gold-accent), var(--primary-color));
    }

    .section-title .inner-text {
        color: var(--primary-color);
    }

    .section-title p {
        font-size: 18px;
        color: #64748b;
        max-width: 700px;
        margin: 20px auto 0;
        line-height: 1.8;
    }

    .story-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 60px;
        align-items: center;
        margin-top: 60px;
    }

    .story-image {
        position: relative;
    }

    .story-image img {
        width: 100%;
        border-radius: 20px;
        box-shadow: 0 20px 60px rgba(154, 86, 58, 0.2);
    }

    .story-image::before {
        content: '';
        position: absolute;
        top: -20px;
        left: -20px;
        width: 100%;
        height: 100%;
        border: 3px solid var(--primary-color);
        border-radius: 20px;
        z-index: -1;
    }

    .story-text h3 {
        font-size: 32px;
        font-weight: 700;
        color: var(--dark-color);
        margin-bottom: 20px;
    }

    .story-text p {
        font-size: 16px;
        line-height: 1.8;
        color: #64748b;
        margin-bottom: 20px;
    }

    .story-text .highlight-box {
        background: linear-gradient(135deg, #fff9f0 0%, #fff5e9 100%);
        border-left: 4px solid var(--primary-color);
        padding: 25px;
        margin: 30px 0;
        border-radius: 10px;
    }

    .story-text .highlight-box p {
        margin: 0;
        font-style: italic;
        color: var(--primary-dark);
        font-weight: 500;
    }

    /* Mission Vision Section */
    .mission-vision {
        background: var(--light-bg);
    }

    .mv-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 40px;
        margin-top: 60px;
    }

    .mv-card {
        background: white;
        padding: 50px 40px;
        border-radius: 20px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .mv-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 5px;
        background: linear-gradient(90deg, var(--primary-color), var(--gold-accent));
    }

    .mv-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 60px rgba(154, 86, 58, 0.15);
    }

    .mv-icon {
        width: 80px;
        height: 80px;
        background: linear-gradient(135deg, var(--primary-color), var(--primary-light));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 36px;
        color: white;
        margin-bottom: 30px;
    }

    .mv-card h3 {
        font-size: 28px;
        font-weight: 700;
        color: var(--dark-color);
        margin-bottom: 20px;
    }

    .mv-card p {
        font-size: 16px;
        line-height: 1.8;
        color: #64748b;
    }

    .mv-card ul {
        list-style: none;
        padding: 0;
        margin: 20px 0 0 0;
    }

    .mv-card ul li {
        padding: 10px 0;
        color: #64748b;
        position: relative;
        padding-left: 30px;
    }

    .mv-card ul li::before {
        content: '✓';
        position: absolute;
        left: 0;
        color: var(--primary-color);
        font-weight: bold;
        font-size: 18px;
    }

    /* Why Choose Us Section */
    .why-choose {
        background: white;
    }

    .features-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 30px;
        margin-top: 60px;
    }

    .feature-card {
        background: linear-gradient(135deg, #fff 0%, #faf8f6 100%);
        padding: 40px 30px;
        border-radius: 15px;
        text-align: center;
        transition: all 0.3s ease;
        border: 2px solid transparent;
    }

    .feature-card:hover {
        border-color: var(--primary-color);
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(154, 86, 58, 0.1);
    }

    .feature-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, var(--primary-color), var(--gold-accent));
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 25px;
        font-size: 32px;
        color: white;
    }

    .feature-card h4 {
        font-size: 20px;
        font-weight: 600;
        color: var(--dark-color);
        margin-bottom: 15px;
    }

    .feature-card p {
        font-size: 15px;
        line-height: 1.6;
        color: #64748b;
        margin: 0;
    }   
    /* CTA Section */
    .cta-section {
        background: linear-gradient(135deg, var(--primary-dark) 0%, var(--primary-color) 100%);
        position: relative;
        overflow: hidden;
    }

    .cta-section::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -20%;
        width: 600px;
        height: 600px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 50%;
    }

    .cta-content {
        text-align: center;
        position: relative;
        z-index: 1;
    }

    .cta-content h2 {
        font-size: 42px;
        font-weight: 700;
        color: white;
        margin-bottom: 20px;
    }

    .cta-content p {
        font-size: 18px;
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 40px;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
    }

    .btn-cta {
        display: inline-block;
        background: white;
        color: var(--primary-color);
        padding: 18px 50px;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        font-size: 16px;
        transition: all 0.3s ease;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .btn-cta:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
        background: var(--gold-accent);
        color: white;
    }

    @media (max-width: 768px) {
        .story-content {
            grid-template-columns: 1fr;
            gap: 40px;
        }

        .story-image::before {
            display: none;
        }

        .section-title h2 {
            font-size: 32px;
        }

        .story-text h3 {
            font-size: 24px;
        }

        .hero-stats {
            padding: 30px 0;
        }

        .stat-number {
            font-size: 36px;
        }

        .testimonial-item {
            padding: 30px;
        }

        .testimonial-quote {
            font-size: 16px;
        }

        .cta-content h2 {
            font-size: 28px;
        }
    }
</style>
@endsection

@section('content')

<!-- Breadcrumb -->
<div class="breadcumb-wrapper" data-bg-src="assets/img/breadcumb/breadcumb-bg-2.jpg">
    <div class="container z-index-common">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">About Us</h1>
            <div class="breadcumb-menu-wrap">
                <ul class="breadcumb-menu">
                    <li><a href="/">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- Hero Stats Section -->
<section class="hero-stats space-top space-extra-bottom">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-icon"><i class="fas fa-users"></i></div>
                <div class="stat-number">10K+</div>
                <div class="stat-label">Happy Clients</div>
            </div>
            <div class="stat-item">
                <div class="stat-icon"><i class="fas fa-award"></i></div>
                <div class="stat-number">15+</div>
                <div class="stat-label">Years Experience</div>
            </div>
            <div class="stat-item">
                <div class="stat-icon"><i class="fas fa-star"></i></div>
                <div class="stat-number">500+</div>
                <div class="stat-label">Bridal Makeups</div>
            </div>
            <div class="stat-item">
                <div class="stat-icon"><i class="fas fa-certificate"></i></div>
                <div class="stat-number">20+</div>
                <div class="stat-label">Expert Artists</div>
            </div>
        </div>
    </div>
</section>

<!-- About Story Section -->
<section class="about-story space-top space-extra-bottom">
    <div class="container">
        <div class="section-title">
            <h2>Our <span class="inner-text">Story</span></h2>
            <p>A journey of passion, dedication, and transforming beauty dreams into reality</p>
        </div>

        <div class="story-content">
            <div class="story-image">
                <img src="assets/img/about/about-1-1.png" alt="Our Story">
            </div>
            <div class="story-text">
                <h3>Where Beauty Meets Excellence</h3>
                <p>Founded with a vision to redefine beauty standards in Lucknow, our journey began over 15 years ago with a simple dream - to make every woman feel confident, beautiful, and empowered.</p>

                <p>What started as a small studio has grown into one of Lucknow's most trusted beauty destinations. Our success is built on the foundation of exceptional service, skilled artistry, and an unwavering commitment to our clients' satisfaction.</p>

                <div class="highlight-box">
                    <p>"We don't just apply makeup; we create transformative experiences that celebrate your unique beauty and make your special moments unforgettable."</p>
                </div>

                <p>Today, we pride ourselves on having a team of certified professionals who bring creativity, precision, and passion to every service. From bridal makeup to everyday beauty solutions, we've been part of countless beautiful moments in our clients' lives.</p>
            </div>
        </div>
    </div>
</section>

<!-- Mission Vision Section -->
<section class="mission-vision space-top space-extra-bottom">
    <div class="container">
        <div class="section-title">
            <h2>Our Mission & <span class="inner-text">Vision</span></h2>
            <p>Guided by values, driven by excellence</p>
        </div>

        <div class="mv-grid">
            <div class="mv-card">
                <div class="mv-icon"><i class="fas fa-bullseye"></i></div>
                <h3>Our Mission</h3>
                <p>To provide world-class beauty services that enhance natural beauty while building lasting relationships with our clients through trust, expertise, and exceptional care.</p>
                <ul>
                    <li>Deliver personalized beauty solutions</li>
                    <li>Use premium, skin-friendly products</li>
                    <li>Maintain highest hygiene standards</li>
                    <li>Continuous skill development</li>
                </ul>
            </div>

            <div class="mv-card">
                <div class="mv-icon"><i class="fas fa-eye"></i></div>
                <h3>Our Vision</h3>
                <p>To be the most trusted and innovative beauty destination in India, setting new standards in makeup artistry and client satisfaction while empowering individuals through beauty.</p>
                <ul>
                    <li>Expand our presence nationwide</li>
                    <li>Pioneer innovative beauty techniques</li>
                    <li>Create employment opportunities</li>
                    <li>Promote sustainable beauty practices</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose space-top space-extra-bottom">
    <div class="container">
        <div class="section-title">
            <h2>Why Choose <span class="inner-text">Us</span></h2>
            <p>What makes us stand out in the beauty industry</p>
        </div>

        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-user-graduate"></i></div>
                <h4>Expert Artists</h4>
                <p>Our team consists of certified and experienced makeup artists trained in latest techniques and trends.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-gem"></i></div>
                <h4>Premium Products</h4>
                <p>We use only high-quality, branded cosmetics that are safe for all skin types and long-lasting.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-paint-brush"></i></div>
                <h4>Personalized Service</h4>
                <p>Every client receives customized attention with looks tailored to their preferences and features.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-shield-alt"></i></div>
                <h4>Hygiene First</h4>
                <p>We maintain strict hygiene protocols with sanitized tools and a clean, safe environment.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-clock"></i></div>
                <h4>Timely Service</h4>
                <p>We value your time and ensure punctual service delivery without compromising on quality.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon"><i class="fas fa-heart"></i></div>
                <h4>Client Satisfaction</h4>
                <p>Your happiness is our priority. We go the extra mile to ensure you love your look.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section space-top space-extra-bottom">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Transform Your Look?</h2>
            <p>Book your appointment today and experience the difference of professional makeup artistry. Let us make your special moments even more beautiful.</p>
            <a href="/contact" class="btn-cta">Book Appointment</a>
        </div>
    </div>
</section>

@endsection