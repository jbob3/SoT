<?php

#turn snort on or off
function snortToggle($status){
    if($status == 'off'){
        #If yes run pkill snort
        exec('bin/snortKill.sh');
    }
    
    return;
}

#Arm or disarm rules
function arming($status){        
    exec('bin/snortKill.sh');
#apply appropriate toggle
    #If arm cookie run arm.sh
    if($status == 'arm'){
        exec('bin/armRules.sh');
    #if disarm cookie run disarm.sh
    }
    elseif($status == 'disarm') {
        exec('bin/disarmRules.sh');
    }
    elseif($status == 'on'){
        exec('bin/sensorStart.sh > /dev/null 2>&1 &');
    }
    elseif($status == 'off'){
        #If yes run pkill snort
        exec('bin/snortKill.sh');
    }
    #run sensorStart.sh
    #exec('bin/sensorStart.sh');
    #exec('bin/sensorStart.sh > /dev/null 2>&1 &');
}




?>