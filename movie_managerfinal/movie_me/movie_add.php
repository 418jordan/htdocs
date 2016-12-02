<?php
session_start();
$loggedin = $_SESSION['loggedin'];
$firstname = $_SESSION['firstname'];
$usertype = $_SESSION['usertype'];
include '../modular/header.php'; 
?>
<link href="../main.css" rel="stylesheet" type="text/css">
<main>
     
    <h1>Add Movie</h1>
    <form action="index.php" method="post" id="add_movie_form">
        <input type="hidden" name="action" value="add_movie">

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
        <input type="text" name="movieName" />
        <br>

<label>Votes:</label>
        <input type="text" name="votes" />
        <br>

        <label>Rating:</label>
        <input type="text" name="rating" />
        <br>
        
        <label>Comments:</label>
        <input type="text" name="comments" />
        <br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Movie" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_movies">View Movie List</a>
    </p>

</main>
 <?php include '../modular/footer.php';?>
