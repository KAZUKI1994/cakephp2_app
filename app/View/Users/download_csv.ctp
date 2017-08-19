<?php
$this->Csv->addRow($th);
foreach($td as $t){
    $this->Csv->addField($t['User']['id']);
    $this->Csv->addField($t['User']['username']);
    $this->Csv->addField($t['User']['role']);
    $this->Csv->endRow();
}
$this->Csv->setFilename($filename);
echo $this->Csv->render();
exit;