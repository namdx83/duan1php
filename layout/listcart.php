
  
 
<div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
           
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table-control">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">STT</th>
                  <th class="text-secondary opacity-7">Name product</th>
                  <th class="text-secondary opacity-7">Giá</th>
                  <th class="text-secondary opacity-7">Số lượng</th>
                  <th class="text-secondary opacity-7">image</th>
                  <th class="text-secondary opacity-7">Size</th>
                

                </tr>
              </thead>
              <tbody>
                <?php 
                $listCart = showCart();
                foreach ($listCart as $key => $value) {
                  echo '
                  <tr>
               
               
               
                  <td class="align-middle">
                    <span class="text-secondary text-xs font-weight-bold"> '.$value['id'].'</span>
                  </td>
                  
               
                  <td class="align-middle">
                    <span class="text-secondary text-xs font-weight-bold"> '.$value['name_product'].'</span>
                  </td>
                  <td class="align-middle">
                    <span class="text-secondary text-xs font-weight-bold"> '.$value['price'].'</span>
                  </td>
                  <td class="align-middle">
                    <span class="text-secondary text-xs font-weight-bold"> '.$value['quantity'].'</span>
                  </td>
                  <td class="align-middle">
                  <p class="text-xs font-weight-bold mb-0"><img width="80px" src="../assets//images/'.$value['images'].'" /></p>
                  </td>
                  <td class="align-middle">
                  <span class="text-secondary text-xs font-weight-bold"> '.$value['size'].'</span>
                </td>
                  
                  ';
                }
                ?>
              
                
             
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php 

