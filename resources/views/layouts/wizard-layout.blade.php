<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>@yield('title') | ORIEMS</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="{{ URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('assets/plugins/bootstrap/css/bootstrap-responsive.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('assets/plugins/font-awesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('assets/css/style.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('assets/css/style-responsive.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ URL::asset('assets/css/themes/default.css') }}" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="{{ URL::asset('assets/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css"/>
    <link href="#" rel="stylesheet" id="style_metro" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/plugins/chosen-bootstrap/chosen/chosen.css') }}" />
    <!-- END PAGE LEVEL STYLES -->
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
<!-- BEGIN HEADER -->
<div id="header" class="navbar navbar-inverse navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
    @include('layouts.includes.top_navigation')
    <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div id="container" class="row-fluid">
    <!-- BEGIN SIDEBAR -->
    @include('layouts.includes.sidebar')
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
            @include('layouts.includes.page_header')
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
                <div class="span12">
                    {{--<div class="widget box blue" id="form_wizard_1">--}}
                        {{--<div class="widget-title">--}}
                            {{--<h4>--}}
                                {{--<i class="icon-reorder"></i> Form Wizard - <span class="step-title">Step 1 of 4</span>--}}
                            {{--</h4>--}}
                            {{--<span class="tools">--}}
                        {{--<a href="javascript:;" class="icon-chevron-down"></a>--}}
                        {{--<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>--}}
                        {{--<a href="javascript:;" class="icon-refresh hidden-phone"></a>--}}
                        {{--<a href="javascript:;" class="icon-remove hidden-phone"></a>--}}
                        {{--</span>--}}
                        {{--</div>--}}
                        {{--<div class="widget-body form">--}}
                            {{--<form action="#" class="form-horizontal">--}}
                                {{--<div class="form-wizard">--}}
                                    {{--<div class="navbar steps">--}}
                                        {{--<div class="navbar-inner">--}}
                                            {{--<ul class="row-fluid">--}}
                                                {{--<li class="span3">--}}
                                                    {{--<a href="#tab1" data-toggle="tab" class="step active">--}}
                                                        {{--<span class="number">1</span>--}}
                                                        {{--<span class="desc"><i class="icon-ok"></i> Account Setup</span>--}}
                                                    {{--</a>--}}
                                                {{--</li>--}}
                                                {{--<li class="span3">--}}
                                                    {{--<a href="#tab2" data-toggle="tab" class="step">--}}
                                                        {{--<span class="number">2</span>--}}
                                                        {{--<span class="desc"><i class="icon-ok"></i> Profile Setup</span>--}}
                                                    {{--</a>--}}
                                                {{--</li>--}}
                                                {{--<li class="span3">--}}
                                                    {{--<a href="#tab3" data-toggle="tab" class="step">--}}
                                                        {{--<span class="number">3</span>--}}
                                                        {{--<span class="desc"><i class="icon-ok"></i> Billing Setup</span>--}}
                                                    {{--</a>--}}
                                                {{--</li>--}}
                                                {{--<li class="span3">--}}
                                                    {{--<a href="#tab4" data-toggle="tab" class="step">--}}
                                                        {{--<span class="number">4</span>--}}
                                                        {{--<span class="desc"><i class="icon-ok"></i> Confirm</span>--}}
                                                    {{--</a>--}}
                                                {{--</li>--}}
                                            {{--</ul>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div id="bar" class="progress progress-success progress-striped">--}}
                                        {{--<div class="bar"></div>--}}
                                    {{--</div>--}}
                                    {{--<div class="tab-content">--}}
                                        {{--<div class="tab-pane active" id="tab1">--}}
                                            {{--<h3>Provide your account details</h3>--}}
                                            {{--<div class="control-group">--}}
                                                {{--<label class="control-label">Username</label>--}}
                                                {{--<div class="controls">--}}
                                                    {{--<input type="text" class="span6" />--}}
                                                    {{--<span class="help-inline">Provide your username</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="control-group">--}}
                                                {{--<label class="control-label">Password</label>--}}
                                                {{--<div class="controls">--}}
                                                    {{--<input type="password" class="span6" />--}}
                                                    {{--<span class="help-inline">Provide your username</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="control-group">--}}
                                                {{--<label class="control-label">Confirm Password</label>--}}
                                                {{--<div class="controls">--}}
                                                    {{--<input type="password" class="span6" />--}}
                                                    {{--<span class="help-inline">Confirm your password</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="tab-pane" id="tab2">--}}
                                            {{--<h4>Provide your profile details</h4>--}}
                                            {{--<div class="control-group">--}}
                                                {{--<label class="control-label">Fullname</label>--}}
                                                {{--<div class="controls">--}}
                                                    {{--<input type="text" class="span6" />--}}
                                                    {{--<span class="help-inline">Provide your fullname</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="control-group">--}}
                                                {{--<label class="control-label">Email</label>--}}
                                                {{--<div class="controls">--}}
                                                    {{--<input type="text" class="span6" />--}}
                                                    {{--<span class="help-inline">Provide your email address</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="control-group">--}}
                                                {{--<label class="control-label">Phone Number</label>--}}
                                                {{--<div class="controls">--}}
                                                    {{--<input type="text" class="span6" />--}}
                                                    {{--<span class="help-inline">Provide your phone number</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="control-group">--}}
                                                {{--<label class="control-label">Gender</label>--}}
                                                {{--<div class="controls">--}}
                                                    {{--<label class="radio">--}}
                                                        {{--<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked />--}}
                                                        {{--Male--}}
                                                    {{--</label>--}}
                                                    {{--<div class="clearfix"></div>--}}
                                                    {{--<label class="radio">--}}
                                                        {{--<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" />--}}
                                                        {{--Female--}}
                                                    {{--</label>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="control-group">--}}
                                                {{--<label class="control-label">Address</label>--}}
                                                {{--<div class="controls">--}}
                                                    {{--<input type="text" class="span6" />--}}
                                                    {{--<span class="help-inline">Provide your street address</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="control-group">--}}
                                                {{--<label class="control-label">City/Town</label>--}}
                                                {{--<div class="controls">--}}
                                                    {{--<input type="text" class="span6" />--}}
                                                    {{--<span class="help-inline">Provide your city or town</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="control-group">--}}
                                                {{--<label class="control-label">Remarks</label>--}}
                                                {{--<div class="controls">--}}
                                                    {{--<textarea class="span6" rows="3"></textarea>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="tab-pane" id="tab3">--}}
                                            {{--<h4>Provide your billing and credit card details</h4>--}}
                                            {{--<div class="control-group">--}}
                                                {{--<label class="control-label">Card Holder Name</label>--}}
                                                {{--<div class="controls">--}}
                                                    {{--<input type="text" class="span6" />--}}
                                                    {{--<span class="help-inline"></span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="control-group">--}}
                                                {{--<label class="control-label">Bank Name</label>--}}
                                                {{--<div class="controls">--}}
                                                    {{--<input type="text" class="span6" />--}}
                                                    {{--<span class="help-inline"></span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="control-group">--}}
                                                {{--<label class="control-label">Debit/Credit Card Number</label>--}}
                                                {{--<div class="controls">--}}
                                                    {{--<input type="text" class="span6" />--}}
                                                    {{--<span class="help-inline"></span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="control-group">--}}
                                                {{--<label class="control-label">CVC</label>--}}
                                                {{--<div class="controls">--}}
                                                    {{--<input type="text" placeholder="" class="" />--}}
                                                    {{--<span class="help-inline"></span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="control-group">--}}
                                                {{--<label class="control-label">Expiration Date(MM/YYYY)</label>--}}
                                                {{--<div class="controls">--}}
                                                    {{--<input type="text" placeholder="MM" class="input-small" />--}}
                                                    {{--<input type="text" placeholder="YYYY" class="input-small" />--}}
                                                    {{--<span class="help-inline"></span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="control-group">--}}
                                                {{--<label class="control-label">Payment Options</label>--}}
                                                {{--<div class="controls">--}}
                                                    {{--<label class="checkbox line">--}}
                                                        {{--<input type="checkbox" value="" /> Auto-Pay with this Credit Card--}}
                                                    {{--</label>--}}
                                                    {{--<label class="checkbox line">--}}
                                                        {{--<input type="checkbox" value="" /> Email me monthly billing--}}
                                                    {{--</label>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="tab-pane" id="tab4">--}}
                                            {{--<h4>Confirm your account</h4>--}}
                                            {{--<div class="control-group">--}}
                                                {{--<label class="control-label">Fullname:</label>--}}
                                                {{--<div class="controls">--}}
                                                    {{--<span class="text">Bob Nilson</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="control-group">--}}
                                                {{--<label class="control-label">Email:</label>--}}
                                                {{--<div class="controls">--}}
                                                    {{--<span class="text">bob@nilson.com</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="control-group">--}}
                                                {{--<label class="control-label">Phone:</label>--}}
                                                {{--<div class="controls">--}}
                                                    {{--<span class="text">101234023223</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="control-group">--}}
                                                {{--<label class="control-label">Credit Card Number:</label>--}}
                                                {{--<div class="controls">--}}
                                                    {{--<span class="text">*************1233</span>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="control-group">--}}
                                                {{--<label class="control-label"></label>--}}
                                                {{--<div class="controls">--}}
                                                    {{--<label class="checkbox">--}}
                                                        {{--<input type="checkbox" value="" /> I confirm my account--}}
                                                    {{--</label>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-actions clearfix">--}}
                                        {{--<a href="javascript:;" class="btn button-previous">--}}
                                            {{--<i class="icon-angle-left"></i> Back--}}
                                        {{--</a>--}}
                                        {{--<a href="javascript:;" class="btn btn-primary blue button-next">--}}
                                            {{--Continue <i class="icon-angle-right"></i>--}}
                                        {{--</a>--}}
                                        {{--<a href="javascript:;" class="btn btn-success button-submit">--}}
                                            {{--Submit <i class="icon-ok"></i>--}}
                                        {{--</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</form>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    @yield('contents')
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
@include('layouts.includes.footer')
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<script src="{{ URL::asset('assets/plugins/jquery-1.8.3.min.js') }}" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{ URL::asset('assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="{{ URL::asset('assets/plugins/excanvas.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/respond.js') }}"></script>
<![endif]-->
<script src="{{ URL::asset('assets/plugins/breakpoints/breakpoints.js') }}" type="text/javascript"></script>
<!-- IMPORTANT! jquery.slimscroll.min.js depends on jquery-ui-1.10.1.custom.min.js -->
<script src="{{ URL::asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/plugins/jquery.blockui.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/plugins/jquery.cookie.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript" ></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="{{ URL::asset('assets/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js') }}"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ URL::asset('assets/scripts/app.js') }}"></script>
<script src="{{ URL::asset('assets/scripts/form-wizard.js') }}"></script>
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