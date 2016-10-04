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
    @stack('css')
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
<!-- BEGIN HEADER -->
<div id="header" class="navbar navbar-inverse navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
@include('layouts.includes.top_navigation')
<!-- END TOP NAVIGATION BAR -->
</div><div id="header" class="navbar navbar-inverse navbar-fixed-top">
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
                <button data-dismiss="modal" class="close" type="button">×</button>
                <h3>Widget Settings</h3>
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
                    <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                    <h3 class="page-title">
                        Form Components            <small>form components and widgets</small>
                    </h3>
                    <ul class="breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="index.html">Home</a>
                            <i class="icon-angle-right"></i>
                        </li>
                        <li>
                            <a href="#">Form Stuff</a>
                            <i class="icon-angle-right"></i>
                        </li>
                        <li><a href="#">Form Components</a></li>
                    </ul>
                    <!-- END PAGE TITLE & BREADCRUMB-->
                </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div id="page">
                <!-- BEGIN PAGE CONTENT-->
                {{--<div class="row-fluid">--}}
                    {{--<div class="span12">--}}
                        {{--<!-- BEGIN SAMPLE FORM PORTLET-->--}}
                        {{--<div class="widget box blue">--}}
                            {{--<div class="widget-title">--}}
                                {{--<h4><i class="icon-reorder"></i>Sample Form</h4>--}}
                                {{--<div class="tools">--}}
                                    {{--<a href="javascript:;" class="collapse"></a>--}}
                                    {{--<a href="#portlet-config" data-toggle="modal" class="config"></a>--}}
                                    {{--<a href="javascript:;" class="reload"></a>--}}
                                    {{--<a href="javascript:;" class="remove"></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="widget-body form">--}}
                                {{--<!-- BEGIN FORM-->--}}
                                {{--<form action="#" class="form-horizontal">--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Input</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<input type="text" class="span6 m-wrap" />--}}
                                            {{--<span class="help-inline">Some hint here</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Disabled Input</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<input class="span6 m-wrap" type="text" placeholder="Disabled input here..." disabled />--}}
                                            {{--<span class="help-inline">Some hint here</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Readonly Input</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<input class="span6 m-wrap" type="text" placeholder="Readonly input here..." disabled />--}}
                                            {{--<span class="help-inline">Some hint here</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Input with Popover</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<input type="text" class="span6 m-wrap popovers" data-trigger="hover" data-content="Popover body goes here. Popover body goes here." data-original-title="Popover header" />--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Input with Tooltip</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<input type="text" class="span6 m-wrap tooltips" data-trigger="hover" data-original-title="Tooltip text goes here. Tooltip text goes here." />--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Auto Complete</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<input type="text" class="span6 m-wrap" style="margin: 0 auto;" data-provide="typeahead" data-items="4" data-source="[&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;]" />--}}
                                            {{--<p class="help-block">Start typing to auto complete!. E.g: California</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Email Address Input</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<div class="input-prepend">--}}
                                                {{--<span class="add-on">@</span><input class="m-wrap " type="text" placeholder="Email Address" />--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Email Address Input</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<div class="input-icon left">--}}
                                                {{--<i class="icon-envelope"></i>--}}
                                                {{--<input class="m-wrap " type="text" placeholder="Email Address" />--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Currency Input</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<div class="input-prepend input-append">--}}
                                                {{--<span class="add-on">$</span><input class="m-wrap " type="text" /><span class="add-on">.00</span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Default Dropdown</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<select class="span6 m-wrap" data-placeholder="Choose a Category" tabindex="1">--}}
                                                {{--<option value="">Select...</option>--}}
                                                {{--<option value="Category 1">Category 1</option>--}}
                                                {{--<option value="Category 2">Category 2</option>--}}
                                                {{--<option value="Category 3">Category 5</option>--}}
                                                {{--<option value="Category 4">Category 4</option>--}}
                                            {{--</select>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Default Dropdown(Multiple)</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<select class="span6 m-wrap" multiple="multiple" data-placeholder="Choose a Category" tabindex="1">--}}
                                                {{--<option value="Category 1">Category 1</option>--}}
                                                {{--<option value="Category 2">Category 2</option>--}}
                                                {{--<option value="Category 3">Category 5</option>--}}
                                                {{--<option value="Category 4">Category 4</option>--}}
                                                {{--<option value="Category 3">Category 6</option>--}}
                                                {{--<option value="Category 4">Category 7</option>--}}
                                                {{--<option value="Category 3">Category 8</option>--}}
                                                {{--<option value="Category 4">Category 9</option>--}}
                                            {{--</select>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Custom Dropdown</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<select class="span6 chosen" data-placeholder="Choose a Category" tabindex="1">--}}
                                                {{--<option value=""></option>--}}
                                                {{--<option value="Category 1">Category 1</option>--}}
                                                {{--<option value="Category 2">Category 2</option>--}}
                                                {{--<option value="Category 3">Category 5</option>--}}
                                                {{--<option value="Category 4">Category 4</option>--}}
                                            {{--</select>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Grouped Custom Dropdown</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<select data-placeholder="Your Favorite Football Team" class="chosen span6" tabindex="-1" id="selS0V">--}}
                                                {{--<option value=""></option>--}}
                                                {{--<optgroup label="NFC EAST">--}}
                                                    {{--<option>Dallas Cowboys</option>--}}
                                                    {{--<option>New York Giants</option>--}}
                                                    {{--<option>Philadelphia Eagles</option>--}}
                                                    {{--<option>Washington Redskins</option>--}}
                                                {{--</optgroup>--}}
                                                {{--<optgroup label="NFC NORTH">--}}
                                                    {{--<option>Chicago Bears</option>--}}
                                                    {{--<option>Detroit Lions</option>--}}
                                                    {{--<option>Green Bay Packers</option>--}}
                                                    {{--<option>Minnesota Vikings</option>--}}
                                                {{--</optgroup>--}}
                                                {{--<optgroup label="NFC SOUTH">--}}
                                                    {{--<option>Atlanta Falcons</option>--}}
                                                    {{--<option>Carolina Panthers</option>--}}
                                                    {{--<option>New Orleans Saints</option>--}}
                                                    {{--<option>Tampa Bay Buccaneers</option>--}}
                                                {{--</optgroup>--}}
                                                {{--<optgroup label="NFC WEST">--}}
                                                    {{--<option>Arizona Cardinals</option>--}}
                                                    {{--<option>St. Louis Rams</option>--}}
                                                    {{--<option>San Francisco 49ers</option>--}}
                                                    {{--<option>Seattle Seahawks</option>--}}
                                                {{--</optgroup>--}}
                                                {{--<optgroup label="AFC EAST">--}}
                                                    {{--<option>Buffalo Bills</option>--}}
                                                    {{--<option>Miami Dolphins</option>--}}
                                                    {{--<option>New England Patriots</option>--}}
                                                    {{--<option>New York Jets</option>--}}
                                                {{--</optgroup>--}}
                                                {{--<optgroup label="AFC NORTH">--}}
                                                    {{--<option>Baltimore Ravens</option>--}}
                                                    {{--<option>Cincinnati Bengals</option>--}}
                                                    {{--<option>Cleveland Browns</option>--}}
                                                    {{--<option>Pittsburgh Steelers</option>--}}
                                                {{--</optgroup>--}}
                                                {{--<optgroup label="AFC SOUTH">--}}
                                                    {{--<option>Houston Texans</option>--}}
                                                    {{--<option>Indianapolis Colts</option>--}}
                                                    {{--<option>Jacksonville Jaguars</option>--}}
                                                    {{--<option>Tennessee Titans</option>--}}
                                                {{--</optgroup>--}}
                                                {{--<optgroup label="AFC WEST">--}}
                                                    {{--<option>Denver Broncos</option>--}}
                                                    {{--<option>Kansas City Chiefs</option>--}}
                                                    {{--<option>Oakland Raiders</option>--}}
                                                    {{--<option>San Diego Chargers</option>--}}
                                                {{--</optgroup>--}}
                                            {{--</select>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Custom Dropdown Multiple Select</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<select data-placeholder="Your Favorite Football Teams" class="chosen span6" multiple="multiple" tabindex="6">--}}
                                                {{--<option value=""></option>--}}
                                                {{--<optgroup label="NFC EAST">--}}
                                                    {{--<option>Dallas Cowboys</option>--}}
                                                    {{--<option>New York Giants</option>--}}
                                                    {{--<option>Philadelphia Eagles</option>--}}
                                                    {{--<option>Washington Redskins</option>--}}
                                                {{--</optgroup>--}}
                                                {{--<optgroup label="NFC NORTH">--}}
                                                    {{--<option selected>Chicago Bears</option>--}}
                                                    {{--<option>Detroit Lions</option>--}}
                                                    {{--<option>Green Bay Packers</option>--}}
                                                    {{--<option>Minnesota Vikings</option>--}}
                                                {{--</optgroup>--}}
                                                {{--<optgroup label="NFC SOUTH">--}}
                                                    {{--<option>Atlanta Falcons</option>--}}
                                                    {{--<option selected>Carolina Panthers</option>--}}
                                                    {{--<option>New Orleans Saints</option>--}}
                                                    {{--<option>Tampa Bay Buccaneers</option>--}}
                                                {{--</optgroup>--}}
                                                {{--<optgroup label="NFC WEST">--}}
                                                    {{--<option>Arizona Cardinals</option>--}}
                                                    {{--<option>St. Louis Rams</option>--}}
                                                    {{--<option>San Francisco 49ers</option>--}}
                                                    {{--<option>Seattle Seahawks</option>--}}
                                                {{--</optgroup>--}}
                                                {{--<optgroup label="AFC EAST">--}}
                                                    {{--<option>Buffalo Bills</option>--}}
                                                    {{--<option>Miami Dolphins</option>--}}
                                                    {{--<option>New England Patriots</option>--}}
                                                    {{--<option>New York Jets</option>--}}
                                                {{--</optgroup>--}}
                                                {{--<optgroup label="AFC NORTH">--}}
                                                    {{--<option>Baltimore Ravens</option>--}}
                                                    {{--<option>Cincinnati Bengals</option>--}}
                                                    {{--<option>Cleveland Browns</option>--}}
                                                    {{--<option>Pittsburgh Steelers</option>--}}
                                                {{--</optgroup>--}}
                                                {{--<optgroup label="AFC SOUTH">--}}
                                                    {{--<option>Houston Texans</option>--}}
                                                    {{--<option>Indianapolis Colts</option>--}}
                                                    {{--<option>Jacksonville Jaguars</option>--}}
                                                    {{--<option>Tennessee Titans</option>--}}
                                                {{--</optgroup>--}}
                                                {{--<optgroup label="AFC WEST">--}}
                                                    {{--<option>Denver Broncos</option>--}}
                                                    {{--<option>Kansas City Chiefs</option>--}}
                                                    {{--<option>Oakland Raiders</option>--}}
                                                    {{--<option>San Diego Chargers</option>--}}
                                                {{--</optgroup>--}}
                                            {{--</select>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Custom Dropdown Diselect</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<select data-placeholder="Your Favorite Type of Bear" class="chosen-with-diselect span6" tabindex="-1" id="selCSI">--}}
                                                {{--<option value=""></option>--}}
                                                {{--<option>American Black Bear</option>--}}
                                                {{--<option>Asiatic Black Bear</option>--}}
                                                {{--<option>Brown Bear</option>--}}
                                                {{--<option>Giant Panda</option>--}}
                                                {{--<option selected="">Sloth Bear</option>--}}
                                                {{--<option>Sun Bear</option>--}}
                                                {{--<option>Polar Bear</option>--}}
                                                {{--<option>Spectacled Bear</option>--}}
                                            {{--</select>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Radio Buttons</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<label class="radio">--}}
                                                {{--<input type="radio" name="optionsRadios1" value="option1" />--}}
                                                {{--Option 1--}}
                                            {{--</label>--}}
                                            {{--<label class="radio">--}}
                                                {{--<input type="radio" name="optionsRadios1" value="option2" checked />--}}
                                                {{--Option 2--}}
                                            {{--</label>--}}
                                            {{--<label class="radio">--}}
                                                {{--<input type="radio" name="optionsRadios1" value="option2" />--}}
                                                {{--Option 3--}}
                                            {{--</label>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Radio Buttons</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<label class="radio line">--}}
                                                {{--<input type="radio" name="optionsRadios2" value="option1" />--}}
                                                {{--Option 1--}}
                                            {{--</label>--}}
                                            {{--<label class="radio line">--}}
                                                {{--<input type="radio" name="optionsRadios2" value="option2" checked />--}}
                                                {{--Option 2--}}
                                            {{--</label>--}}
                                            {{--<label class="radio line">--}}
                                                {{--<input type="radio" name="optionsRadios2" value="option2" />--}}
                                                {{--Option 3--}}
                                            {{--</label>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Checkbox</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<label class="checkbox">--}}
                                                {{--<input type="checkbox" value="" /> Checkbox 1--}}
                                            {{--</label>--}}
                                            {{--<label class="checkbox">--}}
                                                {{--<input type="checkbox" value="" /> Checkbox 2--}}
                                            {{--</label>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Checkbox</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<label class="checkbox line">--}}
                                                {{--<input type="checkbox" value="" /> Checkbox 1--}}
                                            {{--</label>--}}
                                            {{--<label class="checkbox line">--}}
                                                {{--<input type="checkbox" value="" /> Checkbox 2--}}
                                            {{--</label>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Textarea</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<textarea class="span6 m-wrap" rows="3"></textarea>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-actions">--}}
                                        {{--<button type="submit" class="btn blue">Submit</button>--}}
                                        {{--<button type="button" class="btn">Cancel</button>--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                                {{--<!-- END FORM-->--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- END SAMPLE FORM PORTLET-->--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row-fluid">--}}
                    {{--<div class="span12">--}}
                        {{--<!-- BEGIN PORTLET-->--}}
                        {{--<div class="row-fluid">--}}
                            {{--<div class="span12">--}}
                                {{--<div class="widget box purple">--}}
                                    {{--<div class="widget-title">--}}
                                        {{--<h4><i class="icon-reorder"></i>Select 2 Dropdowns</h4>--}}
                                        {{--<div class="tools">--}}
                                            {{--<a href="javascript:;" class="collapse"></a>--}}
                                            {{--<a href="javascript:;" class="reload"></a>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="widget-body form">--}}
                                        {{--<!-- BEGIN FORM-->--}}
                                        {{--<form action="#" class="form-horizontal">--}}
                                            {{--<div class="control-group">--}}
                                                {{--<label class="control-label">Basic</label>--}}
                                                {{--<div class="controls">--}}
                                                    {{--<select id="select2_sample1" class="span6 select2">--}}
                                                        {{--<option value=""></option>--}}
                                                        {{--<option value="AL">Alabama</option>--}}
                                                        {{--<option value="WY">Wyoming</option>--}}
                                                    {{--</select>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="control-group">--}}
                                                {{--<label class="control-label">Multi-Value Select</label>--}}
                                                {{--<div class="controls">--}}
                                                    {{--<select id="select2_sample2" class="span6 select2" multiple>--}}
                                                        {{--<option value=""></option>--}}
                                                        {{--<optgroup label="NFC EAST">--}}
                                                            {{--<option>Dallas Cowboys</option>--}}
                                                            {{--<option>New York Giants</option>--}}
                                                            {{--<option>Philadelphia Eagles</option>--}}
                                                            {{--<option>Washington Redskins</option>--}}
                                                        {{--</optgroup>--}}
                                                        {{--<optgroup label="NFC NORTH">--}}
                                                            {{--<option>Chicago Bears</option>--}}
                                                            {{--<option>Detroit Lions</option>--}}
                                                            {{--<option>Green Bay Packers</option>--}}
                                                            {{--<option>Minnesota Vikings</option>--}}
                                                        {{--</optgroup>--}}
                                                        {{--<optgroup label="NFC SOUTH">--}}
                                                            {{--<option>Atlanta Falcons</option>--}}
                                                            {{--<option>Carolina Panthers</option>--}}
                                                            {{--<option>New Orleans Saints</option>--}}
                                                            {{--<option>Tampa Bay Buccaneers</option>--}}
                                                        {{--</optgroup>--}}
                                                        {{--<optgroup label="NFC WEST">--}}
                                                            {{--<option>Arizona Cardinals</option>--}}
                                                            {{--<option>St. Louis Rams</option>--}}
                                                            {{--<option>San Francisco 49ers</option>--}}
                                                            {{--<option>Seattle Seahawks</option>--}}
                                                        {{--</optgroup>--}}
                                                        {{--<optgroup label="AFC EAST">--}}
                                                            {{--<option>Buffalo Bills</option>--}}
                                                            {{--<option>Miami Dolphins</option>--}}
                                                            {{--<option>New England Patriots</option>--}}
                                                            {{--<option>New York Jets</option>--}}
                                                        {{--</optgroup>--}}
                                                        {{--<optgroup label="AFC NORTH">--}}
                                                            {{--<option>Baltimore Ravens</option>--}}
                                                            {{--<option>Cincinnati Bengals</option>--}}
                                                            {{--<option>Cleveland Browns</option>--}}
                                                            {{--<option>Pittsburgh Steelers</option>--}}
                                                        {{--</optgroup>--}}
                                                        {{--<optgroup label="AFC SOUTH">--}}
                                                            {{--<option>Houston Texans</option>--}}
                                                            {{--<option>Indianapolis Colts</option>--}}
                                                            {{--<option>Jacksonville Jaguars</option>--}}
                                                            {{--<option>Tennessee Titans</option>--}}
                                                        {{--</optgroup>--}}
                                                        {{--<optgroup label="AFC WEST">--}}
                                                            {{--<option>Denver Broncos</option>--}}
                                                            {{--<option>Kansas City Chiefs</option>--}}
                                                            {{--<option>Oakland Raiders</option>--}}
                                                            {{--<option>San Diego Chargers</option>--}}
                                                        {{--</optgroup>--}}
                                                    {{--</select>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="control-group">--}}
                                                {{--<label class="control-label">Loading Data</label>--}}
                                                {{--<div class="controls">--}}
                                                    {{--<input type="hidden" id="select2_sample3" class="span6 select2">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="control-group">--}}
                                                {{--<label class="control-label">Country List</label>--}}
                                                {{--<div class="controls">--}}
                                                    {{--<select name="" id="select2_sample4" class="span6 select2">--}}
                                                        {{--<option value="AF">Afghanistan</option>--}}
                                                        {{--<option value="AL">Albania</option>--}}
                                                        {{--<option value="DZ">Algeria</option>--}}
                                                        {{--<option value="AS">American Samoa</option>--}}
                                                        {{--<option value="AD">Andorra</option>--}}
                                                        {{--<option value="AO">Angola</option>--}}
                                                        {{--<option value="AI">Anguilla</option>--}}
                                                        {{--<option value="AQ">Antarctica</option>--}}
                                                        {{--<option value="AR">Argentina</option>--}}
                                                        {{--<option value="AM">Armenia</option>--}}
                                                        {{--<option value="AW">Aruba</option>--}}
                                                        {{--<option value="AU">Australia</option>--}}
                                                        {{--<option value="AT">Austria</option>--}}
                                                        {{--<option value="AZ">Azerbaijan</option>--}}
                                                        {{--<option value="BS">Bahamas</option>--}}
                                                        {{--<option value="BH">Bahrain</option>--}}
                                                        {{--<option value="BD">Bangladesh</option>--}}
                                                        {{--<option value="BB">Barbados</option>--}}
                                                        {{--<option value="BY">Belarus</option>--}}
                                                        {{--<option value="BE">Belgium</option>--}}
                                                        {{--<option value="BZ">Belize</option>--}}
                                                        {{--<option value="BJ">Benin</option>--}}
                                                        {{--<option value="BM">Bermuda</option>--}}
                                                        {{--<option value="BT">Bhutan</option>--}}
                                                        {{--<option value="BO">Bolivia</option>--}}
                                                        {{--<option value="BA">Bosnia and Herzegowina</option>--}}
                                                        {{--<option value="BW">Botswana</option>--}}
                                                        {{--<option value="BV">Bouvet Island</option>--}}
                                                        {{--<option value="BR">Brazil</option>--}}
                                                        {{--<option value="IO">British Indian Ocean Territory</option>--}}
                                                        {{--<option value="BN">Brunei Darussalam</option>--}}
                                                        {{--<option value="BG">Bulgaria</option>--}}
                                                        {{--<option value="BF">Burkina Faso</option>--}}
                                                        {{--<option value="BI">Burundi</option>--}}
                                                        {{--<option value="KH">Cambodia</option>--}}
                                                        {{--<option value="CM">Cameroon</option>--}}
                                                        {{--<option value="CA">Canada</option>--}}
                                                        {{--<option value="CV">Cape Verde</option>--}}
                                                        {{--<option value="KY">Cayman Islands</option>--}}
                                                        {{--<option value="CF">Central African Republic</option>--}}
                                                        {{--<option value="TD">Chad</option>--}}
                                                        {{--<option value="CL">Chile</option>--}}
                                                        {{--<option value="CN">China</option>--}}
                                                        {{--<option value="CX">Christmas Island</option>--}}
                                                        {{--<option value="CC">Cocos (Keeling) Islands</option>--}}
                                                        {{--<option value="CO">Colombia</option>--}}
                                                        {{--<option value="KM">Comoros</option>--}}
                                                        {{--<option value="CG">Congo</option>--}}
                                                        {{--<option value="CD">Congo, the Democratic Republic of the</option>--}}
                                                        {{--<option value="CK">Cook Islands</option>--}}
                                                        {{--<option value="CR">Costa Rica</option>--}}
                                                        {{--<option value="CI">Cote d'Ivoire</option>--}}
                                                        {{--<option value="HR">Croatia (Hrvatska)</option>--}}
                                                        {{--<option value="CU">Cuba</option>--}}
                                                        {{--<option value="CY">Cyprus</option>--}}
                                                        {{--<option value="CZ">Czech Republic</option>--}}
                                                        {{--<option value="DK">Denmark</option>--}}
                                                        {{--<option value="DJ">Djibouti</option>--}}
                                                        {{--<option value="DM">Dominica</option>--}}
                                                        {{--<option value="DO">Dominican Republic</option>--}}
                                                        {{--<option value="EC">Ecuador</option>--}}
                                                        {{--<option value="EG">Egypt</option>--}}
                                                        {{--<option value="SV">El Salvador</option>--}}
                                                        {{--<option value="GQ">Equatorial Guinea</option>--}}
                                                        {{--<option value="ER">Eritrea</option>--}}
                                                        {{--<option value="EE">Estonia</option>--}}
                                                        {{--<option value="ET">Ethiopia</option>--}}
                                                        {{--<option value="FK">Falkland Islands (Malvinas)</option>--}}
                                                        {{--<option value="FO">Faroe Islands</option>--}}
                                                        {{--<option value="FJ">Fiji</option>--}}
                                                        {{--<option value="FI">Finland</option>--}}
                                                        {{--<option value="FR">France</option>--}}
                                                        {{--<option value="GF">French Guiana</option>--}}
                                                        {{--<option value="PF">French Polynesia</option>--}}
                                                        {{--<option value="TF">French Southern Territories</option>--}}
                                                        {{--<option value="GA">Gabon</option>--}}
                                                        {{--<option value="GM">Gambia</option>--}}
                                                        {{--<option value="GE">Georgia</option>--}}
                                                        {{--<option value="DE">Germany</option>--}}
                                                        {{--<option value="GH">Ghana</option>--}}
                                                        {{--<option value="GI">Gibraltar</option>--}}
                                                        {{--<option value="GR">Greece</option>--}}
                                                        {{--<option value="GL">Greenland</option>--}}
                                                        {{--<option value="GD">Grenada</option>--}}
                                                        {{--<option value="GP">Guadeloupe</option>--}}
                                                        {{--<option value="GU">Guam</option>--}}
                                                        {{--<option value="GT">Guatemala</option>--}}
                                                        {{--<option value="GN">Guinea</option>--}}
                                                        {{--<option value="GW">Guinea-Bissau</option>--}}
                                                        {{--<option value="GY">Guyana</option>--}}
                                                        {{--<option value="HT">Haiti</option>--}}
                                                        {{--<option value="HM">Heard and Mc Donald Islands</option>--}}
                                                        {{--<option value="VA">Holy See (Vatican City State)</option>--}}
                                                        {{--<option value="HN">Honduras</option>--}}
                                                        {{--<option value="HK">Hong Kong</option>--}}
                                                        {{--<option value="HU">Hungary</option>--}}
                                                        {{--<option value="IS">Iceland</option>--}}
                                                        {{--<option value="IN">India</option>--}}
                                                        {{--<option value="ID">Indonesia</option>--}}
                                                        {{--<option value="IR">Iran (Islamic Republic of)</option>--}}
                                                        {{--<option value="IQ">Iraq</option>--}}
                                                        {{--<option value="IE">Ireland</option>--}}
                                                        {{--<option value="IL">Israel</option>--}}
                                                        {{--<option value="IT">Italy</option>--}}
                                                        {{--<option value="JM">Jamaica</option>--}}
                                                        {{--<option value="JP">Japan</option>--}}
                                                        {{--<option value="JO">Jordan</option>--}}
                                                        {{--<option value="KZ">Kazakhstan</option>--}}
                                                        {{--<option value="KE">Kenya</option>--}}
                                                        {{--<option value="KI">Kiribati</option>--}}
                                                        {{--<option value="KP">Korea, Democratic People's Republic of</option>--}}
                                                        {{--<option value="KR">Korea, Republic of</option>--}}
                                                        {{--<option value="KW">Kuwait</option>--}}
                                                        {{--<option value="KG">Kyrgyzstan</option>--}}
                                                        {{--<option value="LA">Lao People's Democratic Republic</option>--}}
                                                        {{--<option value="LV">Latvia</option>--}}
                                                        {{--<option value="LB">Lebanon</option>--}}
                                                        {{--<option value="LS">Lesotho</option>--}}
                                                        {{--<option value="LR">Liberia</option>--}}
                                                        {{--<option value="LY">Libyan Arab Jamahiriya</option>--}}
                                                        {{--<option value="LI">Liechtenstein</option>--}}
                                                        {{--<option value="LT">Lithuania</option>--}}
                                                        {{--<option value="LU">Luxembourg</option>--}}
                                                        {{--<option value="MO">Macau</option>--}}
                                                        {{--<option value="MK">Macedonia, The Former Yugoslav Republic of</option>--}}
                                                        {{--<option value="MG">Madagascar</option>--}}
                                                        {{--<option value="MW">Malawi</option>--}}
                                                        {{--<option value="MY">Malaysia</option>--}}
                                                        {{--<option value="MV">Maldives</option>--}}
                                                        {{--<option value="ML">Mali</option>--}}
                                                        {{--<option value="MT">Malta</option>--}}
                                                        {{--<option value="MH">Marshall Islands</option>--}}
                                                        {{--<option value="MQ">Martinique</option>--}}
                                                        {{--<option value="MR">Mauritania</option>--}}
                                                        {{--<option value="MU">Mauritius</option>--}}
                                                        {{--<option value="YT">Mayotte</option>--}}
                                                        {{--<option value="MX">Mexico</option>--}}
                                                        {{--<option value="FM">Micronesia, Federated States of</option>--}}
                                                        {{--<option value="MD">Moldova, Republic of</option>--}}
                                                        {{--<option value="MC">Monaco</option>--}}
                                                        {{--<option value="MN">Mongolia</option>--}}
                                                        {{--<option value="MS">Montserrat</option>--}}
                                                        {{--<option value="MA">Morocco</option>--}}
                                                        {{--<option value="MZ">Mozambique</option>--}}
                                                        {{--<option value="MM">Myanmar</option>--}}
                                                        {{--<option value="NA">Namibia</option>--}}
                                                        {{--<option value="NR">Nauru</option>--}}
                                                        {{--<option value="NP">Nepal</option>--}}
                                                        {{--<option value="NL">Netherlands</option>--}}
                                                        {{--<option value="AN">Netherlands Antilles</option>--}}
                                                        {{--<option value="NC">New Caledonia</option>--}}
                                                        {{--<option value="NZ">New Zealand</option>--}}
                                                        {{--<option value="NI">Nicaragua</option>--}}
                                                        {{--<option value="NE">Niger</option>--}}
                                                        {{--<option value="NG">Nigeria</option>--}}
                                                        {{--<option value="NU">Niue</option>--}}
                                                        {{--<option value="NF">Norfolk Island</option>--}}
                                                        {{--<option value="MP">Northern Mariana Islands</option>--}}
                                                        {{--<option value="NO">Norway</option>--}}
                                                        {{--<option value="OM">Oman</option>--}}
                                                        {{--<option value="PK">Pakistan</option>--}}
                                                        {{--<option value="PW">Palau</option>--}}
                                                        {{--<option value="PA">Panama</option>--}}
                                                        {{--<option value="PG">Papua New Guinea</option>--}}
                                                        {{--<option value="PY">Paraguay</option>--}}
                                                        {{--<option value="PE">Peru</option>--}}
                                                        {{--<option value="PH">Philippines</option>--}}
                                                        {{--<option value="PN">Pitcairn</option>--}}
                                                        {{--<option value="PL">Poland</option>--}}
                                                        {{--<option value="PT">Portugal</option>--}}
                                                        {{--<option value="PR">Puerto Rico</option>--}}
                                                        {{--<option value="QA">Qatar</option>--}}
                                                        {{--<option value="RE">Reunion</option>--}}
                                                        {{--<option value="RO">Romania</option>--}}
                                                        {{--<option value="RU">Russian Federation</option>--}}
                                                        {{--<option value="RW">Rwanda</option>--}}
                                                        {{--<option value="KN">Saint Kitts and Nevis</option>--}}
                                                        {{--<option value="LC">Saint LUCIA</option>--}}
                                                        {{--<option value="VC">Saint Vincent and the Grenadines</option>--}}
                                                        {{--<option value="WS">Samoa</option>--}}
                                                        {{--<option value="SM">San Marino</option>--}}
                                                        {{--<option value="ST">Sao Tome and Principe</option>--}}
                                                        {{--<option value="SA">Saudi Arabia</option>--}}
                                                        {{--<option value="SN">Senegal</option>--}}
                                                        {{--<option value="SC">Seychelles</option>--}}
                                                        {{--<option value="SL">Sierra Leone</option>--}}
                                                        {{--<option value="SG">Singapore</option>--}}
                                                        {{--<option value="SK">Slovakia (Slovak Republic)</option>--}}
                                                        {{--<option value="SI">Slovenia</option>--}}
                                                        {{--<option value="SB">Solomon Islands</option>--}}
                                                        {{--<option value="SO">Somalia</option>--}}
                                                        {{--<option value="ZA">South Africa</option>--}}
                                                        {{--<option value="GS">South Georgia and the South Sandwich Islands</option>--}}
                                                        {{--<option value="ES">Spain</option>--}}
                                                        {{--<option value="LK">Sri Lanka</option>--}}
                                                        {{--<option value="SH">St. Helena</option>--}}
                                                        {{--<option value="PM">St. Pierre and Miquelon</option>--}}
                                                        {{--<option value="SD">Sudan</option>--}}
                                                        {{--<option value="SR">Suriname</option>--}}
                                                        {{--<option value="SJ">Svalbard and Jan Mayen Islands</option>--}}
                                                        {{--<option value="SZ">Swaziland</option>--}}
                                                        {{--<option value="SE">Sweden</option>--}}
                                                        {{--<option value="CH">Switzerland</option>--}}
                                                        {{--<option value="SY">Syrian Arab Republic</option>--}}
                                                        {{--<option value="TW">Taiwan, Province of China</option>--}}
                                                        {{--<option value="TJ">Tajikistan</option>--}}
                                                        {{--<option value="TZ">Tanzania, United Republic of</option>--}}
                                                        {{--<option value="TH">Thailand</option>--}}
                                                        {{--<option value="TG">Togo</option>--}}
                                                        {{--<option value="TK">Tokelau</option>--}}
                                                        {{--<option value="TO">Tonga</option>--}}
                                                        {{--<option value="TT">Trinidad and Tobago</option>--}}
                                                        {{--<option value="TN">Tunisia</option>--}}
                                                        {{--<option value="TR">Turkey</option>--}}
                                                        {{--<option value="TM">Turkmenistan</option>--}}
                                                        {{--<option value="TC">Turks and Caicos Islands</option>--}}
                                                        {{--<option value="TV">Tuvalu</option>--}}
                                                        {{--<option value="UG">Uganda</option>--}}
                                                        {{--<option value="UA">Ukraine</option>--}}
                                                        {{--<option value="AE">United Arab Emirates</option>--}}
                                                        {{--<option value="GB">United Kingdom</option>--}}
                                                        {{--<option value="US">United States</option>--}}
                                                        {{--<option value="UM">United States Minor Outlying Islands</option>--}}
                                                        {{--<option value="UY">Uruguay</option>--}}
                                                        {{--<option value="UZ">Uzbekistan</option>--}}
                                                        {{--<option value="VU">Vanuatu</option>--}}
                                                        {{--<option value="VE">Venezuela</option>--}}
                                                        {{--<option value="VN">Viet Nam</option>--}}
                                                        {{--<option value="VG">Virgin Islands (British)</option>--}}
                                                        {{--<option value="VI">Virgin Islands (U.S.)</option>--}}
                                                        {{--<option value="WF">Wallis and Futuna Islands</option>--}}
                                                        {{--<option value="EH">Western Sahara</option>--}}
                                                        {{--<option value="YE">Yemen</option>--}}
                                                        {{--<option value="ZM">Zambia</option>--}}
                                                        {{--<option value="ZW">Zimbabwe</option>--}}
                                                    {{--</select>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="control-group">--}}
                                                {{--<label class="control-label">Tags Support List</label>--}}
                                                {{--<div class="controls">--}}
                                                    {{--<input type="hidden" id="select2_sample5" class="span6 select2" value="red, blue">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="control-group">--}}
                                                {{--<label class="control-label">Loading Remote Data</label>--}}
                                                {{--<div class="controls">--}}
                                                    {{--<input type="hidden" id="select2_sample6" class="span6 select2">--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</form>--}}
                                        {{--<!-- END FORM-->--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!-- END PORTLET-->--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row-fluid">--}}
                    {{--<div class="span12">--}}
                        {{--<div class="widget box blue ">--}}
                            {{--<div class="widget-title">--}}
                                {{--<h4><i class="icon-reorder"></i>IP Address Input</h4>--}}
                                {{--<div class="tools">--}}
                                    {{--<a href="javascript:;" class="collapse"></a>--}}
                                    {{--<a href="javascript:;" class="reload"></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="widget-body form">--}}
                                {{--<!-- BEGIN FORM-->--}}
                                {{--<form action="#" class="form-horizontal">--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">IPV4</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<input class="span6 m-wrap" id="input_ipv4" type="text"  />--}}
                                            {{--<span class="help-inline">192.168.120.150</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">IPV6</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<input class="span6 m-wrap" id="input_ipv6" type="text"  />--}}
                                            {{--<span class="help-inline">3ffe:1900:4545:3:200:f8ff:fe21:67cf</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                                {{--<!-- END FORM-->--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row-fluid">--}}
                    {{--<div class="span12">--}}
                        {{--<div class="widget box red">--}}
                            {{--<div class="widget-title">--}}
                                {{--<h4><i class="icon-reorder"></i>Input Masks</h4>--}}
                                {{--<div class="tools">--}}
                                    {{--<a href="javascript:;" class="collapse"></a>--}}
                                    {{--<a href="javascript:;" class="reload"></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="widget-body form">--}}
                                {{--<!-- BEGIN FORM-->--}}
                                {{--<form action="#" class="form-horizontal">--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Date 1</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<input class="span6 m-wrap" id="mask_date" type="text"  />--}}
                                            {{--<span class="help-inline">d/m/y</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Date 2</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<input class="span6 m-wrap" id="mask_date1" type="text"  />--}}
                                            {{--<span class="help-inline">change the placeholder</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Date 3</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<input class="span6 m-wrap" id="mask_date2" type="text"  />--}}
                                            {{--<span class="help-inline">multi-char placeholder</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Phone</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<input class="span6 m-wrap" id="mask_phone" type="text"  />--}}
                                            {{--<span class="help-inline">(999) 999-9999</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Tax ID</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<input class="span6 m-wrap" id="mask_tin" type="text" />--}}
                                            {{--<span class="help-inline">99-9999999</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Number</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<input class="span6 m-wrap" id="mask_number" type="text" />--}}
                                            {{--<span class="help-inline">mask "9" or mask "99" or ... mask "9999999999"</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Currency</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<input class="span6 m-wrap" id="mask_currency" type="text" />--}}
                                            {{--<span class="help-inline">123456  =>  € ___.__1.234,56</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Currency 2</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<input class="span6 m-wrap" id="mask_currency2" type="text" />--}}
                                            {{--<span class="help-inline">123456  =>  € ___.__1.234,56(left aligned)</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">SSN</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<input class="span6 m-wrap" id="mask_ssn" type="text" />--}}
                                            {{--<span class="help-inline">999-99-9999. remove the empty mask on blur or when not empty removes the optional trailing part</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                                {{--<!-- END FORM-->--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row-fluid">--}}
                    {{--<div class="span12">--}}
                        {{--<!-- BEGIN PORTLET-->--}}
                        {{--<div class="widget box purple">--}}
                            {{--<div class="widget-title">--}}
                                {{--<h4><i class="icon-reorder"></i>Tags Input</h4>--}}
                                {{--<div class="tools">--}}
                                    {{--<a href="javascript:;" class="collapse"></a>--}}
                                    {{--<a href="#portlet-config" data-toggle="modal" class="config"></a>--}}
                                    {{--<a href="javascript:;" class="reload"></a>--}}
                                    {{--<a href="javascript:;" class="remove"></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="widget-body form">--}}
                                {{--<!-- BEGIN FORM-->--}}
                                {{--<form action="#" class="form-horizontal">--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Default</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<input id="tags_1" type="text" class="m-wra tags" value="foo,bar,baz,roffle" />--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Fixed Width</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<input id="tags_2" type="text" class="m-wra tags medium" value="tag1,tag2" />--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                                {{--<!-- END FORM-->--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- END PORTLET-->--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row-fluid">--}}
                    {{--<div class="span12">--}}
                        {{--<!-- BEGIN PORTLET-->--}}
                        {{--<div class="widget box blue">--}}
                            {{--<div class="widget-title">--}}
                                {{--<h4><i class="icon-reorder"></i>File Upload</h4>--}}
                                {{--<div class="tools">--}}
                                    {{--<a href="javascript:;" class="collapse"></a>--}}
                                    {{--<a href="#portlet-config" data-toggle="modal" class="config"></a>--}}
                                    {{--<a href="javascript:;" class="reload"></a>--}}
                                    {{--<a href="javascript:;" class="remove"></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="widget-body form">--}}
                                {{--<!-- BEGIN FORM-->--}}
                                {{--<form action="#" class="form-horizontal">--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Default</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<input type="file" class="default" />--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Advanced</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<div class="fileupload fileupload-new" data-provides="fileupload">--}}
                                                {{--<div class="input-append">--}}
                                                    {{--<div class="uneditable-input">--}}
                                                        {{--<i class="icon-file fileupload-exists"></i>--}}
                                                        {{--<span class="fileupload-preview"></span>--}}
                                                    {{--</div>--}}
                                                    {{--<span class="btn btn-file">--}}
                                          {{--<span class="fileupload-new">Select file</span>--}}
                                          {{--<span class="fileupload-exists">Change</span>--}}
                                          {{--<input type="file" class="default" />--}}
                                          {{--</span>--}}
                                                    {{--<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Without input</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<div class="fileupload fileupload-new" data-provides="fileupload">--}}
                                       {{--<span class="btn btn-file">--}}
                                       {{--<span class="fileupload-new">Select file</span>--}}
                                       {{--<span class="fileupload-exists">Change</span>--}}
                                       {{--<input type="file" class="default" />--}}
                                       {{--</span>--}}
                                                {{--<span class="fileupload-preview"></span>--}}
                                                {{--<a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none"></a>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">IMAGE UPLOAD:</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<div class="fileupload fileupload-new" data-provides="fileupload">--}}
                                                {{--<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">--}}
                                                    {{--<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="" />--}}
                                                {{--</div>--}}
                                                {{--<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>--}}
                                                {{--<div>--}}
                                          {{--<span class="btn btn-file"><span class="fileupload-new">Select image</span>--}}
                                          {{--<span class="fileupload-exists">Change</span>--}}
                                          {{--<input type="file" class="default" /></span>--}}
                                                    {{--<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<span class="label label-important">NOTE!</span>--}}
                                            {{--<span>--}}
                                    {{--Attached image thumbnail is--}}
                                    {{--supported in Latest Firefox, Chrome, Opera,--}}
                                    {{--Safari and Internet Explorer 10 only--}}
                                    {{--</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                                {{--<!-- END FORM-->--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- END PORTLET-->--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row-fluid">--}}
                    {{--<div class="span12">--}}
                        {{--<!-- BEGIN PORTLET-->--}}
                        {{--<div class="widget box green">--}}
                            {{--<div class="widget-title">--}}
                                {{--<h4><i class="icon-reorder"></i>Color Pickers</h4>--}}
                                {{--<div class="tools">--}}
                                    {{--<a href="javascript:;" class="collapse"></a>--}}
                                    {{--<a href="#portlet-config" data-toggle="modal" class="config"></a>--}}
                                    {{--<a href="javascript:;" class="reload"></a>--}}
                                    {{--<a href="javascript:;" class="remove"></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="widget-body form">--}}
                                {{--<!-- BEGIN FORM-->--}}
                                {{--<form action="#" class="form-horizontal">--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Default</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<input type="text" class="colorpicker-default m-wrap" value="#8fff00" />--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">RGBA</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<input type="text" class="colorpicker-rgba m-wrap" value="rgb(0,194,255,0.78)" data-color-format="rgba" />--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">As Component</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<div class="input-append color colorpicker-default" data-color="#3865a8" data-color-format="rgba">--}}
                                                {{--<input type="text" class="m-wrap" value="#3865a8" readonly />--}}
                                                {{--<span class="add-on"><i style="background-color: #3865a8;"></i></span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                                {{--<!-- END FORM-->--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- END PORTLET-->--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row-fluid">--}}
                    {{--<div class="span12">--}}
                        {{--<!-- BEGIN PORTLET-->--}}
                        {{--<div class="widget box red">--}}
                            {{--<div class="widget-title">--}}
                                {{--<h4><i class="icon-reorder"></i>Time Pickers</h4>--}}
                                {{--<div class="tools">--}}
                                    {{--<a href="javascript:;" class="collapse"></a>--}}
                                    {{--<a href="#portlet-config" data-toggle="modal" class="config"></a>--}}
                                    {{--<a href="javascript:;" class="reload"></a>--}}
                                    {{--<a href="javascript:;" class="remove"></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="widget-body form">--}}
                                {{--<!-- BEGIN FORM-->--}}
                                {{--<form action="#" class="form-horizontal">--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Default Timepicker</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<div class="input-append bootstrap-timepicker-component">--}}
                                                {{--<input class="m-wrap m-ctrl-small timepicker-default" type="text" />--}}
                                                {{--<span class="add-on"><i class="icon-time"></i></span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">24hr Timepicker</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<div class="input-append bootstrap-timepicker-component">--}}
                                                {{--<input class="m-wrap m-ctrl-small timepicker-24" type="text" />--}}
                                                {{--<span class="add-on"><i class="icon-time"></i></span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                                {{--<!-- END FORM-->--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- END PORTLET-->--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row-fluid">--}}
                    {{--<div class="span12">--}}
                        {{--<!-- BEGIN PORTLET-->--}}
                        {{--<div class="widget box blue">--}}
                            {{--<div class="widget-title">--}}
                                {{--<h4><i class="icon-reorder"></i>--}}
                                    {{--Clockface Time Pickers--}}
                                {{--</h4>--}}
                                {{--<div class="tools">--}}
                                    {{--<a href="javascript:;" class="collapse"></a>--}}
                                    {{--<a href="#portlet-config" data-toggle="modal" class="config"></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="widget-body form">--}}
                                {{--<form action="#" class="form-horizontal">--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Input</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<input type="text" id="clockface_1" value="2:30 PM" data-format="hh:mm A" class="m-wrap small" />--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Button</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<div class="input-append">--}}
                                                {{--<input type="text" id="clockface_2" value="14:30" class="m-wrap small" readonly="" />--}}
                                                {{--<button class="btn" type="button" id="clockface_2_toggle-btn">--}}
                                                    {{--<i class="icon-time"></i>--}}
                                                {{--</button>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Inline</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<div id="clockface_3" class="well" style="padding: 0; float: left"></div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row-fluid">--}}
                    {{--<div class="span12">--}}
                        {{--<!-- BEGIN PORTLET-->--}}
                        {{--<div class="widget box grey">--}}
                            {{--<div class="widget-title">--}}
                                {{--<h4><i class="icon-reorder"></i>Date Pickers</h4>--}}
                                {{--<div class="tools">--}}
                                    {{--<a href="javascript:;" class="collapse"></a>--}}
                                    {{--<a href="#portlet-config" data-toggle="modal" class="config"></a>--}}
                                    {{--<a href="javascript:;" class="reload"></a>--}}
                                    {{--<a href="javascript:;" class="remove"></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="widget-body form">--}}
                                {{--<!-- BEGIN FORM-->--}}
                                {{--<form action="#" class="form-horizontal">--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Default datepicker</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<input class="m-wrap m-ctrl-medium date-picker" size="16" type="text" value="" />--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Starts with years view</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<div class="input-append date date-picker" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years">--}}
                                                {{--<input class="m-wrap m-ctrl-medium date-picker" size="16" type="text" value="" /><span class="add-on"><i class="icon-calendar"></i></span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Limit the view mode to months</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<div class="input-append date date-picker" data-date="102/2012" data-date-format="mm/yyyy" data-date-viewmode="years" data-date-minviewmode="months">--}}
                                                {{--<input class="m-wrap m-ctrl-medium date-picker" size="16" type="text" value="" /><span class="add-on"><i class="icon-calendar"></i></span>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                                {{--<!-- END FORM-->--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- END PORTLET-->--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row-fluid">--}}
                    {{--<div class="span12">--}}
                        {{--<!-- BEGIN PORTLET-->--}}
                        {{--<div class="widget box yellow">--}}
                            {{--<div class="widget-title">--}}
                                {{--<h4><i class="icon-reorder"></i>Date Range Pickers</h4>--}}
                                {{--<div class="tools">--}}
                                    {{--<a href="javascript:;" class="collapse"></a>--}}
                                    {{--<a href="#portlet-config" data-toggle="modal" class="config"></a>--}}
                                    {{--<a href="javascript:;" class="reload"></a>--}}
                                    {{--<a href="javascript:;" class="remove"></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="widget-body form">--}}
                                {{--<!-- BEGIN FORM-->--}}
                                {{--<form action="#" class="form-horizontal">--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Default Date Ranges</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<div class="input-prepend">--}}
                                                {{--<span class="add-on"><i class="icon-calendar"></i></span><input type="text" class="m-wrap m-ctrl-medium date-range" />--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Advance Date Ranges</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<div id="form-date-range" class="btn">--}}
                                                {{--<i class="icon-calendar"></i>--}}
                                                {{--&nbsp;<span></span>--}}
                                                {{--<b class="caret"></b>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                                {{--<!-- END FORM-->--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- END PORTLET-->--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row-fluid">--}}
                    {{--<div class="span12">--}}
                        {{--<!-- BEGIN EXTRAS PORTLET-->--}}
                        {{--<div class="widget box blue">--}}
                            {{--<div class="widget-title">--}}
                                {{--<h4><i class="icon-reorder"></i>Extras</h4>--}}
                                {{--<div class="tools">--}}
                                    {{--<a href="javascript:;" class="collapse"></a>--}}
                                    {{--<a href="#portlet-config" data-toggle="modal" class="config"></a>--}}
                                    {{--<a href="javascript:;" class="reload"></a>--}}
                                    {{--<a href="javascript:;" class="remove"></a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="widget-body form">--}}
                                {{--<!-- BEGIN FORM-->--}}
                                {{--<form action="#" class="form-horizontal">--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Right Action Input</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<div class="input-append">--}}
                                                {{--<input class="input-medium" type="text" />--}}
                                                {{--<div class="btn-group">--}}
                                                    {{--<button class="btn dropdown-toggle" data-toggle="dropdown">--}}
                                                        {{--Action <span class="caret"></span>--}}
                                                    {{--</button>--}}
                                                    {{--<ul class="dropdown-menu">--}}
                                                        {{--<li><a href="#">Action</a></li>--}}
                                                        {{--<li><a href="#">Another action</a></li>--}}
                                                        {{--<li><a href="#">Something else here</a></li>--}}
                                                        {{--<li class="divider"></li>--}}
                                                        {{--<li><a href="#">Separated link</a></li>--}}
                                                    {{--</ul>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Left Action Input</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<div class="input-prepend">--}}
                                                {{--<div class="btn-group">--}}
                                                    {{--<button class="btn dropdown-toggle" data-toggle="dropdown">--}}
                                                        {{--Action--}}
                                                        {{--<span class="caret"></span>--}}
                                                    {{--</button>--}}
                                                    {{--<ul class="dropdown-menu">--}}
                                                        {{--<li><a href="#">Action</a></li>--}}
                                                        {{--<li><a href="#">Another action</a></li>--}}
                                                        {{--<li><a href="#">Something else here</a></li>--}}
                                                        {{--<li class="divider"></li>--}}
                                                        {{--<li><a href="#">Separated link</a></li>--}}
                                                    {{--</ul>--}}
                                                {{--</div>--}}
                                                {{--<!-- /btn-group -->--}}
                                                {{--<input class="input-medium" type="text" />--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Basic Toggle Button</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<div class="basic-toggle-button">--}}
                                                {{--<input type="checkbox" class="toggle" checked="checked" />--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Toggle Buttons with Text</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<div class="text-toggle-button">--}}
                                                {{--<input type="checkbox" class="toggle" />--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Styled Toggle Button</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<div class="danger-toggle-button">--}}
                                                {{--<input type="checkbox" class="toggle" checked="checked" />--}}
                                            {{--</div>--}}
                                            {{--<div class="info-toggle-button">--}}
                                                {{--<input type="checkbox" class="toggle" checked="checked" />--}}
                                            {{--</div>--}}
                                            {{--<div class="success-toggle-button">--}}
                                                {{--<input type="checkbox" class="toggle" checked="checked" />--}}
                                            {{--</div>--}}
                                            {{--<div class="warning-toggle-button">--}}
                                                {{--<input type="checkbox" class="toggle" checked="checked" />--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">Height Toggle Button</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<div class="height-toggle-button">--}}
                                                {{--<input type="checkbox" class="toggle" checked="checked" />--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">WYSIWYG Editor</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<textarea class="span12 wysihtml5 m-wrap" rows="6"></textarea>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="control-group">--}}
                                        {{--<label class="control-label">CKEditor</label>--}}
                                        {{--<div class="controls">--}}
                                            {{--<textarea class="span12 ckeditor m-wrap" name="editor1" rows="6"></textarea>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<div class="form-actions">--}}
                                        {{--<button type="submit" class="btn btn-primary">Submit</button>--}}
                                        {{--<button type="button" class="btn">Cancel</button>--}}
                                    {{--</div>--}}
                                {{--</form>--}}
                                {{--<!-- END FORM-->--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!-- END EXTRAS PORTLET-->--}}
                    {{--</div>--}}
                {{--</div>--}}
                @yield('content')
                <!-- END PAGE CONTENT-->
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
<script type="text/javascript" src="{{ URL::asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/chosen-bootstrap/chosen/chosen.jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/select2/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/clockface/js/clockface.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/bootstrap-daterangepicker/date.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('assets/plugins/jquery.input-ip-address-control-1.0.min.js') }}"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ URL::asset('assets/scripts/app.js') }}"></script>
<script src="{{ URL::asset('assets/scripts/form-components.js') }}"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        // initiate layout and plugins
        App.init();
        FormComponents.init();
    });
</script>
@stack('js')
</body>
<!-- END BODY -->
</html>
