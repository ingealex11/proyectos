<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v1.9/admin/html/ui_general.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Apr 2016 04:04:21 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Color Admin | General UI Elements</title>
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
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-header-fixed page-sidebar-fixed">
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
					<li>
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
							<li class="active"><a href="ui_general.html">General</a></li>
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
							<li><a href="ui_language_bar_icon.html">Language Bar & Icon</a></li>
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
				<li class="active">General</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">General UI Elements <small>header small text goes here...</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-6 -->
			    <div class="col-md-6">
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="ui-general-1">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Alerts</h4>
                        </div>
                        <div class="panel-body">
							<div class="alert alert-success fade in m-b-15">
								<strong>Success!</strong>
								Vivamus vestibulum posuere est eu tincidunt.
								<span class="close" data-dismiss="alert">&times;</span>
							</div>
							<div class="alert alert-info fade in m-b-15">
								<strong>Info!</strong>
								Morbi sed nibh ac tortor laoreet blandit sed eu ligula.
								<span class="close" data-dismiss="alert">&times;</span>
							</div>
                            <div class="alert alert-warning fade in m-b-15">
								<strong>Warning!</strong>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								<span class="close" data-dismiss="alert">&times;</span>
							</div>
							<div class="alert alert-danger fade in m-b-15">
								<strong>Error!</strong>
								Morbi vitae arcu in neque luctus elementum.
								<span class="close" data-dismiss="alert">&times;</span>
							</div>
                        </div>
                    </div>
                    <!-- end panel -->
			        <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="ui-general-2">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Notes</h4>
                        </div>
                        <div class="panel-body">
							<div class="note note-success">
								<h4>Some header text here!</h4>
								<p>
								    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Maecenas id gravida libero. Etiam semper id sem a ultricies. Donec id consequat magna.
                                    Suspendisse tincidunt blandit metus, eu pretium nibh tincidunt eget.
                                </p>
							</div>
							<div class="note note-info">
								<h4>Some header text here!</h4>
								<p>
								    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Maecenas id gravida libero. Etiam semper id sem a ultricies. Donec id consequat magna.
                                    Suspendisse tincidunt blandit metus, eu pretium nibh tincidunt eget.
                                </p>
							</div>
                        </div>
                    </div>
                    <!-- end panel -->
			    </div>
			    <!-- end col-6 -->
			    <!-- begin col-6 -->
			    <div class="col-md-6">
			        <!-- begin panel -->
			        <div class="panel panel-inverse" data-sortable-id="ui-general-3">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Labels & Badges</h4>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Class</th>
                                        <th>Labels</th>
                                        <th>Badges</th>
                                        <th>Square Badges</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Default</td>
                                        <td><span class="label label-default">Default</span></td>
                                        <td><span class="badge badge-default">6</span></td>
                                        <td><span class="badge badge-default badge-square">6</span></td>
                                    </tr>
                                    <tr>
                                        <td>Danger</td>
                                        <td><span class="label label-danger">Danger</span></td>
                                        <td><span class="badge badge-danger">4</span></td>
                                        <td><span class="badge badge-danger badge-square">4</span></td>
                                    </tr>
                                    <tr>
                                        <td>Warning</td>
                                        <td><span class="label label-warning">Warning</span></td>
                                        <td><span class="badge badge-warning">7</span></td>
                                        <td><span class="badge badge-warning badge-square">7</span></td>
                                    </tr>
                                    <tr>
                                        <td>Success</td>
                                        <td><span class="label label-success">Success</span></td>
                                        <td><span class="badge badge-success">8</span></td>
                                        <td><span class="badge badge-success badge-square">8</span></td>
                                    </tr>
                                    <tr>
                                        <td>Info</td>
                                        <td><span class="label label-info">Info</span></td>
                                        <td><span class="badge badge-info">2</span></td>
                                        <td><span class="badge badge-info badge-square">2</span></td>
                                    </tr>
                                    <tr>
                                        <td>Primary</td>
                                        <td><span class="label label-primary">Primary</span></td>
                                        <td><span class="badge badge-primary">5</span></td>
                                        <td><span class="badge badge-primary badge-square">5</span></td>
                                    </tr>
                                    <tr>
                                        <td>Inverse</td>
                                        <td><span class="label label-inverse">Inverse</span></td>
                                        <td><span class="badge badge-inverse">12</span></td>
                                        <td><span class="badge badge-inverse badge-square">12</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end panel -->
			        <!-- begin panel -->
			        <div class="panel panel-inverse" data-sortable-id="ui-general-4">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Pagination & Pager</h4>
                        </div>
                        <div class="panel-body">
                            <h5 class="m-t-0 m-b-15">Pagination</h5>
                            <div>
                                <ul class="pagination pagination-lg m-t-0 m-b-10">
                                    <li class="disabled"><a href="javascript:;">«</a></li>
                                    <li class="active"><a href="javascript:;">1</a></li>
                                    <li><a href="javascript:;">2</a></li>
                                    <li><a href="javascript:;">3</a></li>
                                    <li><a href="javascript:;">4</a></li>
                                    <li><a href="javascript:;">5</a></li>
                                    <li><a href="javascript:;">»</a></li>
                                </ul>
                            </div>
                            <div>
                                <ul class="pagination m-t-0 m-b-10">
                                    <li class="disabled"><a href="javascript:;">«</a></li>
                                    <li class="active"><a href="javascript:;">1</a></li>
                                    <li><a href="javascript:;">2</a></li>
                                    <li><a href="javascript:;">3</a></li>
                                    <li><a href="javascript:;">4</a></li>
                                    <li><a href="javascript:;">5</a></li>
                                    <li><a href="javascript:;">»</a></li>
                                </ul>
                            </div>
                            <div>
                                <ul class="pagination pagination-sm m-t-0 m-b-10">
                                    <li class="disabled"><a href="javascript:;">«</a></li>
                                    <li class="active"><a href="javascript:;">1</a></li>
                                    <li><a href="javascript:;">2</a></li>
                                    <li><a href="javascript:;">3</a></li>
                                    <li><a href="javascript:;">4</a></li>
                                    <li><a href="javascript:;">5</a></li>
                                    <li><a href="javascript:;">»</a></li>
                                </ul>
                            </div>
                            <h5>Pager (Default & Aligned links)</h5>
                            <ul class="pager">
                                <li><a href="javascript:;">Previous</a></li>
                                <li><a href="javascript:;">Next</a></li>
                            </ul>
                            <ul class="pager">
                                <li class="previous disabled"><a href="javascript:;">&larr; Older</a></li>
                                <li class="next"><a href="javascript:;">Newer &rarr;</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end panel -->
			    </div>
			    <!-- end col-6 -->
			</div>
			<!-- end row -->
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-12 -->
			    <div class="col-md-12">
                    <!-- begin panel -->
			        <div class="panel panel-inverse" data-sortable-id="ui-general-5">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Progress bar</h4>
                        </div>
                        <div class="panel-body">
							<div class="alert alert-info m-b-0">
								<h4 class="block">Cross-browser compatibility</h4>
								<p>
									 Progress bars use CSS3 transitions and animations to achieve some of their effects. These features are not supported in Internet Explorer 9 and below or older versions of Firefox. Opera 12 does not support animations.
								</p>
							</div>
							<div class="row">
							    <div class="col-md-3">
                                    <h4>Basic</h4>
                                    <div class="progress">
                                        <div class="progress-bar" style="width: 80%">Default</div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-success" style="width: 70%">Success</div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-info" style="width: 60%">Info</div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-warning" style="width: 50%">Warning</div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" style="width: 40%">Danger</div>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-inverse" style="width: 30%">Inverse</div>
                                    </div>
                                </div>
							    <div class="col-md-3">
                                    <h4>Striped</h4>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar" style="width: 80%">Default</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-success" style="width: 70%">Success</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-info" style="width: 60%">Info</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-warning" style="width: 50%">Warning</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-danger" style="width: 40%">Danger</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-inverse" style="width: 30%">Inverse</div>
                                    </div>
							    </div>
							    <div class="col-md-3">
                                    <h4>Animated</h4>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar" style="width: 80%">Default</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" style="width: 70%">Success</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" style="width: 60%">Info</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" style="width: 50%">Warning</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" style="width: 40%">Danger</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-inverse" style="width: 30%">Inverse</div>
                                    </div>
							    </div>
							    <div class="col-md-3">
                                    <h4>Stacked</h4>
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" style="width: 25%">25%</div>
                                        <div class="progress-bar progress-bar-info" style="width: 25%">25%</div>
                                        <div class="progress-bar progress-bar-success" style="width: 25%">25</div>
                                    </div>
                                    <div class="progress progress-striped">
                                        <div class="progress-bar progress-bar-primary" style="width: 25%">25%</div>
                                        <div class="progress-bar progress-bar-info" style="width: 25%">25%</div>
                                        <div class="progress-bar progress-bar-success" style="width: 25%">25</div>
                                    </div>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-primary" style="width: 25%">25%</div>
                                        <div class="progress-bar progress-bar-info" style="width: 25%">25%</div>
                                        <div class="progress-bar progress-bar-success" style="width: 25%">25</div>
                                    </div>
							    </div>
							</div>
						</div>
					</div>
					<!-- end panel -->
			    </div>
			    <!-- end col-12 -->
			</div>
			<!-- end row -->
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

<!-- Mirrored from seantheme.com/color-admin-v1.9/admin/html/ui_general.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Apr 2016 04:04:21 GMT -->
</html>
