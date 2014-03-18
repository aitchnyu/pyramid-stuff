<?php

namespace Pyramid;

class Pyramid
{
    public function generatePyramid(int $steps){
        $buffer = "";
        foreach($i = 0; i < $steps; i++){
            for($j = $steps - $i; $j > 0, $j--){
                $buffer = $buffer." ";
            }
            foreach( $j = 0; $j < 2 * $steps - 1; $j++){
                $buffer = $buffer."*";
            }
            $buffer = $buffer."\n";
        }
    }
}