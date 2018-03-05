<?php

function excelDateToDate($readDate){
    $phpexcepDate = $readDate-25569; //to offset to Unix epoch
    return strtotime("+$phpexcepDate days", mktime(0,0,0,1,1,1970));
}

require_once 'classes/PHPExcel.php';

$test = false;

$data = array();

$objReader = PHPExcel_IOFactory::createReader('Excel2007');
$objPHPExcel = $objReader->load($test ? "data/mapa-ficha.xlsx" : "data/mapa-ficha.xlsx");
$objWorksheet = $objPHPExcel->setActiveSheetIndex(1);

$maxCell = $objWorksheet->getHighestRowAndColumn();

$totalRows = $maxCell['row'];

// Getting columns data

$dates = $objWorksheet->rangeToArray('A2:A'.$totalRows);
$pips = $objWorksheet->rangeToArray('B2:B'.$totalRows);
$month = $objWorksheet->rangeToArray('C2:C'.$totalRows);

$r = 0;

foreach ($pips as $pip) {

	$pipmonth =  $month[$r][0];
	$data[$r]['pip'] = $pip[0];
	$data[$r]['month'] = $pipmonth;

	$r++;

}

echo "<pre>";
print_r($data);
echo "</pre>";
if($test){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}

?>