<?php
					$argss = array( 'numberposts' => '1' );
					$recent_posts = wp_get_recent_posts( $argss );
					foreach( $recent_posts as $recent ){
						echo '<h3>' .   $recent["post_title"].'</h3> ';
						echo '<p>' .   $recent["post_content"].'</p> ';
					}
				?>