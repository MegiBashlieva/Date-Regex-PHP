<?php
$string="Ivan ivanov ivanov  
Ivan georgiev ivanov
kostadinka ivanova ivanova
Ivan asdsad asdf
georgi georgiev ivanov
asdad Ivan georgiev Marlecko sdfsfsdfsdfs";

$pattern="@Ivan\b\s+\w+\s+\w+@";

preg_match_all($pattern, $string,$matches);

echo "valid html tag-> ".PHP_EOL.implode(" ".PHP_EOL, $matches[0]);

