<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v1.9/admin/html/ui_language_bar_icon.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Apr 2016 04:06:10 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Color Admin | Language Bar & Icon</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="assets/css/animate.min.css" rel="stylesheet" />
	<link href="assets/css/style.min.css" rel="stylesheet" />
	<link href="assets/css/style-responsive.min.css" rel="stylesheet" />
	<link href="assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== END PAGE CSS STYLE ================== -->
    <link href="assets/plugins/flag-icon/css/flag-icon.css" rel="stylesheet" />
	<!-- ================== END PAGE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> Color Admin</a>
					<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- end mobile sidebar expand / collapse button -->
				
				<!-- begin header navigation right -->
				<ul class="nav navbar-nav navbar-right">
					<li class="hidden-xs">
						<form class="navbar-form full-width">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Enter keyword" />
								<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
							</div>
						</form>
					</li>
					<li class="dropdown">
						<a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
							<i class="fa fa-bell-o"></i>
							<span class="label">5</span>
						</a>
						<ul class="dropdown-menu media-list pull-right animated fadeInDown">
                            <li class="dropdown-header">Notifications (5)</li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-bug media-object bg-red"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Server Error Reports</h6>
                                        <div class="text-muted f-s-11">3 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><img src="assets/img/user-1.jpg" class="media-object" alt="" /></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">John Smith</h6>
                                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="text-muted f-s-11">25 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><img src="assets/img/user-2.jpg" class="media-object" alt="" /></div>
                                    <div class="media-body">
                                        <h6 class="media-heading">Olivia</h6>
                                        <p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                        <div class="text-muted f-s-11">35 minutes ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-plus media-object bg-green"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading"> New User Registered</h6>
                                        <div class="text-muted f-s-11">1 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="media">
                                <a href="javascript:;">
                                    <div class="media-left"><i class="fa fa-envelope media-object bg-blue"></i></div>
                                    <div class="media-body">
                                        <h6 class="media-heading"> New Email From John</h6>
                                        <div class="text-muted f-s-11">2 hour ago</div>
                                    </div>
                                </a>
                            </li>
                            <li class="dropdown-footer text-center">
                                <a href="javascript:;">View more</a>
                            </li>
						</ul>
					</li>
					<li class="dropdown navbar-language">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<span class="flag-icon flag-icon-us" title="us"></span>
							<span class="name">EN</span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu animated fadeInRight p-b-0">
							<li class="arrow"></li>
							<li><a href="javascript:;"><span class="flag-icon flag-icon-us" title="us"></span> English</a></li>
							<li><a href="javascript:;"><span class="flag-icon flag-icon-cn" title="cn"></span> Chinese</a></li>
							<li><a href="javascript:;"><span class="flag-icon flag-icon-jp" title="jp"></span> Japanese</a></li>
							<li><a href="javascript:;"><span class="flag-icon flag-icon-be" title="be"></span> Belgium</a></li>
							<li class="divider m-b-0"></li>
							<li class="text-center"><a href="javascript:;">more options</a></li>
						</ul>
					</li>
					<li class="dropdown navbar-user">
						<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
							<img src="assets/img/user-13.jpg" alt="" /> 
							<span class="hidden-xs">Adam Schwartz</span> <b class="caret"></b>
						</a>
						<ul class="dropdown-menu animated fadeInLeft">
							<li class="arrow"></li>
							<li><a href="javascript:;">Edit Profile</a></li>
							<li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
							<li><a href="javascript:;">Calendar</a></li>
							<li><a href="javascript:;">Setting</a></li>
							<li class="divider"></li>
							<li><a href="javascript:;">Log Out</a></li>
						</ul>
					</li>
				</ul>
				<!-- end header navigation right -->
			</div>
			<!-- end container-fluid -->
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="image">
							<a href="javascript:;"><img src="assets/img/user-13.jpg" alt="" /></a>
						</div>
						<div class="info">
							Sean Ngu
							<small>Front end developer</small>
						</div>
					</li>
				</ul>
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-laptop"></i>
						    <span>Dashboard</span>
					    </a>
						<ul class="sub-menu">
						    <li><a href="index.html">Dashboard v1</a></li>
						    <li><a href="index_v2.html">Dashboard v2</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
							<span class="badge pull-right">10</span>
							<i class="fa fa-inbox"></i> 
							<span>Email</span>
						</a>
						<ul class="sub-menu">
						    <li><a href="email_inbox.html">Inbox v1</a></li>
						    <li><a href="email_inbox_v2.html">Inbox v2</a></li>
						    <li><a href="email_compose.html">Compose</a></li>
						    <li><a href="email_detail.html">Detail</a></li>
						</ul>
					</li>
					<li class="has-sub active">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-suitcase"></i>
						    <span>UI Elements</span> 
						</a>
						<ul class="sub-menu">
							<li><a href="ui_general.html">General</a></li>
							<li><a href="ui_typography.html">Typography</a></li>
							<li><a href="ui_tabs_accordions.html">Tabs & Accordions</a></li>
							<li><a href="ui_unlimited_tabs.html">Unlimited Nav Tabs</a></li>
							<li><a href="ui_modal_notification.html">Modal & Notification</a></li>
							<li><a href="ui_widget_boxes.html">Widget Boxes</a></li>
							<li><a href="ui_media_object.html">Media Object</a></li>
							<li><a href="ui_buttons.html">Buttons</a></li>
							<li><a href="ui_icons.html">Icons</a></li>
							<li><a href="ui_simple_line_icons.html">Simple Line Icons</a></li>
							<li><a href="ui_ionicons.html">Ionicons</a></li>
							<li><a href="ui_tree.html">Tree View</a></li>
							<li class="active"><a href="ui_language_bar_icon.html">Language Bar & Icon</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-file-o"></i>
						    <span>Form Stuff</span> 
						</a>
						<ul class="sub-menu">
							<li><a href="form_elements.html">Form Elements</a></li>
							<li><a href="form_plugins.html">Form Plugins</a></li>
							<li><a href="form_slider_switcher.html">Form Slider + Switcher</a></li>
							<li><a href="form_validation.html">Form Validation</a></li>
							<li><a href="form_wizards.html">Wizards</a></li>
							<li><a href="form_wizards_validation.html">Wizards + Validation</a></li>
							<li><a href="form_wysiwyg.html">WYSIWYG</a></li>
							<li><a href="form_editable.html">X-Editable</a></li>
							<li><a href="form_multiple_upload.html">Multiple File Upload</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-th"></i>
						    <span>Tables  <span class="label label-theme m-l-5">NEW</span></span>
						</a>
						<ul class="sub-menu">
							<li><a href="table_basic.html">Basic Tables</a></li>
							<li class="has-sub">
							    <a href="javascript:;"><b class="caret pull-right"></b> Managed Tables</a>
							    <ul class="sub-menu">
							        <li><a href="table_manage.html">Default</a></li>
							        <li><a href="table_manage_autofill.html">Autofill</a></li>
							        <li><a href="table_manage_buttons.html">Buttons</a></li>
							        <li><a href="table_manage_colreorder.html">ColReorder</a></li>
							        <li><a href="table_manage_fixed_columns.html">Fixed Column</a></li>
							        <li><a href="table_manage_fixed_header.html">Fixed Header</a></li>
							        <li><a href="table_manage_keytable.html">KeyTable</a></li>
							        <li><a href="table_manage_responsive.html">Responsive</a></li>
							        <li><a href="table_manage_rowreorder.html">RowReorder <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
							        <li><a href="table_manage_scroller.html">Scroller</a></li>
							        <li><a href="table_manage_select.html">Select</a></li>
							        <li><a href="table_manage_combine.html">Extension Combination</a></li>
							    </ul>
							</li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
							<i class="fa fa-star"></i> 
							<span>Front End</span>
						</a>
						<ul class="sub-menu">
						    <li><a href="http://seantheme.com/color-admin-v1.9/frontend/one-page-parallax/index.html" target="_blank">One Page Parallax</a></li>
						    <li><a href="http://seantheme.com/color-admin-v1.9/frontend/blog/index.html" target="_blank">Blog</a></li>
						    <li><a href="http://seantheme.com/color-admin-v1.9/frontend/forum/index.html" target="_blank">Forum</a></li>
						</ul>
					</li>
					<li class="has-sub">
					    <a href="javascript:;">
						    <b class="caret pull-right"></b>
					        <i class="fa fa-envelope"></i>
					        <span>Email Template</span>
					    </a>
						<ul class="sub-menu">
							<li><a href="email_system.html">System Template</a></li>
							<li><a href="email_newsletter.html">Newsletter Template</a></li>
						</ul>
					</li>
					<li class="has-sub">
					    <a href="javascript:;">
						    <b class="caret pull-right"></b>
					        <i class="fa fa-area-chart"></i>
						    <span>Chart <span class="label label-theme m-l-5">NEW</span></span>
						</a>
						<ul class="sub-menu">
						    <li><a href="chart-flot.html">Flot Chart</a></li>
						    <li><a href="chart-morris.html">Morris Chart</a></li>
							<li><a href="chart-js.html">Chart JS</a></li>
						    <li><a href="chart-d3.html">d3 Chart <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
						</ul>
					</li>
					<li><a href="calendar.html"><i class="fa fa-calendar"></i> <span>Calendar</span></a></li>
					<li class="has-sub">
					    <a href="javascript:;">
					        <b class="caret pull-right"></b>
					        <i class="fa fa-map-marker"></i>
					        <span>Map</span>
					    </a>
						<ul class="sub-menu">
							<li><a href="map_vector.html">Vector Map</a></li>
							<li><a href="map_google.html">Google Map</a></li>
						</ul>
					</li>
					<li class="has-sub">
					    <a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-camera"></i>
						    <span>Gallery</span>
						</a>
					    <ul class="sub-menu">
					        <li><a href="gallery.html">Gallery v1</a></li>
					        <li><a href="gallery_v2.html">Gallery v2</a></li>
					    </ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-cogs"></i>
						    <span>Page Options <span class="label label-theme m-l-5">NEW</span></span>
						</a>
						<ul class="sub-menu">
							<li><a href="page_blank.html">Blank Page</a></li>
							<li><a href="page_with_footer.html">Page with Footer</a></li>
							<li><a href="page_without_sidebar.html">Page without Sidebar</a></li>
							<li><a href="page_with_right_sidebar.html">Page with Right Sidebar</a></li>
							<li><a href="page_with_minified_sidebar.html">Page with Minified Sidebar</a></li>
							<li><a href="page_with_two_sidebar.html">Page with Two Sidebar</a></li>
							<li><a href="page_with_line_icons.html">Page with Line Icons</a></li>
							<li><a href="page_with_ionicons.html">Page with Ionicons</a></li>
							<li><a href="page_full_height.html">Full Height Content</a></li>
							<li><a href="page_with_wide_sidebar.html">Page with Wide Sidebar</a></li>
							<li><a href="page_with_light_sidebar.html">Page with Light Sidebar</a></li>
							<li><a href="page_with_mega_menu.html">Page with Mega Menu</a></li>
                            <li><a href="page_with_top_menu.html">Page with Top Menu <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                            <li><a href="page_with_boxed_layout.html">Page with Boxed Layout <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                            <li><a href="page_with_mixed_menu.html">Page with Mixed Menu <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                            <li><a href="page_boxed_layout_with_mixed_menu.html">Boxed Layout with Mixed Menu <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                            <li><a href="page_with_transparent_sidebar.html">Page with Transparent Sidebar <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-gift"></i>
						    <span>Extra</span>
						</a>
						<ul class="sub-menu">
						    <li><a href="extra_timeline.html">Timeline</a></li>
						    <li><a href="extra_coming_soon.html">Coming Soon Page</a></li>
							<li><a href="extra_search_results.html">Search Results</a></li>
							<li><a href="extra_invoice.html">Invoice</a></li>
							<li><a href="extra_404_error.html">404 Error Page</a></li>
							<li><a href="extra_profile.html">Profile Page</a></li>
						</ul>
					</li>
					<li class="has-sub">
					    <a href="javascript:;">
					        <b class="caret pull-right"></b>
					        <i class="fa fa-key"></i>
					        <span>Login & Register</span>
					    </a>
					    <ul class="sub-menu">
							<li><a href="login.html">Login</a></li>
					        <li><a href="login_v2.html">Login v2</a></li>
					        <li><a href="login_v3.html">Login v3</a></li>
					        <li><a href="register_v3.html">Register v3</a></li>
					    </ul>
					</li>
					<li class="has-sub">
					    <a href="javascript:;">
					        <b class="caret pull-right"></b>
					        <i class="fa fa-cubes"></i>
					        <span>Version <span class="label label-theme m-l-5">NEW</span></span>
					    </a>
					    <ul class="sub-menu">
							<li><a href="javascript:;">HTML</a></li>
					        <li><a href="http://seantheme.com/color-admin-v1.9/admin/ajax/index.html">AJAX</a></li>
					        <li><a href="http://seantheme.com/color-admin-v1.9/admin/angularjs/index.html">ANGULAR JS<i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
					    </ul>
					</li>
					<li class="has-sub">
					    <a href="javascript:;">
					        <b class="caret pull-right"></b>
					        <i class="fa fa-medkit"></i>
					        <span>Helper</span>
					    </a>
					    <ul class="sub-menu">
							<li><a href="helper_css.html">Predefined CSS Classes</a></li>
					    </ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-align-left"></i> 
						    <span>Menu Level</span>
						</a>
						<ul class="sub-menu">
							<li class="has-sub">
								<a href="javascript:;">
						            <b class="caret pull-right"></b>
						            Menu 1.1
						        </a>
								<ul class="sub-menu">
									<li class="has-sub">
										<a href="javascript:;">
										    <b class="caret pull-right"></b>
										    Menu 2.1
										</a>
										<ul class="sub-menu">
											<li><a href="javascript:;">Menu 3.1</a></li>
											<li><a href="javascript:;">Menu 3.2</a></li>
										</ul>
									</li>
									<li><a href="javascript:;">Menu 2.2</a></li>
									<li><a href="javascript:;">Menu 2.3</a></li>
								</ul>
							</li>
							<li><a href="javascript:;">Menu 1.2</a></li>
							<li><a href="javascript:;">Menu 1.3</a></li>
						</ul>
					</li>
			        <!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li><a href="javascript:;">UI Elements</a></li>
				<li class="active">UI Language Bar & Icon</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">UI Language Bar & Icon <small>header small text goes here...</small></h1>
			<!-- end page-header -->
			
			<div class="panel panel-inverse">
			    <div class="panel-heading">
			        <div class="panel-heading-btn">
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
			            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
			        </div>
			        <h4 class="panel-title">Language Icon List</h4>
			    </div>
			    <div class="panel-body">
			        <div class="row">
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ad width-full m-r-10 m-t-0 m-b-3" title="ad" id="ad"></h2> <b class="text-inverse">AD</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ae width-full m-r-10 m-t-0 m-b-3" title="ae" id="ae"></h2> <b class="text-inverse">AE</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-af width-full m-r-10 m-t-0 m-b-3" title="af" id="af"></h2> <b class="text-inverse">AF</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ag width-full m-r-10 m-t-0 m-b-3" title="ag" id="ag"></h2> <b class="text-inverse">AG</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ai width-full m-r-10 m-t-0 m-b-3" title="ai" id="ai"></h2> <b class="text-inverse">AU</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-al width-full m-r-10 m-t-0 m-b-3" title="al" id="al"></h2> <b class="text-inverse">AL</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-am width-full m-r-10 m-t-0 m-b-3" title="am" id="am"></h2> <b class="text-inverse">AM</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ao width-full m-r-10 m-t-0 m-b-3" title="ao" id="ao"></h2> <b class="text-inverse">AO</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-aq width-full m-r-10 m-t-0 m-b-3" title="aq" id="aq"></h2> <b class="text-inverse">AQ</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ar width-full m-r-10 m-t-0 m-b-3" title="ar" id="ar"></h2> <b class="text-inverse">AR</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-as width-full m-r-10 m-t-0 m-b-3" title="as" id="as"></h2> <b class="text-inverse">AS</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-at width-full m-r-10 m-t-0 m-b-3" title="at" id="at"></h2> <b class="text-inverse">AT</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-au width-full m-r-10 m-t-0 m-b-3" title="au" id="au"></h2> <b class="text-inverse">AU</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-aw width-full m-r-10 m-t-0 m-b-3" title="aw" id="aw"></h2> <b class="text-inverse">AW</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ax width-full m-r-10 m-t-0 m-b-3" title="ax" id="ax"></h2> <b class="text-inverse">AX</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-az width-full m-r-10 m-t-0 m-b-3" title="az" id="az"></h2> <b class="text-inverse">AZ</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ba width-full m-r-10 m-t-0 m-b-3" title="ba" id="ba"></h2> <b class="text-inverse">BA</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-bb width-full m-r-10 m-t-0 m-b-3" title="bb" id="bb"></h2> <b class="text-inverse">BB</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-bd width-full m-r-10 m-t-0 m-b-3" title="bd" id="bd"></h2> <b class="text-inverse">BD</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-be width-full m-r-10 m-t-0 m-b-3" title="be" id="be"></h2> <b class="text-inverse">BE</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-bf width-full m-r-10 m-t-0 m-b-3" title="bf" id="bf"></h2> <b class="text-inverse">BF</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-bg width-full m-r-10 m-t-0 m-b-3" title="bg" id="bg"></h2> <b class="text-inverse">BG</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-bh width-full m-r-10 m-t-0 m-b-3" title="bh" id="bh"></h2> <b class="text-inverse">BH</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-bi width-full m-r-10 m-t-0 m-b-3" title="bi" id="bi"></h2> <b class="text-inverse">BI</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-bj width-full m-r-10 m-t-0 m-b-3" title="bj" id="bj"></h2> <b class="text-inverse">BJ</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-bl width-full m-r-10 m-t-0 m-b-3" title="bl" id="bl"></h2> <b class="text-inverse">BL</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-bm width-full m-r-10 m-t-0 m-b-3" title="bm" id="bm"></h2> <b class="text-inverse">BM</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-bn width-full m-r-10 m-t-0 m-b-3" title="bn" id="bn"></h2> <b class="text-inverse">BN</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-bo width-full m-r-10 m-t-0 m-b-3" title="bo" id="bo"></h2> <b class="text-inverse">BO</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-bq width-full m-r-10 m-t-0 m-b-3" title="bq" id="bq"></h2> <b class="text-inverse">BQ</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-br width-full m-r-10 m-t-0 m-b-3" title="br" id="br"></h2> <b class="text-inverse">BR</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-bs width-full m-r-10 m-t-0 m-b-3" title="bs" id="bs"></h2> <b class="text-inverse">BS</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-bt width-full m-r-10 m-t-0 m-b-3" title="bt" id="bt"></h2> <b class="text-inverse">BT</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-bv width-full m-r-10 m-t-0 m-b-3" title="bv" id="bv"></h2> <b class="text-inverse">BV</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-bw width-full m-r-10 m-t-0 m-b-3" title="bw" id="bw"></h2> <b class="text-inverse">BW</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-by width-full m-r-10 m-t-0 m-b-3" title="by" id="by"></h2> <b class="text-inverse">BY</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-bz width-full m-r-10 m-t-0 m-b-3" title="bz" id="bz"></h2> <b class="text-inverse">BZ</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ca width-full m-r-10 m-t-0 m-b-3" title="ca" id="ca"></h2> <b class="text-inverse">CA</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-cc width-full m-r-10 m-t-0 m-b-3" title="cc" id="cc"></h2> <b class="text-inverse">CC</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-cd width-full m-r-10 m-t-0 m-b-3" title="cd" id="cd"></h2> <b class="text-inverse">CD</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-cf width-full m-r-10 m-t-0 m-b-3" title="cf" id="cf"></h2> <b class="text-inverse">CF</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-cg width-full m-r-10 m-t-0 m-b-3" title="cg" id="cg"></h2> <b class="text-inverse">CG</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ch width-full m-r-10 m-t-0 m-b-3" title="ch" id="ch"></h2> <b class="text-inverse">CH</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ci width-full m-r-10 m-t-0 m-b-3" title="ci" id="ci"></h2> <b class="text-inverse">CI</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ck width-full m-r-10 m-t-0 m-b-3" title="ck" id="ck"></h2> <b class="text-inverse">CK</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-cl width-full m-r-10 m-t-0 m-b-3" title="cl" id="cl"></h2> <b class="text-inverse">CL</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-cm width-full m-r-10 m-t-0 m-b-3" title="cm" id="cm"></h2> <b class="text-inverse">CM</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-cn width-full m-r-10 m-t-0 m-b-3" title="cn" id="cn"></h2> <b class="text-inverse">CN</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-co width-full m-r-10 m-t-0 m-b-3" title="co" id="co"></h2> <b class="text-inverse">CO</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-cr width-full m-r-10 m-t-0 m-b-3" title="cr" id="cr"></h2> <b class="text-inverse">CR</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-cu width-full m-r-10 m-t-0 m-b-3" title="cu" id="cu"></h2> <b class="text-inverse">CU</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-cv width-full m-r-10 m-t-0 m-b-3" title="cv" id="cv"></h2> <b class="text-inverse">CV</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-cw width-full m-r-10 m-t-0 m-b-3" title="cw" id="cw"></h2> <b class="text-inverse">CW</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-cx width-full m-r-10 m-t-0 m-b-3" title="cx" id="cx"></h2> <b class="text-inverse">CX</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-cy width-full m-r-10 m-t-0 m-b-3" title="cy" id="cy"></h2> <b class="text-inverse">CY</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-cz width-full m-r-10 m-t-0 m-b-3" title="cz" id="cz"></h2> <b class="text-inverse">CZ</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-de width-full m-r-10 m-t-0 m-b-3" title="de" id="de"></h2> <b class="text-inverse">DE</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-dj width-full m-r-10 m-t-0 m-b-3" title="dj" id="dj"></h2> <b class="text-inverse">DJ</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-dk width-full m-r-10 m-t-0 m-b-3" title="dk" id="dk"></h2> <b class="text-inverse">DK</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-dm width-full m-r-10 m-t-0 m-b-3" title="dm" id="dm"></h2> <b class="text-inverse">DM</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-do width-full m-r-10 m-t-0 m-b-3" title="do" id="do"></h2> <b class="text-inverse">DO</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-dz width-full m-r-10 m-t-0 m-b-3" title="dz" id="dz"></h2> <b class="text-inverse">DZ</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ec width-full m-r-10 m-t-0 m-b-3" title="ec" id="ec"></h2> <b class="text-inverse">EC</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ee width-full m-r-10 m-t-0 m-b-3" title="ee" id="ee"></h2> <b class="text-inverse">EE</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-eg width-full m-r-10 m-t-0 m-b-3" title="eg" id="eg"></h2> <b class="text-inverse">EG</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-eh width-full m-r-10 m-t-0 m-b-3" title="eh" id="eh"></h2> <b class="text-inverse">EH</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-er width-full m-r-10 m-t-0 m-b-3" title="er" id="er"></h2> <b class="text-inverse">ER</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-es width-full m-r-10 m-t-0 m-b-3" title="es" id="es"></h2> <b class="text-inverse">ES</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-et width-full m-r-10 m-t-0 m-b-3" title="et" id="et"></h2> <b class="text-inverse">ET</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-fi width-full m-r-10 m-t-0 m-b-3" title="fi" id="fi"></h2> <b class="text-inverse">FI</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-fj width-full m-r-10 m-t-0 m-b-3" title="fj" id="fj"></h2> <b class="text-inverse">FJ</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-fk width-full m-r-10 m-t-0 m-b-3" title="fk" id="fk"></h2> <b class="text-inverse">FK</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-fm width-full m-r-10 m-t-0 m-b-3" title="fm" id="fm"></h2> <b class="text-inverse">FM</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-fo width-full m-r-10 m-t-0 m-b-3" title="fo" id="fo"></h2> <b class="text-inverse">FO</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-fr width-full m-r-10 m-t-0 m-b-3" title="fr" id="fr"></h2> <b class="text-inverse">FR</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ga width-full m-r-10 m-t-0 m-b-3" title="ga" id="ga"></h2> <b class="text-inverse">GA</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-gb width-full m-r-10 m-t-0 m-b-3" title="gb" id="gb"></h2> <b class="text-inverse">GB</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-gd width-full m-r-10 m-t-0 m-b-3" title="gd" id="gd"></h2> <b class="text-inverse">GD</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ge width-full m-r-10 m-t-0 m-b-3" title="ge" id="ge"></h2> <b class="text-inverse">GE</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-gf width-full m-r-10 m-t-0 m-b-3" title="gf" id="gf"></h2> <b class="text-inverse">GF</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-gg width-full m-r-10 m-t-0 m-b-3" title="gg" id="gg"></h2> <b class="text-inverse">GG</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-gh width-full m-r-10 m-t-0 m-b-3" title="gh" id="gh"></h2> <b class="text-inverse">GH</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-gi width-full m-r-10 m-t-0 m-b-3" title="gi" id="gi"></h2> <b class="text-inverse">GI</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-gl width-full m-r-10 m-t-0 m-b-3" title="gl" id="gl"></h2> <b class="text-inverse">GL</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-gm width-full m-r-10 m-t-0 m-b-3" title="gm" id="gm"></h2> <b class="text-inverse">GM</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-gn width-full m-r-10 m-t-0 m-b-3" title="gn" id="gn"></h2> <b class="text-inverse">GN</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-gp width-full m-r-10 m-t-0 m-b-3" title="gp" id="gp"></h2> <b class="text-inverse">GP</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-gq width-full m-r-10 m-t-0 m-b-3" title="gq" id="gq"></h2> <b class="text-inverse">GQ</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-gr width-full m-r-10 m-t-0 m-b-3" title="gr" id="gr"></h2> <b class="text-inverse">GR</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-gs width-full m-r-10 m-t-0 m-b-3" title="gs" id="gs"></h2> <b class="text-inverse">GS</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-gt width-full m-r-10 m-t-0 m-b-3" title="gt" id="gt"></h2> <b class="text-inverse">GT</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-gu width-full m-r-10 m-t-0 m-b-3" title="gu" id="gu"></h2> <b class="text-inverse">GU</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-gw width-full m-r-10 m-t-0 m-b-3" title="gw" id="gw"></h2> <b class="text-inverse">GW</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-gy width-full m-r-10 m-t-0 m-b-3" title="gy" id="gy"></h2> <b class="text-inverse">GY</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-hk width-full m-r-10 m-t-0 m-b-3" title="hk" id="hk"></h2> <b class="text-inverse">HK</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-hm width-full m-r-10 m-t-0 m-b-3" title="hm" id="hm"></h2> <b class="text-inverse">HM</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-hn width-full m-r-10 m-t-0 m-b-3" title="hn" id="hn"></h2> <b class="text-inverse">HN</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-hr width-full m-r-10 m-t-0 m-b-3" title="hr" id="hr"></h2> <b class="text-inverse">HR</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ht width-full m-r-10 m-t-0 m-b-3" title="ht" id="ht"></h2> <b class="text-inverse">HT</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-hu width-full m-r-10 m-t-0 m-b-3" title="hu" id="hu"></h2> <b class="text-inverse">HU</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-id width-full m-r-10 m-t-0 m-b-3" title="id" id="id"></h2> <b class="text-inverse">ID</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ie width-full m-r-10 m-t-0 m-b-3" title="ie" id="ie"></h2> <b class="text-inverse">IE</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-il width-full m-r-10 m-t-0 m-b-3" title="il" id="il"></h2> <b class="text-inverse">IL</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-im width-full m-r-10 m-t-0 m-b-3" title="im" id="im"></h2> <b class="text-inverse">IM</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-in width-full m-r-10 m-t-0 m-b-3" title="in" id="in"></h2> <b class="text-inverse">IN</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-io width-full m-r-10 m-t-0 m-b-3" title="io" id="io"></h2> <b class="text-inverse">IO</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-iq width-full m-r-10 m-t-0 m-b-3" title="iq" id="iq"></h2> <b class="text-inverse">IQ</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ir width-full m-r-10 m-t-0 m-b-3" title="ir" id="ir"></h2> <b class="text-inverse">IR</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-is width-full m-r-10 m-t-0 m-b-3" title="is" id="is"></h2> <b class="text-inverse">IS</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-it width-full m-r-10 m-t-0 m-b-3" title="it" id="it"></h2> <b class="text-inverse">IT</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-je width-full m-r-10 m-t-0 m-b-3" title="je" id="je"></h2> <b class="text-inverse">JE</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-jm width-full m-r-10 m-t-0 m-b-3" title="jm" id="jm"></h2> <b class="text-inverse">JM</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-jo width-full m-r-10 m-t-0 m-b-3" title="jo" id="jo"></h2> <b class="text-inverse">JO</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-jp width-full m-r-10 m-t-0 m-b-3" title="jp" id="jp"></h2> <b class="text-inverse">JP</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ke width-full m-r-10 m-t-0 m-b-3" title="ke" id="ke"></h2> <b class="text-inverse">KE</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-kg width-full m-r-10 m-t-0 m-b-3" title="kg" id="kg"></h2> <b class="text-inverse">KG</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-kh width-full m-r-10 m-t-0 m-b-3" title="kh" id="kh"></h2> <b class="text-inverse">KH</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ki width-full m-r-10 m-t-0 m-b-3" title="ki" id="ki"></h2> <b class="text-inverse">KI</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-km width-full m-r-10 m-t-0 m-b-3" title="km" id="km"></h2> <b class="text-inverse">KM</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-kn width-full m-r-10 m-t-0 m-b-3" title="kn" id="kn"></h2> <b class="text-inverse">KN</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-kp width-full m-r-10 m-t-0 m-b-3" title="kp" id="kp"></h2> <b class="text-inverse">KP</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-kr width-full m-r-10 m-t-0 m-b-3" title="kr" id="kr"></h2> <b class="text-inverse">KR</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-kw width-full m-r-10 m-t-0 m-b-3" title="kw" id="kw"></h2> <b class="text-inverse">KW</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ky width-full m-r-10 m-t-0 m-b-3" title="ky" id="ky"></h2> <b class="text-inverse">KY</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-kz width-full m-r-10 m-t-0 m-b-3" title="kz" id="kz"></h2> <b class="text-inverse">KZ</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-la width-full m-r-10 m-t-0 m-b-3" title="la" id="la"></h2> <b class="text-inverse">LA</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-lb width-full m-r-10 m-t-0 m-b-3" title="lb" id="lb"></h2> <b class="text-inverse">LB</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-lc width-full m-r-10 m-t-0 m-b-3" title="lc" id="lc"></h2> <b class="text-inverse">LC</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-li width-full m-r-10 m-t-0 m-b-3" title="li" id="li"></h2> <b class="text-inverse">LI</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-lk width-full m-r-10 m-t-0 m-b-3" title="lk" id="lk"></h2> <b class="text-inverse">LK</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-lr width-full m-r-10 m-t-0 m-b-3" title="lr" id="lr"></h2> <b class="text-inverse">LR</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ls width-full m-r-10 m-t-0 m-b-3" title="ls" id="ls"></h2> <b class="text-inverse">LS</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-lt width-full m-r-10 m-t-0 m-b-3" title="lt" id="lt"></h2> <b class="text-inverse">LT</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-lu width-full m-r-10 m-t-0 m-b-3" title="lu" id="lu"></h2> <b class="text-inverse">LU</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-lv width-full m-r-10 m-t-0 m-b-3" title="lv" id="lv"></h2> <b class="text-inverse">LV</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ly width-full m-r-10 m-t-0 m-b-3" title="ly" id="ly"></h2> <b class="text-inverse">LY</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ma width-full m-r-10 m-t-0 m-b-3" title="ma" id="ma"></h2> <b class="text-inverse">MA</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-mc width-full m-r-10 m-t-0 m-b-3" title="mc" id="mc"></h2> <b class="text-inverse">MC</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-md width-full m-r-10 m-t-0 m-b-3" title="md" id="md"></h2> <b class="text-inverse">MD</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-me width-full m-r-10 m-t-0 m-b-3" title="me" id="me"></h2> <b class="text-inverse">ME</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-mf width-full m-r-10 m-t-0 m-b-3" title="mf" id="mf"></h2> <b class="text-inverse">MF</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-mg width-full m-r-10 m-t-0 m-b-3" title="mg" id="mg"></h2> <b class="text-inverse">MG</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-mh width-full m-r-10 m-t-0 m-b-3" title="mh" id="mh"></h2> <b class="text-inverse">MH</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-mk width-full m-r-10 m-t-0 m-b-3" title="mk" id="mk"></h2> <b class="text-inverse">MK</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ml width-full m-r-10 m-t-0 m-b-3" title="ml" id="ml"></h2> <b class="text-inverse">ML</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-mm width-full m-r-10 m-t-0 m-b-3" title="mm" id="mm"></h2> <b class="text-inverse">MM</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-mn width-full m-r-10 m-t-0 m-b-3" title="mn" id="mn"></h2> <b class="text-inverse">MN</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-mo width-full m-r-10 m-t-0 m-b-3" title="mo" id="mo"></h2> <b class="text-inverse">MO</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-mp width-full m-r-10 m-t-0 m-b-3" title="mp" id="mp"></h2> <b class="text-inverse">MP</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-mq width-full m-r-10 m-t-0 m-b-3" title="mq" id="mq"></h2> <b class="text-inverse">MQ</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-mr width-full m-r-10 m-t-0 m-b-3" title="mr" id="mr"></h2> <b class="text-inverse">MR</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ms width-full m-r-10 m-t-0 m-b-3" title="ms" id="ms"></h2> <b class="text-inverse">MS</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-mt width-full m-r-10 m-t-0 m-b-3" title="mt" id="mt"></h2> <b class="text-inverse">MT</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-mu width-full m-r-10 m-t-0 m-b-3" title="mu" id="mu"></h2> <b class="text-inverse">MU</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-mv width-full m-r-10 m-t-0 m-b-3" title="mv" id="mv"></h2> <b class="text-inverse">MV</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-mw width-full m-r-10 m-t-0 m-b-3" title="mw" id="mw"></h2> <b class="text-inverse">MW</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-mx width-full m-r-10 m-t-0 m-b-3" title="mx" id="mx"></h2> <b class="text-inverse">MX</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-my width-full m-r-10 m-t-0 m-b-3" title="my" id="my"></h2> <b class="text-inverse">MY</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-mz width-full m-r-10 m-t-0 m-b-3" title="mz" id="mz"></h2> <b class="text-inverse">MZ</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-na width-full m-r-10 m-t-0 m-b-3" title="na" id="na"></h2> <b class="text-inverse">NA</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-nc width-full m-r-10 m-t-0 m-b-3" title="nc" id="nc"></h2> <b class="text-inverse">NC</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ne width-full m-r-10 m-t-0 m-b-3" title="ne" id="ne"></h2> <b class="text-inverse">NE</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-nf width-full m-r-10 m-t-0 m-b-3" title="nf" id="nf"></h2> <b class="text-inverse">NF</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ng width-full m-r-10 m-t-0 m-b-3" title="ng" id="ng"></h2> <b class="text-inverse">NG</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ni width-full m-r-10 m-t-0 m-b-3" title="ni" id="ni"></h2> <b class="text-inverse">NI</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-nl width-full m-r-10 m-t-0 m-b-3" title="nl" id="nl"></h2> <b class="text-inverse">NL</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-no width-full m-r-10 m-t-0 m-b-3" title="no" id="no"></h2> <b class="text-inverse">NO</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-np width-full m-r-10 m-t-0 m-b-3" title="np" id="np"></h2> <b class="text-inverse">NP</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-nr width-full m-r-10 m-t-0 m-b-3" title="nr" id="nr"></h2> <b class="text-inverse">NR</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-nu width-full m-r-10 m-t-0 m-b-3" title="nu" id="nu"></h2> <b class="text-inverse">NU</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-nz width-full m-r-10 m-t-0 m-b-3" title="nz" id="nz"></h2> <b class="text-inverse">NZ</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-om width-full m-r-10 m-t-0 m-b-3" title="om" id="om"></h2> <b class="text-inverse">OM</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-pa width-full m-r-10 m-t-0 m-b-3" title="pa" id="pa"></h2> <b class="text-inverse">PA</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-pe width-full m-r-10 m-t-0 m-b-3" title="pe" id="pe"></h2> <b class="text-inverse">PE</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-pf width-full m-r-10 m-t-0 m-b-3" title="pf" id="pf"></h2> <b class="text-inverse">PF</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-pg width-full m-r-10 m-t-0 m-b-3" title="pg" id="pg"></h2> <b class="text-inverse">PG</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ph width-full m-r-10 m-t-0 m-b-3" title="ph" id="ph"></h2> <b class="text-inverse">PH</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-pk width-full m-r-10 m-t-0 m-b-3" title="pk" id="pk"></h2> <b class="text-inverse">PK</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-pl width-full m-r-10 m-t-0 m-b-3" title="pl" id="pl"></h2> <b class="text-inverse">PL</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-pm width-full m-r-10 m-t-0 m-b-3" title="pm" id="pm"></h2> <b class="text-inverse">PM</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-pn width-full m-r-10 m-t-0 m-b-3" title="pn" id="pn"></h2> <b class="text-inverse">PN</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-pr width-full m-r-10 m-t-0 m-b-3" title="pr" id="pr"></h2> <b class="text-inverse">PR</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ps width-full m-r-10 m-t-0 m-b-3" title="ps" id="ps"></h2> <b class="text-inverse">PS</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-pt width-full m-r-10 m-t-0 m-b-3" title="pt" id="pt"></h2> <b class="text-inverse">PT</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-pw width-full m-r-10 m-t-0 m-b-3" title="pw" id="pw"></h2> <b class="text-inverse">PW</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-py width-full m-r-10 m-t-0 m-b-3" title="py" id="py"></h2> <b class="text-inverse">PY</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-qa width-full m-r-10 m-t-0 m-b-3" title="qa" id="qa"></h2> <b class="text-inverse">QA</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-re width-full m-r-10 m-t-0 m-b-3" title="re" id="re"></h2> <b class="text-inverse">RE</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ro width-full m-r-10 m-t-0 m-b-3" title="ro" id="ro"></h2> <b class="text-inverse">RO</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-rs width-full m-r-10 m-t-0 m-b-3" title="rs" id="rs"></h2> <b class="text-inverse">RS</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ru width-full m-r-10 m-t-0 m-b-3" title="ru" id="ru"></h2> <b class="text-inverse">RU</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-rw width-full m-r-10 m-t-0 m-b-3" title="rw" id="rw"></h2> <b class="text-inverse">RW</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-sa width-full m-r-10 m-t-0 m-b-3" title="sa" id="sa"></h2> <b class="text-inverse">SA</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-sb width-full m-r-10 m-t-0 m-b-3" title="sb" id="sb"></h2> <b class="text-inverse">SB</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-sc width-full m-r-10 m-t-0 m-b-3" title="sc" id="sc"></h2> <b class="text-inverse">SC</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-sd width-full m-r-10 m-t-0 m-b-3" title="sd" id="sd"></h2> <b class="text-inverse">SD</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-se width-full m-r-10 m-t-0 m-b-3" title="se" id="se"></h2> <b class="text-inverse">SE</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-sg width-full m-r-10 m-t-0 m-b-3" title="sg" id="sg"></h2> <b class="text-inverse">SG</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-sh width-full m-r-10 m-t-0 m-b-3" title="sh" id="sh"></h2> <b class="text-inverse">SH</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-si width-full m-r-10 m-t-0 m-b-3" title="si" id="si"></h2> <b class="text-inverse">SI</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-sj width-full m-r-10 m-t-0 m-b-3" title="sj" id="sj"></h2> <b class="text-inverse">SJ</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-sk width-full m-r-10 m-t-0 m-b-3" title="sk" id="sk"></h2> <b class="text-inverse">SK</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-sl width-full m-r-10 m-t-0 m-b-3" title="sl" id="sl"></h2> <b class="text-inverse">SL</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-sm width-full m-r-10 m-t-0 m-b-3" title="sm" id="sm"></h2> <b class="text-inverse">SM</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-sn width-full m-r-10 m-t-0 m-b-3" title="sn" id="sn"></h2> <b class="text-inverse">SN</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-so width-full m-r-10 m-t-0 m-b-3" title="so" id="so"></h2> <b class="text-inverse">SO</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-sr width-full m-r-10 m-t-0 m-b-3" title="sr" id="sr"></h2> <b class="text-inverse">SR</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ss width-full m-r-10 m-t-0 m-b-3" title="ss" id="ss"></h2> <b class="text-inverse">SS</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-st width-full m-r-10 m-t-0 m-b-3" title="st" id="st"></h2> <b class="text-inverse">ST</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-sv width-full m-r-10 m-t-0 m-b-3" title="sv" id="sv"></h2> <b class="text-inverse">SV</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-sx width-full m-r-10 m-t-0 m-b-3" title="sx" id="sx"></h2> <b class="text-inverse">SX</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-sy width-full m-r-10 m-t-0 m-b-3" title="sy" id="sy"></h2> <b class="text-inverse">SY</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-sz width-full m-r-10 m-t-0 m-b-3" title="sz" id="sz"></h2> <b class="text-inverse">SZ</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-tc width-full m-r-10 m-t-0 m-b-3" title="tc" id="tc"></h2> <b class="text-inverse">TC</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-td width-full m-r-10 m-t-0 m-b-3" title="td" id="td"></h2> <b class="text-inverse">TD</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-tf width-full m-r-10 m-t-0 m-b-3" title="tf" id="tf"></h2> <b class="text-inverse">TF</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-tg width-full m-r-10 m-t-0 m-b-3" title="tg" id="tg"></h2> <b class="text-inverse">TG</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-th width-full m-r-10 m-t-0 m-b-3" title="th" id="th"></h2> <b class="text-inverse">TH</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-tj width-full m-r-10 m-t-0 m-b-3" title="tj" id="tj"></h2> <b class="text-inverse">TJ</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-tk width-full m-r-10 m-t-0 m-b-3" title="tk" id="tk"></h2> <b class="text-inverse">TK</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-tl width-full m-r-10 m-t-0 m-b-3" title="tl" id="tl"></h2> <b class="text-inverse">TL</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-tm width-full m-r-10 m-t-0 m-b-3" title="tm" id="tm"></h2> <b class="text-inverse">TM</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-tn width-full m-r-10 m-t-0 m-b-3" title="tn" id="tn"></h2> <b class="text-inverse">TN</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-to width-full m-r-10 m-t-0 m-b-3" title="to" id="to"></h2> <b class="text-inverse">TO</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-tr width-full m-r-10 m-t-0 m-b-3" title="tr" id="tr"></h2> <b class="text-inverse">TR</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-tt width-full m-r-10 m-t-0 m-b-3" title="tt" id="tt"></h2> <b class="text-inverse">TT</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-tv width-full m-r-10 m-t-0 m-b-3" title="tv" id="tv"></h2> <b class="text-inverse">TV</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-tw width-full m-r-10 m-t-0 m-b-3" title="tw" id="tw"></h2> <b class="text-inverse">TW</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-tz width-full m-r-10 m-t-0 m-b-3" title="tz" id="tz"></h2> <b class="text-inverse">TZ</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ua width-full m-r-10 m-t-0 m-b-3" title="ua" id="ua"></h2> <b class="text-inverse">UA</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ug width-full m-r-10 m-t-0 m-b-3" title="ug" id="ug"></h2> <b class="text-inverse">UG</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-um width-full m-r-10 m-t-0 m-b-3" title="um" id="um"></h2> <b class="text-inverse">UM</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-us width-full m-r-10 m-t-0 m-b-3" title="us" id="us"></h2> <b class="text-inverse">US</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-uy width-full m-r-10 m-t-0 m-b-3" title="uy" id="uy"></h2> <b class="text-inverse">UY</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-uz width-full m-r-10 m-t-0 m-b-3" title="uz" id="uz"></h2> <b class="text-inverse">UZ</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-va width-full m-r-10 m-t-0 m-b-3" title="va" id="va"></h2> <b class="text-inverse">VA</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-vc width-full m-r-10 m-t-0 m-b-3" title="vc" id="vc"></h2> <b class="text-inverse">VC</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ve width-full m-r-10 m-t-0 m-b-3" title="ve" id="ve"></h2> <b class="text-inverse">VE</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-vg width-full m-r-10 m-t-0 m-b-3" title="vg" id="vg"></h2> <b class="text-inverse">VG</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-vi width-full m-r-10 m-t-0 m-b-3" title="vi" id="vi"></h2> <b class="text-inverse">VI</b></div>
                    </div>
                    <div class="row">
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-vn width-full m-r-10 m-t-0 m-b-3" title="vn" id="vn"></h2> <b class="text-inverse">VN</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-vu width-full m-r-10 m-t-0 m-b-3" title="vu" id="vu"></h2> <b class="text-inverse">VU</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-wf width-full m-r-10 m-t-0 m-b-3" title="wf" id="wf"></h2> <b class="text-inverse">WF</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ws width-full m-r-10 m-t-0 m-b-3" title="ws" id="ws"></h2> <b class="text-inverse">WS</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-ye width-full m-r-10 m-t-0 m-b-3" title="ye" id="ye"></h2> <b class="text-inverse">YE</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-yt width-full m-r-10 m-t-0 m-b-3" title="yt" id="yt"></h2> <b class="text-inverse">YT</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-za width-full m-r-10 m-t-0 m-b-3" title="za" id="za"></h2> <b class="text-inverse">ZA</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-zm width-full m-r-10 m-t-0 m-b-3" title="zm" id="zm"></h2> <b class="text-inverse">ZM</b></div>
                        <div class="col-md-1 col-sm-2 col-xs-3 m-b-10 text-center"><h2 class="flag-icon flag-icon-zw width-full m-r-10 m-t-0 m-b-3" title="zw" id="zw"></h2> <b class="text-inverse">ZW</b></div>
                    </div>
			    </div>
			</div>
		</div>
		<!-- end #content -->
		
        <!-- begin theme-panel -->
        <div class="theme-panel">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
            <div class="theme-panel-content">
                <h5 class="m-t-0">Color Theme</h5>
                <ul class="theme-list clearfix">
                    <li class="active"><a href="javascript:;" class="bg-green" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-red" data-theme="red" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-black" data-theme="black" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
                </ul>
                <div class="divider"></div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Header Styling</div>
                    <div class="col-md-7">
                        <select name="header-styling" class="form-control input-sm">
                            <option value="1">default</option>
                            <option value="2">inverse</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Header</div>
                    <div class="col-md-7">
                        <select name="header-fixed" class="form-control input-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Styling</div>
                    <div class="col-md-7">
                        <select name="sidebar-styling" class="form-control input-sm">
                            <option value="1">default</option>
                            <option value="2">grid</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Sidebar</div>
                    <div class="col-md-7">
                        <select name="sidebar-fixed" class="form-control input-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Gradient</div>
                    <div class="col-md-7">
                        <select name="content-gradient" class="form-control input-sm">
                            <option value="1">disabled</option>
                            <option value="2">enabled</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Content Styling</div>
                    <div class="col-md-7">
                        <select name="content-styling" class="form-control input-sm">
                            <option value="1">default</option>
                            <option value="2">black</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-12">
                        <a href="#" class="btn btn-inverse btn-block btn-sm" data-click="reset-local-storage"><i class="fa fa-refresh m-r-3"></i> Reset Local Storage</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end theme-panel -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-53034621-1', 'auto');
      ga('send', 'pageview');
    </script>
</body>

<!-- Mirrored from seantheme.com/color-admin-v1.9/admin/html/ui_language_bar_icon.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Apr 2016 04:06:11 GMT -->
</html>

