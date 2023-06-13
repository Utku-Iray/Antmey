<?php include 'php/head.php' ?>
<?php include 'php/header.php' ?>
<!-- Inner Banner Section -->
<section class="inner-banner">
    <div class="image-layer" style="background-image: url(images/slider1.jpg);"></div>
    <div class="auto-container">
        <div class="inner">
            <div class="subtitle"><span>Antmey</span></div>
            <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
            <h1><span>İletişim Formu</span></h1>
        </div>
    </div>
</section>
<!--End Banner Section -->

<!--Online Reservation Section-->
<section class="reservation-contactform inner-page">
    <div class="left-bg"><img src="images/background/bg-5.png" alt="" title=""></div>
    <div class="right-bg"><img src="images/background/bg-6.png" alt="" title=""></div>
    <div class="auto-container">
        <div class="title-box centered">
            <div class="subtitle"><span>Formu </span></div>
            <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
            <h2>Bizimle İletişime Geçin!</h2>

        </div>
        <div class="default-form reservation-form">
            <form method="post" action="index.html">
                <div class="row clearfix">
                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <div class="field-inner">
                            <input type="text" name="fieldname" value="" placeholder="Adınız" required>
                        </div>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <div class="field-inner">
                            <input type="text" name="fieldname" value="" placeholder="Telefon" required>
                        </div>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <div class="field-inner">
                            <input type="text" name="fieldname" value="" placeholder="E-Mail" required>
                        </div>
                    </div>
                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <div class="field-inner">
                            <input type="text" name="fieldname" value="" placeholder="Şirket" required>
                        </div>
                    </div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        <div class="field-inner">
                            <textarea name="fieldname" placeholder="Mesaj" required></textarea>
                        </div>
                    </div>
                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                        <div class="field-inner">

                            <button type="submit" class="theme-btn btn-style-one clearfix">
                                <span class="btn-wrap">
                                    <span class="text-one">Gönder</span>
                                    <span class="text-two">Gönder</span>
                                </span>
                            </button>

                        </div>
                    </div>
                </div>
            </form>
           
        </div>
    </div>

    <!--Location Section-->
    <div class="location-with-image">
        <div class="auto-container">
            <div class="row justify-content-center clearfix">
                <!--Block-->
                <div class="loc-block col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="image-box">
                            <div class="image"><img src="images/fabrikaGorseller/1.JPG" alt=""></div>
                            <!-- <div class="over-content">
                                <div class="cat">USA</div>
                                <h4>New York</h4>
                                <div class="text">Restaurant St, Delicious City, NY. <br> P. +88-123-123456 | E. info@antmey.com</div>
                                <div class="more-link"><a href="#">get direction</a></div>
                            </div> -->
                        </div>
                    </div>
                </div>

                <!--Block-->
                <div class="loc-block col-lg-6 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="image-box">
                            <div class="image">
                                <a href="#"><img src="images/fabrikaGorseller/2.JPG" alt=""></a>
                            </div>
                            <!-- <div class="over-content">
                                <div class="cat">france</div>
                                <div class="text">520, Delicious City, Revenu Paris. <br> P. +88-123-123456 | E. info@antmey.com</div>
                                <div class="more-link"><a href="#">get direction</a></div>
                            </div> -->
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</section>




<!--Main Footer-->
<?php include 'php/footer.php' ?>

</body>

</html>