
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="{{route('profile')}}">Profile</a></li>
    <li><a href="#!"> Purchase History</a></li>
    <li class="divider"></li>
    <li><a href="#!">Messeges</a></li>
</ul>
<nav>
    <div class="nav-wrapper">
        <img src="photos/logo.jpg" class="brand-logo" style="width:64px;height:64px;">
        <ul class="right hide-on-med-and-down">
<<<<<<< HEAD
            <li><a href="{{URL::to('Home')}}">Home</a></li>
            <li><a href="{{URL::to('searchItem')}}">Search Item</a></li>
            <li><a href="#">Continue Shopping</a></li>
            <li><a href="#">Return Item</a></li>
            <li><a href="{{URL::to('aboutUs')}}">About Us</a></li>
=======
            <li><a href="{{URL::to('searchItem')}}">Home</a></li>
            <li><a href="{{route('UpdateOrder')}}">Udate Order</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="{{route('return')}}">Return Item</a></li>
            <li><a href="#">About Us</a></li>
>>>>>>> 4aef4c9fa58e95c370e2d025f5fa57553922b822
            @if(Auth::check())
            <li><a href="{{route('signout')}}">Sign Out</a></li>
                @else
                    <li><a href="{{url('signup')}}">Sign up</a></li>

<<<<<<< HEAD
                @endif

            <!-- Dropdown Trigger -->
=======
                @endif            <!-- Dropdown Trigger -->
>>>>>>> 4aef4c9fa58e95c370e2d025f5fa57553922b822
            <li><a class="dropdown-button" href="" data-activates="dropdown1">My Account<i class="material-icons right"></i></a></li>
        </ul>
    </div>
</nav>