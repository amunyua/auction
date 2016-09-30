<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>Conquer | Form Stuff - Form Wizard</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="assets/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="#" rel="stylesheet" id="style_metro" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="assets/plugins/chosen-bootstrap/chosen/chosen.css" />
    <!-- END PAGE LEVEL STYLES -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
<!-- BEGIN HEADER -->
<div id="header" class="navbar navbar-inverse navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <div class="container-fluid">
            <!-- BEGIN LOGO -->
            <a class="brand" href="index.html">
                <img src="assets/img/logo.png" alt="Conquer"/>
            </a>
            <!-- END LOGO -->
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="arrow"></span>
            </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <div class="top-nav">
                <!-- BEGIN QUICK SEARCH FORM -->
                <form class="navbar-search hidden-phone">
                    <div class="search-input-icon">
                        <input type="text" class="search-query dropdown-toggle" id="quick_search" placeholder="Search" data-toggle="dropdown" />
                        <i class="icon-search"></i>
                        <!-- BEGIN QUICK SEARCH RESULT PREVIEW -->
                        <ul class="dropdown-menu extended">
                            <li>
                                <span class="arrow"></span>
                                <p>Found 23 results</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon-user"></i></span>
                                    Nick Kim, Technical Mana...<i class="icon icon-arrow-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-info"><i class="icon-money"></i></span>
                                    Anual Report,Dec 20...<i class="icon icon-arrow-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon-comment"></i></span>
                                    Re: Nick Dalton, Sep 11:...<i class="icon icon-arrow-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-important"><i class="icon-bullhorn"></i></span>
                                    Office Setup, Mar 12...<i class="icon icon-arrow-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-info"><i class="icon-envelope"></i></span>
                                    Re: Order Status, Jan 12...<i class="icon icon-arrow-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-info"><i class="icon-paper-clip"></i></span>
                                    project_2011.docx, Feb 12...<i class="icon icon-arrow-right"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    See all results...
                                </a>
                            </li>
                        </ul>
                        <!-- END QUICK SEARCH RESULT PREVIEW -->
                    </div>
                </form>
                <!-- END QUICK SEARCH FORM -->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <ul class="nav pull-right" id="top_menu">
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    <li class="dropdown" id="header_notification_bar">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-warning-sign"></i>
                            <span class="label label-important">15</span>
                        </a>
                        <ul class="dropdown-menu extended notification">
                            <li>
                                <p>You have 14 new notifications</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-success"><i class="icon-plus"></i></span>
                                    New user registered.
                                    <span class="small italic">Just now</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-important"><i class="icon-bolt"></i></span>
                                    Server #12 overloaded.
                                    <span class="small italic">15 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-warning"><i class="icon-bell"></i></span>
                                    Server #2 not respoding.
                                    <span class="small italic">22 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                    Application error.
                                    <span class="small italic">40 mins</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-important"><i class="icon-bolt"></i></span>
                                    Database overloaded 68%.
                                    <span class="small italic">2 hrs</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="label label-important"><i class="icon-bolt"></i></span>
                                    2 user IP addresses blacklisted.
                                    <span class="small italic">5 hrs</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- END NOTIFICATION DROPDOWN -->
                    <!-- BEGIN INBOX DROPDOWN -->
                    <li class="dropdown" id="header_inbox_bar">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-envelope-alt"></i>
                            <span class="label label-success">5</span>
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <li>
                                <p>You have 12 new messages</p>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img src="./assets/img/avatar-mini.png" alt="avatar"/></span>
                                    <span class="subject">
                           <span class="from">Lisa Wong</span>
                           <span class="time">Just Now</span>
                           </span>
                                    <span class="message">
                           Vivamus sed auctor nibh congue nibh.
                           </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img src="./assets/img/avatar-mini.png" alt="avatar"/></span>
                                    <span class="subject">
                           <span class="from">Alina Fionovna</span>
                           <span class="time">16 mins</span>
                           </span>
                                    <span class="message">
                           Vivamus sed auctor nibh congue.
                           </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="photo"><img src="./assets/img/avatar-mini.png" alt="avatar"/></span>
                                    <span class="subject">
                           <span class="from">Mila Rock</span>
                           <span class="time">2 hrs</span>
                           </span>
                                    <span class="message">
                           Vivamus sed auctor nibh congue.
                           </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- END INBOX DROPDOWN -->
                    <li class="divider-vertical hidden-phone hidden-tablet"></li>
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-wrench"></i>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="icon-cogs"></i> System Settings</a></li>
                            <li><a href="#"><i class="icon-pushpin"></i> Shortcuts</a></li>
                            <li><a href="#"><i class="icon-trash"></i> Trash</a></li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                    <li class="divider-vertical hidden-phone hidden-tablet"></li>
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon-user"></i>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="icon-user"></i> Mark King</a></li>
                            <li><a href="#"><i class="icon-envelope-alt"></i> Inbox</a></li>
                            <li><a href="#"><i class="icon-tasks"></i> Tasks</a></li>
                            <li><a href="#"><i class="icon-ok"></i> Calendar</a></li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
                <!-- END TOP NAVIGATION MENU -->
            </div>
        </div>
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div id="container" class="row-fluid">
    <!-- BEGIN SIDEBAR -->
    <div id="sidebar" class="nav-collapse collapse">
        <div class="sidebar-toggler hidden-phone"></div>
        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
        <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
                <input type="text" class="search-query" placeholder="Search" />
            </form>
        </div>
        <!-- END RESPONSIVE QUICK SEARCH FORM -->
        <!-- BEGIN SIDEBAR MENU -->
        <ul>
            <li class="start ">
                <a href="index.html">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="has-sub ">
                <a href="javascript:;">
                    <i class="icon-bookmark-empty"></i>
                    <span class="title">UI Elements</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub">
                    <li ><a href="ui_elements_general.html">General</a></li>
                    <li ><a href="ui_elements_buttons.html">Buttons</a></li>
                    <li ><a href="ui_elements_tabs_accordions.html">Tabs & Accordions</a></li>
                    <li ><a href="ui_elements_sliders.html">Sliders</a></li>
                    <li ><a href="ui_elements_typography.html">Typography</a></li>
                    <li ><a href="ui_elements_tree.html">Tree View</a></li>
                    <li ><a href="ui_elements_nestable.html">Nestable List</a></li>
                </ul>
            </li>
            <li class="active has-sub ">
                <a href="javascript:;">
                    <i class="icon-table"></i>
                    <span class="title">Form Stuff</span>
                    <span class="arrow open"></span>
                </a>
                <ul class="sub">
                    <li ><a href="form_layout.html">Form Layouts</a></li>
                    <li ><a href="form_samples.html">Advance Form Samples</a></li>
                    <li ><a href="form_component.html">Form Components</a></li>
                    <li class="active"><a href="form_wizard.html">Form Wizard</a></li>
                    <li ><a href="form_validation.html">Form Validation</a></li>
                    <li ><a href="form_fileupload.html">Multiple File Upload</a></li>
                    <li ><a href="form_dropzone.html">Dropzone File Upload</a></li>
                </ul>
            </li>
            <li class="has-sub ">
                <a href="javascript:;">
                    <i class="icon-th-list"></i>
                    <span class="title">Data Tables</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub">
                    <li ><a href="table_basic.html">Basic Tables</a></li>
                    <li ><a href="table_managed.html">Managed Tables</a></li>
                    <li ><a href="table_editable.html">Editable Tables</a></li>
                </ul>
            </li>
            <li class="has-sub ">
                <a href="javascript:;">
                    <i class="icon-th-list"></i>
                    <span class="title">Portlets</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub">
                    <li ><a href="portlet_general.html">General Portlets</a></li>
                    <li ><a href="portlet_draggable.html">Draggable Portlets</a></li>
                </ul>
            </li>
            <li class="has-sub ">
                <a href="javascript:;">
                    <i class="icon-map-marker"></i>
                    <span class="title">Maps</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub">
                    <li ><a href="maps_google.html">Google Maps</a></li>
                    <li ><a href="maps_vector.html">Vector Maps</a></li>
                </ul>
            </li>
            <li class="">
                <a href="charts.html">
                    <i class="icon-bar-chart"></i>
                    <span class="title">Visual Charts</span>
                </a>
            </li>
            <li class="">
                <a href="calendar.html">
                    <i class="icon-calendar"></i>
                    <span class="title">Calendar</span>
                </a>
            </li>
            <li class="">
                <a href="gallery.html">
                    <i class="icon-camera"></i>
                    <span class="title">Gallery</span>
                </a>
            </li>
            <li class="has-sub ">
                <a href="javascript:;">
                    <i class="icon-briefcase"></i>
                    <span class="title">Sample Pages</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub">
                    <li ><a href="sample_profile.html">User Profile</a></li>
                    <li ><a href="sample_faq.html">FAQ</a></li>
                    <li ><a href="sample_invoice.html">Invoice</a></li>
                    <li ><a href="sample_pricing_table.html">Pricing Tables</a></li>
                    <li ><a href="sample_404.html">404 Page</a></li>
                    <li ><a href="sample_500.html">500 Page</a></li>
                    <li ><a href="sample_blank.html">Blank Page</a></li>
                    <li ><a href="sample_full_width.html">Full Width Page</a></li>
                    <li ><a href="sample_sidebar_closed.html">Sidebar Closed Page</a></li>
                </ul>
            </li>
            <li class="">
                <a href="login.html">
                    <i class="icon-user"></i>
                    <span class="title">Login Page</span>
                </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN PAGE -->
    <div id="body">
        <!-- BEGIN SAMPLE widget CONFIGURATION MODAL FORM-->
        <div id="widget-config" class="modal hide">
            <div class="modal-header">
                <button data-dismiss="modal" class="close" type="button"></button>
                <h3>widget Settings</h3>
            </div>
            <div class="modal-body">
                <p>Here will be a configuration form</p>
            </div>
        </div>
        <!-- END SAMPLE widget CONFIGURATION MODAL FORM-->
        <!-- BEGIN PAGE CONTAINER-->
        <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN STYLE CUSTOMIZER-->
                    <div id="styler" class="hidden-phone">
                        <i class="icon-cog"></i>
                        <span class="settings">
                     <span class="text">Style:</span>
                     <span class="colors">
                     <span class="color-default" data-style="default">
                     </span>
                     <span class="color-grey" data-style="grey">
                     </span>
                     <span class="color-navygrey" data-style="navygrey">
                     </span>
                     <span class="color-red" data-style="red">
                     </span>
                     </span>
                     <span class="layout">
                     <label class="hidden-phone">
                     <input type="checkbox" class="header" checked value="" />Sticky Header
                     </label><br />
                     <label><input type="checkbox" class="metro" value="" />Metro Style</label>
                     </span>
                     </span>
                    </div>
                    <!-- END STYLE CUSTOMIZER-->
                    <h3 class="page-title">
                        Form Wizard
                        <small>form wizard sample</small>
                    </h3>
                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="index.html">Home</a>
                            <span class="icon-angle-right"></span>
                        </li>
                        <li>
                            <a href="#">Form Stuff</a>
                            <span class="icon-angle-right"></span>
                        </li>
                        <li><a href="#">Form Wizard</a></li>
                    </ul>
                </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget box blue" id="form_wizard_1">
                        <div class="widget-title">
                            <h4>
                                <i class="icon-reorder"></i> Form Wizard - <span class="step-title">Step 1 of 4</span>
                            </h4>
                            <span class="tools">
                        <a href="javascript:;" class="icon-chevron-down"></a>
                        <a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
                        <a href="javascript:;" class="icon-refresh hidden-phone"></a>
                        <a href="javascript:;" class="icon-remove hidden-phone"></a>
                        </span>
                        </div>
                        <div class="widget-body form">
                            <form action="#" class="form-horizontal">
                                <div class="form-wizard">
                                    <div class="navbar steps">
                                        <div class="navbar-inner">
                                            <ul class="row-fluid">
                                                <li class="span3">
                                                    <a href="#tab1" data-toggle="tab" class="step active">
                                                        <span class="number">1</span>
                                                        <span class="desc"><i class="icon-ok"></i> Account Setup</span>
                                                    </a>
                                                </li>
                                                <li class="span3">
                                                    <a href="#tab2" data-toggle="tab" class="step">
                                                        <span class="number">2</span>
                                                        <span class="desc"><i class="icon-ok"></i> Profile Setup</span>
                                                    </a>
                                                </li>
                                                <li class="span3">
                                                    <a href="#tab3" data-toggle="tab" class="step">
                                                        <span class="number">3</span>
                                                        <span class="desc"><i class="icon-ok"></i> Billing Setup</span>
                                                    </a>
                                                </li>
                                                <li class="span3">
                                                    <a href="#tab4" data-toggle="tab" class="step">
                                                        <span class="number">4</span>
                                                        <span class="desc"><i class="icon-ok"></i> Confirm</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="bar" class="progress progress-success progress-striped">
                                        <div class="bar"></div>
                                    </div>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab1">
                                            <h3>Provide your account details</h3>
                                            <div class="control-group">
                                                <label class="control-label">Username</label>
                                                <div class="controls">
                                                    <input type="text" class="span6" />
                                                    <span class="help-inline">Provide your username</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Password</label>
                                                <div class="controls">
                                                    <input type="password" class="span6" />
                                                    <span class="help-inline">Provide your username</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Confirm Password</label>
                                                <div class="controls">
                                                    <input type="password" class="span6" />
                                                    <span class="help-inline">Confirm your password</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab2">
                                            <h4>Provide your profile details</h4>
                                            <div class="control-group">
                                                <label class="control-label">Fullname</label>
                                                <div class="controls">
                                                    <input type="text" class="span6" />
                                                    <span class="help-inline">Provide your fullname</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Email</label>
                                                <div class="controls">
                                                    <input type="text" class="span6" />
                                                    <span class="help-inline">Provide your email address</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Phone Number</label>
                                                <div class="controls">
                                                    <input type="text" class="span6" />
                                                    <span class="help-inline">Provide your phone number</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Gender</label>
                                                <div class="controls">
                                                    <label class="radio">
                                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked />
                                                        Male
                                                    </label>
                                                    <div class="clearfix"></div>
                                                    <label class="radio">
                                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" />
                                                        Female
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Address</label>
                                                <div class="controls">
                                                    <input type="text" class="span6" />
                                                    <span class="help-inline">Provide your street address</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">City/Town</label>
                                                <div class="controls">
                                                    <input type="text" class="span6" />
                                                    <span class="help-inline">Provide your city or town</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Remarks</label>
                                                <div class="controls">
                                                    <textarea class="span6" rows="3"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab3">
                                            <h4>Provide your billing and credit card details</h4>
                                            <div class="control-group">
                                                <label class="control-label">Card Holder Name</label>
                                                <div class="controls">
                                                    <input type="text" class="span6" />
                                                    <span class="help-inline"></span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Bank Name</label>
                                                <div class="controls">
                                                    <input type="text" class="span6" />
                                                    <span class="help-inline"></span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Debit/Credit Card Number</label>
                                                <div class="controls">
                                                    <input type="text" class="span6" />
                                                    <span class="help-inline"></span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">CVC</label>
                                                <div class="controls">
                                                    <input type="text" placeholder="" class="" />
                                                    <span class="help-inline"></span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Expiration Date(MM/YYYY)</label>
                                                <div class="controls">
                                                    <input type="text" placeholder="MM" class="input-small" />
                                                    <input type="text" placeholder="YYYY" class="input-small" />
                                                    <span class="help-inline"></span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Payment Options</label>
                                                <div class="controls">
                                                    <label class="checkbox line">
                                                        <input type="checkbox" value="" /> Auto-Pay with this Credit Card
                                                    </label>
                                                    <label class="checkbox line">
                                                        <input type="checkbox" value="" /> Email me monthly billing
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab4">
                                            <h4>Confirm your account</h4>
                                            <div class="control-group">
                                                <label class="control-label">Fullname:</label>
                                                <div class="controls">
                                                    <span class="text">Bob Nilson</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Email:</label>
                                                <div class="controls">
                                                    <span class="text">bob@nilson.com</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Phone:</label>
                                                <div class="controls">
                                                    <span class="text">101234023223</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Credit Card Number:</label>
                                                <div class="controls">
                                                    <span class="text">*************1233</span>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label"></label>
                                                <div class="controls">
                                                    <label class="checkbox">
                                                        <input type="checkbox" value="" /> I confirm my account
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions clearfix">
                                        <a href="javascript:;" class="btn button-previous">
                                            <i class="icon-angle-left"></i> Back
                                        </a>
                                        <a href="javascript:;" class="btn btn-primary blue button-next">
                                            Continue <i class="icon-angle-right"></i>
                                        </a>
                                        <a href="javascript:;" class="btn btn-success button-submit">
                                            Submit <i class="icon-ok"></i>
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
        <!-- END PAGE CONTAINER-->
    </div>
    <!-- END PAGE -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div id="footer">
    2013 &copy; Conquer. Admin Dashboard Template.
    <div class="span pull-right">
        <span class="go-top"><i class="icon-arrow-up"></i></span>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="assets/plugins/excanvas.js"></script>
<script src="assets/plugins/respond.js"></script>
<![endif]-->
<script src="assets/plugins/breakpoints/breakpoints.js" type="text/javascript"></script>
<!-- IMPORTANT! jquery.slimscroll.min.js depends on jquery-ui-1.10.1.custom.min.js -->
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.blockui.js" type="text/javascript"></script>
<script src="assets/plugins/jquery.cookie.js" type="text/javascript"></script>
<script src="assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
<script type="text/javascript" src="assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/scripts/app.js"></script>
<script src="assets/scripts/form-wizard.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        // initiate layout and plugins
        App.init();
        FormWizard.init();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>