<!DOCTYPE html>

<?php
include("functions.php");
?>

<html>
    <head>
      
        <title>Students Shoppers</title>
        <link rel="stylesheet" type="text/css" href = "style.css">
    </head>
    <body>
        <!--main container starts -->
        <div class="main_wrapper">
            
             <!--header starts -->
            <div class="header_wrapper">
               
                <img id="logo" src="logo.jpg" width="200" height="140"/>
                <img id="add" src="add.jpg" width="800" height="140"/>
             
            </div>
              <!--header ends -->
              
               <!--navigation bar starts -->
                <div class="menubar">
                   
                    <ul id="menu">
                        <li id="menu_li"><a id="menu_a" href="#">Home</a></li>
                        <li id="menu_li"><a id="menu_a" href="#">Products</a></li>
                        <li id="menu_li"><a id="menu_a" href="#">Profile</a></li>
                        <li id="menu_li"><a id="menu_a" href="#">Sign Up</a></li>
                        <li id="menu_li"><a id="menu_a" href="#">Shopping Cart</a></li>
                        <li id="menu_li"><a id="menu_a" href="#">Contact</a></li>
                    </ul>
                    
                    <div id="form">
                        <form method="get" action="result.php" enctype="multipart/form-data">
                            <input type="text" name="user_query" placeholder="Search a product"/>
                            <input type="submit" name="search" value="Search"/>
                        </form>
                    </div>
                    
                </div>
                <!--navigation bar ends -->
            
            
             <!--contain wrapper starts -->
            <div class="content_wrapper">
                <div id="sidebar">
                    <div id="sidebar_title">Categories</div>
                    <ul id="cats">
                    
                    <?php
                        getCats();
                    ?>
                    </ul>
                    
                </div>
                
                <div id="content_area">
                    <div id="products_box">
                        <?php
                        getPro();
                    ?>
                        
                    </div>
                </div>
            
            </div>
             <!--contain wrapper ends -->
             
             <div id="footer">
                 <h2 style="text-align: center; padding-top: 30px;">&copy; studentshoppers</h2>
             </div>
         
        </div>
        
         <!--main container ends -->
    </body>
</html>
