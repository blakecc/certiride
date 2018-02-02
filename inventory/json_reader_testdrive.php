    
<?php

    //require stuff
    //require("includes/config.php");


//////GET CARCODE FROM CURRENT FILE NAME
//$carcode = basename(__FILE__);
//$carcode = preg_replace('/\.php$/', '', $carcode);


////CONCATENATE FILE PATH FOR JSON DIRECTORY
$dir = __DIR__ . '/' . $carcode . '/*';

////FIND SPECIFIC JSON FILE NEEDED
foreach(glob($dir) as $file)
{
    if (preg_match('/Test_Drive/', basename($file)) == 1)
    {
      $filename = basename($file);
    }

}


////CONCATENATE FULL FILE PATH
$filepath = '/' . $carcode . '/' . $filename;


////create json object in PHP
    $json = json_decode(file_get_contents(__DIR__ . $filepath));


///write json object into PHP array    
    $json_array = [];
    
///FIELD KEYS

$json_array[0][0] = "FIELD_KEY";
$json_array[1][0] = "datepicker_39";
$json_array[2][0] = "alpha_35";
$json_array[3][0] = "tri_4";
$json_array[4][0] = "tri_6";
$json_array[5][0] = "tri_7";
$json_array[6][0] = "tri_8";
$json_array[7][0] = "tri_9";
$json_array[8][0] = "tri_10";
$json_array[9][0] = "tri_11";
$json_array[10][0] = "tri_12";
$json_array[11][0] = "tri_13";
$json_array[12][0] = "tri_14";
$json_array[13][0] = "tri_15";
$json_array[14][0] = "tri_16";
$json_array[15][0] = "tri_19";
$json_array[16][0] = "tri_20";
$json_array[17][0] = "tri_21";
$json_array[18][0] = "tri_22";
$json_array[19][0] = "tri_23";
$json_array[20][0] = "tri_24";
$json_array[21][0] = "tri_25";
$json_array[22][0] = "tri_26";
$json_array[23][0] = "tri_27";
$json_array[24][0] = "tri_28";
$json_array[25][0] = "tri_29";
$json_array[26][0] = "tri_31";
$json_array[27][0] = "tri_32";
$json_array[28][0] = "tri_30";
$json_array[29][0] = "tri_33";
$json_array[30][0] = "multiline_42";
$json_array[31][0] = "tri_43";

    



////CATEGORY

$json_array[0][1] = "CATEGORY";
$json_array[1][1] = "Test Drive";
$json_array[2][1] = "Test Drive";
$json_array[3][1] = "Test Drive";
$json_array[4][1] = "Test Drive";
$json_array[5][1] = "Test Drive";
$json_array[6][1] = "Test Drive";
$json_array[7][1] = "Test Drive";
$json_array[8][1] = "Test Drive";
$json_array[9][1] = "Test Drive";
$json_array[10][1] = "Test Drive";
$json_array[11][1] = "Test Drive";
$json_array[12][1] = "Test Drive";
$json_array[13][1] = "Test Drive";
$json_array[14][1] = "Test Drive";
$json_array[15][1] = "Test Drive";
$json_array[16][1] = "Test Drive";
$json_array[17][1] = "Test Drive";
$json_array[18][1] = "Test Drive";
$json_array[19][1] = "Test Drive";
$json_array[20][1] = "Test Drive";
$json_array[21][1] = "Test Drive";
$json_array[22][1] = "Test Drive";
$json_array[23][1] = "Test Drive";
$json_array[24][1] = "Test Drive";
$json_array[25][1] = "Test Drive";
$json_array[26][1] = "Test Drive";
$json_array[27][1] = "Test Drive";
$json_array[28][1] = "Test Drive";
$json_array[29][1] = "Test Drive";
$json_array[30][1] = "Test Drive";
$json_array[31][1] = "Test Drive";
    
    
////VALUE
    //potential way to easily adjust ordering: 1. Do in Excel or 2. add $i++ between rows

$json_array[0][2] = "VALUE";
$json_array[1][2] = $json->datepicker_39;
$json_array[2][2] = $json->alpha_35;
$json_array[3][2] = $json->tri_4;
$json_array[4][2] = $json->tri_6;
$json_array[5][2] = $json->tri_7;
$json_array[6][2] = $json->tri_8;
$json_array[7][2] = $json->tri_9;
$json_array[8][2] = $json->tri_10;
$json_array[9][2] = $json->tri_11;
$json_array[10][2] = $json->tri_12;
$json_array[11][2] = $json->tri_13;
$json_array[12][2] = $json->tri_14;
$json_array[13][2] = $json->tri_15;
$json_array[14][2] = $json->tri_16;
$json_array[15][2] = $json->tri_19;
$json_array[16][2] = $json->tri_20;
$json_array[17][2] = $json->tri_21;
$json_array[18][2] = $json->tri_22;
$json_array[19][2] = $json->tri_23;
$json_array[20][2] = $json->tri_24;
$json_array[21][2] = $json->tri_25;
$json_array[22][2] = $json->tri_26;
$json_array[23][2] = $json->tri_27;
$json_array[24][2] = $json->tri_28;
$json_array[25][2] = $json->tri_29;
$json_array[26][2] = $json->tri_31;
$json_array[27][2] = $json->tri_32;
$json_array[28][2] = $json->tri_30;
$json_array[29][2] = $json->tri_33;
$json_array[30][2] = $json->multiline_42;
$json_array[31][2] = $json->tri_43;
    
    
////QUESTION

$json_array[0][3] = "QUESTION";
$json_array[1][3] = "Date of test drive";
$json_array[2][3] = "Number plate";
$json_array[3][3] = "Steering wheel free of excessive free play?";
$json_array[4][3] = "Exhaust system free of leaks or abnormal sounds?";
$json_array[5][3] = "Turbo/supercharger free of any abnormal sounds?";
$json_array[6][3] = "Car free of smokey emissions?";
$json_array[7][3] = "Car accelerates as expected?";
$json_array[8][3] = "Noise level acceptable during driving?";
$json_array[9][3] = "Steering has normal feel in lock-to-lock turning?";
$json_array[10][3] = "Vehicle drives straight on level surface?";
$json_array[11][3] = "Steering wheel centered?";
$json_array[12][3] = "Free of abnormal noise or vibration from suspension?";
$json_array[13][3] = "Free of abnormal tyre noise/ road noise?";
$json_array[14][3] = "Free of abnormal squeaks and rattles from interior?";
$json_array[15][3] = "Vehicle operates properly during warm-up conditions?";
$json_array[16][3] = "Engine performs properly?";
$json_array[17][3] = "Engine fan(s) operate properly?";
$json_array[18][3] = "Free of abnormal noise or vibration from engine?";
$json_array[19][3] = "4 wheel drive system operating as designed?";
$json_array[20][3] = "Transmission and Clutch operate properly?";
$json_array[21][3] = "Power steering performs correctly?";
$json_array[22][3] = "Suspension performs correctly?";
$json_array[23][3] = "Engine does not overheat?";
$json_array[24][3] = "Car has adequate road holding and stability?";
$json_array[25][3] = "Car cruise control functions correctly?";
$json_array[26][3] = "Steering wheel free of wobble/vibration on test drive?";
$json_array[27][3] = "Car free of shuddering?";
$json_array[28][3] = "Car has sufficient braking force?";
$json_array[29][3] = "Brakes respond quickly during an emergency stop?";
$json_array[30][3] = "Please describe any concerns which were picked up during the test drive.";
$json_array[31][3] = "Did the car perform well in the test drive?";
        


////IN_INSPECTION

$json_array[0][4] = "IN_INSPECTION";
$json_array[1][4] = FALSE;
$json_array[2][4] = FALSE;
$json_array[3][4] = TRUE;
$json_array[4][4] = TRUE;
$json_array[5][4] = TRUE;
$json_array[6][4] = TRUE;
$json_array[7][4] = TRUE;
$json_array[8][4] = TRUE;
$json_array[9][4] = TRUE;
$json_array[10][4] = TRUE;
$json_array[11][4] = TRUE;
$json_array[12][4] = TRUE;
$json_array[13][4] = TRUE;
$json_array[14][4] = TRUE;
$json_array[15][4] = TRUE;
$json_array[16][4] = TRUE;
$json_array[17][4] = TRUE;
$json_array[18][4] = TRUE;
$json_array[19][4] = TRUE;
$json_array[20][4] = TRUE;
$json_array[21][4] = TRUE;
$json_array[22][4] = TRUE;
$json_array[23][4] = TRUE;
$json_array[24][4] = TRUE;
$json_array[25][4] = TRUE;
$json_array[26][4] = TRUE;
$json_array[27][4] = TRUE;
$json_array[28][4] = TRUE;
$json_array[29][4] = TRUE;
$json_array[30][4] = FALSE;
$json_array[31][4] = TRUE;
                
    
    //calculate score
    $test_score = "97%";
    
    

    //Convert data into useful and readable format

    foreach ($json_array as &$jasey)
    {
        //echo "Item: " . $jasey[0] . ", " . $jasey[1] . ", Value: " . $jasey[2] . "\n";
        
        if (substr($jasey[0],0,3) == "tri")
        {
            if ($jasey[2] == -1)
            {
                $jasey[2] = "NA";
            }
            else if ($jasey[2] == 0)
            {
                $jasey[2] = "FALSE";
            }
            else if ($jasey[2] == 1)
            {
                $jasey[2] = "TRUE";
            }
        }
        if (substr($jasey[0],0,10) == "multiphoto")
        {
            if ($jasey[2] == 0)
            {
                $jasey[2] = "NO PHOTO";
            }
            else if ($jasey[2] == 1)
            {
                $jasey[2] = $jasey[2] . " PHOTO";
            }
            else if ($jasey[2] > 1)
            {
                $jasey[2] = $jasey[2] . " PHOTOS";
            }
        }
        if (substr($jasey[0],0,6) == "rating")
        {
            if ($jasey[2] == 0)
            {
                $jasey[2] = "NA";
            }
            else if ($jasey[2] == 1)
            {
                $jasey[2] = "Reject";
            }
            else if ($jasey[2] == 2)
            {
                $jasey[2] = "Poor";
            }
            else if ($jasey[2] == 3)
            {
                $jasey[2] = "Fair";
            }
            else if ($jasey[2] == 4)
            {
                $jasey[2] = "Good";
            }
        }
        
        
        //echo "Item: " . $jasey[0] . ", " . $jasey[1] . ", New value: " . $jasey[2] . "\n";
        
    }

    //echo "\n";

    //foreach ($json_array as $jasey)
    //{
    //    echo $jasey[3] . " (" . $jasey[1] . "): " . $jasey[2] . "\n";        
    //}
    
    //$newfile = fopen("newfile2.txt", w);

    //foreach ($json_array as $field)
    //{
    //    fputcsv($newfile, $field);    
    //}
    

    
    //render("form.php", [$json_array]);

    //fclose($newfile);
            
//    print "<tr>
//        <th>" . $json_array[0][3] . "</th>
//        <th>" . $json_array[0][2] . "</th>
//    </tr>";
    
    foreach ($json_array as $jasey)
    {
        if ($jasey[4] == TRUE && $jasey[1] == $test_type)
            
        {
            
            if ($jasey[2] == "TRUE")
            {
                print '<tr>
                    <td>' . $jasey[3] . '</td>
                    <td><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td>
                </tr>';
            }
            else if ($jasey[2] == "FALSE")
            {
                print '<tr>
                    <td>' . $jasey[3] . '</td>
                    <td><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></td>
                </tr>';
            }
            else
            {
                print '<tr>
                    <td>' . $jasey[3] . '</td>
                    <td>' . $jasey[2] . '</td>

                </tr>';
            }   
        }
        
    }
    



?>

                

   