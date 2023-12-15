<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="./vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="./vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="./vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="./vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="./vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="./vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<div class="pre-loader">
		<div class="pre-loader-box">
			<div class="loader-logo"><img src="./vendors/images/deskapp-logo.svg" alt=""></div>
			<div class='loader-progress' id="progress_div">
				<div class='bar' id='bar1'></div>
			</div>
			<div class='percent' id='percent1'>0%</div>
			<div class="loading-text">
				Loading...
			</div>
		</div>
	</div>

	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
			<div class="header-search">
				<form>
					<div class="form-group mb-0">
						<i class="dw dw-search2 search-icon"></i>
						<input type="text" class="form-control search-input" placeholder="Search Here">
						<div class="dropdown">
							<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
								<i class="ion-arrow-down-c"></i>
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">From</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">To</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-sm-12 col-md-2 col-form-label">Subject</label>
									<div class="col-sm-12 col-md-10">
										<input class="form-control form-control-sm form-control-line" type="text">
									</div>
								</div>
								<div class="text-right">
									<button class="btn btn-primary">Search</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>
			<div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification-active"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>
									<a href="#">
										<img src="./vendors/images/img.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./vendors/images/photo1.jpg" alt="">
										<h3>Lea R. Frith</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./vendors/images/photo2.jpg" alt="">
										<h3>Erik L. Richards</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./vendors/images/photo3.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./vendors/images/photo4.jpg" alt="">
										<h3>Renee I. Hansen</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="./vendors/images/img.jpg" alt="">
										<h3>Vicki M. Coleman</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="./vendors/images/photo1.jpg" alt="">
						</span>
						<span class="user-name">Ross C. Lopez</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="profile.php"><i class="dw dw-user1"></i> Profile</a>
						<a class="dropdown-item" href="profile.php"><i class="dw dw-settings2"></i> Setting</a>
						<a class="dropdown-item" href="faq.php"><i class="dw dw-help"></i> Help</a>
						<a class="dropdown-item" href="login.php"><i class="dw dw-logout"></i> Log Out</a>
					</div>
				</div>
			</div>
			<div class="github-link">
				<a href="https://github.com/dropways/deskapp" target="_blank"><img src="./vendors/images/github.svg" alt=""></a>
			</div>
		</div>
	</div>

	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Layout Settings
				<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Header Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
				<div class="sidebar-radio-group pb-10 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
						<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
						<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
						<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
					</div>
				</div>

				<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
				<div class="sidebar-radio-group pb-30 mb-10">
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
						<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
						<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
						<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
						<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
						<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
					</div>
					<div class="custom-control custom-radio custom-control-inline">
						<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
						<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
					</div>
				</div>

				<div class="reset-options pt-30 text-center">
					<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
				</div>
			</div>
		</div>
	</div>

	<div class="left-side-bar">
		<div class="brand-logo">
			<a href="index.php">
				<img src="./vendors/images/deskapp-logo.svg" alt="" class="dark-logo">
				<img src="./vendors/images/deskapp-logo-white.svg" alt="" class="light-logo">
			</a>
			<div class="close-sidebar" data-toggle="left-sidebar-close">
				<i class="ion-close-round"></i>
			</div>
		</div>
		<div class="menu-block customscroll">
			<div class="sidebar-menu">
				<ul id="accordion-menu">
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
						</a>
						<ul class="submenu">
							<li><a href="index.php">Dashboard style 1</a></li>
							<li><a href="index2.php">Dashboard style 2</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit2"></span><span class="mtext">Forms</span>
						</a>
						<ul class="submenu">
							<li><a href="form-basic.php">Form Basic</a></li>
							<li><a href="advanced-components.php">Advanced Components</a></li>
							<li><a href="form-wizard.php">Form Wizard</a></li>
							<li><a href="html5-editor.php">HTML5 Editor</a></li>
							<li><a href="form-pickers.php">Form Pickers</a></li>
							<li><a href="image-cropper.php">Image Cropper</a></li>
							<li><a href="image-dropzone.php">Image Dropzone</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-library"></span><span class="mtext">Tables</span>
						</a>
						<ul class="submenu">
							<li><a href="basic-table.php">Basic Tables</a></li>
							<li><a href="datatable.php">DataTables</a></li>
						</ul>
					</li>
					<li>
						<a href="calendar.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-calendar1"></span><span class="mtext">Calendar</span>
						</a>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-apartment"></span><span class="mtext"> UI Elements </span>
						</a>
						<ul class="submenu">
							<li><a href="ui-buttons.php">Buttons</a></li>
							<li><a href="ui-cards.php">Cards</a></li>
							<li><a href="ui-cards-hover.php">Cards Hover</a></li>
							<li><a href="ui-modals.php">Modals</a></li>
							<li><a href="ui-tabs.php">Tabs</a></li>
							<li><a href="ui-tooltip-popover.php">Tooltip &amp; Popover</a></li>
							<li><a href="ui-sweet-alert.php">Sweet Alert</a></li>
							<li><a href="ui-notification.php">Notification</a></li>
							<li><a href="ui-timeline.php">Timeline</a></li>
							<li><a href="ui-progressbar.php">Progressbar</a></li>
							<li><a href="ui-typography.php">Typography</a></li>
							<li><a href="ui-list-group.php">List group</a></li>
							<li><a href="ui-range-slider.php">Range slider</a></li>
							<li><a href="ui-carousel.php">Carousel</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-paint-brush"></span><span class="mtext">Icons</span>
						</a>
						<ul class="submenu">
							<li><a href="font-awesome.php">FontAwesome Icons</a></li>
							<li><a href="foundation.php">Foundation Icons</a></li>
							<li><a href="ionicons.php">Ionicons Icons</a></li>
							<li><a href="themify.php">Themify Icons</a></li>
							<li><a href="custom-icon.php">Custom Icons</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-analytics-21"></span><span class="mtext">Charts</span>
						</a>
						<ul class="submenu">
							<li><a href="highchart.php">Highchart</a></li>
							<li><a href="knob-chart.php">jQuery Knob</a></li>
							<li><a href="jvectormap.php">jvectormap</a></li>
							<li><a href="apexcharts.php">Apexcharts</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-right-arrow1"></span><span class="mtext">Additional Pages</span>
						</a>
						<ul class="submenu">
							<li><a href="./video-player.php">Video Player</a></li>
							<li><a href="login.php">Login</a></li>
							<li><a href="forgot-password.php">Forgot Password</a></li>
							<li><a href="reset-password.php">Reset Password</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-browser2"></span><span class="mtext">Error Pages</span>
						</a>
						<ul class="submenu">
							<li><a href="400.php">400</a></li>
							<li><a href="403.php">403</a></li>
							<li><a href="404.php">404</a></li>
							<li><a href="500.php">500</a></li>
							<li><a href="503.php">503</a></li>
						</ul>
					</li>

					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-copy"></span><span class="mtext">Extra Pages</span>
						</a>
						<ul class="submenu">
							<li><a href="blank.php">Blank</a></li>
							<li><a href="contact-directory.php">Contact Directory</a></li>
							<li><a href="blog.php">Blog</a></li>
							<li><a href="blog-detail.php">Blog Detail</a></li>
							<li><a href="product.php">Product</a></li>
							<li><a href="product-detail.php">Product Detail</a></li>
							<li><a href="faq.php">FAQ</a></li>
							<li><a href="profile.php">Profile</a></li>
							<li><a href="gallery.php">Gallery</a></li>
							<li><a href="pricing-table.php">Pricing Tables</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-list3"></span><span class="mtext">Multi Level Menu</span>
						</a>
						<ul class="submenu">
							<li><a href="javascript:;">Level 1</a></li>
							<li><a href="javascript:;">Level 1</a></li>
							<li><a href="javascript:;">Level 1</a></li>
							<li class="dropdown">
								<a href="javascript:;" class="dropdown-toggle">
									<span class="micon fa fa-plug"></span><span class="mtext">Level 2</span>
								</a>
								<ul class="submenu child">
									<li><a href="javascript:;">Level 2</a></li>
									<li><a href="javascript:;">Level 2</a></li>
								</ul>
							</li>
							<li><a href="javascript:;">Level 1</a></li>
							<li><a href="javascript:;">Level 1</a></li>
							<li><a href="javascript:;">Level 1</a></li>
						</ul>
					</li>
					<li>
						<a href="./sitemap.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-diagram"></span><span class="mtext">Sitemap</span>
						</a>
					</li>
					<li>
						<a href="chat.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-chat3"></span><span class="mtext">Chat</span>
						</a>
					</li>
					<li>
						<a href="invoice.php" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-invoice"></span><span class="mtext">Invoice</span>
						</a>
					</li>
					<li>
						<div class="dropdown-divider"></div>
					</li>
					<li>
						<div class="sidebar-small-cap">Extra</div>
					</li>
					<li>
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon dw dw-edit-2"></span><span class="mtext">Documentation</span>
						</a>
						<ul class="submenu">
							<li><a href="introduction.php">Introduction</a></li>
							<li><a href="getting-started.php">Getting Started</a></li>
							<li><a href="color-settings.php">Color Settings</a></li>
							<li><a href="third-party-plugins.php">Third Party Plugins</a></li>
						</ul>
					</li>
					<li>
						<a href="https://dropways.github.io/deskapp-free-single-page-website-template/" target="_blank" class="dropdown-toggle no-arrow">
							<span class="micon dw dw-paper-plane1"></span>
							<span class="mtext">Landing Page <img src="./vendors/images/coming-soon.png" alt="" width="25"></span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="mobile-menu-overlay"></div>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				<div class="page-header">
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="title">
								<h4>Buttons</h4>
							</div>
							<nav aria-label="breadcrumb" role="navigation">
								<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="index.php">Home</a></li>
									<li class="breadcrumb-item active" aria-current="page">Buttons</li>
								</ol>
							</nav>
						</div>
					</div>
				</div>
				<div class="row clearfix">
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">Examples</h4>
							<p>Bootstrap includes several predefined button styles, each serving its own semantic purpose.</p>
							<div class="btn-list">
								<button type="button" class="btn btn-primary">Primary</button>
								<button type="button" class="btn btn-secondary">Secondary</button>
								<button type="button" class="btn btn-success">Success</button>
								<button type="button" class="btn btn-danger">Danger</button>
								<button type="button" class="btn btn-warning">Warning</button>
								<button type="button" class="btn btn-info">Info</button>
								<button type="button" class="btn btn-light">Light</button>
								<button type="button" class="btn btn-dark">Dark</button>
								<button type="button" class="btn btn-link">Link</button>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">Outline buttons</h4>
							<p>In need of a button, but not the hefty background colors they bring? Replace the default modifier classes with the <code>.btn-outline-*</code> ones to remove all background images and colors on any button.</p>
							<div class="btn-list">
								<button type="button" class="btn btn-outline-primary">Primary</button>
								<button type="button" class="btn btn-outline-secondary">Secondary</button>
								<button type="button" class="btn btn-outline-success">Success</button>
								<button type="button" class="btn btn-outline-danger">Danger</button>
								<button type="button" class="btn btn-outline-warning">Warning</button>
								<button type="button" class="btn btn-outline-info">Info</button>
								<button type="button" class="btn btn-outline-light">Light</button>
								<button type="button" class="btn btn-outline-dark">Dark</button>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">Button tags</h4>
							<p>The <code>.btn</code> classes are designed to be used with the <code>&lt;button&gt;</code> element. However, you can also use these classes on <code>&lt;a&gt;</code> or <code>&lt;input&gt;</code> elements (though some browsers may apply a slightly different rendering).</p>
							<div class="btn-list">
								<a class="btn btn-primary" href="#" role="button">Link</a>
								<button class="btn btn-secondary" type="submit">Button</button>
								<input class="btn btn-success" type="button" value="Input">
								<input class="btn btn-primary" type="submit" value="Submit">
								<input class="btn btn-info" type="reset" value="Reset">
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">Sizes</h4>
							<p>Fancy larger or smaller buttons? Add <code>.btn-lg</code> or <code>.btn-sm</code> for additional sizes.</p>
							<div class="btn-list">
								<button type="button" class="btn btn-primary btn-lg">Large button</button>
								<button type="button" class="btn btn-secondary btn-lg">Large button</button>
								<button type="button" class="btn btn-primary btn-sm">Small button</button>
								<button type="button" class="btn btn-secondary btn-sm">Small button</button>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">Disabled Buttons</h4>
							<p>Make buttons look inactive by adding the disabled boolean attribute to any <code>&lt;button&gt;</code> element.</p>
							<div class="btn-list">
								<button type="button" class="btn btn-lg btn-primary" disabled>Primary button</button>
								<button type="button" class="btn btn-secondary btn-lg" disabled>Button</button>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">Disabled Links</h4>
							<p><code>&lt;a&gt;</code>s don’t support the disabled attribute, so you must add the <code>.disabled</code> class to make it visually appear disabled.</p>
							<div class="btn-list">
								<a href="#" class="btn btn-primary btn-lg disabled" role="button" aria-disabled="true">Primary link</a>
								<a href="#" class="btn btn-secondary btn-lg disabled" role="button" aria-disabled="true">Link</a>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">Block Buttons</h4>
							<p>Create block level buttons—those that span the full width of a parent—by adding <code>.btn-block</code>.</p>
							<div class="btn-list">
								<button type="button" class="btn btn-success btn-lg btn-block">Block level button</button>
								<button type="button" class="btn btn-secondary btn-lg btn-block">Block level button</button>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">Toggle states</h4>
							<p>Add <code>data-toggle="button"</code> to toggle a button’s <code>active</code> state. If you’re pre-toggling a button, you must manually add the <code>.active</code> class and <code>aria-pressed="true"</code> to the <code>&lt;button&gt;</code>.</p>
							<div class="btn-list">
								<button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">Single toggle</button>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">Checkbox buttons</h4>
							<p>Bootstrap’s <code>.button</code> styles can be applied to other elements, such as <code>&lt;label&gt;</code>s, to provide checkbox or radio style button toggling. Add <code>data-toggle="buttons"</code> to a <code>.btn-group</code> containing those modified buttons to enable toggling in their respective styles.</p>
							<div class="btn-group-toggle btn-group" data-toggle="buttons">
								<label class="btn btn btn-outline-primary active">
									<input type="checkbox" checked autocomplete="off"> Checked
								</label>
								<label class="btn btn btn-outline-primary">
									<input type="checkbox" checked autocomplete="on"> Check
								</label>
								<label class="btn btn btn-outline-primary">
									<input type="checkbox" checked autocomplete="on"> Check
								</label>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">radio buttons</h4>
							<p>Bootstrap’s <code>.button</code> styles can be applied to other elements, such as <code>&lt;label&gt;</code>s, to provide checkbox or radio style button toggling. Add <code>data-toggle="buttons"</code> to a <code>.btn-group</code> containing those modified buttons to enable toggling in their respective styles.</p>
							<div class="btn-group btn-group-toggle" data-toggle="buttons">
								<label class="btn btn-outline-secondary active">
									<input type="radio" name="options" id="option1" autocomplete="off" checked> Active
								</label>
								<label class="btn btn-outline-secondary">
									<input type="radio" name="options" id="option2" autocomplete="off"> Radio
								</label>
								<label class="btn btn-outline-secondary">
									<input type="radio" name="options" id="option3" autocomplete="off"> Radio
								</label>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">Input With Button Groups</h4>
							<p>Feel free to mix input groups with button groups in your toolbars. Similar to the example above, you’ll likely need some utilities though to space things properly..</p>
							<div class="btn-toolbar mb-15" role="toolbar" aria-label="Toolbar with button groups">
								<div class="btn-group mr-2" role="group" aria-label="First group">
									<button type="button" class="btn btn-outline-primary">1</button>
									<button type="button" class="btn btn-outline-primary">2</button>
									<button type="button" class="btn btn-outline-primary">3</button>
									<button type="button" class="btn btn-outline-primary">4</button>
								</div>
							</div>
							<div class="input-group custom">
								<div class="input-group-prepend custom">
									<div class="input-group-text" id="btnGroupAddon">@</div>
								</div>
								<input type="text" class="form-control" placeholder="Input group example" aria-label="Input group example" aria-describedby="btnGroupAddon">
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">Button Groups</h4>
							<p>Place a <code>.btn-group</code> within another <code>.btn-group</code> when you want dropdown menus mixed with a series of buttons.Make a set of buttons appear vertically stacked rather than horizontally.</p>
							<div class="row">
								<div class="col-lg-3 col-md-6 col-sm-12 mb-15">
									<div class="btn-group-vertical">
										<button type="button" class="btn btn-light">Top</button>
										<button type="button" class="btn btn-light">Middle</button>
										<button type="button" class="btn btn-light">Bottom</button>
									</div>
								</div>
								<div class="col-lg-3 col-md-6 col-sm-12 mb-15">
									<div class="btn-group-vertical">
										<button type="button" class="btn btn-light">Button 1</button>
										<button type="button" class="btn btn-light">Button 2</button>
										<button type="button" class="btn btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false"> Button 3 <span class="caret"></span> </button>
										<div class="dropdown-menu">
											<a class="dropdown-item" href="#">Dropdown link</a>
											<a class="dropdown-item" href="#">Dropdown link</a>
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-md-12 col-sm-12">
									<div class="btn-group mb-15">
										<button type="button" class="btn btn-light">1</button>
										<button type="button" class="btn btn-light">2</button>
										<button type="button" class="btn btn-success ">3</button>
										<button type="button" class="btn btn-light">4</button>
									</div>
									<div class="btn-group mb-15">
										<button type="button" class="btn btn-light">5</button>
										<button type="button" class="btn btn-success ">6</button>
										<button type="button" class="btn btn-light">7</button>
									</div>
									<div class="btn-group mb-15">
										<button type="button" class="btn btn-light">8</button>
									</div>
									<div class="btn-group">
										<button type="button" class="btn btn-light">1</button>
										<button type="button" class="btn btn-dark">2</button>
										<button type="button" class="btn btn-light">3</button>
										<div class="btn-group dropdown">
											<button type="button" class="btn btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false"> Dropdown <span class="caret"></span> </button>
											<div class="dropdown-menu">
												<a class="dropdown-item" href="#">Dropdown link</a>
												<a class="dropdown-item" href="#">Dropdown link</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">Icon With Label Buttons</h4>
							<p>button using icon with label. </p>
							<div class="btn-list">
								<button type="button" class="btn" data-bgcolor="#3b5998" data-color="#ffffff"><i class="fa fa-facebook"></i> facebook</button>
								<button type="button" class="btn" data-bgcolor="#1da1f2" data-color="#ffffff"><i class="fa fa-twitter"></i> twitter</button>
								<button type="button" class="btn" data-bgcolor="#007bb5" data-color="#ffffff"><i class="fa fa-linkedin"></i> linkedin</button>
								<button type="button" class="btn" data-bgcolor="#f46f30" data-color="#ffffff"><i class="fa fa-instagram"></i> instagram</button>
								<button type="button" class="btn" data-bgcolor="#c32361" data-color="#ffffff"><i class="fa fa-dribbble"></i> dribbble</button>
								<button type="button" class="btn" data-bgcolor="#3d464d" data-color="#ffffff"><i class="fa fa-dropbox"></i> dropbox</button>
								<button type="button" class="btn" data-bgcolor="#db4437" data-color="#ffffff"><i class="fa fa-google-plus"></i> google-plus</button>
								<button type="button" class="btn" data-bgcolor="#bd081c" data-color="#ffffff"><i class="fa fa-pinterest-p"></i> pinterest</button>
								<button type="button" class="btn" data-bgcolor="#00aff0" data-color="#ffffff"><i class="fa fa-skype"></i> skype</button>
								<button type="button" class="btn" data-bgcolor="#00b489" data-color="#ffffff"><i class="fa fa-vine"></i> vine</button>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-12 mb-30">
						<div class="pd-20 card-box height-100-p">
							<h4 class="mb-15 text-blue h4">Icon Buttons</h4>
							<p>button using icon.</p>
							<div class="btn-list">
								<button type="button" class="btn" data-bgcolor="#3b5998" data-color="#ffffff"><i class="fa fa-facebook"></i></button>
								<button type="button" class="btn" data-bgcolor="#1da1f2" data-color="#ffffff"><i class="fa fa-twitter"></i></button>
								<button type="button" class="btn" data-bgcolor="#007bb5" data-color="#ffffff"><i class="fa fa-linkedin"></i></button>
								<button type="button" class="btn" data-bgcolor="#f46f30" data-color="#ffffff"><i class="fa fa-instagram"></i></button>
								<button type="button" class="btn" data-bgcolor="#c32361" data-color="#ffffff"><i class="fa fa-dribbble"></i></button>
								<button type="button" class="btn" data-bgcolor="#3d464d" data-color="#ffffff"><i class="fa fa-dropbox"></i></button>
								<button type="button" class="btn" data-bgcolor="#db4437" data-color="#ffffff"><i class="fa fa-google-plus"></i></button>
								<button type="button" class="btn" data-bgcolor="#bd081c" data-color="#ffffff"><i class="fa fa-pinterest-p"></i></button>
								<button type="button" class="btn" data-bgcolor="#00aff0" data-color="#ffffff"><i class="fa fa-skype"></i></button>
								<button type="button" class="btn" data-bgcolor="#00b489" data-color="#ffffff"><i class="fa fa-vine"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="./vendors/scripts/core.js"></script>
	<script src="./vendors/scripts/script.min.js"></script>
	<script src="./vendors/scripts/process.js"></script>
	<script src="./vendors/scripts/layout-settings.js"></script>
</body>
</html>