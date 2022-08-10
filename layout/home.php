<h3 class="title">HÀNG MỚI VỀ</h3>
<div class="products">
    <?php
    $listProductsabc = showProductNew();
    foreach ($listProductsabc as $key => $value) {
       echo '
        <div class="product">
            <div class="img-order">
                <div class="img-product">
                    <a href="'.$ROOT.'?detail='.$value['id'].'"><img src="'.$ROOT.'/assets/images/'.$value['images'].'" alt=""> </a>
                </div>
                <div class="order">
                    <button><a href="'.$ROOT.'?detail='.$value['id'].'">XEM CHI TIẾT</a></button>
                    
                </div>
            </div>
            <h3>'.$value['name'].'</h3>
            <h5 class="views">'.$value['view'].'  <img src="'.$ROOT.'/assets/icon/eye.png" width="20px" alt=""></h5>
            <h2>'.number_format($value['price']).' ₫</h2>

        </div>
       ';
    }
    ?>

</div>