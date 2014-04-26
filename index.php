<!DOCTYPE html>
<html lang='en'>
	
	<head>
		<meta charset='utf-8'>
		<link href='assets/css/style.css' rel='stylesheet'>
		<link href='assets/css/fullPage.css' rel='stylesheet'>
		
		<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
		<script src='assets/js/jquery.fullPage.min.js' type='text/javascript'></script>

		
		<title>3D-Buttons By Jeroen Sormani</title>
		
	</head>
	
	<body>
	
		<div class='container'>

			<?php
			$colors = array(
				'red' 			=> 'Red',
				'blue' 			=> 'Blue',
				'darkblue' 		=> 'Dark Blue',
				'turqouise' 	=> 'Turqouise',
				'green' 		=> 'Green',
				'yellow' 		=> 'Yellow',
				'pink' 			=> 'Pink',
				'purple' 		=> 'Purple',
				'orange' 		=> 'Orange',
				'black' 		=> 'Black',
				'brown' 		=> 'Brown',
				'white' 		=> 'White',
				'gray' 			=> 'Gray',
			);

			$button_sizes = array(
				'xs',
				'sm',
				'md',
				'lg',
				'xl',
				'xxl',
				'hu',
			);
			
			// Create menu
			?><ul id='colorMenu'><?php
			foreach ( $colors as $key => $value ) :
				
				?>
			    <li data-menuanchor='<?php echo $key; ?>' class='<?php echo $key; ?>'><a href='#<?php echo $key; ?>'></a></li>
				<?php
				
			endforeach;
			?></ul>
			
			<div class='row section'>
			
				<h1 class='header'>3D-Buttons</h1>
				<p>A collection of 3D buttons made with CSS. Easy to use, configure and edit to your desire.</p><p> Add classes to select color and size of your button.</p>
				<p><a class='btn btn-hu btn-blue'>Download on GitHub</a></p>
			
			</div>
			
			<?php
			foreach ( $colors as $key => $value ) :
				
				?>
				<div class='row section <?php echo $key; ?>' data-anchor='<?php echo $key; ?>'>
					
					<h2><?php echo $value; ?></h2>
					
					<?php
					foreach ( $button_sizes as $size ) :
						?>
						<a class='btn btn-<?php echo $size; ?> btn-<?php echo $key; ?>'>My Button</a>
						<?php
					endforeach;
					?>
									
				</div><!-- .row.section -->
				<?php
				
			endforeach;
			
			?>
		
		</div><!-- .container -->

		
	</body>
	
	<?php 
	foreach( $colors as $key => $color )
		$anchors .= "'" . $key . "', ";
	?>
		<script type='text/javascript'>
		$( document ).ready( function() {
			$(document).ready(function() {
		    	$.fn.fullpage( {
			    	easing: 'linear',
			    	scrollingSpeed: 350,
			    	anchors: [ 'home', <?php echo $anchors; ?>  ],
			    	menu: '#colorMenu'
		    	});
			});
		});
		</script>

</html>