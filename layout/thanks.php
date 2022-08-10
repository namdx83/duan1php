<div class="ordersuccess" id="ordersuccess">
        <img src="<?=$ROOT?>/assets/logo/thank.avif" alt="" class="thankyou">
        <div class="content-order">
            <h3>Cảm ơn quý khách đã đặt hàng tại trang web của chúng tôi</h3>
            <span>Cảm ơn quý khách đã mua hàng tại trang web của chúng tôi.</span>
            <span>Quý khách kiểm tra kỹ và nhận sản phẩm trước khi thanh toán cho nhân viên giao hàng.</span>
            <?php 
            $id = $_GET['thank'];
            
            ?>
            <span>Để kiểm tra trạng thái đơn hàng quý khách vui lòng nhấn: <a class="athanks" href="?status=<?=$id?>#trangthai">vào đây</a></span>
            <span>Để tiếp tục mua hàng, quý khách vui lòng nhấn: <a class="athanks" href="<?=$ROOT?>">vào đây</a></span>
            <h3 class="thankyou">Thank you !!!</h3>
        </div>
       </div>