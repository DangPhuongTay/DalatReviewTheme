<?php global $product; ?>


  <div class="popup__item">
    <div class="popup__item--name">
    <?php
        substr(the_title(), 6);
       ?>
    </div>
    <div class="popup__item--price">
      <span><?php echo $product->get_price_html(); ?></span>
    </div>
    <?php wc_get_template('loop/add-to-cart.php'); ?>
  </div>
