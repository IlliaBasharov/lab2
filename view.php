<?php
session_start();
require("includes/connection.php");
if(isset($_GET['page'])){

    $pages=array("products", "cart");

    if(in_array($_GET['page'], $pages)) {

        $_page=$_GET['page'];

    }else{

        $_page="products";

    }

}else{

    $_page="products";

}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/style.css" />


    <title>Shopping Cart</title>


</head>

<body>

<div id="container">

    <div id="main">

        <?php require($_page.".php"); ?>

    </div><!--end of main-->

    <div id="sidebar">
        <h1>Корзина</h1>
        <?php

        if(isset($_SESSION['cart'])){

            $sql="SELECT * FROM products WHERE id IN (";

            foreach($_SESSION['cart'] as $id => $value) {
                $sql.=$id.",";
            }
            $link = mysqli_connect("localhost", "root", "", "lab2");
            $sql=substr($sql, 0, -1).") ORDER BY name ASC";
            $query=mysqli_query($link,$sql);
            while($row=mysqli_fetch_array($query)){

                ?>
                <p><?php echo $row['name'] ?> - <?php echo $_SESSION['cart'][$row['id']]['quantity'].' шт. '?></p>
                <?php

            }
            ?>
            <hr />
            <a href="cart.php?page=cart">Перейти в корзину</a>
            <?php

        }else{

            echo "<p>Корзина пустая.Добавьте товар</p>";

        }

        ?>
    </div><!--end of sidebar-->

</div><!--end container-->

</body>
</html>