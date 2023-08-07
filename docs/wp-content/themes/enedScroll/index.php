<?php get_header(); ?>

<header role="main">
	<div class="holder content">

		<div class="middle">
			<div class="middle-item">
				<div class="flex">
					<h1 class="t-color large">enedScroll</h1>
					<div class="badge">docs</div>
				</div>
				<h4>Introduce with enedScroll</h4>
			</div>
		</div>

	</div>
	
	<div class="ghost-text">
		<h1>Introduction</h1>
	</div>

</header>

<?php wp_nav_menu( array(
	'theme_location'=>'documentation_nav',
	'walker' => new Documentation_Walker(),
	'menu_class' => 'tabs'
)); ?>



<?php get_footer(); ?>