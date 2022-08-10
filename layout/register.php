<div id="registerform" class="login-link">
            <h5 class="l-homepage"><a href="./index.html">Trang chủ</a></h5><h5 class="d-account"><a href="">Tài khoản</a></p>
        </div>
        <div class="account-content">
            <div class="acc-banner">
                <img src="./assets/banner/image 17.png" width="650px" alt="">
            </div>
            <div class="acc-form">
                <h3>TẠO TÀI KHOẢN</h3>
                <p>Nếu bạn đã có tài khoản, hãy đăng nhập để tích lũy điểm thành
                    viên và nhận được những ưu đãi tốt hơn!
                    </p>
                <form method="POST">
                    <div class="acc-fullname">
                        <label for="">Full name *</label>
                        <input type="text" name="fullname" id="fullname">
                      </div>
                  <div class="acc-emaill">
                    <label for="">Email *</label>
                    <input type="email" name="email" id="email">
                  </div>
                  <div class="acc-password">
                    <label for="">Password *</label>
                    <input type="password" name="password" id="password">
                  </div>
                  <div class="result">
                      <h1><?=$kq?></h1>
                  </div>
                  <button name="btn_submit">TẠO TÀI KHOẢN</button>
                  <a class="register" href="?login">ĐĂNG NHẬP</a>
                </form>
            </div>
        </div>