
<?php 
get_header( );
switch (the_category()) {
    case "tour":
        get_template_part('contents/content', 'tour' );
        break;
    case "hotel":
        get_template_part('archives/archive', 'hotel' );
        break;
}

