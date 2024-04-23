<?php global $product; ?>


  <div class="popup__item">
    <div class="popup__item--name">
    <?php
            function the_title_trim($title)
            {
            $pattern[0] = '/Protected:/';
            $pattern[1] = '/Private:/';
            $replacement[0] = ''; // Enter some text to put in place of Protected:
            $replacement[1] = ''; // Enter some text to put in place of Private:
            return preg_replace($pattern, $replacement, $title);
            }
            add_filter('the_title', 'the_title_trim');
          the_title();
       ?>
    </div>
    <div class="popup__item--price">
      <span><?php echo $product->get_price_html(); ?></span>
    </div>
    <?php wc_get_template('loop/add-to-cart.php'); ?>
  </div>
