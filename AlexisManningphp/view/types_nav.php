<nav>
        <ul>
            <!-- display links for all types -->
            <?php foreach($types as $type) : ?>
            <li>
                <a href="?type_id=<?php 
                echo $type['typeID']; ?>">
          <?php echo $type['typeName']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
        </nav>