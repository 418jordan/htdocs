<?php include '../modular/header.php'; ?>
<link href="../main.css" rel="stylesheet" type="text/css">
<main>
    <h1>Movie List</h1>

    <aside>
        <!-- display a list of categories -->
        <h2>Genres</h2>
        <nav>
        <ul>
        <?php foreach ($genres as $genre) : ?>
            <li>
            <a href="?genre_id=<?php echo $genre['genreId']; ?>">
                <?php echo $genre['genreType']; ?>
            </a>
            </li>
        <?php endforeach; ?>
        </ul>
        </nav>
    </aside>

    <section>
        <!-- display a table of products -->
        <h2><?php echo $genre_name; ?></h2>
        <table>
            <tr>
             <th>Name</th><br>
                <th>Votes</th><br>
                <th class="right">Rating</th><br>
                <th>Comments</th><br>
                <th>&nbsp;</th><br>
                <th>&nbsp;</th>
            </tr>
            <?php foreach ($movies as $movie) : ?>
            <tr>
                <td><?php echo $movie['movieName']; ?></td>
                 <td><?php echo $movie['votes']; ?></td>
                <td class="right"><?php echo $movie['rating']; ?></td>
                <td><?php echo $movie['comments']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_movie">
                    <input type="hidden" name="movie_id"
                           value="<?php echo $movie['movieId']; ?>">
                    <input type="hidden" name="genre_id"
                           value="<?php echo $movie['genreId']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
<!--            The edit button form function-->
                <td><form action="." method="post">
             <input type="hidden" name="action"
                           value="show_edit_form">
             <input type="hidden" name="movie_id"
                           value="<?php echo $movie['movieId']; ?>">
             <input type="hidden" name="genre_id"
                           value="<?php echo $movie['genreId']; ?>">
           <input value=" <?php echo $movie['votes']; ?>" name="votes" type="hidden">  
                        <input value=" <?php echo $movie['movieName']; ?>" name="movieName" type="hidden">
                        <input value=" <?php echo $movie['rating']; ?>" name="rating" type="hidden"> 
                        <input value=" <?php echo $movie['comments']; ?>" name="comments" type="hidden">
             <input type="submit" value="Edit">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="?action=show_add_form">Add Movie</a></p>
      
        <p class="last_paragraph"><a href="?action=list_genres">List Genres</a></p>        
    </section>
</main>
<?php include '../modular/footer.php'; ?>