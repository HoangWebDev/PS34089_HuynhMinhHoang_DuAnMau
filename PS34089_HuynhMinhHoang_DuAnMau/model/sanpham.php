<?php
/* Lấy 1 sản phẩm*/
function getonesp($id)
{
    $sql = "SELECT * FROM product WHERE id =" . $id;
    return get_one($sql);
}
/* Lấy sản phẩm sale*/
function get_sale_product()
{
    $sql = "SELECT * FROM product WHERE promotion > 20 ORDER BY promotion DESC";
    return get_all($sql);
}
/* Lấy tất cả sản phẩm show ra home*/
function getall_sp_admin()
{
    $sql = "SELECT * FROM product where 1  ORDER BY id DESC";
    return get_all($sql);
}
/* Lấy tất cả sản phẩm show ra home*/
function getall_sp_home()
{
    $sql = "SELECT * FROM product where 1  ORDER BY id DESC Limit 10";
    return get_all($sql);
}
/* Lấy tất cả sản phẩm*/
function getall_sp($id_catalog, $search)
{
    $sql = "SELECT * FROM product where 1";
    if ($search != "") {
        $sql .= " AND name LIKE '%" . $search . "%'";
    }
    if ($id_catalog > 0) {
        $sql .= " AND id_catalog=" . $id_catalog;
        // id_catalog='".$id_catalog."'"
    } else {
        $sql .= " ORDER BY id DESC";
    }
    return get_all($sql);
}
/* Lấy 1 sản phẩm để xem chi tiết*/
function get_detail_product($id_product)
{
    $sql = "SELECT * FROM product WHERE id =" . $id_product;
    return get_one($sql);
}
/* Lấy sản phẩm cùng loại trong trang chi tiết*/
function get_product_same_type($idproduct, $id_catalog)
{
    $sql = "SELECT * FROM product WHERE id_catalog = " . $id_catalog . " AND id <>" . $idproduct;
    return get_all($sql);
}
/* Update sản phẩm*/
function update_product($id, $name, $price, $price_sale, $promotion, $id_catalog, $ten_file_hinh)
{
    if ($ten_file_hinh != "") {
        $sql = "UPDATE product SET name='$name', price='$price', price_sale='$price_sale', promotion='$promotion', id_catalog='$id_catalog', img='$ten_file_hinh' WHERE id=" . $id;
    } else {
        $sql = "UPDATE product SET name='$name', price='$price', price_sale='$price_sale', promotion='$promotion', id_catalog='$id_catalog' WHERE id=" . $id;
    }
    //echo $sql;
    update($sql);
}
/* Lấy ten file hinh*/
function get_ten_file_hinh($id)
{
    $sql = "SELECT img FROM product WHERE id=" . $id;
    $ten_file_hinh = get_one($sql);
    extract($ten_file_hinh);
    return $img;
}
/* Delete sản phẩm*/
function delete_product($id)
{
    $sql = "DELETE FROM product WHERE id=" . $id;
    //echo $sql;
    delete($sql);
    $tb = "Xóa sản phẩm";
    return $tb;
}
/* Add sản phẩm*/
function add_product($name, $price, $price_sale, $promotion, $id_catalog, $ten_file_hinh)
{
    $sql = "INSERT INTO product (id_catalog ,name, img, price, price_sale, promotion) VALUES ('$id_catalog','$name','$ten_file_hinh', '$price', '$price_sale', '$promotion')";
    insert($sql);
}
