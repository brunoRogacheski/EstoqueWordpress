<?php

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php 
				$clientesArgs = array( 'post_type' => 'clientes', 'posts_per_page' => 4);                   
                        
      			$clientesLoop = new WP_Query( $clientesArgs ); ?>
      			<table border="1" style="width:100%">
      			<tr>
    				<th>Nome</th>
    				<th>Email</th>
    				<th>Telefone</th>
  				</tr>	                      
      			<?php while ( $clientesLoop->have_posts() ) : $clientesLoop->the_post(); ?>
      			<tr>
      				<td><?php the_title(); ?></td>
      				<td><?php echo get_post_meta($post->ID, 'cliente_email', true); ?></td>
      				<td><?php echo get_post_meta($post->ID, 'cliente_telefone', true); ?></td>
      			</tr>
				<?php endwhile; ?>
				</table>                 

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>