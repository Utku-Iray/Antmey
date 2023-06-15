<?php include 'php/head.php'?>
<?php include 'php/header.php'?>


        <!-- Inner Banner Section -->
        <section class="inner-banner">
            <div class="image-layer" style="background-image: url(images/slider1.jpg);"></div>
            <div class="auto-container">
                <div class="inner">
                    <div class="subtitle"><span>Antmey</span></div>
                    <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
                    <h1><span>İletişim</span></h1>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <!--Map Section-->
      
        <!--Contact Info Section-->
        <section class="contact-page">
            <div class="left-bg"><img src="images/background/bg-25.png" alt="" title=""></div>
            <div class="right-bg"><img src="images/background/bg-6.png" alt="" title=""></div>
            <!--location Section-->
            <div class="location-center">
                <div class="auto-container">
                    <div class="cinfo-box">
                        <div class="row clearfix">
                            <!--Block-->
                            <div class="contactinfo-block col-lg-4 col-md-4 col-sm-12">
                                <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                                    <h4>Telefon</h4>
                                    <div class="more-link"><a href="tel:+90 (242) 257 00 36">Telefon : +90 (242) 257 00 36</a></div>
                                </div>
                            </div>

                            <!--Block-->
                            <div class="contactinfo-block col-lg-4 col-md-4 col-sm-12">
                                <div class="inner-box cp-seprator wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                                    <h4>Adres</h4>
                                    <div class="text">Aşağıoba Mh.Toptancılar Birliği Sk. No:107/C7 Döşemealtı / Antalya</div>
                                    
                                </div>
                            </div>

                            <!--Block-->
                            <div class="contactinfo-block col-lg-4 col-md-4 col-sm-12">
                                <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="600ms">
                                    <h4>Mail</h4>
                                    <div class="text"><a href="mailto:info@antmey.com"><i class="icon far fa-envelope"></i> info@antmey.com</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Location form Section-->
            <div class="auto-container">
                <div class="c-page-form-box">
                    <div class="row clearfix">
                        <!--form Section-->
                        <div class="loc-block col-lg-6 col-md-12 col-sm-12">
                            <div class="title-box centered">
                                <h2>Mesaj Gönder</h2>
                                <!-- <div class="text desc">Have a question about the our service? We're here to help, contact us today</div> -->
                            </div>
                            <div class="default-form reservation-form">
                                <form method="post" action="mail/mail.php">
                                    <div class="clearfix">
                                        <div class="form-group">
                                            <div class="field-inner">
                                                <input type="text" name="patientnamesurname" value="" placeholder="İsim" required="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="field-inner">
                                                <input type="email" name="mail" value="" placeholder="Your Email" required="">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="field-inner">
                                                <input type="number" name="patientPhone" value="" placeholder="Numara" required="">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="field-inner">
                                                <input type="text" name="patientSubject" value="" placeholder="Konu" required="">
                                            </div>
                                        </div>
                                        <div class="form-group ">
                                            <div class="field-inner">
                                                <textarea name="patientNote" placeholder="Mesaj" required=""></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                        <input style="display: none;" value="İletişim" name="sayfa" type="text">
                                            <button type="submit" class="theme-btn btn-style-one clearfix">
                                        <span class="btn-wrap">
                                            <span class="text-one">Mesajı Gönder</span>
                                            <span class="text-two">Mesajı Gönder</span>
                                        </span>
                                    </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!--form image Section-->
                        <div class="loc-block col-lg-6 col-md-12 col-sm-12">
                            <img src="images/fabrikaGorseller/6.JPG" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <div class="contact-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3182.649861664612!2d30.626057615298095!3d37.089645379889944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzfCsDA1JzIyLjciTiAzMMKwMzcnNDEuNyJF!5e0!3m2!1str!2str!4v1686664582260!5m2!1str!2str" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>



        <!--Main Footer-->
        <?php include 'php/footer.php' ?>
</body>

</html>