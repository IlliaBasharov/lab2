<?php
if(isset($_GET['action']) && $_GET['action']=="add"){

$id=intval($_GET['id']);

if(isset($_SESSION['cart'][$id])){

$_SESSION['cart'][$id]['quantity']++;

}else{
$link = mysqli_connect("localhost", "root", "", "lab2");
$query_s=mysqli_query($link,"SELECT * FROM products
WHERE id={$id}");
if(mysqli_num_rows($query_s)!=0){
$row_s=mysqli_fetch_array($query_s);

$_SESSION['cart'][$row_s['id']]=array(
"quantity" => 1,
"price" => $row_s['price']
);


}else{

$message="Товара с таким номером нет";

}

}

}

?>
<h1>Список товаров</h1>
<?php
if(isset($message)){
    echo "<h2>$message</h2>";
}
?>
<table>
    <tr>
        <th>Номер</th>
        <th>Название</th>
        <th>Цена</th>
        <th>Действие</th>
    </tr>
    <?php
    $link = mysqli_connect("localhost", "root", "", "lab2");
    $query=mysqli_query($link,"SELECT * FROM products", MYSQLI_USE_RESULT);

    while ($row=mysqli_fetch_array($query)) {

        ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['price'] ?>$</td>
            <td><a href="view.php?page=products&action=add&id=<?php echo $row['id'] ?>">добавить</a></td>
        </tr>
        <?php

    }

    ?>
</table>
