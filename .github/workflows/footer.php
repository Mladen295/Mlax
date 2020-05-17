<footer class="blog-footer">
<table style="width:80%">
    <tr>    		
        <th>
            <h4>Archives</h4>
				<ol class="list-styled">
					<?php wp_get_archives( 'type=monthly' ); ?>
				</ol>
        </th>
        <th>
            <h4>Networks</h4>
            <ol class="list-styled">
             <li><a href="<?php echo get_option('github'); ?>">GitHub</a></li>
			 <li><a href="<?php echo get_option('twitter'); ?>">Twitter</a></li>
            </ol>
        </th>
	</tr>		 
    <tr>
	    <td>
            <p style="font-size:12px">Copyright @ Mladen Renovica, 2019.</p>
            <p style="font-size:12px"><a href="#">Back to top</a></p>
	    </td>
	</tr>
</table>
</footer>
    
	<?php wp_footer(); ?>
  </body>
</html>