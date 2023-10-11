<?php
function connectdb()
{
    $servername = "localhost";
    $username = "root";
    $password = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=asm_batabase", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected successfully";
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
/* Lấy tất cả */
function get_all($sql)
{
    $conn = connectdb();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $list = $stmt->fetchAll();
    $conn = null;
    return $list;
}
/* Lấy một */
function get_one($sql)
{
    $conn = connectdb();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $list = $stmt->fetch();
    $conn = null;
    return $list;
}
/* Update */
function update($sql)
{
    $conn = connectdb();
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
}
/* Delate */
function delete($sql)
{
    $conn = connectdb();
    // execute the query
    $conn->exec($sql);
}
/* Insert */
function insert($sql)
{
    $conn = connectdb();
    // execute the query
    $conn->exec($sql);
}
function lastinsert_ID($sql)
{
    $conn = connectdb();
    // execute the query
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
}