        
         <div class="sidebar">
	      <div>
            <h4>About</h4>
				<p><?php the_author_meta( 'description' ); ?> </p>
          </div>
          <div>
            <h4>Archives</h4>
				<ol class="list-unstyled">
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ol>
          </div>
          <div>
            <h4>Networks</h4>
            <ol class="list-unstyled">
             <li><a href="<?php echo get_option('github'); ?>">GitHub</a></li>
			 <li><a href="<?php echo get_option('twitter'); ?>">Twitter</a></li>
            </ol>
         </div>  
        </div> <!-- /.blog-sidebar -->