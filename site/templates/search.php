<?php $query = get('q');
		$articles = $pages
						->find('blog')
                		->search($query, array('words' => true))
						->visible()
						->flip();
?>
<?php snippet('header') ?>

<nav class="menu" role="navigation">
	<div class="wrapper cf">
		
		<ul class="left cf">
		    <li class="dash"><a href="<?php echo url() ?>">Ayham Ghraowi</a></li>
		    <li class="current">
<!--
				<?php $countItems = $articles->countItems();
				if($articles) {
					if($countItems == 0) {
						echo 'No results for ';
					}
					echo $query;
				} ?>
-->
								
				<?php if($articles) {echo $query;} ?>								    
		    </li>
		</ul>
  	
		<ul class="right spacer">
			<?php foreach($pages->visible() as $item): ?>
				<li class="spacer"><a<?php ecco($item->isOpen(), ' class="active"') ?> href="<?php echo $item->url() ?>"><?php echo $item->title() ?></a></li>
			<?php endforeach ?>
			
		    <li>  
		    	<form class="search" role="search" action="<?php echo url('search') ?>">
				<label class="vh" for="search">Search</label>
					<input type="search" class="searchword" name="q" id="search" placeholder="Search..."/>
				</form>
			</li>	    	    
		</ul>
	</div>
</nav>

<main role="main">
<div class="wrapper cf"> 

<?php if($articles->count() != 0): ?>
<?php foreach($articles as $article): ?>
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
<?php endforeach ?>
<?php endif ?>
      



</div> <!-- wrapper -->
</main>
<?php snippet('footer') ?>