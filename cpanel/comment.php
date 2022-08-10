<a href="?carts">don hang</a>
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
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CONTENT</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">LINK BÀI BÌNH LUẬN</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TIME</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">XOÁ</th>

                    </tr>
                  </thead>
                  <tbody>
                  <?php 
   
   $listCmt = listCMT();
   foreach ($listCmt as $key => $value) {
       echo '
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          <div style="" class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm" >'.$value['content'].'</h6>
                            
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0"><a href="'.$ROOT.'?detail='.$value['idproduct'].'">Link bài</a></p>
                     
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">'.$value['time'].'</span>
                      </td>
                    
                  
                   
                    
                      <td class="align-middle text-center">
                        <a href="'.$ROOT_ADMIN.'/?deletecmt='.$value['id'].'" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
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