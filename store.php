<?php /* Template Name: Store*/?>

<?php get_header();?>


<div class="body__wrapper">

<?php do_action('product_section');?>

      <?php if (is_active_sidebar('product__section')): ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar('product__section');?>
	</div><!-- #primary-sidebar -->
<?php endif;?>

<?php if (!is_active_sidebar('product__section')): ?>
	<h2 class="comingsoon">Products Coming Soon!
	</h2>
<?php endif;?>
<!--
<div class="card__container col-lg-12">
        <div class="card__image"><img src="<?php echo esc_url($image); ?>" alt=""></div>
        <div class="card__info">
                <h1 class="product__title">Funny Hotdog Hat</h1>
                <p class="product__price"><?php echo $price ?></p>
                <p class="product__description"><?php echo $description ?></p>
        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_cart">
                    <input type="hidden" name="business" value="grimtrails01@gmail.com">
                    <input type="hidden" name="lc" value="US">
                    <input type="hidden" name="item_name" value="<?php echo $title ?>">
                    <input type="hidden" name="amount" value="<?php echo $price ?>">
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



<div class="card__container col-lg-12">
        <div class="card__image"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ProductDemo.jpg" alt="Denim Jeans"></div>
        <div class="card__info">
                <h1 class="product__title">Funny Hotdog Hat</h1>
                <p class="product__price">$19.99</p>
                <p class="product__description">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                    sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
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
                
                -->
    </div>


<?php get_footer();?>