<?php

$files = glob('*.php');?>
<ul>
    <?php
    foreach($files as $file) { ?>
        <li><a href="<?= $file ?>"><?= $file ?></a>
        <?php
    }
    ?>
</ul>