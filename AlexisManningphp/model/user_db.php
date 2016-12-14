<?php
// Get your database connection
require_once 'database.php';

function registerUser( $first_name, $last_name, $email, $password) {
    global $db;
// Use a prepared statement to write the data to the visitors.registration table
  $practiceQuery = "INSERT INTO users
          (usrFirstName, usrEmail, usrLastName, usrPassword)
          VALUES
          (:first_name, :email, :last_name, :password)";
          
    $statement = $db->prepare($practiceQuery);
    $statement->bindValue(':first_name', $first_name);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':last_name', $last_name);
    $statement->bindValue(':password', $password);
    $statement->execute();
    $regResult = $statement->rowCount();
    $statement->closeCursor();
    return $regResult;

}
function verifyLogin($email)  {
    global $db;
    
    $sql = 'SELECT * FROM users 
            WHERE usrEmail = :email';
    $statement = $db->prepare($sql);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $user = $statement->fetch();
    $statement->closeCursor();
    return $user;
    
    
    
}

// execute makes the statement happen, rowCount states how many rows have changed within a table as a result.
// Test if the insertion worked, if yes display a confirmation, if not show a failure message

?>
