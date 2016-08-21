<?php
$string="class = \"megi-sdf\"
class=\"megi
class=megi-sdfds
class \"merf\"";

$pattern="@class\s*=\s*((\"*[A-Za-z]+?[\w|\_\-]*\")|([A-Za-z]+?[\w|\_\-]*))@";

preg_match_all($pattern, $string,$matches);

echo "classes-> ".PHP_EOL.implode(" ".PHP_EOL, $matches[0]);
