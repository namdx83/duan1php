<?php 
function showProductNew() {
    $sql = "SELECT * FROM products ORDER BY time DESC LIMIT 8 ";
    return pdo_query($sql);
}
function showCategoryHome() {
    $sql = "SELECT * FROM categorys";
    return pdo_query($sql);
}

function showDetailProduct($id) {
    $sql = "SELECT * FROM products WHERE id=?";
    return pdo_query($sql,$id);
}
function updateView($view,$id) {
    $sql = "UPDATE products SET view=? WHERE id=?";
    return pdo_execute($sql,$view,$id);
}
function similarProduct($idcategory) {
    $sql = "SELECT * FROM products  WHERE idcategory=? LIMIT 4";
    return pdo_query($sql,$idcategory);
}
function detailCategorys($idcategory) {
    $sql = "SELECT * FROM products WHERE idcategory=?";
    return pdo_query($sql,$idcategory);
}
function searchProducts($key) {
    $sql = "SELECT * FROM products WHERE name LIKE ?";
    return pdo_query($sql,$key);
}
function addCmt($content,$iduser,$idproduct) {
    $sql = "INSERT INTO comments(content,iduser,idproduct) VALUES(?,?,?)";
    return pdo_execute($sql,$content,$iduser,$idproduct);
}
function showCmt($idproduct) {
    $sql = "SELECT * FROM comments cmt INNER JOIN users us ON cmt.iduser = us.id WHERE idproduct=? ORDER BY time DESC";
    return pdo_query($sql,$idproduct);
}
function productSale() {
    $sql = "SELECT * FROM products WHERE sale>0";
    return pdo_query($sql);
}
function productHot() {
    $sql = "SELECT * FROM products ORDER BY view DESC LIMIT 6";
    return pdo_query($sql);
}
function getProductbyId($id){
    $sql = "SELECT * FROM products WHERE `id` IN ($id)";
    return pdo_query($sql);
}
function addOrder($name,$phone,$address,$note,$total) {
    $sql = "INSERT INTO orders(name,phone,address,note,total) VALUES(?,?,?,?,?)";
    return pdo_executes($sql,$name,$phone,$address,$note,$total);
}
function addDetailOrder($order_id,$product_id,$quantity,$price,$images,$name_product,$size) {
   $sql = "INSERT INTO order_detail(order_id,product_id,quantity,price,images,name_product,size) VALUES(?,?,?,?,?,?,?)";
   return pdo_execute($sql,$order_id,$product_id,$quantity,$price,$images,$name_product,$size);
}
function editUser($id) {
    $sql = "UPDATE users SET roleId=3 WHERE id=?";
    return pdo_execute($sql,$id);
}
function DetailcartH($idcart) {
    $sql = "SELECT * FROM order_detail WHERE order_id=?";
    return pdo_query($sql,$idcart);
}
function showOrder1($id) {
    $sql = "SELECT * FROM orders WHERE id=?";
    return pdo_query($sql,$id);
}
function showDetailOrder1($id) {
    $sql = "SELECT * FROM order_detail WHERE order_id=?";
    return pdo_query($sql,$id);
}
function showCart() {
    $sql = "SELECT * FROM order_detail"; 
    return pdo_query($sql);
}
?>