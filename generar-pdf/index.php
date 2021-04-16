<?php

require '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();

//Recoger la vista a imprimir

ob_start();
require_once 'pdf_para_generar.php';
$html= ob_get_clean();
//$html = "<h1>Hola Mundo desde una libreria de PHP para hacer PDF</h1>";
//$html .= "<p>Master en PH</P>";
$html2pdf->writeHTML($html);
$html2pdf->output("pdf_generado.pdf");
