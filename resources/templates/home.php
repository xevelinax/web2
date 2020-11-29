<?php
$data = require_once __DIR__ . '/../data.php'
?>
<!-- Homepage content -->
<h2>Home Page</h2>
<?php foreach($data as $item) { ?>
    <p><h3><?php echo $item['title']; ?></h3></p>
    <p><img src="/img/content/image.jpeg" height="200" width="300" alt="image was here"></p>
    <p><?php echo $item['text']; ?></p>
    <hr />
<?php } ?>
