<form class="form-horizontal" method="post" enctype="multipart/form-data" action="/upload_image">
  <div class="form-group">
    <label class="col-sm-2 control-label" for="InputTextarea">画像を投稿する</label>
      <div class="col-sm-10">
        <input type="file" name="image" >
      </div>
      <div class="col-sm-10">
        <textarea name="title" placeholder="タイトル" rows="1" class="form-control" ></textarea>
      </div>
  </div>
  <button type="submit" class="btn btn-default pull-right">送信</button>
</form>
