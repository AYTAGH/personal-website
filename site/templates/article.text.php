<?php snippet('header') ?>
<?php snippet('menu') ?>

<main role="main">
<div class="wrapper cf"> 
		<article>
			<div class="grid">
				
				<div class="col-1-6">
					<time datetime="<?php echo $page->date('c') ?>"><?php echo $page->date('Y'); ?></time>
				</div>
				
				<div class="col-2-3">
					<?php if($page->tags() != ''): ?>
					<ul class="tags content">
						<?php foreach(str::split($page->tags()) as $tag): ?>
						<li><a href="<?php echo url('tag:' . urlencode($tag)) ?>"><?php echo $tag; ?></a></li>
						<?php endforeach ?>
					</ul>
					<?php endif ?>
					
					<div class="caption">
					<?php echo kirbytext($page->text()) ?>
					</div>
					
					<ul class="spacer">
						<li>Share</li>
						<li>
							<a href="mailto:?subject=<?php echo html($page->title()) ?>&amp;body=<?php echo html($page->url()) ?>" target="_blank" title="Email this page">Email</a>
						</li>
						<li>
							<a href="https://twitter.com/intent/tweet?source=webclient&text=<?php echo rawurlencode($page->title()); ?>%20<?php echo rawurlencode($site->title()) ?>%20<?php echo rawurlencode ($page->url()); ?>%20<?php echo ('via @your_twitter_account')?>" target="blank" title="Tweet this page">Twitter</a>
						</li>
						<li><a href="http://www.facebook.com/sharer.php?u=<?php echo html($page->url()) ?>" target="_blank" title="Facebook this page">Facebook</a></li>
					</ul>
				</div>
				
			</div>			
		</article>	
</div>
</main>

<?php snippet('footer') ?>