<?php
    require_once (__DIR__ . '/../model/config.php');
//    require config.php to allow us to access $path in this file
?>
<nav>
    <ul>
        <li>
            <a href="<?php echo $path . "post.php" ?>">Blog Post Form</a>
            <!--  
                uses a php echo to set path
            -->
        </li>
    </ul>
</nav>