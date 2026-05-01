<?php 
$images = array();

if($handle = opendir('./album')){ 
  while($entry = readdir($handle)){

    if($entry != "." && $entry != ".."){
      $images[] = $entry;
    }
  } 
  closedir($handle);
}

?>
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

            <h1>アルバム</h1>
        <?php
          if(count($images) > 0) {
            echo '<div class="row">';
            foreach($images as $img){
              echo '<div class="col-3">';
              echo '<div class="card">';
              echo '   <a href="./album/'.$img.'" target="_blank"><img src="./album/'.$img.'" class="img-fluid"></a>';
              echo ' </div>';
              echo '</div>';
            }
            echo '</div>';
          } else {
            echo '<div class="alert alert-dark" role="alert">画像はまだありません。</div>';
          }
        ?>    
        </div>
    </main>

    <scriptsrc="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <scriptsrc="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    
  </body>
</html>