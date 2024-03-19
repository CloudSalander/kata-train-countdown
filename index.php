<?php 
define("FIRST_BRAKE_CODE", 67);
define("SECOND_BRAKE_CODE", 81);
define("INPUTS_QTY",10);

function unlockEmergencyBrake(bool $show_partial_sum = true, int $brake_code = FIRST_BRAKE_CODE) {
    $sum = 0;
    $numbers_entered = 0;
    /*Due to the problem statement, we can assume that we 
    can only have 1 to 9 values*/
    while($numbers_entered < INPUTS_QTY) {
        $number = (int) readline();
        $sum += $number;
        if($show_partial_sum) echo $sum."/".$brake_code.PHP_EOL;
        ++ $numbers_entered;
        echo "You entered {$numbers_entered} of ".INPUTS_QTY.PHP_EOL;
    }
    if($sum == $brake_code) return true;
    return false;
}

$brakes = [FIRST_BRAKE_CODE => true, SECOND_BRAKE_CODE => false];
foreach($brakes as $brake_code => $display_number) {
    $brake_unlocked = false;
    while(!$brake_unlocked) {
        echo "AAAAHHH!! We're going to die!!!".PHP_EOL;
        $brake_unlocked = unlockEmergencyBrake($display_number,$brake_code);
    }
}

echo "UUFF!! So close...";
?>