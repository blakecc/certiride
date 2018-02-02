    
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
    if (preg_match('/Mechanical_Inspection/', basename($file)) == 1)
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
$json_array[1][0] = "datepicker_33";
$json_array[2][0] = "alpha_85";
$json_array[3][0] = "listpicker_87";
$json_array[4][0] = "alpha_35";
$json_array[5][0] = "tri_1";
$json_array[6][0] = "tri_2";
$json_array[7][0] = "tri_3";
$json_array[8][0] = "tri_4";
$json_array[9][0] = "tri_5";
$json_array[10][0] = "tri_15";
$json_array[11][0] = "tri_6";
$json_array[12][0] = "tri_7";
$json_array[13][0] = "tri_8";
$json_array[14][0] = "tri_9";
$json_array[15][0] = "tri_10";
$json_array[16][0] = "tri_11";
$json_array[17][0] = "tri_12";
$json_array[18][0] = "tri_13";
$json_array[19][0] = "tri_14";
$json_array[20][0] = "rating_16";
$json_array[21][0] = "rating_17";
$json_array[22][0] = "rating_18";
$json_array[23][0] = "rating_19";
$json_array[24][0] = "rating_20";
$json_array[25][0] = "rating_21";
$json_array[26][0] = "rating_22";
$json_array[27][0] = "tri_23";
$json_array[28][0] = "tri_24";
$json_array[29][0] = "tri_25";
$json_array[30][0] = "tri_26";
$json_array[31][0] = "tri_36";
$json_array[32][0] = "tri_27";
$json_array[33][0] = "tri_28";
$json_array[34][0] = "tri_29";
$json_array[35][0] = "tri_30";
$json_array[36][0] = "tri_31";
$json_array[37][0] = "tri_32";
$json_array[38][0] = "multiline_89";
$json_array[39][0] = "multiline_90";
$json_array[40][0] = "multiline_91";
$json_array[41][0] = "tri_92";



////CATEGORY

$json_array[0][1] = "CATEGORY";
$json_array[1][1] = "Mechanical";
$json_array[2][1] = "Mechanical";
$json_array[3][1] = "Mechanical";
$json_array[4][1] = "Mechanical";
$json_array[5][1] = "Mechanical";
$json_array[6][1] = "Mechanical";
$json_array[7][1] = "Mechanical";
$json_array[8][1] = "Mechanical";
$json_array[9][1] = "Mechanical";
$json_array[10][1] = "Mechanical";
$json_array[11][1] = "Mechanical";
$json_array[12][1] = "Mechanical";
$json_array[13][1] = "Mechanical";
$json_array[14][1] = "Mechanical";
$json_array[15][1] = "Mechanical";
$json_array[16][1] = "Mechanical";
$json_array[17][1] = "Mechanical";
$json_array[18][1] = "Mechanical";
$json_array[19][1] = "Mechanical";
$json_array[20][1] = "Mechanical";
$json_array[21][1] = "Mechanical";
$json_array[22][1] = "Mechanical";
$json_array[23][1] = "Mechanical";
$json_array[24][1] = "Mechanical";
$json_array[25][1] = "Mechanical";
$json_array[26][1] = "Mechanical";
$json_array[27][1] = "Mechanical";
$json_array[28][1] = "Mechanical";
$json_array[29][1] = "Mechanical";
$json_array[30][1] = "Mechanical";
$json_array[31][1] = "Mechanical";
$json_array[32][1] = "Mechanical";
$json_array[33][1] = "Mechanical";
$json_array[34][1] = "Mechanical";
$json_array[35][1] = "Mechanical";
$json_array[36][1] = "Mechanical";
$json_array[37][1] = "Mechanical";
$json_array[38][1] = "Mechanical";
$json_array[39][1] = "Mechanical";
$json_array[40][1] = "Mechanical";
$json_array[41][1] = "Mechanical";

////VALUE
    //potential way to easily adjust ordering: 1. Do in Excel or 2. add $i++ between rows

$json_array[0][2] = "VALUE";
$json_array[1][2] = $json->datepicker_33;
$json_array[2][2] = $json->alpha_85;
$json_array[3][2] = $json->listpicker_87;
$json_array[4][2] = $json->alpha_35;
$json_array[5][2] = $json->tri_1;
$json_array[6][2] = $json->tri_2;
$json_array[7][2] = $json->tri_3;
$json_array[8][2] = $json->tri_4;
$json_array[9][2] = $json->tri_5;
$json_array[10][2] = $json->tri_15;
$json_array[11][2] = $json->tri_6;
$json_array[12][2] = $json->tri_7;
$json_array[13][2] = $json->tri_8;
$json_array[14][2] = $json->tri_9;
$json_array[15][2] = $json->tri_10;
$json_array[16][2] = $json->tri_11;
$json_array[17][2] = $json->tri_12;
$json_array[18][2] = $json->tri_13;
$json_array[19][2] = $json->tri_14;
$json_array[20][2] = $json->rating_16;
$json_array[21][2] = $json->rating_17;
$json_array[22][2] = $json->rating_18;
$json_array[23][2] = $json->rating_19;
$json_array[24][2] = $json->rating_20;
$json_array[25][2] = $json->rating_21;
$json_array[26][2] = $json->rating_22;
$json_array[27][2] = $json->tri_23;
$json_array[28][2] = $json->tri_24;
$json_array[29][2] = $json->tri_25;
$json_array[30][2] = $json->tri_26;
$json_array[31][2] = $json->tri_36;
$json_array[32][2] = $json->tri_27;
$json_array[33][2] = $json->tri_28;
$json_array[34][2] = $json->tri_29;
$json_array[35][2] = $json->tri_30;
$json_array[36][2] = $json->tri_31;
$json_array[37][2] = $json->tri_32;
$json_array[38][2] = $json->multiline_89;
$json_array[39][2] = $json->multiline_90;
$json_array[40][2] = $json->multiline_91;
$json_array[41][2] = $json->tri_92;
    
////QUESTION
$json_array[0][3] = "QUESTION";
$json_array[1][3] = "Date of inspection";
$json_array[2][3] = "Inspector Name";
$json_array[3][3] = "Car Make";
$json_array[4][3] = "Number plate";
$json_array[5][3] = "Is the engine is free of odours while running?";
$json_array[6][3] = "Is the engine free of concerning leaks?";
$json_array[7][3] = "Are the belts and pulleys free of damage and in adequate condition?";
$json_array[8][3] = "Is the battery free of corrosion or other damage?";
$json_array[9][3] = "Are the battery cables free of corrosion, tightness, damage?";
$json_array[10][3] = "Is the battery securely in place?";
$json_array[11][3] = "Is the coolant level and condition acceptable?";
$json_array[12][3] = "Is the brake fluid level and condition acceptable?";
$json_array[13][3] = "Is the power steering fluid level and condition acceptable?";
$json_array[14][3] = "Are the carrying rails and firewall free of damage/ body work?";
$json_array[15][3] = "Is the radiator cap secure and in working condition?";
$json_array[16][3] = "Does the bonnet catch function correctly?";
$json_array[17][3] = "Do the bonnet hinges function correctly?";
$json_array[18][3] = "Does the car start and idle correctly?";
$json_array[19][3] = "Is the oil filler cap free of thick deposits and/or residue?";
$json_array[20][3] = "Condition of driver side front brake";
$json_array[21][3] = "Condition of passenger side front brake";
$json_array[22][3] = "Condition of passenger side rear brake";
$json_array[23][3] = "Condition of driver side rear brake";
$json_array[24][3] = "Condition of brake hoses";
$json_array[25][3] = "Condition of brake linings";
$json_array[26][3] = "Condition of suspension";
$json_array[27][3] = "Are the visible parts of the underbody free of leaks, rust and damage?";
$json_array[28][3] = "Are the visible parts of the exhaust system free of holes, rust and damage?";
$json_array[29][3] = "Are the passenger side doors and body lines properly aligned?";
$json_array[30][3] = "Are the rear-end body panels correctly aligned?";
$json_array[31][3] = "Are the driver side doors and body lines properly aligned?";
$json_array[32][3] = "Are there no clear signs of collision damage? (i.e. \"yes\" means no clear sign of collision damage)";
$json_array[33][3] = "Is there no clear evidence suggesting a significant past repair? (i.e. \"yes\" means no evidence suggesting significant past repair)";
$json_array[34][3] = "Do all the body panels have a matching colours?";
$json_array[35][3] = "Do the engine body panels align properly?";
$json_array[36][3] = "Are the factory bolts and hinges free of signs of tampering?";
$json_array[37][3] = "Is the engine area free of fresh paint under the bonnet?";
$json_array[38][3] = "Final Inspection Comments";
$json_array[39][3] = "Are there any recommended repairs for the vehicle?";
$json_array[40][3] = "If there are clear reasons the vehicle would fail a roadworthy, please describe them here.";
$json_array[41][3] = "Is the car in good visual mechanical condition?";


////IN_INSPECTION
$json_array[0][4] = "IN_INSPECTION";
$json_array[1][4] = FALSE;
$json_array[2][4] = FALSE;
$json_array[3][4] = FALSE;
$json_array[4][4] = FALSE;
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
$json_array[30][4] = TRUE;
$json_array[31][4] = TRUE;
$json_array[32][4] = TRUE;
$json_array[33][4] = TRUE;
$json_array[34][4] = TRUE;
$json_array[35][4] = TRUE;
$json_array[36][4] = TRUE;
$json_array[37][4] = TRUE;
$json_array[38][4] = FALSE;
$json_array[39][4] = FALSE;
$json_array[40][4] = FALSE;
$json_array[41][4] = TRUE;
                
    
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

                

   