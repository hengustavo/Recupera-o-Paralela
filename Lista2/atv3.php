<?php
$in = 0;
$te = 200;
for ($i = $in; $i <= $te; $i++)
{
    if ($i < 2)
    {
        continue;
    }
    $pr = true;
    for ($j = 2; $j < $i; $j++)
    {
        if ($i % $j == 0) {
            $pr = false;
            break;
        }
    }
    if ($pr)
    {
        echo "$i é um número primo.\n";
    }
}
?>