<?php

#turn snort on or off
    #check if snort running
        #If yes run pkill snort

    #apply appropriate toggle
        #If arm cookie run arm.sh
        #if disarm cookie run disarm.sh

    #run sensorStart.sh

#Arm or disarm rules
function ruleToggle($status){        
    
    if($status == 'arm'){
        exec('/opt/scripts/disarmRules.sh');
    }
    elseif($status == 'disarm') {
        exec('/opt/scripts/disarmRules.sh');
    }
    #apply appropriate toggle
        #If arm cookie run arm.sh
        #if disarm cookie run disarm.sh

    #run sensorStart.sh
}




?>