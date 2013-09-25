<?php theme_include('header'); ?>

<?php if(has_posts()): ?>
	<?php posts();  ?>
		<div class="container well well-small">
			<div class="post">
				<h1><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h1>
				<span class="post-date"> <span class="entypo-feather"></span> Written by <?php echo article_author('real_name'); ?> <span class="entypo-hourglass"></span> Published <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time></span>
				<?php echo article_markdown(); ?>
			</div>
 
	<?php $i = 0; while(posts()): $i++; ?>
			 <hr>
		 
			<div class="post">
				<h1><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a></h1>
				<span class="post-date"> <span class="entypo-feather"></span> Written by <?php echo article_author('real_name'); ?> <span class="entypo-hourglass"></span> Published <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time></span>
				<?php echo article_markdown(); ?>
			</div>					
	<?php endwhile; ?>
	 </div>
	 
		<?php if(has_pagination()): ?>
			<div class="container">
				<div class="span12">
				<?php if(posts_prev()): ?>
				<ul class="pager">
					<li class="previous" class="btn btn-default pull-left"><?php echo posts_prev();?></li> 
				</ul>	
				<?php endif; ?>	
				<?php if(posts_next()): ?>
				<ul class="pager">				
					<li class="next" class="btn btn-default pull-right"><?php echo posts_next(); ?></li> 
			   	</ul>
				<?php endif; ?>
				</div> 
			</div>	 
		<?php endif; ?>
		
	<?php else: ?>
			<h1>Looks like you have some writing to do!</h1>
	<?php endif; ?>
		
<?php theme_include('footer'); ?>