<h1><?php h($post['Post']['title']); ?></h1>
<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>
<p><?php echo h($post['Post']['body']); ?></p>