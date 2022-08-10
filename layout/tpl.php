<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="<?= $ROOT?>/assets/css/homepage.css">
    <link rel="stylesheet" href="<?= $ROOT?>/assets/css/account.css">
    <link rel="stylesheet" href="<?= $ROOT?>/assets/css/detail.css">
    <link rel="stylesheet" href="<?= $ROOT?>/assets/css/detail-category.css">
    <link rel="stylesheet" href="<?= $ROOT?>/assets/css/cart.css">
    <link rel="stylesheet" href="<?= $ROOT?>/assets/css/ordersuccess.css">
</head>
<body>
    <header>
        <div class="header-top">
            <div class="header-contact">
                   <img src="./assets/icon/phone.png" width="20px" alt=""> 
                   <h3>Hỗ trợ khách hàng: <a href="tel:0982641483">1900 6666</a></p>
            </div>
        </div>
        <div class="header-menu">
            <div class="logo">
                <a href="<?=$ROOT?>"><img class="logoweb" src="https://giayxshop.vn/wp-content/uploads/2018/12/xshop.png"  alt=""></a>
            </div>
            <nav class="menu">
                <ul>
                    <li class="hot-ne"><a href="?hot">SẢN PHẨM HOT</a>
                    
                   <ul class="logo-hot">
                       <li><img src="./assets/icon/image 7.png" alt=""> </li>
                   </ul>
                    </li>
                    <li><a href="">Sản phẩm</a>
                     <ul class="subnav">
                        <?php 
                        $listCategorys = showCategoryHome();
                        foreach ($listCategorys as $key => $value) {
                            echo ' <li><a href="?category='.$value['id'].'">'.$value['name'].'</a></li>
                           ';
                        }
                        ?>
                     </ul>
                    </li>
                    <li><a href="?sale">Sale</a></li>
                    <li><a href="">Liên hệ</a></li>
                   
                </ul>
            </nav>
            <div class="left">
                <form action="?search=">
                    <div class="input">
                        <input type="text" placeholder="Bạn cần gì..." name="key" id="key">
                    </div>
                    <div class="icon">
                        <img src="./assets/icon/search.png" width="18px" alt="">
                    </div>
                </form>
                <div class="users">
                    <div class="logo">
                        <?php 
                        
                        if(isset($_SESSION['email'])){
                            echo ' <h3>Chào, '.$_SESSION['fullname'].' </h3> <br>
                            <a href="?logout">Đăng xuất</a>';
                        }else{
                            echo '  <a href="?login#loginform"><img src="./assets/icon/user.png" width="30px" alt=""></a>';
                        }
                        ?>
                        
                    </div>
                    
                </div>
                <div class="cart">
                   
                    <a href="?cart"><img src="./assets/icon/bags.png" width="30px" alt=""></a>
                    <?php 
                    if(isset($_SESSION['carts'])) {
                        echo '<span class="cart-quantity">'.count($_SESSION['carts']).'</span>';
                    }
                    ?>
                </div>
            </div>

        </div>
    </header>
    <div class="brooch">
        <h3>NẮNG LÊN PHỐ, CHÀNG LÊN ĐỒ</h3>
    </div>
    <section class="banner">
    <div class="slideshow-container">

<!-- Full-width images with number and caption text -->
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="https://www.caoto.vn/images/slider-2.png" style="width:100%">
 
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="http://cdn-img-v2.webbnc.net/uploadv2/web/55/5544/slide/2017/02/10/07/01/1486709511_banner5.png?v=4" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="https://sotavn.com/media/stories/images/thiet-ke-logo-giay-the-thao-4.png" style="width:100%">
  
</div>

<!-- Next and previous buttons -->
<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
<span class="dot" onclick="currentSlide(1)"></span>
<span class="dot" onclick="currentSlide(2)"></span>
<span class="dot" onclick="currentSlide(3)"></span>
</div>
    </section>

    <script>
    let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
    </script>

    <main>
       <?php include $view; ?>
    </main>
    <section class="footer-banner">
        <img src="./assets/banner/lambanner-thiet-ke-banner-nhu-nike.jpg" alt="">
    </section>
    <!-- <div class="customer-reviews">
        <div class="logo">
            <img src="./assets/banner/2.jpg" alt="">
        </div>
        <div class="input-reviews">
            <div class="reviews">
                <h3>Contact Us</h3>
                <form action="">
                    <p>Your name *</p> <br>
                    <input type="text" name="" placeholder="Full name" id=""> <br>
                    <p>Email *</p> <br>
                    <input type="text" name="" placeholder="Full name" id=""> <br>
                    <p>Message *</p> <br>
                    <textarea name="" id="" cols="43" rows="5"></textarea> <br>
                    <button>Submit *</button>
                </form>
            </div>
        </div>
    </div> -->
    <footer>
       <div class="footer-m">
            <div class="address">
                <img src="https://iweb.tatthanh.com.vn/pic/3/blog/images/logo-giay(33).jpg" width="100px" alt="">
                <h5 class="name-company">
                    CÔNG TY CỔ PHẦN THỜI TRANG KOWIL VIỆT NAM
Hotline: 1900 8079
                </h5>
                <p><span class="vitri">VP Phía Bắc</span>: Tầng 17 tòa nhà Viwaseen, 48 Phố Tố Hữu,
                    Trung Văn, Nam Từ Liêm, Hà Nội.
                    </p>
            </div>
            <div class="f-right">
                <div class="connect">
                    <h5>
                        KẾT NỐI
                    </h5>
                    <div class="iconf">
                       <a href=""> <img src="./assets/icon/fb.png" alt=""></a>
                        <a href=""><img src="./assets/icon/insta.png" alt=""></a>
                        <a href=""><img src="./assets/icon/ytb.png" alt=""></a>
                    </div>
                </div>
                <div class="connect">
                    <h5>
                        PHƯƠNG THỨC THANH TOÁN
                    </h5>
                    <div class="iconf">
                       <a href=""> <img src="./assets/icon/paypal.png" alt=""></a>
                        <a href=""><img src="./assets/icon/visa.png" alt=""></a>
                        <a href=""><img src="./assets/icon/349237.png" alt=""></a>
                        <a href=""><img src="./assets/icon/money.png" alt=""></a>
                    </div>
                </div>
                <div class="logo">
                    <img src="./assets/icon/image 16.png" alt="">
                </div>

            </div>
       </div>
    </footer>
</body>
</html>