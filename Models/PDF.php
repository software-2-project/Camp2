<?php
include 'fpdf17/fpdf.php';
class PDF1 extends FPDF
{
//Page header
function Header()
{
    //Logo
    $this->Image('../Views/images/logo.png',10,8,33,20);
    //Arial bold 15
    $this->SetFont('Arial','B',15);
    //Move to the right
    $this->Cell(100);
    //Title
    $this->Cell(80,20,'Report about users',1,0,'C');
    //Line break
    $this->Ln(20);
}
//Page footer
function Footer()
{
    $this->SetY(-15);
    $this->SetFont('Arial','I',8);
    //Page number
    $this->Cell(0,10,'Page '.$this->PageNo(),0,0,'C');
}

function EventTable($array)
{
    $this->SetFont('','B','24');
    $this->Ln();
    $this->SetXY(10,45);
    $this->SetFont('','B','15');
    $this->SetFillColor(156,39,176,1);
    $this->SetTextColor(255);
    $this->SetDrawColor(100,100,100);
    $this->SetLineWidth(.3);
           //whidth,height
    $this->Cell(60,12,"Admins",1,0,'C',true);
    $this->Cell(60,12,"Coaches",1,0,'C',true);
    $this->Cell(60,12,"Members",1,0,'C',true);
    $this->Ln();
    $this->SetFillColor(150,150,150);
    $this->SetTextColor(0);
    $this->SetFont('');

    $fill = false;

     foreach($array as $a)
     {
        $this->SetFont('Times','I',10);
        $this->Cell(60,10,$a[0],'LR',0,'L',$fill);
        $this->Cell(60,10,$a[1],'LR',0,'l',$fill);
        //$this->SetFont('Times','B',10);
        $this->Cell(60,10,$a[2],'LR',0,'L',$fill);
        $this->Ln();
        $fill =! $fill;
     }
     $this->Cell(180,0,'','T');
 }
 }

?>
