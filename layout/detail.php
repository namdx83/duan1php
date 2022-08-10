<form method="POST">
<div class="detail-content">
          <div class="detail-link">
              <h5 class="d-homepage"><a href="<?=$ROOT?>">Trang chủ</a></h5><h5 class="d-namecate"><a href="?detail=<?=$showDetailProduct1[0]['id']?>">Chi tiết sản phẩm</a></p>
          </div>
          <div class="d-products">
              <div class="img-product">
                  <img class="anhgoc" src="<?=$ROOT?>/assets/images/<?=$showDetailProduct1[0]['images']?>" alt="">
              </div>
              <div class="img-products">
                  <img class="btn anh1 distance" src="<?=$ROOT?>/assets/images/<?=$showDetailProduct1[0]['images']?>" alt="">
                  <img class="btn anh2 distance" src="<?=$ROOT?>/assets/images/<?=$showDetailProduct1[0]['images1']?>" alt="">
                  <img class="btn anh3 distance" src="<?=$ROOT?>/assets/images/<?=$showDetailProduct1[0]['images2']?>" alt="">
              </div>
              <div class="d-title-heading">
                    <h3 class="d-name-product distance"><?=$showDetailProduct1[0]['name']?></h3>
                    <p class="code-product distance">MÃ SP: BLV<?=$showDetailProduct1[0]['id']?></p>
                    <div class="prices">
                        <?php   
                        $ai = intval($showDetailProduct1[0]['sale']);
                       
                       $percent = ($ai/100)*$showDetailProduct1[0]['price'];
                        $pricenew = $showDetailProduct1[0]['price'] - $percent;
                        ?>
                    <h3 class="price distance"><?=number_format($pricenew)?> ₫</h3>
                    <del><?=number_format($showDetailProduct1[0]['price'])?> ₫</del>
                    </div>
                    <div class="size distance">
                        <h3>Kích cỡ:

                                <input type="hidden" name="sale" value="<?=$showDetailProduct1[0]['sale']?>" id="">
                                <select name="sizes" id="">
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                </select>
                          
                        </h3>
                     
                    </div>
                    <div class="size-guide distance">
                        <img src="./assets/icon/size.png" alt=""> <h5><a href="./assets/icon/b_ng_size_owen_2_1_.jpg">Hướng dẫn chọn size</a></h5>
                    </div>
                    <div class="d-order distance">
                    
                           <h5>Số lượng :</h5>
                          <input type="number" value="1" name="quantity" id="quantity">
                           
                          <button name="addcart" class="addcart">Thêm vào giỏ hàng</button>
                      
                    </div>
                    <div class="description">
                        <h3>Mô tả:</h3>
                        <p class="distance"><?=$showDetailProduct1[0]['description']?>
                            </p>
                    </div>
                    <div class="policy">
                        <h4>→CHÍNH SÁCH CỘNG TÁC VIÊN</h4>
                        <ul>
                            <li>Liên tục tuyển CTV trên toàn quốc</li>
                            <li>Nhận giao hộ CTV trên toàn quốc không mất phí gói hàng</li>
                            <li>Các đơn hàng 1-2-3... Đôi đều đống giá ship là 35K</li>
                        </ul>
                    </div>
              </div>
          </div>

          <div class="comments">
              <h3>Bình luận:</h3>
            
        <?php 
        if(isset($_SESSION['id'])  && $_SESSION['roleId'] != 3) {
            ?>
              <textarea name="content" id="" cols="50" rows="3"></textarea> <br>
                  <button name="btn_cmt">Gửi bình luận</button>
       <?php }else{
           echo "Bạn chưa đăng nhập hoặc đã bị chặn bình luận";
       }
        ?>


            <?php 
            $listCmt = showCmt($detail);
            foreach ($listCmt as $key => $value) {
               ?>
                <div class="item-cmt">
                <div class="logo-user">
                    <img src="<?=$ROOT?>/assets/icon/users.png"    width="60px" alt="">
                </div>
                <div class="content-cmt">
                    <h5><?=$value['fullname']?> - <i><?=$value['time']?>  <?php if(isset($_SESSION['id']) && $_SESSION['id'] == 1) {
                           echo '
                           <input type="hidden" name="iduser" value="'.$value['iduser'].'"/>
                           
                           <button name="btn_block" class="btn_block">Chặn cmt</button>
                           
                           
                           ';
                          
                    } ?></i></h5>
                   
                    <p><?=$value['content']?></p>
                </div>
         </div>
     
        <?php    } 
        ?>
            
           
        
           
            
          </div>
         <h3 class="d-similar-h3">SẢN PHẨM CÙNG DANH MỤC:</h3>
         <div class="d-similar-products">
           
            <?php 
            foreach ($similarProduct as $key => $value) {
               echo '
               <div class="d-product">
               <a href="?detail='.$value['id'].'"> <img width="100%" src="'.$ROOT.'/assets/images/'.$value['images'].'" alt="">  </a>
               <a href="?detail='.$value['id'].'"><h3>'.$value['name'].'</h3></a>
               <p class="price">'.number_format($value['price']).'  ₫</p>
           </div>
               ';
            }
            ?>
         </div>
      </div>
      </form>
      <script>
         
          var addcart = document.querySelector(".addcart");
          addcart.onclick = function() {
            var quantity = document.querySelector("#quantity").value;
            if(quantity < 1) {
              alert("Số lượng phải lớn hơn 1");
              return false;
          }
          }
          
          var btns = document.querySelectorAll(".btn");
          var anhgoc = document.querySelector(".anhgoc");
          btns.forEach((btnElement) => {
              const src = btnElement.src;
              btnElement.addEventListener("click", () => {
                
                  anhgoc.src = src;
              })
          })
      </script>