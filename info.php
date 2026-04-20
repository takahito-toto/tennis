<?php
$fp = fopen("info.txt","r");
$line = array();
$body = '';

if($fp){
  while(!feof($fp)){
    $line[] = fgets($fp);
  }
  fclose($fp);
}
?>

<!doctype html>	<!DOCTYPE html>
<html lang="ja" >	<html lang="en">
  <head>	<head>
<title>サークルサイト</title>	<meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

     <?php include('navbar.php'); ?>
     <main role="main" class="container" style="padding:60px 15px 0">
         <div>

            <h1>お知らせ</h1>
<?php
  if(count($line) > 0) {
    for($i = 0; $i < count($line); $i++){
      if($i == 0) {
        echo '<h2>'.$line[0].'</h2>';
      } else {
        $body .= $line[$i]. '<br>';
      }
    }
  } else {
    $body = 'お知らせはありません。';
  }
  echo '<p>'.$body.'</p>';
?>
            <p><?php //echo $info; ?></p>
         </div>
     </main>
 
</body>
</html>