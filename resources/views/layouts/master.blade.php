<?php
/**
 * Created by PhpStorm.
 * User: NinjaRasel
 * Date: 27-Aug-17
 * Time: 11:00 AM
 */
?>

@php
    $app_name_short='CB';
    $app_name_long='CoderBadge';

    $admin_image= asset('ap/dist/img/user2-160x160.jpg');
    $admin_name=Auth::user()->name;
    $admin_email=Auth::user()->email;
    $admin_designation='CoderBadge';
    $admin_contact_no= '+88 01521 224958';
@endphp

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="CoderBadge">
    <title>
        CoderBadge | @yield('title')
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    @include('layouts.partials.head_style')
    @include('layouts.partials.head_script')
</head>
<!-- ADD THE CLASS layouts-boxed TO GET A BOXED LAYOUT -->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
@include('layouts.partials.header')
<!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src={{$admin_image}} class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{$admin_name}}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
            <!-- search form -->
            @include('layouts.partials.search_form')
            <!-- /.search form -->
            @include('layouts.partials.sidebar_menu')
        </section>
        <!-- /.sidebar -->
    </aside>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                @yield('content_header')
            </h1>

            @include('layouts.partials.breadcrumb')

        </section>
        <!-- Main content -->
        <section class="content">
            @yield('page_content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <footer class="main-footer">
        @include('layouts.partials.footer')
    </footer>
    <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div><!-- ./wrapper -->
@include('layouts.partials.body_script')
</body>
</html>
