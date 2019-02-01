<?php 
    require_once 'Autoloader.php';
    
?>
<?php
    App::createPartial(header,html_blocks);
?>
<main>
    <?php
        require_once 'config/Routes/Routes.php';
    ?> 
</main>
<?php 
    App::createPartial(footer,html_blocks);
?>

