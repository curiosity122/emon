<?php

add_action( 'admin_menu', 'medical_clinic_lite_getting_started' );
function medical_clinic_lite_getting_started() {    	    	
	add_theme_page( esc_html__('Get Started', 'medical-clinic-lite'), esc_html__('Get Started', 'medical-clinic-lite'), 'edit_theme_options', 'medical-clinic-lite-guide-page', 'medical_clinic_lite_test_guide');   
}

function medical_clinic_lite_admin_enqueue_scripts() {
	wp_enqueue_style( 'medical-clinic-lite-admin-style', esc_url( get_template_directory_uri() ).'/css/main.css' );
}
add_action( 'admin_enqueue_scripts', 'medical_clinic_lite_admin_enqueue_scripts' );

if ( ! defined( 'MEDICAL_CLINIC_LITE_DOCS_FREE' ) ) {
define('MEDICAL_CLINIC_LITE_DOCS_FREE',__('https://www.misbahwp.com/docs/medical-clinic-free-docs/','medical-clinic-lite'));
}
if ( ! defined( 'MEDICAL_CLINIC_LITE_DOCS_PRO' ) ) {
define('MEDICAL_CLINIC_LITE_DOCS_PRO',__('https://www.misbahwp.com/docs/medical-clinic-pro-docs','medical-clinic-lite'));
}
if ( ! defined( 'MEDICAL_CLINIC_LITE_BUY_NOW' ) ) {
define('MEDICAL_CLINIC_LITE_BUY_NOW',__('https://www.misbahwp.com/themes/medical-clinic-wordpress-theme/','medical-clinic-lite'));
}
if ( ! defined( 'MEDICAL_CLINIC_LITE_SUPPORT_FREE' ) ) {
define('MEDICAL_CLINIC_LITE_SUPPORT_FREE',__('https://wordpress.org/support/theme/medical-clinic-lite','medical-clinic-lite'));
}
if ( ! defined( 'MEDICAL_CLINIC_LITE_REVIEW_FREE' ) ) {
define('MEDICAL_CLINIC_LITE_REVIEW_FREE',__('https://wordpress.org/support/theme/medical-clinic-lite/reviews/#new-post','medical-clinic-lite'));
}
if ( ! defined( 'MEDICAL_CLINIC_LITE_DEMO_PRO' ) ) {
define('MEDICAL_CLINIC_LITE_DEMO_PRO',__('https://www.misbahwp.com/demo/medical-clinic/','medical-clinic-lite'));
}

function medical_clinic_lite_test_guide() { ?>
	<?php $theme = wp_get_theme(); ?>
	<div class="wrap" id="main-page">
		<div id="lefty">
			<div id="admin_links">
				<a href="<?php echo esc_url( MEDICAL_CLINIC_LITE_DOCS_FREE ); ?>" target="_blank" class="blue-button-1"><?php esc_html_e( 'Documentation', 'medical-clinic-lite' ) ?></a>			
				<a href="<?php echo esc_url( admin_url('customize.php') ); ?>" id="customizer" target="_blank"><?php esc_html_e( 'Customize', 'medical-clinic-lite' ); ?> </a>
				<a class="blue-button-1" href="<?php echo esc_url( MEDICAL_CLINIC_LITE_SUPPORT_FREE ); ?>" target="_blank" class="btn3"><?php esc_html_e( 'Support', 'medical-clinic-lite' ) ?></a>
				<a class="blue-button-2" href="<?php echo esc_url( MEDICAL_CLINIC_LITE_REVIEW_FREE ); ?>" target="_blank" class="btn4"><?php esc_html_e( 'Review', 'medical-clinic-lite' ) ?></a>
			</div>
			<div id="description">
				<h3><?php esc_html_e('Welcome! Thank you for choosing ','medical-clinic-lite'); ?><?php echo esc_html( $theme ); ?>  <span><?php esc_html_e('Version: ', 'medical-clinic-lite'); ?><?php echo esc_html($theme['Version']);?></span></h3>
				<img class="img_responsive" style="width:100%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/screenshot.png">
				<div id="description-inside">
					<?php
						$theme = wp_get_theme();
						echo wp_kses_post( apply_filters( 'misbah_theme_description', esc_html( $theme->get( 'Description' ) ) ) );
					?>
				</div>
			</div>
		</div>
		<div id="righty">
			<div class="postbox donate">
				<div class="d-table">
			    <ul class="d-column">
			      <li class="feature"><?php esc_html_e('Features','medical-clinic-lite'); ?></li>
			      <li class="free"><?php esc_html_e('Pro','medical-clinic-lite'); ?></li>
			      <li class="plus"><?php esc_html_e('Free','medical-clinic-lite'); ?></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('24hrs Priority Support','medical-clinic-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Kirki Framework','medical-clinic-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('One Click Demo Import','medical-clinic-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Secton Reordering','medical-clinic-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Enable / Disable Option','medical-clinic-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Posttype','medical-clinic-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Multiple Sections','medical-clinic-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Color Pallete','medical-clinic-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Widgets','medical-clinic-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-yes"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Page Templates','medical-clinic-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Advance Typography','medical-clinic-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>
			    <ul class="d-row">
			      <li class="points"><?php esc_html_e('Section Background Image / Color ','medical-clinic-lite'); ?></li>
			      <li class="right"><span class="dashicons dashicons-yes"></span></li>
			      <li class="wrong"><span class="dashicons dashicons-no"></span></li>
			    </ul>		    
	  		</div>
				<h3 class="hndle"><?php esc_html_e( 'Upgrade to Premium', 'medical-clinic-lite' ); ?></h3>
				<div class="inside">
					<p><?php esc_html_e('Discover upgraded pro features with premium version click to upgrade.','medical-clinic-lite'); ?></p>
					<div id="admin_pro_links">			
						<a class="blue-button-2" href="<?php echo esc_url( MEDICAL_CLINIC_LITE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e( 'Go Pro', 'medical-clinic-lite' ); ?></a>
						<a class="blue-button-1" href="<?php echo esc_url( MEDICAL_CLINIC_LITE_DEMO_PRO ); ?>" target="_blank"><?php esc_html_e( 'Live Demo', 'medical-clinic-lite' ) ?></a>
						<a class="blue-button-2" href="<?php echo esc_url( MEDICAL_CLINIC_LITE_DOCS_PRO ); ?>" target="_blank"><?php esc_html_e( 'Pro Docs', 'medical-clinic-lite' ) ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php } ?>
