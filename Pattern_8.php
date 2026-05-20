<?php
echo "Pattern of A B C Characters \n";
for($i=5; $i>=1; $i--)
    {
    for($j=$i; $j>=1; $j--)
        {
        echo chr(64+$j)." ";
        }
    echo "\n";
    }   
?>