<?php

require "vendor/autoload.php";

$pdf = new \Clegginabox\PDFMerger\PDFMerger;

$pdf->addPDF('samplepdfs/doc1.pdf');
$pdf->addPDF('samplepdfs/doc2.pdf');
$pdf->addPDF('samplepdfs/doc1.pdf');
$pdf->addPDF('samplepdfs/doc2.pdf');

$pdf->merge('file', 'mergerPDF/mergerTestFile.pdf', 'P');
