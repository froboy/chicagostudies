<?php 
echo "<div class=\"clear\"></div>";
echo "<div class=\"grid-11\">";
?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      <h1 class="title" id="page-title"><?php print $title; ?></h1>
    <?php endif; ?>
    <?php print render($title_suffix); ?>      
<?php 
echo "Date of this article ".$date;

/*
echo "<pre>";
print_r($content);
echo "</pre>";
*/

echo render($content);

?>
<p><i><?php echo $name ?></i></p>
</div>
<div class="grid-5">
	<p>Photos, and such</p>
    <?php print render($regions["sidebar_second"]); ?>
</div>