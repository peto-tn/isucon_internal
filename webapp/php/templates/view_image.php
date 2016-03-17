<h2><?php h($image['title']) ?></h2>
<div class="row" id="prof">
    <img src=<?php h($image['path']) ?>><br>
    <?php h($user['name']) ?>さんの作品<br>
    <form method="post" enctype="multipart/form-data" action="/favorite">
        <input type=hidden name="image_id" value=<?php h($image['image_id']) ?>>
        <button type="submit" class="btn btn-default" <?php if ($favorited) { ?>disabled<?php }?>>いいね</button>
        <a href="/favorite/<?php h($image['image_id']) ?>"><?php h(count($favorites)) ?></a><br>
    </form>

</div>
