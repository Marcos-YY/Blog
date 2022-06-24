<?php 
include_once("templates/header.php");
?>
<main>

<div id="titulo">
	<h1>Copa do mundo 2022</h1>
	<p>A maior copa de todas!</p>
</div>

<div id="index-conteiner">
	<?php foreach ($posts as $post): ?>
		<div class="imagens-index">
			<img src="img/<?= $post['img']?>" alt="<?=$post['title']?>"> <!--imagens-->
				<h1 class="titulo-imagens">
					<a href= "post.php?id= <?=$post['id']?>"> <?=$post['title']?> </a> <!--link-->
				</h1>
		
			<p class="descricao-imagens"><?=$post['description']?></p> <!--descrição-->			
			
			<div class="tags-imagens"> 
				<?php foreach ($post['tags'] as $tags): ?>
					<a href="#"> <?=$tags ?> </a> 
				<?php endforeach ?>
			</div>
		
		</div>
	<?php endforeach ?>
</div>
</main>
<?php 
include_once("templates/rodape.php");
?>