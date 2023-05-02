<?php
//about theme info
add_action( 'admin_menu', 'web_developer_elementor_gettingstarted' );
function web_developer_elementor_gettingstarted() {
	add_theme_page( esc_html__('Web Developer Elementor', 'web-developer-elementor'), esc_html__('Web Developer Elementor', 'web-developer-elementor'), 'edit_theme_options', 'web_developer_elementor_about', 'web_developer_elementor_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function web_developer_elementor_admin_theme_style() {
	wp_enqueue_style('web-developer-elementor-custom-admin-style', get_template_directory_uri() . '/includes/getstart/getstart.css');
	wp_enqueue_script('web-developer-elementor-tabs', get_template_directory_uri() . '/includes/getstart/js/tab.js');
	wp_enqueue_style( 'font-awesome-css', get_template_directory_uri().'/assets/css/fontawesome-all.css' );
}
add_action('admin_enqueue_scripts', 'web_developer_elementor_admin_theme_style');

//guidline for about theme
function web_developer_elementor_mostrar_guide() { 
	//custom function about theme customizer
	$web_developer_elementor_return = add_query_arg( array()) ;
	$web_developer_elementor_theme = wp_get_theme( 'web-developer-elementor' );
?>

    <div class="top-head">
		<div class="top-title">
			<h2><?php esc_html_e( 'Web Developer Elementor', 'web-developer-elementor' ); ?></h2>
		</div>
		<div class="top-right">
			<span class="version"><?php esc_html_e( 'Version', 'web-developer-elementor' ); ?>: <?php echo esc_html($web_developer_elementor_theme['Version']);?></span>
		</div>
    </div>

    <div class="inner-cont">

	    <div class="tab-sec">
	    	<div class="tab">
				<button class="tablinks" onclick="web_developer_elementor_open_tab(event, 'setup_customizer')"><?php esc_html_e( 'Setup With Customizer', 'web-developer-elementor' ); ?></button>
				<button class="tablinks" onclick="web_developer_elementor_open_tab(event, 'changelog_cont')"><?php esc_html_e( 'Changelog', 'web-developer-elementor' ); ?></button>
				<button class="tablinks" onclick="web_developer_elementor_open_tab(event, 'getting_started')"><?php esc_html_e( 'Getting Started', 'web-developer-elementor' ); ?></button>
			</div>

			
			<div id="setup_customizer" class="tabcontent open">
				<div class="tab-outer-box">
				  	<div class="lite-theme-inner">
						<h3><?php esc_html_e('Theme Customizer', 'web-developer-elementor'); ?></h3>
						<p><?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'web-developer-elementor'); ?></p>
						<div class="info-link">
							<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'web-developer-elementor'); ?></a>
						</div>
						<hr>
						<h3><?php esc_html_e('Need Support?', 'web-developer-elementor'); ?></h3>
						<p><?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'web-developer-elementor'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( WEB_DEVELOPER_ELEMENTOR_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'web-developer-elementor'); ?></a>
						</div>
						<hr>
						<h3><?php esc_html_e('Reviews & Testimonials', 'web-developer-elementor'); ?></h3>
						<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'web-developer-elementor'); ?></p>
						<div class="info-link">
							<a href="<?php echo esc_url( WEB_DEVELOPER_ELEMENTOR_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'web-developer-elementor'); ?></a>
						</div>
						<hr>
						<div class="link-customizer">
							<h3><?php esc_html_e( 'Link to customizer', 'web-developer-elementor' ); ?></h3>
							<div class="first-row">
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','web-developer-elementor'); ?></a>
									</div>
									<div class="row-box2">
										<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','web-developer-elementor'); ?></a>
									</div>
								</div>
							
								<div class="row-box">
									<div class="row-box1">
										<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=header_image') ); ?>" target="_blank"><?php esc_html_e('Header Image','web-developer-elementor'); ?></a>
									</div>
									<div class="row-box2">
										<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','web-developer-elementor'); ?></a>
									</div>
								</div>
							</div>
						</div>
				  	</div>
				</div>
			</div>

			<div id="changelog_cont" class="tabcontent">
				<div class="tab-outer-box">
					<textarea name="banner" cols="80" rows="20">
						<?php echo file_get_contents( WEB_DEVELOPER_ELEMENTOR_CHANGELOG_THEME_URL ); ?>
					</textarea>
				</div>
			</div>

			<div id="getting_started" class="tabcontent">
				<div class="tab-outer-box">
					<h2><?php esc_html_e( 'Welcome to Elemento Theme!', 'web-developer-elementor' ); ?></h2>
					<p><?php esc_html_e( 'For setup the theme, First you need to click on the Begin activating plugins', 'web-developer-elementor' ); ?></p>
					<p><?php esc_html_e( '1. Install Kirki Customizer Framework ', 'web-developer-elementor' ); ?></p>
					<p><?php esc_html_e( '>> Then click to Return to Required Plugins Installer ', 'web-developer-elementor' ); ?></p>
					<p><?php esc_html_e( '2. Install WPElemento Importer', 'web-developer-elementor' ); ?></p>
					<p><?php esc_html_e( '>> Then click to Return to Required Plugins Installer ', 'web-developer-elementor' ); ?></p>
					<p><?php esc_html_e( '3. Activate Kirki Customizer Framework ', 'web-developer-elementor' ); ?></p>
					<p><?php esc_html_e( '4. Activate WPElemento Importer ', 'web-developer-elementor' ); ?></p>
					<p><?php esc_html_e( '>> Then click to Return to the Dashboard', 'web-developer-elementor' ); ?></p>
					<p><?php esc_html_e( '>> Click on the start now button', 'web-developer-elementor' ); ?></p>
					<p><?php esc_html_e( '>> Click install plugins', 'web-developer-elementor' ); ?></p>
					<p><?php esc_html_e( '>> Click import demo button to setup the theme and click visit your site button', 'web-developer-elementor' ); ?></p>
				</div>
			</div>

		</div>

		<div class="inner-side-content">
			<h2><?php esc_html_e('Premium Theme', 'web-developer-elementor'); ?></h2>
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
			<h3><?php esc_html_e('Web Developer WordPress Theme', 'web-developer-elementor'); ?></h3>
			<div class="iner-sidebar-pro-btn">
				<span class="premium-btn"><a href="<?php echo esc_url( WEB_DEVELOPER_ELEMENTOR_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'web-developer-elementor'); ?></a>
				</span>
				<span class="demo-btn"><a href="<?php echo esc_url( WEB_DEVELOPER_ELEMENTOR_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'web-developer-elementor'); ?></a>
				</span>
				<span class="doc-btn"><a href="<?php echo esc_url( WEB_DEVELOPER_ELEMENTOR_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Doc', 'web-developer-elementor'); ?></a>
				</span>
			</div>

			<div class="premium-features">
				<h3><?php esc_html_e('premium Features', 'web-developer-elementor'); ?></h3>
				<ul>
					<li><?php esc_html_e( 'Multilingual', 'web-developer-elementor' ); ?></li>
					<li><?php esc_html_e( 'Drag and drop features', 'web-developer-elementor' ); ?></li>
					<li><?php esc_html_e( 'Zero Coding Required', 'web-developer-elementor' ); ?></li>
					<li><?php esc_html_e( 'Mobile Friendly Layout', 'web-developer-elementor' ); ?></li>
					<li><?php esc_html_e( 'Responsive Layout', 'web-developer-elementor' ); ?></li>
					<li><?php esc_html_e( 'Unique Designs', 'web-developer-elementor' ); ?></li>
				</ul>
			</div>
		</div>
	</div>

<?php } ?>

