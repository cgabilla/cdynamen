<!doctype html>
  <!--[if IE 8]>         <html class="ie8"> <![endif]-->
  <!--[if IE 9]>         <html class="ie9"> <![endif]-->
  <!--[if gt IE 9]><!--> <html> <!--<![endif]-->
  <head>
  <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>A Demo on Dynamic Menu</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!--<link rel="shortcut icon" href="/favicon.ico">-->
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="<?php echo $ttcConfig->AssetsUrl(); ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $ttcConfig->AssetsUrl(); ?>css/iriy-admin.min.css">
    <link rel="stylesheet" href="<?php echo $ttcConfig->AssetsUrl(); ?>demo/css/demo.css">
    <link rel="stylesheet" href="<?php echo $ttcConfig->AssetsUrl(); ?>assets/font-awesome/css/font-awesome.css">

    <link rel="stylesheet" href="<?php echo $ttcConfig->AssetsUrl(); ?>assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="<?php echo $ttcConfig->AssetsUrl(); ?>css/plugins/rickshaw.min.css">
    <link rel="stylesheet" href="<?php echo $ttcConfig->AssetsUrl(); ?>css/plugins/morris.min.css">

    <!--[if lt IE 9]>
    <script src="<?php echo $ttcConfig->AssetsUrl(); ?>assets/libs/html5shiv/html5shiv.min.js"></script>
    <script src="<?php echo $ttcConfig->AssetsUrl(); ?>assets/libs/respond/respond.min.js"></script>
    <![endif]-->

    </head>

    <body class="">
	<div class="page-wrapper">
		<aside class="sidebar sidebar-default">
			<nav>
				<h5 class="sidebar-header">Navigation</h5>
				<ul class="nav nav-pills nav-stacked">

					<li class="nav-dropdown">
						<a href="#" title="Menu Levels">
							<i class="fa fa-lg fa-fw fa-folder-open"></i> Menu Levels
						</a>
						<ul class="nav-sub">
							<li>
								<a href="javascript:;" title="Level 2.1">
									<i class="fa fa-fw fa-file"></i>
    Level 2.1
								</a>
							</li>
							<li>
								<a href="javascript:;" title="Level 2.2">
									<i class="fa fa-fw fa-file"></i>
    Level 2.2
								</a>
							</li>
							<li class="nav-dropdown">
								<a href="#" title="Level 2.3">
									<i class="fa fa-fw fa-folder-open"></i>
    Level 2.3
									<span class="pull-right badge badge-info">More</span>
								</a>
								<ul class="nav-sub">
									<li>
										<a href="javascript:;" title="Level 3.1">
											<i class="fa fa-fw fa-file"></i>
    Level 3.1
										</a>
									</li>
									<li class="nav-dropdown">
										<a href="#" title="Level 3.2">
											<i class="fa fa-fw fa-folder-open"></i>
    Level 3.2
										</a>
										<ul class="nav-sub">
											<li>
												<a href="javascript:;" title="Level 4.1">
													<i class="fa fa-fw fa-file"></i>
    Level 4.1
												</a>
											</li>
											<li class="nav-dropdown">
												<a href="#" title="Level 4.2">
													<i class="fa fa-fw fa-folder-open"></i>
    Level 4.2
												</a>
												<ul class="nav-sub">
													<li class="nav-dropdown">
														<a href="#" title="Level 5.1">
															<i class="fa fa-fw fa-folder-open"></i>
    Level 5.1
														</a>
														<ul class="nav-sub">
															<li>
																<a href="javascript:;" title="Level 6.1">
																	<i class="fa fa-fw fa-file"></i>
    Level 6.1
																</a>
															</li>
															<li>
																<a href="javascript:;" title="Level 6.2">
																	<i class="fa fa-fw fa-file"></i>
    Level 6.2
																</a>
															</li>
														</ul>
													</li>
													<li>
														<a href="javascript:;" title="Level 5.2">
															<i class="fa fa-fw fa-file"></i>
    Level 5.2
														</a>
													</li>
													<li>
														<a href="javascript:;" title="Level 5.3">
															<i class="fa fa-fw fa-file"></i>
    Level 5.3
														</a>
													</li>
												</ul>
											</li>
											<li>
												<a href="javascript:;" title="Level 4.3">
													<i class="fa fa-fw fa-file"></i>
    Level 4.3
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-dropdown">
										<a href="#" title="Level 3.3">
											<i class="fa fa-fw fa-folder-open"></i>
    Level 3.3
										</a>
										<ul class="nav-sub">
											<li>
												<a href="javascript:;" title="Level 4.1">
													<i class="fa fa-fw fa-file"></i>
    Level 4.1
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</nav>
		</aside>
	</div>
	</body>

    <script src="<?php echo $ttcConfig->AssetsUrl(); ?>assets/libs/jquery/jquery.min.js"></script>
    <script src="<?php echo $ttcConfig->AssetsUrl(); ?>assets/bs3/js/bootstrap.min.js"></script>
    <script src="<?php echo $ttcConfig->AssetsUrl(); ?>assets/plugins/jquery-navgoco/jquery.navgoco.js"></script>
    <script src="<?php echo $ttcConfig->AssetsUrl(); ?>js/main.js"></script>

    <!--[if lt IE 9]>
    <script src="<?php echo $ttcConfig->AssetsUrl(); ?>assets/plugins/flot/excanvas.min.js"></script>
    <![endif]-->
    <script src="<?php echo $ttcConfig->AssetsUrl(); ?>assets/plugins/jquery-sparkline/jquery.sparkline.js"></script>
    <script src="<?php echo $ttcConfig->AssetsUrl(); ?>demo/js/demo.js"></script>

    <script src="<?php echo $ttcConfig->AssetsUrl(); ?>assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?php echo $ttcConfig->AssetsUrl(); ?>assets/plugins/jquery-jvectormap/maps/world_mill_en.js"></script>

    <!--[if gte IE 9]>-->
    <script src="<?php echo $ttcConfig->AssetsUrl(); ?>assets/plugins/rickshaw/js/vendor/d3.v3.js"></script>
    <script src="<?php echo $ttcConfig->AssetsUrl(); ?>assets/plugins/rickshaw/rickshaw.min.js"></script>
    <!--<![endif]-->

    <script src="<?php echo $ttcConfig->AssetsUrl(); ?>assets/plugins/flot/jquery.flot.js"></script>
    <script src="<?php echo $ttcConfig->AssetsUrl(); ?>assets/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?php echo $ttcConfig->AssetsUrl(); ?>assets/plugins/raphael/raphael-min.js"></script>
    <script src="<?php echo $ttcConfig->AssetsUrl(); ?>assets/plugins/morris/morris.min.js"></script>
    <script src="<?php echo $ttcConfig->AssetsUrl(); ?>demo/js/dashboard.js"></script>

    </body>
    </html>

<?php
/* End of file cnavmenu_demo_ttv.php */
/* Location: ./application/views/cnavmenu_demo_ttv.php */
