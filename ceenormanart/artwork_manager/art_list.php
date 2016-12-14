<?php include_once '../view/header.php';
require_once 'index.php'?>
<!--<link href="../main.css" rel="stylesheet" type="text/css">-->
<main>
    <h1>Art List</h1>

    <aside>
        <!-- display a list of categories -->
        <h2>Artist</h2>
        <?php include_once '../view/artist_nav.php'; ?>        
    </aside>

    <section>
        <!-- display a table of works -->
        <h2><?php echo $artist_name; ?></h2>
        <table>
            <tr>
                <th>Art Image</th>
				<th>Art Information</th>
                
                <th>&nbsp;</th>
				<th>&nbsp;</th>
            </tr>
            <?php foreach ($artWork as $work) : ?>
            <tr>
				<td></td>
                <!--<td><img src="../images/'.<?php echo $work['artCode'];?>.'.jpg'"></td>-->
                <!--<td><p>
                <img src="<?php echo $images_filename; ?>"
                    alt="<?php echo $images_alt; ?>" />
            </p></td>-->
				<td>Name:<?php echo $work['artName']; ?><br>
				Size:<?php echo $work['artSize']; ?><br>
				Media:<?php echo $work['artMedia']; ?><br>
               Price: $<?php echo $work['artPrice']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_artwork">
                    <input type="hidden" name="art_id"
                           value="<?php echo $work['artID']; ?>">
                    <input type="hidden" name="artist_id"
                           value="<?php echo $work['artistID']; ?>">
                    <input class="button" type="submit" value="Delete">
                </form></td>
				<td><form action="index.php" method="post">
					<input type="hidden" name="action"
                           value="edit_art_form">
                    <input type="hidden" name="code" 
						   value="<?php echo $work['artCode']; ?>">  
                    <input type="hidden" name="name" 
						   value=" <?php echo $work['artName']; ?>">
					<input type="hidden" name="media" 
						   value=" <?php echo $work['artMedia']; ?>">
                    <input type="hidden" name="price" 
					       value=" <?php echo $work['artPrice']; ?>">
					<input type="hidden" name="size" 
					       value=" <?php echo $work['artSize']; ?>"> 						   
					<input type="hidden" name="art_id"
                           value="<?php echo $work['artID']; ?>">
                    <input type="hidden" name="artist_id"
                           value="<?php echo $work['artistID']; ?>">						   
                    <input class="button" type="submit" value="Edit">	
					</form>
				</td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="?action=show_add_form">Add Art Work</a></p>
        <p class="last_paragraph"><a href="?action=list_art">List Art Work</a></p>   
		
    </section>
</main>
<?php include '../view/footer.php'; ?>