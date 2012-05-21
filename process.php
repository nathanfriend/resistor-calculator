<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


switch ($_POST['band1']) {
    case brown:
        $band1=1;
        break;
    case red:
        $band1=2;
        break;
    case orange:
        $band1=3;
        break;
    case yellow:
        $band1=4;
        break;
    case green:
        $band1=5;
        break;
    case blue:
        $band1=6;
        break;
    case violet:
        $band1=7;
        break;
    case grey:
        $band1=8;
        break;
    case white:
        $band1=9;
        break;
}



switch ($_POST['band2']) {
    case black:
        $band2=0;
        break;
    case brown:
        $band2=1;
        break;
    case red:
        $band2=2;
        break;
    case orange:
        $band2=3;
        break;
    case yellow:
        $band2=4;
        break;
    case green:
        $band2=5;
        break;
    case blue:
        $band2=6;
        break;
    case violet:
        $band2=7;
        break;
    case grey:
        $band2=8;
        break;
    case white:
        $band2=9;
        break;
}

switch ($_POST['band3']) {
    case black:
        $band3="0";
        break;
    case brown:
        $band3="00";
        break;
    case red:
        $band3="000";
        break;
    case orange:
        $band3="0000";
        break;
    case yellow:
        $band3="00000";
        break;
    case green:
        $band3="000000";
        break;
    case blue:
        $band3="0000000";
        break;
}



echo $band1.$band2.$band3."&#8486;";
?>
