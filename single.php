<?php

get_header();

    function slug(){
        global $product; 
        $terms = get_the_terms($product->ID, 'product_cat');
        foreach ($terms as $term) {
            $cat_parent_id = $term->parent;
            $cat_parent =  get_term_by('id',  $cat_parent_id, 'product_cat');
            return $cat_parent->slug;
        }
    }
    get_template_part('templates/template-'.slug().'/content',slug());
    get_footer();
?>



