<a href="/upload_image"><h2>投稿する</h2></a>
<div class="row panel panel-primary" id="timeline">
  <dl>
    <dt>name</dt><dd id="prof-name"><a href="/user/<?php h($user['id']) ?>"><?php h($user['name']) ?></a></dd>
    <dt>email</dt><dd id="prof-email"><?php h($user['email']) ?></dd>
    <dt>following</dt><dd id="prof-following"><a href="/following"><?php h(count($following)) ?></a></dd>
    <dt>followers</dt><dd id="prof-followers"><a href="/followers"><?php h(count($followers)) ?></a></dd>
  </dl>

  <h3>新着</h3>
  <?php foreach ($new_images as $image) { ?>
    <div class="image">
      <a href="/view_image/<?php h($image['image_id']) ?>"><img class="thumbnail-img" src=<?php h('/image/' . $image['image_id']) ?>></a><br>
    </div>
  <?php } ?>
</div>
