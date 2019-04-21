<?php

include 'app_user.php';
include_once 'PDF.php';

$obj=new App_user();

$rep=array();
$rep=$obj->reportofadmin();

$name=array();
$name=$obj->reportofcoach();

$na=array();
$na=$obj->reportofmember();

$pdf=new PDF1();
$s =array();
for ($i=0; $i <sizeof($rep)-1 ; $i++) {
  $s[]=array($rep[$i]["ad_fname"],$name[$i]["co_fname"],$na[$i]["fname"]);
}

$pdf->AddPage();
$pdf->EventTable($s);
$pdf->SetFont("Arial", "B", "20");
$pdf->Ln(5);
$pdf->SetFont("Arial", "I", "20");
$pdf->cell(91,10,"signature :.............",0,1);
$pdf->Output();


 ?>
