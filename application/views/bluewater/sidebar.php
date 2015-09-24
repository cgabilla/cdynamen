<?php
$base_url = base_url();
$session_role = $this->session->userdata('session_role');
$array_roles = array('admin','siteadmin','user');
?>
<aside id="sidebar" class="sidebar sidebar-default">

    <div class="sidebar-profile">
        <a href="<?php echo $base_url . 'user/my-account'; ?>"><p class="text-center sidebar-name"><?php echo strtoupper($full_name); ?></p></a>
    </div>
    <nav class="">
    <ul class="nav nav-pills nav-stacked">
        <li <?php if($controller == 'user' && $method == 'start-activity'): ?> class="active" <?php endif; ?>>
            <a href="<?php echo $base_url; ?>" id="sidebar-a-link" style="background-color:#212121;padding: 15px;border-bottom: solid 1px #414141;font-size:12px;">
                <i class="fa fa-lg fa-fw fa-home fa-2x" id="sidebar-i-link"></i><?php echo strtoupper('Home'); ?>  
            </a>
        </li>
    </ul>
      <ul class="nav nav-pills nav-stacked">
         <li class="">
            <a href="#" class="sidebar-action" title="Action Centre"  style="background-color:#333333;padding: 15px;border-bottom: solid 1px #414141;">
                <span class="text-center"></span><span id="action_center_word"><?php echo strtoupper('Action Centre'); ?></span>
                <i class='fa fa-chevron-circle-right' id="chevron-action-center" style="float:right;margin-top:0px;font-size:20px;"></i>
            </a>
            <ul class="nav-sub" data-index="10" style="font-size:12px;">
               
                <li class="">
                    <a href="#" class="action-btn" title="Actions"  style="padding-left:41px;">
                        <i class="fa fa-tasks fa-lg fa-fw" id="sidebar-i-link"></i>
                         <?php echo strtoupper('Actions'); ?>
                       <i class='fa fa-chevron-right' id="chevron-action" style="float:right;margin-top:3px;"></i>
                    </a>
                    <ul class="nav-sub">
                        <li>
                            <a id="my-actions" class="advance-filter" href="<?php echo base_url("performance_dashboard/my_actions"); ?>#my-actions-page" title="My Actions" style="border-bottom: 1px solid gray;border-top: 1px solid gray;padding-left: 70px">
                                 <?php echo strtoupper('My Actions'); ?>
                            </a>
                        </li>
                        <li>
                            <a id="all-actions" class="advance-filter" href="<?php echo base_url("performance_dashboard/my_actions"); ?>#all-actions-page" title="All Actions" style="border-bottom: 1px solid gray;padding-left: 70px">
                                <?php echo strtoupper('All Actions'); ?> 
                            </a>
                        </li>
                        <li>
                            <a id = "late-actions" class="advance-filter" href="<?php echo base_url("performance_dashboard/my_actions"); ?>#late-actions-page" title="Late Actions" style="border-bottom: 1px solid gray;padding-left: 70px">
                                 <?php echo strtoupper('Late Actions'); ?>
                            </a>
                        </li>
                        <!--<li>
                            <a href="javascript:;" id = "create-action-btn" href="" title="Create Actions" style="border-bottom: 1px solid gray;">
                                Create Action
                            </a>
                        </li>-->
                        <li><!-- create action menu -->
                            <a href="#" class="action-btn" title="Create Action" style="padding-left:41px;">
                                <i class = "fa fa-lg fa-fw fa-pencil" id="sidebar-i-link"></i> 
                                    <?php echo strtoupper('Create Action'); ?> 
                                <i class='fa fa-chevron-right' id="chevron-create-action" style="float:right;margin-top:3px;"></i>
                            </a>

                            <ul class="nav-sub">
                                <li>
                                    <a id="general-action-btn" class="advance-filter" href="<?php echo base_url("performance_dashboard/my_actions"); ?>#general-action-btn-page" style="border-bottom: 1px solid gray;border-top: 1px solid gray;padding-left: 70px">

                                        <?php echo strtoupper('General Action'); ?> 

                                    </a>
                                </li>
                                <li>
                                    <a id="risk-action-btn" data-risk = "<?php echo $current_user_id; ?>" class="advance-filter" href="<?php echo base_url("performance_dashboard/my_actions"); ?>#risk-action-btn-page" style="border-bottom: 1px solid gray;padding-left: 70px">

                                        <?php echo strtoupper('Issue/Risk Action'); ?> 

                                    </a>
                                </li>
                                <li>
                                    <a id="operation-action-btn" class="advance-filter" href="<?php echo base_url("performance_dashboard/my_actions"); ?>#operation-action-btn-page" style="border-bottom: 1px solid gray;padding-left: 70px">

                                        <?php echo strtoupper('Operations Action'); ?> 

                                    </a>
                                </li>
                            </ul>

                        </li>
                    </ul>
                </li>

               

                <li>
                    <a id = "risks" class="risk-btn" href="" title="Risks" style="padding-left:41px;">
                        <i class="fa fa-lg fa-fw fa-warning" id="sidebar-i-link"></i>  <?php echo strtoupper('Risks'); ?> 
                        <i class='fa fa-chevron-right' id="chevron-risk" style="float:right;margin-top:3px;"></i>
                    </a>
                    <ul class="nav-sub">
                        <li>
                            <a id="all-risks" class="advance-filter" href="<?php echo base_url("risk_register_v2/"); ?>" style="border-bottom: 1px solid gray;border-top: 1px solid gray;padding-left: 70px">
                                <?php echo strtoupper('All Risks'); ?> 
                            </a>
                        </li>
                        <li>
                            <a id = "my-risks" data-id = "<?php echo $current_user_id; ?>" class="advance-filter" href="<?php echo base_url("risk_register_v2/"); ?>" style="border-bottom: 1px solid gray;padding-left: 70px">
                                <?php echo strtoupper('My Risks'); ?> 
                            </a>
                        </li>

                        <li>
                            <a href="javascript:;" id="create-risk-register-btn2" href="" title="Create Issue" style="border-bottom: 1px solid gray;padding-left: 70px">
                                <?php echo strtoupper('Create Issue'); ?> 
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#"  class="activities-btn" style="padding-left:41px;">
                        <i class="fa fa-lg fa-fw fa-exclamation-circle " id="sidebar-i-link"></i> PROJECT RISKS
                        <i class='fa fa-chevron-right' id="chevron-activities" style="float:right;margin-top:3px;"></i>
                    </a>
                    <ul class="nav-sub">
                        <li>
                            <a href="<?php echo base_url().'project-risk-register';?>" title="ALL PROJECT RISKS" style="border-bottom: 1px solid gray;border-top:1px solid gray;padding-left: 70px">
                             ALL PROJECT RISKS
                            </a>
                        </li>
                        <li>
                            <a href="javascript:;" title="MY PROJECT RISK" style="border-bottom: 1px solid gray;padding-left: 70px">
                                MY PROJECT RISKS
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="">
                    <a href="#" class="documents-btn" title="Documents" style="padding-left:41px;">
                        <i class="fa fa-lg fa-fw fa-file-text-o " id="sidebar-i-link"></i>  <?php echo strtoupper('Documents'); ?>  
                        <i class='fa fa-chevron-right' id="chevron-documents" style="float:right;margin-top:3px;"></i>
                    </a>
                    <ul class="nav-sub">
                         <li>

                            <a id="all-documents" class="advance-filter" href="<?php echo base_url("performance_dashboard/my_actions"); ?>#all-documents-page" title="All Documents" style="border-top: 1px solid gray;">

                                <?php echo strtoupper('All Documents'); ?> 
                            </a>
                        </li>
                        <li>
                            <a id="my-documents" class="advance-filter" href="<?php echo base_url("performance_dashboard/my_actions"); ?>#my-documents-page" title="My Documents" style="border-bottom: 1px solid gray;  border-top: 1px solid gray;">
                                <?php echo strtoupper('My Documents'); ?> 
                            </a>
                        </li>
                        <li><!-- create Document menu -->
                            <a href="#" class="action-btn" title="Create Document" style="padding-left:41px;">
                                <i class = "fa  fa-lg fa-fw fa-pencil " id="sidebar-i-link"></i> 
                                    <?php echo strtoupper('Create Document'); ?> 
                                <i class='fa fa-chevron-right' id="chevron-create-action" style="float:right;margin-top:3px;"></i>
                            </a>

                            <ul class="nav-sub">                               
                                <li>
                                    <a class="" href="<?php echo base_url("basic-decf-v2/create"); ?>" style="border-bottom: 1px solid gray;padding-left:70px">

                                        <?php echo strtoupper('Defect Elimination'); ?> 

                                    </a>
                                </li>                        
                                <li>
                                    <a class="" href="<?php echo base_url("offshore-query/create"); ?>" style="border-bottom: 1px solid gray;padding-left: 70px">

                                        <?php echo strtoupper('Offshore Query'); ?> 

                                    </a>
                                </li>                              
                                <li>
                                    <a class="" href="<?php echo base_url("ofi-v2/create"); ?>" style="border-bottom: 1px solid gray;  padding-left: 70px">

                                        <?php echo strtoupper('Opportunity for Improvement'); ?> 

                                    </a>
                                </li>                               
                                <li>
                                    <a class="" href="<?php echo base_url("project-plan-v2/create"); ?>" style="border-bottom: 1px solid gray;padding-left: 70px">

                                        <?php echo strtoupper('Project Work Pack'); ?> 

                                    </a>
                                </li>
                                <li>
                                    <a class="" href="<?php echo base_url("request-modification-v2/create"); ?>" style="border-bottom: 1px solid gray;padding-left: 70px">

                                        <?php echo strtoupper('Request Modification'); ?> 

                                    </a>
                                </li>
                                <li>
                                    <a class="" href="<?php echo base_url("technical-bulletin-v2/create"); ?>" style="border-bottom: 1px solid gray;border-top: 1px solid gray;padding-left: 70px">

                                        <?php echo strtoupper('Technical Bulletin'); ?> 

                                    </a>
                                </li>
                            </ul>

                        </li>
                    </ul>
                </li>
                <!-- <li>
                    <a id = "shared-docs-menu" href="<?php echo base_url("performance_dashboard/my_actions"); ?> " title="Shared Docs">
                        <i class="fa fa-fw fa-share-alt-square"></i> Shared Docs
                    </a>
                </li> -->
                <li>
                    <a id = "files_attachments" href="<?php echo base_url("performance_dashboard/my_actions"); ?>#files_attachments-page" title="Attachements"  style="padding-left:41px;">

                        <i class="fa fa-lg fa-fw fa-paperclip" id="sidebar-i-link"></i>  <?php echo strtoupper('Attachments'); ?> 

                    </a>
                </li>
                <li>
                    <a id = "notifications" class="advance-filter" href="<?php echo base_url("performance_dashboard/my_actions"); ?>#notifications-page" title="Notifications" style="padding-left:41px;">
                        <i class="fa fa-globe fa-lg fa-fw" id="sidebar-i-link"></i>  <?php echo strtoupper('Notifications'); ?> 
                    </a>
                </li>
                <li>
                    <a id = "file_manager" href="<?php echo base_url("files/manager"); ?>" title="Attachements" style="padding-left:41px;"> <!-- file manager -->
                        <i class="fa fa-lg fa-fw fa-briefcase" id="sidebar-i-link"></i>  <?php echo strtoupper('File Manager'); ?> 
                    </a>
                </li>
                <li>
                    <a id = "my-saved-searches"  href="<?php echo base_url("performance_dashboard/my_actions"); ?>#my-saved-searches-page" title="My Saved Searches" style="padding-left:41px;">
                        <i class="fa fa-lg fa-fw fa-bookmark" id="sidebar-i-link" ></i>   <?php echo strtoupper('My Saved Searches'); ?> 
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
<!-- <div class="profile-body">
    <div class="sidebar-user-links">
        <a class="btn btn-link" href="<?php //echo base_url('user/settings'); ?>" style="font-size:23px;" data-placement="bottom" data-toggle="tooltip" data-original-title="Settings"><i class="fa pe-7s-config fa-lg"></i></a>
    </div>
</div> -->
<nav style="font-size: 12px;">
    <ul class="nav nav-pills nav-stacked">
        <li <?php if($controller == 'risk_register_v2' && $this->uri->segment('2') == ''): ?> class="active" <?php endif; ?>>
            <a href="<?php echo $base_url .'risk_register_v2'; ?>" id="sidebar-a-link">
                <i class="fa fa-lg fa-fw fa fa-exclamation-triangle" id="sidebar-i-link"></i> <?php echo strtoupper('Risk Register'); ?> 
            </a>
        </li>
    </ul>
    <?php if(in_array($session_role, $array_roles)): ?>
     <ul class="nav nav-pills nav-stacked">
        <li <?php if($this->uri->segment('2') == 'new_risk'): ?> class="active" <?php endif; ?>>
            <a href="<?php echo $base_url .'risk_register_v2/new_risk'; ?>" id="new_risk" style="padding-left: 70px;">
                <?php echo strtoupper('New Risk'); ?>  
            </a>
        </li>
        <li <?php if($this->uri->segment('2') == 'report/risk_bc_plot'): ?> class="active" <?php endif; ?>>
            <a href="<?php echo $base_url .'report/risk_bc_plot'; ?>" id="risk_bc_plot" style="padding-left: 70px;">
                <?php echo strtoupper('Risk Reporting'); ?>  
            </a>
        </li>
    </ul>
<?php endif; ?>
<ul class="nav nav-pills nav-stacked" >
        <li class="nav-dropdown">
            <a class="dropdown-link " id="sidebar-a-link" href="#" title="Registers">
                <i class="fa fa-lg fa-fw fa fa-clipboard" id="sidebar-i-link"></i> <?php echo strtoupper('Registers'); ?>
            </a>
            <ul class="nav-sub" style="margin-top:0px;">
                <li>
                    <a href="<?php echo base_url('hose_register'); ?>" title="Hose" style="border-bottom: 1px solid gray;  border-top: 1px solid gray;padding-left: 70px;">
                        <?php echo strtoupper('Hose'); ?>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('risk_register_v2'); ?>" title="Risk" style="border-bottom: 1px solid gray;padding-left:70px;">
                        <?php echo strtoupper('Risk'); ?>
                    </a>
                </li>
            </ul>
        </li>
</ul>
<ul class="nav nav-pills nav-stacked" >
        <li class="nav-dropdown">
            <a class="dropdown-link " id="sidebar-a-link" href="#" title="Logs">
                <i class="fa-lg fa-fw fa fa-files-o" id="sidebar-i-link"></i> LOGS
            </a>
            <ul class="nav-sub" style="margin-top:0px;">
                <li>
                    <a href="#" title="All Logs" style="border-bottom: 1px solid gray;  border-top: 1px solid gray;padding-left: 70px;">
                        ALL LOGS
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('cro'); ?>" title="CRO" style="border-bottom: 1px solid gray;padding-left:70px;">
                        CRO
                    </a>
                </li>
            </ul>
        </li>
</ul>
<ul class="nav nav-pills nav-stacked" >
   <!--      <li class="nav-dropdown">
            <a class="dropdown-link " id="sidebar-a-link" href="#" title="Create Log">
                <i class="fa-lg fa-fw fa fa-pencil-square-o" id="sidebar-i-link"></i> CREATE LOG
            </a>
            <ul class="nav-sub" style="margin-top:0px;">
                <li>
                    <a href="#" title="CRO" style="border-bottom: 1px solid gray;  border-top: 1px solid gray;padding-left: 70px;">
                        CRO
                    </a>
                </li>
            </ul>
        </li> -->
        <li class="nav-dropdown">
            <a class="dropdown-link" id="sidebar-a-link" ><i class="fa-lg fa-fw fa fa-pencil-square-o" id="sidebar-i-link"></i>
                <?php echo strtoupper('create logs'); ?>
            </a>
            <ul class="nav-sub" class="nav-sub" style="margin-top:0px;">
                <li>
                    <a href="<?php echo base_url('cro/create'); ?>" style="border-bottom: 1px solid gray;  border-top: 1px solid gray;padding-left: 70px;">
                        <?php echo strtoupper('cro'); ?>
                    </a>
                </li>

            </ul>
        </li>
</ul>
<ul class="nav nav-pills nav-stacked" >
    <?php if ($role == 'siteadmin'): ?>
        <li class="nav-dropdown">
            <a class="dropdown-link " id="sidebar-a-link" href="#" title="Admin">
                <i class="fa fa-lg fa-fw fa-desktop" id="sidebar-i-link"></i> <?php echo strtoupper('Admin'); ?> 
            </a>
            <ul class="nav-sub" style="margin-top:0px;">
                <li>
                    <a href="<?php echo base_url('user/admin'); ?>" title="User Admin" style="border-bottom: 1px solid gray;  border-top: 1px solid gray;padding-left: 70px;">
                       <?php echo strtoupper('User Admin'); ?> 
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('user/user_activity'); ?>" title="User Admin Category" style="border-bottom: 1px solid gray;padding-left:70px;">
                        <?php echo strtoupper('User Activity'); ?> 
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('user/user-category'); ?>" title="User Admin Category" style="border-bottom: 1px solid gray;padding-left:70px;">
                        <?php echo strtoupper('User Category'); ?>  
                    </a>
                </li>
            </ul>
        </li>
    <?php endif; ?>
</ul>
</nav>


</aside>