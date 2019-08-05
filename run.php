<!doctype html>
<html style="--hue: 207;" class="<?= $_GET["pages"] ?>">
 <head>
  <link href="print.css" rel="stylesheet">
  <title>Printable Tweets Ready for Book</title>
 </head>
 <body>
<?= file_get_contents("image/flourish.svg"); ?>
  <svg class="Flourish" viewBox="0 0 1135.98 1167.16">
   <use href="#Flourish"/>
  </svg>
  <svg class="Flourish" viewBox="0 0 1135.98 1167.16">
   <use href="#Flourish"/>
  </svg>

<?php
$dir = "2019/";
foreach (glob($dir . "*.jpg") as $file) {
	echo "<h1>", preg_replace('/^\d\s/', "", pathinfo($file)["filename"]), "</h1>\n";
	echo "<p><img src=\"$file\"></p>\n";
}
?>

<!--  <article>
   <h1>iBook</h1>
   <nav>by</nav>
   <h2>Person</h2>
  </article>-->

 </body>
</html>
