<?php
remove_action('genesis_post_content', 'genesis_do_post_content');
add_action('genesis_before_loop','msd_taxonomy_description');
//add_action('genesis_before_loop','msd_taxonomy_children');
add_filter('genesis_post_title_text','msd_add_arrow_to_title');
remove_action( 'genesis_sidebar', 'genesis_do_sidebar' );
add_action('genesis_sidebar','msd_sidebar_taxonomy_menu');
genesis();

function msd_sidebar_taxonomy_menu(){
    print '<div class="taxonomy_menu">';
    print '<ul class="menu">';
    print '<li>Our Work<ul>';
    print msd_list_taxonomy('project_type','Project Types');
    print msd_list_taxonomy('market_sector','Market Sectors');
    print '<li><strong><a href="projects-state">By State</a></strong></li>';
    print '</ul></li>';
    print '</ul>';
    print '</div>';
}
function msd_add_arrow_to_title($title){
    $title = $title . ' <i class="icon-circle-arrow-right"></i>';
    return $title;
}
?>
