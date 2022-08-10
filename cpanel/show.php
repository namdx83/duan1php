<?php 
if(isset($_GET['show']) && $_GET['show'] == 'showproducts') {
    ?>
  <div class="row">
        <div class="col-12">
          <div class="card my-4">
         
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3"> <a href="?add=addproduct">Thêm sản phẩm</a></h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Price</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sale</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">View</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Time</th>
                      <th class="text-secondary opacity-7">Edit</th>
                      <th class="text-secondary opacity-7">Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
   
   $listproduct = showproducts();
   foreach ($listproduct as $key => $value) {
       echo '
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <img src="../assets/images/'.$value['images'].'" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">'.$value['name'].'</h6>
                            
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">'.number_format($value['price']).' VNĐ</p>
                     
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">'.$value['sale'].'</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">'.$value['view'].'</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">'.$value['description'].'</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">'.$value['time'].'</span>
                      </td>
                      <td class="align-middle text-center">
                        <a href="?edit=editproduct&btn_sp='.$value['id'].'" class="btn btn-primary text-while font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user " >
                          Edit
                        </a>
                      </td>
                      <td class="align-middle text-center">
                        <a href="?show=showproducts&delete_product='.$value['id'].'" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                        <button class = "btn btn-primary" onclick="confirm()">delete</button>
                        </a>
                      </td>
                    </tr>
                
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

}else if(isset($_GET['show']) && $_GET['show'] == 'showcategory'){
    ?>
    <div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h6 class="text-white text-capitalize ps-3"><a href="<?=$ROOT_ADMIN?>?add=">Thêm danh mục</a></h6>
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                  <th class="text-secondary opacity-7">Edit</th>
                  <th class="text-secondary opacity-7">Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                $listCate = showcategorys();
                foreach ($listCate as $key => $value) {
                  echo '
                  <tr>
               
               
               
                  <td class="align-middle">
                    <span class="text-secondary text-xs font-weight-bold">'.$value['name'].'</span>
                  </td>
               
                  <td class="align-middle">
                    <a href="'.$ROOT_ADMIN.'?edit=editcategory&btn_cate='.$value['id'].'" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                      Edit
                    </a>
                  </td>
                  <td class="align-middle ">
                    <a href="'.$ROOT_ADMIN.'?show&delete_cate='.$value['id'].'" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                      Delete
                    </a>
                  </td>
                </tr>
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
  
<?php }else if(isset($_GET['show']) && $_GET['show'] == 'showcart'){
  ?>
<div class="row">
    <div class="col-12">
      <div class="card my-4">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
           
          </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CODE ORDERS</th>
                  <th class="text-secondary opacity-7">Detail cart</th>
                  <th class="text-secondary opacity-7">Status</th>
                

                </tr>
              </thead>
              <tbody>
                <?php 
                $listCart = showCart();
                foreach ($listCart as $key => $value) {
                  echo '
                  <tr>
               
               
               
                  <td class="align-middle">
                    <span class="text-secondary text-xs font-weight-bold">CODE: '.$value['id'].'</span>
                  </td>
               
                  <td class="align-middle">
                    <a href="'.'?detailcart='.$value['id'].'" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                      Detail cart
                    </a>
                  </td>
                  <td class="align-middle">
                 
                    '.$value['status'].'
                  
                </td>
                  
                  ';
                }
                ?>
            
              
             
                <script>
                  function confirm() {
                   const confirm = window.confirm("ban the nao")
                  }
                </script>
             
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php }

?>