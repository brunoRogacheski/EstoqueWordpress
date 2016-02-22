<?php

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php 
				$produtosArgs = array( 'post_type' => 'produtos', 'posts_per_page' => 4);                   
                        
      			$produtosLoop = new WP_Query( $produtosArgs ); ?>
      			<table border="1" style="width:100%">
      			<tr>
    				<th>Nome</th>
    				<th>Descricao</th>
    				<th>Preco</th>
  				</tr>	                      
      			<?php while ( $produtosLoop->have_posts() ) : $produtosLoop->the_post(); ?>
      			<tr>
      				<td><?php the_title(); ?></td>
      				<td><?php echo get_post_meta($post->ID, 'produto_descricao', true); ?></td>
      				<td><?php echo get_post_meta($post->ID, 'produto_preco', true); ?></td>
      			</tr>
				<?php endwhile; ?>
				</table>                 

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
