<h2><?php h($image['title']) ?>をいいねした人</h2>
<?php foreach ($favorites as $favorite) { ?>
  <?php $favorite_user = get_user($favorite['user_id']) ?>
  <div class="user">
    <a href="/user/<?php h($favorite_user['id']) ?>"><?php h($favorite_user['name']) ?></a>
  </div>
<?php } ?>
