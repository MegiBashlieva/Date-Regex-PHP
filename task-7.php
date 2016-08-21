<?php
$string="if (!b==a)
{
wstatements_1=++;
sdf;
}
else if{
   statements_2
}

(){
}else{

}
else
if(){}
if(aasd{

}
if (!b=
=a)
{
wstatements_1++;
sdf;
}
else if{
   statements_2
}";

$pattern="@if\s*(\(.*\))\s*\{(.|\s)*?\}\s*((else|else if)\s*{(.|\s)*?\})*@";

preg_match_all($pattern, $string,$matches);

echo "valid html tag-> ".PHP_EOL.implode(" ".PHP_EOL, $matches[0]);

