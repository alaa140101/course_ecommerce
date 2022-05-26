<!-- header -->
<div class="top-header-area" id="sticker">
  <div class="container">
      <div class="row">
          <div class="col-lg-12 col-sm-12 text-center">
              <div class="main-menu-wrap">
                  <!-- logo -->
                  <div class="site-logo">
                      <a href="{{ route('frontend.index') }}">
                          <img src="{{ asset('frontend/img/logo.png')}}" alt="">
                      </a>
                  </div>
                  <!-- logo -->

                  <!-- menu start -->
                  <nav class="main-menu">
                      <ul>
                          <li><a href="{{ route('frontend.index') }}">Home</a></li>
                          <li><a href="{{ route('frontend.about') }}">About</a></li>
                          <li><a href="#">Pages</a>
                              <ul class="sub-menu">
                                  <li><a href="{{ route('frontend.about') }}">About</a></li>
                                  <li><a href="{{ route('frontend.cart') }}">Cart</a></li>
                                  <li><a href="{{ route('frontend.checkout') }}">Check Out</a></li>
                                  <li><a href="{{ route('frontend.contact') }}">Contact</a></li>
                                  <li><a href="{{ route('frontend.shop') }}">Shop</a></li>
                              </ul>
                          </li>
                          <li><a href="{{ route('frontend.contact') }}">Contact</a></li>
                          <li><a href="{{ route('frontend.shop') }}">Shop</a>
                              <ul class="sub-menu">
                                  <li><a href="{{ route('frontend.shop') }}">Shop</a></li>
                                  <li><a href="{{ route('frontend.checkout') }}">Check Out</a></li>
                                  <li><a href="{{ route('frontend.singleProduct') }}">Single Product</a></li>
                                  <li><a href="{{ route('frontend.cart') }}">Cart</a></li>
                              </ul>
                          </li>
                            @guest 
                            <li><i class="fas fa-user text-white"></i>
                                <ul class="sub-menu">
                                    <li><a href="{{route('login')}}">Login</a></li>
                                    <li><a href="{{route('register')}}">Register</a></li>
                                </ul>
                            </li>      
                            @else
                                <li><a href="#">Welcome, {{ auth()->user()->full_name}}</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">My profile</a></li>
                                        <li><a href="javascript:void(0);" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                                        <form action="{{route('logout')}}" method="post" class="d-none" id="logout-form">
                                            @csrf
                                        </form>
                                    </ul>
                                </li>                                    
                            @endguest
                          
                            <li>
                                <div class="header-icons">
                                    <a class="shopping-cart" href="{{ route('frontend.cart') }}"><i class="fas fa-shopping-cart"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                                   
                                </div>
                            </li>                        
                      </ul>
                  </nav>
                  <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                  <div class="mobile-menu"></div>
                  <!-- menu end -->
              </div>
          </div>
      </div>
  </div>
</div>
<!-- end header -->