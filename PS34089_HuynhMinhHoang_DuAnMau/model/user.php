<?php
/* Add user mới*/
function insert_user($name, $email, $username, $password)
{
    $sql = "INSERT INTO user (name, email, username, password) VALUES ('$name' , '$email', '$username', '$password')";
    insert($sql);
}
/* Check user*/
function checkusername($username, $password)
{
    $conn = connectdb();
    $stmt = $conn->prepare("SELECT * FROM user WHERE username='" . $username . "' AND password='" . $password . "'");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    if (count($kq) > 0) return $kq[0]['role'];
    else return 0;
}
/* Check email*/
function checkemail($email)
{
    $sql = "SELECT * FROM user WHERE email='" . $email . "'";
    return get_one($sql);
}
/* Lấy user để đăng nhập*/
function getuser($username, $password)
{
    $sql = "SELECT * FROM user WHERE username='" . $username . "' AND password='" . $password . "'";
    return get_all($sql);
}
/* Lấy tất cả user để showw trên admin */
function getall_user()
{
    $sql = "SELECT * FROM user WHERE 1 ORDER BY name";
    return get_all($sql);
}
/* Lấy 1 user */
function getone_user($id)
{
    $sql = "SELECT * FROM user WHERE id=" . $id;
    return get_one($sql);
}
/* Update user */
function  update_user($name, $email, $username, $password, $address, $phonenumber, $id)
{
    $sql = "UPDATE user SET name = '$name', email='$email' , username= '$username', password = '$password', address = '$address', phonenumber = '$phonenumber' WHERE id = " . $id;
    return update($sql);
}
