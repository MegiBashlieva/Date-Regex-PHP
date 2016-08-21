<?php
$string="do {
    			echo \$i;
				fsdfsf;
			} while (\$i > 0);
do{
}while();

do{
}
while(){
while (\$i > 0){
counter++;
}";

$pattern="@(do\s*\{(.|\s)*?\}\s*while\s*\(((.+)?)\);)|(while\s*\(((.+)?)\)\{(.|\s)*?\})@";

preg_match_all($pattern, $string,$matches);

echo "valid html tag-> ".PHP_EOL.implode(" ".PHP_EOL, $matches[0]);

