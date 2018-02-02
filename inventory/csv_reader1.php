<?php

//////GET CARCODE FROM CURRENT FILE NAME
//$carcode = basename(__FILE__);
//$carcode = preg_replace('/\.php$/', '', $carcode);


//$carcode = '1603DS0001';


////CONCATENATE FULL FILE PATH
$filepath = '/' . $carcode . '/' . $carcode . '.csv';


////Open csv file

$file = fopen(__DIR__ . $filepath,"r");

$csv_array = [];

$i = 0;

while(! feof($file))
  {
//    $row = fgetcsv($file,0,';');
    $csv_array[$i] = fgetcsv($file,0,';');
    $i++; 
  }

fclose($file);

$Make = $csv_array[1][2];
$Model = $csv_array[2][2];
$Year = $csv_array[3][2];
$Variant = $csv_array[4][2];
$Mileage = $csv_array[5][2];
$Certiride_price = $csv_array[6][2];
$Dealership_price = $csv_array[7][2];
$Saving = $csv_array[8][2];
$Feature_1 = $csv_array[9][2];
$Feature_2 = $csv_array[10][2];
$Feature_3 = $csv_array[11][2];
$Feature_4 = $csv_array[12][2];
$Feature_5 = $csv_array[13][2];
$Feature_6 = $csv_array[14][2];
$Feature_7 = $csv_array[15][2];
$Engine = $csv_array[16][2];
$Colour = $csv_array[17][2];
$Upholstery = $csv_array[18][2];
$Transmission = $csv_array[19][2];
$Expert_review_quote = $csv_array[20][2];
$Expert_review_reviewer = $csv_array[21][2];
$Expert_review_publication = $csv_array[22][2];
$Expert_review_link = $csv_array[23][2];
$Owner_comment = $csv_array[24][2];
$Owner_first_name = $csv_array[25][2];
$Owner_suburb = $csv_array[26][2];
$Video_review_link = $csv_array[27][2];
$Mechanic = $csv_array[28][2];
$NoOfWheelsDriven = $csv_array[29][2];
$PowerOutput = $csv_array[30][2];
$Torque = $csv_array[31][2];
$NoOfGears = $csv_array[32][2];
$Acceleration0To100 = $csv_array[33][2];
$TopSpeedFinal = $csv_array[34][2];
$ConsumptionAnnualAverage = $csv_array[35][2];
$NoOfAirbags = $csv_array[36][2];
$BootCapacity = $csv_array[37][2];
$FuelCapacity = $csv_array[38][2];
$CO2Emission = $csv_array[39][2];
$DriveWheels = $csv_array[40][2];
$PowerSteering = $csv_array[41][2];
$CeramicBrakes = $csv_array[42][2];
$ABS = $csv_array[43][2];
$EBD = $csv_array[44][2];
$BAS = $csv_array[45][2];
$AutoTractionControl = $csv_array[46][2];
$StabilityControl = $csv_array[47][2];
$AirCon = $csv_array[48][2];
$ClimateControl = $csv_array[49][2];
$ElectricWindows = $csv_array[50][2];
$CentralLocking = $csv_array[51][2];
$AutoLockDoors = $csv_array[52][2];
$Radio = $csv_array[53][2];
$CD = $csv_array[54][2];
$AuxInput = $csv_array[55][2];
$MultifunctionSteeringWheelControl = $csv_array[56][2];
$CruiseControl = $csv_array[57][2];
$IsofixChildseatAttachment = $csv_array[58][2];
$Alarm = $csv_array[59][2];
$Immobilizer = $csv_array[60][2];
$Bluetooth = $csv_array[61][2];
$Sunroof = $csv_array[62][2];
$ReliabilityCar = $csv_array[63][2];
$ReliabilityIndex = $csv_array[64][2];
$ReliabilityLink = $csv_array[65][2];

//print $Make;



?>