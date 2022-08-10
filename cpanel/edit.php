<?php 
if($_GET['edit'] == 'editproduct'){
    ?>
    <form method="POST" enctype="multipart/form-data">
    <input type="hidden" value="<?=$showDetailProduct[0]['id']?>" name="idsp" id="">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Tên sản phẩm:</label>
  <input type="text" class="form-control" id="name" name="name" value="<?=$showDetailProduct[0]['name']?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Giá:</label>
  <input type="number" class="form-control" id="price" name="price" value="<?=$showDetailProduct[0]['price']?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Giảm giá (%):</label>
  <input type="text" class="form-control" id="sale" name="sale" value="<?=$showDetailProduct[0]['sale']?>">
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Ảnh (AVATAR)</label>
  <input class="form-control" type="file" id="images" name="images">
  <img width="50px" src="../assets/images/<?=$showDetailProduct[0]['images']?>" alt="">
  <input type="hidden" name="old_img" value="<?=$showDetailProduct[0]['images']?>" id="">
  
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Ảnh 1</label>
  <input class="form-control" type="file" id="images1" name="images1">
  <img width="50px" src="../assets/images/<?=$showDetailProduct[0]['images1']?>" alt="">
  <input type="hidden" name="old_imga" value="<?=$showDetailProduct[0]['images1']?>" id="">
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Ảnh 2</label>
  <input class="form-control" type="file" id="images2" name="images2">
  <img width="50px" src="../assets/images/<?=$showDetailProduct[0]['images2']?>" alt="">
  <input type="hidden" name="old_imgb" value="<?=$showDetailProduct[0]['images2']?>" id="">
</div>
<div class="mb-3">
 
  <input type="hidden" class="form-control" id="view" name="view" value="0">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Mô tả sản phẩm</label>
  <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"><?=$showDetailProduct[0]['description']?></textarea>
</div>
<select class="form-select" name="idcategory" aria-label="Default select example">
  
  <?php 
  $listdm = showcategorys();
  foreach ($listdm as $key => $value) {
     ?>
     <option 
     <?php if($value['id'] == $showDetailProduct[0]['idcategory']):?>
        selected
        <?php endif ?>
     value="<?=$value['id']?>"><?=$value['name']?></option>
 <?php }
  ?>
  
</select>
<div class="mb-3">
<h5><?php if(isset($kq)) {
    echo $kq;
  } ?></h5>
</div>
<button type="submit" name="updateProduct" class="btn btn-primary">Sửa sản phẩm</button>
</form>
<?php 
}else if($_GET['edit'] == 'editcategory') {
    ?>
    <form method="POST">
    <div class="mb-3">
      <input type="hidden" value="<?=$showDetailCate[0]['id']?>" name="id_cate" id="">
  <label for="exampleFormControlInput1" class="form-label">Tên danh mục:</label>
  <input type="text" class="form-control" id="name" value="<?=$showDetailCate[0]['name']?>" name="name" placeholder="Tên danh mục">
</div>
<div class="mb-3">
  <h5><?php if(isset($kq)) {
    echo $kq;
  } ?></h5>
</div>
<button type="submit" name="btn_category" class="btn btn-primary">Sửa danh mục</button>
</form>
<?php }
?>