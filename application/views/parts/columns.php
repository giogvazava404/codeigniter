<?php
$url = explode("/",$_SERVER['REQUEST_URI']);

if(!empty($url[4]))
{
?>
<div class="row">
	<div class="col-md-4" id="colstrech">
		<h2><?php echo $title; ?></h2>
		<p><?php echo $long_text; ?></p>
	</div>
</div>
<?php
}
else
{
?>
<!-- Content Row -->
<div class="row">
	<?php
	foreach($service as $serv)
	{
	?>
		<div class="col-md-4">
			<h2><?php echo $serv->{"title"}; ?></h2>
			<p><?php echo $serv->{"short_text"}; ?></p>
			<a class="btn btn-default" href="services/views/<?php echo $serv->{"id"}; ?>">სრულად</a>
		</div>
  <?php
  }
  ?>
	<!-- /.col-md-4 -->
</div>
<!-- /.row -->
<?php
}
?>