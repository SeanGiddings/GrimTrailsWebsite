<?php /* Template Name: Store*/ ?>

<?php get_header(); ?>

<?php do_action('announcements_section'); ?>

<?php if ( is_active_sidebar( 'announcement__section' ) ) : ?>
<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
  <?php dynamic_sidebar( 'announcement__section' ); ?>
</div><!-- #primary-sidebar -->
<?php endif; ?>

<div class="body__wrapper">
    <div class="container">
        <div class="row">
            <div class="card col-lg-4">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ProductDemo.jpg" alt="Denim Jeans" style="width:100%">
                <h1 class="product__title">Tailored Jeans</h1>
                <p class="product__price">$19.99</p>
                <p class="product__description">Some text about the jeans..</p>
                <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="business" value="grimtrails01@gmail.com">
                    <input type="hidden" name="lc" value="US">
                    <input type="hidden" name="item_name" value="Grim Trails Admission">
                    <input type="hidden" name="amount" value="20.00">
                    <input type="hidden" name="currency_code" value="USD">
                    <input type="hidden" name="button_subtype" value="products">
                    <input type="hidden" name="no_note" value="0">
                    <input type="hidden" name="add" value="1">
                    <input type="hidden" name="bn" value="PP-ShopCartBF:btn_cart_LG.gif:NonHostedGuest">
                    <input type="image" src="<?php echo get_stylesheet_directory_uri(); ?>/images/paypalcheckout-60px.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
        </div>
        <div class="card col-lg-4">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ProductDemo.jpg" alt="Denim Jeans" style="width:100%">
            <h1 class="product__title">Tailored Jeans</h1>
            <p class="product__price">$19.99</p>
            <p class="product__description">Some text about the jeans..</p>
            <p><button>Add to Cart</button></p>
        </div>
        <div class="card col-lg-4">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ProductDemo.jpg" alt="Denim Jeans" style="width:100%">
            <h1 class="product__title">Tailored Jeans</h1>
            <p class="product__price">$19.99</p>
            <p class="product__description">Some text about the jeans..</p>
            <p><button>Add to Cart</button></p>
        </div>
        <div class="card col-lg-4">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ProductDemo.jpg" alt="Denim Jeans" style="width:100%">
            <h1 class="product__title">Tailored Jeans</h1>
            <p class="product__price">$19.99</p>
            <p class="product__description">Some text about the jeans..</p>
            <p><button>Add to Cart</button></p>
        </div>
    </div>
</div>


</div>

<?php get_footer(); ?>