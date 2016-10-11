
// Needed: a function to get a customer by their email address
//function get_customer_by_email($email) {
  //  global $db;
    
//}
<?php
$db = new PDO ('mysql:host=localhost;dbname=movieato_tech_support', 'movieato_jbisho', 'jarbin418$');
$sql = 'SELECT firstName, email from customers';
foreach ($db->query($sql) as $row ){
    echo $row['firstName']." - ".$row ['email']."<br>";
}
$db = null;
?>