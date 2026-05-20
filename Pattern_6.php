<?php
echo "Pattern of A B C D E Characters \n";
for($i=1; $i<=5; $i++)
    {
    for($j=1; $j<=$i; $j++)
        {
        echo chr(64+$j)." ";
        }
    echo "\n";
    }
?>