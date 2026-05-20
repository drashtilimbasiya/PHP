<?php
echo "Pattern of A B C Characters \n";
for($i=1; $i<=5; $i++)
    {
    for($j=$i; $j>=1; $j--)
        {
        echo chr(64+$j)." ";
        }
    echo "\n";
    }   
?>