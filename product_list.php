<?php

$getCategoriesJSON = file_get_contents('data/categories.json');
$categoriesArray = json_decode($getCategoriesJSON);

$getProductsJSON = file_get_contents('data/products.json');
$productsArray = json_decode($getProductsJSON);

$selectedCategory = array();
$selectedProducts = array();

if (isset($_GET["category"])) {
    $name = $_GET['category'];
    // Kategori
    for ($i = 0; $i < count($categoriesArray); $i++) {
        if ($categoriesArray[$i]->category_url == $name) {
            array_push($selectedCategory, $categoriesArray[$i]);
        }
    }
    // Ürün
    for ($i = 0; $i < count($productsArray); $i++) {
        if ($productsArray[$i]->category_url == $name) {
            array_push($selectedProducts, $productsArray[$i]);
        }
    }
} else {
    header("Location: product_list.php");
}

?>
<?php include 'php/head.php' ?>
<?php include 'php/header.php' ?>

<!-- Inner Banner Section -->
<section class="inner-banner">
    <div class="image-layer" style="background-image: url(images/background/banner-image-1.jpg);"></div>
    <div class="auto-container">
        <div class="inner">
            <div class="subtitle"><span>delicious & amazing</span></div>
            <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
            <h1><span><?= $selectedCategory[0]->category_name ?></span></h1>
        </div>
    </div>
</section>
<!--End Banner Section -->

<!--Special Offer Section-->
<section class="special-offer-two">
    <div class="left-bg"><img src="images/background/bg-20.png" alt="" title=""></div>
    <div class="right-bg"><img src="images/background/bg-19.png" alt="" title=""></div>
    <div class="auto-container">
        <!-- <div class="title-box centered">
            <div class="subtitle"><span>special offer</span></div>
            <div class="pattern-image"><img src="images/icons/separator.svg" alt="" title=""></div>
            <h2>Best Special Menu</h2>
        </div> -->
        <div class="row clearfix">
            <!--Item-->

            <?php
            foreach ($selectedProducts as $product) { ?>
                <div class="offer-block-three col-xl-2 col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="0ms">
                        <div class="image">
                            <a href="#"><img src="<?= $product->product_images ?>" alt=""></a>
                        </div>
                        <h4><a href="menu-list.html"><?= $product->product_name ?></a></h4>
                        <div class="text desc"><?= $product->product_description ?></div>
                        <!-- <div class="price">$39.00</div> -->
                    </div>
                </div>
            <?php   }
            ?>


            <!--Item-->


        </div>
    </div>
</section>

<!--Chef Selection Section-->

<!--Special Offer Section-->


<!--Reservation Section-->
<section class="reserve-section style-two">
    <div class="image-layer" style="background-image: url(images/background/image-10.jpg);"></div>
    <div class="auto-container">
        <div class="outer-box">
            <div class="row clearfix">
                <div class="reserv-col col-lg-8 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="title">
                            <h2>Online Reservation</h2>
                            <div class="request-info">Booking request <a href="#">+88-123-123456</a> or fill out the order form</div>
                        </div>
                        <div class="default-form reservation-form">
                            <form method="post" action="index.html">
                                <div class="row clearfix">
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <input type="text" name="fieldname" value="" placeholder="Your Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <input type="text" name="fieldname" value="" placeholder="Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <span class="alt-icon far fa-user"></span>
                                            <select class="l-icon">
                                                <option>1 Person</option>
                                                <option>2 Person</option>
                                                <option>3 Person</option>
                                                <option>4 Person</option>
                                                <option>5 Person</option>
                                                <option>6 Person</option>
                                                <option>7 Person</option>
                                            </select>
                                            <span class="arrow-icon far fa-angle-down"></span>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6 col-sm-12">
                                        <div class="field-inner">
                                            <span class="alt-icon far fa-calendar"></span>
                                            <input class="l-icon datepicker" type="text" name="fieldname" value="" placeholder="DD-MM-YYYY" required readonly>
                                            <span class="arrow-icon far fa-angle-down"></span>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-12 col-sm-12">
                                        <div class="field-inner">
                                            <span class="alt-icon far fa-clock"></span>
                                            <select class="l-icon">
                                                <option>08 : 00 am</option>
                                                <option>09 : 00 am</option>
                                                <option>10 : 00 am</option>
                                                <option>11 : 00 am</option>
                                                <option>12 : 00 pm</option>
                                                <option>01 : 00 pm</option>
                                                <option>02 : 00 pm</option>
                                                <option>03 : 00 pm</option>
                                                <option>04 : 00 pm</option>
                                                <option>05 : 00 pm</option>
                                                <option>06 : 00 pm</option>
                                                <option>07 : 00 pm</option>
                                                <option>08 : 00 pm</option>
                                                <option>09 : 00 pm</option>
                                                <option>10 : 00 pm</option>
                                            </select>
                                            <span class="arrow-icon far fa-angle-down"></span>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="field-inner">
                                            <textarea name="fieldname" placeholder="Message" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <div class="field-inner">
                                            <button type="submit" class="theme-btn btn-style-one clearfix">
                                                <span class="btn-wrap">
                                                    <span class="text-one">book a table</span>
                                                    <span class="text-two">book a table</span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="info-col col-lg-4 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="img-layer" style="background-image: url(images/background/image-11.jpg);"></div>
                        <div class="title">
                            <div class="subtitle">hot deal</div>
                            <h5>Lunch & Dinner Specials</h5>
                        </div>
                        <div class="data">
                            <div class="discount-info">
                                <div class="s-ttl">up to</div>
                                <div class="num">45%</div>
                                <div class="s-ttl">discount</div>
                            </div>
                            <div class="instruction">
                                • Not valid for online order <br> • Non-refundable <br> • Offer end on 25 Jan <br>
                            </div>
                            <div class="link-box">
                                <a href="reservation-opentable.html" class="theme-btn btn-style-one clearfix">
                                    <span class="btn-wrap">
                                        <span class="text-one">book now</span>
                                        <span class="text-two">book now</span>
                                    </span>
                                </a>
                            </div>
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