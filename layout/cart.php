<a href="?listcart">Danh sách đơn hàng</a>
<div class="container">
    
            <form method="POST">
            <div class="carts">
                <a href="">Trang chủ</a>
                <h4>Giỏ hàng</h4>
                
                <table border="1">
                         <thead>
                             <tr>
                                 <th>#</th>
                                 <th>Tên sản phẩm</th>
                                 <th>Ảnh sản phẩm</th>
                                 <th>Đơn giá</th>
                                 <th>Số lượng</th>
                                 <th>Size</th>
                                 <th>Thành tiền</th>
                                 <th>Xoá</th>
                             </tr>
                         </thead>
                         <tbody>
                            <?php 
                           
                            if(isset($_SESSION['carts'])){
                               
                                $listCart = $_SESSION['carts'];
                                $stt = 1;
                             $tong = 0;
                                foreach ($listCart as $key => $value) {
                                    
                                 
                                   
                                  $tong += $value['quantity'] * $value['price'];
                                    echo ' <tr>
                                    <td  class="product-center">'.$stt++.'</td>
                                    <input type="hidden" value="'.$key.'">
                                    <td class="product-center">'.$value['name'].'</td>
                                    <td class="product-center"><img src="'.$ROOT.'/assets/images/'.$value['img'].'" width="80px" alt=""></td>
                                    <td class="product-center">'.number_format($value['price']).' VNĐ</td>
                                    <td class="product-center"><input type="number" value="'.$value['quantity'].'" name="quantity['.$key.']" id="quantity"></td>
                                    <td class="product-center"><input type="text" value="'.$value['size'].'"  disabled>
                                    <input type="hidden" value="'.$value['size'].'" name="size['.$key.']" id="size">
                                    <td class="product-center">'.number_format($value['quantity'] * $value['price']) .' VNĐ</td>
                                    <td class="product-center"><a href="?cart&delete_cart='.$key.'"><img src="'.$ROOT.'/assets/icon/delete.png" width="50px" alt=""></a></td>
                                </tr>';
                                   
                                }
                            }else{
                                echo "Không có đơn hàng";
                            }
                            
                            ?>
                             
                          
                         </tbody>
                         <tfoot>
                             
                             <tr>
                                 <td  class="product-center"></td>
                                 <td class="product-center">Tổng tiền</td>
                                 <td class="product-center"></td>
                                 <td class="product-center"></td>
                                 <td class="product-center"></td>
                                 <td class="product-center">
                                     
                                 </td>
                                 <td class="product-center"><?=isset($tong)? number_format($tong) : ""?> VNĐ</td>
                             </tr>
                         </tfoot>
                </table>
                <button type="submit" name="updateproduct" class="updatecart">Cập nhật</button>
                <div class="info-cart">
                   
                        <label for="">Người nhận:</label>
                        <input type="text" name="name" id="nameuser">
                        
                        <label for="">Số điện thoại:</label>
                        <input type="text" name="phone" id="phone">
                        
                        <label for="">Địa chỉ:</label>
                        <input type="text" name="address" id="address">
                       
                        <label for="">Ghi chú:</label>
                       <textarea name="note" id="note" cols="30" rows="10"></textarea>
                       <h1 style="color: red;" id="error"></h1> <br>
                       <button name="btn_order" type="submit" class="btn_order">Đặt hàng</button>
                   
                </div>
            </div>
          
        </div>
    </form>
    <script>
        var order = document.querySelector(".btn_order");
        
        order.addEventListener("click", (e) => {

                var nameuser = document.querySelector("#nameuser").value;
                var phone = document.querySelector("#phone").value;
                var address = document.querySelector("#address").value;
                var formatphone = /(((\+|)84)|0)(3|5|7|8|9)+([0-9]{8})\b/;
                if(!nameuser) {
                document.querySelector("#error").innerHTML = "Tên người dùng không được để trống";
                    e.preventDefault();
                }else if(!formatphone.test(phone)) {
                    document.querySelector("#error").innerHTML = "Vui lòng điền sdt đúng định dạng";
                    e.preventDefault();
                }else if(!address) {
                    document.querySelector("#error").innerHTML = "Vui lòng không để trống địa chỉ !";
                    e.preventDefault();
                }
                
        })
    </script>
     