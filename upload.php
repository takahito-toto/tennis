<?php $fp = fopen("info.txt","r") ?>
<!doctype html>
<html lang="ja">
  <head>
    <title>サークルサイト</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  </head>
  <body>
  <?php include('navbar.php'); ?>
  <main role="main" class="container" style="padding:60px 15px 0">

  <h1>画像アップロード</h1>
  <form action="uplod.php" method="post" enctype="multipart/form-data"> 
    <div class="form-group">
      <label>アップロードファイル</label>
      <input type="file" name="image" class="form-control-file">
    </div>
      <input type="submit" value="アップロードする" class="btn btn-primary">
  </form>

  </body>
</html>