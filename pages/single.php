<?php
$article = $db->prepare('select * from Article where id_article = ?', [$_GET['id']], 'App\Table\Article', true);

?>

<h1><?= $article->title; ?></h1>
<p><?= $article->content; ?></p>
