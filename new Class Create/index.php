<?php
/**
 * Created by PhpStorm.
 * User: asher.ansari
 * Date: 3/31/2017
 * Time: 1:44 AM
 */
class car{
    private $asher = 20;
    private $temp = "my Car";

    function car(){}




}

class wifi{
    private $wifiPsk = null;

    public function getWifiPsk(){
        return $this->wifiPsk;
    }

    public function setWifiPsk($wifiPsk)
    {
        $this->wifiPsk = $wifiPsk;
    }

}
//    $thisIsObjectNameOfClassCar = new car();
//
//    echo $thisIsObjectNameOfClassCar->temp;
//    echo $thisIsObjectNameOfClassCar->asher;

    $wifiClassObj = new wifi();

    $wifiClassObj->setWifiPsk("ansari123");

    echo $wifiClassObj->getWifiPsk();

?>