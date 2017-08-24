<h1>Search Posts</h1>
<?php
echo $this->Form->create('Search', array('url'=>'index'));
echo $this->Form->input('title');
echo $this->Form->end('検索');
?>