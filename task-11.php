<?php
$string="123ada@gmail.com
sad.asdas@gmail.com asdas
asdsadas@gmail.com
@gmail.comdasd
aaaaa@.comsad
qweqwegmail.com
asdad.com

asdasda@abv.bg
asdasda@gmail.bg
asdasd@yahoo.com";

$pattern="/[\w|.]+@(([gmail|yahoo]+.com)|(abv.bg))/";

preg_match_all($pattern, $string,$matches);

echo "mails-> ".PHP_EOL.implode(" ".PHP_EOL, $matches[0]);
