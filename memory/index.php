<ol>
<?php
function printMemoryDifference(int $times, $generator = 'str_repeat'){
    $start = memory_get_usage();
    $str = $generator('1', $times);
    $end = memory_get_usage();
    unset($str);
    $after = memory_get_usage();

    $diff = $end - $start;
    $perSymbol = $times > 0 ? $diff / $times : 0;
    $cleared = $end - $after;
    echo "<li>Diff is $diff bytes for $times symbols. $perSymbol bytes per symbol. Cleared $cleared</li>";
    ;
}

printMemoryDifference(0);
printMemoryDifference(1);
printMemoryDifference(10);
printMemoryDifference(100);
printMemoryDifference(1000);
printMemoryDifference(10000);
printMemoryDifference(10000, function(string $str, int $times){
    $buffer = '';
    /** @noinspection PhpLoopCanBeReplacedWithStrRepeatInspection */
    for($i = 0; $i < $times; $i++){
        $buffer .= $str;
    }

    return $buffer;
});
?>
</ol>
