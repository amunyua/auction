@extends('layouts.dashboard-layout')
@section('title', 'Dashboard')
@section('page-title', 'Dashboard')
@section('page-subtitle', 'Statistics and more')

@section('breadcrumb')
    <li>
        <i class="icon-home"></i>
        <a href="{{ url('/home') }}">Dashboard</a>
        {{--<span class="icon-angle-right"></span>--}}
    </li>
{{--    <li><a href="{{ url('/home') }}">Dashboard</a></li>--}}
@endsection

@section('content')
    <!-- BEGIN OVERVIEW STATISTIC BARS-->
    <div class="row-fluid stats-overview-cont">
        <div class="span2 responsive" data-tablet="span4" data-desktop="span2">
            <div class="stats-overview block clearfix">
                <div class="display stat ok huge">
                    <span class="line-chart">5, 6, 7, 11, 14, 10, 15, 19, 15, 2</span>
                    <div class="percent">+66%</div>
                </div>
                <div class="details">
                    <div class="title">Users</div>
                    <div class="numbers">1360</div>
                </div>
                <div class="progress progress-info">
                    <div class="bar" style="width: 66%"></div>
                </div>
            </div>
        </div>
        <div class="span2 responsive" data-tablet="span4" data-desktop="span2">
            <div class="stats-overview block clearfix">
                <div class="display stat good huge">
                    <span class="line-chart">2,6,8,12, 11, 15, 16, 11, 16, 11, 10, 3, 7, 8, 12, 19</span>
                    <div class="percent">+16%</div>
                </div>
                <div class="details">
                    <div class="title">Site Visits</div>
                    <div class="numbers">1800</div>
                    <div class="progress progress-warning">
                        <div class="bar" style="width: 16%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="span2 responsive " data-tablet="span4" data-desktop="span2">
            <div class="stats-overview block clearfix">
                <div class="display stat bad huge">
                    <span class="line-chart">2,6,8,11, 14, 11, 12, 13, 15, 12, 9, 5, 11, 12, 15, 9,3</span>
                    <div class="percent">+6%</div>
                </div>
                <div class="details">
                    <div class="title">Orders</div>
                    <div class="numbers">509</div>
                    <div class="progress progress-success">
                        <div class="bar" style="width: 16%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="span2 responsive " data-tablet="span4 fix-margin" data-desktop="span2">
            <div class="stats-overview block clearfix">
                <div class="display stat good huge">
                    <span class="bar-chart">1,4,9,12, 10, 11, 12, 15, 12, 11, 9, 12, 15, 19, 14, 13, 15</span>
                    <div class="percent">+86%</div>
                </div>
                <div class="details">
                    <div class="title">Revenue</div>
                    <div class="numbers">1550</div>
                    <div class="progress progress-warning">
                        <div class="bar" style="width: 56%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="span2 responsive " data-tablet="span4" data-desktop="span2">
            <div class="stats-overview block clearfix">
                <div class="display stat ok huge">
                    <span class="line-chart">2,6,8,12, 11, 15, 16, 17, 14, 12, 10, 8, 10, 2, 4, 12, 19</span>
                    <div class="percent">+72%</div>
                </div>
                <div class="details">
                    <div class="title">Sales</div>
                    <div class="numbers">9600</div>
                    <div class="progress progress-danger">
                        <div class="bar" style="width: 72%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="span2 responsive" data-tablet="span4" data-desktop="span2">
            <div class="stats-overview block clearfix">
                <div class="display stat bad huge">
                    <span class="line-chart">1,7,9,11, 14, 12, 6, 7, 4, 2, 9, 8, 11, 12, 14, 12, 10</span>
                    <div class="percent">+15%</div>
                </div>
                <div class="details">
                    <div class="title">Stock</div>
                    <div class="numbers">2090</div>
                    <div class="progress progress-success">
                        <div class="bar" style="width: 15%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END OVERVIEW STATISTIC BARS-->
    <div class="row-fluid">
        <div class="span8">
            <!-- BEGIN SITE VISITS PORTLET-->
            <div class="widget">
                <div class="widget-title">
                    <h4><i class="icon-signal"></i>Site Visits</h4>
                    <span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
									<a href="javascript:;" class="icon-refresh"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                </div>
                <div class="widget-body">
                    <div id="site_statistics_loading">
                        <img src="{{ URL::asset('assets/img/loading.gif') }}" alt="loading" />
                    </div>
                    <div id="site_statistics_content" class="hide">
                        <div class="btn-toolbar no-top-space clearfix">
                            <div class="btn-group" data-toggle="buttons-radio">
                                <button class="btn btn-mini">Asia</button><button class="btn btn-mini">Europe</button><button class="btn btn-mini">USA</button>
                            </div>
                            <div class="btn-group pull-right" data-toggle="buttons-radio">
                                <button class="btn btn-mini active">Sales</button><button class="btn btn-mini">
                                    <span class="visible-phone">In</span>
                                    <span class="hidden-phone">Income</span>
                                </button><button class="btn btn-mini">Stock</button>
                            </div>
                        </div>
                        <div id="site_statistics" class="chart"></div>
                    </div>
                </div>
            </div>
            <!-- END SITE VISITS PORTLET-->
        </div>
        <div class="span4">
            <!-- BEGIN NOTIFICATIONS PORTLET-->
            <div class="widget">
                <div class="widget-title">
                    <h4><i class="icon-bell"></i>Notifications</h4>
                    <span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
									<a href="javascript:;" class="icon-refresh"></a>
									</span>
                </div>
                <div class="widget-body">
                    <ul class="item-list scroller padding" data-height="307" data-always-visible="1">
                        <li>
                            <span class="label label-success"><i class="icon-bell"></i></span>
                            <span>New user registered.</span>
                            <span class="small italic">Just now</span>
                        </li>
                        <li>
                            <span class="label label-success"><i class="icon-bell"></i></span>
                            <span>New order received.</span>
                            <span class="small italic">15 mins ago</span>
                        </li>
                        <li>
                            <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                            <span>Alerting a user account balance.</span>
                            <span class="small italic">2 hrs ago</span>
                        </li>
                        <li>
                            <span class="label label-important"><i class="icon-bolt"></i></span>
                            <span>Alerting administrators staff.</span>
                            <span class="small italic">11 hrs ago</span>
                        </li>
                        <li>
                            <span class="label label-important"><i class="icon-bolt"></i></span>
                            <span>Messages are not sent to users.</span>
                            <span class="small italic">14 hrs ago</span>
                        </li>
                        <li>
                            <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                            <span>Web server #12 failed to relosd.</span>
                            <span class="small italic">2 days ago</span>
                        </li>
                        <li>
                            <span class="label label-success"><i class="icon-bell"></i></span>
                            <span>New order received.</span>
                            <span class="small italic">15 mins ago</span>
                        </li>
                        <li>
                            <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                            <span>Alerting a user account balance.</span>
                            <span class="small italic">2 hrs ago</span>
                        </li>
                        <li>
                            <span class="label label-important"><i class="icon-bolt"></i></span>
                            <span>Alerting administrators support staff.</span>
                            <span class="small italic">11 hrs ago</span>
                        </li>
                        <li>
                            <span class="label label-important"><i class="icon-bolt"></i></span>
                            <span>Messages are not sent to users.</span>
                            <span class="small italic">14 hrs ago</span>
                        </li>
                        <li>
                            <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                            <span>Web server #12 failed to relosd.</span>
                            <span class="small italic">2 days ago</span>
                        </li>
                        <li>
                            <span class="label label-success"><i class="icon-bell"></i></span>
                            <span>New order received.</span>
                            <span class="small italic">15 mins ago</span>
                        </li>
                        <li>
                            <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                            <span>Alerting a user account balance.</span>
                            <span class="small italic">2 hrs ago</span>
                        </li>
                        <li>
                            <span class="label label-important"><i class="icon-bolt"></i></span>
                            <span>Alerting administrators support staff.</span>
                            <span class="small italic">11 hrs ago</span>
                        </li>
                        <li>
                            <span class="label label-important"><i class="icon-bolt"></i></span>
                            <span>Messages are not sent to users.</span>
                            <span class="small italic">14 hrs ago</span>
                        </li>
                        <li>
                            <span class="label label-warning"><i class="icon-bullhorn"></i></span>
                            <span>Web server #12 failed to relosd.</span>
                            <span class="small italic">2 days ago</span>
                        </li>
                    </ul>
                    <div class="space5"></div>
                    <a href="#" class="pull-right">View all notifications</a>
                    <div class="clearfix no-top-space no-bottom-space"></div>
                </div>
            </div>
            <!-- END NOTIFICATIONS PORTLET-->
        </div>
    </div>
    <!-- BEGIN OVERVIEW STATISTIC BLOCKS-->
    <div class="row-fluid">
        <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
            <div class="circle-stat block">
                <div class="visual">
                    <input class="knobify" data-width="115" data-thickness=".2" data-skin="tron" data-displayprevious="true" value="+89" data-max="100" data-min="-100" />
                </div>
                <div class="details">
                    <div class="title">Unique Visits <i class="icon-caret-up"></i></div>
                    <div class="number">10112</div>
                    <span class="label label-success"><i class="icon-map-marker"></i>123</span>
                    <span class="label label-warning"><i class="icon-comment"></i>3</span>
                    <span class="label label-info"><i class="icon-bullhorn"></i>3</span>
                </div>
            </div>
        </div>
        <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
            <div class="circle-stat block">
                <div class="visual">
                    <input class="knobify" data-width="115" data-fgcolor="#66EE66" data-thickness=".2" data-skin="tron" data-displayprevious="true" value="+19" data-max="100" data-min="-100" />
                </div>
                <div class="details">
                    <div class="title">New Users <i class="icon-caret-up"></i></div>
                    <div class="number">987</div>
                    <span class="label label-important"><i class="icon-bullhorn"></i>567</span>
                    <span class="label"><i class="icon-plus"></i>16</span>
                </div>
            </div>
        </div>
        <div class="span3 responsive" data-tablet="span6 fix-margin" data-desktop="span3">
            <div class="circle-stat block">
                <div class="visual">
                    <input class="knobify" data-width="115" data-fgcolor="#e23e29" data-thickness=".2" data-skin="tron" data-displayprevious="true" value="-12" data-max="100" data-min="-100" />
                </div>
                <div class="details">
                    <div class="title">Downtime <i class="icon-caret-down down"></i></div>
                    <div class="number">0.01%</div>
                    <span class="label label-info"><i class="icon-bookmark-empty"></i>23</span>
                    <span class="label label-warning"><i class="icon-ok"></i>31</span>
                    <span class="label label-success"><i class="icon-briefcase"></i>39</span>
                </div>
            </div>
        </div>
        <div class="span3 responsive" data-tablet="span6" data-desktop="span3">
            <div class="circle-stat block">
                <div class="visual">
                    <input class="knobify" data-width="115" data-fgcolor="#fdbb39" data-thickness=".2" data-skin="tron" data-displayprevious="true" value="+58" data-max="100" data-min="-100" />
                </div>
                <div class="details">
                    <div class="title">Profit <i class="icon-caret-up"></i></div>
                    <div class="number">1120.32$</div>
                    <span class="label label-success"><i class="icon-comment"></i>453</span>
                    <span class="label label-inverse"><i class="icon-globe"></i>123</span>
                </div>
            </div>
        </div>
    </div>
    <!-- END OVERVIEW STATISTIC BLOCKS-->
    <div class="row-fluid">
        <div class="span6">
            <!-- BEGIN SERVER LOAD PORTLET-->
            <div class="widget">
                <div class="widget-title">
                    <h4><i class="icon-cogs"></i>Server Load</h4>
                    <span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
									<a href="javascript:;" class="icon-refresh"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                </div>
                <div class="widget-body">
                    <div id="load_statistics_loading">
                        <img src="{{ URL::asset('assets/img/loading.gif') }}" alt="loading" />
                    </div>
                    <div id="load_statistics_content" class="hide">
                        <div id="load_statistics" class="chart"></div>
                        <div class="btn-toolbar no-bottom-space clearfix">
                            <div class="btn-group" data-toggle="buttons-radio">
                                <button class="btn btn-mini">Web</button><button class="btn btn-mini">Database</button><button class="btn btn-mini">Static</button>
                            </div>
                            <div class="btn-group pull-right" data-toggle="buttons-radio">
                                <button class="btn btn-mini active">Asia</button><button class="btn btn-mini">
                                    <span class="visible-phone">Eur</span>
                                    <span class="hidden-phone">Europe</span>
                                </button><button class="btn btn-mini">USA</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SERVER LOAD PORTLET-->
        </div>
        <div class="span6">
            <!-- BEGIN REGIONAL STATS PORTLET-->
            <div class="widget">
                <div class="widget-title">
                    <h4><i class="icon-globe"></i>Regional Stats</h4>
                    <span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
									<a href="javascript:;" class="icon-refresh"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                </div>
                <div class="widget-body">
                    <div id="region_statistics_loading">
                        <img src="{{ URL::asset('assets/img/loading.gif') }}" alt="loading" />
                    </div>
                    <div id="region_statistics_content" class="hide">
                        <div class="btn-toolbar no-top-space clearfix">
                            <div class="btn-group" data-toggle="buttons-radio">
                                <button class="btn btn-mini active">Users</button><button class="btn btn-mini">Orders</button><button class="btn btn-mini">Income</button>
                            </div>
                            <div class="btn-group pull-right">
                                <button class="btn btn-mini dropdown-t	oggle" data-toggle="dropdown">
                                    Select Region
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="javascript:;" id="regional_stat_world">World</a></li>
                                    <li><a href="javascript:;" id="regional_stat_usa">USA</a></li>
                                    <li><a href="javascript:;" id="regional_stat_europe">Europe</a></li>
                                    <li><a href="javascript:;" id="regional_stat_russia">Russia</a></li>
                                    <li><a href="javascript:;" id="regional_stat_germany">Germany</a></li>
                                </ul>
                            </div>
                        </div>
                        <div id="vmap_world" class="vmaps  chart hide"></div>
                        <div id="vmap_usa" class="vmaps chart hide"></div>
                        <div id="vmap_europe" class="vmaps chart hide"></div>
                        <div id="vmap_russia" class="vmaps chart hide"></div>
                        <div id="vmap_germany" class="vmaps chart hide"></div>
                    </div>
                </div>
            </div>
            <!-- END REGIONAL STATS PORTLET-->
        </div>
    </div>
    <div class="row-fluid">
        <div class="span6">
            <!-- BEGIN RECENT ORDERS PORTLET-->
            <div class="widget">
                <div class="widget-title">
                    <h4><i class="icon-shopping-cart"></i>Recent Orders</h4>
                    <span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
									<a href="javascript:;" class="icon-refresh"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                </div>
                <div class="widget-body">
                    <table class="table table-striped table-bordered table-advance table-hover">
                        <thead>
                        <tr>
                            <th><i class="icon-briefcase"></i> <span class="hidden-phone">From</span></th>
                            <th><i class="icon-user"></i> <span class="hidden-phone ">Contact</span></th>
                            <th><i class="icon-shopping-cart"> </i><span class="hidden-phone">Amount</span></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="highlight">
                                <div class="success"></div>
                                <a href="#">Ikea</a>
                            </td>
                            <td>Elis Yong</td>
                            <td>4560.60$
                                <span class="label label-warning label-mini">Paid</span>
                                <a href="#" class="btn btn-mini visible-phone hidden-tablet">View</a>
                            </td>
                            <td><a href="#" class="btn btn-mini hidden-phone hidden-tablet">View</a></td>
                        </tr>
                        <tr>
                            <td class="highlight">
                                <div class="important"></div>
                                <a href="#">Apple</a>
                            </td>
                            <td>Daniel Kim</td>
                            <td>360.60$ <a href="#" class="btn btn-mini visible-phone hidden-tablet">View</a> </td>
                            <td><a href="#" class="btn btn-mini hidden-phone hidden-tablet">View</a></td>
                        </tr>
                        <tr>
                            <td class="highlight">
                                <div class="info"></div>
                                <a href="#">37Singals</a>
                            </td>
                            <td>Edward Cooper</td>
                            <td>960.50$
                                <span class="label label-success label-mini">Pending</span>
                                <a href="#" class="btn btn-mini visible-phone hidden-tablet">View</a>
                            </td>
                            <td><a href="#" class="btn btn-mini hidden-phone hidden-tablet">View</a></td>
                        </tr>
                        <tr>
                            <td class="highlight">
                                <div class="warning"></div>
                                <a href="#">Google</a>
                            </td>
                            <td>Paris Simpson</td>
                            <td>1101.60$
                                <span class="label label-success label-mini">Pending</span>
                                <a href="#" class="btn btn-mini visible-phone hidden-tablet">View</a>
                            </td>
                            <td><a href="#" class="btn btn-mini hidden-phone hidden-tablet">View</a></td>
                        </tr>
                        <tr>
                            <td class="highlight">
                                <div class="success"></div>
                                <a href="#">Ikea</a>
                            </td>
                            <td>Elis Yong</td>
                            <td>4560.60$
                                <span class="label label-warning label-mini">Paid</span>
                                <a href="#" class="btn btn-mini visible-phone hidden-tablet">View</a>
                            </td>
                            <td><a href="#" class="btn btn-mini hidden-phone hidden-tablet">View</a></td>
                        </tr>
                        <tr>
                            <td class="highlight">
                                <div class="warning"></div>
                                <a href="#">Google</a>
                            </td>
                            <td>Paris Simpson</td>
                            <td>1101.60$
                                <span class="label label-success label-mini">Pending</span>
                                <a href="#" class="btn btn-mini visible-phone hidden-tablet">View</a>
                            </td>
                            <td><a href="#" class="btn btn-mini hidden-phone hidden-tablet">View</a></td>
                        </tr>
                        <tr>
                            <td class="highlight">
                                <div class="important"></div>
                                <a href="#">Apple</a>
                            </td>
                            <td>Daniel Kim</td>
                            <td>360.60$ <a href="#" class="btn btn-mini visible-phone hidden-tablet">View</a> </td>
                            <td><a href="#" class="btn btn-mini hidden-phone hidden-tablet">View</a></td>
                        </tr>
                        <tr>
                            <td class="highlight">
                                <div class="warning"></div>
                                <a href="#">Google</a>
                            </td>
                            <td>Paris Simpson</td>
                            <td>1101.60$
                                <span class="label label-success label-mini">Pending</span>
                                <a href="#" class="btn btn-mini visible-phone hidden-tablet">View</a>
                            </td>
                            <td><a href="#" class="btn btn-mini hidden-phone hidden-tablet">View</a></td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="space7"></div>
                    <div class="clearfix">
                        <a href="#" class="btn btn-mini pull-right">All Orders</a>
                    </div>
                </div>
            </div>
            <!-- END RECENT ORDERS PORTLET-->
        </div>
        <div class="span6">
            <!-- BEGIN CHAT PORTLET-->
            <div class="widget" id="chats">
                <div class="widget-title">
                    <h4><i class="icon-tasks"></i>Chats</h4>
                    <span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
									<a href="javascript:;" class="icon-refresh"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                </div>
                <div class="widget-body">
                    <div class="scroller" data-height="322px" data-always-visible="1" data-rail-visible1="1">
                        <ul class="chats">
                            <li class="in">
                                <img class="avatar" alt="" src="{{ URL::asset('assets/img/avatar1.jpg') }}" />
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="#" class="name">Mark King</a>
                                    <span class="datetime">at Jul 25, 2012 11:09</span>
                                    <span class="body">
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</span>
                                </div>
                            </li>
                            <li class="out">
                                <img class="avatar" alt="" src="{{ URL::asset('assets/img/avatar2.jpg') }}" />
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="#" class="name">Lisa Wong</a>
                                    <span class="datetime">at Jul 25, 2012 11:09</span>
                                    <span class="body">
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</span>
                                </div>
                            </li>
                            <li class="in">
                                <img class="avatar" alt="" src="{{ URL::asset('assets/img/avatar1.jpg') }}" />
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="#" class="name">Mark King</a>
                                    <span class="datetime">at Jul 25, 2012 11:09</span>
                                    <span class="body">
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</span>
                                </div>
                            </li>
                            <li class="out">
                                <img class="avatar" alt="" src="{{ URL::asset('assets/img/avatar3.jpg') }}" />
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="#" class="name">Richard Doe</a>
                                    <span class="datetime">at Jul 25, 2012 11:09</span>
                                    <span class="body">
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</span>
                                </div>
                            </li>
                            <li class="in">
                                <img class="avatar" alt="" src="{{ URL::asset('assets/img/avatar3.jpg') }}" />
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="#" class="name">Richard Doe</a>
                                    <span class="datetime">at Jul 25, 2012 11:09</span>
                                    <span class="body">
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</span>
                                </div>
                            </li>
                            <li class="out">
                                <img class="avatar" alt="" src="{{ URL::asset('assets/img/avatar1.jpg') }}" />
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="#" class="name">Mark King</a>
                                    <span class="datetime">at Jul 25, 2012 11:09</span>
                                    <span class="body">
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</span>
                                </div>
                            </li>
                            <li class="in">
                                <img class="avatar" alt="" src="{{ URL::asset('assets/img/avatar3.jpg') }}" />
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="#" class="name">Richard Doe</a>
                                    <span class="datetime">at Jul 25, 2012 11:09</span>
                                    <span class="body">
													Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
													sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
													</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="chat-form">
                        <div class="input-cont">
                            <input type="text" placeholder="Type a message here..." />
                        </div>
                        <div class="btn-cont">
                            <a href="javascript:;" class="btn btn-primary"><i class="icon-ok icon-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END CHAT PORTLET-->
        </div>
    </div>
    <div class="row-fluid">
        <div class="span8 responsive" data-tablet="span12 fix-margin" data-desktop="span8">
            <!-- BEGIN CALENDAR PORTLET-->
            <div class="widget">
                <div class="widget-title">
                    <h4><i class="icon-ok"></i>Calendar</h4>
                    <span class="tools">
									<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
									<a href="javascript:;" class="icon-refresh"></a>
									</span>
                </div>
                <div class="widget-body">
                    <div id="calendar" class="has-toolbar"></div>
                </div>
            </div>
            <!-- END CALENDAR PORTLET-->
        </div>
        <div class="span4 responsive" data-tablet="span12 fix-margin" data-desktop="span4">
            <!-- BEGIN TODO LIST PORTLET-->
            <div class="widget">
                <div class="widget-title">
                    <h4><i class="icon-tasks"></i>To Do List</h4>
                    <span class="tools">
									<a href="javascript:;" class="icon-chevron-down"></a>
									<a href="#widget-config" data-toggle="modal" class="icon-wrench"></a>
									<a href="javascript:;" class="icon-refresh"></a>
									<a href="javascript:;" class="icon-remove"></a>
									</span>
                </div>
                <div class="widget-body">
                    <ul class="todo-list">
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <a href="">Project Anual Meeting.</a>
                                </div>
                            </div>
                            <div class="col2">
                                <span class="label label-important"><i class="icon-bell"></i>Today</span>
                                <span class="actions">
												<a href="#" class="icon"><i class="icon-remove"></i></a>
												<a href="#" class="icon"><i class="icon-ok"></i></a>
												</span>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <a href="">Project Status Update.</a>
                                </div>
                            </div>
                            <div class="col2">
                                <span class="label label-important"><i class="icon-bell"></i>4.30PM</span>
                                <span class="actions">
												<a href="#" class="icon"><i class="icon-remove"></i></a>
												<a href="#" class="icon"><i class="icon-ok"></i></a>
												</span>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <a href="">Upgrage web server OS.</a>
                                </div>
                            </div>
                            <div class="col2">
                                <span class="label label-success"><i class="icon-bell"></i>13 Dec</span>
                                <span class="actions">
												<a href="#" class="icon"><i class="icon-remove"></i></a>
												<a href="#" class="icon"><i class="icon-ok"></i></a>
												</span>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <a href="">Weekly technical support report.</a>
                                </div>
                            </div>
                            <div class="col2">
                                <span class="label label-success"><i class="icon-bell"></i>11 Dec</span>
                                <span class="actions">
												<a href="#" class="icon"><i class="icon-remove"></i></a>
												<a href="#" class="icon"><i class="icon-ok"></i></a>
												</span>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <a href="">Project Anual Meeting.</a>
                                </div>
                            </div>
                            <div class="col2">
                                <span class="label label-important"><i class="icon-bell"></i>Today</span>
                                <span class="actions">
												<a href="#" class="icon"><i class="icon-remove"></i></a>
												<a href="#" class="icon"><i class="icon-ok"></i></a>
												</span>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <a href="">Project Status Update.</a>
                                </div>
                            </div>
                            <div class="col2">
                                <span class="label label-important"><i class="icon-bell"></i>4.30PM</span>
                                <span class="actions">
												<a href="#" class="icon"><i class="icon-remove"></i></a>
												<a href="#" class="icon"><i class="icon-ok"></i></a>
												</span>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <a href="">Project Status Update.</a>
                                </div>
                            </div>
                            <div class="col2">
                                <span class="label label-important"><i class="icon-bell"></i>4.30PM</span>
                                <span class="actions">
												<a href="#" class="icon"><i class="icon-remove"></i></a>
												<a href="#" class="icon"><i class="icon-ok"></i></a>
												</span>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <a href="">Prepare project materials.</a>
                                </div>
                            </div>
                            <div class="col2">
                                <span class="label label-warning"><i class="icon-bell"></i>09 Feb</span>
                                <span class="actions">
												<a href="#" class="icon"><i class="icon-remove"></i></a>
												<a href="#" class="icon"><i class="icon-ok"></i></a>
												</span>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <a href="">Project Status Update.</a>
                                </div>
                            </div>
                            <div class="col2">
                                <span class="label label-important"><i class="icon-bell"></i>4.30PM</span>
                                <span class="actions">
												<a href="#" class="icon"><i class="icon-remove"></i></a>
												<a href="#" class="icon"><i class="icon-ok"></i></a>
												</span>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <a href="">Project Anual Meeting.</a>
                                </div>
                            </div>
                            <div class="col2">
                                <span class="label label-important"><i class="icon-bell"></i>Today</span>
                                <span class="actions">
												<a href="#" class="icon"><i class="icon-remove"></i></a>
												<a href="#" class="icon"><i class="icon-ok"></i></a>
												</span>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <a href="">Prepare project materials.</a>
                                </div>
                            </div>
                            <div class="col2">
                                <span class="label label-warning"><i class="icon-bell"></i>09 Feb</span>
                                <span class="actions">
												<a href="#" class="icon"><i class="icon-remove"></i></a>
												<a href="#" class="icon"><i class="icon-ok"></i></a>
												</span>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <a href="">Update promotion rates.</a>
                                </div>
                            </div>
                            <div class="col2">
                                <span class="label label-reverse"><i class="icon-bell"></i>12 May</span>
                                <span class="actions">
												<a href="#" class="icon"><i class="icon-remove"></i></a>
												<a href="#" class="icon"><i class="icon-ok"></i></a>
												</span>
                            </div>
                        </li>
                        <li>
                            <div class="col1">
                                <div class="cont">
                                    <a href="">Project Status Update.</a>
                                </div>
                            </div>
                            <div class="col2">
                                <span class="label label-important"><i class="icon-bell"></i>4.30PM</span>
                                <span class="actions">
												<a href="#" class="icon"><i class="icon-remove"></i></a>
												<a href="#" class="icon"><i class="icon-ok"></i></a>
												</span>
                            </div>
                        </li>
                    </ul>
                    <div class="space10"></div>
                    <a href="#" class="pull-right">View all todo list</a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- END CALENDAR PORTLET-->
        </div>
    </div>
@endsection