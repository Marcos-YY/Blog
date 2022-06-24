<?php
include "templates/header.php";

if (isset($_GET['id'])) {
	$post_ID = $_GET['id'];
	$currentPost;

	foreach ($posts as $post) {
		if ($post['id'] == $post_ID) {
			$currentPost = $post;
			}
		}
	}
?>
<main id="posts-conteiner">
	<div class="conteudo-post">
			<h1 id="titulo-imagens"><?= $currentPost['title'] ?></h1>
			<p id="descricao-imagens"><?= $currentPost['description'] ?> </p>
		<div class="imagens">
			<img src="img/<?= $currentPost['img']?>" alt="<?= $currentPost['title'] ?>">
		</div>
	
			<p class="texto-post">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec elit at nulla elementum luctus. Nunc malesuada diam enim, quis tempor nibh ornare vel. Pellentesque enim odio, vestibulum a nulla eget, egestas tincidunt ex. Nunc sed finibus risus, id ultrices nisl. Donec gravida massa a varius interdum. Aenean tempor sed justo sit amet sollicitudin. Nullam vel molestie odio, a dignissim elit. Aliquam scelerisque malesuada metus, id elementum nibh sagittis at. Sed non euismod tellus sabar.
<br>
				Duis quis mollis augue. Curabitur quis placerat mauris. Sed lobortis tortor nec magna porta pretium. Aliquam bibendum feugiat sapien at feugiat. Curabitur ut mi non odio sodales egestas ut nec quam. Curabitur viverra lorem vel accumsan congue. Pellentesque finibus hendrerit sollicitudin.
<br>
				Phasellus eu nibh id sapien euismod molestie. Ut efficitur dignissim lorem, vel egestas eros tristique in. Donec lacinia facilisis nisl sed elementum. Donec a viverra erat, non gravida ligula. Nunc malesuada urna ligula, a ultricies magna imperdiet nec. Integer dictum odio a viverra feugiat. Integer orci nunc, viverra in tellus sed, porta eleifend sapien. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In nec tincidunt tortor. Praesent et nisl eleifend, tristique ligula vel, ornare urna. Integer accumsan ipsum urna, eget vehicula neque venenatis quis.
<br>
			</p>
			<p class="texto-post">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec elit at nulla elementum luctus. Nunc malesuada diam enim, quis tempor nibh ornare vel. Pellentesque enim odio, vestibulum a nulla eget, egestas tincidunt ex. Nunc sed finibus risus, id ultrices nisl. Donec gravida massa a varius interdum. Aenean tempor sed justo sit amet sollicitudin. Nullam vel molestie odio, a dignissim elit. Aliquam scelerisque malesuada metus, id elementum nibh sagittis at. Sed non euismod tellus sabar.
<br>
				Duis quis mollis augue. Curabitur quis placerat mauris. Sed lobortis tortor nec magna porta pretium. Aliquam bibendum feugiat sapien at feugiat. Curabitur ut mi non odio sodales egestas ut nec quam. Curabitur viverra lorem vel accumsan congue. Pellentesque finibus hendrerit sollicitudin.
<br>
				Phasellus eu nibh id sapien euismod molestie. Ut efficitur dignissim lorem, vel egestas eros tristique in. Donec lacinia facilisis nisl sed elementum. Donec a viverra erat, non gravida ligula. Nunc malesuada urna ligula, a ultricies magna imperdiet nec. Integer dictum odio a viverra feugiat. Integer orci nunc, viverra in tellus sed, porta eleifend sapien. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In nec tincidunt tortor. Praesent et nisl eleifend, tristique ligula vel, ornare urna. Integer accumsan ipsum urna, eget vehicula neque venenatis quis.
<br>
			</p>
		</div>
<aside id="link-navegacao">
	<h3 id="titulo-tag">TAGS</h3>
		<ul id="lista-tags">
			<?php foreach ($currentPost['tags'] as $tag): ?>
				<li> <a href="#"> <?=$tag ?> </a> </li>
			<?php endforeach ?>
		</ul>
	<h3 id="titulo-categoria">Categorias</h3>
		<ul id="lista-categoria">
			<?php foreach ($categories as $categoria): ?>
				<li> <a href="#"> <?=$categoria ?> </a> </li>
			<?php endforeach ?>
		</ul>
</aside>
</main>
<?php
include "templates/rodape.php";
?>