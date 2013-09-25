<?php theme_include('header'); ?>
 
	<div class="container well well-small">
            <h2>You searched for &ldquo;<?php echo search_term(); ?>&rdquo;.</h2>
			<hr>
    <?php if(has_search_results()): ?>
		<?php while(search_results()): ?>
			<h3>
				<a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><?php echo article_title(); ?></a>
			</h3>
			<footer>
				<small><span class="icon user"></span> <?php echo article_author('real_name'); ?>  <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"> <span class="icon time"></span> <?php echo relative_time(article_time()); ?></time></small>
			</footer>
		    <hr>
		<?php endwhile; ?>
				
	<?php if(has_pagination()): ?>
		<div class="container">
			<div class="span12">
				<?php if(search_prev()): ?>
					<ul class="pager">
						<li class="previous" class="btn btn-default pull-left"><?php echo search_prev(); ?></li> 
					</ul>	
				<?php endif; ?>	
				<?php if(search_next()): ?>
					<ul class="pager">				
						<li class="next" class="btn btn-default pull-right"><?php echo search_next(); ?></li> 
					</ul>
				<?php endif; ?>
			</div> 
		</div>	 
	<?php endif; ?>
	
    <?php else: ?>
        <p>Unfortunately, there's no results for &ldquo;<?php echo search_term(); ?>&rdquo;. Did you spell everything correctly?</p>
    <?php endif; ?>
    </div>
		
<?php theme_include('footer'); ?>