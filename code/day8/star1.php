<?php
    $instructions = str_split(file_get_contents("http://adventofcode_2023_input/day8/instructions.txt"));
    
    $map = json_decode(file_get_contents("http://adventofcode_2023_input/day8/map.json"), true);
    
    $currentKey = "AAA";
    $step = 0;
    
    for($i = 0; $currentKey != "ZZZ"; $step++, $i++) {
        
        // If end of instructions: iterate again
        if($i > (count($instructions) -1)) {
            $i = 0;
        };
        
        $inst = $instructions[$i];
        
        if($instructions[$i] == "L"){
            $inst = 0;
        } else {
            $inst = 1;
        }
           
        $currentKey = $map[$currentKey][$inst];
        
        echo "Route step: " . $currentKey . "<br>";
        
    };
    
    print("<pre>Required Steps: " . $step . "</pre>")
?>