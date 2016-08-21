<?php
$string="SELECT column_name,column_name
FROM table_name;
SELECT _table,column-name12
FROM table_name;
SELECT * FROM table_name;
SELECT * FROM ;
SELECT column_name column_name
FROM table_name;
SELECT ,column_name
FROM table_name;";

$pattern="@((SELECT\s*[\w_-]+,[\w_-]+\s*FROM\s*[\w_-]+\s*\;)|(SELECT\s*\*\s*FROM\s*[\w_-]+\s*\;))@";

preg_match_all($pattern, $string,$matches);

echo "SELECT-> ".PHP_EOL.implode(" ".PHP_EOL, $matches[0]);

