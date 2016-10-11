<nav>
        <ul>
            <!-- display links for all categories -->
            <?php foreach($genres as $genre) : ?>
            <li>
                <a href="?genre_id=<?php 
                echo $genre['genreId']; ?>">
          <?php echo $genre['genreType']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </nav>