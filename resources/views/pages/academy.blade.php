@extends('layout.master')
@section('css')
<style>
    :root {
        --theme-color: #9a563a;
        --theme-dark: #7a4330;
        --theme-light: #ba7654;
    }

    /* Intro Section */
    .intro-section {
        padding: 70px;
        background: linear-gradient(135deg, #fff 0%, #f9f4f1 100%);
        position: relative;
        overflow: hidden;
    }

    .intro-section::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -10%;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(154, 86, 58, 0.1) 0%, transparent 70%);
        border-radius: 50%;
        animation: float 6s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-30px); }
    }

    .intro-content {
        text-align: center;
        position: relative;
        z-index: 1;
    }

    .intro-badge {
        display: inline-block;
        padding: 10px 25px;
        background: linear-gradient(135deg, var(--theme-color), var(--theme-dark));
        color: #fff;
        border-radius: 50px;
        font-size: 14px;
        font-weight: 600;
        margin-bottom: 20px;
        animation: slideDown 0.8s ease;
    }

    @keyframes slideDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .intro-title {
        font-size: 52px;
        font-weight: 800;
        color: #222;
        margin-bottom: 20px;
        line-height: 1.2;
        animation: fadeInUp 1s ease;
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(40px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .intro-title .highlight {
        color: var(--theme-color);
        position: relative;
    }

    .intro-title .highlight::after {
        content: '';
        position: absolute;
        bottom: 5px;
        left: 0;
        width: 100%;
        height: 12px;
        background: rgba(154, 86, 58, 0.2);
        z-index: -1;
    }

    .intro-desc {
        font-size: 18px;
        color: #666;
        max-width: 800px;
        margin: 0 auto 40px;
        line-height: 1.8;
        animation: fadeIn 1.2s ease;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    .stats-row {
        display: flex;
        justify-content: center;
        gap: 60px;
        margin-top: 50px;
        flex-wrap: wrap;
    }

    .stat-item {
        text-align: center;
        animation: scaleIn 1s ease;
    }

    @keyframes scaleIn {
        from {
            opacity: 0;
            transform: scale(0.5);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .stat-number {
        font-size: 48px;
        font-weight: 800;
        color: var(--theme-color);
        line-height: 1;
        margin-bottom: 5px;
    }

    .stat-label {
        font-size: 14px;
        color: #666;
        font-weight: 600;
    }

    /* Academy Section */
    .academy-section {
        padding: 70px;
        background: #fff;
        position: relative;
    }

    .section-title {
        text-align: center;
        margin-bottom: 70px;
    }

    .section-title h2 {
        font-size: 46px;
        font-weight: 800;
        color: #222;
        margin-bottom: 15px;
    }

    .section-title .inner-text {
        color: var(--theme-color);
        position: relative;
    }

    .section-title p {
        font-size: 17px;
        color: #666;
        max-width: 700px;
        margin: 0 auto;
        line-height: 1.8;
    }

    /* Course Cards */
    .course-card {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 10px 40px rgba(0,0,0,0.08);
        transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        margin-bottom: 30px;
        height: 100%;
        display: flex;
        flex-direction: column;
        position: relative;
        border: 2px solid transparent;
    }

    .course-card:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: 0 20px 60px rgba(154, 86, 58, 0.2);
        border-color: var(--theme-color);
    }

    .course-header {
        background: linear-gradient(135deg, var(--theme-color) 0%, var(--theme-dark) 100%);
        padding: 15px 15px;
        text-align: center;
        color: #fff;
        position: relative;
        overflow: hidden;
    }

    .course-header::before {
        content: '';
        position: absolute;
        top: -50%;
        right: -50%;
        width: 200%;
        height: 200%;
        background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
        animation: rotate 20s linear infinite;
    }

    @keyframes rotate {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    .course-header h3 {
        font-size: 28px;
        font-weight: 800;
        margin-bottom: 10px;
        position: relative;
        z-index: 1;
        color:#fff;
    }

    .course-duration {
        font-size: 15px;
        opacity: 0.95;
        position: relative;
        z-index: 1;
        font-weight: 500;
    }

    .course-body {
        padding: 25px 20px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        background: linear-gradient(to bottom, #fff 0%, #fafafa 100%);
    }

    .course-price {
        text-align: center;
        margin-bottom:15px;
        padding: 20px;
        background: linear-gradient(135deg, #f9f4f1 0%, #f9f4f1 100%);
        border-radius: 15px;
        position: relative;
        overflow: hidden;
    }

    .course-price::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 3px;
        background: linear-gradient(90deg, var(--theme-color), var(--theme-light));
    }

    .price-tag {
        font-size: 25px;
        font-weight: 800;
        color: var(--theme-color);
        line-height: 1;
        margin-bottom: 8px;
    }

    .price-label {
        font-size: 13px;
        color: #888;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .course-features {
        list-style: none;
        padding: 0;
        margin: 0 0 0 0;
        flex-grow: 1;
    }

    .course-features li {
        padding: 10px 10px 10px 0;
        border-bottom: 1px solid #f0f0f0;
        color: #555;
        font-size: 15px;
        display: flex;
        align-items: center;
        transition: all 0.3s ease;
        position: relative;
    }

    .course-features li:hover {
        padding-left: 10px;
        color: var(--theme-color);
    }

    .course-features li:last-child {
        border-bottom: none;
    }

    .course-features li::before {
        content: '✓';
        color: var(--theme-color);
        font-weight: 700;
        font-size: 20px;
        margin-right: 15px;
        width: 28px;
        height: 28px;
        background: rgba(154, 86, 58, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .course-btn {
        display: inline-block;
        width: 100%;
        padding: 10px 30px;
        background: linear-gradient(135deg, var(--theme-color) 0%, var(--theme-dark) 100%);
        color: #fff;
        text-align: center;
        border-radius: 12px;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.4s ease;
        border: 2px solid var(--theme-color);
        position: relative;
        overflow: hidden;
        z-index: 1;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 14px;
    }

    .course-btn::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
        transition: all 0.6s ease;
        z-index: -1;
    }

    .course-btn:hover::before {
        left: 100%;
    }

    .course-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(154, 86, 58, 0.3);
    }

    /* Featured Badge */
    .featured-badge {
        position: absolute;
        top: 25px;
        right: -35px;
        background: linear-gradient(135deg, #FFD700, #FFA500);
        color: #333;
        padding: 8px 45px;
        font-size: 11px;
        font-weight: 800;
        transform: rotate(45deg);
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        z-index: 10;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    /* Why Choose Section */
    .why-choose-section {
        padding: 70px;
        background: linear-gradient(135deg, #f9f4f1 0%, #fff 100%);
        position: relative;
    }

    .feature-box {
        text-align: center;
        padding: 40px 30px;
        margin-bottom: 30px;
        transition: all 0.4s ease;
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 5px 20px rgba(0,0,0,0.05);
    }

    .feature-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 40px rgba(154, 86, 58, 0.15);
    }

    .feature-icon {
        width: 90px;
        height: 90px;
        background: linear-gradient(135deg, var(--theme-color) 0%, var(--theme-dark) 100%);
        color: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 38px;
        margin: 0 auto 25px;
        transition: all 0.6s ease;
        position: relative;
        box-shadow: 0 10px 30px rgba(154, 86, 58, 0.3);
    }

    .feature-icon::after {
        content: '';
        position: absolute;
        width: 110%;
        height: 110%;
        border: 2px dashed var(--theme-color);
        border-radius: 50%;
        opacity: 0;
        transition: all 0.6s ease;
    }

    .feature-box:hover .feature-icon {
        transform: rotateY(360deg) scale(1.1);
    }

    .feature-box:hover .feature-icon::after {
        opacity: 1;
        animation: spin 3s linear infinite;
    }

    @keyframes spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    .feature-box h4 {
        font-size: 22px;
        font-weight: 800;
        color: #222;
        margin-bottom: 12px;
    }

    .feature-box p {
        color: #666;
        font-size: 15px;
        line-height: 1.8;
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

<!-- Intro Section -->
<section class="intro-section">
    <div class="container">
        <div class="intro-content">
            <span class="intro-badge">✨ Premium Beauty Education</span>
            <h1 class="intro-title">Transform Your <span class="highlight">Passion</span> Into Profession</h1>
            <p class="intro-desc">Join India's leading makeup academy and learn from certified professionals. Our comprehensive courses are designed to transform beginners into skilled artists, equipped with industry-standard techniques and business acumen.</p>
            
            <div class="stats-row">
                <div class="stat-item">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">Students Trained</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">98%</div>
                    <div class="stat-label">Success Rate</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">15+</div>
                    <div class="stat-label">Years Experience</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Academy Courses Section -->
<section class="academy-section">
    <div class="container">
        <div class="section-title">
            <h2>Choose Your <span class="inner-text">Perfect Course</span></h2>
            <p>Select from our range of professional courses designed to match your goals and schedule</p>
        </div>

        <div class="row">
            <!-- Self Grooming Course -->
            <div class="col-lg-3 col-md-6">
                <div class="course-card">
                    <div class="course-header">
                        <h3>Self Grooming</h3>
                        <p class="course-duration text-white">1 Week Program</p>
                    </div>
                    <div class="course-body">
                        <div class="course-price">
                            <div class="price-tag">₹10,000</div>
                            <p class="price-label">One-time Payment</p>
                        </div>
                        <ul class="course-features">
                            <li>Basic Makeup Techniques</li>
                            <li>Personal Styling Tips</li>
                            <li>Skin Care Basics</li>
                            <li>Daily Makeup Routine</li>
                            <li>Product Knowledge</li>
                        </ul>
                        <a href="#" class="course-btn">Enroll Now</a>
                    </div>
                </div>
            </div>

            <!-- Master Class -->
            <div class="col-lg-3 col-md-6">
                <div class="course-card">
                    <div class="course-header">
                        <h3>Master Class</h3>
                        <p class="course-duration text-white">10 Days Intensive</p>
                    </div>
                    <div class="course-body">
                        <div class="course-price">
                            <div class="price-tag">₹25,000</div>
                            <p class="price-label">One-time Payment</p>
                        </div>
                        <ul class="course-features">
                            <li>Advanced Makeup Skills</li>
                            <li>Bridal Makeup</li>
                            <li>Party & Event Looks</li>
                            <li>Color Theory</li>
                            <li>Face Contouring</li>
                        </ul>
                        <a href="#" class="course-btn">Enroll Now</a>
                    </div>
                </div>
            </div>

            <!-- Basic to Advance -->
            <div class="col-lg-3 col-md-6">
                <div class="course-card">
                    <div class="course-header">
                        <h3>Basic to Advance</h3>
                        <p class="course-duration text-white">2 Months Complete</p>
                    </div>
                    <div class="course-body">
                        <div class="course-price">
                            <div class="price-tag">₹80,000</div>
                            <p class="price-label">Installments Available</p>
                        </div>
                        <ul class="course-features">
                            <li>Complete Makeup Training</li>
                            <li>Hair Styling & Techniques</li>
                            <li>Saree Draping & Styling</li>
                            <li>HD & Airbrush Makeup</li>
                            <li>Portfolio Building</li>
                        </ul>
                        <a href="#" class="course-btn">Enroll Now</a>
                    </div>
                </div>
            </div>

            <!-- Diploma Course -->
            <div class="col-lg-3 col-md-6">
                <div class="course-card">
                    <span class="featured-badge">POPULAR</span>
                    <div class="course-header">
                        <h3>Diploma Course</h3>
                        <p class="course-duration text-white">6 Months Professional</p>
                    </div>
                    <div class="course-body">
                        <div class="course-price">
                            <div class="price-tag">₹2,00,000</div>
                            <p class="price-label">Flexible Payment Plans</p>
                        </div>
                        <ul class="course-features">
                            <li>Complete Beauty Training</li>
                            <li>Hair Styling & Chemical</li>
                            <li>Professional Makeup</li>
                            <li>Hair Do & Updos</li>
                            <li>Nail Art & Extensions</li>
                        </ul>
                        <a href="#" class="course-btn">Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-section">
    <div class="container">
        <div class="section-title">
            <h2>Why Choose <span class="inner-text">Our Academy</span></h2>
            <p>Experience world-class training with personalized attention and industry-standard facilities</p>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="feature-box">
                    <div class="feature-icon">👩‍🏫</div>
                    <h4>Expert Trainers</h4>
                    <p>Learn from certified professionals with 10+ years of industry experience</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-box">
                    <div class="feature-icon">🎓</div>
                    <h4>Certified Courses</h4>
                    <p>Receive recognized certifications upon successful completion</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-box">
                    <div class="feature-icon">💼</div>
                    <h4>Job Assistance</h4>
                    <p>Get placement support and career guidance after graduation</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="feature-box">
                    <div class="feature-icon">✨</div>
                    <h4>Hands-on Practice</h4>
                    <p>Practical training with real clients and live projects</p>
                </div>
            </div>
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
                        <div class="form-group col-md-6"><input type="text" placeholder="First Name"></div>
                        <div class="form-group col-md-6"><input type="text" placeholder="Last Name"></div>
                        <div class="form-group col-md-6"><input type="email" placeholder="Email Address"></div>
                        <div class="form-group col-md-6"><input type="number" placeholder="Phone Number"></div>
                        <div class="form-group col-12"><select>
                                <option disabled="disabled" hidden selected="selected">Select Course</option>
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



@endsection