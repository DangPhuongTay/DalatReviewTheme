<?php global $product; ?>


  <div class="popup__item">
    <div class="popup__item--name">
    <?php
       the_title();
       ?>
    </div>
    <div class="popup__item--price">
      <span><?php echo $product->get_price_html(); ?></span>
    </div>
    <?php wc_get_template('loop/add-to-cart.php'); ?>
  </div>
