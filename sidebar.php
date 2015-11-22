<aside class="sidebar">
<?php
				if( have_rows('sidebar_fotos') ):

					// loop through the rows of data
					while ( have_rows('sidebar_fotos') ) : the_row();

						// display a sub field value
					
						echo '<img src="' . get_sub_field('sidebar_foto') . '">';
						echo '<br>';
					endwhile;
				endif;
			?>
</aside>