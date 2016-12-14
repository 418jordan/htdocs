<?php include '../view/header.php'; ?>
<main>
    <aside>
        <h1>Artist</h1>
        <?php include_once '../view/artist_nav.php'; ?>
    </aside>
    <section>
        <h1><?php echo $artist_name; ?></h1>
        <ul class="nav">
            <!-- display links for art in selected artist -->
            <?php foreach ($artWork as $art) : ?>
            <li>
                <a href="?action=view_art&amp;art_id=<?php 
                          echo $art['artID']; ?>">
                    <?php echo $art['artName']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>	
</main>
<?php include '../view/footer.php'; ?>