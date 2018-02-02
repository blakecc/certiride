    
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
    if (preg_match('/General_Inspection/', basename($file)) == 1)
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
    

    $json_array[0][0] = "FIELD_KEY";
    $json_array[1][0] = "alpha_178";
    $json_array[2][0] = "alpha_440";
    $json_array[3][0] = "alpha_448";
    $json_array[4][0] = "alpha_501";
    $json_array[5][0] = "alpha_503";
    $json_array[6][0] = "datepicker_445";
    $json_array[7][0] = "listpicker_15";
    $json_array[8][0] = "listpicker_16";
    $json_array[9][0] = "listpicker_171";
    $json_array[10][0] = "listpicker_26";
    $json_array[11][0] = "numeric_14";
    $json_array[12][0] = "numeric_24";
    $json_array[13][0] = "numeric_89";
    $json_array[14][0] = "photo_picker_443";
    $json_array[15][0] = "photo_picker_444";
    $json_array[16][0] = "tri_11";
    $json_array[17][0] = "listpicker_13";
    $json_array[18][0] = "tri_160";
    $json_array[19][0] = "tri_169";
    $json_array[20][0] = "tri_102";
    $json_array[21][0] = "tri_103";
    $json_array[22][0] = "tri_104";
    $json_array[23][0] = "tri_105";
    $json_array[24][0] = "tri_106";
    $json_array[25][0] = "tri_107";
    $json_array[26][0] = "tri_177";
    $json_array[27][0] = "tri_180";
    $json_array[28][0] = "tri_181";
    $json_array[29][0] = "tri_182";
    $json_array[30][0] = "tri_183";
    $json_array[31][0] = "tri_185";
    $json_array[32][0] = "numeric_161";
    $json_array[33][0] = "numeric_57";
    $json_array[34][0] = "numeric_164";
    $json_array[35][0] = "numeric_60";
    $json_array[36][0] = "tri_78";
    $json_array[37][0] = "numeric_504";
    $json_array[38][0] = "tri_3";
    $json_array[39][0] = "tri_63";
    $json_array[40][0] = "tri_43";
    $json_array[41][0] = "tri_68";
    $json_array[42][0] = "tri_70";
    $json_array[43][0] = "tri_42";
    $json_array[44][0] = "tri_470";
    $json_array[45][0] = "tri_88";
    $json_array[46][0] = "tri_69";
    $json_array[47][0] = "multiphoto_304";
    $json_array[48][0] = "multiphoto_306";
    $json_array[49][0] = "multiphoto_308";
    $json_array[50][0] = "multiphoto_310";
    $json_array[51][0] = "multiphoto_312";
    $json_array[52][0] = "multiphoto_314";
    $json_array[53][0] = "multiphoto_316";
    $json_array[54][0] = "multiphoto_318";
    $json_array[55][0] = "multiphoto_334";
    $json_array[56][0] = "multiphoto_336";
    $json_array[57][0] = "multiphoto_338";
    $json_array[58][0] = "multiphoto_344";
    $json_array[59][0] = "multiphoto_347";
    $json_array[60][0] = "multiphoto_350";
    $json_array[61][0] = "multiphoto_352";
    $json_array[62][0] = "multiphoto_354";
    $json_array[63][0] = "multiphoto_356";
    $json_array[64][0] = "multiphoto_358";
    $json_array[65][0] = "multiphoto_360";
    $json_array[66][0] = "multiphoto_364";
    $json_array[67][0] = "multiphoto_372";
    $json_array[68][0] = "multiphoto_374";
    $json_array[69][0] = "multiphoto_376";
    $json_array[70][0] = "multiphoto_378";
    $json_array[71][0] = "multiphoto_392";
    $json_array[72][0] = "multiphoto_394";
    $json_array[73][0] = "multiphoto_396";
    $json_array[74][0] = "multiphoto_398";
    $json_array[75][0] = "multiphoto_425";
    $json_array[76][0] = "multiphoto_427";
    $json_array[77][0] = "multiphoto_429";
    $json_array[78][0] = "multiphoto_431";
    $json_array[79][0] = "multiphoto_434";
    $json_array[80][0] = "multiphoto_436";
    $json_array[81][0] = "multiphoto_455";
    $json_array[82][0] = "multiphoto_459";
    $json_array[83][0] = "multiphoto_463";
    $json_array[84][0] = "multiphoto_478";
    $json_array[85][0] = "multiphoto_499";
    $json_array[86][0] = "multiphoto_picker_300";
    $json_array[87][0] = "multiphoto_picker_302";
    $json_array[88][0] = "listpicker_488";
    $json_array[89][0] = "rating_163";
    $json_array[90][0] = "listpicker_58";
    $json_array[91][0] = "rating_59";
    $json_array[92][0] = "listpicker_486";
    $json_array[93][0] = "rating_166";
    $json_array[94][0] = "listpicker_484";
    $json_array[95][0] = "rating_62";
    $json_array[96][0] = "listpicker_505";
    $json_array[97][0] = "rating_7";
    $json_array[98][0] = "rating_65";
    $json_array[99][0] = "rating_101";
    $json_array[100][0] = "rating_39";
    $json_array[101][0] = "rating_90";
    $json_array[102][0] = "rating_30";
    $json_array[103][0] = "rating_98";
    $json_array[104][0] = "rating_36";
    $json_array[105][0] = "tri_10";
    $json_array[106][0] = "rating_109";
    $json_array[107][0] = "rating_41";
    $json_array[108][0] = "rating_110";
    $json_array[109][0] = "rating_204";
    $json_array[110][0] = "rating_71";
    $json_array[111][0] = "rating_453";
    $json_array[112][0] = "rating_457";
    $json_array[113][0] = "rating_173";
    $json_array[114][0] = "tri_174";
    $json_array[115][0] = "rating_172";
    $json_array[116][0] = "rating_5";
    $json_array[117][0] = "rating_461";
    $json_array[118][0] = "rating_8";
    $json_array[119][0] = "rating_6";
    $json_array[120][0] = "rating_64";
    $json_array[121][0] = "rating_167";
    $json_array[122][0] = "rating_67";
    $json_array[123][0] = "rating_91";
    $json_array[124][0] = "rating_31";
    $json_array[125][0] = "rating_92";
    $json_array[126][0] = "rating_32";
    $json_array[127][0] = "rating_93";
    $json_array[128][0] = "rating_46";
    $json_array[129][0] = "rating_94";
    $json_array[130][0] = "rating_33";
    $json_array[131][0] = "rating_96";
    $json_array[132][0] = "rating_34";
    $json_array[133][0] = "rating_97";
    $json_array[134][0] = "rating_35";
    $json_array[135][0] = "tri_152";
    $json_array[136][0] = "tri_331";
    $json_array[137][0] = "tri_153";
    $json_array[138][0] = "tri_128";
    $json_array[139][0] = "tri_52";
    $json_array[140][0] = "tri_149";
    $json_array[141][0] = "tri_54";
    $json_array[142][0] = "tri_151";
    $json_array[143][0] = "tri_158";
    $json_array[144][0] = "tri_131";
    $json_array[145][0] = "tri_155";
    $json_array[146][0] = "tri_156";
    $json_array[147][0] = "tri_159";
    $json_array[148][0] = "tri_157";
    $json_array[149][0] = "tri_154";
    $json_array[150][0] = "tri_126";
    $json_array[151][0] = "tri_142";
    $json_array[152][0] = "tri_73";
    $json_array[153][0] = "tri_74";
    $json_array[154][0] = "tri_77";
    $json_array[155][0] = "tri_79";
    $json_array[156][0] = "tri_80";
    $json_array[157][0] = "tri_130";
    $json_array[158][0] = "tri_144";
    $json_array[159][0] = "tri_127";
    $json_array[160][0] = "tri_129";
    $json_array[161][0] = "tri_108";
    $json_array[162][0] = "tri_53";
    $json_array[163][0] = "tri_148";
    $json_array[164][0] = "tri_147";
    $json_array[165][0] = "tri_141";
    $json_array[166][0] = "tri_143";
    $json_array[167][0] = "tri_133";
    $json_array[168][0] = "tri_134";
    $json_array[169][0] = "tri_132";
    $json_array[170][0] = "tri_135";
    $json_array[171][0] = "tri_136";
    $json_array[172][0] = "tri_137";
    $json_array[173][0] = "tri_138";
    $json_array[174][0] = "tri_139";
    $json_array[175][0] = "tri_140";
    $json_array[176][0] = "multiphoto_320";
    $json_array[177][0] = "multiphoto_322";
    $json_array[178][0] = "multiphoto_324";
    $json_array[179][0] = "multiphoto_326";
    $json_array[180][0] = "multiphoto_329";
    $json_array[181][0] = "multiphoto_340";
    $json_array[182][0] = "multiphoto_342";
    $json_array[183][0] = "multiphoto_362";
    $json_array[184][0] = "multiphoto_368";
    $json_array[185][0] = "multiphoto_370";
    $json_array[186][0] = "multiphoto_380";
    $json_array[187][0] = "multiphoto_382";
    $json_array[188][0] = "multiphoto_384";
    $json_array[189][0] = "multiphoto_386";
    $json_array[190][0] = "multiphoto_388";
    $json_array[191][0] = "multiphoto_390";
    $json_array[192][0] = "multiphoto_401";
    $json_array[193][0] = "multiphoto_403";
    $json_array[194][0] = "multiphoto_405";
    $json_array[195][0] = "multiphoto_407";
    $json_array[196][0] = "multiphoto_409";
    $json_array[197][0] = "multiphoto_411";
    $json_array[198][0] = "multiphoto_413";
    $json_array[199][0] = "multiphoto_415";
    $json_array[200][0] = "multiphoto_417";
    $json_array[201][0] = "multiphoto_419";
    $json_array[202][0] = "multiphoto_421";
    $json_array[203][0] = "multiphoto_423";
    $json_array[204][0] = "multiphoto_482";
    $json_array[205][0] = "tri_121";
    $json_array[206][0] = "rating_117";
    $json_array[207][0] = "rating_118";
    $json_array[208][0] = "rating_49";
    $json_array[209][0] = "rating_50";
    $json_array[210][0] = "rating_82";
    $json_array[211][0] = "rating_83";
    $json_array[212][0] = "rating_123";
    $json_array[213][0] = "rating_116";
    $json_array[214][0] = "rating_114";
    $json_array[215][0] = "rating_115";
    $json_array[216][0] = "rating_113";
    $json_array[217][0] = "rating_84";
    $json_array[218][0] = "rating_86";
    $json_array[219][0] = "rating_48";
    $json_array[220][0] = "rating_119";
    $json_array[221][0] = "rating_122";
    $json_array[222][0] = "rating_99";
    $json_array[223][0] = "rating_111";
    $json_array[224][0] = "rating_37";
    $json_array[225][0] = "rating_45";
    $json_array[226][0] = "rating_100";
    $json_array[227][0] = "rating_112";
    $json_array[228][0] = "rating_38";
    $json_array[229][0] = "rating_47";
    $json_array[230][0] = "rating_81";
    $json_array[231][0] = "rating_66";
    $json_array[232][0] = "rating_72";
    $json_array[233][0] = "rating_75";
    $json_array[234][0] = "rating_480";
    
    $json_array[0][1] = "CATEGORY";
    $json_array[1][1] = "General";
    $json_array[2][1] = "General";
    $json_array[3][1] = "General";
    $json_array[4][1] = "General";
    $json_array[5][1] = "General";
    $json_array[6][1] = "General";
    $json_array[7][1] = "General";
    $json_array[8][1] = "General";
    $json_array[9][1] = "General";
    $json_array[10][1] = "General";
    $json_array[11][1] = "General";
    $json_array[12][1] = "General";
    $json_array[13][1] = "General";
    $json_array[14][1] = "General";
    $json_array[15][1] = "General";
    $json_array[16][1] = "General";
    $json_array[17][1] = "General";
    $json_array[18][1] = "General";
    $json_array[19][1] = "General";
    $json_array[20][1] = "Exterior functional";
    $json_array[21][1] = "Exterior functional";
    $json_array[22][1] = "Exterior functional";
    $json_array[23][1] = "Exterior functional";
    $json_array[24][1] = "Exterior functional";
    $json_array[25][1] = "Exterior functional";
    $json_array[26][1] = "Exterior functional";
    $json_array[27][1] = "Exterior functional";
    $json_array[28][1] = "Exterior functional";
    $json_array[29][1] = "Exterior functional";
    $json_array[30][1] = "Exterior functional";
    $json_array[31][1] = "Exterior functional";
    $json_array[32][1] = "Exterior functional";
    $json_array[33][1] = "Exterior functional";
    $json_array[34][1] = "Exterior functional";
    $json_array[35][1] = "Exterior functional";
    $json_array[36][1] = "Exterior functional";
    $json_array[37][1] = "Exterior functional";
    $json_array[38][1] = "Exterior functional";
    $json_array[39][1] = "Exterior functional";
    $json_array[40][1] = "Exterior functional";
    $json_array[41][1] = "Exterior functional";
    $json_array[42][1] = "Exterior functional";
    $json_array[43][1] = "Exterior functional";
    $json_array[44][1] = "Exterior functional";
    $json_array[45][1] = "Exterior functional";
    $json_array[46][1] = "Exterior functional";
    $json_array[47][1] = "Exterior visual";
    $json_array[48][1] = "Exterior visual";
    $json_array[49][1] = "Exterior visual";
    $json_array[50][1] = "Exterior visual";
    $json_array[51][1] = "Exterior visual";
    $json_array[52][1] = "Exterior visual";
    $json_array[53][1] = "Exterior visual";
    $json_array[54][1] = "Exterior visual";
    $json_array[55][1] = "Exterior visual";
    $json_array[56][1] = "Exterior visual";
    $json_array[57][1] = "Exterior visual";
    $json_array[58][1] = "Exterior visual";
    $json_array[59][1] = "Exterior visual";
    $json_array[60][1] = "Exterior visual";
    $json_array[61][1] = "Exterior visual";
    $json_array[62][1] = "Exterior visual";
    $json_array[63][1] = "Exterior visual";
    $json_array[64][1] = "Exterior visual";
    $json_array[65][1] = "Exterior visual";
    $json_array[66][1] = "Exterior visual";
    $json_array[67][1] = "Exterior visual";
    $json_array[68][1] = "Exterior visual";
    $json_array[69][1] = "Exterior visual";
    $json_array[70][1] = "Exterior visual";
    $json_array[71][1] = "Exterior visual";
    $json_array[72][1] = "Exterior visual";
    $json_array[73][1] = "Exterior visual";
    $json_array[74][1] = "Exterior visual";
    $json_array[75][1] = "Exterior visual";
    $json_array[76][1] = "Exterior visual";
    $json_array[77][1] = "Exterior visual";
    $json_array[78][1] = "Exterior visual";
    $json_array[79][1] = "Exterior visual";
    $json_array[80][1] = "Exterior visual";
    $json_array[81][1] = "Exterior visual";
    $json_array[82][1] = "Exterior visual";
    $json_array[83][1] = "Exterior visual";
    $json_array[84][1] = "Exterior visual";
    $json_array[85][1] = "Exterior visual";
    $json_array[86][1] = "Exterior visual";
    $json_array[87][1] = "Exterior visual";
    $json_array[88][1] = "Exterior visual";
    $json_array[89][1] = "Exterior visual";
    $json_array[90][1] = "Exterior visual";
    $json_array[91][1] = "Exterior visual";
    $json_array[92][1] = "Exterior visual";
    $json_array[93][1] = "Exterior visual";
    $json_array[94][1] = "Exterior visual";
    $json_array[95][1] = "Exterior visual";
    $json_array[96][1] = "Exterior visual";
    $json_array[97][1] = "Exterior visual";
    $json_array[98][1] = "Exterior visual";
    $json_array[99][1] = "Exterior visual";
    $json_array[100][1] = "Exterior visual";
    $json_array[101][1] = "Exterior visual";
    $json_array[102][1] = "Exterior visual";
    $json_array[103][1] = "Exterior visual";
    $json_array[104][1] = "Exterior visual";
    $json_array[105][1] = "Exterior visual";
    $json_array[106][1] = "Exterior visual";
    $json_array[107][1] = "Exterior visual";
    $json_array[108][1] = "Exterior visual";
    $json_array[109][1] = "Exterior visual";
    $json_array[110][1] = "Exterior visual";
    $json_array[111][1] = "Exterior visual";
    $json_array[112][1] = "Exterior visual";
    $json_array[113][1] = "Exterior visual";
    $json_array[114][1] = "Exterior visual";
    $json_array[115][1] = "Exterior visual";
    $json_array[116][1] = "Exterior visual";
    $json_array[117][1] = "Exterior visual";
    $json_array[118][1] = "Exterior visual";
    $json_array[119][1] = "Exterior visual";
    $json_array[120][1] = "Exterior visual";
    $json_array[121][1] = "Exterior visual";
    $json_array[122][1] = "Exterior visual";
    $json_array[123][1] = "Exterior visual";
    $json_array[124][1] = "Exterior visual";
    $json_array[125][1] = "Exterior visual";
    $json_array[126][1] = "Exterior visual";
    $json_array[127][1] = "Exterior visual";
    $json_array[128][1] = "Exterior visual";
    $json_array[129][1] = "Exterior visual";
    $json_array[130][1] = "Exterior visual";
    $json_array[131][1] = "Exterior visual";
    $json_array[132][1] = "Exterior visual";
    $json_array[133][1] = "Exterior visual";
    $json_array[134][1] = "Exterior visual";
    $json_array[135][1] = "Interior functional";
    $json_array[136][1] = "Interior functional";
    $json_array[137][1] = "Interior functional";
    $json_array[138][1] = "Interior functional";
    $json_array[139][1] = "Interior functional";
    $json_array[140][1] = "Interior functional";
    $json_array[141][1] = "Interior functional";
    $json_array[142][1] = "Interior functional";
    $json_array[143][1] = "Interior functional";
    $json_array[144][1] = "Interior functional";
    $json_array[145][1] = "Interior functional";
    $json_array[146][1] = "Interior functional";
    $json_array[147][1] = "Interior functional";
    $json_array[148][1] = "Interior functional";
    $json_array[149][1] = "Interior functional";
    $json_array[150][1] = "Interior functional";
    $json_array[151][1] = "Interior functional";
    $json_array[152][1] = "Interior functional";
    $json_array[153][1] = "Interior functional";
    $json_array[154][1] = "Interior functional";
    $json_array[155][1] = "Interior functional";
    $json_array[156][1] = "Interior functional";
    $json_array[157][1] = "Interior functional";
    $json_array[158][1] = "Interior functional";
    $json_array[159][1] = "Interior functional";
    $json_array[160][1] = "Interior functional";
    $json_array[161][1] = "Interior functional";
    $json_array[162][1] = "Interior functional";
    $json_array[163][1] = "Interior functional";
    $json_array[164][1] = "Interior functional";
    $json_array[165][1] = "Interior functional";
    $json_array[166][1] = "Interior functional";
    $json_array[167][1] = "Interior functional";
    $json_array[168][1] = "Interior functional";
    $json_array[169][1] = "Interior functional";
    $json_array[170][1] = "Interior functional";
    $json_array[171][1] = "Interior functional";
    $json_array[172][1] = "Interior functional";
    $json_array[173][1] = "Interior functional";
    $json_array[174][1] = "Interior functional";
    $json_array[175][1] = "Interior functional";
    $json_array[176][1] = "Interior visual";
    $json_array[177][1] = "Interior visual";
    $json_array[178][1] = "Interior visual";
    $json_array[179][1] = "Interior visual";
    $json_array[180][1] = "Interior visual";
    $json_array[181][1] = "Interior visual";
    $json_array[182][1] = "Interior visual";
    $json_array[183][1] = "Interior visual";
    $json_array[184][1] = "Interior visual";
    $json_array[185][1] = "Interior visual";
    $json_array[186][1] = "Interior visual";
    $json_array[187][1] = "Interior visual";
    $json_array[188][1] = "Interior visual";
    $json_array[189][1] = "Interior visual";
    $json_array[190][1] = "Interior visual";
    $json_array[191][1] = "Interior visual";
    $json_array[192][1] = "Interior visual";
    $json_array[193][1] = "Interior visual";
    $json_array[194][1] = "Interior visual";
    $json_array[195][1] = "Interior visual";
    $json_array[196][1] = "Interior visual";
    $json_array[197][1] = "Interior visual";
    $json_array[198][1] = "Interior visual";
    $json_array[199][1] = "Interior visual";
    $json_array[200][1] = "Interior visual";
    $json_array[201][1] = "Interior visual";
    $json_array[202][1] = "Interior visual";
    $json_array[203][1] = "Interior visual";
    $json_array[204][1] = "Interior visual";
    $json_array[205][1] = "Interior visual";
    $json_array[206][1] = "Interior visual";
    $json_array[207][1] = "Interior visual";
    $json_array[208][1] = "Interior visual";
    $json_array[209][1] = "Interior visual";
    $json_array[210][1] = "Interior visual";
    $json_array[211][1] = "Interior visual";
    $json_array[212][1] = "Interior visual";
    $json_array[213][1] = "Interior visual";
    $json_array[214][1] = "Interior visual";
    $json_array[215][1] = "Interior visual";
    $json_array[216][1] = "Interior visual";
    $json_array[217][1] = "Interior visual";
    $json_array[218][1] = "Interior visual";
    $json_array[219][1] = "Interior visual";
    $json_array[220][1] = "Interior visual";
    $json_array[221][1] = "Interior visual";
    $json_array[222][1] = "Interior visual";
    $json_array[223][1] = "Interior visual";
    $json_array[224][1] = "Interior visual";
    $json_array[225][1] = "Interior visual";
    $json_array[226][1] = "Interior visual";
    $json_array[227][1] = "Interior visual";
    $json_array[228][1] = "Interior visual";
    $json_array[229][1] = "Interior visual";
    $json_array[230][1] = "Interior visual";
    $json_array[231][1] = "Interior visual";
    $json_array[232][1] = "Interior visual";
    $json_array[233][1] = "Interior visual";
    $json_array[234][1] = "Interior visual";
    
    
    //potential way to easily adjust ordering: 1. Do in Excel or 2. add $i++ between rows

    $json_array[0][2] = "VALUE";
    $json_array[1][2] = $json->alpha_178;
    $json_array[2][2] = $json->alpha_440;
    $json_array[3][2] = $json->alpha_448;
    $json_array[4][2] = $json->alpha_501;
    $json_array[5][2] = $json->alpha_503;
    $json_array[6][2] = $json->datepicker_445;
    $json_array[7][2] = $json->listpicker_15[0];
    $json_array[8][2] = $json->listpicker_16[0];
    $json_array[9][2] = $json->listpicker_171[0];
    $json_array[10][2] = $json->listpicker_26[0];
    $json_array[11][2] = $json->numeric_14;
    $json_array[12][2] = $json->numeric_24;
    $json_array[13][2] = $json->numeric_89;
    $json_array[14][2] = $json->photo_picker_443;
    $json_array[15][2] = $json->photo_picker_444;
    $json_array[16][2] = $json->tri_11;
    $json_array[17][2] = $json->listpicker_13[0];
    $json_array[18][2] = $json->tri_160;
    $json_array[19][2] = $json->tri_169;
    $json_array[20][2] = $json->tri_102;
    $json_array[21][2] = $json->tri_103;
    $json_array[22][2] = $json->tri_104;
    $json_array[23][2] = $json->tri_105;
    $json_array[24][2] = $json->tri_106;
    $json_array[25][2] = $json->tri_107;
    $json_array[26][2] = $json->tri_177;
    $json_array[27][2] = $json->tri_180;
    $json_array[28][2] = $json->tri_181;
    $json_array[29][2] = $json->tri_182;
    $json_array[30][2] = $json->tri_183;
    $json_array[31][2] = $json->tri_185;
    $json_array[32][2] = $json->numeric_161;
    $json_array[33][2] = $json->numeric_57;
    $json_array[34][2] = $json->numeric_164;
    $json_array[35][2] = $json->numeric_60;
    $json_array[36][2] = $json->tri_78;
    $json_array[37][2] = $json->numeric_504;
    $json_array[38][2] = $json->tri_3;
    $json_array[39][2] = $json->tri_63;
    $json_array[40][2] = $json->tri_43;
    $json_array[41][2] = $json->tri_68;
    $json_array[42][2] = $json->tri_70;
    $json_array[43][2] = $json->tri_42;
    $json_array[44][2] = $json->tri_470;
    $json_array[45][2] = $json->tri_88;
    $json_array[46][2] = $json->tri_69;
    $json_array[47][2] = count($json->multiphoto_304);
    $json_array[48][2] = count($json->multiphoto_306);
    $json_array[49][2] = count($json->multiphoto_308);
    $json_array[50][2] = count($json->multiphoto_310);
    $json_array[51][2] = count($json->multiphoto_312);
    $json_array[52][2] = count($json->multiphoto_314);
    $json_array[53][2] = count($json->multiphoto_316);
    $json_array[54][2] = count($json->multiphoto_318);
    $json_array[55][2] = count($json->multiphoto_334);
    $json_array[56][2] = count($json->multiphoto_336);
    $json_array[57][2] = count($json->multiphoto_338);
    $json_array[58][2] = count($json->multiphoto_344);
    $json_array[59][2] = count($json->multiphoto_347);
    $json_array[60][2] = count($json->multiphoto_350);
    $json_array[61][2] = count($json->multiphoto_352);
    $json_array[62][2] = count($json->multiphoto_354);
    $json_array[63][2] = count($json->multiphoto_356);
    $json_array[64][2] = count($json->multiphoto_358);
    $json_array[65][2] = count($json->multiphoto_360);
    $json_array[66][2] = count($json->multiphoto_364);
    $json_array[67][2] = count($json->multiphoto_372);
    $json_array[68][2] = count($json->multiphoto_374);
    $json_array[69][2] = count($json->multiphoto_376);
    $json_array[70][2] = count($json->multiphoto_378);
    $json_array[71][2] = count($json->multiphoto_392);
    $json_array[72][2] = count($json->multiphoto_394);
    $json_array[73][2] = count($json->multiphoto_396);
    $json_array[74][2] = count($json->multiphoto_398);
    $json_array[75][2] = count($json->multiphoto_425);
    $json_array[76][2] = count($json->multiphoto_427);
    $json_array[77][2] = count($json->multiphoto_429);
    $json_array[78][2] = count($json->multiphoto_431);
    $json_array[79][2] = count($json->multiphoto_434);
    $json_array[80][2] = count($json->multiphoto_436);
    $json_array[81][2] = count($json->multiphoto_455);
    $json_array[82][2] = count($json->multiphoto_459);
    $json_array[83][2] = count($json->multiphoto_463);
    $json_array[84][2] = count($json->multiphoto_478);
    $json_array[85][2] = count($json->multiphoto_499);
    $json_array[86][2] = count($json->multiphoto_picker_300);
    $json_array[87][2] = count($json->multiphoto_picker_302);
    $json_array[88][2] = $json->listpicker_488[0];
    $json_array[89][2] = $json->rating_163;
    $json_array[90][2] = $json->listpicker_58[0];
    $json_array[91][2] = $json->rating_59;
    $json_array[92][2] = $json->listpicker_486[0];
    $json_array[93][2] = $json->rating_166;
    $json_array[94][2] = $json->listpicker_484[0];
    $json_array[95][2] = $json->rating_62;
    $json_array[96][2] = $json->listpicker_505[0];
    $json_array[97][2] = $json->rating_7;
    $json_array[98][2] = $json->rating_65;
    $json_array[99][2] = $json->rating_101;
    $json_array[100][2] = $json->rating_39;
    $json_array[101][2] = $json->rating_90;
    $json_array[102][2] = $json->rating_30;
    $json_array[103][2] = $json->rating_98;
    $json_array[104][2] = $json->rating_36;
    $json_array[105][2] = $json->tri_10;
    $json_array[106][2] = $json->rating_109;
    $json_array[107][2] = $json->rating_41;
    $json_array[108][2] = $json->rating_110;
    $json_array[109][2] = $json->rating_204;
    $json_array[110][2] = $json->rating_71;
    $json_array[111][2] = $json->rating_453;
    $json_array[112][2] = $json->rating_457;
    $json_array[113][2] = $json->rating_173;
    $json_array[114][2] = $json->tri_174;
    $json_array[115][2] = $json->rating_172;
    $json_array[116][2] = $json->rating_5;
    $json_array[117][2] = $json->rating_461;
    $json_array[118][2] = $json->rating_8;
    $json_array[119][2] = $json->rating_6;
    $json_array[120][2] = $json->rating_64;
    $json_array[121][2] = $json->rating_167;
    $json_array[122][2] = $json->rating_67;
    $json_array[123][2] = $json->rating_91;
    $json_array[124][2] = $json->rating_31;
    $json_array[125][2] = $json->rating_92;
    $json_array[126][2] = $json->rating_32;
    $json_array[127][2] = $json->rating_93;
    $json_array[128][2] = $json->rating_46;
    $json_array[129][2] = $json->rating_94;
    $json_array[130][2] = $json->rating_33;
    $json_array[131][2] = $json->rating_96;
    $json_array[132][2] = $json->rating_34;
    $json_array[133][2] = $json->rating_97;
    $json_array[134][2] = $json->rating_35;
    $json_array[135][2] = $json->tri_152;
    $json_array[136][2] = $json->tri_331;
    $json_array[137][2] = $json->tri_153;
    $json_array[138][2] = $json->tri_128;
    $json_array[139][2] = $json->tri_52;
    $json_array[140][2] = $json->tri_149;
    $json_array[141][2] = $json->tri_54;
    $json_array[142][2] = $json->tri_151;
    $json_array[143][2] = $json->tri_158;
    $json_array[144][2] = $json->tri_131;
    $json_array[145][2] = $json->tri_155;
    $json_array[146][2] = $json->tri_156;
    $json_array[147][2] = $json->tri_159;
    $json_array[148][2] = $json->tri_157;
    $json_array[149][2] = $json->tri_154;
    $json_array[150][2] = $json->tri_126;
    $json_array[151][2] = $json->tri_142;
    $json_array[152][2] = $json->tri_73;
    $json_array[153][2] = $json->tri_74;
    $json_array[154][2] = $json->tri_77;
    $json_array[155][2] = $json->tri_79;
    $json_array[156][2] = $json->tri_80;
    $json_array[157][2] = $json->tri_130;
    $json_array[158][2] = $json->tri_144;
    $json_array[159][2] = $json->tri_127;
    $json_array[160][2] = $json->tri_129;
    $json_array[161][2] = $json->tri_108;
    $json_array[162][2] = $json->tri_53;
    $json_array[163][2] = $json->tri_148;
    $json_array[164][2] = $json->tri_147;
    $json_array[165][2] = $json->tri_141;
    $json_array[166][2] = $json->tri_143;
    $json_array[167][2] = $json->tri_133;
    $json_array[168][2] = $json->tri_134;
    $json_array[169][2] = $json->tri_132;
    $json_array[170][2] = $json->tri_135;
    $json_array[171][2] = $json->tri_136;
    $json_array[172][2] = $json->tri_137;
    $json_array[173][2] = $json->tri_138;
    $json_array[174][2] = $json->tri_139;
    $json_array[175][2] = $json->tri_140;
    $json_array[176][2] = count($json->multiphoto_320);
    $json_array[177][2] = count($json->multiphoto_322);
    $json_array[178][2] = count($json->multiphoto_324);
    $json_array[179][2] = count($json->multiphoto_326);
    $json_array[180][2] = count($json->multiphoto_329);
    $json_array[181][2] = count($json->multiphoto_340);
    $json_array[182][2] = count($json->multiphoto_342);
    $json_array[183][2] = count($json->multiphoto_362);
    $json_array[184][2] = count($json->multiphoto_368);
    $json_array[185][2] = count($json->multiphoto_370);
    $json_array[186][2] = count($json->multiphoto_380);
    $json_array[187][2] = count($json->multiphoto_382);
    $json_array[188][2] = count($json->multiphoto_384);
    $json_array[189][2] = count($json->multiphoto_386);
    $json_array[190][2] = count($json->multiphoto_388);
    $json_array[191][2] = count($json->multiphoto_390);
    $json_array[192][2] = count($json->multiphoto_401);
    $json_array[193][2] = count($json->multiphoto_403);
    $json_array[194][2] = count($json->multiphoto_405);
    $json_array[195][2] = count($json->multiphoto_407);
    $json_array[196][2] = count($json->multiphoto_409);
    $json_array[197][2] = count($json->multiphoto_411);
    $json_array[198][2] = count($json->multiphoto_413);
    $json_array[199][2] = count($json->multiphoto_415);
    $json_array[200][2] = count($json->multiphoto_417);
    $json_array[201][2] = count($json->multiphoto_419);
    $json_array[202][2] = count($json->multiphoto_421);
    $json_array[203][2] = count($json->multiphoto_423);
    $json_array[204][2] = count($json->multiphoto_482);
    $json_array[205][2] = $json->tri_121;
    $json_array[206][2] = $json->rating_117;
    $json_array[207][2] = $json->rating_118;
    $json_array[208][2] = $json->rating_49;
    $json_array[209][2] = $json->rating_50;
    $json_array[210][2] = $json->rating_82;
    $json_array[211][2] = $json->rating_83;
    $json_array[212][2] = $json->rating_123;
    $json_array[213][2] = $json->rating_116;
    $json_array[214][2] = $json->rating_114;
    $json_array[215][2] = $json->rating_115;
    $json_array[216][2] = $json->rating_113;
    $json_array[217][2] = $json->rating_84;
    $json_array[218][2] = $json->rating_86;
    $json_array[219][2] = $json->rating_48;
    $json_array[220][2] = $json->rating_119;
    $json_array[221][2] = $json->rating_122;
    $json_array[222][2] = $json->rating_99;
    $json_array[223][2] = $json->rating_111;
    $json_array[224][2] = $json->rating_37;
    $json_array[225][2] = $json->rating_45;
    $json_array[226][2] = $json->rating_100;
    $json_array[227][2] = $json->rating_112;
    $json_array[228][2] = $json->rating_38;
    $json_array[229][2] = $json->rating_47;
    $json_array[230][2] = $json->rating_81;
    $json_array[231][2] = $json->rating_66;
    $json_array[232][2] = $json->rating_72;
    $json_array[233][2] = $json->rating_75;
    $json_array[234][2] = $json->rating_480;
    

    $json_array[0][3] = "QUESTION";
    $json_array[1][3] = "Tyre dimensions (size, profile and width)";
    $json_array[2][3] = "Number plate";
    $json_array[3][3] = "What is the vehicle model?";
    $json_array[4][3] = "What is the vehicle colour?";
    $json_array[5][3] = "Number of doors";
    $json_array[6][3] = "Date of inspection";
    $json_array[7][3] = "Is the car a petrol or diesel?";
    $json_array[8][3] = "What is the vehicle make?";
    $json_array[9][3] = "What is the body type? ";
    $json_array[10][3] = "Is it manual or automatic transmission?";
    $json_array[11][3] = "What is the engine capacity? (L)";
    $json_array[12][3] = "What is the car year (year of first registration)?";
    $json_array[13][3] = "What is the mileage of the vehicle?";
    $json_array[14][3] = "Licence disk photo";
    $json_array[15][3] = "Car VIN photo";
    $json_array[16][3] = "Car manual and service history present in the glovebox compartment?";
    $json_array[17][3] = "How complete is the service history?";
    $json_array[18][3] = "Is the odometer free of obvious evidence to suggest tampering?";
    $json_array[19][3] = "Do the VIN and registration match?";
    $json_array[20][3] = "Do the front headlights operate correctly? (dim/normal/bright)";
    $json_array[21][3] = "Do the brake lights function correctly?";
    $json_array[22][3] = "Do the front and rear indicators work correctly?";
    $json_array[23][3] = "Front and rear hazard lights work correctly?";
    $json_array[24][3] = "Reverse lights work correctly?";
    $json_array[25][3] = "Number plate lights work correctly?";
    $json_array[26][3] = "Are all tyres the same dimensions?";
    $json_array[27][3] = "Are all tyres free of concerning damage, bulging or re-tread?";
    $json_array[28][3] = "Are all lug nuts/bolts present?";
    $json_array[29][3] = "Do all tyres appear to make equal contact with the ground?";
    $json_array[30][3] = "Are all tyres free of re-grooving?";
    $json_array[31][3] = "Are all tyres free of concerning uneven wear?";
    $json_array[32][3] = "Driver side front tyre depth (mm)";
    $json_array[33][3] = "Passenger side front tyre depth (mm)";
    $json_array[34][3] = "Driver side rear tyre depth (mm)";
    $json_array[35][3] = "Passenger side rear tyre depth (mm)";
    $json_array[36][3] = "Is the spare wheel present?";
    $json_array[37][3] = "Spare wheel tyre depth (mm)";
    $json_array[38][3] = "Is the front number plate both securely fixed, legible, visible and correctly sized?";
    $json_array[39][3] = "Is the rear number plate both securely fixed, legible, visible and correctly sized?";
    $json_array[40][3] = "Do the passenger side door handles operate correctly?";
    $json_array[41][3] = "Does the boot handle operate correctly?";
    $json_array[42][3] = "Does the boot open and close correctly?";
    $json_array[43][3] = "Passenger side mirror functions correctly? (i.e. fold back if applicable)";
    $json_array[44][3] = "Driver side mirror functions correctly? (i.e. fold back if applicable)";
    $json_array[45][3] = "Does the front wiper blade operate correctly? (including spray)";
    $json_array[46][3] = "Does the rear wiper blade operate correctly? (including spray)";
    $json_array[47][3] = "Windshield imperfections";
    $json_array[48][3] = "Front grille imperfections";
    $json_array[49][3] = "Passenger side headlight imperfections";
    $json_array[50][3] = "Passenger side front fender imperfections";
    $json_array[51][3] = "Passenger side side mirror imperfections";
    $json_array[52][3] = "Passenger side front wheel condition (rim or hub cap) imperfections";
    $json_array[53][3] = "Passenger side front door exterior condition imperfections";
    $json_array[54][3] = "Passenger side front door exterior weather seal imperfections";
    $json_array[55][3] = "Passenger side side pillar exterior imperfections";
    $json_array[56][3] = "Passenger side rear door imperfections";
    $json_array[57][3] = "Passenger side rear door exterior weather seal imperfections";
    $json_array[58][3] = "Passenger side rocker/sill panels imperfections";
    $json_array[59][3] = "Passenger side quarter panel imperfections";
    $json_array[60][3] = "Passenger side rear wheel condition (rim or hub cap) imperfections";
    $json_array[61][3] = "Passenger side rear light imperfections";
    $json_array[62][3] = "Driver side rear light imperfections";
    $json_array[63][3] = "Boot or tailgate imperfections";
    $json_array[64][3] = "Rear window imperfections";
    $json_array[65][3] = "Boot exterior weather seal imperfections";
    $json_array[66][3] = "Load bin area imperfections";
    $json_array[67][3] = "Driver side quarter panel imperfections";
    $json_array[68][3] = "Driver side rocker/sill panels imperfections";
    $json_array[69][3] = "Driver side rear door imperfections";
    $json_array[70][3] = "Driver side rear door exterior weather seal imperfections";
    $json_array[71][3] = "Soft top material imperfections";
    $json_array[72][3] = "Driver side exterior pillar imperfections";
    $json_array[73][3] = "Driver side front door exterior imperfections";
    $json_array[74][3] = "Driver side front door exterior weather seal imperfections";
    $json_array[75][3] = "Driver side front fender imperfections";
    $json_array[76][3] = "Driver side headlight imperfections";
    $json_array[77][3] = "Driver side rear wheel condition (rim or hub cap) imperfections";
    $json_array[78][3] = "Roof imperfections";
    $json_array[79][3] = "Fuel filler door imperfections";
    $json_array[80][3] = "Paintwork imperfections";
    $json_array[81][3] = "Front windscreen wiper imperfections";
    $json_array[82][3] = "Rear windscreen wiper imperfections";
    $json_array[83][3] = "Rear bumper imperfections";
    $json_array[84][3] = "Corrosion photos";
    $json_array[85][3] = "Driver side front wheel imperfections (rim or hub cap)";
    $json_array[86][3] = "Front bumper imperfections";
    $json_array[87][3] = "Bonnet imperfections";
    $json_array[88][3] = "Driver side front tyre brand";
    $json_array[89][3] = "Driver side front wheel condition (rim or hub cap)";
    $json_array[90][3] = "Passenger side front tyre brand";
    $json_array[91][3] = "Passenger side front wheel condition (rim or hub cap)";
    $json_array[92][3] = "Driver side rear tyre brand";
    $json_array[93][3] = "Driver side rear wheel condition (rim or hub cap)";
    $json_array[94][3] = "Passenger side rear tyre brand";
    $json_array[95][3] = "Passenger side rear wheel condition (rim or hub cap)";
    $json_array[96][3] = "Spare wheel tyre brand";
    $json_array[97][3] = "Windshield condition";
    $json_array[98][3] = "Rear window condition";
    $json_array[99][3] = "Driver side mirror condition";
    $json_array[100][3] = "Passenger side side mirror condition";
    $json_array[101][3] = "Driver side headlight condition";
    $json_array[102][3] = "Passenger side headlight condition";
    $json_array[103][3] = "Driver side rear light condition";
    $json_array[104][3] = "Passenger side rear light condition";
    $json_array[105][3] = "Are the car emblems intact and in acceptable condition?";
    $json_array[106][3] = "Driver side front door exterior weather seal condition";
    $json_array[107][3] = "Passenger side front door exterior weather seal condition";
    $json_array[108][3] = "Driver side rear door exterior weather seal condition";
    $json_array[109][3] = "Passenger side rear door exterior weather seal condition";
    $json_array[110][3] = "Boot exterior weather seal condtion";
    $json_array[111][3] = "Front windscreen wiper condition";
    $json_array[112][3] = "Rear windscreen wiper condition";
    $json_array[113][3] = "Paintwork condition";
    $json_array[114][3] = "Are all body panels free of corrosion?";
    $json_array[115][3] = "Fuel filler door condition";
    $json_array[116][3] = "Front bumper condition";
    $json_array[117][3] = "Rear bumper condition";
    $json_array[118][3] = "Front grille condition";
    $json_array[119][3] = "Bonnet condition";
    $json_array[120][3] = "Boot or tailgate condition";
    $json_array[121][3] = "Roof condition";
    $json_array[122][3] = "Load bin area condition? (if applicable)";
    $json_array[123][3] = "Driver side front fender condition";
    $json_array[124][3] = "Passenger side front fender condition";
    $json_array[125][3] = "Driver side front door exterior condition";
    $json_array[126][3] = "Passenger side front door exterior condition";
    $json_array[127][3] = "Driver side rear door condition";
    $json_array[128][3] = "Passenger side rear door exterior condition";
    $json_array[129][3] = "Driver side rocker/sill panels condition";
    $json_array[130][3] = "Passenger side rocker/sill panels condition";
    $json_array[131][3] = "Driver side exterior pillar condition";
    $json_array[132][3] = "Passenger side side pillar exterior condition";
    $json_array[133][3] = "Driver side quarter panel condition";
    $json_array[134][3] = "Passenger side quarter panel condition";
    $json_array[135][3] = "Front driver seatbelt functions correctly?";
    $json_array[136][3] = "Front passenger seatbelt functions correctly?";
    $json_array[137][3] = "Rear seatbelts function correctly?";
    $json_array[138][3] = "Driver side windows function correctly?";
    $json_array[139][3] = "Do the passenger side windows function correctly?";
    $json_array[140][3] = "Front driver seat functions correctly?";
    $json_array[141][3] = "Front passenger seat functions correctly";
    $json_array[142][3] = "Rear seats function correctly (including layout re-positioning)?";
    $json_array[143][3] = "Are all the car seats secure?";
    $json_array[144][3] = "Handbrake functions correctly?";
    $json_array[145][3] = "Does the steering wheel re-adjustment function work correctly?";
    $json_array[146][3] = "Is the steering column free from excessive free play?";
    $json_array[147][3] = "Does the bonnet lever work?";
    $json_array[148][3] = "Is the steering column or ignition free of damage (suggesting theft)?";
    $json_array[149][3] = "Car free of diagnostic warnings?";
    $json_array[150][3] = "Driver pedals function correctly?";
    $json_array[151][3] = "Hooter functions correctly?";
    $json_array[152][3] = "Are the boot tools are correctly placed?";
    $json_array[153][3] = "Is the warning triangle present?";
    $json_array[154][3] = "Is the jack present?";
    $json_array[155][3] = "Is the wheel spanner present?";
    $json_array[156][3] = "Is the lock nut tool present?";
    $json_array[157][3] = "Central locks function correctly?";
    $json_array[158][3] = "Instrument cluster and backlights function correctly?";
    $json_array[159][3] = "Interior lights function correctly?";
    $json_array[160][3] = "Sunroof functions correctly?";
    $json_array[161][3] = "Convertible top functions correctly?";
    $json_array[162][3] = "Glove box functions correctly";
    $json_array[163][3] = "Sun visors function correctly?";
    $json_array[164][3] = "Cup holders function correctly?";
    $json_array[165][3] = "Steering wheel controls function correctly?";
    $json_array[166][3] = "Stalk controls function correctly?";
    $json_array[167][3] = "Heater functions correctly?";
    $json_array[168][3] = "Air-conditioning functions correctly?";
    $json_array[169][3] = "Cigarette lighter power socket functions correctly?";
    $json_array[170][3] = "Radio functions correctly?";
    $json_array[171][3] = "Audio system (radio, CD etc.) navigation buttons function correctly?";
    $json_array[172][3] = "CD player functions correctly?";
    $json_array[173][3] = "Auxiliary source audio functions correctly?";
    $json_array[174][3] = "Bluetooth functions correctly?";
    $json_array[175][3] = "All speakers function correctly?";
    $json_array[176][3] = "Passenger side front door internal rubber seal imperfections";
    $json_array[177][3] = "Passenger side front door interior panel imperfections";
    $json_array[178][3] = "Glovebox and console compartments interior imperfections";
    $json_array[179][3] = "Front passenger seat condition imperfections";
    $json_array[180][3] = "Front passenger seat seatbelt imperfections";
    $json_array[181][3] = "Passenger rear door rubber imperfections";
    $json_array[182][3] = "Passenger side rear door interior panel imperfections";
    $json_array[183][3] = "Boot internal rubber seal imperfections";
    $json_array[184][3] = "Boot interior imperfections";
    $json_array[185][3] = "Boot floor (i.e. under carpet) imperfections";
    $json_array[186][3] = "Driver side rear door internal rubber seal imperfections";
    $json_array[187][3] = "Driver side rear interior door panel imperfections";
    $json_array[188][3] = "Rear carpet/floor mat imperfections";
    $json_array[189][3] = "Rear seats imperfections";
    $json_array[190][3] = "Rear seats seatbelts imperfections";
    $json_array[191][3] = "Roof interior imperfections";
    $json_array[192][3] = "Driver side mirror imperfections";
    $json_array[193][3] = "Driver side front door internall rubber seal imperfections";
    $json_array[194][3] = "Driver side front door interior panel imperfections";
    $json_array[195][3] = "Front carpet/floor mat imperfections";
    $json_array[196][3] = "Front dash imperfections";
    $json_array[197][3] = "Centre console imperfections";
    $json_array[198][3] = "Cupholders imperfections";
    $json_array[199][3] = "Driver seat imperfections";
    $json_array[200][3] = "Driver seat seatbelt imperfections";
    $json_array[201][3] = "Interior mirrors imperfections";
    $json_array[202][3] = "Sun visors imperfections";
    $json_array[203][3] = "Driver pedals imperfections";
    $json_array[204][3] = "Boot lid/parcel shelf imperfections";
    $json_array[205][3] = "Is the car free of abnormal smells or excessive air freshener?";
    $json_array[206][3] = "Driver seat condition";
    $json_array[207][3] = "Driver seat seatbelt condition";
    $json_array[208][3] = "Front passenger seat condition";
    $json_array[209][3] = "Front passenger seat seatbelt condition";
    $json_array[210][3] = "Rear seats condition";
    $json_array[211][3] = "Rear seats seatbelts condition";
    $json_array[212][3] = "Sun visors condition";
    $json_array[213][3] = "Cupholders condition";
    $json_array[214][3] = "Front dash condition";
    $json_array[215][3] = "Centre console condition";
    $json_array[216][3] = "Front carpet/floor mat condition";
    $json_array[217][3] = "Roof interior condition";
    $json_array[218][3] = "Soft top material condition";
    $json_array[219][3] = "Glovebox and console compartments interior condition";
    $json_array[220][3] = "Interior mirrors condition";
    $json_array[221][3] = "Driver pedals condition";
    $json_array[222][3] = "Driver side front door internal rubber seal condition";
    $json_array[223][3] = "Driver side front door interior panel condition";
    $json_array[224][3] = "Passenger side front door internal rubber seal condition";
    $json_array[225][3] = "Passenger side front door interior panel condition";
    $json_array[226][3] = "Driver side rear door internal rubber seal condition";
    $json_array[227][3] = "Driver side rear interior door panel condition";
    $json_array[228][3] = "Passenger side rear door internal rubber seal condition";
    $json_array[229][3] = "Passenger side rear door interior panel condition";
    $json_array[230][3] = "Rear carpet/floor mat condition";
    $json_array[231][3] = "Boot internal rubber seal condition";
    $json_array[232][3] = "Boot interior condition";
    $json_array[233][3] = "Boot floor (i.e. under carpet) condition";
    $json_array[234][3] = "Boot lid/parcel shelf condition";
                
    $json_array[0][4] = "IN_INSPECTION";
    $json_array[1][4] = FALSE;
    $json_array[2][4] = FALSE;
    $json_array[3][4] = FALSE;
    $json_array[4][4] = FALSE;
    $json_array[5][4] = FALSE;
    $json_array[6][4] = FALSE;
    $json_array[7][4] = FALSE;
    $json_array[8][4] = FALSE;
    $json_array[9][4] = FALSE;
    $json_array[10][4] = FALSE;
    $json_array[11][4] = FALSE;
    $json_array[12][4] = FALSE;
    $json_array[13][4] = FALSE;
    $json_array[14][4] = FALSE;
    $json_array[15][4] = FALSE;
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
    $json_array[38][4] = TRUE;
    $json_array[39][4] = TRUE;
    $json_array[40][4] = TRUE;
    $json_array[41][4] = TRUE;
    $json_array[42][4] = TRUE;
    $json_array[43][4] = TRUE;
    $json_array[44][4] = TRUE;
    $json_array[45][4] = TRUE;
    $json_array[46][4] = TRUE;
    $json_array[47][4] = FALSE;
    $json_array[48][4] = FALSE;
    $json_array[49][4] = FALSE;
    $json_array[50][4] = FALSE;
    $json_array[51][4] = FALSE;
    $json_array[52][4] = FALSE;
    $json_array[53][4] = FALSE;
    $json_array[54][4] = FALSE;
    $json_array[55][4] = FALSE;
    $json_array[56][4] = FALSE;
    $json_array[57][4] = FALSE;
    $json_array[58][4] = FALSE;
    $json_array[59][4] = FALSE;
    $json_array[60][4] = FALSE;
    $json_array[61][4] = FALSE;
    $json_array[62][4] = FALSE;
    $json_array[63][4] = FALSE;
    $json_array[64][4] = FALSE;
    $json_array[65][4] = FALSE;
    $json_array[66][4] = FALSE;
    $json_array[67][4] = FALSE;
    $json_array[68][4] = FALSE;
    $json_array[69][4] = FALSE;
    $json_array[70][4] = FALSE;
    $json_array[71][4] = FALSE;
    $json_array[72][4] = FALSE;
    $json_array[73][4] = FALSE;
    $json_array[74][4] = FALSE;
    $json_array[75][4] = FALSE;
    $json_array[76][4] = FALSE;
    $json_array[77][4] = FALSE;
    $json_array[78][4] = FALSE;
    $json_array[79][4] = FALSE;
    $json_array[80][4] = FALSE;
    $json_array[81][4] = FALSE;
    $json_array[82][4] = FALSE;
    $json_array[83][4] = FALSE;
    $json_array[84][4] = FALSE;
    $json_array[85][4] = FALSE;
    $json_array[86][4] = FALSE;
    $json_array[87][4] = FALSE;
    $json_array[88][4] = TRUE;
    $json_array[89][4] = TRUE;
    $json_array[90][4] = TRUE;
    $json_array[91][4] = TRUE;
    $json_array[92][4] = TRUE;
    $json_array[93][4] = TRUE;
    $json_array[94][4] = TRUE;
    $json_array[95][4] = TRUE;
    $json_array[96][4] = TRUE;
    $json_array[97][4] = TRUE;
    $json_array[98][4] = TRUE;
    $json_array[99][4] = TRUE;
    $json_array[100][4] = TRUE;
    $json_array[101][4] = TRUE;
    $json_array[102][4] = TRUE;
    $json_array[103][4] = TRUE;
    $json_array[104][4] = TRUE;
    $json_array[105][4] = TRUE;
    $json_array[106][4] = TRUE;
    $json_array[107][4] = TRUE;
    $json_array[108][4] = TRUE;
    $json_array[109][4] = TRUE;
    $json_array[110][4] = TRUE;
    $json_array[111][4] = TRUE;
    $json_array[112][4] = TRUE;
    $json_array[113][4] = TRUE;
    $json_array[114][4] = TRUE;
    $json_array[115][4] = TRUE;
    $json_array[116][4] = TRUE;
    $json_array[117][4] = TRUE;
    $json_array[118][4] = TRUE;
    $json_array[119][4] = TRUE;
    $json_array[120][4] = TRUE;
    $json_array[121][4] = TRUE;
    $json_array[122][4] = TRUE;
    $json_array[123][4] = TRUE;
    $json_array[124][4] = TRUE;
    $json_array[125][4] = TRUE;
    $json_array[126][4] = TRUE;
    $json_array[127][4] = TRUE;
    $json_array[128][4] = TRUE;
    $json_array[129][4] = TRUE;
    $json_array[130][4] = TRUE;
    $json_array[131][4] = TRUE;
    $json_array[132][4] = TRUE;
    $json_array[133][4] = TRUE;
    $json_array[134][4] = TRUE;
    $json_array[135][4] = TRUE;
    $json_array[136][4] = TRUE;
    $json_array[137][4] = TRUE;
    $json_array[138][4] = TRUE;
    $json_array[139][4] = TRUE;
    $json_array[140][4] = TRUE;
    $json_array[141][4] = TRUE;
    $json_array[142][4] = TRUE;
    $json_array[143][4] = TRUE;
    $json_array[144][4] = TRUE;
    $json_array[145][4] = TRUE;
    $json_array[146][4] = TRUE;
    $json_array[147][4] = TRUE;
    $json_array[148][4] = TRUE;
    $json_array[149][4] = TRUE;
    $json_array[150][4] = TRUE;
    $json_array[151][4] = TRUE;
    $json_array[152][4] = TRUE;
    $json_array[153][4] = TRUE;
    $json_array[154][4] = TRUE;
    $json_array[155][4] = TRUE;
    $json_array[156][4] = TRUE;
    $json_array[157][4] = TRUE;
    $json_array[158][4] = TRUE;
    $json_array[159][4] = TRUE;
    $json_array[160][4] = TRUE;
    $json_array[161][4] = TRUE;
    $json_array[162][4] = TRUE;
    $json_array[163][4] = TRUE;
    $json_array[164][4] = TRUE;
    $json_array[165][4] = TRUE;
    $json_array[166][4] = TRUE;
    $json_array[167][4] = TRUE;
    $json_array[168][4] = TRUE;
    $json_array[169][4] = TRUE;
    $json_array[170][4] = TRUE;
    $json_array[171][4] = TRUE;
    $json_array[172][4] = TRUE;
    $json_array[173][4] = TRUE;
    $json_array[174][4] = TRUE;
    $json_array[175][4] = TRUE;
    $json_array[176][4] = FALSE;
    $json_array[177][4] = FALSE;
    $json_array[178][4] = FALSE;
    $json_array[179][4] = FALSE;
    $json_array[180][4] = FALSE;
    $json_array[181][4] = FALSE;
    $json_array[182][4] = FALSE;
    $json_array[183][4] = FALSE;
    $json_array[184][4] = FALSE;
    $json_array[185][4] = FALSE;
    $json_array[186][4] = FALSE;
    $json_array[187][4] = FALSE;
    $json_array[188][4] = FALSE;
    $json_array[189][4] = FALSE;
    $json_array[190][4] = FALSE;
    $json_array[191][4] = FALSE;
    $json_array[192][4] = FALSE;
    $json_array[193][4] = FALSE;
    $json_array[194][4] = FALSE;
    $json_array[195][4] = FALSE;
    $json_array[196][4] = FALSE;
    $json_array[197][4] = FALSE;
    $json_array[198][4] = FALSE;
    $json_array[199][4] = FALSE;
    $json_array[200][4] = FALSE;
    $json_array[201][4] = FALSE;
    $json_array[202][4] = FALSE;
    $json_array[203][4] = FALSE;
    $json_array[204][4] = FALSE;
    $json_array[205][4] = TRUE;
    $json_array[206][4] = TRUE;
    $json_array[207][4] = TRUE;
    $json_array[208][4] = TRUE;
    $json_array[209][4] = TRUE;
    $json_array[210][4] = TRUE;
    $json_array[211][4] = TRUE;
    $json_array[212][4] = TRUE;
    $json_array[213][4] = TRUE;
    $json_array[214][4] = TRUE;
    $json_array[215][4] = TRUE;
    $json_array[216][4] = TRUE;
    $json_array[217][4] = TRUE;
    $json_array[218][4] = TRUE;
    $json_array[219][4] = TRUE;
    $json_array[220][4] = TRUE;
    $json_array[221][4] = TRUE;
    $json_array[222][4] = TRUE;
    $json_array[223][4] = TRUE;
    $json_array[224][4] = TRUE;
    $json_array[225][4] = TRUE;
    $json_array[226][4] = TRUE;
    $json_array[227][4] = TRUE;
    $json_array[228][4] = TRUE;
    $json_array[229][4] = TRUE;
    $json_array[230][4] = TRUE;
    $json_array[231][4] = TRUE;
    $json_array[232][4] = TRUE;
    $json_array[233][4] = TRUE;
    $json_array[234][4] = TRUE;
                
    
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

                

   