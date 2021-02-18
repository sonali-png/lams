<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lams - utkarsh</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Lams">
    <meta name="keywords" content="LAMS, Logical access management system">
    <meta name="author" content="utkarsh ">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.svg" type="image/x-icon">

    <!-- font css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/fonts/feather.css') }}"/>
    <link rel="stylesheet" href="{{ URL::asset('assets/fonts/fontawesome.css')}}"/>
    <link rel="stylesheet" href="{{ URL::asset('assets/fonts/material.css') }}"/>

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}" id="main-style-link">
    <style>.error{ color:red; } </style>
</head>
<body class>
<div class="loader-bg">
    <div class="loader-track">
        <div class="loader-fill"></div>
    </div>
</div>
@include('sidebar')