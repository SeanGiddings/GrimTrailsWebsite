<?php /* Template Name: Tickets*/ ?>

<?php get_header(); ?>

  <div class="body__wrapper">

     
      <!--Haunt Description-->
      <div class="tertpage__container">
        <div class="tertpage__title">
          <h1>
            Tickets
          </h1>
        </div>

        <div class="tertpage__text">
          <p>Tickets can be purchased at the gate or online using paypal</p>

        <p><br>Still have questions?  Please refer to our F.A.Q.</p>
        </div>
        <div class="paypal-button">
        <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
            <input type="hidden" name="cmd" value="_cart">
            <input type="hidden" name="business" value="seandgiddings@gmail.com">
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
</div>

      <?php get_footer(); ?>
