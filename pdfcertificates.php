<?php 
use setasign\Fpdi\Fpdi;
use setasign\Fpdi\PdfReader;

require_once ('pdfprototype/fpdi/src/autoload.php');
require_once ('pdfprototype/fpdf.php');

$con = new mysqli("127.0.0.1:3306", "root", "", "cave");
if($con->connect_error){
    die("Error in connection: " .$con->connect_error);
}

$id = $_GET['id'];

$sql = "SELECT * FROM `tbl_client_user` WHERE `id` = $id";
$result = $con->query($sql);

while($data = $result->fetch_assoc()){
    $file = "CAVE_ECertificate.pdf";

    $pdf = new FPDI();
    $pdf->AddPage("L");
    $pdf->setSourceFile($file);
    $template = $pdf->importPage(1);
    $pdf->useTemplate($template);
    $pdf->SetTextColor(0, 0, 0);
    $pdf->SetFont('Helvetica');

    $pdf->SetFontSize(25);
    $pdf->SetXY(88, 76);
    $pdf->Write(0, $data['firstName']." ".$data['middleName']." ".$data['lastName']);

    $pdf->SetFontSize(11);
    $pdf->SetXY(129, 103);
    $pdf->Write(0, DATE("d"));
    $pdf->SetXY(152, 103);
    $pdf->Write(0, DATE("F"));
    $pdf->SetXY(179, 103);
    $pdf->Write(0, DATE("Y"));

    $pdf->SetFontSize(17);
    $pdf->SetXY(57, 128);
    $pdf->Write(0, $data['yearsGrad']);
    $pdf->SetXY(57, 154);
    $pdf->Write(0, $data['yearsGrad']);

    if (strlen($data['degree']) <= 60){
        $pdf->SetFontSize(12);
        $pdf->SetXY(94, 122);
        $pdf->MultiCell(70,5, $data['degree'],"l");
        $pdf->SetXY(94, 147);
        $pdf->MultiCell(70,5, $data['degree'],"l");
    }
    else {
        $pdf->SetFontSize(8);
        $pdf->SetXY(94, 123);
        $pdf->MultiCell(70,3, $data['degree'],"l");

        $pdf->SetXY(94, 148);
        $pdf->MultiCell(70,3, $data['degree'],"l");
    }

    if($data['campus'] === "Malolos" || $data['campus'] === "Makati"){
        $pdf->SetFontSize(14);
        $pdf->SetXY(184, 128);
        $pdf->Write(0, $data['campus']);
        $pdf->SetXY(184, 154);
        $pdf->Write(0, $data['campus']);
    }
    else {
        $pdf->SetFontSize(14);
        $pdf->SetXY(175, 128);
        $pdf->Write(0, $data['campus']);
        $pdf->SetXY(175, 154);
        $pdf->Write(0, $data['campus']);
    }

    $pdf->output("D", "CAVE_VerifiedECert_$data[lastName].pdf");
}
?>