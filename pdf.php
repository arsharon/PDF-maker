<?php
    require("fpdf/fpdf.php");
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email = $_POST['email'];
        $dob = $_POST['date'];
        $pdf = new FPDF();
        $pdf->AddPage("L","A4");
        $pdf->SetFont("Arial","B");
        $pdf->cell(0,10,"WELCOME {$name}",1,1,"C");
        $pdf->cell(138.5,10,"NAME:",1,0,"C");
        $pdf->cell(138.5,10,"{$name}:",1,1,"C");
        $pdf->cell(138.5,10,"Email:",1,0,"C");
        $pdf->cell(138.5,10,"{$email}:",1,1,"C");
        $pdf->cell(138.5,10,"Date of Birth:",1,0,"C");
        $pdf->cell(138.5,10,"{$dob}:",1,1,"C");

        $pdf->Output();


    }
?>