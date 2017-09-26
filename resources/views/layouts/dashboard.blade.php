<?php
/**
 * Created by PhpStorm.
 * User: FoodArt
 * Date: 25-Oct-17
 * Time: 12:45 AM
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
        Foodart
    </small>
@endsection

@section('small_box')
    @include('layouts.partials.small_box')
@endsection

@section('page_content')
    <h4>Test Content</h4>
@endsection