
// Get all the products for the registration dropdown list
//function get_products() 


<?php
$db = new PDO ('mysql:host=localhost;dbname=movieato_tech_support', 'movieato_jbisho', 'jarbin418$');
$sql = 'SELECT productCode, name from products';
foreach ($db->query($sql) as $row ){
    echo $row['productCode']." - ".$row ['name']."<br>";
}
$db = null;
?>