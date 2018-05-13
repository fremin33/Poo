<?php $articles = $db->query('select * from Article', 'App\Table\Article'); ?>

<ul>
    <?php foreach ($articles as $article) : ?>
        <li>
            <a href="<?= $article->url; ?>"><?= $article->title ?></a>
            <?= $article->excerpt; ?>
        </li>
    <?php endforeach; ?>
</ul>

<h1>Home page</h1>
<p><a href="?p=single">Single page</a></p>