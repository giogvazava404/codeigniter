  <!-- Content Row -->
        <div class="row">
			<?php
			foreach($service as $serv)
			{
			?>
				<div class="col-md-4">
					<h2><?php echo $serv->{"title"}; ?></h2>
					<p><?php echo $serv->{"short_text"}; ?></p>
					<a class="btn btn-default" href="#">More Info</a>
				</div>
          <?php
		  }
		  ?>
            <!-- /.col-md-4 -->
        </div>
        <!-- /.row -->