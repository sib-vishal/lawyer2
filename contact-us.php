<?php $page = 'contact'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact | Advocate Kunal Pratap Shah</title>
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
</head>

<body onload="createCaptcha();">
    <div class="wrapper ">
        <?php include 'include/header.php'; ?>
        <section class="shortBanner">
            <div class="containerFull h-100">
                <div class="d-flex h-100 justify-content-center align-items-center text-center flex-column">
                    <h4 class="small_heading text-center text_primary fontWeight700">Get in Touch</h4>
                    <h1 class="heading fontHeading fontWeigh700 mt-2 text-white">Contact Info</h1>
                </div>
            </div>
        </section>
        <section>
            <div class="containerFull">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="leftContactInnerPage">
                            <div class="d-flex align-items-center">
                                <div class="iconLaw">
                                    <i class="fa-solid fa-building-columns"></i>
                                </div>
                                <div class="rightIconLaw">
                                    <p class="title fontWeight600 text_primary"><i>Get in Touch</i></p>
                                </div>
                            </div>
                            <h2 class="sub_heading fontWeight600 mt-4">Do you need help?</h2>
                            <h3 class="sub_heading fontWeight600 text_primary mt-2"><i>Contact with us now!</i></h3>
                            <div class="newContactIcons stickyItem">
                                <div class="connectIcon">
                                    <div class="newIcons">
                                        <div class="loader">
                                            <i class="fa-solid fa-location-dot"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h3 class="fontWeight600 fontHeading">Address</h3>
                                        <h5>204, Orbit Premises CSL, Opp. Vibgyor School, Chincholi Bunder Road, Malad (West), Mumbai - 400064</h5>
                                    </div>
                                </div>
                                <div class="connectIcon">
                                    <div class="newIcons">
                                        <div class="loader">
                                            <i class="fa-solid fa-envelope"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h3 class="fontWeight600 fontHeading">Phone</h3>

                                        <h5><a class="text-black" href="tel:+91-9930911997">+91-9930911997</a></h5>
                                    </div>
                                </div>
                                <div class="connectIcon">
                                    <div class="newIcons">
                                        <div class="loader">
                                            <i class="fa-solid fa-phone"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h3 class="fontWeight600 fontHeading">Email</h3>

                                        <h5><a class="text-black" href="mailto:legal@fastsolutions.in">legal@fastsolutions.in</a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-2">
                        <div class="rightContactInner">
                            <h3 class="sub_heading fontHeading fontWeight60 text-center"><span class="text-white">Contact with us</span> <span class="text_primary">now !</span></h3>
                            <form action="" class="mt-4">
                                <div class="itemFormInner">
                                    <input type="text" name="name" placeholder="Full Name" required>
                                </div>
                                <div class="itemFormInner">
                                    <input type="email" name="email" placeholder="Email Address" required>
                                </div>
                                <div class="itemFormInner">
                                    <input type="phone" name="phone" placeholder="Phone Number" required>
                                </div>
                                <div class="itemFormInner">
                                    <textarea name="message" id="" placeholder="Write your message"></textarea>
                                </div>
                                <div class="itemFormInner">
                                    <button class="btnContact">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pt-0">
            <div class="containerFull">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25160.22769470101!2d72.80210475867248!3d19.188805882108685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b6914fe3a8e5%3A0x73f264109c4db9d4!2sMalad%2C%20Malad%20West%2C%20Mumbai%2C%20Maharashtra!5e1!3m2!1sen!2sin!4v1740571822559!5m2!1sen!2sin" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </div>
    <?php include 'include/footer.php'; ?>
    <?php include 'include/footer-links.php'; ?>
</body>

</html>