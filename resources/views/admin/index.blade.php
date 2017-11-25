@extends('layouts.master')

@section('title')
    Profile
@endsection

@section('content')
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    <div class="nav-side-menu">
        <div class="brand">Meniu</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">
                <li>
                    <a href="{{route('home')}}">
                        <i class="fa fa-home" aria-hidden="true"></i> Home (Customer View)
                    </a>
                </li>


                <li data-toggle="collapse" data-target="#service" class="collapsed">
                    <a href="#"><i class="fa fa-globe fa-lg"></i> Services <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="service">
                    <li><a href="{{route('customer.getAddProductForm')}}">Pridėti prekę</a></li>
                    <li><a href="{{route('customer.getCustomerProducts')}}">Mano prekės</a></li>
                    <li> <a href="{{route('admin.getAddShopForm')}}">Nustatyti nuomos punktą</a></li>
                </ul>


                <li>
                    <a href="#">
                        <i class="fa fa-users fa-lg"></i> Users
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <link rel="stylesheet" href="{{URL::to('css/side-menu.css')}}">
    <h1><strong>ADMIN</strong></h1>
    <p><strong>Dažnai naudojamos funkcijos</strong></p>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <a href="{{route('admin.getAddShopForm')}}" class="buttonAdm">Nustatyti nuomos punktą</a>
        </div>
    </div>




@endsection
@section('styles')
    <link rel="stylesheet" href="{{URL::to('css/profile-index.css')}}">
@endsection


