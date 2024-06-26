<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
    <link rel="stylesheet" href="assets/css/reset.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />

    <title>Document</title>
  </head>
  <body style="background-color: #fff">
    <div id="wrapper">
      <!-- ==============HEADER================== -->
      <div id="header">
        <nav class="container">
          <div class="toggle">
            <i class="fa-solid fa-bars"></i>
          </div>
          <div class="logo">
            <a href="">
              <img src="assets/img/logo-dogcat-blue.png" alt="" />
            </a>
          </div>
          <ul id="main-menu">
            <li><a href="#!">Giới thiệu</a></li>
            <li><a href="#!">Chó cảnh</a></li>
            <li><a href="#!">Mèo cảnh</a></li>
            <li><a href="#!">Đồ ăn</a></li>
            <li><a href="#!">Phụ kiện</a></li>
            <li><a href="#!">Tin tức</a></li>
            <li><a href="#!">Liên hệ</a></li>
          </ul>
          <ul id="menu-right">
            <li>
              <a href="#!"><i class="fa-solid fa-magnifying-glass"></i></a>
            </li>
            <li class="loginInf">
              <a href="#!"><i class="fa-solid fa-user"></i></a>
              <div class="form" id="signup">
                <!-- FORM DANG KY -->

                <div class="wrp-form" id="signUp" style="display: none">
                  <h1 class="form-title">Register</h1>
                  <form action="register.php" method="post">
                    <div class="input-grop">
                      <i class="fa-solid fa-user"></i>
                      <input
                        type="text"
                        name="fName"
                        id="fName"
                        placeholder="First Name"
                        required
                      />
                      <label for="fName">First Name</label>
                    </div>
                    <div class="input-grop">
                      <i class="fa-solid fa-user"></i>
                      <input
                        type="text"
                        name="lName"
                        id="lName"
                        placeholder="Last Name"
                        required
                      />
                      <label for="lName">Last Name</label>
                    </div>
                    <div class="input-grop">
                      <i class="fa-solid fa-envelope"></i>
                      <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="Email"
                        required
                      />
                      <label for="email">Email</label>
                    </div>
                    <div class="input-grop">
                      <i class="fa-solid fa-lock"></i>
                      <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Password"
                        required
                      />
                      <label for="password">Password</label>
                    </div>
                    <input
                      type="submit"
                      class="btn"
                      value="sign Up"
                      name="signUp"
                    />
                  </form>
                  <p class="or">---------or----------</p>
                  <div class="icons">
                    <i class="fab fa-google"></i>
                    <i class="fab fa-facebook"></i>
                  </div>
                  <div class="links">
                    <p>Already Have Account ?</p>
                    <button id="signInButton">Sign In</button>
                  </div>
                </div>
                <!-- FORM DANG NHAP -->
                <div class="wrp-form" id="signIn">
                  <h1 class="form-title">Sign In</h1>
                  <form action="register.php" method="post">
                    <div class="input-grop">
                      <i class="fa-solid fa-envelope"></i>
                      <input
                        type="email"
                        name="email"
                        id="email"
                        placeholder="Email"
                        required
                      />
                      <label for="email">Email</label>
                    </div>
                    <div class="input-grop">
                      <i class="fa-solid fa-lock"></i>
                      <input
                        type="password"
                        name="password"
                        id="password"
                        placeholder="Password"
                        required
                      />
                      <label for="password">Password</label>
                    </div>
                    <p class="recover">
                      <a href="#">Recover Password</a>
                    </p>
                    <input
                      type="submit"
                      class="btn"
                      value="sign In"
                      name="signIn"
                    />
                  </form>
                  <p class="or">---------or----------</p>
                  <div class="icons">
                    <i class="fab fa-google"></i>
                    <i class="fab fa-facebook"></i>
                  </div>
                  <div class="links">
                    <p>Don`t have account yet?</p>
                    <button id="signUpButton">Sign Up</button>
                  </div>
                </div>
              </div>
            </li>
            <li>
              <a href=""
                ><i class="fa-solid fa-cart-shopping icon-cart">
                  <span class="number-buy">0</span>
                </i></a
              >
              <ul class="menu-buy">
                <h1
                  style="
                    text-align: center;
                    font-size: 30px;
                    margin-bottom: 10px;
                  "
                >
                  Giỏ hàng
                </h1>
                <div class="list-buy"></div>
                <!-- Total -->

                <div class="total">
                  <div class="total-title">Total</div>
                  <div class="total-price">$0</div>
                </div>
                <!-- Buy button -->
                <button type="button" class="btn-buy">Buy now</button>
              </ul>
            </li>
          </ul>
        </nav>
      </div>
      <div id="wrp-content">
        <!-- ============SLIDER==================== -->
        <div class="slider">
          <div class="first-img slider-content">
            <img class="img-feature" src="assets/img/header1 (1).jpg" alt="" />
            <div class="title__header-body img1">
              <h4 class="uppercase texth4">Chester</h4>
              <h2 class="uppercase texth2">is a champion dog</h2>
              <p class="textp">be sure to feed him like one</p>
              <button class="btn-shop">
                <a class="a-shop" href="#!">Shop now</a>
              </button>
            </div>
          </div>
          <div class="second-img slider-content">
            <img class="img-feature" src="assets/img/header1 (2).jpg" alt="" />
            <div class="title__header-body img2">
              <h4 class="uppercase texth4">Our story</h4>
              <h2 class="uppercase texth2">Food factory</h2>
              <p class="textp">FROM 1989 TO 2015 AND NOW</p>
              <button class="btn-shop">
                <a class="a-shop" href="#!">Shop now</a>
              </button>
            </div>
          </div>
        </div>
        <!-- FEATURE -->
        <div class="feature">
          <div class="container d-flex">
            <div class="rocket d-flex">
              <i class="fa-solid fa-rocket"></i>
              <div class="rocket-content">
                <h3 class="texth3">Free Shipping</h3>
                <p>All order over $150</p>
              </div>
            </div>
            <div class="pig-money d-flex">
              <i class="fa-solid fa-piggy-bank"></i>
              <div class="pig-content">
                <h3 class="texth3">15% Discount</h3>
                <p>For First Order</p>
              </div>
            </div>
            <div class="wallet d-flex">
              <i class="fa-solid fa-wallet"></i>
              <div class="wallet-content">
                <h3>SECURE PAYMENT</h3>
                <p>Confirmed</p>
              </div>
            </div>
            <div class="gift d-flex">
              <i class="bx bx-gift"></i>
              <div class="gift-content">
                <h3>AWESOME GIFT</h3>
                <p>Every Month</p>
              </div>
            </div>
          </div>
        </div>
        <!-- ==============WWRP_BODY -->
        <div class="wrp_body">
          <div class="container">
            <div class="title title_dog">
              <h2>Chó cảnh</h2>
            </div>
            <!-- LIST_DOG -->
            <ul class="list list_dog"></ul>
            <div class="div_more">
              <button class="button_more"><a href="#">XEM THÊM</a></button>
            </div>
          </div>
          <!-- Banner dog -->
          <div class="banner">
            <img src="assets/img/banner-dog.jpg" alt="" />
          </div>
          <div class="container">
            <div class="title title_cat">
              <h2>Mèo cảnh</h2>
            </div>
            <!-- LIST_CAT -->
            <ul class="list list_cat"></ul>
            <div class="div_more">
              <button class="button_more"><a href="#">XEM THÊM</a></button>
            </div>
          </div>
          <div class="banner banner-cat">
            <div class="banner-catE">
              <img src="assets/img/banner-doctor.jpg" alt="" />
            </div>
            <div class="banner-catE">
              <img src="assets/img/banner-cat.jpg" alt="" />
            </div>
          </div>
          <!-- WRP-ĐỒ ĂN -->
          <div class="container">
            <div class="title title_dog">
              <h2>Đồ ăn</h2>
            </div>
            <!-- LIST_FOODPET -->
            <ul class="list list_food_pet"></ul>
            <div class="div_more">
              <button class="button_more"><a href="#">XEM THÊM</a></button>
            </div>
          </div>
        </div>
        <!-- ====================BENEFIT-INF ==================-->
        <div class="benefit-block">
          <div class="title">
            <h2>THÔNG TIN HỮU ÍCH</h2>
          </div>
          <div class="post-benefit">
            <div class="control prev">
              <i class="bx bxs-chevron-left"></i>
            </div>
            <div class="control next">
              <i class="bx bxs-chevron-right"></i>
            </div>
            <div class="container">
              <div style="overflow: hidden">
                <ul class="benefit-lists"></ul>
              </div>
            </div>
          </div>
          <div class="div_more">
            <button class="button_more"><a href="#">XEM THÊM</a></button>
          </div>
        </div>
      </div>
      <div id="footer">
        <div class="footer-content container">
          <div class="left-content">
            <div class="content">
              <h3>Điều hướng</h3>
              <ul class="content-menu">
                <li><a href="#" class="text-footer">Trang chủ</a></li>
                <li><a href="#" class="text-footer">Về chúng tôi</a></li>
                <li><a href="#" class="text-footer">Sản phẩm</a></li>
                <li><a href="#" class="text-footer">Điểm tin hữu ích</a></li>
                <li><a href="#" class="text-footer">Liên hệ</a></li>
              </ul>
            </div>
          </div>
          <div class="center-content">
            <div class="content">
              <div class="logo-footer">
                <img src="assets/img/logo-footer.png" alt="" />
              </div>
              <p class="text-footer">
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                diam nonummy nibh euismod tincidunt ut laoreet ....
              </p>
              <div class="email-button">
                <input
                  class="input-text"
                  type="email"
                  placeholder="Email ..."
                />
                <input class="input-submit" type="submit" value="Gửi" />
              </div>
            </div>
          </div>
          <div class="right-content">
            <div class="content">
              <h3>THÔNG TIN LIÊN HỆ</h3>
              <div class="personal-inf">
                <div class="information">
                  <i class="bx bx-current-location"></i>
                  <p class="text-footer">Phường Hòa Khê,quận Thanh Khê</p>
                </div>
                <div class="information">
                  <i class="bx bx-phone"></i>
                  <p class="text-footer">036********</p>
                </div>
                <div class="information">
                  <i class="bx bx-envelope"></i>
                  <p class="text-footer">
                    <!-- hieutm.23ns@vku.udn.vn  trangdnl.23ns@vku.udn.vn -->
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copy-right">
        <div class="container">
          <p class="text-footer">Đồ án cơ sở 1</p>
        </div>
      </div>
    </div>
    <script type="module" src="../examFinal/assets/js/click.js"></script>
    
  </body>
</html>
