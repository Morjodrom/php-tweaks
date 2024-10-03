<?php
$start = memory_get_usage();
$startPeak = memory_get_peak_usage();
echo '
No significant difference in memory consumption between string literal and non-php string.
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi corporis, cum delectus dicta eius expedita fuga inventore iure odio officiis placeat possimus, quam sapiente sint suscipit temporibus ut velit.
Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ex facere illo iure maiores quia quidem sunt tempora, ut veritatis. Amet deserunt dolore esse explicabo molestiae possimus quis suscipit ut?
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi ea fugiat optio, quos sit tempore voluptatum. Alias aliquam asperiores autem cupiditate, est facilis numquam qui quo recusandae rerum tempore voluptatibus?
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab alias atque culpa cupiditate dolores error esse ex excepturi fuga hic illo minus reiciendis repellendus reprehenderit sint sunt totam vitae, voluptatem.
';
$afterHtml = memory_get_usage();

flush();

$afterFlush = memory_get_usage();

echo '<br><br>';
echo $start . ', ' . $afterHtml . ', ' . $afterFlush;