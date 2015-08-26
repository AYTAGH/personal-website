<?php snippet('header') ?>
<?php snippet('menu') ?>

<main role="main">
<div class="wrapper cf"> 
 
 
 
 <!-- These are tag results -->
    <?php if(param('tag')): // show tag results ?>
    <?php $tag = urldecode(param('tag')); ?>
    <?php $articles = $pages->find('blog')
                            ->children()
                            ->visible()
                            ->filterBy('tags', $tag, ',')
                            ->flip();
    ?>
	
<?php foreach($articles as $article): // article overview ?>
<?php if($article->template() == 'article.text'): // text posts ?>
		<article>
			<div class="grid">
				<div class="col-5-12 cf">
					<?php $image = $article->image();?>
					<a class="tooltip fancybox" href="<?php echo $image->files()->last()->url() ?>">
						<?php echo html($article->title()) ?>
						<span><img src="<?php echo $image->files()->first()->url() ?>" alt="" width="auto" height="100px;"></span>
					</a>
					<img class="vh-0 lazy" src="<?php echo $image->files()->last()->url() ?>" alt="" width="100%" height="auto">
					<?php if($article->text() != ''): ?>
						<a class="button left" href="<?php echo $article->url() ?>">Info</a>
					<?php endif ?>
				</div>		
				<div class="col-1-2">						
					<?php if($article->tags() != ''): ?>
					<ul class="tags cf">
						<?php foreach(str::split($article->tags()) as $tag): ?>
						<li><a href="<?php echo url('tag:' . urlencode($tag)) ?>"><?php echo $tag; ?></a></li>
						<?php endforeach ?>
					</ul>
					<?php endif ?>
				</div>					
				<div class="col-1-12 cf">
					<time class="right" datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('Y'); ?></time>
				</div>
			</div>
		</article>
<?php endif ?>
    
<?php if($article->template() == 'article.video'): // Video posts ?>
		<article>
			<div class="grid">
				<div class="col-5-12 cf">
					<?php $image = $article->image();?>
					<a class="tooltip fancybox-media" href="<?php echo ($article->embed()); ?>">
						<?php echo html($article->title()) ?>
						<span><img src="<?php echo $image->files()->first()->url() ?>" alt="" width="auto" height="100px;"></span>
					</a>
					<div class="vh-0"><?php echo kirbytext($article->embed()); ?></div>				
					
					<?php if($article->text() != ''): ?>
						<a class="button left" href="<?php echo $article->url() ?>">Info</a>
					<?php endif ?>
				</div>
				<div class="col-1-2">						
					<?php if($article->tags() != ''): ?>
					<ul class="tags cf">
						<?php foreach(str::split($article->tags()) as $tag): ?>
						<li><a href="<?php echo url('tag:' . urlencode($tag)) ?>"><?php echo $tag; ?></a></li>
						<?php endforeach ?>
					</ul>
					<?php endif ?>
				</div>					
				<div class="col-1-12 cf">
					<time class="right" datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('Y'); ?></time>
				</div>
			</div>
		</article>
<?php endif ?> 
<?php endforeach // article overview ends ?>

<!-- END tag results -->
<?php else: // show latest articles ?>
    
    
<!-- ––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––––– -->
    
    
<?php $articles = $pages->find('blog')
                        ->children()
                        ->visible()
                        ->flip();
?>
<?php foreach($articles as $article): // article overview ?>
<?php if($article->template() == 'article.text'): // text posts ?>
		<article>
			<div class="grid">
				<div class="col-5-12 cf">
					<?php $image = $article->image();?>
					<a class="tooltip fancybox" href="<?php echo $image->files()->last()->url() ?>">
						<?php echo html($article->title()) ?>
						<span><img src="<?php echo $image->files()->first()->url() ?>" alt="" width="auto" height="100px;"></span>
					</a>
					<img class="vh-0 lazy" src="<?php echo $image->files()->last()->url() ?>" alt="Ayham Ghraowi" width="100%" height="auto">
					<?php if($article->text() != ''): ?>
						<a class="button left" href="<?php echo $article->url() ?>">Info</a>
					<?php endif ?>
				</div>		
				<div class="col-1-2">						
					<?php if($article->tags() != ''): ?>
					<ul class="tags cf">
						<?php foreach(str::split($article->tags()) as $tag): ?>
						<li><a href="<?php echo url('tag:' . urlencode($tag)) ?>"><?php echo $tag; ?></a></li>
						<?php endforeach ?>
					</ul>
					<?php endif ?>
				</div>					
				<div class="col-1-12 cf">
					<time class="right" datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('Y'); ?></time>
				</div>
			</div>
		</article>
<?php endif ?>
    
<?php if($article->template() == 'article.video'): // Video posts ?>
		<article>
			<div class="grid">
				<div class="col-5-12 cf">
					<?php $image = $article->image();?>
					<a class="tooltip fancybox-media" href="<?php echo ($article->embed()); ?>">
						<?php echo html($article->title()) ?>
						<span><img src="<?php echo $image->files()->first()->url() ?>" alt="" width="auto" height="100px;"></span>
					</a>
					<div class="vh-0"><?php echo kirbytext($article->embed()); ?></div>				
					
					<?php if($article->text() != ''): ?>
						<a class="button left" href="<?php echo $article->url() ?>">Info</a>
					<?php endif ?>
				</div>
				<div class="col-1-2">						
					<?php if($article->tags() != ''): ?>
					<ul class="tags cf">
						<?php foreach(str::split($article->tags()) as $tag): ?>
						<li><a href="<?php echo url('tag:' . urlencode($tag)) ?>"><?php echo $tag; ?></a></li>
						<?php endforeach ?>
					</ul>
					<?php endif ?>
				</div>					
				<div class="col-1-12 cf">
					<time class="right" datetime="<?php echo $article->date('c') ?>"><?php echo $article->date('Y'); ?></time>
				</div>
			</div>
		</article>
<?php endif ?> 
<?php endforeach // article overview ends ?>

	
<?php endif ?>
</div> <!-- wrapper -->
</main>

<?php snippet('footer') ?>