<?php
use App\Table\Article;
use App\App;
use App\Table\Category;

$article = Article::find($_GET['id']);
if ($article == false) {
    App::notFound();
}
App::setTitle($article->title);
?>

<h1><?= $article->title; ?></h1>
<p><em><?= $article->category ?></em></p>
<p><?= $article->content; ?></p>
