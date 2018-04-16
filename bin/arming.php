<?php

#turn snort on or off
function snortToggle($status){
    if($status == 'off'){
        #If yes run pkill snort
        exec('bin/snortKill.sh');
    }
    elseif($status == 'on'){
        exec('bin/sensorStart.sh > /dev/null 2>&1 &');
    }
    return;
}

#Arm or disarm rules
function arming($status){        
    
#apply appropriate toggle
    #If arm cookie run arm.sh
    if($status == 'arm'){
        exec('bin/armRules.sh');
    #if disarm cookie run disarm.sh
    }
    elseif($status == 'disarm') {
        exec('bin/disarmRules.sh');
    }
    else {
        snortToggle($status);
    }
    #run sensorStart.sh
    #exec('bin/sensorStart.sh');
    
}




?>