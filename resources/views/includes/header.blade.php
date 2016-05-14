
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
    <li><a href="#!">Profile</a></li>
    <li><a href="#!"> Purchase History</a></li>
    <li class="divider"></li>
    <li><a href="#!">Messeges</a></li>
</ul>
<nav>
    <div class="nav-wrapper">
        <a href="#!" class="brand-logo">Logo</a>
        <ul class="right hide-on-med-and-down">
            <li><a href="{{URL::to('searchItem')}}">Home</a></li>
            <li><a href="#">Continue Shopping</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Return Item</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Sign In</a></li>



            <!-- Dropdown Trigger -->
            <li><a class="dropdown-button" href="" data-activates="dropdown1">My Account<i class="material-icons right"></i></a></li>
        </ul>
    </div>
</nav>