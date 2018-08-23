<?php
$pdf->core->addPage('', 'USLETTER');
$pdf->core->setFont('helvetica', '', 12);
$pdf->core->cell(30, 0, 'Hello World');
$pdf->core->Output('example_001.pdf', 'D');
?>