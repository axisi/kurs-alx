<?php include "header.php";?>
<div class="row">
	<div class="col-xs-12">
		<p><pre><?php 
				echo $to[0][1];
			?>
		</pre></p>
	</div>
	<div class="col-xs-6"><pre><?=  '
	$i = 1;
	while ( $i <= 100) {
		if ($i % 5 == 0 && $i % 3 == 0 ){
			echo "pingpong";
		}elseif ($i % 5 == 0) {
			echo "pong";
		}elseif ($i % 3 == 0) {
			echo "ping";
		}else{
			echo $i ;
		}
		$i++;
	}
	'?></pre></div>
	<div class="col-xs-6"><pre><?php 
			$i = 1;
			while ( $i <= 100) {
				if ($i % 5 == 0 && $i % 3 == 0 ){
					echo "pingpong\n";
				}elseif ($i % 5 == 0) {
					echo "pong\n";
				}elseif ($i % 3 == 0) {
					echo "ping\n";
				}else{
					echo $i ."\n" ;
				}
				$i++;
			}
	?></pre></div>
</div>
<?php include "footer.php";?>

