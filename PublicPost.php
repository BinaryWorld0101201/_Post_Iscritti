<?php

/*PLUGIN MAKE BY @C0rry_03 ( on telegram ).

For the correct use of the plugin it is advisable to create the $tabella variable if you do not already have it.

FOLLOW MY NETWORK ON TELEGRAM: @PICNetwork and join in my public group: @Pic_Gruppo.

WARNING: this plugin has copyright. it is forbidden to pass this plugin to unknown properties.

}                               {
    }                        {
        }    GOOD JOB    {                                                                                                */


$founder = "//Put here id of founder or admin";

        
if($userID == $founder)
if(strpos($msg, "/post")===0){
$utpost = mysql_query("SELECT DISTINCT chat_id FROM $tabella where chat_id>0 group by chat_id");
$cp2= mysql_num_rows($utpost); 
sm($chatID,"<code>Messaggio inviato a $cp2 utenti</code>");
$postt = explode(" ", $msg, 2);
$messaggiopost = $postt[1];

 

while ($line2 = mysql_fetch_array($utpost, MYSQL_ASSOC)) {
    foreach ($line2 as $col_value2) {
   
    sm($col_value2,"<b>Post inviato dal fondatore</b>: \n\n$messaggiopost");
    
}    
	}
		}
