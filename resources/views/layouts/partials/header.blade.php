<?php
/**
 * Created by PhpStorm.
 * User: NinjaRasel
 * Date: 27-Aug-17
 * Time: 11:00 AM
 */
?>

<header class="main-header">
    <!-- Logo -->
    <a href="{{ route('dashboard') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>{{$app_name_short}}</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>{{$app_name_long}}</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="javascript:void(0)" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                @include('layouts.partials.nav_messages_menu')
                @include('layouts.partials.nav_notifications_menu')
                @include('layouts.partials.nav_tasks_menu')
                @include('layouts.partials.nav_user-menu')
            </ul>
        </div>
    </nav>
</header>
