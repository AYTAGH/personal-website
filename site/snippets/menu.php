<nav class="menu" role="navigation">
	<div class="wrapper cf">
		
		<ul class="left cf">
		    <li class="dash"><a href="<?php echo url() ?>">Ayham Ghraowi</a></li>
		    <li class="current">
 		    	<?php if(param('tag')): ?>
 					<?php $tag = urldecode(param('tag')); ?>
 					<?php echo $tag; ?>
		    	<?php else: ?>
		    		<?php echo html($page->title()) ?>
		    	<?php endif ?>
		    </li>
		</ul>
  	
		<ul class="right spacer">		
			<?php foreach($pages->visible() as $item): ?>
			<li><a<?php ecco($item->isOpen(), ' class="active"') ?> href="<?php echo $item->url() ?>"><?php echo $item->title() ?></a></li>
			<?php endforeach ?>
		    <li>  
		    	<form class="search" role="search" action="<?php echo url('search') ?>">
				<label class="vh" for="search">Search</label>
					<input type="search" class="searchword" name="q" id="search" placeholder="Search..." autocomplete="off"/>
				</form>
			</li>
		</ul>
		
	</div>
</nav>
