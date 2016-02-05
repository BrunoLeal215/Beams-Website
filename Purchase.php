<!DOCTYPE html>
<html>
<head>
    <?php include_once('Template/Head.php'); ?>
    
</head>
<body class="page-template-contact full-content wide red header-absolute menu-hover-edge">
 <?php $page = 'products'; include_once('Template/TopMenu.php'); ?>
<!--MAIN PAGE-->

<section id="featured-title" class="featured-title row-background row-parallax">
    <div class="strip-bg"></div>
    <div class="container">
        <div class="row">
            <div class="title">
                <h1>Shop</h1>
            </div>
        </div>
    </div>
</section>

<div class="breadcrumb-wrapper container">
    <ul class="breadcrumb">
        <li>
            <span>
                <a class="home" href="index.html">
                    <span>Home</span>
                </a>
            </span>
        </li>
        <li>
            <span>
                <span>Shop</span>
            </span>
        </li>
    </ul>
</div>

<main id="main" class="main clearfix">
    <form action="/Purchase/ToggleCart">
        <div class="container">
            <div class="row">
                <section id="content" class="woocommerce columns-4 site-content hfeed site-content col-xs-12 col-sm-12 col-md-12" role="main">
                    <ul class="products">
                        <li class="first post-79 product type-product status-publish has-post-thumbnail product_cat-cutters product_cat-saws clearfix col-sm-6 col-xs-6 col-md-3 shipping-taxable purchasable product-type-simple product-cat-cutters product-cat-saws instock">
                            <div class="product-inner">
                                <a href="#">
                                    <img width="266" height="268" src="Content/images/newest-projects/07.jpg" class="attachment-shop_catalog wp-post-image" alt="07" />
                                    <div class="product-entry-content">
                                        <h3>Industrial Cutter</h3>
                                        <div class="star-rating" title="No ratings yet"></div>
                                        <span class="price"><span class="amount">&pound;34.00</span></span>
                                    </div>
                                </a>
                                <button class="button add_to_cart_button product_type_simple" name="itembutton" id="itembutton" value="item1" type="submit">Add to cart</button>
                            </div>
                        </li>

                        <li class="post-76 product type-product status-publish has-post-thumbnail product_cat-drills product_cat-handy-tools clearfix col-sm-6 col-xs-6 col-md-3 shipping-taxable purchasable product-type-simple product-cat-drills product-cat-handy-tools instock">
                            <div class="product-inner">
                                <a href="#">
                                    <img width="266" height="268" src="Content/images/newest-projects/08.jpg" class="attachment-shop_catalog wp-post-image" alt="08" />
                                    <div class="product-entry-content">
                                        <h3>Industrial Drill</h3>
                                        <div class="star-rating" title="Rated 4.00 out of 5">
                                            <span class="star_rating_mas4"><strong class="rating">4.00</strong> out of 5</span>
                                        </div>
                                        <span class="price"><span class="amount">&pound;15.00</span></span>
                                    </div>
                                </a>
                                <a href="index499f.html?add-to-cart=76" rel="nofollow" data-product_id="76" data-product_sku="" data-quantity="1" class="button add_to_cart_button product_type_simple">Add to cart</a>
                            </div>
                        </li>
                    </ul>
                </section>
            </div>
        </div>
    </form>
</main>
<!--main-->

<!--END MAIN PAGE-->
 <?php include_once('Template/BottomMenu.php'); ?>
</body>
</html>
