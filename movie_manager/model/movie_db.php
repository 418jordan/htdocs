<?php
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
// This is the data base where the prepared statements for actions/ buttons are retrieved
function get_movies_by_genre($genre_id) {
    global $db;
    $query = 'SELECT * FROM movie
              WHERE movie.genreId = :genre_id
              ORDER BY movieId';
    $statement = $db->prepare($query);
    $statement->bindValue(":genre_id", $genre_id);
    $statement->execute();
    $movies = $statement->fetchAll();
    $statement->closeCursor();
    return $movies;
}

function get_movie($movie_id) {
    global $db;
    $query = 'SELECT * FROM movie
              WHERE movieId = :movie_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":movie_id", $movie_id);
    $statement->execute();
    $movie = $statement->fetch();
    $statement->closeCursor();
    return $movie;
}
// get all movies
function get_all() {
    global $db;
    $query = 'SELECT * FROM movie 
            ORDER BY movieId';
    $statement = $db->prepare($query);
    $statement->execute();
    $all = $statement->fetchAll();
    $statement->closeCursor();
    return $all;
}

function delete_movie($movie_id) {
    global $db;
    $query = 'DELETE FROM movie
              WHERE movieId = :movie_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':movie_id', $movie_id);
    $statement->execute();
    $statement->closeCursor();
}

// function to edit movie
function edit_movie($movie_id, $name, $votes, $rating, $comments, $genre_id) {
    global $db;
    $query = 'UPDATE movie
              SET 
              genreId = :genre_id,
              movieName = :name,
              votes = :votes,
			  rating = :rating,
			  comments = :comments
              
              WHERE 
              movieId = :movie_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':genre_id', $genre_id);
    $statement->bindValue(':name', $name);
	$statement->bindValue(':votes', $votes);
    $statement->bindValue(':rating', $rating);
	$statement->bindValue(':comments', $comments);
    $statement->bindValue(':movie_id', $movie_id);
    $statement->execute();
    $statement->closeCursor();
    
}

function add_movie($genre_id, $name, $votes, $rating, $comments) {
    global $db;
    $query = 'INSERT INTO movie
                 (genreId, movieName, votes, rating, comments)
              VALUES
                 (:genre_id, :name, :votes, :rating, :comments)';
    $statement = $db->prepare($query);
    $statement->bindValue(':genre_id', $genre_id);
    $statement->bindValue(':name', $name);
	$statement->bindValue(':votes', $votes);
    $statement->bindValue(':rating', $rating);
	$statement->bindValue(':comments', $comments);
    $statement->execute();
    $statement->closeCursor();
}
?>