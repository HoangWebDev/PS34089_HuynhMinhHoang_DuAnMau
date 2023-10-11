<?php
/* Add danh mục mới */
function themdm($name)
{
    $sql = "INSERT INTO catalog (name) VALUES ('" . $name . "')";
    insert($sql);
}
/* Xóa danh mục */
function deldm($id)
{
    $sql = "DELETE FROM catalog WHERE id=" . $id;
    //echo $sql;
    //Kiểm tra catalog có sản phẩm không
    $dssp = getall_sp($id, 0);
    if (count($dssp) > 0) {
        $tb = "Danh mục sản phẩm hiện có " . count($dssp) . " sản phẩm";
    } else {
        delete($sql);
        $tb = "Xóa danh mục";
    }
    return $tb;
}
/* Cập nhật danh mục */
function updatedm($id, $name)
{
    $sql = "UPDATE catalog SET name='" . $name . "' WHERE id=" . $id;
    return update($sql);
}
/* Xét 1 danh mục */
function getonedm($id)
{
    $sql = "SELECT * FROM catalog WHERE id=" . $id;
    return get_one($sql);
}
/* Xét tất cả danh mục */
function getall_dm()
{
    $sql = "SELECT * FROM catalog WHERE 1 ORDER BY name";
    return get_all($sql);
}
