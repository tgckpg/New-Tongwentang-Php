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

GenTable( __DIR__ . "/native/codegen/s2trad/phrase_s2t.txt", "zh2Hant_phase2" );
GenTable( __DIR__ . "/native/codegen/s2trad/word_s2t.txt", "zh2Hant_phase1" );
GenTable( __DIR__ . "/native/codegen/t2simp/phrase_t2s.txt", "zh2Hans_phase2" );
GenTable( __DIR__ . "/native/codegen/t2simp/word_t2s.txt", "zh2Hans_phase1" );

fclose( $wtable );
