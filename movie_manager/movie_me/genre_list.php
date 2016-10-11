<?php include '../view/header.php'; ?>
<link href="../main.css" rel="stylesheet" type="text/css">
<main>

    <h1>Genre List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($genres as $genre) : ?>
        <tr>
            <td><?php echo $genre['genreType']; ?></td>
            <td>
                <form action="index.php" method="post">
                    <input type="hidden" name="action" value="delete_genre" />
                    <input type="hidden" name="genre_id"
                           value="<?php echo $genre['genreId']; ?>"/>
                    <input type="submit" value="Delete"/>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Add Category</h2>
    <form id="add_category_form"
          action="index.php" method="post">
        <input type="hidden" name="action" value="add_genre" />

        <label>Name:</label>
        <input type="text" name="name" />
        <input type="submit" value="Add"/>
    </form>

    <p><a href="index.php?action=list_movies">List Movies</a></p>

</main>
<?php include '../view/footer.php'; ?>
