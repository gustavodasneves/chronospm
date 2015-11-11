<?php
echo $this->Form->create('Model', array('type' => 'file'));
echo $this->Form->input('files.', array('type' => 'file', 'multiple'));
echo $this->Form->submit();
echo $this->Form->end();
?>
<?= isset($mime)? $mime : null;?> <br/>
<?= isset($conteudo)? print_r($conteudo) : null; ?><br/>