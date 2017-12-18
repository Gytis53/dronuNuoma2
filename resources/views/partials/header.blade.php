{{--<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">--}}


    {{--<a class="navbar-brand" href="{{route('home')}}"><img src="http://localhost/dronuNuoma/public/uploads/logowhite.png" height="80px" width="auto"></a>--}}
    {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">--}}
        {{--<span class="navbar-toggler-icon"></span>--}}
    {{--</button>--}}

    {{--<div class="collapse navbar-collapse" id="navbarHeaderShop">--}}
        {{--<ul class="navbar-nav">--}}
            {{--@if(Auth::guard('customer')->check() == false)--}}
                {{--<li class="nav-item" align="right">--}}
                    {{--<a class="nav-link" href="{{route('customer.login')}}" ><i class="fa fa-user" aria-hidden="true"></i>--}}
                        {{--Prisijungti</a>--}}
                {{--</li>--}}
            {{--@else--}}
                {{--<li class="nav-item" align="right">--}}
                    {{--<a class="nav-link" href="{{route('customer.getProfile')}}" ><i class="fa fa-user" aria-hidden="true"></i>--}}
                        {{--Mano profilis</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item" align="right">--}}
                    {{--<a class="nav-link" href="{{route('customer.logout')}}" ><i class="fa fa-user" aria-hidden="true"></i>--}}
                        {{--Atsijungti</a>--}}
                {{--</li>--}}
            {{--@endif--}}
            {{--<li class="nav-item" align="right">--}}
                {{--<a class="nav-link" href="{{route('shop.index')}}" ><i class="fa fa-paper-plane" aria-hidden="true"></i>--}}
                    {{--Dronai</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item" align="right">--}}
                {{--<a class="nav-link" href="{{route('events')}}" ><i class="fa fa-calendar" aria-hidden="true"></i>--}}
                    {{--Renginiai</a>--}}
            {{--</li>--}}
            {{--<li class="nav-item" align="right">--}}
                {{--<a class="nav-link" href="{{route('map')}}" ><i class="fa fa-map" aria-hidden="true"></i>--}}
                    {{--Nuomos punktai</a>--}}
            {{--</li>--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--</nav>--}}
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="{{route('home')}}"><img src="http://localhost/dronuNuoma/public/uploads/logowhite.png" height="80px" width="auto"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarHeaderShop">
        <ul class="navbar-nav">
            @if(Auth::guard('customer')->check() == false)
                <li class="nav-item" align="right">
                    <a class="nav-link" href="{{route('customer.login')}}" ><i class="fa fa-user" aria-hidden="true"></i>
                        Prisijungti</a>
                </li>
            @else
                <li class="nav-item" align="right">
                    <a class="nav-link" href="{{route('customer.getProfile')}}" ><i class="fa fa-user" aria-hidden="true"></i>
                        Mano profilis</a>
                </li>
                <li class="nav-item" align="right">
                    <a class="nav-link" href="{{route('customer.logout')}}" ><i class="fa fa-user" aria-hidden="true"></i>
                        Atsijungti</a>
                </li>
            @endif
            <li class="nav-item" align="right">
            <a class="nav-link" href="{{route('shop.index')}}" ><i class="fa fa-paper-plane" aria-hidden="true"></i>
            Dronai</a>
            </li>
            <li class="nav-item" align="right">
            <a class="nav-link" href="{{route('events')}}" ><i class="fa fa-calendar" aria-hidden="true"></i>
            Renginiai</a>
            </li>
            <li class="nav-item" align="right">
            <a class="nav-link" href="{{route('map')}}" ><i class="fa fa-map" aria-hidden="true"></i>
            Nuomos punktai</a>
            </li>
                <li class="nav-item" align="right">
                    <a class="nav-link" href="http://localhost/dronuNuoma/public/store" ><i class="fa fa-credit-card" aria-hidden="true"></i>
                        Parduotuvė</a>
                </li>
                <li class="nav-item" align="right">
                    <a class="nav-link" href="http://localhost/dronuNuoma/public/cart" ><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        Krepšelis</a>
                </li>

        </ul>
    </div>
</nav>
