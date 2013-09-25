<?php theme_include('header'); ?>

		<div class="container well well-small">
			<div class="post">
				<h1><?php echo article_title(); ?></h1>
				<span class="post-date"> <span class="entypo-feather"></span> Written by <?php echo article_author('real_name'); ?> <span class="entypo-hourglass"></span> Published <time datetime="<?php echo date(DATE_W3C, article_time()); ?>"><?php echo relative_time(article_time()); ?></time></span>
				<?php echo article_markdown(); ?>
				<hr>
				<small>This article is my <?php echo numeral(article_id()); ?> oldest. It is <?php echo count_words(article_html()); ?> words long, and it’s got <?php echo total_comments() . pluralise(total_comments(), ' comment'); ?> for now. <?php echo article_custom_field('attribution'); ?></small>
			</div>
		</div>
		
		<?php if(comments_open()): ?>
		<?php if(has_comments()): ?>
		 <div class="container">
		 <?php $i = 0; while(comments()): $i++; ?>
			<dl class="dl-horizontal">
				<dt><?php echo comment_name(); ?> &middot; <small><time><?php echo relative_time(comment_time()); ?></time></small></dt>
				<dd><?php echo comment_text(); ?></dd>
			</dl>
		 <?php endwhile; ?>
		 </div>
		<?php endif; ?>

	<div class="compose-comment">
		<div class="span12">
			<h4><?php echo comment_form_notifications(); ?></h4>
			<form class="form-horizontal" role="form" id="comment" method="post" action="<?php echo comment_form_url(); ?>#comment">
			<div class="form-group">
				<label class="col-lg-2 control-label">Name/Nickname:</label>
					 <div class="col-lg-10">
						<?php echo comment_form_input_name('placeholder="Your name"  class="form-control input-lg'); ?>
			         </div>
             </div>	
			<div class="form-group">
				<label class="col-lg-2 control-label">E-Mail Address:</label>
					<div class="col-lg-10">
						<?php echo comment_form_input_email('placeholder="Your e-mail address (won’t be published)"  class="form-control input-lg'); ?>
					</div>
			</div>		
			<div class="form-group">
				<label class="col-lg-2 control-label">Comment:</label>
					<div class="col-lg-10">
					<?php echo comment_form_input_text('placeholder="Your comment" class="form-control input-lg" rows="3"'); ?>
					<br>
					<?php echo comment_form_button(); ?>
					</div>		
			</div>	
			</form>			
		</div>
	</div>
	
		<?php endif; ?>
<?php theme_include('footer'); ?>