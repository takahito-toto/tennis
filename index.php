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
        <div>

            <h1>お知らせ</h1>
            <p><? //php echo nl2br($info,false); ?></p>
            <?php
            if($fp) {
              $title = fgets($fp);
              if($title) {
                echo '<p><a href="info.php">'.$title.'</p>';
              } else {
                  echo '<p>お知らせはありません。</p>';
              }
              fclose($fp);
            } else {
              echo '<p>お知らせはありません。</p>';
            }
            ?>

        </div>
    </main>

    <scriptsrc="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <scriptsrc="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    
  </body>
</html>