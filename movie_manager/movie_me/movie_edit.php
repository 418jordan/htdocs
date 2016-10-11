<?php
session_start();
$loggedin = $_SESSION['loggedin'];
$firstname = $_SESSION['firstname'];
$usertype = $_SESSION['usertype'];
include '../modular/header.php'; 
?>
<link href="../main.css" rel="stylesheet" type="text/css">
<main>
     
    <h1>Edit Movie</h1>
    <form action="index.php" method="post" id="edit_movie_form">
         <input type="hidden" name="action" value="edit_movie">

        <label>Genre:</label>
        <select name="genre_id">
        <?php foreach ( $genres as $genre ) : ?>
            <option value="<?php echo $genre['genreId']; ?>">
                <?php echo $genre['genreType']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>
         <label>Name:</label>
        <input type="text" name="movieName" id="name" value="<?php echo $name; ?>"> 
        <br>
        
        <label>Votes:</label>
        <input type="text" name="votes" id="code" value="<?php echo $votes; ?>">
        <br>

        <label>Rating:</label>
        <input type="text" name="rating" id="rating" value="<?php echo $rating; ?>" >
        <br>
        
        <label>Comment:</label>
        <input type="text" name="comments" id="comments" value="<?php echo $comments; ?>" >
        <br>
        <!--       involve the product_id as a hidden value-->
 <input type="hidden" name="movie_id" id="movie_id" value="<?php echo $movie_id; ?>">
        <label>&nbsp;</label>
        <input type="submit" value="Update Movie" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_movies">View Movie List</a>
    </p>

</main>
 <?php include '../modular/footer.php';?>
