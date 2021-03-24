<?php 

    require_once 'model.php';

    function fetchAllProducts(){
        return showAllProducts();
    }

    function fetchProduct($id){
        return showProduct($id);
    }

    function fetchProductByName($name)
    {
        return searchProduct($name);
    }
?>