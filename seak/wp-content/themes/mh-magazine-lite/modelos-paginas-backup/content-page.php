<?php /* Default template for displaying page content */ ?>
<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title('<h1 class="entry-title page-title" style="display:none">', '</h1>'); ?> <!-- mudança temporaria aqui -->
	</header>
	<div class="entry-content mh-clearfix">
		<?php the_content();  ?>
	</div>
</article>
