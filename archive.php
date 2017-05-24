<?php include('header.php');?>

<div class="row auto-clear">
<?php
$inspiracion = array_map('str_getcsv', file('data/blog.csv'));
array_walk($inspiracion, function(&$a) use ($inspiracion) {$a = array_combine($inspiracion[0], $a);});
array_shift($inspiracion);
$cat = $_GET['url'];
$all = count($inspiracion);
for($n=0; $n < $all; $n++){?>
  <?php if(($inspiracion[$n]["category"])==$cat){?>
  <div class="col-xs-6 col-sm-4 col-md-4 col-lg-3">
  <article>
  <figure>
    <img src="<?php print($inspiracion[$n]["image"])?>">
    <figcaption>Categoría: <a href="archive.php?url=<?php print($inspiracion[$n]["category"])?>"><?php print($inspiracion[$n]["category"])?></a></figcaption>
  <figure>
  <h3><a href="post.php?url=<?php print($n);?>"><?php print($inspiracion[$n]["title"])?></a></h3>
  <p><?php print($inspiracion[$n]["excrept"])?>. <a href="post.php?url=<?php print($inspiracion[$n])?>">Más detalles</a></p>
  </article>
  </div><!--/col-sm-4-->
  <?php };?>
<?php };?>
</div><!--/row auto-clear-->



<?php include('footer.php')?>
