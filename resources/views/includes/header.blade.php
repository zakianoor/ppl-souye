<html lang="en">

<head>
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <!--
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crimson+Pro:ital,wght@0,200..900;1,200..900&family=Inter:wght@100..900&family=Lexend+Exa:wght@100..900&display=swap" rel="stylesheet">
    -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>

<body>
    <nav>
        <a href="{{ route('home') }}" ><img src="assets/img/logo.png"></a> 
        <!-- <img src="assets/img/logo.png"> -->
        <ul>
            <li><a href="{{ route('shop') }}">shop</a></li>
            <li><a href="{{ route('home') }}#bestseller">best sellers</a></li>
            <li><a href="{{ route('collab') }}">x DEAR지아</a></li>
            <div class="sale"><li><a href="{{ route('sale') }}">sale</a></li></div>
            <li><a href="{{ route('about') }}">about</a></li>

        </ul>
        <div class="navbar">
            <ul>
                @auth
                    <li style="font-weight: 600;"><a href="{{ route('user') }}"><i class="fa fa-user" aria-hidden="true"></i> </a> Hi, {{ explode(' ', Auth::user()->name ?? '')[0] }}!</li>

                    @php
                    $row_count = DB::table('cart')->where('status', '1')->where('id_user', Auth::id() ?? '0')->count();
                    @endphp

                    <li style="margin-top: 10px;"><a href="{{ route('cart') }}"><span>{{ $row_count }}</span><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>

                    <li style="margin-top: 10px;">
                        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                            @csrf
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                <i class="fa fa-sign-in-alt" aria-hidden="true"></i>
                            </a>
                        </form>
                    </li>
                @endauth

                @guest
                <li style="font-weight: 600;"><a href="{{ route('user') }}"><i class="fa fa-user" aria-hidden="true"></i></a>Hi, Guest</li>
                <li style="margin-top: 10px;"><a href="{{ route('cart') }}"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
                @endguest
            </ul>
        </div>
    </nav>