<?php

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php 
				$pedidosArgs = array( 'post_type' => 'pedidos', 'posts_per_page' => 4);                   
                        
      			$pedidosLoop = new WP_Query( $pedidosArgs ); ?>
      			<table border="1" style="width:100%">
      			<tr>
    				<th>Pedido</th>
    				<th>Cliente</th>
    				<th>Produto</th>
  				</tr>	                      
      			<?php while ( $pedidosLoop->have_posts() ) : $pedidosLoop->the_post(); ?>
      			<tr>
      				<td><?php the_title(); ?></td>
      				<td><?php echo get_post_meta($post->ID, 'pedido_cliente', true); ?></td>
      				<td><?php echo get_post_meta($post->ID, 'pedido_produto', true); ?></td>
      			</tr>
				<?php endwhile; ?>
				</table>                 

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>