<?php 
define("FIRST_BRAKE_CODE", 67);
define("SECOND_BRAKE_CODE", 81);
define("INPUTS_QTY",10);

function unlockEmergencyBrake(bool $show_partial_sum = true, int $break_code = FIRST_BRAKE_CODE) {
    $sum = 0;
    $numbers_entered = 0;
    /*Due to the problem statement, we can assume that we 
    can only have 1 to 9 values*/
    while($numbers_entered < INPUTS_QTY) {
        $number = (int) readline();
        ++ $numbers_entered;
    }
}

while(!unlockEmergencyBrake(true,FIRST_BRAKE_CODE)) {
    echo "AAAAHHH!!".PHP_EOL;
}

?>