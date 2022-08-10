<?php 

include "../dao/db.php";
include "../global.php";
include "../dao/admin.php";
$view = "vidieu.php";
extract($_REQUEST);

// check quyền
if(!isset($_SESSION['roleId'])){
    header("location: $ROOT?login");
}else if($_SESSION['roleId'] != 1) {
    echo "Chỉ admin mới có quyền truy cập";
    exit;
   }

// ADD CATEGORY + PRODUCTS
if(isset($_GET['show'])){
    $view = "show.php";
}

if(isset($_GET['add'])){
    if(isset($addproduct)){
        $images = upload_file('images','../assets/images/');
        $images1 = upload_file('images1','../assets/images/');
        $images2 = upload_file('images2','../assets/images/');
        $addproduct = addproduct($name,$price,$sale,$images,$images1,$images2,$view,$description,$idcategory);
        if($addproduct == 1) header("location: ?show=showproducts");
         else $kq = $addproduct;
    }else if(isset($btn_category)){
        $addcategorys = addcategory($name);
     
        if($addcategorys == 1) header("location: /?show"); else $kq = $addcategorys;
    }

    $view = "add.php";
}

// UPDATE PRODUCT
if(isset($_GET['edit'])){
    if(isset($_POST['updateProduct'])){
      $images = upload_file('images','../assets/images/');
      $images1 = upload_file('images1','../assets/images/');
      $images2 = upload_file('images2','../assets/images/');
        if(!$images) {
            $images = $old_img;
        }
        if(!$images1) {
            $images1 = $old_imga;
        }
         if(!$images2) {
            $images2 = $old_imgb;
        }
      $updateProduct2 = updateProduct($name,$price,$sale,$images,$images1,$images2,$description,$idcategory,$idsp);
      if($updateProduct2 == 1) {
          header("location: ?show=showproducts");
      }else{
          $kq = "Thất bại";
      }
      
     
     
    }else if($_GET['btn_sp']){
     
        $id = $_GET['btn_sp'];
        $showDetailProduct = showDetailProduct($id);
     
    }
    $view = "edit.php";
}
// UPDATE CATEGORYS
if(isset($_GET['edit'])){
    if(isset($_POST['btn_category'])){
        $updateCategory2 = updateCategory($name,$id_cate);
        if($updateCategory2) $kq = "Thành công"; else $kq = $updateCategory2;
    }else if(isset($_GET['btn_cate'])){
       
            $idcate = $btn_cate;
            $showDetailCate = showDetailCategory($idcate);
           
    }
    $view = 'edit.php';
}

// delete product
if(isset($_GET['delete_product'])){
    $id_delete = $_GET['delete_product'];
    deleteProduct($id_delete);
  
    $view = "show.php";
}
if(isset($_GET['delete_cate'])){
    $id_cate = $_GET['delete_cate'];
    deleteCategory($id_cate);
    header("location: /?show");
  
    $view = "show.php";
}

if(isset($_GET['detailcart'])){
    $idcart = $_GET['detailcart'];
    $DetailCart = (DetailCart($idcart));
    $infocart = showInfoCart($idcart);
    if(isset($_POST['btn_status'])){
        changeOrderStatus($_POST['status'],$idcart);
        header("location: ?show=showcart");
    }
    $view = "detailcart.php";
    
}
if(isset($_GET['deletecart'])){
    DeleteCart($_GET['deletecart']);
    header("location: ?show=showcart");
}


if(isset($_GET['comments'])) {
    
    $view = "comment.php";
}

if(isset($_GET['carts'])) {
    $view = "cart.php";
}


include "./tpl.php";
?>