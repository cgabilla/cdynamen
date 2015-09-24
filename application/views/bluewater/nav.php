<nav class="nav-blue navbar navbar-default navbar-static-top no-margin" role="navigation">
            <div class="navbar-brand-group" style="width: 600px;">
                <a class="navbar-sidebar-toggle navbar-link" data-sidebar-toggle>
                    <i class="fa fa-lg-2 fa-bars"></i>

                </a>
               
                <h3 class="text-white">Hæwene Brim Integrated Asset Management</h3>

                    <!-- <span class="sc-visible">
                      <img id="sidebar-logo-small" src="<?php echo base_url('theme/assets/img/general/smallLogo.png"'); ?>" class="img-responsive" >
                    </span> -->

                           
                        </div>
                        <ul class="nav navbar-nav navbar-nav-expanded pull-right margin-md-right">


                            <?php if($controller != "" && ($method == "view" || $method == "edit" || $method == "search-new" || $method == "search")): ?>

                                <li>
                                    <a href="#" onclick="window.history.go(-2);" data-placement="bottom" data-toggle="tooltip" data-original-title="Back">
                                        <i class="fa fa-lg-2 fa-arrow-left text-grey"></i>
                                    </a>
                                </li>

                            <?php endif; ?>


                            <?php if($search_data && $method != "get-results"):  ?>

                                <li>
                                    <a href="<?php echo base_url('document/get-results'); ?>" data-placement="bottom" data-toggle="tooltip" data-original-title="Repeat last search">
                                        <i class="fa fa-refresh fa-lg-2 text-success"></i>
                                    </a>
                                </li>

                            <?php endif; ?>



                            <?php if($controller == 'reliability-maintenance' && $method == 'project-tracker-gantt-chart'): ?>

                                <li>
                                    <a href="<?php echo base_url('reliability-maintenance/project-tracker') ?>" data-placement="bottom" data-toggle="tooltip" data-original-title="Back to Projects">
                                        <i class="fa fa-lg-2 fa-arrow-left text-success"></i>
                                    </a>
                                </li>


                            <?php endif; ?>

                            <?php if($method == 'updates'): ?>

                                <li>
                                    <a href="#" onclick="window.history.go(-2   );" data-placement="bottom" data-toggle="tooltip" data-original-title="Back">
                                        <i class="fa fa-lg-2 fa-arrow-left text-success"></i>
                                    </a>
                                </li>

                                <li>
                                    <a href="#" onclick="get_document_update();" data-placement="bottom" data-toggle="tooltip" data-original-title="Refresh Updates">
                                        <i class="fa fa-lg-2 fa-refresh text-success"></i>
                                    </a>
                                </li>

                                <!-- <li>
                                    <a href="<?php echo base_url($controller.'/view/'.$id); ?>" data-placement="bottom" data-toggle="tooltip" data-original-title="View Document">
                                        <i class="fa fa-lg-2 fa-th-list text-success"></i>
                                    </a>
                                </li> -->

                            <?php endif; ?>

                            <?php if($controller == 'reliability-maintenance' && $method == 'project-tracker'): ?>
                                <li>
                                    <a href="<?php echo $current_url.'-gantt-chart'; ?>" data-placement="bottom" data-toggle="tooltip" data-original-title="View Global Project Gantt Chart">
                                        <i class="fa fa-lg-2 fa-bar-chart-o text-success"></i>
                                    </a>
                                </li>

                            <?php endif; ?>

                            <?php if($edit_method): ?>
                                <!-- <li>
                                    <a href="<?php echo $view_url; ?>" data-placement="bottom" data-toggle="tooltip" data-original-title="View Document">
                                        <i class="fa fa-lg-2 fa-th-list text-success"></i>
                                    </a>
                                </li> -->
                            <?php endif; ?>

                            <?php if($controller == 'project-plan' && $method == 'job-card-view'): ?>
                                 <li>
                                    <a href="#" data-placement="bottom" data-toggle="tooltip" data-original-title="Print Document" onclick="window.print();">
                                        <i class="fa fa-lg-2 fa-print text-success"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $current_url; ?>/pdf" data-placement="bottom" data-toggle="tooltip" data-original-title="Export to Pdf">
                                        <i class="fa fa-lg-2 fa-file-pdf-o text-success"></i>
                                    </a>
                                </li>
                            <?php endif; ?>

                            <?php if($view_method): ?>
                                <li>
                                    <a href="#" data-placement="bottom" data-toggle="tooltip" data-original-title="Print Document" onclick="window.print();">
                                        <i class="fa fa-lg-2 fa-print text-success"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo $current_url; ?>/pdf" data-placement="bottom" data-toggle="tooltip" data-original-title="Export to Pdf">
                                        <i class="fa fa-lg-2 fa-file-pdf-o text-success"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url($controller.'/updates/'.$id); ?>" data-placement="bottom" data-toggle="tooltip" data-original-title="View Updates">
                                        <i class="fa fa-lg-2 fa-comments text-primary"></i>
                                    </a>
                                </li>
                            <?php endif; ?>
                            <!--li>
                                <a class="hidden-xs" href="<?php echo base_url('document/recent-document'); ?>" data-placement="bottom" data-toggle="tooltip" data-original-title="Recent Documents">
                                    <i class="fa pe-7s-timer fa-lg-2"></i>
                                </a>
                            </li>
                            <li>
                                <a class="hidden-xs" href="<?php echo base_url('document-status'); ?>" data-placement="bottom" data-toggle="tooltip" data-original-title="My Documents">
                                    <i class="fa pe-7s-notebook fa-lg-2"></i>
                                </a>
                            </li>
                            <li>
                                <a class="hidden-xs" href="<?php echo base_url('user/top-rated-bulletin'); ?>" data-placement="bottom" data-toggle="tooltip" data-original-title="Top Rated Bulletin">
                                    <i class="fa pe-7s-note2 fa-lg-2"></i>
                                </a>
                            </li>
                            <li>
                                <a class="hidden-xs" href="<?php echo base_url('page/golden-rule'); ?>" data-placement="bottom" data-toggle="tooltip" data-original-title="Golden Rules">
                                    <i class="fa pe-7s-info fa-lg-2"></i>
                                </a>
                            </li>
                            <li>
                                <a class="hidden-xs" href="<?php echo base_url('document/search'); ?>" data-placement="bottom" data-toggle="tooltip" data-original-title="Search">
                                    <i class="fa pe-7s-search fa-lg-2"></i>
                                </a>
                            </li-->
                            <li>
                                <a href="<?php echo base_url('diagram/system_flow_diagram'); ?>" data-placement="bottom" data-toggle="tooltip" data-original-title="System Flow Diagram">
                                    <i class="plansystem"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url(''); ?>" data-placement="bottom" data-toggle="tooltip" data-original-title="Home">
                                    <i class="fa pe-7s-home fa-lg-2"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('user/logout'); ?>" id="logout" data-placement="bottom" data-toggle="tooltip" data-original-title="Logout   ">
                                    <i class="fa pe-7s-power fa-lg-2"></i>
                                </a>
                            </li>
                        <!-- <li>
                            <a href="<?php echo base_url('user/my-account'); ?>" data-placement="bottom" data-toggle="tooltip" data-original-title="My Account">
                                <i class="fa pe-7s-user fa-lg-2"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('user/logout'); ?>" data-placement="bottom" data-toggle="tooltip" data-original-title="Logout   ">
                                <i class="fa pe-7s-power fa-lg-2"></i>
                            </a>
                        </li> -->
                        <!-- <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle navbar-user" href="#;">
                                <img class="img-circle border-black" src="<?php echo base_url('images/user-icon.png'); ?>">
                                <span class="hidden-xs"><?php echo $session_full_name; ?></span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu pull-left-xs">
                                <li class="arrow"></li>
                                <li><a href="<?php echo base_url('user/my-account'); ?>">My Account</a></li>
                                <li class="visible-xs"><a href="<?php echo base_url('document/search'); ?>">Search Document</a></li>
                                <li><a href="<?php echo base_url('user/notifications'); ?>">Notifications</a></li>
                                <li><a href="<?php echo base_url('user/settings'); ?>">Settings</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url('user/logout'); ?>">Log Out</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </nav>