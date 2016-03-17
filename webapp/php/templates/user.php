<h2><?php h($user['name']) ?>さんのプロフィール</h2>
<div class="row" id="prof">
  <dl class="panel panel-primary">
    <dt>Name</dt><dd id="prof-name"><?php h($user['name']) ?></dd>
    <dt>Email</dt><dd id="prof-email"><?php h($user['email']) ?></dd>
  </dl>
</div>
<?php if ($myself['id'] != $user['id'] && !is_follow($user['id'])) { ?>
  <form id="follow-form" method="POST" action="/follow/<?php h($user['id']) ?>">
    <input type="hidden" name="self_user_id" value="<?php $myself['id'] ?>">
    <input type="submit" class="btn btn-default" value="フォローする" />
  </form>
<?php } ?>
<h3>作品</h3>
<?php foreach ($images as $image) { ?>
<div class="image">
  <a href="/view_image/<?php h($image['image_id']) ?>"><?php h($image['title']) ?></a>
  <div class="friend-date">投稿時刻:<?php h($image['created_at']) ?></div>
</div>
<?php } ?>
