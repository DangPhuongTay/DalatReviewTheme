<div class="motorbike__container--content">
    <div class="motorbike__container--header">
        <?php
        global $wp;
        $slug_request = $wp->request;
        $args = array(
            'taxonomy' => 'product_cat',
            'orderby' => 'name'
        );
        $all_categories = get_categories($args);

        foreach ($all_categories as $cat) {
            if ($cat->slug == $slug_request) {
                echo $cat->name;
            } else {
                echo '';
            }
        }
        ?>
    </div>

    <?php get_template_part('templates/template-vehicle/archive', 'vehicle'); ?>


</div>