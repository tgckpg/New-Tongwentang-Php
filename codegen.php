<?php

// Wentong table
$wtable = fopen( "wtable.php", "w" );
fwrite( $wtable, <<<___HEAD___
<?php

___HEAD___
);

function GenTable( $table, $arrName )
{
    global $wtable;
    fwrite( $wtable, "\$$arrName = [" );
    if( ( $handle = fopen( $table, "r" ) ) )
    {
        while( ( $line = fgets( $handle ) ) !== false )
        {
            $map = explode( ",", str_replace( [ "\r\n", "\r", "\n" ], "", $line ) );
            fwrite( $wtable, "\n	\"{$map[0]}\" => \"{$map[1]}\"," );
        }

        fclose( $handle );
        fwrite( $wtable, "\n];" );
    }
    else
    {
        echo "Error opening table $table";
        exit(1);
    } 
}

GenTable( __DIR__ . "/native/s2trad/phrases.txt", "zh2Hant_phase2" );
GenTable( __DIR__ . "/native/s2trad/words.txt", "zh2Hant_phase1" );
GenTable( __DIR__ . "/native/t2simp/phrases.txt", "zh2Hans_phase2" );
GenTable( __DIR__ . "/native/t2simp/words.txt", "zh2Hans_phase1" );

fclose( $wtable );
