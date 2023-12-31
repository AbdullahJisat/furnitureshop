<!DOCTYPE html>
<html lang="en" data-ng-app="MetronicApp">
    <head>
        <!--<base href="/"> -->
        <title data-ng-bind="'HONG DAT TECHNICAL WORKS LLC | ' + $state.current.data.pageTitle"></title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta name="csrf-token" content="{{ csrf_token()}}">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?= url('/'); ?>/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= url('/'); ?>/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= url('/'); ?>/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= url('/'); ?>/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />

        <link id="ng_load_plugins_before" />
        <link href="<?= url('/'); ?>/assets/global/css/components.min.css" id="style_components" rel="stylesheet" type="text/css" />
        <link href="<?= url('/'); ?>/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= url('/'); ?>/assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?= url('/'); ?>/assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?= url('/'); ?>/assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="favicon.ico" /> </head>



    <body ng-controller="AppController" class="page-header-fixed page-sidebar-closed-hide-logo page-on-load" ng-class="{'page-content-white': settings.layout.pageContentWhite,'page-container-bg-solid': settings.layout.pageBodySolid, 'page-sidebar-closed': settings.layout.pageSidebarClosed}">
        <!-- BEGIN PAGE SPINNER -->
        <div ng-spinner-bar class="page-spinner-bar">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>

        <div data-ng-include="'tpl/header.html'" data-ng-controller="HeaderController" class="page-header navbar navbar-fixed-top"> </div>

        <div class="clearfix"> </div>
        <div class="page-container">
            <div data-ng-include="'tpl/sidebar.html'" data-ng-controller="SidebarController" class="page-sidebar-wrapper"> </div>

            <div class="page-content-wrapper">
                <div class="page-content">
                    <div data-ng-include="'tpl/theme-panel.html'" data-ng-controller="ThemePanelController" class="theme-panel hidden-xs hidden-sm"> </div>

                    <div ui-view class="fade-in-up"> </div>

                </div>
            </div>

            <a href="javascript:;" class="page-quick-sidebar-toggler">
                <i class="icon-login"></i>
            </a>

        </div>

        <div data-ng-include="'tpl/footer.html'" data-ng-controller="FooterController" class="page-footer"> </div>

        <div class="quick-nav-overlay"></div>

        <script src="<?= url('/'); ?>/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
        <script src="<?= url('/'); ?>/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?= url('/'); ?>/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
        <script src="<?= url('/'); ?>/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?= url('/'); ?>/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
        <script src="<?= url('/'); ?>/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
        <script src="<?= url('/'); ?>/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
        <!-- END CORE JQUERY PLUGINS -->
        <!-- BEGIN CORE ANGULARJS PLUGINS -->
        <script src="<?= url('/'); ?>/assets/global/plugins/angularjs/angular.min.js" type="text/javascript"></script>
        <script src="<?= url('/'); ?>/assets/global/plugins/angularjs/angular-sanitize.min.js" type="text/javascript"></script>
        <script src="<?= url('/'); ?>/assets/global/plugins/angularjs/angular-touch.min.js" type="text/javascript"></script>
        <script src="<?= url('/'); ?>/assets/global/plugins/angularjs/plugins/angular-ui-router.min.js" type="text/javascript"></script>
        <script src="<?= url('/'); ?>/assets/global/plugins/angularjs/plugins/ocLazyLoad.min.js" type="text/javascript"></script>
        <script src="<?= url('/'); ?>/assets/global/plugins/angularjs/plugins/ui-bootstrap-tpls.min.js" type="text/javascript"></script>

        <script src="js/main.js" type="text/javascript"></script>
        <script src="js/directives.js" type="text/javascript"></script>

        <script src="<?= url('/'); ?>/assets/global/scripts/app.min.js" type="text/javascript"></script>
        <script src="<?= url('/'); ?>/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
        <script src="<?= url('/'); ?>/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
        <script src="<?= url('/'); ?>/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>
        <script src="<?= url('/'); ?>/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->

</html>