<?php
function get_artwork_by_artist($artist_id) {
    global $db;
    $query = 'SELECT * FROM artwork
              WHERE artwork.artistID = :artist_id
              ORDER BY artID';
    $statement = $db->prepare($query);
    $statement->bindValue(":artist_id", $artist_id);
    $statement->execute();
    $artWork = $statement->fetchAll();
    $statement->closeCursor();
    return $artWork;
}

function get_artwork($art_id) {
    global $db;
    $query = 'SELECT * FROM artwork
              WHERE artID = :art_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":art_id", $art_id);
    $statement->execute();
    $art = $statement->fetch();
    $statement->closeCursor();
    return $art;
}

function delete_artwork($art_id) {
    global $db;
    $query = 'DELETE FROM artwork
              WHERE artID = :art_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':art_id', $art_id);
    $statement->execute();
    $statement->closeCursor();
}

function add_artwork($artist_id, $code, $name, $price, $size, $media) {
    global $db;
    $query = 'INSERT INTO artwork
                 (artName, artSize, artPrice, artistID, artCode, artMedia)
              VALUES
                 (:name, :size, :price, :artist_id, :code, :media)';
    $statement = $db->prepare($query);
    $statement->bindValue(':artist_id', $artist_id);
	$statement->bindValue(':name', $name);
	$statement->bindValue(':size', $size);
    $statement->bindValue(':price', $price);
	$statement->bindValue(':code', $code);
	$statement->bindValue(':media', $media);
    $statement->execute();
	$newArt = $db->lastInsertId();	
    $statement->closeCursor();
	return $newArt;
}

function edit_art_form ($artist_id, $name, $size, $price, $art_id, $code,  $media) {
	global $db;
 // Edit artwork in the database  
    $query = 'UPDATE artwork
                  SET artistID  = :artist_id
                  ,   artName = :name				  
                  ,   artSize = :size
                  ,   artPrice = :price
				  ,   artCode = :code
				  ,   artMedia = :media
                  WHERE artID = :art_id';

    $statement = $db->prepare($query);
    $statement->bindValue(':artist_id', $artist_id);
	$statement->bindValue(':name', $name);
    $statement->bindValue(':size', $size);
    $statement->bindValue(':price', $price);
	$statement->bindValue(':code', $code);
   	$statement->bindValue(':media', $media);
	$statement->bindValue(':art_id', $art_id);
    $statement->execute();
    $statement->closeCursor();
}	
?>
