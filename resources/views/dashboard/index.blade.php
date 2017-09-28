<?php
/**
 * Created by PhpStorm.
 * User: NinjaRasel
 * Date: 27-Aug-17
 * Time: 11:00 AM
 */
?>

@php
    $breadcrumb = [
        [
            'icon' => 'fa fa-home',
            'href' => route('dashboard'),
            'name' => 'Dashboard'
        ]
    ];
@endphp

@extends('layouts.master', $breadcrumb)

@section('title', 'Dashboard')

@section('content_header')
    Welcome
    <small>
        CoderBadge
    </small>
@endsection

@section('page_content')
    @include('layouts.partials.small_box')
    <h4>Test Content</h4>
@endsection
