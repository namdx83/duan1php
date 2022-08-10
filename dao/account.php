<?php 
function register($fullname,$email,$password,$roleId) {
    $sql = "INSERT INTO users(fullname,email,password,roleId) VALUES(?,?,?,?)";
    return pdo_execute($sql, $fullname, $email, $password, $roleId);
}
function login($email,$password) {
    $sql = "SELECT * FROM users WHERE email=? AND password=?";
    return pdo_query_one($sql,$email,$password);
}
?>