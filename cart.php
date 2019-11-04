<?php

if(isset($_POST['submit'])){

    foreach($_POST['quantity'] as $key => $val) {
        if($val==0) {
            unset($_SESSION['cart'][$key]);
        }else{
            $_SESSION['cart'][$key]['quantity']=$val;
        }
    }

}

?>
<h1>Корзина</h1>
<a href="view.php?page=products">Перейти к товарам</a>
<form method="post" action="view.php?page=cart">

    <table>

        <tr>
            <th>Название</th>
            <th>Кол-во</th>
            <th>Цена</th>
            <th>Всего</th>
        </tr>

        <?php
        $link = mysqli_connect("localhost", "root", "", "lab2");
        $sql="SELECT * FROM products WHERE id IN (";

        foreach($_SESSION['cart'] as $id => $value) {
            $sql.=$id.",";
        }
        $sql=substr($sql, 0, -1).") ORDER BY name ASC";
        $query=mysqli_query($link,$sql);
        $totalprice=0;
        while($row=mysqli_fetch_array($query)){
            $subtotal=$_SESSION['cart'][$row['id']]['quantity']*$row['price'];
            $totalprice+=$subtotal;
            ?>
            <tr>
                <td><?php echo $row['name'] ?></td>
                <td><input type="text" name="quantity[<?php echo $row['id'] ?>]" size="5" value="<?php echo $_SESSION['cart'][$row['id']]['quantity'] ?>" /></td>
                <td><?php echo $row['price'] ?>$</td>
                <td><?php echo $_SESSION['cart'][$row['id']]['quantity']*$row['price'] ?>$</td>
            </tr>
            <?php

        }
        ?>
        <tr>
            <td colspan="4">Всего: <?php echo $totalprice ?></td>
        </tr>

    </table>
    <br />
    <button type="submit" name="submit">Обновить</button>
</form>
<br />
<p>Чтобы удалить элемент, сделайте количество 0 </p>