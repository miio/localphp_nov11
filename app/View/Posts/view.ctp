<h1><?php echo $post['Post']['title']?></h1>
<p><small>Created: <?php echo $post['Post']['created']?></small></p>
<p><?php echo $post['Post']['body']?></p>


Comment!
<?php 
echo $this->Form->create('Comments');
echo $this->Form->hidden('event_id',array('value'=>$post['Post']['id']));
echo $this->Form->input('body',array('rows'=>'3'));
echo $this->Form->end('Save Post');
?>
