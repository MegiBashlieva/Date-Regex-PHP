<?php
$string="125
5686 18880
9999
1000
5 0000
99 54558
19000 1980
55455 36889 12566
11111
19500";

$pattern="@\b(([0-9]{4})|(1(9000|[0-8]{4})))\b@";

preg_match_all($pattern, $string,$matches);

echo "1000-19000-> ".PHP_EOL.implode(" ".PHP_EOL, $matches[0]);