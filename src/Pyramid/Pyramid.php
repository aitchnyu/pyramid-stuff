<?php

namespace Pyramid;

class Pyramid
{
    public function generatePyramid($steps){
        $buffer = "";
        for($i = 0; $i < $steps; $i++){
//             echo "hi".$i."\n";
            for($j = $steps - $i; $j > 0; $j--){
                $buffer = $buffer." ";
            }
            for( $j = 0; $j < 2 * $i + 1; $j++){
                $buffer = $buffer."*";
            }
            $buffer = $buffer."\n";
        }
        return $buffer;
    }
}

?>