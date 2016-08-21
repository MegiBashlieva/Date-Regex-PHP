<?php
$string="CT 5263 DG
DF 8321 CT
CT 6365 CT 5389 CT
CT59666C
CT5687G
CT5886FF";

$pattern="@CT\s*[0-9]{4}\s*[A-Z]{1,2}@";

preg_match_all($pattern, $string,$matches);

echo "CT registration-> ".PHP_EOL.implode(" ".PHP_EOL, $matches[0]);
