<?php $page = 'home'; ?>
<?php
$legalServices = [
    [
        "title" => "Professional Memberships",
        "description" => "Member of the Bar Council of Maharashtra & Goa.",
        "icon" => "legal.png"
    ],
    [
        "title" => "Hobbies and Interests",
        "description" => "Enjoys traveling, reading, and volunteering.",
        "icon" => "document.png"
    ],
    [
        "title" => "Community Contributions",
        "description" => "Provides pro bono services to individuals and organizations that align with his values and promote social impact. <br/>Mentors younger lawyers and contributes to the legal community through speaking engagements and writing.",
        "icon" => "layer.png"
    ],
    [
        "title" => "Long-Term Goals",
        "description" => "Expand expertise in emerging legal fields such as Income Tax law, GST, and corporate law.<br/>Contribute to legal reforms and mentor future legal professionals.",
        "icon" => "infinite.png"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Advocate Kunal Pratap Shah</title>
    <?php include 'include/head-links.php'; ?>
    <meta property="og:url" content="<?php echo $page_url ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="images/logo.png">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="<?php echo $page_url ?>">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="images/logo.png">

    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />



</head>

<body onload="createCaptcha();">
    <div class="wrapper ">
        <?php include 'include/header.php'; ?>

        <div class="creative-parallax--slider">
            <div class="slider-inner">
                <div class="slider-row">
                    <div class="parallax-slider slider-wrap">
                        <div class="swiper-wrapper">
                            <!-- Slide 1 -->
                            <div class="swiper-slide" style="background-image: url('images/banner-img.jpg');">
                                <!-- style="background-image: url('https://imgpanda.com/upload/ib/7h4GtHmC8Y.jpg');"> -->
                                <div class="swiper-slide--inner">
                                    <div class="slide--bg">
                                        <div class="slide-bg--inner"></div>
                                    </div>
                                    <div class="slide-detail">
                                        <div class="slide-main--subheading">
                                            <span><i class="fa-solid fa-award"></i> On demand live support</span>
                                        </div>
                                        <h1 class="slide-main--heading">
                                            <div class="from-left">The Greatest Firm</div>
                                            <div class="from-right"> You Can Trust</div>
                                        </h1>
                                        <!-- <div class="slide-des">
                                            <p>We're a fully dedicated corporate service agency collaborating with
                                                brands
                                                all over the world.</p>
                                        </div> -->
                                        <div class="slide-cta">
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="slide-btn gradient-btn">Know More <span><i
                                                        class="fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                        <div class="slide-badge">
                                            <span class="patch-check">
                                                <svg stroke="currentColor" fill="currentColor" stroke-width="0"
                                                    viewBox="0 0 256 256" height="1em" width="1em"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M149.66,45.66l-64,64a8,8,0,0,1-11.32,0l-16-16a8,8,0,0,1,0-11.32l64-64a8,8,0,0,1,11.32,0l16,16A8,8,0,0,1,149.66,45.66Zm88,76.68-16-16a8,8,0,0,0-11.32,0l-64,64a8,8,0,0,0,0,11.32l16,16a8,8,0,0,0,11.32,0l64-64A8,8,0,0,0,237.66,122.34Z"
                                                        opacity="0.2"></path>
                                                    <path
                                                        d="M243.32,116.69l-16-16a16,16,0,0,0-20.84-1.53L156.84,49.52a16,16,0,0,0-1.52-20.84l-16-16a16,16,0,0,0-22.63,0l-64,64a16,16,0,0,0,0,22.63l16,16a16,16,0,0,0,20.83,1.52L96.69,124,31.31,189.38A25,25,0,0,0,66.63,224.7L132,159.32l7.17,7.16a16,16,0,0,0,1.52,20.84l16,16a16,16,0,0,0,22.63,0l64-64A16,16,0,0,0,243.32,116.69ZM80,104,64,88l64-64,16,16ZM55.32,213.38a9,9,0,0,1-12.69,0,9,9,0,0,1,0-12.68L108,135.32,120.69,148ZM101,105.66,145.66,61,195,110.34,150.35,155ZM168,192l-16-16,4-4h0l56-56h0l4-4,16,16Z">
                                                    </path>
                                                </svg>
                                            </span>
                                            <span class="badge-heading">Decided Support</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 2 -->
                            <div class="swiper-slide" style="background-image: url('images/banner-home-img.jpg');">
                                <!-- style="background-image: url('https://imgpanda.com/upload/ib/NqHhOwv4t0.jpg');"> -->
                                <div class="swiper-slide--inner">
                                    <div class="slide--bg">
                                        <div class="slide-bg--inner"></div>
                                    </div>
                                    <div class="slide-detail">
                                        <div class="slide-main--subheading">
                                            <span><i class="fa-solid fa-award"></i> On demand live support</span>
                                        </div>
                                        <h2 class="slide-main--heading">
                                            <div class="from-left">Secure Your Rights</div>
                                            <div class="from-right">With Qualified Help</div>
                                        </h2>
                                        <!-- <div class="slide-des">
                                            <p>We're a fully dedicated corporate service agency collaborating with
                                                brands
                                                all over the world.</p>
                                        </div> -->
                                        <div class="slide-cta">
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="slide-btn gradient-btn">Know More <span><i
                                                        class="fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                        <div class="slide-badge">
                                            <span class="patch-check"> <svg stroke="currentColor" fill="currentColor"
                                                    stroke-width="0" viewBox="0 0 256 256" height="1em" width="1em"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M149.66,45.66l-64,64a8,8,0,0,1-11.32,0l-16-16a8,8,0,0,1,0-11.32l64-64a8,8,0,0,1,11.32,0l16,16A8,8,0,0,1,149.66,45.66Zm88,76.68-16-16a8,8,0,0,0-11.32,0l-64,64a8,8,0,0,0,0,11.32l16,16a8,8,0,0,0,11.32,0l64-64A8,8,0,0,0,237.66,122.34Z"
                                                        opacity="0.2"></path>
                                                    <path
                                                        d="M243.32,116.69l-16-16a16,16,0,0,0-20.84-1.53L156.84,49.52a16,16,0,0,0-1.52-20.84l-16-16a16,16,0,0,0-22.63,0l-64,64a16,16,0,0,0,0,22.63l16,16a16,16,0,0,0,20.83,1.52L96.69,124,31.31,189.38A25,25,0,0,0,66.63,224.7L132,159.32l7.17,7.16a16,16,0,0,0,1.52,20.84l16,16a16,16,0,0,0,22.63,0l64-64A16,16,0,0,0,243.32,116.69ZM80,104,64,88l64-64,16,16ZM55.32,213.38a9,9,0,0,1-12.69,0,9,9,0,0,1,0-12.68L108,135.32,120.69,148ZM101,105.66,145.66,61,195,110.34,150.35,155ZM168,192l-16-16,4-4h0l56-56h0l4-4,16,16Z">
                                                    </path>
                                                </svg></span>
                                            <span class="badge-heading">Decided Support</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Slide 3 -->
                            <div class="swiper-slide" style="background-image: url('images/banner-home-img2.jpg');">
                                <!-- style="background-image: url('https://imgpanda.com/upload/ib/bRqJVoCe3b.jpg');"> -->
                                <div class="swiper-slide--inner">
                                    <div class="slide--bg">
                                        <div class="slide-bg--inner"></div>
                                    </div>
                                    <div class="slide-detail">
                                        <div class="slide-main--subheading">
                                            <span><i class="fa-solid fa-award"></i> On demand live support</span>
                                        </div>
                                        <h3 class="slide-main--heading">
                                            <div class="from-left">Expert Legal Help</div>
                                            <div class="from-right">Here for You</div>
                                        </h3>
                                        <!-- <div class="slide-des">
                                            <p>We're a fully dedicated corporate service agency collaborating with
                                                brands
                                                all over the world.</p>
                                        </div> -->
                                        <div class="slide-cta">
                                            <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="slide-btn gradient-btn">Know More <span><i
                                                        class="fa-solid fa-arrow-right"></i></span></a>
                                        </div>
                                        <div class="slide-badge">
                                            <span class="patch-check"> <svg stroke="currentColor" fill="currentColor"
                                                    stroke-width="0" viewBox="0 0 256 256" height="1em" width="1em"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M149.66,45.66l-64,64a8,8,0,0,1-11.32,0l-16-16a8,8,0,0,1,0-11.32l64-64a8,8,0,0,1,11.32,0l16,16A8,8,0,0,1,149.66,45.66Zm88,76.68-16-16a8,8,0,0,0-11.32,0l-64,64a8,8,0,0,0,0,11.32l16,16a8,8,0,0,0,11.32,0l64-64A8,8,0,0,0,237.66,122.34Z"
                                                        opacity="0.2"></path>
                                                    <path
                                                        d="M243.32,116.69l-16-16a16,16,0,0,0-20.84-1.53L156.84,49.52a16,16,0,0,0-1.52-20.84l-16-16a16,16,0,0,0-22.63,0l-64,64a16,16,0,0,0,0,22.63l16,16a16,16,0,0,0,20.83,1.52L96.69,124,31.31,189.38A25,25,0,0,0,66.63,224.7L132,159.32l7.17,7.16a16,16,0,0,0,1.52,20.84l16,16a16,16,0,0,0,22.63,0l64-64A16,16,0,0,0,243.32,116.69ZM80,104,64,88l64-64,16,16ZM55.32,213.38a9,9,0,0,1-12.69,0,9,9,0,0,1,0-12.68L108,135.32,120.69,148ZM101,105.66,145.66,61,195,110.34,150.35,155ZM168,192l-16-16,4-4h0l56-56h0l4-4,16,16Z">
                                                    </path>
                                                </svg></span>
                                            <span class="badge-heading">Decided Support</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-next slide-btns"></div>
                        <div class="swiper-button-prev slide-btns"></div>
                        <div class="autoplay-progress">
                            <div class="progress-fill"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="service-item_main" id="know-more">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="img_box ">
                            <img class="w-100 h-100" src="images/services-main.jpg" alt="">

                        </div>

                    </div>
                    <div class="col-lg-7 ps-5 ">
                        <h4 class="fontHeading heading fontWeight600  text_primary">
                            We are here <br /> to provide legal help!
                        </h4>
                        <p class="mt-4">
                            In Trust, we are aiming to provide high quality legal consultancy, support and results for
                            your legal issues.
                        </p>

                        <div class=" legal-services mt-4">
                            <div class="row">
                                <?php foreach ($legalServices as $service): ?>
                                    <div class="col-lg-6 mb-4">

                                        <div class="service-item">
                                            <img src="images/icons/<?php echo $service['icon']; ?>"
                                                alt="<?php echo $service['title']; ?> Icon" class="service-icon">
                                            <h4 class="fontHeading title text_primary"><?php echo $service['title']; ?></h4>
                                            <p><?php echo $service['description']; ?></p>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>


                        </div>

                    </div>

                </div>

                <div class="row about_home mt-5">
                    <div class="col-lg-8">
                        <p class="title">
                            Advocate
                        </p>
                        <h4 class="heading fontHeading fontWeight700 text_primary">
                            Kunal Pratap Shah <!--<span class="title">(Professional )</span>-->
                        </h4>

                        <p class="mt-4">

                            We are a dedicated legal practice led by Advocate Kunal Pratap Shah, specializing in Income
                            Tax Law, GST, and Corporate Law. With a strong foundation in commerce, law, and financial
                            services, we provide practical, tailored solutions for both individual and corporate
                            clients. As partners at "Legal Care" and members of the Bar Council of Maharashtra & Goa, we
                            uphold the highest standards of integrity, professionalism, and confidentiality. Fluent in
                            Gujarati, Hindi, and English, we ensure clear communication and personalized attention for
                            every case. Our commitment to excellence drives us to continuously learn, mentor, and
                            contribute to the legal community.
                        </p>
                        <div class="leftAbout">
                            <ul>
                                <li>Years of Practice: Founded and acted as director of Fast Solutions India Private Limited.</li>
                                <li>Years of Practice: As an Advocate active since enrolment in 2022 with the Bar Council of Maharashtra &amp; Goa.s</li>
                                <li>Practice Style: Independent practitioner and Partner in the law firm "Legal Care," alongside two other practicing advocates.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="img_box">
                            <img src="images/man-pic.jpg" alt="">

                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!--<section class="bgGrey">-->
        <!--    <div class="containerFull">-->
        <!--        <h4 class="heading fontWeight700 text_primary text-center fontHeading">Certifications</h4>-->
        <!--        <div class="certicate">-->
        <!--            <div class="itemCertificate">-->
        <!--                <div class="imgCertificate">-->
        <!--                    <img src="images/dummy.jpg" alt="">-->
        <!--                </div>-->
        <!--                <div class="rightCertificate">-->
        <!--                    <p class="title fontHeading">Completed a course on Arbitration organized by the Arbitration Committee of the IMC Chamber of Commerce.</p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--            <div class="itemCertificate">-->
        <!--                <div class="imgCertificate">-->
        <!--                    <img src="images/dummy.jpg" alt="">-->
        <!--                </div>-->
        <!--                <div class="rightCertificate">-->
        <!--                    <p class="title fontHeading">NISM Certified Research Analyst</p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
        <!--<section class="counter2 bg_primary">-->
        <!--    <div class="containerFull">-->
        <!--        <div class="counter2_grid">-->
        <!--            <div class="itemCol">-->
        <!--                <div class="counter2-box headding2-w aos-init aos-animate" data-aos="zoom-out"-->
        <!--                    data-aos-duration="700">-->
        <!--                    <h4 class="heading fontWeight700 text-light fontHeading"><span class="counter">25</span>+-->
        <!--                    </h4>-->

        <!--                    <p class="text-white-50">Satisfied Clients</p>-->
        <!--                </div>-->
        <!--            </div>-->

        <!--            <div class="itemCol">-->
        <!--                <div class="counter2-box headding2-w aos-init aos-animate" data-aos="zoom-out"-->
        <!--                    data-aos-duration="900">-->
        <!--                    <h4 class="heading fontWeight700 text-light fontHeading"><span class="counter">52</span>+-->
        <!--                    </h4>-->

        <!--                    <p class="text-white-50">Experienced lawyers &amp; attorneys</p>-->
        <!--                </div>-->
        <!--            </div>-->

        <!--            <div class="itemCol">-->
        <!--                <div class="counter2-box headding2-w aos-init aos-animate" data-aos="zoom-out"-->
        <!--                    data-aos-duration="1000">-->
        <!--                    <h4 class="heading fontWeight700 text-light fontHeading"><span class="counter">22</span>+-->
        <!--                    </h4>-->

        <!--                    <p class="text-white-50">Years Experience</p>-->
        <!--                </div>-->
        <!--            </div>-->

        <!--            <div class="itemCol">-->
        <!--                <div class="counter2-box headding2-w aos-init aos-animate" data-aos="zoom-out"-->
        <!--                    data-aos-duration="1200">-->
        <!--                    <h4 class="heading fontWeight700 text-light fontHeading"><span class="counter">27</span>+-->
        <!--                    </h4>-->

        <!--                    <p class="text-white-50">Critical cases solved successfully</p>-->
        <!--                </div>-->
        <!--            </div>-->

        <!--            <div class="itemCol">-->
        <!--                <div class="counter2-box last headding2-w aos-init aos-animate" data-aos="zoom-out"-->
        <!--                    data-aos-duration="700">-->
        <!--                    <h4 class="heading fontWeight700 text-light fontHeading"><span class="counter">270</span>+-->
        <!--                    </h4>-->

        <!--                    <p class="text-white-50">Reviews on Google</p>-->
        <!--                </div>-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
        <!--<section>-->
        <!--    <div class="containerFull">-->
        <!--        <h3 class="fontHeading fontWeight700 heading text-center">Important Links</h3>-->
        <!--        <div class="importantLink mt-lg-5 mt-4">-->
        <!--            <ul>-->
        <!--                <li>Bombay High Court</li>-->
        <!--                <li>Delhi High Court</li>-->
        <!--                <li>Gauhati High Court</li>-->
        <!--                <li>Calcutta High Court</li>-->
        <!--                <li>Chhattisgarh High Court</li>-->
        <!--                <li>Allahabad High Court</li>-->
        <!--                <li>Maharashtra High Court</li>-->
        <!--                <li>Jharkhand High Court</li>-->
        <!--                <li>Himachal High Court</li>-->
        <!--                <li>Jammu and Kashmir High Court</li>-->
        <!--                <li>Judgements High Court</li>-->
        <!--                <li>Karnataka High Court</li>-->
        <!--                <li>Law Commission of India</li>-->
        <!--                <li>Legal Services of India</li>-->
        <!--                <li>Ministry of Law</li>-->
        <!--                <li>Madras High Court</li>-->
        <!--                <li>Kerala High Court</li>-->
        <!--                <li>Gujarat High Court</li>-->
        <!--                <li>Madhya Pradesh High Court</li>-->
        <!--                <li>Orissa High Court</li>-->
        <!--                <li>Punjab and Haryana High Court</li>-->
        <!--                <li>Rajasthan High Court</li>-->
        <!--                <li>Patna High Court</li>-->
        <!--                <li>Sikkim High Court</li>-->
        <!--                <li>Supreme High Court</li>-->
        <!--            </ul>-->
        <!--        </div>-->
        <!--    </div>-->
        <!--</section>-->
        <section class="cta1">
            <div class="containerFull">
                <h4 class="fontHeading fontWeight700 heading text-center">
                    Speak With Our Experts Today!
                </h4>
                <p class="mt-3 text-center text-white">
                    Receive tailored guidance and expert legal solutions for your unique needs. Connect with our<br />
                    experienced team today and take the first step toward resolving your challenges
                </p>

                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn_2 mt-5">Contact Us <span><i
                            class="fa-solid fa-arrow-right"></i></span></a>

            </div>
        </section>



        <section class="specialization">
            <div class="containerFull">
                <p class="text-center fontWeight600 fontHeading">
                    Our Services

                </p>
                <h4 class="mt-2 heading fontHeading fontWeight700 text-center text_primary">
                    Practice Areas
                </h4>

                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="item_sep">
                            <img src="images/icons/tax.png" alt="">
                            <h4 class=" fontHeading fontWeight700  text_primary sub_heading">
                                Income Tax Law
                            </h4>
                            <p class="mt-3">
                                Our team provides expert guidance on income tax compliance, planning, and litigation. We
                                ensure individuals and businesses optimize their tax strategies while adhering to legal
                                requirements.
                            </p>
                            <div class="num_box">
                                01

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item_sep">
                            <img src="images/icons/money.png" alt="">
                            <h4 class=" fontHeading fontWeight700  text_primary sub_heading">
                                GST
                            </h4>
                            <p class="mt-3">

                                Navigate the complexities of the Goods and Services Tax (GST) with our experienced
                                advisors. From GST registration to filing and dispute resolution, we offer end-to-end
                                solutions tailored to your needs.
                            </p>
                            <div class="num_box">
                                02

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item_sep">
                            <img src="images/icons/corporate-law.png" alt="">
                            <h4 class=" fontHeading fontWeight700  text_primary sub_heading">
                                Corporate Law
                            </h4>
                            <p class="mt-3">

                                We specialize in corporate governance, mergers and acquisitions, and compliance with
                                legal frameworks. Our services are designed to support businesses at every stage, from
                                startup to expansion.
                            </p>
                            <div class="num_box">
                                03

                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>

        <section class="why_choose">
            <div class="containerFull">
                <div class="row position-relative">
                    <div class="col-lg-7">
                        <h4 class="fontHeading fontWeight700 heading ">
                            Why <span class="text_primary">Choose Us</span>
                            <br /> For Your Legal Services?
                        </h4>
                        <div class="row counter mt-lg-5 mt-4">
                     <div class="col-lg-4">
                        <div class="itemWhy">
                           <div class="iconWhy">
                               <img src="images/icons/justice.png">
                           </div>
                           <h4 class="title fontHeading my-3">Integrity and <br class="d-none d-lg-block">Ethics</h4>
                           <p>Upholds the highest ethical standards, ensuring transparency and trust.</p>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="itemWhy">
                           <div class="iconWhy">
                               <img src="images/icons/solutions.png">
                           </div>
                           <h4 class="title fontHeading my-3">Client-Centered Advocacy</h4>
                           <p>Focuses on understanding client needs to provide practical, tailored solutions.</p>
                        </div>
                     </div>
                     <div class="col-lg-4">
                        <div class="itemWhy">
                           <div class="iconWhy">
                               <img src="images/icons/skill-development.png">
                           </div>
                           <h4 class="title fontHeading my-3">Excellence and Continuous Learning</h4>
                           <p>Strives for professional growth and staying updated on legal developments.</p>
                        </div>
                     </div>
                  </div>
                  <h4 class="small_heading fontHeading mt-4">Technological Proficiency: </h4>
                    <div class="listBullet mt-4">
                     <ul class="d-flex flex-wrap gap-2">
                        <li><strong>Legal research tools:</strong> Westlaw, LexisNexis, Bloomberg Law.</li>
                        <li><strong>Case management software:</strong> Clio and MyCase.</li>
                        <li>Secure communication platforms for client interaction.</li>
                     </ul>
                  </div>




                    </div>
                    <div class="col-lg-5">
                        <div class="img_box">
                            <img src="images/business-meeting_1098-16493.jpg" alt="">
                        </div>


                    </div>
                </div>


            </div>
        </section>
        <section class="cta2">
            <div class="containerFull">
                <h4 class="heading fontHeading  text-center text-white ">
                    Connect With Trusted Legal Experts Today
                </h4>
                <p class="text-center mt-3 title text-white">
                    Reach out to our legal experts for personalized advice and solutions!
                </p>
                <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn_2 mt-5">Contact Us <span><i
                            class="fa-solid fa-arrow-right"></i></span></a>

            </div>
        </section>

        <section class="client_review">
            <div class="containerFull">
                <h5 class="text-center fontHeading">
                    Testimonials
                </h5>
                <h4 class="fontHeading heading text-center text_primary mt-2 fontWeight700">
                    What Clients Say
                </h4>
                <div class="mt-5 swiper review_slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="itemReview">
                                <div class="itemReview_inner">
                                    <div class="img_box text-center">
                                        <img src="https://html.fleexstudio.com/legalt/assets/img/image/tes4-img.png"
                                            alt="Nat Reynolds">
                                    </div>
                                    <p class="text-center mt-3">
                                        Exceptional service and professionalism! The team provided clear guidance and
                                        resolved my case
                                        efficiently—highly recommend their expertise!
                                    </p>
                                    <h5 class="title fontHeading fontWeight600 text-center mt-3">
                                        Nat Reynolds
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="itemReview">
                                <div class="itemReview_inner">
                                    <div class="img_box text-center">
                                        <img src="https://html.fleexstudio.com/legalt/assets/img/image/tes4-img.png"
                                            alt="Nat Reynolds">
                                    </div>
                                    <p class="text-center mt-3">
                                        Exceptional service and professionalism! The team provided clear guidance and
                                        resolved my case
                                        efficiently—highly recommend their expertise!
                                    </p>
                                    <h5 class="title fontHeading fontWeight600 text-center mt-3">
                                        Nat Reynolds
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="itemReview">
                                <div class="itemReview_inner">
                                    <div class="img_box text-center">
                                        <img src="https://html.fleexstudio.com/legalt/assets/img/image/tes4-img.png"
                                            alt="Nat Reynolds">
                                    </div>
                                    <p class="text-center mt-3">
                                        Exceptional service and professionalism! The team provided clear guidance and
                                        resolved my case
                                        efficiently—highly recommend their expertise!
                                    </p>
                                    <h5 class="title fontHeading fontWeight600 text-center mt-3">
                                        Nat Reynolds
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="itemReview">
                                <div class="itemReview_inner">
                                    <div class="img_box text-center">
                                        <img src="https://html.fleexstudio.com/legalt/assets/img/image/tes4-img.png"
                                            alt="Nat Reynolds">
                                    </div>
                                    <p class="text-center mt-3">
                                        Exceptional service and professionalism! The team provided clear guidance and
                                        resolved my case
                                        efficiently—highly recommend their expertise!
                                    </p>
                                    <h5 class="title fontHeading fontWeight600 text-center mt-3">
                                        Nat Reynolds
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>




        </section>



        <section class="contact_section">
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="fontHeading heading fontWeight700 text_primary">
                            Get in Touch with Us Today!
                        </h4>
                        <p class=" fontHeading mt-3">
                            We are here to help you navigate your legal journey with confidence and clarity. Whether you
                            need expert advice, representation, or assistance in resolving a legal matter, our dedicated
                            team is ready to guide you every step of the way. Contact us today to schedule an initial
                            consultation, discuss your specific case, or learn how we can provide tailored solutions to
                            meet your needs.
                        </p>

                        <p class=" fontHeading mt-3">
                            Let us help you achieve the best possible outcome for your legal challenges!
                        </p>

                        <h5 class="fontHeading sub_heading fontWeight700 text_primary mt-4">
                            How to reach us!
                        </h5>

                        <ul class="contact_info mt-3">
                            <li>
                                <strong class="fontHeading title">
                                    Phone:
                                </strong>
                                <a href="tel: 022-4010 0172"> 022-4010 0172</a>,
                                <a href="tel: 022-4010 0173"> 022-4010 0173</a>
                            </li>
                            <li>
                                <strong class="fontHeading title">
                                    Mobile:
                                </strong>
                                <a href="tel:99309 11997"> 99309 11997</a>
                            </li>
                            <li>
                                <strong class="fontHeading title">
                                    Email:
                                </strong>
                                <a href="mailto:legal@fastsolutions.in"> legal@fastsolutions.in</a>
                            </li>

                            <li>
                                <strong class="fontHeading title">
                                    Address:
                                </strong>
                                <a href="javascript:void();"> 204, Orbit Premises CSL, Opp. Vibgyor School, Chincholi Bunder Road, Malad
                                    (West), Mumbai - 400064</a>
                            </li>
                        </ul>

                    </div>
                    <div class="col-lg-6">

                        <div class="formBoxMain ">

                            <div class="formBox">
                                <div class="formHeader">
                                    <h5 class="fontHeading fontWeight700">
                                        Speak To A Our Expert
                                    </h5>
                                    <p>
                                        We'r here to help you!
                                    </p>

                                </div>
                                <form action="" class="bg-white ">
                                    <div class="px-4 py-4">
                                        <div class="form-floating mb-3">
                                            <input type="tel" class="form-control" id="floatingName" placeholder="Name">
                                            <label for="floatingName">Name</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" id="floatingInput"
                                                placeholder="name@example.com">
                                            <label for="floatingInput">Email address</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input type="tel" class="form-control" id="floatingPassword"
                                                placeholder="Phone No.">
                                            <label for="floatingPassword">Phone No.</label>
                                        </div>
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here"
                                                style="height: 100px" id="floatingTextarea"></textarea>
                                            <label for="floatingTextarea">Message</label>
                                        </div>
                                        <button class="btn btn_6 fontHeading w-100 py-3 mt-3  " type="submit">
                                            Speak To A Consultant
                                        </button>
                                    </div>

                                </form>

                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>

    </div>

    <?php include 'include/footer.php'; ?>

    </div>

    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="row">
                        <div class="col-lg-5 order-lg-1 order-2">
                            <div class="modalLeft">
                                <h3 class="small_heading text-white fontHeading fontWeight600">Working Hours</h3>
                                <div class="d-flex mt-4 itemBorder justify-content-between">
                                    <p>Monday to Friday</p>
                                    <p>9:00 to 16:30</p>
                                </div>
                                <div class="d-flex itemBorder justify-content-between">
                                    <p>Saturday</p>
                                    <p>9:00 to 15:30</p>
                                </div>
                                <div class="d-flex itemBorder justify-content-between">
                                    <p>Sunday<br><small>Only Emergency Calls</small></p>
                                    <p>Closed</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 order-lg-2 order-1">
                            <div class="modalRight">
                                <div class="text-end"><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
                                <div class="innerRight">
                                    <h4 class="small_heading fontHeading fontWeight600">Fix an Appointment</h4>

                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-lg-6 px-lg-1">
                                                <div class="formItem mb-1 mt-3">
                                                    <small>Date</small>
                                                    <input type="date" name="date" id="date" placeholder="date" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 px-lg-1">
                                                <div class="formItem">
                                                    <small>Time</small>
                                                    <input type="time" name="time" id="time" placeholder="time" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 px-lg-1">
                                                <div class="formItem mt-0">
                                                    <input type="text" name="name" id="name" placeholder="Name" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 px-lg-1">
                                                <div class="formItem mt-0">
                                                    <input type="email" name="email" id="email" placeholder="Email Address" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 px-lg-1">
                                                <div class="formItem mt-0">
                                                    <input type="text" name="phone" id="phone" placeholder="Mobile Number" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 px-lg-1">
                                                <div class="formItem mt-0">
                                                    <textarea name="message" id="message" placeholder="Message"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn_2 w-100 text-center">Send Message</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- dislaimer -->
    <div class="modal fade" id="disclaimer" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="d-flex justify-content-end">
                        <input type="button" class="smallBtn" id="iACC" data-bs-dismiss="modal" aria-label="Close" value="I Accept">

                        <a href="https://google.com/" class="smallBtn">Decline</a>
                    </div>
                    <div class="contentDislaimer">
                        <ul>
                            <li>By Visiting this website and clicking on any of the links, reader/viewer/user acknowledge
                                that he/she on his/her own accord and wish intends to know more about Advocate &amp;
                                Solicitor Chirag M. Shah and that there is and/or has been no solicitation, invitation
                                or inducement of any sort whatsoever from Adv. Chirag M. Shah or anyone else to
                                create an Advocate-Client relationship in any manner Whatsoever.</li>
                            <li>The reader/viewer/user of 'www.kunalshah.com' should not consider the information
                                of this website to be an invitation to establish the Advocate-Client relationship
                                in any manner whatsoever and further should not rely on the information provided
                                herein.</li>
                            <li>The contents of 'www.kunalshah.com' should not be construed as legal advice.</li>
                            <li>This website 'www.kunalshah.com' provides Free &amp; general Legal Alerts, Guidelines
                                on Indian laws and Legal System.</li>
                            <li>The existing clients can get the easy access as to the update of their assigned
                                Assignment/ Case/ Matter by using Log In panel.</li>
                            <li>We suggest you to consult a competent Advocate/ Lawyer / Attorney at Law as licensed
                                to practise in the reader's / viewer's / user's country before relying upon the
                                information and/or details of this website.</li>
                            <li>'www.kunalshah.com' hereby disclaims from all and/or any liability and responsibility
                                to any person for any loss or damage that may be caused this him/her by any errors
                                or omissions, whether such errors or omissions result from negligence, accident
                                or by any other cause. The 'www.kunalshah.com' shall further be not responsible
                                for, and/or makes representations or warranties about, the contents of any other
                                websites to which links may be provided from this website to be true and correct
                                and to be believed and/or acted upon by reader/ viewer/user.</li>
                            <li>The reader/ viewer/user by clicking “I ACCEPT” acknowledges that he/she has read
                                and understood this disclaimer beyond all reasonable doubts, and without any force,
                                coercion and/or undue influence and by his/her free will and consent, unconditionally
                                intends to proceed further to visit the website “www.advoateshah.com” solely at
                                his/her risk.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'include/footer-links.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".review_slider", {
            spaceBetween: 20,
            // centeredSlides: true,
            slidesPerView: 3,
            loop: true,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },

            // breakpoints: {

            //     320: {
            //         slidesPerView: 1,
            //         spaceBetween: 10
            //     },

            //     480: {
            //         slidesPerView: 1,
            //         spaceBetween: 20
            //     },

            //     640: {
            //         slidesPerView: 2,
            //         spaceBetween: 30
            //     },

            //     768: {
            //         slidesPerView: 2,
            //         spaceBetween: 30
            //     }
            //     1024: {
            //         slidesPerView: 3,
            //         spaceBetween: 30
            //     }
            // }
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },

            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>

    <script src="js/banner.js"></script>

    <script type="text/javascript" src="js/custom.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const myModal = new bootstrap.Modal(document.getElementById('disclaimer'));
            setTimeout(() => {
                myModal.show();
            }, 100);
        });
        // Function to get a cookie value by name
        function getCookie(name) {
            let cookies = document.cookie.split(';');
            for (let i = 0; i < cookies.length; i++) {
                let cookie = cookies[i].trim();
                if (cookie.startsWith(name + "=")) {
                    return cookie.split("=")[1];
                }
            }
            return "";
        }

        // Show modal if cookie is not set
        if (getCookie("Accept") === "") {
            myModal.show();
        }

        // Click event to accept and set cookie
        $("#iACC").click(function() {
            document.cookie = "Accept=Done; path=/; max-age=" + (60 * 60 * 24 * 365); // Cookie expires in 1 year
        });
    </script>
</body>

</html>