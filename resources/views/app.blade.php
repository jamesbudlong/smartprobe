<!DOCTYPE html>
<html lang="en">
<head>
    <title>SmartProbe Web App</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:500,400,300,700' rel='stylesheet' type='text/css'>
    <script src="/assets/js/core/pace.js"></script>
    <link href="{{mix("/assets/css/laraspace.css")}}" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="/assets/img/favicon.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/assets/img/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/assets/img/favicon.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/assets/img/favicon.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/assets/img/favicon.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/assets/img/favicon.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/assets/img/favicon.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/assets/img/favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicon.png">
    <link rel="icon" type="image/png" href="/assets/img/favicon.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/assets/img/favicon.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/assets/img/favicon.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/assets/img/favicon.png" sizes="16x16">
    <link rel="manifest" href="/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/assets/img/favicons/safari-pinned-tab.svg" color="#333333">
    <link rel="shortcut icon" href="/assets/img/favicon.png">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="/assets/img/favicons/mstile-144x144.png">
    <meta name="msapplication-config" content="/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#333333">
</head>
<body class="layout-default skin-arryn">
<div id="app" class="site-wrapper">
    <div class="mobile-menu-overlay" @click.prevent="$utils.toggleSidebar"></div>
    <transition name="fade" mode="out-in">
        <router-view></router-view>
    </transition>
    <!-- <theme-switcher /> -->
</div>
<script type="text/javascript" src="{{mix("/assets/js/app.js")}}"></script>
</body>
</html>
