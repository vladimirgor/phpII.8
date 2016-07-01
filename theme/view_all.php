USER :
    <?=$login?>
 <br>
<? if ( isset($_GET['access']) ) : ?>
    <h3>Access to  <?=$_GET['access']?>
        action for - <?=$login?> - isn't allowed!</h3>
<? endif ?>

<a href="/index.php?c=article&a=Add">Add</a>

<ul>
    <?php
    foreach ( $articles as $article):?>

    <li><?=$article['id_article']?>.<b><?=$article['title']?></b>
    	<br><b>Intro:</b> <?=M_Data::articles_intro($article,100)?>
    	<br><b>Views:</b> <?=$article['views']?>
        <br><b>Comments:</b><br><span class = "comment">
            <?php if ( !$article['comment'] == '') :?><?=$article['comment']?>
            <?php else :?>There are no comments yet.<?php endif;?>
        </span>

            <br>
            <a href="/index.php?c=article&a=Look&id=<?=$article['id_article']?>">Look</a> |
            <a href="/index.php?c=article&a=Edit&id=<?=$article['id_article']?>">Edit</a> |
            <a href="/index.php?c=article&a=Delete&id=<?=$article['id_article']?>">Delete</a> |
            <a href="/index.php?c=article&a=Comment&id=<?=$article['id_article']?>">Comment</a>

    </li>

<?php endforeach;?>
</ul>