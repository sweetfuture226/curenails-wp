<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
		<div class="site-info">
			<?php $blog_info = get_bloginfo( 'name' ); ?>
			<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
			}
			?>
			<?php if ( has_nav_menu( 'footer' ) ) : ?>
				<nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'twentynineteen' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_class'     => 'footer-menu',
							'depth'          => 1,
						)
					);
					?>
				</nav><!-- .footer-navigation -->
			<?php endif; ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->


<?php wp_footer(); ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://skardtechs.com/curenails/wp-content/themes/twentynineteen/app.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parallax.js/1.3.1/parallax.min.js"></script>

<?php
global $post;
  $post=$post->ID;
if($post==6)
{
	echo "
	    <script type='text/javascript'>
            /* Home Page Js  */
            function myFunction() {
            	jQuery(document).ready(function() {
            	    jQuery(window).scroll(function () {
            		    jQuery('.parallax-bg').css('background-position','100% ' + ($(this).scrollTop() / 0) + 'px');
            	    });
            	    
            	});
            }
            jQuery(document).ready(function() {
                jQuery('.banner').parallax({
            		imageSrc : 'http://skardtechs.com/curenails/wp-content/uploads/2019/06/home_banner2.jpg'
            		});
            });
            var top1 = jQuery('.banner').offset().top;
            var top2 = jQuery('.secnd_section ').offset().top;
            var top3 = jQuery('.thrd_section ').offset().top;
            var top4 = jQuery('.forth_section ').offset().top;
            var top5 = jQuery('.fith_section ').offset().top;
            var top6 = jQuery('.sixt_section').offset().top;
            var top7 = jQuery('.seven_section').offset().top;
            var top8 = jQuery('.eight_section ').offset().top;
            var top9 = jQuery('.footer_top  ').offset().top;
            var top10 = jQuery('.site-footer').offset().top;
            
            jQuery(document).scroll(function() {
              var scrollPos = jQuery(document).scrollTop();
              if (scrollPos >= top1 && scrollPos < top2) {
                jQuery('#masthead').css('background', 'transparent');
                jQuery('#masthead').css('padding', '1rem 3remm');
              } else if (scrollPos >= top2 && scrollPos < top3) {
                jQuery('#masthead').css('background', '#e5dede');
                jQuery('#masthead').css('padding', '1rem 3rem');
              }
               else if (scrollPos >= top3 && scrollPos < top4) {
                jQuery('#masthead').css('background', 'transparent');
                jQuery('#masthead').css('padding', '1rem 3rem');
              }
               else if (scrollPos >= top4 && scrollPos < top5) {
                jQuery('#masthead').css('background', '#c1c9d0');
                jQuery('#masthead').css('padding', '1rem 3rem');
              }
               else if (scrollPos >= top5 && scrollPos < top6) {
                jQuery('#masthead').css('background', '#e5dede');
                jQuery('#masthead').css('padding', '1rem 3rem'); 
              }
              else if (scrollPos >= top6 && scrollPos < top7) {
                jQuery('#masthead').css('background', 'transparent');
                jQuery('#masthead').css('padding', '1rem 3rem'); 
              }
              else if (scrollPos >= top7 && scrollPos < top8) {
                jQuery('#masthead').css('background', '#8c9a65');
                jQuery('#masthead').css('padding', '1rem 3rem'); 
              }
              else if (scrollPos >= top8 && scrollPos < top9) {
                jQuery('#masthead').css('background', '#e5dede');
                jQuery('#masthead').css('padding', '1rem 3rem'); 
              }
              else if (scrollPos >= top9 && scrollPos < top10) {
                jQuery('#masthead').css('background', '#c1c9d0');
                jQuery('#masthead').css('padding', '1rem 3rem'); 
              }
            });
            
            jQuery(window).scroll(function(){
              var scroll = jQuery(window).scrollTop();
              if((scroll > 0)&&(scroll < 250)){
                jQuery('.hed_txt').removeClass('animation5');
              }
              else if(scroll > 250){
                jQuery('.hed_txt').addClass('animation5');
              }
            });
            
            jQuery(window).scroll(function(){
              var scroll = jQuery(window).scrollTop();
              if((scroll > 0)&&(scroll < 120)){
                jQuery('.sect_img3').removeClass('animation4');
              }
              else if(scroll > 120){
                jQuery('.sect_img3').addClass('animation4');
              }
            });
            
            jQuery(window).scroll(function(){
              var scroll = jQuery(window).scrollTop();
              if((scroll > 0)&&(scroll < 250)){
                jQuery('.sect_img3-2').removeClass('animation4');
              }
              else if(scroll > 250){
                jQuery('.sect_img3-2').addClass('animation4');
              }
            });
            
            jQuery(window).scroll(function(){
              var scroll = jQuery(window).scrollTop();
              if((scroll > 500)&&(scroll < 850)){
                jQuery('.img1_sect').addClass('scale-img');
              }
              else if(scroll > 850){
                jQuery('.img1_sect').removeClass('scale-img');
              }
            });
            
            jQuery(window).scroll(function(){
              var scroll = jQuery(window).scrollTop();
              if((scroll > 500)&&(scroll < 1600)){
                jQuery('.img9_sect').removeClass('scale-img3');
              }
              else if(scroll > 1600){
                jQuery('.img9_sect').addClass('scale-img3');
              }
            });
            
            jQuery(window).scroll(function(){
              var scroll = jQuery(window).scrollTop();
              if((scroll > 500)&&(scroll < 3350)){
                jQuery('.img_scle2 ').removeClass('scale-img4');
              }
              else if(scroll > 3350){
                jQuery('.img_scle2 ').addClass('scale-img4');
              }
            });
            
            jQuery(window).scroll(function(){
              var scroll = jQuery(window).scrollTop();
              if((scroll > 500)&&(scroll < 1300)){
                jQuery('.sid_img').removeClass('scale-img3');
              }
              else if(scroll > 1300){
                jQuery('.sid_img').addClass('scale-img3');
              }
            });
            
            jQuery(window).scroll(function(){
              var scroll = jQuery(window).scrollTop();
              if((scroll > 500)&&(scroll < 4100)){
                jQuery('.txtzm_sectn').removeClass('animation10');
              }
              else if(scroll > 4100){
                jQuery('.txtzm_sectn').addClass('animation10');
              }
            });
            
            jQuery(window).scroll(function(){
              var scroll = jQuery(window).scrollTop();
              if((scroll > 500)&&(scroll < 4300)){
                jQuery('.prodt_sectn').removeClass('scale-img5');
              }
              else if(scroll > 4300){
                jQuery('.prodt_sectn').addClass('scale-img5');
              }
            });
            
            jQuery(window).scroll(function(){
              var scroll = jQuery(window).scrollTop();
              if((scroll > 0)&&(scroll < 1600)){
                jQuery('.hed_txt4').removeClass('animation6');
                jQuery('.hed_txt5').removeClass('animation6');
              }
              else if(scroll > 1600){
                jQuery('.hed_txt4').addClass('animation6');
                jQuery('.hed_txt5').addClass('animation6');
              }
            });
            
            jQuery(window).scroll(function(){
              var scroll = jQuery(window).scrollTop();
              if((scroll > 0)&&(scroll < 2500)){
                jQuery('.img7_sect').removeClass('animation7');
              }
              else if(scroll > 2500){
                jQuery('.img7_sect').addClass('animation7');
              }
            });
            
            
            jQuery(window).scroll(function(){
              var scroll = jQuery(window).scrollTop();
              if((scroll > 0)&&(scroll < 3000)){
                jQuery('.img8_sect').removeClass('animation8');
              }
              else if(scroll > 3000){
                jQuery('.img8_sect').addClass('animation8');
              }
            });
            
            jQuery(window).scroll(function(){
              var scroll = jQuery(window).scrollTop();
              if((scroll > 0)&&(scroll < 4700)){
                jQuery('.img10_sect').removeClass('matrix');
              }
              else if(scroll > 4700){
                jQuery('.img10_sect').addClass('matrix');
              }
            });
            
            
            jQuery(window).scroll(function(){
              var scroll = jQuery(window).scrollTop();
              if((scroll > 0)&&(scroll < 4800)){
                jQuery('.img11_sect').removeClass('scale-img4');
              }
              else if(scroll > 4800){
                jQuery('.img11_sect').addClass('scale-img4');
              }
            });
            
            jQuery(window).scroll(function(){
              var scroll = jQuery(window).scrollTop();
              if((scroll > 500)&&(scroll < 5700)){
                jQuery('.txtzm_sectn2').removeClass('animation11');
              }
              else if(scroll > 5700){
                jQuery('.txtzm_sectn2').addClass('animation11');
              }
            });
            
            
            /* Home Page Js  */
        </script>
	";
}
?>
<?php
global $post;
$post2=$post->ID;
if($post==17)
{
	echo "
    <script type='text/javascript'>
    
    /* About Page Js  */
    
        jQuery(window).scroll(function(){
          var scroll = jQuery(window).scrollTop();
          if((scroll > 0)&&(scroll < 100)){
            jQuery('.abt_txt').removeClass('abt_animation');
          }
          else if(scroll > 100){
            jQuery('.abt_txt').addClass('abt_animation');
          }
        });
         jQuery(window).scroll(function(){
          var scroll = jQuery(window).scrollTop();
          if((scroll > 0)&&(scroll < 400)){
            jQuery('.abt_img').removeClass('abt_animation1');
          }
          else if(scroll > 400){
            jQuery('.abt_img').addClass('abt_animation1');
          }
        });
         jQuery(window).scroll(function(){
          var scroll = jQuery(window).scrollTop();
          if((scroll > 0)&&(scroll < 700)){
            jQuery('.abt_txt1').removeClass('abt_animation2');
          }
          else if(scroll > 700){
            jQuery('.abt_txt1').addClass('abt_animation2');
          }
        });
         jQuery(window).scroll(function(){
          var scroll = jQuery(window).scrollTop();
          if((scroll > 0)&&(scroll < 920)){
            jQuery('.abt_txt2').removeClass('abt_animation2');
          }
          else if(scroll > 920){
            jQuery('.abt_txt2').addClass('abt_animation2');
          }
        });
         jQuery(window).scroll(function(){
          var scroll = jQuery(window).scrollTop();
          if((scroll > 0)&&(scroll < 1550)){
            jQuery('.abt_txt3').removeClass('abt_animation3');
          }
          else if(scroll > 1550){
            jQuery('.abt_txt3').addClass('abt_animation3');
          }
        });
        jQuery(window).scroll(function(){
          var scroll = jQuery(window).scrollTop();
          if((scroll > 0)&&(scroll < 1700)){
            jQuery('.abt_img2').removeClass('abt_animation4');
          }
          else if(scroll > 1700){
            jQuery('.abt_img2').addClass('abt_animation4');
          }
        });
        jQuery(window).scroll(function(){
          var scroll = jQuery(window).scrollTop();
          if((scroll > 0)&&(scroll < 1800)){
            jQuery('.abt_txt4').removeClass('abt_animation5');
          }
          else if(scroll > 1800){
            jQuery('.abt_txt4').addClass('abt_animation5');
          }
        });
        jQuery(window).scroll(function(){
          var scroll = jQuery(window).scrollTop();
          if((scroll > 500)&&(scroll < 2800)){
            jQuery('.txtzm_sectn2').removeClass('animation11');
          }
          else if(scroll > 2800){
            jQuery('.txtzm_sectn2').addClass('animation11');
          }
        });
        
        var top1 = jQuery('.abt_sect').offset().top;
        var top2 = jQuery('.abt_sect1 ').offset().top;
        var top3 = jQuery('.abt_sect2 ').offset().top;
        var top4 = jQuery('.abt_sect3 ').offset().top;
        var top5 = jQuery('.footer_top  ').offset().top;
        var top6 = jQuery('.site-footer').offset().top;
        
        
         
            jQuery(document).scroll(function() {
              var scrollPos = jQuery(document).scrollTop();
              if (scrollPos >= top1 && scrollPos < top2) {
                jQuery('#masthead').css('background', '#c1c9d0');
                jQuery('#masthead').css('padding', '1rem 3remm');
              } else if (scrollPos >= top2 && scrollPos < top3) {
                jQuery('#masthead').css('background', '#c1c9d0');
                jQuery('#masthead').css('padding', '1rem 3rem');
              }
               else if (scrollPos >= top3 && scrollPos < top4) {
                jQuery('#masthead').css('background', '#e5dede');
                jQuery('#masthead').css('padding', '1rem 3rem');
              }
               else if (scrollPos >= top4 && scrollPos < top5) {
                jQuery('#masthead').css('background', '#c1c9d0');
                jQuery('#masthead').css('padding', '1rem 3rem');
              }
               else if (scrollPos >= top5 && scrollPos < top6) {
                jQuery('#masthead').css('background', '#c1c9d0');
                jQuery('#masthead').css('padding', '1rem 3rem');
              }
            });
        
    /* About Page Js  */
    </script>
";
}
?>
<?php
global $post;
$post3=$post->ID;
if($post==19)
{
	echo "
    <script type='text/javascript'>
    
    /* Contact Page Js  */
    jQuery(window).scroll(function(){
          var scroll = jQuery(window).scrollTop();
          if((scroll > 0)&&(scroll < 200)){
            jQuery('.cont_txt').removeClass('cont_animation');
          }
          else if(scroll > 200){
            jQuery('.cont_txt').addClass('cont_animation');
          }
        });
       
        jQuery(window).scroll(function(){
          var scroll = jQuery(window).scrollTop();
          if((scroll > 0)&&(scroll < 1500)){
            jQuery('.txtzm_sectn2').removeClass('cont_animation1');
          }
          else if(scroll > 1500){
            jQuery('.txtzm_sectn2').addClass('cont_animation1');
          }
        });
        
         var top1 = jQuery('.cont_sect').offset().top;
        var top2 = jQuery('.cont_sect1 ').offset().top;
        var top3 = jQuery('.footer_top ').offset().top;
        var top4 = jQuery('.site-footer ').offset().top;
        
         jQuery(document).scroll(function() {
              var scrollPos = jQuery(document).scrollTop();
              if (scrollPos >= top1 && scrollPos < top2) {
                jQuery('#masthead').css('background', '#e5dede');
                jQuery('#masthead').css('padding', '1rem 3remm');
              } else if (scrollPos >= top2 && scrollPos < top3) {
                jQuery('#masthead').css('background', '#e5dede');
                jQuery('#masthead').css('padding', '1rem 3rem');
              }
               else if (scrollPos >= top3 && scrollPos < top4) {
                jQuery('#masthead').css('background', '#c1c9d0');
                jQuery('#masthead').css('padding', '1rem 3rem');
              }
            });
            
 /* Contact Page Js  */
    </script>
";
}
?>
<?php
global $post;
  $post4=$post->ID;
if($post==15)
{
	echo "
    <script type='text/javascript'>
    
    /* Menu Page Js  */
        function myFunction() {
            	jQuery(document).ready(function() {
            	    jQuery(window).scroll(function () {
            		    jQuery('.parallax-bg').css('background-position','100% ' + ($(this).scrollTop() / 0) + 'px');
            	    });
            	    
            	});
            }
            jQuery(document).ready(function() {
                jQuery('.page-header').parallax({
            		imageSrc : 'http://skardtechs.com/curenails/wp-content/uploads/2019/07/hero_banner.jpg'
            		});
            });
            
        jQuery(window).scroll(function(){
          var scroll = jQuery(window).scrollTop();
          if((scroll > 0)&&(scroll < 60)){
            jQuery('.mnu_img').removeClass('mnu_animation1');
            jQuery('.mnu_img1').removeClass('mnu_animation2');
          }
          else if(scroll > 60){
            jQuery('.mnu_img').addClass('mnu_animation1');
             jQuery('.mnu_img1').addClass('mnu_animation2');
          }
        });
        
         jQuery(window).scroll(function(){
          var scroll = jQuery(window).scrollTop();
          if((scroll > 0)&&(scroll < 120)){
            jQuery('.mnu_img3').removeClass('mnu_animation3');
          }
          else if(scroll > 120){
            jQuery('.mnu_img3').addClass('mnu_animation3');
          }
        });
        
        jQuery(window).scroll(function(){
          var scroll = jQuery(window).scrollTop();
          if((scroll > 0)&&(scroll < 1000)){
            jQuery('.mnu_img4').removeClass('mnu_animation4');
          }
          else if(scroll > 1000){
            jQuery('.mnu_img4').addClass('mnu_animation4');
          }
        });
          jQuery(window).scroll(function(){
          var scroll = jQuery(window).scrollTop();
          if((scroll > 0)&&(scroll < 2000)){
            jQuery('.mnu_img5').removeClass('mnu_animation4');
            jQuery('.mnu_txt').removeClass('mnu_animation5');
          }
          else if(scroll > 2000){
            jQuery('.mnu_img5').addClass('mnu_animation4');
            jQuery('.mnu_txt').removeClass('mnu_animation5');
          }
        });
    
        jQuery(window).scroll(function(){
          var scroll = jQuery(window).scrollTop();
          if((scroll > 0)&&(scroll < 3500)){
            jQuery('.txtzm_sectn2').removeClass('cont_animation1');
          }
          else if(scroll > 3500){
            jQuery('.txtzm_sectn2').addClass('cont_animation1');
          }
        });
        
    /* Menu Page Js  */
    </script>
";
}
?>

</body>
</html>
