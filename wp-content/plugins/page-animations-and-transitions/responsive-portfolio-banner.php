<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
wp_enqueue_style( 'respport-banner', WL_Page_Ainm_URI . '/css/banner.css' );
$gp_imgpath = WL_Page_Ainm_URI . "/images/resp_pro.png";
?>
<div class="wb_plugin_feature notice  is-dismissible">
    <div class="wb_plugin_feature_banner default_pattern pattern_ ">
        <div class="wb-col-md-6 wb-col-sm-12 box">
            <div class="ribbon"><span>Go Pro</span></div>
            <img class="wp-img-responsive" src="<?php echo $gp_imgpath; ?>" alt="img">
        </div>
        <div class="wb-col-md-6 wb-col-sm-12 wb_banner_featurs-list">
            <span class="gp_banner_head"><h2><?php _e( 'Responsive Portfolio Pro Features', WL_PAT_DOMAIN ); ?> </h2></span>
            <ul>
                <li><?php _e( '8 Gallery Layout', WL_PAT_DOMAIN ); ?></li>
                <li><?php _e( 'Unlimited Hover Color', WL_PAT_DOMAIN ); ?></li>
                <li><?php _e( 'Album View Gallery', WL_PAT_DOMAIN ); ?></li>
                <li><?php _e( 'Isotope or Masonary Effects', WL_PAT_DOMAIN ); ?></li>
                <li><?php _e( '8 Type of Hover Animations', WL_PAT_DOMAIN ); ?></li>
                <li><?php _e( '500 plus Font Style', WL_PAT_DOMAIN ); ?></li>
                <li><?php _e( 'Multiple Image uploader', WL_PAT_DOMAIN ); ?></li>                
                <li><?php _e( '8 Types of Lightbox Integrated', WL_PAT_DOMAIN ); ?></li>
                <li><?php _e( 'Drag and Drop image Position', WL_PAT_DOMAIN ); ?></li>
                <li><?php _e( 'Shortcode Button on post or page', WL_PAT_DOMAIN ); ?></li>
                <li><?php _e( 'Font Icon Customization & Many More', WL_PAT_DOMAIN ); ?></li>
				<li><?php _e( 'Hide or Show Gallery Title and Label', WL_PAT_DOMAIN ); ?></li>
            </ul>
            <div class="wp_btn-grup">
                <a class="wb_button-primary" href="http://demo.weblizar.com/responsive-portfolio-pro/"
                   target="_blank"><?php _e( 'View Demo', WL_PAT_DOMAIN ); ?></a>
                <a class="wb_button-primary" href="https://weblizar.com/plugins/responsive-portfolio-pro/"
                   target="_blank"><?php _e( 'Buy Now', WL_PAT_DOMAIN ); ?> $19</a>
            </div>

        </div>
    </div>
</div>