<?php
//about theme info
add_action( 'admin_menu', 'skt_wildlife_abouttheme' );
function skt_wildlife_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'skt-wildlife'), esc_html__('About Theme', 'skt-wildlife'), 'edit_theme_options', 'skt_wildlife_guide', 'skt_wildlife_mostrar_guide');   
} 
//guidline for about theme
function skt_wildlife_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_html_e('Theme Information', 'skt-wildlife'); ?>
		   </div>
          <p><?php esc_html_e('SKT Wildlife for open shelter, jungle safari, veterinary clinic, zoo, pet shop, aquarium. It can also be used for green landscaping, nature conservation, environment, forest, farm produce, bio produce, animal husbandry, agriculture, Ayurveda, medicines, organic products, NGOs, resorts, travel trip and tourism, photographers, wildlife enthusiasts and animal lovers. Supports eCommerce.','skt-wildlife'); ?></p>
          <a href="<?php echo esc_url(SKT_WILDLIFE_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(SKT_WILDLIFE_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'skt-wildlife'); ?></a> | 
				<a href="<?php echo esc_url(SKT_WILDLIFE_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'skt-wildlife'); ?></a> | 
				<a href="<?php echo esc_url(SKT_WILDLIFE_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'skt-wildlife'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(SKT_WILDLIFE_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>