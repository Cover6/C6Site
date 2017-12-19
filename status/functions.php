<?php
// Get Status
function getLink(){
    $online = 'Online';
    $site = 'ror.archonetwork.net';
    $check = fsockopen( $site, $port, $errno, $errstr, 6 );
        if(!check) {
            if($debug){
            }
        echo '<div class="offline">', $offline, '</div>';
        } else {
            echo '<div class="online">', $online, '</div>';
        }

}