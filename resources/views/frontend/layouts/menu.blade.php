<nav class="navbar navbar-expand-lg main_menu">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="frontend/images/logo.png" alt="FoodPark" class="img-fluid">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <i class="far fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">about</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="menu.html">menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="chefs.html">chefs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">pages <i class="far fa-angle-down"></i></a>
                    <ul class="droap_menu">
                        <li><a href="menu_details.html">menu details</a></li>
                        <li><a href="blog_details.html">blog details</a></li>
                        <li><a href="cart_view.html">cart view</a></li>
                        <li><a href="check_out.html">checkout</a></li>
                        <li><a href="payment.html">payment</a></li>
                        <li><a href="testimonial.html">testimonial</a></li>
                        <li><a href="search_menu.html">search result</a></li>
                        <li><a href="404.html">404/Error</a></li>
                        <li><a href="faq.html">FAQs</a></li>
                        <li><a href="sign_in.html">sign in</a></li>
                        <li><a href="sign_up.html">sign up</a></li>
                        <li><a href="forgot_password.html">forgot password</a></li>
                        <li><a href="privacy_policy.html">privacy policy</a></li>
                        <li><a href="terms_condition.html">terms and condition</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blogs.html">blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">contact</a>
                </li>
            </ul>
            <ul class="menu_icon d-flex flex-wrap">
                <li>
                    <a href="#" class="menu_search"><i class="far fa-search"></i></a>
                    <div class="fp__search_form">
                        <form>
                            <span class="close_search"><i class="far fa-times"></i></span>
                            <input type="text" placeholder="Tìm Kiếm . . .">
                            <button type="submit">TÌm Kiếm</button>
                        </form>
                    </div>
                </li>
                <li>
                    <a class="cart_icon"><i class="fas fa-shopping-basket"></i> <span>5</span></a>
                </li>
                <li>
                    @if (Auth::check())
                        <a href="{{ route('profile') }}">
                            <img src="{{ Auth::user()->avatar }}"
                                style="width: 40px !important;height:40px !important; border-radius:50%"
                                id="hd_img" />
                        </a>
                    @else
                        <a href="{{ route('login') }}"><i class="fas fa-user"></i></a>
                    @endif
                </li>
                <li>
                    <a class="common_btn" href="#" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Đặt
                        Bàn</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="fp__menu_cart_area">
    <div class="fp__menu_cart_boody">
        <div class="fp__menu_cart_header">
            <h5>total item (05)</h5>
            <span class="close_cart"><i class="fal fa-times"></i></span>
        </div>
        <ul>
            <li>
                <div class="menu_cart_img">
                    <img src="frontend/images/menu8.png" alt="menu" class="img-fluid w-100">
                </div>
                <div class="menu_cart_text">
                    <a class="title" href="#">Hyderabadi Biryani </a>
                    <p class="size">small</p>
                    <span class="extra">coca-cola</span>
                    <span class="extra">7up</span>
                    <p class="price">$99.00 <del>$110.00</del></p>
                </div>
                <span class="del_icon"><i class="fal fa-times"></i></span>
            </li>
            <li>
                <div class="menu_cart_img">
                    <img src="frontend/images/menu4.png" alt="menu" class="img-fluid w-100">
                </div>
                <div class="menu_cart_text">
                    <a class="title" href="#">Chicken Masalas</a>
                    <p class="size">medium</p>
                    <span class="extra">7up</span>
                    <p class="price">$70.00</p>
                </div>
                <span class="del_icon"><i class="fal fa-times"></i></span>
            </li>
            <li>
                <div class="menu_cart_img">
                    <img src="frontend/images/menu5.png" alt="menu" class="img-fluid w-100">
                </div>
                <div class="menu_cart_text">
                    <a class="title" href="#">Competently Supply Customized Initiatives</a>
                    <p class="size">large</p>
                    <span class="extra">coca-cola</span>
                    <span class="extra">7up</span>
                    <p class="price">$120.00 <del>$150.00</del></p>
                </div>
                <span class="del_icon"><i class="fal fa-times"></i></span>
            </li>
            <li>
                <div class="menu_cart_img">
                    <img src="frontend/images/menu6.png" alt="menu" class="img-fluid w-100">
                </div>
                <div class="menu_cart_text">
                    <a class="title" href="#">Hyderabadi Biryani</a>
                    <p class="size">small</p>
                    <span class="extra">7up</span>
                    <p class="price">$59.00</p>
                </div>
                <span class="del_icon"><i class="fal fa-times"></i></span>
            </li>
            <li>
                <div class="menu_cart_img">
                    <img src="frontend/images/menu1.png" alt="menu" class="img-fluid w-100">
                </div>
                <div class="menu_cart_text">
                    <a class="title" href="#">Competently Supply</a>
                    <p class="size">medium</p>
                    <span class="extra">coca-cola</span>
                    <span class="extra">7up</span>
                    <p class="price">$99.00 <del>$110.00</del></p>
                </div>
                <span class="del_icon"><i class="fal fa-times"></i></span>
            </li>
        </ul>
        <p class="subtotal">sub total <span>$1220.00</span></p>
        <a class="cart_view" href="cart_view.html"> view cart</a>
        <a class="checkout" href="check_out.html">checkout</a>
    </div>
</div>

<div class="fp__reservation">
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Đặt Bàn</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="fp__reservation_form">
                        <input class="reservation_input" type="text" placeholder="Họ và tên">
                        <input class="reservation_input" type="text" placeholder="Số điện thoại">
                        <input class="reservation_input" type="date">
                        <select class="reservation_input" id="select_js">
                            <option value="">Chọn Khung Giờ</option>
                            <option value="">08.00 tới 09.00 </option>
                            <option value="">10.00 tới 11.00</option>
                            <option value="">12.00 tới 13.00 </option>
                            <option value="">14.00 tới 15.00 </option>
                            <option value="">16.00 tới 17.00 </option>
                        </select>
                        <input class="reservation_input" type="text" placeholder="Số lượng khách">
                        <button type="submit">Đặt Bàn</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
