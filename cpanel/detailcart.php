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
                    <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name Product</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Quantity</th>  
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Image</th>  
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Size</th>
                      <th class=" text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total</th>
            
                      

                    </tr>
                  </thead>
                  <tbody>
                  <?php 
   
  
   foreach ($DetailCart as $key => $value) {
       echo '
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">'.$value['name_product'].'</h6>
                            
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">'.$value['quantity'].'</p>
                     
                      </td>
                      <td>
                      <p class="text-xs font-weight-bold mb-0">'.number_format($value['price']).' VN??</p>
                   
                    </td>
                    <td>
                    <p class="text-xs font-weight-bold mb-0"><img width="80px" src="'.$ROOT.'/assets/images/'.$value['images'].'" /></p>
                 
                  </td>
                  <td>
                  <p class="text-xs  font-weight-bold mb-0">'.$value['size'].'</p>
               
                </td>
                <td>
                <p class="text-xs font-weight-bold mb-0">'.number_format($value['price'] * $value['quantity']).' VN??</p>
             
              </td>
                     
                    
                   
                    
                    </tr>
                
                    ';
                  }
                  ?>
                 
                    
                 
                  </tbody>
                    
                  <tfoot>
                  <tr>
                          <td>T???ng ti???n</td>
                          <td><?=number_format($infocart[0]['total'])?> VN??</td>
                      </tr>
                      <tr>
                          <th>TH??NG TIN NG?????I NH???N:</th>
                      </tr>
                      <tr>
                          <th>?????a ch???:<?=$infocart[0]['address']?> </th>
                          <th>S??? ??i???n tho???i: <?=$infocart[0]['phone']?></th>
                          <th>H??? t??n: <?=$infocart[0]['name']?></th>
                      </tr>
                    <tr>
                     
                      <td>
                        <h3>?????i tr???ng th??i ????n h??ng</h3>
                        <form method="POST">
                          <select name="status" id="">
                            <option value="??ang x??? l??">??ang x??? l??</option>
                            <option value="??ang ????ng g??i">??ang ????ng g??i</option>
                            <option value="??ang v???n chuy???n">??ang v???n chuy???n</option>
                            <option value="G???i h??ng th??nh c??ng">G???i h??ng th??nh c??ng</option>
                            <option value="????n h??ng ???? b??? h???y">????n h??ng ???? b??? h???y</option>
                          </select> <br> <br>
                          <button name="btn_status" style="background-color: white;" type="submit" >X??c nh???n</button>
                        </form>
                      </td>
                    </tr>
                  </tfoot>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>