<?php

$files = glob('*.php');?>
<ul>
	<li>
		Even an <a href="with-empty.php">empty script</a> consumes some memory just because PHP VM is launched
	</li>
	<li>
		Script name affects starting memory consumption. <a href="long-name-script-same-as-empty.php">Longer names</a> = more memory
	</li>
	<li>
		<a href="with-ascii.php">Ascii char</a> and <a href="with-int--.php">int value</a> consume the same amount of memory
	</li>
	<li>
		<a href="with-mbstr.php">Multibyte char</a> consumes more than <a href="with-ascii.php">ascii</a>
	</li>
	<li>
		<a href="with-html-.php">Text outside &lt;php tags</a> also counts for php memory consumption
	</li>

</ul>

<ul>
    <?php
    foreach($files as $file) { ?>
        <li><a href="<?= $file ?>"><?= $file ?></a>
        <?php
    }
    ?>
</ul>