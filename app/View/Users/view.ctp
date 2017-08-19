<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($user['User']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Modified'); ?></dt>
        <dd>
            <?php echo h($user['User']['modified']); ?>
        </dd>
        <dt>プロフィール写真</dt>
        <dd>
            <?php if($user['Attachment']){
                $photo_url = $this->Link->imageurl(
                        "photo_user",
                        $user['Attachment'][0]['dir'],
                        $user['Attachment'][0]['photo_user']
                );
            }else{
                $photo_url = "default_user.jpg"; //デフォルトのプロフィール画像
            }
            echo $this->Html->image($photo_url);

            ?>
        </dd>
        <h3>あなたの投稿一覧</h3>
        <?php if($user['Post']): ?>
            <table>
                <thead>
                    <tr>
                        <td>id</td>
                        <td>title</td>
                        <td>body</td>
                        <td>created</td>
                        <td>modified</td>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($user['Post'] as $post): ?>
                    <tr>
                        <td><?php echo $post['id']; ?></td>
                        <td><?php echo $post['title']; ?></td>
                        <td><?php echo $post['body']; ?></td>
                        <td><?php echo $post['created']; ?></td>
                        <td><?php echo $post['modified']; ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
	</ul>
</div>
