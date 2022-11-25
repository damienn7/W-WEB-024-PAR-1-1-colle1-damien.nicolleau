<?php


function colle($x , $y)
{
    $carre = array();
    for($ligne=0;$ligne<$y;$ligne++){
        if($ligne==0 && $colonne == 0){
            echo "/";
            
        }
        if($ligne>0 && $colonne==0)
        {
            echo "*";
        }
        if($ligne==$y-1 && $colonne ==0)
        {
            echo "\\";
        }
        if($ligne == $y-1 && $colonne == $x-1)
        {
            echo "/";
        }


        for ($colonne=0;$colonne<$x;$colonne++)
        {
            if ($ligne == 0 || $ligne == $y-1)
            {
            if ($colonne>0 && $colonne<$x)
            {
                   echo "*";
                    $colonne++;
            }
        }

            if ($colonne == $x-1 && $ligne == 0)
            {
                echo "\\\n";
                $colonne++;
            }

            if($ligne>0 && $ligne<$y-1)
                if ($colonne>0 && $colonne<$x-1)
                {
                echo " ";
                $colonne++;
            }

            if ($ligne > 0 && $ligne < $y-1){
                if ($colonne == 0){
                    echo "*";
                    $colonne++;
                }
            }

            if ($ligne == $y - 1 && $colonne == 0 )
            {
                echo "\\";
                echo "\n";
                $colonne++;
            }


        }
    }   
}
colle(3,3);