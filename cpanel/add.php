<?php 
if($_GET['add'] == 'addproduct'){
    ?>
    <form method="POST" enctype="multipart/form-data">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Tên sản phẩm:</label>
  <input type="text" class="form-control" id="name" name="name" placeholder="Tên sản phẩm">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Giá:</label>
  <input type="number" class="form-control" id="price" name="price" placeholder="Giá sản phẩm">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Giảm giá (%):</label>
  <input type="text" class="form-control" id="sale" name="sale" placeholder="10%">
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Ảnh (AVATAR)</label>
  <input class="form-control" type="file" id="images" name="images">
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Ảnh 1</label>
  <input class="form-control" type="file" id="images1" name="images1">
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Ảnh 2</label>
  <input class="form-control" type="file" id="images2" name="images2">
</div>
<div class="mb-3">
 
  <input type="hidden" class="form-control" id="view" name="view" value="0">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Mô tả sản phẩm</label>
  <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<select class="form-select" name="idcategory" aria-label="Default select example">
  
  <?php 
  $listdm = showcategorys();
  foreach ($listdm as $key => $value) {
     echo '<option value="'.$value['id'].'">'.$value['name'].'</option>';
  }
  ?>
  
</select>
<div class="mb-3">
  <h5><?php if(isset($kq)) {
    echo $kq;
  } ?></h5>
</div>
<button type="submit" name="addproduct" class="btn btn-primary">Thêm sản phẩm</button>
<?php 
}else {
    ?>
    <form method="POST">
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Tên danh mục:</label>
  <input type="text" class="form-control" id="name" name="name" placeholder="Tên danh mục">
</div>
<div class="mb-3">
  <h5><?php if(isset($kq)){
    echo $kq;
  } ?></h5>
</div>
<button type="submit" name="btn_category" class="btn btn-primary">Thêm danh mục</button>
</form>
<?php }
?>