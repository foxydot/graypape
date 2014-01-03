<?php
function msd_add_location_image(){
    global $post;
    //setup thumbnail image args to be used with genesis_get_image();
    $size = 'headshot'; // Change this to whatever add_image_size you want
    $default_attr = array(
            'class' => "alignleft attachment-$size $size",
            'alt'   => $post->post_title,
            'title' => $post->post_title,
    );

    // This is the most important part!  Checks to see if the post has a Post Thumbnail assigned to it. You can delete the if conditional if you want and assume that there will always be a thumbnail
    if ( has_post_thumbnail() ) {
        printf( '%s', genesis_get_image( array( 'size' => $size, 'attr' => $default_attr ) ) );
    }
}
function msd_location_contact_info(){
    global $post,$contact_info,$location_info;
    ?>
    <ul class="team-member-contact-info">
        <?php $contact_info->the_field('_team_phone'); ?>
        <?php if($contact_info->get_the_value() != ''){ ?>
            <li class="phone"><i class="icon-phone icon-large"></i> <?php print msd_str_fmt($contact_info->get_the_value(),'phone'); ?></li>
        <?php } ?>
        
        <?php $contact_info->the_field('_team_fax'); ?>
        <?php if($contact_info->get_the_value() != ''){ ?>
            <li class="mobile"><i class="icon-print icon-large"></i> <?php print msd_str_fmt($contact_info->get_the_value(),'phone'); ?></li>
        <?php } ?>
        
        <?php $location_info->the_field('address'); ?>
        <?php if($location_info->get_the_value() != ''){ ?>
            <?php 
            $addresses = $location_info->get_the_value(); 
            foreach($addresses AS $address){
                if($address['street']){ $theaddress .= $address['street']; }
                if($address['street2']){ $theaddress .= ' '.$address['street2']; }
                if($address['city']){ $theaddress .= ', '.$address['city']; }
                if($address['state']){ $theaddress .= ', '.$address['state']; }
                if($address['zip']){ $theaddress .= ' '.$address['zip']; }
            }
            ?>
            <li class="address"><i class="icon-flag icon-large"></i><?php print $theaddress; ?></li>
        <?php } ?>
    </ul>
    <?php
}