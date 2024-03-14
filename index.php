<?php 
define("FIRST_BRAKE_CODE", 67);
define("SECOND_BRAKE_CODE", 81);

function unlockEmergencyBrake(bool $show_partial_sum = true, int $break_code = FIRST_BRAKE_CODE) {
    return false;
}

while(!unlockEmergencyBrake(true,FIRST_BRAKE_CODE)) {
    echo "AAAAHHH!!".PHP_EOL;
}

?>