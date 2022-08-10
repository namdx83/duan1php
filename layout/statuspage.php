
<?php 
$id = $_GET['status'];

?> 
<h5 id="trangthai">Hãy lưu lại liên kết này để theo dõi trạng thái đơn hàng của bạn !!!</h5>
<div class="statuspage">
           <table>
               <thead>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                    <th>Ảnh</th>
                    <th>Kích cỡ</th>
                    <th>Tổng tiền</th>
                </tr>
               </thead>
               <tbody>
                <?php 
                $showProductOrder = showDetailOrder1($id);
                
                foreach ($showProductOrder as $key => $value) {
                    echo '<tr>
                    <th>'.$value['name_product'].'</th>
                    <th>'.$value['quantity'].'</th>
                    <th>'.number_format($value['price']).' ₫</th>
                    <th><img src="'.$ROOT.'/assets/images/'.$value['images'].'" height="50px" width="80px" alt=""></th>
                    <th>'.$value['size'].'</th>
                    <th>'.number_format($value['quantity']* $value['price']).' ₫</th>
                </tr>';
                }
                ?>
               </tbody>
               <tfoot class="foottable">
                   <?php 
                   $showOrder1 = showOrder1($id);
                  
                   ?>
                    <tr>
                        <th>Tổng tiền</th>
                        <th><?=number_format($showOrder1[0]['total'])?> ₫</th>
                    </tr>
                    <tr>
                        <th><h3>Thông tin người nhận:</h3></th>
                    </tr>
                    <tr>
                       <th>Địa chỉ: <?=$showOrder1[0]['address']?></th>
                       <th>Số điện thoại: <?=$showOrder1[0]['phone']?></th>
                       <th>Họ tên: <?=$showOrder1[0]['name']?></th>
                    </tr>
                    <tr>
                        <th>Trạng thái: <?=$showOrder1[0]['status']?></th>
                    </tr>
               </tfoot>
           </table>
       </div>
       
