<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v1.9/admin/html/email_inbox_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Apr 2016 04:04:03 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Color Admin | Inbox v2 (10)</title>
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
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar navbar-default navbar-fixed-top">
			<!-- begin container-fluid -->
			<div class="container-fluid">
				<!-- begin mobile sidebar expand / collapse button -->
				<div class="navbar-header">
					<a href="index.php" class="navbar-brand"><span class="navbar-logo"></span> Color Admin</a>
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
						    <li><a href="index.php">Dashboard v1</a></li>
						    <li><a href="index_v2.php">Dashboard v2</a></li>
						</ul>
					</li>
					<li class="has-sub active">
						<a href="javascript:;">
							<span class="badge pull-right">10</span>
							<i class="fa fa-inbox"></i> 
							<span>Email</span>
						</a>
						<ul class="sub-menu">
						    <li><a href="email_inbox.php">Inbox v1</a></li>
						    <li class="active"><a href="email_inbox_v2.php">Inbox v2</a></li>
						    <li><a href="email_compose.php">Compose</a></li>
						    <li><a href="email_detail.php">Detail</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-suitcase"></i>
						    <span>UI Elements</span> 
						</a>
						<ul class="sub-menu">
							<li><a href="ui_general.php">General</a></li>
							<li><a href="ui_typography.php">Typography</a></li>
							<li><a href="ui_tabs_accordions.php">Tabs & Accordions</a></li>
							<li><a href="ui_unlimited_tabs.php">Unlimited Nav Tabs</a></li>
							<li><a href="ui_modal_notification.php">Modal & Notification</a></li>
							<li><a href="ui_widget_boxes.php">Widget Boxes</a></li>
							<li><a href="ui_media_object.php">Media Object</a></li>
							<li><a href="ui_buttons.php">Buttons</a></li>
							<li><a href="ui_icons.php">Icons</a></li>
							<li><a href="ui_simple_line_icons.php">Simple Line Icons</a></li>
							<li><a href="ui_ionicons.php">Ionicons</a></li>
							<li><a href="ui_tree.php">Tree View</a></li>
							<li><a href="ui_language_bar_icon.php">Language Bar & Icon</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-file-o"></i>
						    <span>Form Stuff</span> 
						</a>
						<ul class="sub-menu">
							<li><a href="form_elements.php">Form Elements</a></li>
							<li><a href="form_plugins.php">Form Plugins</a></li>
							<li><a href="form_slider_switcher.php">Form Slider + Switcher</a></li>
							<li><a href="form_validation.php">Form Validation</a></li>
							<li><a href="form_wizards.php">Wizards</a></li>
							<li><a href="form_wizards_validation.php">Wizards + Validation</a></li>
							<li><a href="form_wysiwyg.php">WYSIWYG</a></li>
							<li><a href="form_editable.php">X-Editable</a></li>
							<li><a href="form_multiple_upload.php">Multiple File Upload</a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-th"></i>
						    <span>Tables  <span class="label label-theme m-l-5">NEW</span></span>
						</a>
						<ul class="sub-menu">
							<li><a href="table_basic.php">Basic Tables</a></li>
							<li class="has-sub">
							    <a href="javascript:;"><b class="caret pull-right"></b> Managed Tables</a>
							    <ul class="sub-menu">
							        <li><a href="table_manage.php">Default</a></li>
							        <li><a href="table_manage_autofill.php">Autofill</a></li>
							        <li><a href="table_manage_buttons.php">Buttons</a></li>
							        <li><a href="table_manage_colreorder.php">ColReorder</a></li>
							        <li><a href="table_manage_fixed_columns.php">Fixed Column</a></li>
							        <li><a href="table_manage_fixed_header.php">Fixed Header</a></li>
							        <li><a href="table_manage_keytable.php">KeyTable</a></li>
							        <li><a href="table_manage_responsive.php">Responsive</a></li>
							        <li><a href="table_manage_rowreorder.php">RowReorder <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
							        <li><a href="table_manage_scroller.php">Scroller</a></li>
							        <li><a href="table_manage_select.php">Select</a></li>
							        <li><a href="table_manage_combine.php">Extension Combination</a></li>
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
							<li><a href="email_system.php">System Template</a></li>
							<li><a href="email_newsletter.php">Newsletter Template</a></li>
						</ul>
					</li>
					<li class="has-sub">
					    <a href="javascript:;">
						    <b class="caret pull-right"></b>
					        <i class="fa fa-area-chart"></i>
						    <span>Chart <span class="label label-theme m-l-5">NEW</span></span>
						</a>
						<ul class="sub-menu">
						    <li><a href="chart-flot.php">Flot Chart</a></li>
						    <li><a href="chart-morris.php">Morris Chart</a></li>
							<li><a href="chart-js.php">Chart JS</a></li>
						    <li><a href="chart-d3.php">d3 Chart <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
						</ul>
					</li>
					<li><a href="calendar.php"><i class="fa fa-calendar"></i> <span>Calendar</span></a></li>
					<li class="has-sub">
					    <a href="javascript:;">
					        <b class="caret pull-right"></b>
					        <i class="fa fa-map-marker"></i>
					        <span>Map</span>
					    </a>
						<ul class="sub-menu">
							<li><a href="map_vector.php">Vector Map</a></li>
							<li><a href="map_google.php">Google Map</a></li>
						</ul>
					</li>
					<li class="has-sub">
					    <a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-camera"></i>
						    <span>Gallery</span>
						</a>
					    <ul class="sub-menu">
					        <li><a href="gallery.php">Gallery v1</a></li>
					        <li><a href="gallery_v2.php">Gallery v2</a></li>
					    </ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-cogs"></i>
						    <span>Page Options <span class="label label-theme m-l-5">NEW</span></span>
						</a>
						<ul class="sub-menu">
							<li><a href="page_blank.php">Blank Page</a></li>
							<li><a href="page_with_footer.php">Page with Footer</a></li>
							<li><a href="page_without_sidebar.php">Page without Sidebar</a></li>
							<li><a href="page_with_right_sidebar.php">Page with Right Sidebar</a></li>
							<li><a href="page_with_minified_sidebar.php">Page with Minified Sidebar</a></li>
							<li><a href="page_with_two_sidebar.php">Page with Two Sidebar</a></li>
							<li><a href="page_with_line_icons.php">Page with Line Icons</a></li>
							<li><a href="page_with_ionicons.php">Page with Ionicons</a></li>
							<li><a href="page_full_height.php">Full Height Content</a></li>
							<li><a href="page_with_wide_sidebar.php">Page with Wide Sidebar</a></li>
							<li><a href="page_with_light_sidebar.php">Page with Light Sidebar</a></li>
							<li><a href="page_with_mega_menu.php">Page with Mega Menu</a></li>
                            <li><a href="page_with_top_menu.php">Page with Top Menu <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                            <li><a href="page_with_boxed_layout.php">Page with Boxed Layout <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                            <li><a href="page_with_mixed_menu.php">Page with Mixed Menu <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                            <li><a href="page_boxed_layout_with_mixed_menu.php">Boxed Layout with Mixed Menu <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
                            <li><a href="page_with_transparent_sidebar.php">Page with Transparent Sidebar <i class="fa fa-paper-plane text-theme m-l-5"></i></a></li>
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
						    <b class="caret pull-right"></b>
						    <i class="fa fa-gift"></i>
						    <span>Extra</span>
						</a>
						<ul class="sub-menu">
						    <li><a href="extra_timeline.php">Timeline</a></li>
						    <li><a href="extra_coming_soon.php">Coming Soon Page</a></li>
							<li><a href="extra_search_results.php">Search Results</a></li>
							<li><a href="extra_invoice.php">Invoice</a></li>
							<li><a href="extra_404_error.php">404 Error Page</a></li>
							<li><a href="extra_profile.php">Profile Page</a></li>
						</ul>
					</li>
					<li class="has-sub">
					    <a href="javascript:;">
					        <b class="caret pull-right"></b>
					        <i class="fa fa-key"></i>
					        <span>Login & Register</span>
					    </a>
					    <ul class="sub-menu">
							<li><a href="login.php">Login</a></li>
					        <li><a href="login_v2.php">Login v2</a></li>
					        <li><a href="login_v3.php">Login v3</a></li>
					        <li><a href="register_v3.php">Register v3</a></li>
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
							<li><a href="helper_css.php">Predefined CSS Classes</a></li>
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
		<div id="content" class="content content-full-width">
		    <!-- begin vertical-box -->
		    <div class="vertical-box">
		        <!-- begin vertical-box-column -->
		        <div class="vertical-box-column width-250">
		            <!-- begin wrapper -->
                    <div class="wrapper bg-silver text-center">
                        <a href="email_compose.php" class="btn btn-success p-l-40 p-r-40 btn-sm">
                            Compose
                        </a>
                    </div>
		            <!-- end wrapper -->
		            <!-- begin wrapper -->
                    <div class="wrapper">
                        <p><b>FOLDERS</b></p>
                        <ul class="nav nav-pills nav-stacked nav-sm">
                            <li class="active"><a href="email_inbox_v2.php"><i class="fa fa-inbox fa-fw m-r-5"></i> Inbox <span class="badge pull-right">52</span></a></li>
                            <li><a href="email_inbox_v2.php"><i class="fa fa-flag fa-fw m-r-5"></i> Important</a></li>
                            <li><a href="email_inbox_v2.php"><i class="fa fa-send fa-fw m-r-5"></i> Sent</a></li>
                            <li><a href="email_inbox_v2.php"><i class="fa fa-pencil fa-fw m-r-5"></i> Drafts</a></li>
                            <li><a href="email_inbox_v2.php"><i class="fa fa-trash fa-fw m-r-5"></i> Trash</a></li>
                        </ul>
                        <p><b>LABEL</b></p>
                        <ul class="nav nav-pills nav-stacked nav-sm m-b-0">
                            <li><a href="javascript:;"><i class="fa fa-fw m-r-5 fa-circle text-inverse"></i> Admin</a></li>
                            <li><a href="javascript:;"><i class="fa fa-fw m-r-5 fa-circle text-primary"></i> Designer & Employer</a></li>
                            <li><a href="javascript:;"><i class="fa fa-fw m-r-5 fa-circle text-success"></i> Staff</a></li>
                            <li><a href="javascript:;"><i class="fa fa-fw m-r-5 fa-circle text-warning"></i> Sponsorer</a></li>
                            <li><a href="javascript:;"><i class="fa fa-fw m-r-5 fa-circle text-danger"></i> Client</a></li>
                        </ul>
                    </div>
		            <!-- end wrapper -->
		        </div>
		        <!-- end vertical-box-column -->
		        <!-- begin vertical-box-column -->
		        <div class="vertical-box-column">
		            <!-- begin wrapper -->
                    <div class="wrapper bg-silver-lighter">
                        <!-- begin btn-toolbar -->
                        <div class="btn-toolbar">
                            <!-- begin btn-group -->
                            <div class="btn-group pull-right">
                                <button class="btn btn-white btn-sm">
                                    <i class="fa fa-chevron-left"></i>
                                </button>
                                <button class="btn btn-white btn-sm">
                                    <i class="fa fa-chevron-right"></i>
                                </button>
                            </div>
                            <!-- end btn-group -->
                            <!-- begin btn-group -->
                            <div class="btn-group dropdown">
                                <button class="btn btn-white btn-sm dropdown-toggle" data-toggle="dropdown">
                                    View All <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu text-left text-sm">
                                    <li class="active"><a href="#"><i class="fa fa-circle f-s-10 fa-fw m-r-5"></i> All</a></li>
                                    <li><a href="javascript:;"><i class="fa f-s-10 fa-fw m-r-5"></i> Unread</a></li>
                                    <li><a href="javascript:;"><i class="fa f-s-10 fa-fw m-r-5"></i> Contacts</a></li>
                                    <li><a href="javascript:;"><i class="fa f-s-10 fa-fw m-r-5"></i> Groups</a></li>
                                    <li><a href="javascript:;"><i class="fa f-s-10 fa-fw m-r-5"></i> Newsletters</a></li>
                                    <li><a href="javascript:;"><i class="fa f-s-10 fa-fw m-r-5"></i> Social updates</a></li>
                                    <li><a href="javascript:;"><i class="fa f-s-10 fa-fw m-r-5"></i> Everything else</a></li>
                                </ul>
                            </div>
                            <!-- end btn-group -->
                            <!-- begin btn-group -->
                            <div class="btn-group">
                                <button class="btn btn-sm btn-white" data-toggle="tooltip" data-placement="top" data-title="Refresh" data-original-title="" title=""><i class="fa fa-refresh"></i></button>
                            </div>
                            <!-- end btn-group -->
                            <!-- begin btn-group -->
                            <div class="btn-group">
                                <button class="btn btn-sm btn-white hide" data-email-action="delete"><i class="fa fa-times m-r-3"></i> <span class="hidden-xs">Delete</span></button>
                                <button class="btn btn-sm btn-white hide" data-email-action="archive"><i class="fa fa-folder m-r-3"></i> <span class="hidden-xs">Archive</span></button>
                                <button class="btn btn-sm btn-white hide" data-email-action="archive"><i class="fa fa-trash m-r-3"></i> <span class="hidden-xs">Junk</span></button>
                            </div>
                            <!-- end btn-group -->
                        </div>
                        <!-- end btn-toolbar -->
                    </div>
		            <!-- end wrapper -->
		            <!-- begin list-email -->
                    <ul class="list-group list-group-lg no-radius list-email">
                        <li class="list-group-item inverse">
                            <div class="email-checkbox">
                                <label>
                                    <i class="fa fa-square-o"></i>
                                    <input type="checkbox" data-checked="email-checkbox" />
                                </label>
                            </div>
                            <a href="email_detail.php" class="email-user">
                                <img src="assets/img/user-14.jpg" alt="" />
                            </a>
                            <div class="email-info">
                                <span class="email-time">Today</span>
                                <h5 class="email-title">
                                    <a href="email_detail.php">Bootstrap v4.0 is coming soon</a>
                                    <span class="label label-inverse f-s-10">admin</span>
                                </h5>
                                <p class="email-desc">
                                    Praesent id pulvinar orci. Donec ac metus non ligula faucibus venenatis. Suspendisse tortor est, placerat eu dui sed...
                                </p>
                            </div>
                        </li>
                        <li class="list-group-item primary">
                            <div class="email-checkbox">
                                <label>
                                    <i class="fa fa-square-o"></i>
                                    <input type="checkbox" data-checked="email-checkbox" />
                                </label>
                            </div>
                            <a href="email_detail.php" class="email-user">
                                <img src="assets/img/user-13.jpg" alt="" />
                            </a>
                            <div class="email-info">
                                <span class="email-time">
                                    2 days ago
                                </span>
                                <h5 class="email-title">
                                    <a href="email_detail.php">Color Admin dashboard v2 is ready for live</a>
                                    <span class="label label-primary f-s-10">designer</span>
                                </h5>
                                <p class="email-desc">Proin interdum aliquam urna, quis lobortis magna tincidunt ac. Integer sed pulvinar neque...
                                </p>
                            </div>
                        </li>
                        <li class="list-group-item primary">
                            <div class="email-checkbox">
                                <label>
                                    <i class="fa fa-square-o"></i>
                                    <input type="checkbox" data-checked="email-checkbox" />
                                </label>
                            </div>
                            <a href="email_detail.php" class="email-user">
                                <img src="assets/img/user-11.jpg" alt="" />
                            </a>
                            <div class="email-info">
                                <span class="email-time">
                                    1 week ago
                                </span>
                                <h5 class="email-title">
                                    <a href="email_detail.php">Sidebar animation bugfix</a>
                                    <span class="label label-primary f-s-10">employer</span>
                                </h5>
                                <p class="email-desc">
                                    Nam sit amet lacinia massa, sit amet blandit urna. Duis pharetra ex id ipsum posuere...
                                </p>
                            </div>
                        </li>
                        <li class="list-group-item success">
                            <div class="email-checkbox">
                                <label>
                                    <i class="fa fa-square-o"></i>
                                    <input type="checkbox" data-checked="email-checkbox" />
                                </label>
                            </div>
                            <a href="email_detail.php" class="email-user">
                                <img src="assets/img/user-12.jpg" alt="" />
                            </a>
                            <div class="email-info">
                                <span class="email-time">
                                    1 week ago
                                </span>
                                <h5 class="email-title">
                                    <a href="email_detail.php">Bootstrap Framework is awesome</a>
                                    <span class="label label-success f-s-10">staff</span>
                                </h5>
                                <p class="email-desc">
                                    Etiam enim ipsum, malesuada in consectetur interdum, malesuada et lacus. Aenean faucibus turpis lorem...
                                </p>
                            </div>
                        </li>
                        <li class="list-group-item inverse">
                            <div class="email-checkbox">
                                <label>
                                    <i class="fa fa-square-o"></i>
                                    <input type="checkbox" data-checked="email-checkbox" />
                                </label>
                            </div>
                            <a href="email_detail.php" class="email-user">
                                <img src="assets/img/user-9.jpg" alt="" />
                            </a>
                            <div class="email-info">
                                <span class="email-time">
                                    2 months ago
                                </span>
                                <h5 class="email-title">
                                    <a href="email_detail.php">Handlebars help you to build semantic template </a>
                                    <span class="label label-inverse f-s-10">admin</span>
                                </h5>
                                <p class="email-desc">
                                    Proin consectetur accumsan rhoncus. Nulla porta orci ultricies lectus consequat fringilla. Vestibulum ante ipsum primis in faucibus...
                                </p>
                            </div>
                        </li>
                        <li class="list-group-item inverse">
                            <div class="email-checkbox">
                                <label>
                                    <i class="fa fa-square-o"></i>
                                    <input type="checkbox" data-checked="email-checkbox" />
                                </label>
                            </div>
                            <a href="email_detail.php" class="email-user">
                                <img src="assets/img/user-10.jpg" alt="" />
                            </a>
                            <div class="email-info">
                                <span class="email-time">
                                    2 months ago
                                </span>
                                <h5 class="email-title">
                                    <a href="email_detail.php">jQuery 2++ no longer compatibility with the old browser</a>
                                    <span class="label label-inverse f-s-10">admin</span>
                                </h5>
                                <p class="email-desc">
                                    Suspendisse ut urna orci. Vivamus ac diam sollicitudin, consequat mauris id, facilisis ipsum. Nam feugiat nisl a justo...
                                </p>
                            </div>
                        </li>
                        <li class="list-group-item warning">
                            <div class="email-checkbox">
                                <label>
                                    <i class="fa fa-square-o"></i>
                                    <input type="checkbox" data-checked="email-checkbox" />
                                </label>
                            </div>
                            <a href="email_detail.php" class="email-user">
                                <img src="assets/img/user-8.jpg" alt="" />
                            </a>
                            <div class="email-info">
                                <span class="email-time">
                                    2 months ago
                                </span>
                                <h5 class="email-title">
                                    <a href="email_detail.php">LESS & SASS, which one is good?</a>
                                    <span class="label label-warning f-s-10">sponsorer</span>
                                </h5>
                                <p class="email-desc">
                                    Nam vulputate cursus imperdiet. Sed sodales urna vitae ipsum iaculis, at fermentum...
                                </p>
                            </div>
                        </li>
                        <li class="list-group-item danger">
                            <div class="email-checkbox">
                                <label>
                                    <i class="fa fa-square-o"></i>
                                    <input type="checkbox" data-checked="email-checkbox" />
                                </label>
                            </div>
                            <a href="email_detail.php" class="email-user">
                                <img src="assets/img/user-7.jpg" alt="" />
                            </a>
                            <div class="email-info">
                                <span class="email-time">
                                    3 months ago
                                </span>
                                <h5 class="email-title">
                                    <a href="email_detail.php">Simple Line Icons is available on Color Admin v1.4</a>
                                    <span class="label label-danger f-s-10">client</span>
                                </h5>
                                <p class="email-desc">
                                    Maecenas auctor dui sit amet tristique congue. Pellentesque lobortis nulla quam. Etiam in vulputate magna...
                                </p>
                            </div>
                        </li>
                    </ul>
		            <!-- end list-email -->
		            <!-- begin wrapper -->
                    <div class="wrapper bg-silver-lighter clearfix">
                        <div class="btn-group pull-right">
                            <button class="btn btn-white btn-sm">
                                <i class="fa fa-chevron-left"></i>
                            </button>
                            <button class="btn btn-white btn-sm">
                                <i class="fa fa-chevron-right"></i>
                            </button>
                        </div>
                        <div class="m-t-5">1,232 messages</div>
                    </div>
		            <!-- end wrapper -->
		        </div>
		        <!-- end vertical-box-column -->
		    </div>
		    <!-- end vertical-box -->
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
	<script src="assets/js/email-inbox-v2.demo.min.js"></script>
	<script src="assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	<script>
		$(document).ready(function() {
			App.init();
			InboxV2.init();
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

<!-- Mirrored from seantheme.com/color-admin-v1.9/admin/html/email_inbox_v2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 Apr 2016 04:04:03 GMT -->
</html>

