<?php
//valid html tag machva samo zatvarqshti se tagove
$string="<html> sf </html>
<p drtge=\"\" />sdfsdf
<a>wef
<sd>
rffdgdf
asdsd
<asd>>>
<br>
<p>gfdgs</  p  >
<a></a>
<input type=\"button\" > </input>";

$pattern="@(<\s*[A-Za-z]\w*)([^>]*)>(.*?)(<\/\s*[A-Za-z]\w*\s*>)@";

preg_match_all($pattern, $string,$matches);

echo "6. valid html tag-> ".PHP_EOL.implode(" ".PHP_EOL, $matches[0]);


