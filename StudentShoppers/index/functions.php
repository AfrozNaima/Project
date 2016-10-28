<?php

$connection = mysqli_connect("localhost" , "root" , "" , "studentshoppers");

//getting the categories
function getCats(){
    global $connection;
    
    $get_cats = "select * from categories";
    
    $run_cats = mysqli_query($connection, $get_cats);
    
    while ($row_cats = mysqli_fetch_array($run_cats)){

        $cat_id = $row_cats['cat_id'];
        $cat_title = $row_cats['cat_title'];
        
    echo "<ul><a href='#'>$cat_title</a></ul>";     
    }
}

function getPro(){
    global $connection;
    
    $get_pro = "select * from products order by RAND() LIMIT 0,6";
    
    $run_pro = mysqli_query($connection, $get_pro);
    
    while ($row_pro = mysqli_fetch_array($run_pro)){

        $pro_id = $row_pro['product_id'];
        $pro_cat = $row_pro['product_cat'];
        $pro_title = $row_pro['product_title'];
        $pro_price = $row_pro['product_price'];
        $pro_image = $row_pro['product_image'];
        
    echo "
        <div id='single_product'>
            <h3>$pro_title</h3>
            <img src='product_images/$pro_image' width='180' height='180'/>
            <p><b>$pro_price</b></p>   
            <a href='details.php' style='float:left;'>Details</a>
            <a href='index.php'><button style='float:right'>Add to cart</button></a>
        </div>
        ";     
    }
}
?>
