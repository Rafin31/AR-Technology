<div class="navbar_wrapper">

    <nav class="navbar navbar-expand-lg fixed-top" id="navbar">
        <a class="navbar-brand" href="#">
            <img src="{{asset('Assets/Logo/logo.png')}}" class="img-fluid" alt="logo">
        </a>
        <button class="navbar-toggler collapsed pe-0" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            {{-- <span class="navbar-toggler-icon"></span> --}}
            <i class="fas fa-stream navbar-toggler-icon"></i>

        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul id="navbar-menu" class="navbar-nav menu-navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#catagories">Catagories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Featured_item">Featured Item</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#offers">Offers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about_us">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#faq">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacts">Contacts</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                @guest
                <li class="nav-item button_ text-center">
                    <button class="ar-button" data-toggle="modal" data-target="#loginModal">Sign in</button>
                </li>
                <li class="nav-item button_ text-center">
                    <button class="ar-button-fill" data-toggle="modal" data-target="#registrationModal">Sign up</button>
                </li>
                @endguest

                @auth
                <li class=" button_ text-center">
                    <div class="dropdown">
                        <button class="btn btn-primary-outline text-bold text-dark h5" type="button" id="dropdownMenu2"
                            data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">{{Auth::user()->name}}</button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button">Profile</button>
                            <button class="dropdown-item" type="button">Cart</button>
                            {{-- <a href="{{ route('logout') }}" class="dropdown-item ">Logout</a> --}}
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>

                </li>
                @endauth
            </ul>
        </div>
    </nav>
</div>



{{-- Modal for Login --}}


<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center text-capitalize text-dark font-weight-bold" id="exampleModalLabel">
                    Account Log in </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">

                    <div class="login row">
                        <div class="col-12">
                            <h5>Email</h5>
                            <input type="email" name="login_email" class="form-input-borderd" placeholder="Your Email">
                        </div>
                        <div class="col-12">
                            <h5>Password</h5>
                            <input type="password" name="login_pass" class="form-input-borderd"
                                placeholder="Your Password">
                            <button type="submit button" class="ar-button-flat-fill w-100">Login</button>
                        </div>
                    </div>

                </form>
                <div class="registerd-ask row">
                    <div class="col-12 justify-content-center">
                        <p class="m-2">Don't have any account?</p>
                        <button type="button" class="ar-button-flat-fill w-100" data-toggle="modal" data-dismiss="modal"
                            data-target="#registrationModal">Registerd here ➔ </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal for Registration --}}


<div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center text-capitalize text-dark font-weight-bold" id="exampleModalLabel">
                    Account Registration </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">

                    <div class="login row">
                        <div class="col-12">
                            <h5>Email</h5>
                            <input type="email" name="reg_email" class="form-input-borderd"
                                placeholder="Give a valid Email address">
                        </div>
                        <div class="col-12">
                            <h5>Password</h5>
                            <input type="password" name="reg_password" class="form-input-borderd"
                                placeholder="Choose a strong password">
                        </div>
                        <div class="col-12">
                            <h5>Confirm Password</h5>
                            <input type="password" name="reg_con_password" class="form-input-borderd"
                                placeholder="Confirm the password...">
                        </div>
                        <div class="col-12">
                            <button type=" submit button" name="submit" class="ar-button-flat-fill w-100">Sign
                                Up</button>
                        </div>
                    </div>
                </form>
                <div class="social_signUP row flex-column">
                    <div class="row-12 justify-content-center py-2">
                        <p class="text-center p-0 m-0">Or</p>
                    </div>
                    <div class="col-12">
                        <a class="btn btn-dark w-100" href="{{ route('auth.github') }}">Github</a>
                    </div>
                    <div class="col-12 py-2">
                        <a class="btn btn-danger w-100" href="{{ route('auth.google') }}">Google</a>
                    </div>
                </div>
                <div class="login-ask row">
                    <div class="col-12 justify-content-center">
                        <p class="pt-3 text-center">Already have an account?</p>
                        <button type="button" class="ar-button-flat w-100" data-toggle="modal" data-target="#loginModal"
                            data-dismiss="modal">Login here ➔ </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>