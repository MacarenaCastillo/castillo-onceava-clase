<head>
  <style>
  img{max-height: 600px; display: block;
    margin: auto; padding-bottom: 2em}
  </style>
</head>
<body>
<?php include('header.php');?>

<?php
$inspiracion = array_map('str_getcsv', file('data/blog.csv'));
array_walk($inspiracion, function(&$a) use ($inspiracion) {$a = array_combine($inspiracion[0], $a);});
array_shift($inspiracion);
$all = count($inspiracion);
$id = $_GET['url'];
?>
<div class="row">
<div class="col-sm-12">
<h3><?php print($inspiracion[$id]["title"])?></h3>
<h5>Categoría: <a href="archive.php?url=<?php print($inspiracion[$id]["category"])?>"><?php print($inspiracion[$id]["category"])?></a></h5>
<img src="<?php print($inspiracion[$id]["image"])?>" class="img-responsive">
<p><?php print($inspiracion[$id]["description"])?></p>
 <p><a href="post.php?url=<?php print($inspiracion[$id]["link"]);?>">Link</a></p>
</div><!--/col-sm-4-->
</div><!--/row-->

<?php include('footer.php');?>
</body>
