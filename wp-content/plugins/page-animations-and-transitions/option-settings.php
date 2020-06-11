<?php
if(isset($_POST['weblizar_page_anim_submit'])) {
	$weblizar_page_in_trans		=	sanitize_option('weblizar_page_in_trans', $_POST['weblizar_page_in_trans']);
	$weblizar_page_out_trans	=	sanitize_option('weblizar_page_out_trans',$_POST['weblizar_page_out_trans']);
	$weblizar_page_in_durations	=	sanitize_text_field( $_POST['weblizar_page_in_durations']);
	$weblizar_page_out_durations	=	sanitize_text_field( $_POST['weblizar_page_out_durations']);
	$weblizar_bg_clr			=	sanitize_text_field( $_POST['weblizar_bg_clr']);
	$weblizar_preload_txt_clr			=	sanitize_text_field( $_POST['weblizar_preload_txt_clr']);
	$weblizar_pre_load_delay	=	sanitize_text_field( $_POST['weblizar_pre_load_delay']);
	$weblizar_icon_pre_load	=	sanitize_text_field( $_POST['weblizar_icon_pre_load']);
	$weblizar_pre_load_switch	=	sanitize_text_field( $_POST['weblizar_pre_load_switch']);
	$weblizar_pg_anim_txt_append	=	sanitize_text_field( $_POST['weblizar_pg_anim_txt_append']);

	$wl_page_trans_options['weblizar_page_in_trans']= $weblizar_page_in_trans;
	$wl_page_trans_options['weblizar_page_out_trans']= $weblizar_page_out_trans;
	$wl_page_trans_options['weblizar_page_in_durations']= intval($weblizar_page_in_durations);
	$wl_page_trans_options['weblizar_page_out_durations']= intval($weblizar_page_out_durations);
	$wl_page_trans_options['weblizar_bg_clr']= $weblizar_bg_clr;
	$wl_page_trans_options['weblizar_preload_txt_clr']=$weblizar_preload_txt_clr;
	$wl_page_trans_options['weblizar_pre_load_delay']= $weblizar_pre_load_delay;
	$wl_page_trans_options['weblizar_icon_pre_load']= $weblizar_icon_pre_load;
	$wl_page_trans_options['weblizar_pre_load_switch']= $weblizar_pre_load_switch;
	$wl_page_trans_options['weblizar_pg_anim_txt_append']= $weblizar_pg_anim_txt_append;

	update_option('wl_page_trans_options', $wl_page_trans_options );
}
$wl_page_trans_options = get_option('wl_page_trans_options'); 
?>
<style>
.form-horizontal{
	float:left;
	width:100%;
}
.form-horizontal .form-group {
	margin-right: -15px;
	margin-left: -15px;
	float: left;
	width:100%;
}
.demoftr {
	padding: 10px;
	border: 1px dashed;
}
input[type=range].pganim-slider {
    -webkit-appearance: none;
    width: 40%;
    height: 15px;
    border-radius: 5px;
    background: #d3d3d3;
    outline: none;
    opacity: 0.7;
    -webkit-transition: .2s;
    transition: opacity .2s;
}

.pganim-slider:hover {
    opacity: 1;
}

.pganim-slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    background: #000000;
    cursor: pointer;
}

.pganim-slider::-moz-range-thumb {
    width: 25px;
    height: 25px;
    border-radius: 50%;
    background: #000000;
    cursor: pointer;
}
.pg-range-span{
	margin-top: 18px;
}
button#weblizar_page_anim_submit {
    margin-top: 20px;
    margin-left: 20px;
}
.form-group {
    margin-bottom: 15px;
    clear: both;
}
.wp-picker-container input[type=text].wp-color-picker {
    height: 35px;
}
</style>
<div class="block ui-tabs-panel active" id="option-general">

	<div class="col-md-12">
			<div id="heading">
				<table><tr><td cols=2 ><h2>	<?php include('responsive-portfolio-banner.php'); ?><?php _e('Page Animations Settings',WL_PAT_DOMAIN);?></h2></td></tr></table>
			</div>	
			<form class="form-horizontal" role="form" action="#" method="POST" name="google_plus_form" >
				<div class="form-group">
					<label  class="col-sm-4"><?php _e('Page In Animations',WL_PAT_DOMAIN); ?></label>
					<div class="col-sm-8">
						<?php  $weblizar_page_in_trans= $wl_page_trans_options['weblizar_page_in_trans']; ?>
						<select id="weblizar_page_in_trans" name="weblizar_page_in_trans" style="width:70%;" >
							<option value="none" <?php if ('none' == $weblizar_page_in_trans) echo 'selected="selected"'; ?>>None</option>
							<option value="fade-in" <?php if ('fade-in' == $weblizar_page_in_trans) echo 'selected="selected"'; ?>>Fade In</option>
							<option value="fade-in-up" <?php if ('fade-in-up' == $weblizar_page_in_trans) echo 'selected="selected"'; ?>>Fade In Up</option>
							<option value="fade-in-down" <?php if ('fade-in-down' == $weblizar_page_in_trans) echo 'selected="selected"'; ?>>Fade In Down</option>
							<option value="fade-in-left" <?php if ('fade-in-left' == $weblizar_page_in_trans) echo 'selected="selected"'; ?>>Fade In Left</option>
							<option value="fade-in-right" <?php if ('fade-in-right' == $weblizar_page_in_trans) echo 'selected="selected"'; ?>>Fade In Right</option>
							<option value="rotate-in" <?php if ('rotate-in' == $weblizar_page_in_trans) echo 'selected="selected"'; ?>>Rotate In</option>
							<option value="flip-in-x" <?php if ('flip-in-x' == $weblizar_page_in_trans) echo 'selected="selected"'; ?>>Flip In X</option>
							<option value="flip-in-y" <?php if ('flip-in-y' == $weblizar_page_in_trans) echo 'selected="selected"'; ?>>Flip In Y</option>
							<option value="overlay-slide-in-bottom" <?php if ('overlay-slide-in-bottom' == $weblizar_page_in_trans) echo 'selected="selected"'; ?>>Overlay Slide In Top</option>
							<option value="overlay-slide-in-top" <?php if ('overlay-slide-in-top' == $weblizar_page_in_trans) echo 'selected="selected"'; ?>>Overlay Slide In Bottom</option>
							<option value="overlay-slide-in-right" <?php if ('overlay-slide-in-right' == $weblizar_page_in_trans) echo 'selected="selected"'; ?>>Overlay Slide In Left</option>
							<option value="overlay-slide-in-left" <?php if ('overlay-slide-in-left' == $weblizar_page_in_trans) echo 'selected="selected"'; ?>>Overlay Slide In Right</option>							

						</select>
						<p class="help-block"><?php _e('Select Your Website Page In Animation',WL_PAT_DOMAIN); ?></p>
					</div>
				</div>
				
				<div class="form-group">
					<label  class="col-sm-4"><?php _e('Page Out Animations',WL_PAT_DOMAIN); ?></label>
					<div class="col-sm-8">
						<?php $weblizar_page_out_trans= $wl_page_trans_options['weblizar_page_out_trans']; ?>
						<select name="weblizar_page_out_trans" id="weblizar_page_out_trans" style="width:70%;">
							<option value="none" <?php if ('none' == $weblizar_page_out_trans) echo 'selected="selected"'; ?>>None</option>
							<option value="fade-out" <?php if ('fade-out' == $weblizar_page_out_trans) echo 'selected="selected"'; ?>>Fade Out</option>
							<option value="fade-out-up" <?php if ('fade-out-up' == $weblizar_page_out_trans) echo 'selected="selected"'; ?>>Fade Out Up</option>
							<option value="fade-out-down" <?php if ('fade-out-down' == $weblizar_page_out_trans) echo 'selected="selected"'; ?>>Fade Out Down</option>
							<option value="fade-out-left"  <?php if ('fade-out-left' == $weblizar_page_out_trans) echo 'selected="selected"'; ?>>Fade Out Left</option>
							<option value="fade-out-right" <?php if ('fade-out-right' == $weblizar_page_out_trans) echo 'selected="selected"'; ?>>Fade Out Right</option>
							<option value="rotate-out" <?php if ('rotate-out' == $weblizar_page_out_trans) echo 'selected="selected"'; ?>>Rotate Out</option>
							<option value="flip-out-x" <?php if ('flip-out-x' == $weblizar_page_out_trans) echo 'selected="selected"'; ?>>Flip Out X</option>
							<option value="flip-out-y" <?php if ('flip-out-y' == $weblizar_page_out_trans) echo 'selected="selected"'; ?>>Flip Out Y</option>
							<option value="zoom-out" <?php if ('zoom-out' == $weblizar_page_out_trans) echo 'selected="selected"'; ?>>Zoom Out</option>
							<option value="overlay-slide-out-bottom" <?php if ('overlay-slide-out-bottom' == $weblizar_page_out_trans) echo 'selected="selected"'; ?>>Overlay Slide Out Top</option>
							<option value="overlay-slide-out-top" <?php if ('overlay-slide-out-top' == $weblizar_page_out_trans) echo 'selected="selected"'; ?>>Overlay Slide Out Bottom</option>
							<option value="overlay-slide-out-right" <?php if ('overlay-slide-out-right' == $weblizar_page_out_trans) echo 'selected="selected"'; ?>>Overlay Slide Out Left</option>
							<option value="overlay-slide-out-left" <?php if ('overlay-slide-out-left' == $weblizar_page_out_trans) echo 'selected="selected"'; ?>>Overlay Slide Out Right</option>		
						</select>
						<p class="help-block"><?php _e('Select Your Website Page Out Animation',WL_PAT_DOMAIN); ?></p>
						<p class="help-block"><?php _e('Please set Page In and Page Out for Overlay Animation',WL_PAT_DOMAIN); ?></p>
					</div>
				</div>
				
				<div class="form-group">
					<label  class="col-sm-4"><?php _e('Page In Durations',WL_PAT_DOMAIN); ?></label>
					<div class="col-sm-8">
						<?php  $weblizar_page_in_durations= $wl_page_trans_options['weblizar_page_in_durations']; ?>
						<select name="weblizar_page_in_durations" id="weblizar_page_in_durations" style="width:70%;">
							<option value="200" <?php if ('200' == $weblizar_page_in_durations) echo 'selected="selected"'; ?>>200</option>
							<option value="400" <?php if ('400' == $weblizar_page_in_durations) echo 'selected="selected"'; ?>>400</option>
							<option value="600" <?php if ('600' == $weblizar_page_in_durations) echo 'selected="selected"'; ?>>600</option>
							<option value="800" <?php if ('800' == $weblizar_page_in_durations) echo 'selected="selected"'; ?>>800</option>
							<option value="1000" <?php if ('1000' == $weblizar_page_in_durations) echo 'selected="selected"'; ?>>1000</option>
							<option value="1200" <?php if ('1200' == $weblizar_page_in_durations) echo 'selected="selected"'; ?>>1200</option>
							<option value="1400" <?php if ('1400' == $weblizar_page_in_durations) echo 'selected="selected"'; ?>>1400</option>
							<option value="1600" <?php if ('1600' == $weblizar_page_in_durations) echo 'selected="selected"'; ?>>1600</option>
							<option value="1800" <?php if ('1800' == $weblizar_page_in_durations) echo 'selected="selected"'; ?>>1800</option>
							<option value="2000" <?php if ('2000' == $weblizar_page_in_durations) echo 'selected="selected"'; ?>>2000</option>
						</select>
						<p class="help-block"><?php _e('Select Your Website Page In Animation Durations(Speed)',WL_PAT_DOMAIN); ?></p>
					</div>
				</div>
				
				<div class="form-group">
					<label  class="col-sm-4"><?php _e('Page Out Durations',WL_PAT_DOMAIN); ?></label>
					<div class="col-sm-8">
						<?php $weblizar_page_out_durations= $wl_page_trans_options['weblizar_page_out_durations']; ?>
						<select name="weblizar_page_out_durations" id="weblizar_page_out_durations" style="width:70%;">
							<option value="100" <?php if ('100' == $weblizar_page_out_durations) echo 'selected="selected"'; ?>>100</option>
							<option value="200" <?php if ('200' == $weblizar_page_out_durations) echo 'selected="selected"'; ?>>200</option>
							<option value="300" <?php if ('300' == $weblizar_page_out_durations) echo 'selected="selected"'; ?>>300</option>
							<option value="400" <?php if ('400' == $weblizar_page_out_durations) echo 'selected="selected"'; ?>>400</option>
							<option value="500" <?php if ('500' == $weblizar_page_out_durations) echo 'selected="selected"'; ?>>500</option>
							<option value="600" <?php if ('600' == $weblizar_page_out_durations) echo 'selected="selected"'; ?>>600</option>
							<option value="700" <?php if ('700' == $weblizar_page_out_durations) echo 'selected="selected"'; ?>>700</option>
							<option value="800" <?php if ('800' == $weblizar_page_out_durations) echo 'selected="selected"'; ?>>800</option>
							<option value="900" <?php if ('900' == $weblizar_page_out_durations) echo 'selected="selected"'; ?>>900</option>
							<option value="1000" <?php if ('1000' == $weblizar_page_out_durations) echo 'selected="selected"'; ?>>1000</option>
						</select>
						<p class="help-block"><?php _e('Select Your Website Page Out Animation Durations(Speed)',WL_PAT_DOMAIN); ?></p>
					</div>
				</div>

				<tr><td cols=2 ><h3 id='heading'><?php _e('Preloader Settings',WL_PAT_DOMAIN);?></h3></td></tr>
				<div class="form-group">
					<label  class="col-sm-4"><?php _e('Preloader On/Off',WL_PAT_DOMAIN); ?></label>
					<div class="col-sm-8">
						<?php  
						if(isset($wl_page_trans_options['weblizar_pre_load_switch'])) {
							$weblizar_pre_load_switch= $wl_page_trans_options['weblizar_pre_load_switch']; 
						} else {
							$weblizar_pre_load_switch = "1";
						}
						?>
						<select name="weblizar_pre_load_switch" id="weblizar_pre_load_switch" style="width:20%;">
							<option value="1" <?php if ('1' == $weblizar_pre_load_switch) echo 'selected="selected"'; ?>>Off</option>
							<option value="2" <?php if ('2' == $weblizar_pre_load_switch) echo 'selected="selected"'; ?>>On</option>
						</select>
						<p class="help-block"><?php _e('If Preloader Off then Page Transition is not applied',WL_PAT_DOMAIN); ?></p>
					</div>
				</div>

				<div class="form-group">
					<label  class="col-sm-4"><?php _e('Preloader Text',WL_PAT_DOMAIN); ?></label>
					<div class="col-sm-8">
						<?php  
						if(isset($wl_page_trans_options['weblizar_pg_anim_txt_append'])) {
							$weblizar_pg_anim_txt_append= $wl_page_trans_options['weblizar_pg_anim_txt_append']; 
						} else {
							$weblizar_pg_anim_txt_append = "Welcome in Weblizar Preloader";
						}
						?>
						<input type="text" name="weblizar_pg_anim_txt_append" id="weblizar_pg_anim_txt_append" style="width:70%;" value="<?php echo $weblizar_pg_anim_txt_append; ?>">
					</div>
				</div>

				<div class="form-group">
					<label  class="col-sm-4"><?php _e('Preloader Text Color',WL_PAT_DOMAIN); ?></label>
					<div class="col-sm-8">
						<?php  
							if(isset($wl_page_trans_options['weblizar_preload_txt_clr'])){
								$weblizar_preload_txt_clr= $wl_page_trans_options['weblizar_preload_txt_clr']; 
							} else {
								$weblizar_preload_txt_clr = "#fff";
							}
						?>
						<input id="weblizar_preload_txt_clr" name="weblizar_preload_txt_clr" type="text" value="<?php echo $weblizar_preload_txt_clr; ?>" class="my-color-field" data-default-color="#000000" />
						<p class="help-block"><?php _e('Font Color of Preloader Text',WL_PAT_DOMAIN); ?></p>
					</div>
				</div>

				<div class="form-group">
					<label  class="col-sm-4"><?php _e('Preloader Background Color',WL_PAT_DOMAIN); ?></label>
					<div class="col-sm-8">
						<?php  
							if(isset($wl_page_trans_options['weblizar_bg_clr'])){
								$weblizar_bg_clr= $wl_page_trans_options['weblizar_bg_clr']; 
							} else {
								$weblizar_bg_clr = "#000000";
							}
						?>
						<input id="weblizar_bg_clr" name="weblizar_bg_clr" type="text" value="<?php echo $weblizar_bg_clr; ?>" class="my-color-field" data-default-color="#000000" />
						<p class="help-block"><?php _e('Background Color of Preloader',WL_PAT_DOMAIN); ?></p>
					</div>
				</div>

				<div class="form-group">
						<label  class="col-sm-4"><?php _e('Delay Time of Preloader',WL_PAT_DOMAIN); ?></label>
					<div class="col-sm-8">
						<?php  
							if(isset($wl_page_trans_options['weblizar_pre_load_delay'])){
								$weblizar_pre_load_delay = $wl_page_trans_options['weblizar_pre_load_delay'];
							} else {
								$weblizar_pre_load_delay = 5000;
							}
						?>
						<input  class="pganim-slider" type="range" min="1000" max="60000" step="1000" name="weblizar_pre_load_delay" id="weblizar_pre_load_delay" value="<?php echo $weblizar_pre_load_delay; ?>" data-rangeSlider></div>
						<p class="pg-range-span">Second: <span id="pg-range-val"></span></p>
					</div>
				</div>
				<script>
					var slider = document.getElementById("weblizar_pre_load_delay");
					var output = document.getElementById("pg-range-val");
					
					var x = slider.value;
					var y = x/1000;
				    output.innerHTML = y;
					
					slider.oninput = function() {
						var x = slider.value;
						var y = x/1000;
						output.innerHTML = y;
					}
				</script>

				<div class="form-group">
					<label  class="col-sm-4"><?php _e('Preloader Icon', WL_PAT_DOMAIN); ?></label>
					<div class="col-sm-8">
						<?php 
							if(isset($wl_page_trans_options['weblizar_icon_pre_load'])){
								$weblizar_icon_pre_load = $wl_page_trans_options['weblizar_icon_pre_load'];
							} else {
								$weblizar_icon_pre_load = 1;
							}
						 ?>
						<select name="weblizar_icon_pre_load" id="weblizar_icon_pre_load" style="width:20%;">
							<option value="1" <?php if ('1' == $weblizar_icon_pre_load) echo 'selected="selected"'; ?>>Icon 1</option>
							<option value="2" <?php if ('2' == $weblizar_icon_pre_load) echo 'selected="selected"'; ?>>Icon 2</option>
							<option value="3" <?php if ('3' == $weblizar_icon_pre_load) echo 'selected="selected"'; ?>>Icon 3</option>
							<option value="4" <?php if ('4' == $weblizar_icon_pre_load) echo 'selected="selected"'; ?>>Icon 4</option>
							<option value="5" <?php if ('5' == $weblizar_icon_pre_load) echo 'selected="selected"'; ?>>Icon 5</option>
						</select>
					</div>
				</div>

				<div class="form-group">
					<label  class="col-sm-4"><?php _e('Preloader Element',WL_PAT_DOMAIN); ?></label>
					<div class="col-sm-8">					
						<p><?php
							if( is_ssl() ){
								$header_file_url = admin_url("theme-editor.php?file=header.php", "https");
							} else {
								$header_file_url = admin_url("theme-editor.php?file=header.php", "http");
							}
							$preloader_element = esc_html('now after <body> insert Preloader HTML element: <div id="page-anim-preloader"></div>');
						?>Open <a target="_blank" href="<?php echo $header_file_url; ?>">header.php</a> <?php _e('file for your theme',WL_PAT_DOMAIN); ?>, <?php echo $preloader_element; ?>
						</p>
					</div>
				</div>
				
				<div class="form-group col-md-offset-4">
					<div class="">
					  <button type="submit" class="btn btn-primary" name="weblizar_page_anim_submit" id="weblizar_page_anim_submit" value="submit"><?php _e('Save Changes',WL_PAT_DOMAIN); ?></button>
					</div>
				</div>
			</form>
	</div>	
</div>

<!---------------- footer customization Settings form ------------------------>
<div class="block ui-tabs-panel deactive" id="option-recommendations" >
	<?php include('recommendations.php');?>
</div>
<div class="block ui-tabs-panel deactive" id="option-offers" >
	<?php include('offers.php');?>
</div>