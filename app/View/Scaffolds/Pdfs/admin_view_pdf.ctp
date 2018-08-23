<?php
echo $this->Html->link(__('PDF'), array('action' => 'view_pdf', 'ext' => 'pdf', $pdf['Pdf']['id']));
?>