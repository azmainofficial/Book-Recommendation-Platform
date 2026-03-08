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
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="icon" type="image/x-icon" href="/assets/local-image/LOGO.png" />
  </head>

  <body>
    <header class="header">

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
          <form action="#">
            <h1>Login</h1>
            <div class="input-box">
              <input type="text" placeholder="Username" required />
              <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
              <input type="password" placeholder="Password" required />
              <i class="bx bxs-lock-alt"></i>
            </div>
            <div class="forgot-link">
              <a href="#">Forgot Password?</a>
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
          <form action="#">
            <h1>Registration</h1>
            <div class="input-box">
              <input type="text" placeholder="Username" required />
              <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
              <input type="email" placeholder="Email" required />
              <i class="bx bxs-envelope"></i>
            </div>
            <div class="input-box">
              <input type="password" placeholder="Password" required />
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
            <img src="/assets/local-image/LOGO_W.png" class="p-3" alt="" width="80px" />
            <h1>Hello, Welcome!</h1>
            <p>Don't have an account?</p>
            <button class="register-btn">Register</button>
          </div>

          <div class="toggle-panel toggle-right">
            <img src="/assets/local-image/LOGO_W.png" class="p-3" alt="" width="80px" />
            <h1>Welcome Back!</h1>
            <p>Already have an account?</p>
            <button class="login-btn-x">Login</button>
          </div>
        </div>
      </div>
    </div>

    <!-- home section starts  -->

    <section class="home" id="home">
      <div class="row">
        <div class="content">
          <h3>This Years's Top rated</h3>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
            facere ab delectus quo labore iusto, ipsam rem veniam voluptatum
            itaque.
          </p>
          <a href="./Books.html" class="btn">Show All</a>
        </div>

        <div class="swiper books-slider">
          <div class="swiper-wrapper">
            <a href="#" class="swiper-slide"
              ><img src="/assets/local-image/book1.jfif" alt=""
            /></a>
            <a href="#" class="swiper-slide"
              ><img src="/assets/local-image/book-2.jpg" alt=""
            /></a>
            <a href="#" class="swiper-slide"
              ><img src="/assets/local-image/book-3.jpg" alt=""
            /></a>
            <a href="#" class="swiper-slide"
              ><img src="/assets/local-image/book-4.png" alt=""
            /></a>
            <a href="#" class="swiper-slide"
              ><img src="/assets/local-image/book-5.png" alt=""
            /></a>
            <a href="#" class="swiper-slide"
              ><img src="/assets/local-image/book-6.png" alt=""
            /></a>
          </div>
          <img src="/assets/local-image/stand.png" class="stand" alt="" />
        </div>
      </div>
    </section>

    <!-- home section ense  -->
 

    <section class="reviews" id="reviews">
      <h1 class="heading"><span>Quotes</span></h1>

      <div class="swiper reviews-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide box">
            <img src="/assets/local-image/pic-1.jpg" alt="" />
            <h3>Azmain Sheikh</h3>
            <p>
              The website is very good and responsive, all the books available
              in this website are original and very cheap, you can buy them
              comfortably. Payment can also be done easily.
            </p>
            <div class="stars">-- <span>Life and Art</span></div>
          </div>
          <div class="swiper-slide box">
            <img src="/assets/local-image/pic-1.jpg" alt="" />
            <h3>Azmain Sheikh</h3>
            <p>
              The website is very good and responsive, all the books available
              in this website are original and very cheap, you can buy them
              comfortably. Payment can also be done easily.
            </p>
            <div class="stars">-- <span>Life and Art</span></div>
          </div>
          <div class="swiper-slide box">
            <img src="/assets/local-image/pic-1.jpg" alt="" />
            <h3>Azmain Sheikh</h3>
            <p>
              The website is very good and responsive, all the books available
              in this website are original and very cheap, you can buy them
              comfortably. Payment can also be done easily.
            </p>
            <div class="stars">-- <span>Life and Art</span></div>
          </div>
          <div class="swiper-slide box">
            <img src="/assets/local-image/pic-1.jpg" alt="" />
            <h3>Azmain Sheikh</h3>
            <p>
              The website is very good and responsive, all the books available
              in this website are original and very cheap, you can buy them
              comfortably. Payment can also be done easily.
            </p>
            <div class="stars">-- <span>Life and Art</span></div>
          </div>
        </div>
      </div>
    </section>


    <footer class="footer">
      <div class="container p-4">
        <div class="top-footer">
          <div class="logo mt-5"><img src="/assets/local-image/LOGO_W.png" alt="" /></div>
          <div class="nav-links">
            <ul>
              <li><a href="#"> Dashboard</a></li>
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



<div class="loader-container">
    <img src="/assets/local-image/loader-img.gif" alt="">
</div>

loader  -->

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="/assets/js/script.js"></script>
  </body>
</html>
