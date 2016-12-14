<?php include '../view/header.php'; ?>
<link href="../main.css" rel="stylesheet" type="text/css">
<main>

    <h1>Type List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>
        <?php foreach ($types as $type) : ?>
        <tr>
            <td><?php echo $type['typeName']; ?></td>
            <td>
                <form action="index.php" method="post">
                    <input type="hidden" name="action" value="delete_type" />
                    <input type="hidden" name="type_id"
                           value="<?php echo $type['typeID']; ?>"/>
                    <input type="submit" value="Delete"/>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <h2>Add Category</h2>
    <form id="add_category_form"
          action="index.php" method="post">
        <input type="hidden" name="action" value="add_type" />

        <label>Name:</label>
        <input type="text" name="name" />
        <input type="submit" value="Add"/>
    </form>

    <p><a href="index.php?action=list_recipes">List recipes</a></p>

</main>
<?php include '../view/footer.php'; ?>