<?php
<?php
session_start();
unset($_SESSION);
session_destroy();
session_write_close();
header('Location: /movie_manager/movie_me/index.php');
die;
?>
