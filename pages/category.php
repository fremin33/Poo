<?php
use App\App;
use App\Table\Article;
use App\Table\Category;

$category = Category::find($_GET['id']);
$articles = Article::getLastByCategory($_GET['id']);

if ($category == false) {
    App::notFound();
}
?>

<div class="row">
    <div class="col-sm-8">
    <h1><?=$category->title?></h1>
        <?php foreach ($articles as $article): ?>
            <h2><a href="<?=$article->url;?>"><?=$article->title?></a></h2>
            <p><em><?=$article->category?> </em></p>
            <p><?=$article->excerpt?></p>
        <?php endforeach;?>
    </div>
    <div class="col-sm-4">
        <ul>
            <?php foreach (Category::all() as $category): ?>
                <li><a href="<?=$category->url?>"><?=$category->title?></a></li>
            <?php endforeach;?>
        </ul>
    </div>
</div>