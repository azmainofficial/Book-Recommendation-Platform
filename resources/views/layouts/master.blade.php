<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BOI PECHA</title>

    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
      integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/LOGO.png') }}" />
  </head>

  <body>
    <header class="header">
      <div class="header-1">
        <a href="{{ route('home') }}" class="logo">
          <img src="{{ asset('assets/images/LOGO.png') }}" alt="" /> BOI
          <span class="blinking-text">PECHA</span>
        </a>

        <form action="" class="search-form">
          <input
            type="search"
            name=""
            placeholder="search here..."
            id="search-box"
          />
          <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="icons">
          <div id="search-btn" class="fas fa-search search-btn-1"></div>
          <a href="#" class="fas fa-heart"></a>
          @guest
          <div id="login-btn" class="">
            <button class="login-btn">login</button>
          </div>
          @endguest

          @auth
          <div class="profile-box">
            <button class="dropdown-toggle" id="profile-toggle">
              <div class="profile-info">
                <div class="image">
                  <img
                    src="{{ asset('assets/images/user-icon.png') }}"
                    alt="Profile Picture"
                    class="profile-img"
                  />
                </div>
                <div class="text-start">
                  <h6 class="fw-500">{{ auth()->user()->name }}</h6>
                  <p class="text-start">{{ auth()->user()->is_admin ? 'Admin' : 'User' }}</p>
                </div>
              </div>
            </button>
            <ul class="dropdown-menu" id="dropdown-menu">
              <li>
                <div class="author-info">
                  <div class="image">
                    <img
                      src="{{ asset('assets/images/user-icon.png') }}"
                      alt="User Image"
                      class="author-img"
                    />
                  </div>
                  <div class="content">
                    <h4>{{ auth()->user()->name }}</h4>
                    <a href="#" class="email">{{ auth()->user()->email }}</a>
                  </div>
                </div>
              </li>
              <li class="divider"></li>
              @if(auth()->user()->is_admin)
              <li>
                <a href="{{ route('admin.dashboard') }}"><i class="fas fa-chart-line"></i> Admin Dashboard</a>
              </li>
              @endif
              <li>
                <a href="{{ route('profile.edit') }}"><i class="lni lni-user"></i> View Profile</a>
              </li>
              <li class="divider"></li>
              <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="lni lni-exit"></i> Sign Out
                    </a>
                </form>
              </li>
            </ul>
          </div>
          @endauth
        </div>
      </div>

      <div class="header-2">
        <nav class="desktop-navigation-menu">
          <div class="container">
            <ul class="desktop-menu-category-list">
              <li class="menu-category">
                <a href="{{ route('home') }}" class="menu-title">Home</a>
              </li>

              <li class="menu-category">
                <a href="{{ route('library.index') }}" class="menu-title">My Library</a>
              </li>

              <li class="menu-category">
                <a href="{{ route('books') }}" class="menu-title">Book</a>

                <div class="dropdown-panel">
                  <ul class="dropdown-panel-list">
                    <li class="menu-title">
                      <a href="#">Popular</a>
                    </li>

                    <li class="panel-list-item">
                      <a href="#">Harry Potter- J.K Rowling</a>
                    </li>

                    <li class="panel-list-item">
                      <a href="#">Chader Pahar- Bibhutibhushan Bandyopadhyay</a>
                    </li>

                    <li class="panel-list-item">
                      <a href="#">Bomkesh Somogro- Sharadindu Bndyopadhyay</a>
                    </li>

                    <li class="panel-list-item">
                      <a href="#">Debi- Humayun Ahmend</a>
                    </li>

                    <li class="panel-list-item">
                      <a href="#">Twilight- Stephenie Meyer</a>
                    </li>

                    <li class="panel-list-item">
                      <a href="#">
                        <img
                          src="{{ asset('assets/images/rg1.jpg') }}"
                          alt="men's fashion"
                          width="250"
                          height="119"
                        />
                      </a>
                    </li>
                  </ul>

                  <ul class="dropdown-panel-list">
                    <li class="menu-title">
                      <a href="#">Fiction</a>
                    </li>

                    <li class="panel-list-item">
                      <a href="#">Pather Panchali</a>
                    </li>

                    <li class="panel-list-item">
                      <a href="#">Devdas</a>
                    </li>

                    <li class="panel-list-item">
                      <a href="#">Parineeta</a>
                    </li>

                    <li class="panel-list-item">
                      <a href="#">Chokher Bali</a>
                    </li>

                    <li class="panel-list-item">
                      <a href="#">Prothom Protishruti</a>
                    </li>

                    <li class="panel-list-item">
                      <a href="#">
                        <img
                          src="./image/rg2.jpg"
                          alt="women's fashion"
                          width="250"
                          height="119"
                        />
                      </a>
                    </li>
                  </ul>

                  <ul class="dropdown-panel-list">
                    <li class="menu-title">
                      <a href="#">Nonfiction</a>
                    </li>

                    <li class="panel-list-item">
                      <a href="#">Slient Spring</a>
                    </li>

                    <li class="panel-list-item">
                      <a href="#">I Know Why the Caged Bird Sings</a>
                    </li>

                    <li class="panel-list-item">
                      <a href="#">Educated</a>
                    </li>

                    <li class="panel-list-item">
                      <a href="#">Naree</a>
                    </li>

                    <li class="panel-list-item">
                      <a href="#">lal Nil Dipabali</a>
                    </li>

                    <li class="panel-list-item">
                      <a href="#">
                        <img
                          src="./image/rg3.jpg"
                          alt="mouse collection"
                          width="250"
                          height="119"
                        />
                      </a>
                    </li>
                  </ul>
                </div>
              </li>

              <li class="menu-category">
                <a href="#" class="menu-title">category</a>

                <ul class="dropdown-list">
                  <li class="dropdown-item">
                    <a href="#">Abol Tabol</a>
                  </li>

                  <li class="dropdown-item">
                    <a href="#">Saat Bhai CHampa</a>
                  </li>

                  <li class="dropdown-item">
                    <a href="#">Thakumar Jhuli</a>
                  </li>

                  <li class="dropdown-item">
                    <a href="#">Alice`s Adventures in Woderland</a>
                  </li>

                  <li class="dropdown-item">
                    <a href="#">The Tale of Peter Rabbit</a>
                  </li>
                </ul>
              </li>

              <li class="menu-category">
                <a href="#" class="menu-title">Popular</a>

                <ul class="dropdown-list">
                  <li class="dropdown-item">
                    <a href="#">Salwar Suit</a>
                  </li>

                  <li class="dropdown-item">
                    <a href="#">2 PCS</a>
                  </li>

                  <li class="dropdown-item">
                    <a href="#">Kurti</a>
                  </li>

                  <li class="dropdown-item">
                    <a href="#">3 PCS</a>
                  </li>

                  <li class="dropdown-item">
                    <a href="#">TOPS</a>
                  </li>
                </ul>
              </li>

              <li class="menu-category">
                <a href="#" class="menu-title">Authors</a>

                <ul class="dropdown-list">
                  <li class="dropdown-item">
                    <a href="#">Sunglasses</a>
                  </li>

                  <li class="dropdown-item">
                    <a href="#">Wallet</a>
                  </li>

                  <li class="dropdown-item">
                    <a href="#">Women's Bag</a>
                  </li>

                  <li class="dropdown-item">
                    <a href="#">Men's Ornaments</a>
                  </li>

                  <li class="dropdown-item">
                    <a href="#">Women's Ornaments</a>
                  </li>
                </ul>
              </li>
              <li class="menu-category">
                <a href="{{ route('categories') }}" class="menu-title">Recommendations</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>

    <!-- header section ends -->

    <!-- bottom navbar  -->

    <nav class="bottom-navbar">
      <a href="#home" class="fas fa-home"></a>
      <a href="#featured" class="fas fa-list"></a>
      <a href="#arrivals" class="fas fa-tags"></a>
      <a href="#reviews" class="fas fa-comments"></a>
      <a href="#blogs" class="fas fa-blog"></a>
    </nav>

    <!-- login form  -->

    <div class="login-form-container">
      <div id="close-login-btn" class="fas fa-times"></div>

      <div class="container-x">
        <div class="form-box login">
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <h1>Login</h1>
            <div class="input-box">
              <input type="email" name="email" placeholder="Email" required />
              <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
              <input type="password" name="password" placeholder="Password" required />
              <i class="bx bxs-lock-alt"></i>
            </div>
            <div class="forgot-link">
              <a href="{{ route('password.request') }}">Forgot Password?</a>
            </div>
            <button type="submit" class="rx-btn">Login</button>
            <p>or login with social platforms</p>
            <div class="social-icons">
              <a href="#"><i class="fa-brands fa-google"></i></a>
              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#"><i class="fa-brands fa-github"></i></a>
              <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
          </form>
        </div>

        <div class="form-box register">
          <form method="POST" action="{{ route('register') }}">
            @csrf
            <h1>Registration</h1>
            <div class="input-box">
              <input type="text" name="name" placeholder="Username" required />
              <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
              <input type="email" name="email" placeholder="Email" required />
              <i class="bx bxs-envelope"></i>
            </div>
            <div class="input-box">
              <input type="password" name="password" placeholder="Password" required />
              <i class="bx bxs-lock-alt"></i>
            </div>
            <div class="input-box">
              <input type="password" name="password_confirmation" placeholder="Confirm Password" required />
              <i class="bx bxs-lock-alt"></i>
            </div>
            <button type="submit" class="rx-btn">Register</button>
            <p>or register with social platforms</p>
            <div class="social-icons">
              <a href="#"><i class="fa-brands fa-google"></i></a>
              <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#"><i class="fa-brands fa-github"></i></a>
              <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
          </form>
        </div>

        <div class="toggle-box">
          <div class="toggle-panel toggle-left">
            <img src="{{ asset('assets/images/LOGO_W.png') }}" class="p-3" alt="" width="80px" />
            <h1>Hello, Welcome!</h1>
            <p>Don't have an account?</p>
            <button class="register-btn">Register</button>
          </div>

          <div class="toggle-panel toggle-right">
            <img src="{{ asset('assets/images/LOGO_W.png') }}" class="p-3" alt="" width="80px" />
            <h1>Welcome Back!</h1>
            <p>Already have an account?</p>
            <button class="login-btn-x">Login</button>
          </div>
        </div>
      </div>
    </div>

    <div>
      @yield('content')
    </div>

    <footer class="footer">
      <div class="container p-4">
        <div class="top-footer">
          <div class="logo mt-5"><img src="{{ asset('assets/images/LOGO_W.png') }}" alt="" /></div>
          <div class="nav-links">
            <ul>
              <li><a href="#"> Home</a></li>
              <li><a href="#"> Book</a></li>
              <li><a href="#"> Kids</a></li>
              <li><a href="#"> Popular</a></li>
              <li><a href="#"> Authors</a></li>
              <li><a href="#"> Recommendations</a></li>
            </ul>
          </div>
          <div class="social-links">
            <a href="#" target="_blank"
              ><i class="fa-brands fa-facebook-f"></i
            ></a>
            <a href="#" target="_blank"
              ><i class="fa-brands fa-instagram"></i
            ></a>
            <a href="#" target="_blank"><i class="fa-brands fa-twitter"></i></a>
            <a href="#" target="_blank"><i class="fa-brands fa-youtube"></i></a>
          </div>
          <div class="discription">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae
            enim magnam consectetur voluptates adipisci non aliquid quas eius
            iste accusantium.
          </div>
        </div>
        <hr />
        <div class="bottom-footer">
          <p class="copyright">
            &copy; 2022 <a href="#" class="blinking-text-2">Azmain</a>. All
            Rights Reserved
          </p>
        </div>
      </div>
    </footer>

    <!-- footer section ends -->

    <!-- 

<div class="loader-container">
    <img src="/assets/local-image/loader-img.gif" alt="">
</div>

loader  -->

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- custom js file link  -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
  </body>
</html>


