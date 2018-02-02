<!--HEADER-->
<?php
////GET CARCODE FROM CURRENT FILE NAME
$carcode = basename(__FILE__);
$carcode = preg_replace('/\.php$/', '', $carcode);
include 'csv_reader1.php';

$PageDescription = "See detailed information about this ". $Make . ", and take it for a test drive! Passed Certiride's rigourous 200-point inspection, and priced correctly.";
$ImageLink = "http://www.certiride.com/inventory/" . $carcode . "/Main_OG_J.jpg";

include 'inventory_header_full.php';

include 'inventory_navbar.html'; ?>

<div class="row">
	<div class="col-md-9 col-xs-12 jumbotron container-fluid" style=
	'height: 450px; background-image: url("<?php
        
        ////GET CARCODE FROM CURRENT FILE NAME
        $carcode = basename(__FILE__);
        $carcode = preg_replace('/\.php$/', '', $carcode);
        
        print $carcode . "/photo/Main.jpg";
        ?>");background-size: cover; background-position: center center; color:#FFF; padding-bottom: 0px'>
        
        <br>
		<br>
		<br>
		<br>
		<br>
        <br>
        <br>
		<br>
		<br>
        <br>
		<br>
		<br>
		<h1 style="text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);"><b><?php
            ////GET CARCODE FROM CURRENT FILE NAME
            $carcode = basename(__FILE__);
            $carcode = preg_replace('/\.php$/', '', $carcode);
            include 'csv_reader1.php';
            print $Make . ' '. $Model;          
            
            ?></b></h1>
		<p style="text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);"><?php
            ////GET CARCODE FROM CURRENT FILE NAME
            $carcode = basename(__FILE__);
            $carcode = preg_replace('/\.php$/', '', $carcode);
            include 'csv_reader1.php';
            print $Year . ' '. $Variant . ' ' . number_format($Mileage, 0, ',', ' ') . 'km | <b>R'. number_format($Certiride_price, 0, ',', ' ');          
            
            ?></b>

        
</div>

	

<a href="#inspection_results"><img src='../dist/img/CERTIRIDE_INSPECTION_PASSED_1-01.png' style="position: absolute; top: 70px; left: 15px; width: 200px"></a>




<div class="col-md-3 col-xs-12" style="height: 450px; background-color: #f4f4f4" id="enquire_form">

    <div class="page-header" style="color: #555555; border-bottom: 1px solid #dddddd; text-align: center">
        
        <h3>Want to test drive this car?</h3>
        
    </div>
    <p style="text-align: center">Click the orange button below to give us your information, and we'll bring the car to you for a test drive.</p>
    <br>
    <!-- Test drive button to launch pop-up form -->
    <a data-mode="1" target="_blank" class="btn btn-warning center-block typeform-share" href="https://certiride.typeform.com/to/<?php
    ////Open csv file

    $file = fopen(__DIR__ . '/inventory_status.csv',"r");

    $csv_array = [];

    $i = 0;

    while(! feof($file))
    {
        $csv_array[$i] = fgetcsv($file,0,',');
        
        $carcode = basename(__FILE__);
        $carcode = preg_replace('/\.php$/', '', $carcode);
        
        if ($csv_array[$i][0] == $carcode && $csv_array[$i][1] == 'Reserved')
        {
            print "aWik5Z?";
        }

        else if ($csv_array[$i][0] == $carcode && $csv_array[$i][1] == 'Available')
        {
            print "J9l5V1?";
        }
        
        else if ($csv_array[$i][0] == $carcode && $csv_array[$i][1] == 'Sold')
        {
            print "enLnHU?";
        }
        
        $i++;
    }
    
    include 'csv_reader1.php';
    print 'carcode=' . $carcode . '&amp;make=' . $Make;                                       
                                           
                                           
    ?>" data-text="Certiride - enquire about test drive">Take it for a test drive!</a>
    <hr style="border-top: 1px solid #dddddd">

<!--        <p>Certiride is the best way to buy a used-car in South Africa:</p>-->
        <ul>
            <li>Our cars have passed a <b>rigorous inspection</b> process</li>
            <li>We are typically <b>priced 10% to 20% lower</b> than a dealership</li>
            <li>We have <b>no extra fees</b> - the price listed here is what you pay</li>
        </ul>

    
</div>



<!-- One out of place div needed -->
</div>

<!-- Blue divider line -->

<div class="row" style="background-color: #00AEEF; margin-top: 0px; height: 2px">
</div>





<!-- NEW PRICE BOX -->


    <div class="row" style="background-color: #fff; margin-top: 5px">

		<div class="row">
        <div class="col-xs-11 col-centered">
			<div class="col-md-4 col-xs-12" style="padding: 5px;">
                <div class="col-xs-12 col-centered" style="padding: 5px;">
                    <h5 style="margin-top: 0px">Why are our prices much better than a typical dealership?</h5>
                    <ul><font size="2">
                        <li>All our cars are <b>priced correctly</b> using a sophisticated algorithm that takes into account market data, and the condition of the car.</li>
                        <li>We have much <b>fewer costs</b> than a dealership.</li>
                        <li><b>What you see here is what you will pay.</b> We don't add on a whole bunch of extra fees.</li>
                    </font></ul>
            </div>    
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12" style="padding: 5px; margin: 0px;">
					<div class="pricecard text-center" style="background-color: #00AEEF; color: #FFFFFF; border-bottom: 0px; height: 40">
						<font size="6"><b>Certiride price:</b></font>
					</div>
					<div class="pricecard text-center" style="height: 84px">
                        <p style="margin: 0px"><font size="6"><b><?php
            ////GET CARCODE FROM CURRENT FILE NAME
            $carcode = basename(__FILE__);
            $carcode = preg_replace('/\.php$/', '', $carcode);
            include 'csv_reader1.php';
            print 'R'. number_format($Certiride_price, 0, ',', ' ');          
            
                            ?></b></font></p>
                        <p style="margin: 0px"><font size="4"><b>All inclusive. No extra fees.</b></font></p>
					</div>
			</div>
            <div class="col-md-4 col-sm-6 col-xs-12 text-center" style="padding: 5px;">
                        <div class="pricecard" style="background-color: #f4f4f4; border-bottom: 0px; height: 35px">
                            <font size="3"><b>Typical dealership price:</b></font>
                        </div>
                        <div class="pricecard" style="border-bottom: 0px; height: 35px">
                            <font color="#FF7777" size="4"><b><strike><?php
                                ////GET CARCODE FROM CURRENT FILE NAME
                                $carcode = basename(__FILE__);
                                $carcode = preg_replace('/\.php$/', '', $carcode);
                                include 'csv_reader1.php';
                                print 'R'. number_format($Dealership_price, 0, ',', ' ');          

                                ?></strike></b></font><font color="#FF7777" size="2"><b><strike> + extra fees (e.g. "on the road cost")</strike></b></font>
                        </div>
                
                        <div class="pricecard" style="background-color: #f4f4f4; border-bottom: 0px; height: 35px">
                            <font size="3"><b>You save with Certiride:</b></font>
                        </div>
                        <div class="pricecard" style="height: 35px">
                            <font size="2"><b>At least </b></font><font size="4"><b><?php
                                ////GET CARCODE FROM CURRENT FILE NAME
                                $carcode = basename(__FILE__);
                                $carcode = preg_replace('/\.php$/', '', $carcode);
                                include 'csv_reader1.php';
                                print 'R'. number_format($Saving, 0, ',', ' ');          

                            ?>.</b></font><font size="2"><b> But, probably a lot more.</b></font>
                        </div>
                
            </div>
            
	</div>
            </div>
        <div class="row">
        <div class="col-xs-11 col-centered">
            <hr style="margin-top: 0px">
            <blockquote>
					<p><?php
                        ////GET CARCODE FROM CURRENT FILE NAME
                        $carcode = basename(__FILE__);
                        $carcode = preg_replace('/\.php$/', '', $carcode);
                        include 'csv_reader1.php';
                        print $Owner_comment;          

                        ?>
                    </p>
                    <small><?php
                        ////GET CARCODE FROM CURRENT FILE NAME
                        $carcode = basename(__FILE__);
                        $carcode = preg_replace('/\.php$/', '', $carcode);
                        include 'csv_reader1.php';
                        print $Owner_first_name;          

                        ?> from <cite title=
                                "Source Title"><?php
                        ////GET CARCODE FROM CURRENT FILE NAME
                        $carcode = basename(__FILE__);
                        $carcode = preg_replace('/\.php$/', '', $carcode);
                        include 'csv_reader1.php';
                        print $Owner_suburb;          

                        ?></cite>
                    </small>
				</blockquote>
            
        </div>
            </div>
        <br>

</div>

<div class="row" style="background-color: #00AEEF;">
		<div class="container marketing" style="margin-top: 5px; margin-bottom: 0px">
			<!-- Three columns of text below the carousel -->
			<div class="row">
				<div class="col-sm-3" data-toggle="tooltip" data-placement="top" title="Certiride facilitates the sale between private buyers and sellers." style="margin-bottom: 8px; text-align:center">
					<img alt="Testing" class=
					"img-rounded" height="60" src="../dist/img/ICON_PRIVATE_WHITE.svg" width="60" style="margin-bottom: 0px" >
					<h4 style="margin-top: 5px; margin-bottom: 0px"><font color="#ffffff">Private sale.</font></h4>
				</div><!-- /.col-lg-4 -->
                <div class="col-sm-3" data-toggle="tooltip" data-placement="top" title="All our cars go through a history check and thorough 200-point inspection with an experienced mechanic." style="margin-bottom: 8px; text-align:center">
					<img alt="Testing" class=
					"img-rounded" height="60" src="../dist/img/CERTIFY_WHITE_2-01.png" width="60" style="margin-bottom: 0px" >
					<h4 style="margin-top: 5px; margin-bottom: 0px"><font color="#ffffff">Tested.</font></h4>
				</div><!-- /.col-lg-4 -->
                <div class="col-sm-3" data-toggle="tooltip" data-placement="top" title="Our cars are priced correctly and fairly using a sophisticated algorithm that takes into account market data and the car's condition." style="margin-bottom: 8px; text-align:center">
					<img alt="Testing" class=
					"img-rounded" height="60" src="../dist/img/ICON_PRICEDRIGHT_WHITE.svg" width="60" style="margin-bottom: 0px" >
					<h4 style="margin-top: 5px; margin-bottom: 0px"><font color="#ffffff">Priced right.</font></h4>
				</div><!-- /.col-lg-4 -->
                <div class="col-sm-3" data-toggle="tooltip" data-placement="top" title="Certiride brings the car to you for a test drive, and takes care of all the paperwork." style="margin-bottom: 8px; text-align:center">
					<img alt="Testing" class=
					"img-rounded" height="60" src="../dist/img/ICON_EASY_WHITE.svg" width="60" style="margin-bottom: 0px" >
					<h4 style="margin-top: 5px; margin-bottom: 0px"><font color="#ffffff">Easy.</font></h4>
				</div><!-- /.col-lg-4 -->
                
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div>








<!-- PHOTOS AND FEATURES -->
	<div class="row" style="background-color: #f4f4f4; ">
		<div class="container">
			<div class="page-header" style="border-bottom: 1px solid #ddd;">
				<h1 align="center">The usual stuff: pics and specs</h1>
			</div>
		</div>
		<!-- PUT INTO PANEL -->
        <div class="col-lg-12 col-md-12 col-xs-12" id="links" >
			<div class="panel panel-primary">
					<div class="panel-heading">
						<h4><font color="#ffffff">IMAGES: Click each to enlarge</font></h4>
					</div>
					<div class="panel-body">
            <?php
			                              
			////GET CARCODE FROM CURRENT FILE NAME
            $carcode = basename(__FILE__);
            $carcode = preg_replace('/\.php$/', '', $carcode);                                          
            
            $dir = $carcode . "/photo/*";
            foreach(glob($dir) as $file)
            {
                
                if (basename($file) != 'Main_small.jpg')
                    {
                     print '
                        <a href="' . $carcode . '/photo/'. basename($file). '" title="Display image" data-gallery class="col-lg-1 col-md-2 col-xs-4">
                        <img src="' . $carcode . '/photo/'. basename($file) . '" alt="Alt?" width="100%" class="img-thumbnail">
                        </a>';   
                    }
                
                

            }
			                            
            ?>
          </div>  
		</div>
        </div>
		
        
        <div class="col-lg-4 col-md-4 col-xs-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4><font color="#ffffff">VEHICLE BASICS</font></h4>
					</div>
					<div class="panel-body" style="max-height: 380px">
						<table class="table table-striped col-xs-10">
							<tr>
								<td><b>Make</b></td>
								<td><?php
            ////GET CARCODE FROM CURRENT FILE NAME
            $carcode = basename(__FILE__);
            $carcode = preg_replace('/\.php$/', '', $carcode);
            include 'csv_reader1.php';
            print $Make;          
            
            ?></td>
							</tr>
							<tr>
								<td><b>Model</b></td>
								<td><?php
            ////GET CARCODE FROM CURRENT FILE NAME
            $carcode = basename(__FILE__);
            $carcode = preg_replace('/\.php$/', '', $carcode);
            include 'csv_reader1.php';
            print $Model;          
            
            ?></td>
							</tr>
							<tr>
								<td><b>Variant</b></td>
								<td><?php
            ////GET CARCODE FROM CURRENT FILE NAME
            $carcode = basename(__FILE__);
            $carcode = preg_replace('/\.php$/', '', $carcode);
            include 'csv_reader1.php';
            print $Variant;          
            
            ?></td>
							</tr>
							<tr>
								<td><b>Engine</b></td>
								<td><?php
            ////GET CARCODE FROM CURRENT FILE NAME
            $carcode = basename(__FILE__);
            $carcode = preg_replace('/\.php$/', '', $carcode);
            include 'csv_reader1.php';
            print $Engine . ' cc';          
            
            ?></td>
							</tr>
							<tr>
								<td><b>Year</b></td>
								<td><?php
            ////GET CARCODE FROM CURRENT FILE NAME
            $carcode = basename(__FILE__);
            $carcode = preg_replace('/\.php$/', '', $carcode);
            include 'csv_reader1.php';
            print $Year;          
            
            ?></td>
							</tr>
							<tr>
								<td><b>Mileage</b></td>
								<td><?php
            ////GET CARCODE FROM CURRENT FILE NAME
            $carcode = basename(__FILE__);
            $carcode = preg_replace('/\.php$/', '', $carcode);
            include 'csv_reader1.php';
            print number_format($Mileage,0,',',' ') . ' km';          
            
            ?></td>
							</tr>
							<tr>
								<td><b>Colour</b></td>
								<td><?php
            ////GET CARCODE FROM CURRENT FILE NAME
            $carcode = basename(__FILE__);
            $carcode = preg_replace('/\.php$/', '', $carcode);
            include 'csv_reader1.php';
            print $Colour;          
            
            ?></td>
							</tr>
							<tr>
								<td><b>Upholstery</b></td>
								<td><?php
            ////GET CARCODE FROM CURRENT FILE NAME
            $carcode = basename(__FILE__);
            $carcode = preg_replace('/\.php$/', '', $carcode);
            include 'csv_reader1.php';
            print $Upholstery;          
            
            ?></td>
							</tr>
							<tr>
                                <td><b>Transmission</b></td>
								<td><?php
            ////GET CARCODE FROM CURRENT FILE NAME
            $carcode = basename(__FILE__);
            $carcode = preg_replace('/\.php$/', '', $carcode);
            include 'csv_reader1.php';
            print $Transmission;          
            
            ?></td>
							</tr>
						</table>
					</div>
				</div>
		</div>
        
        
        <div class="col-lg-4 col-md-4 col-xs-12">
			<div class="panel panel-primary">
            <div class="panel-heading">
						<h4><font color="#ffffff">ADVANCED INFO</font></h4>
					</div>
			<div>
                <div class="panel-body" style="max-height: 380px">
                <table class="table table-striped" >
                    <tr>
                        <td style="padding: 4px;"><b>No. of wheels driven</b></td>
                        <td style="padding: 4px; text-align: right"><?php
                                ////GET CARCODE FROM CURRENT FILE NAME
                                $carcode = basename(__FILE__);
                                $carcode = preg_replace('/\.php$/', '', $carcode);
                                include 'csv_reader1.php';
                                print $NoOfWheelsDriven;          
            
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 4px;"><b>Drive wheels</b></td>
                        <td style="padding: 4px; text-align: right"><?php
                                ////GET CARCODE FROM CURRENT FILE NAME
                                $carcode = basename(__FILE__);
                                $carcode = preg_replace('/\.php$/', '', $carcode);
                                include 'csv_reader1.php';
                                print $DriveWheels;          
            
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 4px;"><b>Power output</b></td>
                        <td style="padding: 4px; text-align: right"><?php
                                ////GET CARCODE FROM CURRENT FILE NAME
                                $carcode = basename(__FILE__);
                                $carcode = preg_replace('/\.php$/', '', $carcode);
                                include 'csv_reader1.php';
                                print $PowerOutput;          
            
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 4px"><b>Torque</b></td>
                        <td style="padding: 4px; text-align: right"><?php
                                ////GET CARCODE FROM CURRENT FILE NAME
                                $carcode = basename(__FILE__);
                                $carcode = preg_replace('/\.php$/', '', $carcode);
                                include 'csv_reader1.php';
                                print $Torque;          
            
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 4px"><b>No. of gears</b></td>
                        <td style="padding: 4px; text-align: right"><?php
                                ////GET CARCODE FROM CURRENT FILE NAME
                                $carcode = basename(__FILE__);
                                $carcode = preg_replace('/\.php$/', '', $carcode);
                                include 'csv_reader1.php';
                                print $NoOfGears;          
            
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 4px"><b>Acceleration (0 - 100 kmph)</b></td>
                        <td style="padding: 4px; text-align: right"><?php
                                ////GET CARCODE FROM CURRENT FILE NAME
                                $carcode = basename(__FILE__);
                                $carcode = preg_replace('/\.php$/', '', $carcode);
                                include 'csv_reader1.php';
                                print $Acceleration0To100;          
            
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 4px"><b>Top speed</b></td>
                        <td style="padding: 4px; text-align: right"><?php
                                ////GET CARCODE FROM CURRENT FILE NAME
                                $carcode = basename(__FILE__);
                                $carcode = preg_replace('/\.php$/', '', $carcode);
                                include 'csv_reader1.php';
                                print $TopSpeedFinal;          
            
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 4px"><b>Avg. fuel consumption</b></td>
                        <td style="padding: 4px; text-align: right"><?php
                                ////GET CARCODE FROM CURRENT FILE NAME
                                $carcode = basename(__FILE__);
                                $carcode = preg_replace('/\.php$/', '', $carcode);
                                include 'csv_reader1.php';
                                print $ConsumptionAnnualAverage;          
            
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 4px"><b>No. of airbags</b></td>
                        <td style="padding: 4px; text-align: right"><?php
                                ////GET CARCODE FROM CURRENT FILE NAME
                                $carcode = basename(__FILE__);
                                $carcode = preg_replace('/\.php$/', '', $carcode);
                                include 'csv_reader1.php';
                                print $NoOfAirbags;          
            
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 4px"><b>Boot capacity</b></td>
                        <td style="padding: 4px; text-align: right"><?php
                                ////GET CARCODE FROM CURRENT FILE NAME
                                $carcode = basename(__FILE__);
                                $carcode = preg_replace('/\.php$/', '', $carcode);
                                include 'csv_reader1.php';
                                print $BootCapacity;          
            
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 4px"><b>Fuel capacity</b></td>
                        <td style="padding: 4px; text-align: right"><?php
                                ////GET CARCODE FROM CURRENT FILE NAME
                                $carcode = basename(__FILE__);
                                $carcode = preg_replace('/\.php$/', '', $carcode);
                                include 'csv_reader1.php';
                                print $FuelCapacity;          
            
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding: 4px"><b>CO2 Emission</b></td>
                        <td style="padding: 4px; text-align: right"><?php
                                ////GET CARCODE FROM CURRENT FILE NAME
                                $carcode = basename(__FILE__);
                                $carcode = preg_replace('/\.php$/', '', $carcode);
                                include 'csv_reader1.php';
                                print $CO2Emission;          
            
                            ?>
                        </td>
                    </tr>
                </table>
				
			     </div>
            </div>
		  </div>
        </div>
        
        <div class="col-lg-4 col-md-4 col-xs-12">
			<div class="panel panel-primary">
            <div class="panel-heading">
						<h4><font color="#ffffff">FEATURES</font></h4>
					</div>
			<div>
                <div class="panel-body" style="min-height: 380px; padding-left: 0px">
                        <?php
                                
                    ////GET CARCODE FROM CURRENT FILE NAME                                
                    $carcode = basename(__FILE__);                                
                    $carcode = preg_replace('/\.php$/', '', $carcode);                                
                    include 'csv_reader1.php';
                    
                    print '<div class="col-xs-6" style="margin: 0px; padding: 0px">';
                        
                    print '<ul>';                        
                    if ($PowerSteering == "TRUE") {print '<li><b>Power steering</b></li>';}
                    else {print '<li style="color: #eeeeee;">Power steering</li>';}
                    
                    print '<hr style="margin: 3px">';

                    if ($CeramicBrakes == "TRUE") {print '<li><b>Ceramic brakes</b></li>';}
                    else {print '<li style="color: #eeeeee;">Ceramic brakes</li>';} 
                    
                    print '<hr style="margin: 3px">';
                    
                    if ($BAS == "TRUE") {print '<li><b>Emergency brake assist (BAS)</b></li>';}
                    else {print '<li style="color: #eeeeee;">Emergency brake assist (BAS)</li>';}
                    
                    print '<hr style="margin: 3px">';

                    if ($EBD == "TRUE") {print '<li><b>Electronic brakeforce distribution (EBD)</b></li>';}
                    else {print '<li style="color: #eeeeee;">Electronic brakeforce distribution (EBD)</li>';} 
                    
                    print '<hr style="margin: 3px">';
                    
                    if ($ABS == "TRUE") {print '<li><b>Anti-lock braking (ABS)</b></li>';}
                    else {print '<li style="color: #eeeeee;">Anti-lock braking (ABS)</li>';}
                    
                    print '<hr style="margin: 3px">';

                    if ($AutoTractionControl == "TRUE") {print '<li><b>Auto traction control</b></li>';}
                    else {print '<li style="color: #eeeeee;">Auto traction control</li>';}                        
                    
                    print '<hr style="margin: 3px">';
                    
                    if ($StabilityControl == "TRUE") {print '<li><b>Stability control</b></li>';}
                    else {print '<li style="color: #eeeeee;">Stability control</li>';}
                    
                    print '<hr style="margin: 3px">';

                    if ($AirCon == "TRUE") {print '<li><b>Air-conditioning</b></li>';}
                    else {print '<li style="color: #eeeeee;">Air-conditioning</li>';}                        
                    
                    print '<hr style="margin: 3px">';
                    
                    if ($ClimateControl == "TRUE") {print '<li><b>Climate control</b></li>';}
                    else {print '<li style="color: #eeeeee;">Climate control</li>';}
                    
                    print '<hr style="margin: 3px">';

                    if ($ElectricWindows == "TRUE") {print '<li><b>Electric windows</b></li>';}
                    else {print '<li style="color: #eeeeee;">Electric windows</li>';}                        
                    
                    print '<hr style="margin: 3px">';
                    
                    if ($CentralLocking == "TRUE") {print '<li><b>Central locking</b></li>';}
                    else {print '<li style="color: #eeeeee;">Central locking</li>';}
                    
                    print '<hr style="margin: 3px">';
                    
                    print '</ul></div><div class="col-xs-6" style="margin: 0px; padding: 0px"><ul>';

                    if ($AutoLockDoors == "TRUE") {print '<li><b>Auto locking doors</b></li>';}
                    else {print '<li style="color: #eeeeee;">Auto locking doors</li>';}                        
                    
                    print '<hr style="margin: 3px">';
                    
                    if ($Radio == "TRUE") {print '<li><b>Radio</b></li>';}
                    else {print '<li style="color: #eeeeee;">Radio</li>';}
                    
                    print '<hr style="margin: 3px">';

                    if ($CD == "TRUE") {print '<li><b>CD player</b></li>';}
                    else {print '<li style="color: #eeeeee;">CD player</li>';}                        
                    
                    print '<hr style="margin: 3px">';
                    
                    if ($AuxInput == "TRUE") {print '<li><b>Aux input</b></li>';}
                    else {print '<li style="color: #eeeeee;">Aux input</li>';}
                    
                    print '<hr style="margin: 3px">';

                    if ($MultifunctionSteeringWheelControl == "TRUE") {print '<li><b>Multifunction steering wheel controls</b></li>';}
                    else {print '<li style="color: #eeeeee;">Multifunction steering wheel controls</li>';}                        
                    
                    print '<hr style="margin: 3px">';
                    
                    if ($CruiseControl == "TRUE") {print '<li><b>Cruise control</b></li>';}
                    else {print '<li style="color: #eeeeee;">Cruise control</li>';}
                    
                    print '<hr style="margin: 3px">';

                    if ($IsofixChildseatAttachment == "TRUE") {print '<li><b>Isofix childseat attachment</b></li>';}
                    else {print '<li style="color: #eeeeee;">Isofix childseat attachment</li>';}                        
                    
                    print '<hr style="margin: 3px">';
                    
                    if ($Alarm == "TRUE") {print '<li><b>Alarm</b></li>';}
                    else {print '<li style="color: #eeeeee;">Alarm</li>';}
                    
                    print '<hr style="margin: 3px">';

                    if ($Immobilizer == "TRUE") {print '<li><b>Immobilizer</b></li>';}
                    else {print '<li style="color: #eeeeee;">Immobilizer</li>';}                        
                    
                    print '<hr style="margin: 3px">';
                    
                    if ($Bluetooth == "TRUE") {print '<li><b>Bluetooth</b></li>';}
                    else {print '<li style="color: #eeeeee;">Bluetooth</li>';}
                    
                    print '<hr style="margin: 3px">';

                    if ($Sunroof == "TRUE") {print '<li><b>Electric sunroof</b></li>';}
                    else {print '<li style="color: #eeeeee;">Electric sunroof</li>';}
                    
                    print '<hr style="margin: 3px">';
                    
                    print '</ul></div>';
                                        
                            ?>
				
			     </div>
            </div>
		  </div>
        </div>
        
        <div class="container">
            <div class="page-header" style="border-bottom: 1px solid #ddd;">
				<h1 align="center">Make and model reliability</h1>
			</div>
            <p style="text-align: center">The reliability rating we show below is based on information from <a href="http://www.reliabilityindex.com/" target="_blank">Reliability Index</a> - it is a measure of the frequency of failures, the cost to repair and how long the vehicle tends to last.</p>
            <p style="text-align: center">For specific models where no data is available, the next most similar vehicle (in terms of Make and Model) is shown.</p>
            <br>
            <div class="col-xs-12" style="padding-right: 0px; padding-left: 0px">
                <div class="col-xs-4" style="text-align: left; margin-left: 0px"><font size="3"><b>Fair</b></font></div>
                <div class="col-xs-4" style="text-align: center"><font size="3"><b>Good</b></font></div>
                <div class="col-xs-4" style="text-align: right; margin-right: 0px"><font size="3"><b>Excellent</b></font></div>

            
            </div>
            
            
            <div class="progress">
                <div class="progress-bar progress-bar-<?php
                                
                    ////GET CARCODE FROM CURRENT FILE NAME                                
                    $carcode = basename(__FILE__);                                
                    $carcode = preg_replace('/\.php$/', '', $carcode);                                
                    include 'csv_reader1.php';
                    $convertedIndex = (200 - $ReliabilityIndex)/2;                                                                                                                            
                    if ($convertedIndex > 50)
                    {
                        print 'success';
                    }
                    else if ($convertedIndex > 25)
                    {
                        print 'warning';
                    }
                    else
                    {
                        print 'danger';
                    }
                            
                    ?>" role="progressbar" aria-valuenow="<?php
                                
                    ////GET CARCODE FROM CURRENT FILE NAME                                
                    $carcode = basename(__FILE__);                                
                    $carcode = preg_replace('/\.php$/', '', $carcode);                                
                    include 'csv_reader1.php';
                    $convertedIndex = (200 - $ReliabilityIndex)/2;                                                                                                                            
                    print $convertedIndex; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php
                                
                    ////GET CARCODE FROM CURRENT FILE NAME                                
                    $carcode = basename(__FILE__);                                
                    $carcode = preg_replace('/\.php$/', '', $carcode);                                
                    include 'csv_reader1.php';
                    $convertedIndex = (200 - $ReliabilityIndex)/2;                                                                                                                            
                    print $convertedIndex; ?>%">
                    <span class="sr-only"><?php
                                
                    ////GET CARCODE FROM CURRENT FILE NAME                                
                    $carcode = basename(__FILE__);                                
                    $carcode = preg_replace('/\.php$/', '', $carcode);                                
                    include 'csv_reader1.php';
                    print $ReliabilityIndex; ?> Reliability Index</span>
                </div>
            </div>
            <br>
            <p>Based on <a href="<?php
                                
                    ////GET CARCODE FROM CURRENT FILE NAME                                
                    $carcode = basename(__FILE__);                                
                    $carcode = preg_replace('/\.php$/', '', $carcode);                                
                    include 'csv_reader1.php';
                    print $ReliabilityLink; ?>" target="_blank"><?php
                                
                    ////GET CARCODE FROM CURRENT FILE NAME                                
                    $carcode = basename(__FILE__);                                
                    $carcode = preg_replace('/\.php$/', '', $carcode);                                
                    include 'csv_reader1.php';
                    print $ReliabilityCar; ?></a></p>
		</div>

        
		
        
	</div>
    <!-- REVIEWS -->
	<div class="row" style="background-color: #fff">
		<div class="container">
			<div class="page-header">
				<h1 align="center">Reviews</h1>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-xs-12">
			<div class="col-xs-11 col-centered">
				<h4>Expert written review:</h4>
				<hr>
				<blockquote>
					<p><?php
            ////GET CARCODE FROM CURRENT FILE NAME
            $carcode = basename(__FILE__);
            $carcode = preg_replace('/\.php$/', '', $carcode);
            include 'csv_reader1.php';
            print $Expert_review_quote;          
            
            ?></p><small><?php
            ////GET CARCODE FROM CURRENT FILE NAME
            $carcode = basename(__FILE__);
            $carcode = preg_replace('/\.php$/', '', $carcode);
            include 'csv_reader1.php';
            print $Expert_review_reviewer;          
            
            ?> <cite title="Source Title"><?php
            ////GET CARCODE FROM CURRENT FILE NAME
            $carcode = basename(__FILE__);
            $carcode = preg_replace('/\.php$/', '', $carcode);
            include 'csv_reader1.php';
            print $Expert_review_publication;          
            
            ?></cite></small><br>
					<a class="btn btn-default" href=
					"<?php
            ////GET CARCODE FROM CURRENT FILE NAME
            $carcode = basename(__FILE__);
            $carcode = preg_replace('/\.php$/', '', $carcode);
            include 'csv_reader1.php';
            print $Expert_review_link;          
            
            ?>"
					target="_blank">Read more</a>
				</blockquote>
			</div>
			<div class="col-xs-11 col-centered">
				<h4>What the current owner says:</h4>
				<hr>
				<blockquote>
					<p><?php
            ////GET CARCODE FROM CURRENT FILE NAME
            $carcode = basename(__FILE__);
            $carcode = preg_replace('/\.php$/', '', $carcode);
            include 'csv_reader1.php';
            print $Owner_comment;          
            
            ?></p><small><?php
            ////GET CARCODE FROM CURRENT FILE NAME
            $carcode = basename(__FILE__);
            $carcode = preg_replace('/\.php$/', '', $carcode);
            include 'csv_reader1.php';
            print $Owner_first_name;          
            
            ?> from <cite title=
					"Source Title"><?php
            ////GET CARCODE FROM CURRENT FILE NAME
            $carcode = basename(__FILE__);
            $carcode = preg_replace('/\.php$/', '', $carcode);
            include 'csv_reader1.php';
            print $Owner_suburb;          
            
            ?></cite></small>
				</blockquote>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-xs-12">
			<div class="col-xs-12">
				<h4>Video review</h4>
				<hr>
			</div>
			<div class="embed-responsive embed-responsive-4by3 col-xs-10 col-centered">
				
				<?php
            ////GET CARCODE FROM CURRENT FILE NAME
            $carcode = basename(__FILE__);
            $carcode = preg_replace('/\.php$/', '', $carcode);
            include 'csv_reader1.php';
            print $Video_review_link;          
            
            ?>
			</div><br>
		</div>
	</div><!-- IMPERFECTIONS -->
	<div class="row" style="background-color: #f4f4f4;">
		<div class="container">
			<div class="page-header" style="border-bottom: 1px solid #ddd;">
				<h1 align="center">Imperfections</h1>
			</div>
		</div>
		<div class="panel-body col-xs-12">
			<div class="col-lg-4 col-md-4 col-xs-12">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4><font color="#ffffff">Reference diagram</font></h4>
					</div>
					<div class="panel-body"><img class="img-responsive" src=
					"../dist/img2/Imperfections_LHS.png" width="100%"></div>
				</div>
			</div>
			<div class="col-lg-8 col-md-8 col-xs-12" id="links">
				<div class="col-xs-12">
					<h4>Images of imperfections: Click to enlarge</h4>
					<hr style="border-top: 1px solid #ddd;">
				</div>
                
                <?php
			                              
			////GET CARCODE FROM CURRENT FILE NAME
            $carcode = basename(__FILE__);
            $carcode = preg_replace('/\.php$/', '', $carcode);                                          
            
            $dir = $carcode . "/general/*";
            foreach(glob($dir) as $file)
            {
                print '
                <a href="' . $carcode . '/general/'. basename($file). '" title="Imperfection image" data-gallery class="col-lg-2 col-md-4 col-xs-4">
                <img src="' . $carcode . '/general/'. basename($file) . '" alt="Alt?" width="100%" class="img-thumbnail">
                </a>';

            }
			                            
            ?>
                
			</div>
		</div>
	</div>
    <!-- INSPECTION -->
	<div class="row" style="background-color: #fff" id="inspection_results">
		<div class="container">
			<div class="page-header">
				<h1 align="center">Vehicle inspection</h1>
			</div>
		</div>
        <div class="container">
            <div class="col-md-2 col-xs-4">
                <div class="well" style="padding: 2px; max-height: 100px" data-toggle="tooltip" data-placement="top" title="All vehicles comfortably pass Certiride's 200+ point inspection so that you can be confident that it's in great condition">
                    <img width="100%" src="../dist/img/ICON_CERTIRIDE_PASS-01-01.png">
                </div>
                <div class="well" style="padding: 2px; max-height: 100px" data-toggle="tooltip" data-placement="top" title="All our vehicles have passed a Dekra Roadworthy in addition to our 200-point inspection">
                    <img width="100%" src="../dist/img/dekra_roadworthy_badge.png">
                </div>
            </div>
            <div class="col-md-1 col-xs-2">
                <div class="well" style="padding: 2px" data-toggle="tooltip" data-placement="bottom" title="Brakes and inner wheel">
                    <img src="../dist/img/ICON_BRAKES.svg" width="100%">
                </div>
            </div>
            <div class="col-md-1 col-xs-2">
                <div class="well" style="padding: 2px" data-toggle="tooltip" data-placement="bottom" title="Battery and electronics">
                    <img src="../dist/img/ICON_BATTERY.svg" width="100%">
                </div>
            </div>
            <div class="col-md-1 col-xs-2">
                <div class="well" style="padding: 2px" data-toggle="tooltip" data-placement="bottom" title="Engine and components">
                <img src="../dist/img/ICON_ENGINE.svg" width="100%">
                </div>
            </div>
            <div class="col-md-1 col-xs-2">
                <div class="well" style="padding: 2px" data-toggle="tooltip" data-placement="bottom" title="Gears">
                    <img src="../dist/img/ICON_GEARS.svg" width="100%">
                </div>    
            </div>
            <div class="col-md-1 col-xs-2">
                <div class="well" style="padding: 2px" data-toggle="tooltip" data-placement="bottom" title="Instrumentation">
                    <img src="../dist/img/ICON_DASH.svg" width="100%">
                </div>    
            </div>
            <div class="col-md-1 col-xs-2">
                <div class="well" style="padding: 2px" data-toggle="tooltip" data-placement="bottom" title="Suspension and handling">
                    <img src="../dist/img/ICON_SHOCKS.svg" width="100%">
                </div>    
            </div>
            <div class="col-md-1 col-xs-2">
                <div class="well" style="padding: 2px" data-toggle="tooltip" data-placement="bottom" title="Transmission and performance">
                    <img src="../dist/img/ICON_GEARSTICK.svg" width="100%">
                </div>    
            </div>
            <div class="col-md-1 col-xs-2">
                <div class="well" style="padding: 2px" data-toggle="tooltip" data-placement="bottom" title="Diagnostics and consumables">
                    <img src="../dist/img/ICON_TEMP.svg" width="100%">
                </div>
            </div>
            <div class="col-md-1 col-xs-2 hidden-xs">
                <div class="well" style="padding: 2px" data-toggle="tooltip" data-placement="bottom" title="Heating and cooling">
                    <img src="../dist/img/ICON_AIRCON.svg" width="100%">
                </div>
            </div>
            <div class="col-md-1 col-xs-2 hidden-xs">
                <div class="well" style="padding: 2px" data-toggle="tooltip" data-placement="bottom" title="Audio and internal electronics">
                    <img src="../dist/img/ICON_AUDIO.svg" width="100%">
                </div>
            </div>
        </div>
        <br>
		<div class="col-lg-9 col-md-8 col-xs-12">
			<ul class="nav nav-tabs col-xs-11 col-centered">
				<li class="active">
					<a aria-expanded="true" data-toggle="tab" href="#general">General</a>
				</li>
				<li class="">
					<a aria-expanded="false" data-toggle="tab" href=
					"#mechanical">Mechanical</a>
				</li>
				<li class="">
					<a aria-expanded="false" data-toggle="tab" href="#testdrive">Test
					drive</a>
				</li>
				<li class="">
					<a aria-expanded="false" data-toggle="tab" href=
					"#exteriorfunctional">Exterior functional</a>
				</li>
				<li class="">
					<a aria-expanded="false" data-toggle="tab" href="#exteriorvisual">Exterior
					visual</a>
				</li>
				<li class="">
					<a aria-expanded="false" data-toggle="tab" href=
					"#interiorfunctional">Interior functional</a>
				</li>
				<li class="">
					<a aria-expanded="false" data-toggle="tab" href="#interiorvisual">Interior
					visual</a>
				</li>
			</ul>
			<div class="tab-content col-xs-11 col-centered" id="myTabContent">
				<div class="tab-pane fade active in" id="general">
					<br>
                    <table class="table table-striped">
					<?php
                        $test_type = "General"; 
                        
                        ////GET CARCODE FROM CURRENT FILE NAME
                        $carcode = basename(__FILE__);
                        $carcode = preg_replace('/\.php$/', '', $carcode);
                            
                        include 'json_reader1.php';
				    ?>
                    </table>
				</div>
				<div class="tab-pane fade" id="mechanical">
					<br>
                    <table class="table table-striped">
					<?php
                        $test_type = "Mechanical"; 
                        
                        ////GET CARCODE FROM CURRENT FILE NAME
                        $carcode = basename(__FILE__);
                        $carcode = preg_replace('/\.php$/', '', $carcode);
                            
                        include 'json_reader_mechanical.php';
				    ?>
                    </table>
				</div>
				<div class="tab-pane fade" id="testdrive">
					<br>
                    <table class="table table-striped">
					<?php
                        $test_type = "Test Drive"; 
                        
                        ////GET CARCODE FROM CURRENT FILE NAME
                        $carcode = basename(__FILE__);
                        $carcode = preg_replace('/\.php$/', '', $carcode);
                            
                        include 'json_reader_testdrive.php';
				    ?>
                    </table>
				</div>
				<div class="tab-pane fade" id="exteriorfunctional">
					<br>
                    <table class="table table-striped">
					<?php
                        $test_type = "Exterior functional"; 
                        
                        ////GET CARCODE FROM CURRENT FILE NAME
                        $carcode = basename(__FILE__);
                        $carcode = preg_replace('/\.php$/', '', $carcode);
                            
                        include 'json_reader1.php';
				    ?>
                    </table>
				</div>
				<div class="tab-pane fade" id="exteriorvisual">
					<br>
                    <table class="table table-striped">
					<?php
                        $test_type = "Exterior visual"; 
                        
                        ////GET CARCODE FROM CURRENT FILE NAME
                        $carcode = basename(__FILE__);
                        $carcode = preg_replace('/\.php$/', '', $carcode);
                            
                        include 'json_reader1.php';
				    ?>
                    </table>
				</div>
				<div class="tab-pane fade" id="interiorfunctional">
					<br>
                    <table class="table table-striped">
					<?php
                        $test_type = "Interior functional"; 
                        
                        ////GET CARCODE FROM CURRENT FILE NAME
                        $carcode = basename(__FILE__);
                        $carcode = preg_replace('/\.php$/', '', $carcode);
                            
                        include 'json_reader1.php';
				    ?>
                    </table>
				</div>
				<div class="tab-pane fade" id="interiorvisual">
					<br>
                    <table class="table table-striped">
					<?php
                        $test_type = "Interior visual"; 
                        
                        ////GET CARCODE FROM CURRENT FILE NAME
                        $carcode = basename(__FILE__);
                        $carcode = preg_replace('/\.php$/', '', $carcode);
                            
                        include 'json_reader1.php';
				    ?>
                    </table>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-4 col-xs-12">
			<div class="col-xs-12 col-centered">
				<div class="panel panel-primary">
					<div class="panel-heading">
						Mechanical inspector
					</div>
					<div class="panel-body">
						<div class="col-xs-12 col-centered">
							<img class="img-circle" src="../dist/img/parkhurst_dave.jpg" width="100%">
							<hr>
						</div>
						<table class="table table-striped col-xs-10">
							
                            <!-- SQL test -->
                            
                            <?php
                            
                                $sql_config = file_get_contents('../sql_config.json');
                                $json_sql_config = json_decode($sql_config, true);
                            
                                $dbhost = $json_sql_config['database']['host'];
                                $dbuser = $json_sql_config['database']['username'];
                                $dbpass = $json_sql_config['database']['password'];
                                $dbname = $json_sql_config['database']['name'];
                            
                               $conn = mysql_connect($dbhost, $dbuser, $dbpass);

                               if(! $conn ) {
                                  die('Could not connect: ' . mysql_error());
                               }

                               $sql = 'SELECT name, experience, qual, shop, shop_link, hobbies FROM Mechanics WHERE mechanic_id=1';
                               mysql_select_db($dbname);
                               $retval = mysql_query( $sql, $conn );

                               if(! $retval ) {
                                  die('Could not get data: ' . mysql_error());
                               }

                               while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
                                  print                                       
                                      "<tr>
                                            <td>Name</td>
                                            <td>{$row['name']}</td>
                                        </tr>
                                        <tr>
                                            <td>Experience</td>
                                            <td>{$row['experience']}</td>
                                        </tr>
                                        <tr>
                                            <td>Qualifications</td>
                                            <td>{$row['qual']}</td>
                                        </tr>
                                        <tr>
                                            <td>Shop</td>
                                            <td>
                                                <a href=\"{$row['shop_link']}\" target=\"_blank\">{$row['shop']}</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Hobbies</td>
                                            <td>{$row['hobbies']}</td>
                                        </tr>"
                                      
                                      
                                      ;
                               }

                               mysql_close($conn);
                            ?>
                            
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

<div class="row" style="background-color: #f4f4f4">
    <div class="container">
        <div class="page-header">
				<h1 align="center">Interested?</h1>
          
          
			</div>
    <!-- Change the width and height values to suit you best -->
    <!-- Test drive button to launch pop-up form -->
    <a data-mode="1" target="_blank" class="btn btn-warning center-block typeform-share" href="https://certiride.typeform.com/to/<?php
    ////Open csv file

    $file = fopen(__DIR__ . '/inventory_status.csv',"r");

    $csv_array = [];

    $i = 0;

    while(! feof($file))
    {
        $csv_array[$i] = fgetcsv($file,0,',');
        
        $carcode = basename(__FILE__);
        $carcode = preg_replace('/\.php$/', '', $carcode);
        
        if ($csv_array[$i][0] == $carcode && $csv_array[$i][1] == 'Reserved')
        {
            print "aWik5Z?";
        }

        else if ($csv_array[$i][0] == $carcode && $csv_array[$i][1] == 'Available')
        {
            print "J9l5V1?";
        }
        
        else if ($csv_array[$i][0] == $carcode && $csv_array[$i][1] == 'Sold')
        {
            print "enLnHU?";
        }
        
        $i++;
    }
    
    include 'csv_reader1.php';
    print 'carcode=' . $carcode . '&amp;make=' . $Make;                                       
                                           
                                           
    ?>" data-text="Certiride - enquire about test drive">Take it for a test drive!</a>
    </div>
    <br>


</div>

<?php
    ////Open csv file

    $file = fopen(__DIR__ . '/inventory_status.csv',"r");

    $csv_array = [];

    $i = 0;

    while(! feof($file))
    {
        $csv_array[$i] = fgetcsv($file,0,',');
        
        $carcode = basename(__FILE__);
        $carcode = preg_replace('/\.php$/', '', $carcode);
        
        if ($csv_array[$i][0] == $carcode && $csv_array[$i][1] == 'Reserved')
        {
            print "<img  src=\"../dist/img/RESERVED.png\" max-width=\"10px\" width=\"40%\" style=\"position: fixed; top: 40px; right: 0px; z-index: 1000; max-width: 200px\">";
        }

        $i++;
    }
    
    ?>


	<!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
	<div class="blueimp-gallery blueimp-gallery-controls" id="blueimp-gallery">
		<!-- The container for the modal slides -->
		<div class="slides"></div><!-- Controls for the borderless lightbox -->
		<h3 class="title"></h3><a class="prev">‹</a> <a class="next">›</a> <a class=
		"close">×</a> <a class="play-pause"></a>
		<ol class="indicator"></ol>
		<!-- The modal dialog, which will be used to wrap the lightbox content -->
		<div class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button aria-hidden="true" class="close" type="button">&times;</button>
						<h4 class="modal-title"></h4>
					</div>
					<div class="modal-body next"></div>
					<div class="modal-footer">
						<button class="btn btn-default pull-left prev" type="button"><i class=
						"glyphicon glyphicon-chevron-left"></i> Previous</button> <button class=
						"btn btn-primary next" type="button">Next <i class=
						"glyphicon glyphicon-chevron-right"></i></button>
					</div>
				</div>
			</div>
		</div>
	</div><!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->


<script>(function(){var qs,js,q,s,d=document,gi=d.getElementById,ce=d.createElement,gt=d.getElementsByTagName,id='typef_orm',b='https://s3-eu-west-1.amazonaws.com/share.typeform.com/';if(!gi.call(d,id)){js=ce.call(d,'script');js.id=id;js.src=b+'share.js';q=gt.call(d,'script')[0];q.parentNode.insertBefore(js,q)}id=id+'_';if(!gi.call(d,id)){qs=ce.call(d,'link');qs.rel='stylesheet';qs.id=id;qs.href=b+'share-button.css';s=gt.call(d,'head')[0];s.appendChild(qs,s)}})()</script>

    
    <?php
        include 'inventory_footer.html';
    ?>
	

</html>