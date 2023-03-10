<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage - Soul Burger</title>
    <link rel="stylesheet" href="./src/css/style.css">
    <link rel="stylesheet" href="./src/css/responsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Inter&display=swap" rel="stylesheet">
    <script src="./src/js/main.js"></script>
    <link rel="stylesheet" href="./src/css/bootstrap.min.css">
    <link rel="stylesheet" href="./src/css/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="container">
        <header>
            <div class="logo">
                <a href = "../Assignment/index.php" class = "navbar-brand">
                    <img src = "../Assignment/src/img/index/logo-png.png" alt = "logo">
                    <h2>Soul Burger</h2>
                  </a>
            </div>
            <img class="list-icon" src="../src/img/index/list-icon.png" alt="">
            <div class="header-item">
                <div class="header-item-box">
                    <img src="../src/img/index/close-icon.png" alt="" class="close-icon">
                    <div class="menu">
                        <ul>
                            <li><a href="../index.php">Trang chủ</a></li>
                            <li><a href="../Assignment/view/About.html">Giới thiệu</a></li>
                            <li><a href="../Assignment/view/product.html">Thực đơn</a></li>
                            <li><a href="../Assignment/view/blog.html">Tin tức</a></li>
                            <li><a href="../Assignment/view/Contact.html">Liên hệ</a></li>
                        </ul>
                    </div>
                    <div class="authenticate">
                        <a href="../cart.html"><img src="./src/img/index/cart.png" alt=""></a>
                        <a href="./controller/login.php" class="button" id="signin-btn">Đăng nhập</a>
                        <a href="../Assignment/view/Contact.html" class="button" id="signup-btn">Đăng ký</a>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="banner">
                <div class="banner-desc">                   
                    <h2>
                        Chào mừng đến với <span>Soul Burger</span>
                    </h2>                 
                    <p style="margin-top: 20px;">
                        Những đầu bếp giỏi nhất và những người giao hàng giỏi nhất đều phục vụ bạn. Đồ ăn ngon nóng hổi sẽ đến tay bạn sau 60 phút 😋
                    </p>
                    <span class="quantity-food" style="margin-top: 20px; color: white;">Đặt ngay</span>
                </div>
                <div class="banner-img">
                    <img src="./src/img/index/home-img1.png" alt="">
                </div>
            </div>
            <h1 class="box-heading" style="text-align: center; margin-top: 50px; margin-bottom: 50px;">Giới thiệu</h1>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 about">
                    <div class="about_box">
                        <h3>Soul Burger</h3>
                        <p>Dù ở đâu, Soul Burger cũng luôn giữ đúng tinh thần, làm hài lòng khẩu vị của thực khách khó tính nhất khi đến thưởng thức tại nhà hàng. Các cửa hàng của Soul Burger cũng sẽ giữ vững phương châm phục vụ của Soul Burger “những bữa ăn thân thiện với gia đình”, thể hiện qua đội ngũ nhân viên phục vụ được đào tạo chuyên nghiệp, nhanh chóng và thân thiện, không gian thoải mái, thiết kế nội thất hiện đại, những món ăn tươi ngon và nóng sốt, thức uống mát lạnh và an toàn vệ sinh tuyệt đối.</p>
                        <a href="About.html">Đọc thêm <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                 <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 about_img_boxpdnt">
                    <div class="about_img" style="margin-bottom: -50px;">
                        <figure><img src="https://d9hyo6bif16lx.cloudfront.net/live/img/production/detail/menu/lunch-dinner_burgers_all-american-burger.jpg" alt="#/" width="100px" height="320px"></figure>
                    </div>
                </div>      
              </div> 
            <div class="popular-product">
                <div class="popular-product-text">
                    <h1 class="box-heading">Các Món ăn mới</h1>
                    <p>
                        Định luật bảo toàn tính mạng, đói là phải ăn, khát là phải uống
                    </p>
                </div>
                <div class="filter">
                    <select name="filter-selected" id="filter-selected">
                        <option value="" hidden>Chọn giá</option>
                        <option value="all">Tất cả</option>
                        <option value="under30">Dưới 30.000 VNĐ</option>
                        <option value="over30">Trên 30.000 VNĐ</option>
                    </select>
                </div>
                <div class="products"></div>
            </div>
            <div class="categories">
                <div class="heading">
                    <h1 class="box-heading">Danh mục</h1>
                    <a href="#" class="view-all">Xem tất cả danh mục</a>
                </div>
                <div class="categories-bar"></div>
            </div>
            <div class="contact">
                <h1 class="box-heading">
                    Liên hệ
                </h1>
                <div class="form-contact-box">
                    <form action="" id="contact">
                        <div class="form-box">
                            <div class="form-group">
                                <label for="">Họ</label>
                                <input class="form-control" name="name" id="name" type="text" rules="required">
                                <span class="error-message">Hello</span>
                            </div>
                            <div class="form-group">
                                <label for="">Tên</label>
                                <input class="form-control" name="email" id="email" type="text"  rules="required|email">
                                <span class="error-message"></span>
                            </div>
                            <div class="form-group">
                                <label for="">Số điện thoại</label>
                                <input class="form-control" name="" id="subject" type="text"  rules="required">
                                <span class="error-message"></span>
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input class="form-control" name="" id="subject" type="text"  rules="required">
                                <span class="error-message"></span>
                            </div>
                            <div class="form-group">
                                <label for="">Lời nhắn</label>
                                <textarea class="form-control" name="message" id="message"  rules="max:150"></textarea>
                                <span class="error-message"></span>
                            </div>
                        </div>
                        <button type="submit">Gửi</button>
                    </form>
                </div>
            </div>
        </main>
        <footer>
            <div class="logo">
                <a href = "index.html" class = "navbar-brand">
                    <img src = "./src/img/index/logo-png.png" alt = "logo">
                    <h2>Soul Burger</h2>
                  </a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="./index.html">Trang chủ</a></li>
                    <li><a href="./About.html">Giới thiệu</a></li>
                    <li><a href="./product.html">Thực đơn</a></li>
                    <li><a href="./blog.html">Tin tức</a></li>
                    <li><a href="./Contact.html">Liên hệ</a></li>
                </ul>
            </div>
        </footer>
    </div>
    <script src="./src/js/main.js"></script>
    <script src="./src/js/validator.js"></script>
    <script>
        handleMenu();
        renderProducts('.products', ListProduct);
        renderCategories('.categories-bar', true);
        let contactValidate = new Validator('#contact');
        contactValidate.onSubmit = function(type) {
            alert(`${type} thành công`);
        }
    </script>
</body>

</html>