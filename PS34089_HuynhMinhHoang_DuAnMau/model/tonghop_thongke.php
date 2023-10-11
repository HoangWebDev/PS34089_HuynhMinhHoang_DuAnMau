<?php
function getall_thongke(){
    $sql = "select catalog.id as id_catalog, catalog.name as name_catalog, count(product.id) as countpd, min(product.price) as minprice, max(product.price) as maxprice, avg(product.price) as avgprice ";
    $sql .= "from product left join catalog on product.id_catalog = catalog.id ";
    $sql .= "group by catalog.id ORDER by catalog.id DESC";
    return get_all($sql);
}
?>