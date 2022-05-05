<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package SKT Wildlife
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<a class="skip-link screen-reader-text" href="#content_navigator">
<?php esc_html_e( 'Skip to content', 'skt-wildlife' ); ?>
</a>
<?php
	$header_trans = get_theme_mod('option_header_transparent', 1);
	$header_trans_inner = get_theme_mod('option_inner_header_transparent', 1);
	$showpagebanner = get_theme_mod('inner_page_banner_option', 1);
	$showpostbanner = get_theme_mod('inner_post_banner_option', 1);
	$pagethumb = get_theme_mod('inner_page_banner_thumb');
	$postthumb = get_theme_mod('inner_post_banner_thumb');

	$leftside_text = get_theme_mod('leftside_text');
	$rightside_text = get_theme_mod('rightside_text');
	$hideheaderinfobox = get_theme_mod('hide_header_infobox', 1);	
?>

<?php if( !is_home() && is_front_page()) { ?>
<div class="headerfl-area <?php if($header_trans == '') { echo esc_html('transheader'); } ?>">
<?php } else {?>
<div class="headerfl-area-inner <?php if(!is_home() && $header_trans_inner == '') { echo esc_html('transheader'); } ?>">
<?php } ?>


<?php if( $hideheaderinfobox == '') { ?>
<div class="head-info-area">
  <div class="container">
        <?php if (!empty($leftside_text)) { ?><div class="left"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/icon-location.png"/><?php echo esc_html($leftside_text); ?></div><?php } ?>
        <?php if (!empty($rightside_text)) { ?><div class="right"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/phone-icon.png"/><?php echo esc_html($rightside_text); ?></div><?php } ?>
        <div class="clear"></div>
  </div>
</div>
<?php } ?>
<div class="header-fullarea">
<div class="container">
<div class="header">
    <div class="logo">
		<?php skt_wildlife_the_custom_logo(); ?>
        <div class="clear"></div>
		<?php	
        $description = get_bloginfo( 'description', 'display' );
        ?>
        <div id="logo-main">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <h2 class="site-title"><?php bloginfo('name'); ?></h2>
        <?php if ( $description || is_customize_preview() ) :?>
        <p class="site-description"><?php echo esc_html($description); ?></p>                          
        <?php endif; ?>
        </a>
        </div>
    </div> 
    	<div class="header-right-area">
        <div id="navigation"><nav id="site-navigation" class="main-navigation">
				<button type="button" class="menu-toggle">
					<span></span>
					<span></span>
					<span></span>
				</button>
		<?php wp_nav_menu( array('theme_location' => 'primary', 'container' => 'ul', 'menu_id' => 'primary', 'menu_class' => 'primary-menu menu' ) ); ?>
			</nav></div>
        <div class="header-extras">
            	<div class="header-search-toggle"><img src="<?php echo esc_url(get_template_directory_uri());?>/images/search-icon.png"/></div>
            	<div class="header-search-form">
                    <form method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                      <input type="search" class="search-field" placeholder="<?php esc_attr_e( 'Search', 'skt-wildlife' ); ?>" name="s">
                      <input type="submit" class="search-submit" value="<?php esc_attr_e( 'Search', 'skt-wildlife' ); ?>">
                    </form>
          		</div>
    		<div class="clear"></div>
            </div>    
        </div>
    <div class="clear"></div>  
  </div>
  </div><!-- container --> 
</div>  
</div>
  <?php if( !is_home() && !is_front_page() && is_page()) {?>
      <div class="inner-banner-thumb">
      	<?php if($showpagebanner == '') {?>
        <?php 	if ( has_post_thumbnail() ) {
                    echo esc_url(the_post_thumbnail('full'));
                }else{
			if(!empty($pagethumb)){ ?>
            <img src="<?php echo esc_url($pagethumb); ?>" />
            <?php } } ?>
        <?php } ?>    
        <div class="banner-container <?php if($showpagebanner != '') {?>black-title<?php }?>"><h1><?php the_title(); ?></h1></div>
        <div class="clear"></div>
      </div>
  <?php } ?>
  <?php if( !is_home() && !is_front_page() && !is_page() && is_single() && 'post' == get_post_type()) {?>
      <div class="inner-banner-thumb">
      	<?php if($showpostbanner == '') {?>
        <?php 	if ( has_post_thumbnail() ) {
                    echo esc_url(the_post_thumbnail('full'));
                }else{
			if(!empty($postthumb)){ ?>
            <img src="<?php echo esc_url($postthumb); ?>" />
            <?php }  } ?>
         <?php } ?>   
        <div class="banner-container <?php if($showpostbanner != '') {?>black-title<?php }?>"><h1><?php the_title(); ?></h1></div>
        <div class="clear"></div>
      </div>
  <?php } ?>  
  <?php if (is_category() || is_archive()) { ?>
  
  <div class="inner-banner-thumb">
      	<?php if($showpostbanner == '') {?>
        <?php 
			if(!empty($postthumb)){ ?>
            <img src="<?php echo esc_url($postthumb); ?>" />
            <?php }   ?>
         <?php } ?>   
        <div class="banner-container <?php if($showpostbanner != '') {?>black-title<?php }?>">
  	    <?php if ( class_exists( 'WooCommerce' ) ) {
		if(is_shop()) {
			?><h1><?php woocommerce_page_title(); ?></h1><?php
		}else{
		?><h1><?php the_archive_title(); ?></h1><?php	
		}
	}else{ ?>
    <h1><?php the_archive_title(); ?></h1>
    <?php } ?>	
  </div>
        <div class="clear"></div>
      </div>
  <?php } ?>