<?php

require 'fpdf/fpdf.php';

$i = 1;
$multiplo35 = 0;
$multiplo3 = 0;
$multiplo5 = 0;

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Courier','',9);
  while($i <= 100){
    if(($i % 3 == 0) AND ($i % 5 == 0) )
    {
      $pdf->MultiCell(0,3,'IP Los Lagos');
      //echo  "IP Los Lagos"."<br>";
      $multiplo35 += 1;
    }elseif ($i % 3 == 0)
    {
      $pdf->MultiCell(0,3,'IP');
      //echo "IP"."<br>";
      $multiplo3 += 1;
    }elseif ($i % 5 == 0)
    {
      $pdf->MultiCell(0,3,'Los Lagos');
      //echo "Los Lagos"."<br>";
      $multiplo5 += 1;
    }else
    {
      $pdf->MultiCell(0,3, $i);
      //echo $i."<br>";
    }
    $i += 1;
  }
  $pdf->Output('F','../iplagos/multiplos.pdf');

?>
