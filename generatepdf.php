<?php
require_once("./database/dataconnect.php");

$retrieve_data = "select * from feedback where eid=" .$_GET['eid'];
	
$result = $con->query($retrieve_data);
$rslt = [];
while($row = $result->fetch_assoc())
    $rslt[] = $row;

require "./fpdf181/fpdf.php";
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Courier','B',14);		
$y_axis = 30;
$pdf->Image('./Images/logo.png',5,5,-1400);
$pdf->Text(80,25,'FEEDBACK ON TRAINING');
$pdf->Text(80,27,'--------------------');
foreach($rslt as $row) {
    $y_axis += 10;
    
	$pdf->SetFont('Courier','',10);	

        $pdf->Ln();
        $pdf->Text(15,50,'Name of the Employee:   '.$row['empname']);
        $pdf->Text(130,60,'Department:  '.$row['dept']);
        $pdf->Text(15,60,'Name of Training Program:   '.$row['training']);
        $pdf->Text(15,70,'Organization in which training undertaken:  '.$row['org']);
        $pdf->Text(130,70,'Date of Training:  '.$row['date']);
        $pdf->SetFont('Courier','B',12);	
        $pdf->Text(15,80,'Feedback: ');
        $pdf->SetFont('Courier','',10);	
        $pdf->Text(15,90,'a)    Presentation by Faculty:  '.$row['presentation']);
        $pdf->Text(15,100,'b)    Coverage of Topics:   '.$row['topic']);
        $pdf->Text(15,110,'c)    Your level of Understanding:  '.$row['level']);
        $pdf->Text(15,115,'        (specify briefly reason)' );
        $pdf->Text(15,125,'d)    Do you want such programs in future:  '.$row['future']);
        $pdf->Text(15,130,'        (if yes what topic would you recommend)');
        $pdf->SetFont('Courier','B',10);	
        $pdf->Text(15,140,'  -------------------------------------------------------------------------------');
        $pdf->SetFont('Courier','B',11);	
        $pdf->Text(15,149,' HOD Evaluation of the effectiveness of training (to be filled in about');
        $pdf->Text(15,154,' three months)');
        $pdf->SetFont('Courier','',10);	
        $pdf->Text(15,170,'a)    Undersatnding:   '.$row['understanding']);
        $pdf->Text(15,180,'b)    Application at Job:  '.$row['application']);
        $pdf->Text(15,190,'c)    General Remarks:  '.$row['general']);
        $pdf->SetFont('Courier','B',10);	
        $pdf->Text(15,230,'      (Signature of Faculty)');
        $pdf->Text(140,230,'  (Signature of HOD)');
        $pdf->SetFont('Courier','B',10);	
        $pdf->Text(15,228,'  --------------------------------------------------------------------------------');


}
$pdf->Output();
?>