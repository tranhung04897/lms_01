<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>@lang('admin.title')</title>
        <link href="img/favicon.png" rel="icon">
        <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

        {{ Html::style(asset('js/lib/bootstrap/css/bootstrap.min.css')) }}
        {{ Html::style(asset('js/lib/font-awesome/css/font-awesome.css')) }}
        {{ Html::style(asset('css/zabuto_calendar.css')) }}
        {{ Html::style(asset('lib/gritter/css/jquery.gritter.css')) }}
        {{ Html::style(asset('css/style.css')) }}
        {{ Html::style(asset('css/style-responsive.css')) }}
        {{ Html::style(asset('css/mystyle.css')) }}
        {{ Html::script(asset('js/lib/chart-master/Chart.js')) }}
        <link rel="stylesheet" type="text/css" href="https://skywalkapps.github.io/bootstrap-notifications/stylesheets/bootstrap-notifications.css">
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    </head>
    <body>
    <section id="container">
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <a href="index.html" class="logo"><b>@lang('admin.logo')</b></a>
            <div class="nav notify-row" id="top_menu">
                <ul class="nav top-menu">
                    <li class="dropdown dropdown-notifications">
                        <a href="#notifications-panel" class="dropdown-toggle" data-toggle="dropdown">
                            <i data-count="0" class="glyphicon glyphicon-bell notification-icon"></i>
                        </a>

                        <div class="dropdown-container">
                            <div class="dropdown-toolbar">
                                <div class="dropdown-toolbar-actions">
                                    <a href="#">Mark all as read</a>
                                </div>
                                <h3 class="dropdown-toolbar-title">Notifications (<span class="notif-count">0</span>)</h3>
                            </div>
                            <ul class="dropdown-menu">
                            </ul>
                            <div class="dropdown-footer text-center">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="{{route('login.create')}}">@lang('admin.logout-link')</a></li>
                </ul>
            </div>
        </header>
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p>
                    <h5 class="centered">{{Auth::user()->name}}</h5>
                    <li class="mt">
                        <a class="active" href="index.html">
                            <i class="fa fa-dashboard"></i>
                            <span>@lang('admin.dashboard')</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-briefcase"></i>
                            <span>@lang('admin.menu-table')</span>
                        </a>
                        <ul class="sub">
                            <li><a href="/">@lang('admin.sub-category')</a></li>
                            <li><a href="/">@lang('admin.sub-book')</a></li>
                            <li><a href="/">@lang('admin.sub-author')</a></li>
                            <li><a href="/">@lang('admin.sub-publisher')</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-users"></i>
                            <span>@lang('admin.menu-user')</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-comments"></i>
                            <span>@lang('admin.menu-comment')</span>
                        </a>
                    </li>
                    <li>
                        <a href="google_maps.html">
                            <i class="fa fa-map-marker"></i>
                            <span>@lang('admin.google-map')</span>
                        </a>
                    </li>
                </ul>
            </div>
        </aside>
        <section id="main-content">
            <section class="wrapper">
                @yield('content')
            </section>
        </section>
        <footer class="site-footer">
            <div class="text-center">
                <p>
                    &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
                </p>
                <div class="credits">
                    Created with Dashio template by <a href="https://templatemag.com/">TemplateMag</a>
                </div>
                <a href="index.html#" class="go-top">
                    <i class="fa fa-angle-up"></i>
                </a>
            </div>
        </footer>
    </section>
    {{ Html::script(asset('js/lib/jquery/jquery.min.js')) }}
    {{ Html::script(asset('js/lib/bootstrap/js/bootstrap.min.js')) }}
    {{ Html::script(asset('js/lib/jquery.scrollTo.min.js')) }}
    {{ Html::script(asset('js/lib/jquery.nicescroll.js')) }}
    {{ Html::script(asset('js/lib/jquery.sparkline.js')) }}
    {{ Html::script(asset('/js/lib/jquery.dcjqaccordion.2.7.js')) }}
    {{ Html::script(asset('js/lib/common-scripts.js')) }}
    {{ Html::script(asset('js/lib/gritter/js/jquery.gritter.js')) }}
    {{ Html::style(asset('js/lib/gritter/css/jquery.gritter.css')) }}
    {{ Html::script(asset('js/lib/gritter-conf.js')) }}
    {{ Html::script(asset('js/lib/sparkline-chart.js')) }}
    {{ Html::script(asset('js/lib/zabuto_calendar.js')) }}
    {{ Html::script(asset('js/ajax/welcome.js')) }}
    {{ Html::script(asset('js/ajax/edituser.js')) }}
    {{ Html::script(asset('https://js.pusher.com/4.3/pusher.min.js')) }}
    <script type="text/javascript">
        var notificationsWrapper   = $('.dropdown-notifications');
        var notificationsToggle    = notificationsWrapper.find('a[data-toggle]');
        var notificationsCountElem = notificationsToggle.find('i[data-count]');
        var notificationsCount     = parseInt(notificationsCountElem.data('count'));
        var notifications          = notificationsWrapper.find('ul.dropdown-menu');


        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('eab8eefadd1424995667', {
            cluster: 'ap1',
            encrypted: true
        });

        // Subscribe to the channel we specified in our Laravel Event
        var channel = pusher.subscribe('Notify');

        // Bind a function to a Event (the full Laravel class)
        channel.bind('send-message', function(data) {
            var existingNotifications = notifications.html();
            var avatar = Math.floor(Math.random() * (71 - 20 + 1)) + 20;
            var newNotificationHtml = `
          <li class="notification active">
              <div class="media">
                <div class="media-left">
                  <div class="media-object">
                    <img src="https://api.adorable.io/avatars/71/`+avatar+`.png" class="img-circle" alt="50x50" style="width: 50px; height: 50px;">
                  </div>
                </div>
                <div class="media-body">
                  <strong class="notification-title">`+data.name+`</strong>
                  <p class="notification-desc">`+data.content+`</p>
                  <div class="notification-meta">
                    <small class="timestamp">about a minute ago</small>
                  </div>
                </div>
              </div>
          </li>
        `;
            notifications.html(newNotificationHtml + existingNotifications);

            notificationsCount += 1;
            notificationsCountElem.attr('data-count', notificationsCount);
            notificationsWrapper.find('.notif-count').text(notificationsCount);
            notificationsWrapper.show();
        });
    </script>
    </body>
</html>
