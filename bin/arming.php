<?php

#turn snort on or off
function snortToggle(){
    exec("pgrep snort", $snortPID);
    #check if snort running
    if(empty($snortPID)){
        #If yes run pkill snort
        exec('sudo pkill snort');
    }
    return;
}

#Arm or disarm rules
function ruleToggle($status){        
    
#apply appropriate toggle
    #If arm cookie run arm.sh
    if($status == 'arm'){
        exec('bin/armRules.sh');
    #if disarm cookie run disarm.sh
    }
    elseif($status == 'disarm') {
        exec('bin/disarmRules.sh');
    }
    #run sensorStart.sh
    #exec('bin/sensorStart.sh');
    return;
}




?>