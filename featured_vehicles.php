<?php




////Open csv file

$file = fopen(__DIR__ . '/inventory/inventory_status.csv',"r");

$csv_array = [];

$i = 0;

while(! feof($file))
  {
//    $row = fgetcsv($file,0,';');
    $csv_array[$i] = fgetcsv($file,0,',');
    
//    print "Line: " . $csv_array[$i][1] . "\n";
    
    if ($i >= 1)
    {
        if ($csv_array[$i][1] == 'Available')
        {
            $carcode = $csv_array[$i][0];
            
//            print $carcode . "\n"; //debugging
            
            ////CONCATENATE FULL FILE PATH
            $filepath = '/' . $carcode . '/' . $carcode . '.csv';
            
//            print $filepath . "\n"; //debugging


            ////Open csv file

            $file2 = fopen(__DIR__ . '/inventory'. $filepath,"r");

            $csv_array2 = [];

            $n = 0;

            while(! feof($file2))
              {
            //    $row = fgetcsv($file,0,';');
                $csv_array2[$n] = fgetcsv($file2,0,';');
                
//                print 'Entered into 2nd while loop: '. $csv_array2[$n][2]; //debugging
                
                $n++; 
              }

            fclose($file2);

            $Make = $csv_array2[1][2];
            $Model = $csv_array2[2][2];
            $Year = $csv_array2[3][2];
            $Variant = $csv_array2[4][2];
            $Mileage = $csv_array2[5][2];
            $Certiride_price = $csv_array2[6][2];
            $Dealership_price = $csv_array2[7][2];
            
            
            print "
                            
                            <div class=\"col-lg-4 col-md-6 col-sm-6\">
                            <a href=\"inventory/" . $carcode . ".php\" target=\"_blank\">
                            <div class=\"carcard\" >
                                
                                <p align=\"center\"><font size=\"2\" color=\"#555\"><b>". $Year ."</b></font></p>
                                <hr style=\"margin-top: 5px; margin-bottom: 5px;\">
                                <p align=\"center\" style=\"margin: 0 0 5px\"><font size=\"3\" color=\"#555\"><b>" . $Make ."</b> ". $Model ."</font></p>
                                <p align=\"center\" style=\"margin: 0 0 5px\"><font size=\"2\" color=\"#555\">".  $Variant ."</font></p>
                                <p align=\"center\" style=\"margin: 0 0 5px\"><font size=\"2\" color=\"#555\">".  number_format($Mileage, 0, ',', ' ') ." km</font></p>
                                
                                <img  src=\"dist/img/certiride5_singlelogo_mirrors_nobackground-03.png\" width=\"15%\" style=\"position: absolute; margin-bottom: 15px;\">
                                <img class=\"img-thumbnail\" src=\"inventory/".  $carcode ."/photo/Main_small.jpg\" width=\"100%\" style=\"margin-bottom: 15px;\">
                                
                                <div class=\"row\">
                                <div class=\"col-xs-6\">
                                    <div class=\"list-group\" style=\"margin-bottom: 0px\">
                                        <div class=\"list-group-item\"><font color=\"#555\">Dealer</font></div>
                                        <div class=\"list-group-item\"><font size=\"3\" color=\"#ff7777\"><strike>R". number_format($Dealership_price, 0, ',', ' ') ."</strike></font></div>
                                    </div>
                                    </div>
                                <div class=\"col-xs-6\">
                                    <div class=\"list-group\" style=\"margin-bottom: 0px\">
                                        <div class=\"list-group-item\"><font color=\"#555\">Certiride</font></div>
                                        <div class=\"list-group-item\"><font size=\"3\" color=\"#00AEEF\">R". number_format($Certiride_price, 0, ',', ' ') ."</font></div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                                </a>
                            </div>
                            "
                            ;
            
            
            
            
            
        }
        else if ($csv_array[$i][1] == 'Reserved')
        {
            $carcode = $csv_array[$i][0];

    //            print $carcode . "\n"; //debugging

                ////CONCATENATE FULL FILE PATH
                $filepath = '/' . $carcode . '/' . $carcode . '.csv';

    //            print $filepath . "\n"; //debugging


                ////Open csv file

                $file2 = fopen(__DIR__ . '/inventory'. $filepath,"r");

                $csv_array2 = [];

                $n = 0;

                while(! feof($file2))
                  {
                //    $row = fgetcsv($file,0,';');
                    $csv_array2[$n] = fgetcsv($file2,0,';');

    //                print 'Entered into 2nd while loop: '. $csv_array2[$n][2]; //debugging

                    $n++; 
                  }

                fclose($file2);

                $Make = $csv_array2[1][2];
                $Model = $csv_array2[2][2];
                $Year = $csv_array2[3][2];
                $Variant = $csv_array2[4][2];
                $Mileage = $csv_array2[5][2];
                $Certiride_price = $csv_array2[6][2];
                $Dealership_price = $csv_array2[7][2];


                print "

                                <div class=\"col-lg-4 col-md-6 col-sm-6\">
                                <a href=\"inventory/" . $carcode . ".php\" target=\"_blank\">
                                <div class=\"carcard\" >

                                    <p align=\"center\"><font size=\"2\" color=\"#555\"><b>". $Year ."</b></font></p>
                                    <hr style=\"margin-top: 5px; margin-bottom: 5px;\">
                                    <p align=\"center\" style=\"margin: 0 0 5px\"><font size=\"3\" color=\"#555\"><b>" . $Make ."</b> ". $Model ."</font></p>
                                    <p align=\"center\" style=\"margin: 0 0 5px\"><font size=\"2\" color=\"#555\">".  $Variant ."</font></p>
                                    <p align=\"center\" style=\"margin: 0 0 5px\"><font size=\"2\" color=\"#555\">".  number_format($Mileage, 0, ',', ' ') ." km</font></p>

                                    <img  src=\"dist/img/RESERVED.png\" width=\"60%\" style=\"position: absolute; margin-bottom: 15px; right: 35px\">
                                    <img  src=\"dist/img/certiride5_singlelogo_mirrors_nobackground-03.png\" width=\"15%\" style=\"position: absolute; margin-bottom: 15px;\">
                                    <img class=\"img-thumbnail\" src=\"inventory/".  $carcode ."/photo/Main_small.jpg\" width=\"100%\" style=\"margin-bottom: 15px;\">
                                    

                                    <div class=\"row\">
                                    <div class=\"col-xs-6\">
                                        <div class=\"list-group\" style=\"margin-bottom: 0px\">
                                            <div class=\"list-group-item\"><font color=\"#555\">Dealer</font></div>
                                            <div class=\"list-group-item\"><font size=\"3\" color=\"#ff7777\"><strike>R". number_format($Dealership_price, 0, ',', ' ') ."</strike></font></div>
                                        </div>
                                        </div>
                                    <div class=\"col-xs-6\">
                                        <div class=\"list-group\" style=\"margin-bottom: 0px\">
                                            <div class=\"list-group-item\"><font color=\"#555\">Certiride</font></div>
                                            <div class=\"list-group-item\"><font size=\"3\" color=\"#00AEEF\">R". number_format($Certiride_price, 0, ',', ' ') ."</font></div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                
                                    </a>
                                </div>
                                "
                                ;    
        }
    }
    
    $i++; 
  }

fclose($file);



?>