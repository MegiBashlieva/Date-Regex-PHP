<?php
$string="123ada@gmail.com
sad.asdas@gmail.com
asdsadas@gmail.com
@gmail.com
aaaaa@.com
qweqwegmail.com
asdad.com";

$pattern="/[\w|.]+@gmail.com/";

preg_match_all($pattern, $string,$matches);

echo "gmail-> ".PHP_EOL.implode(" ".PHP_EOL, $matches[0]);
