
        <nav>
            <ul>
                <!-- display links for all categories -->
                <?php foreach($artists as $artist) : ?>
                <li>
                    <a href="?artist_id=<?php 
                              echo $artist['artistID']; ?>">
                        <?php echo $artist['artistName']; ?>
                    </a>
                </li>
                <?php endforeach; ?>
				<li><a href="../index.php">Home</a></li>
            </ul>
        </nav>
