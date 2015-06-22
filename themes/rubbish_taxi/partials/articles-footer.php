<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 7,
    'status' => 'publish'
);

$posts = get_posts($args);
//var_dump($posts);
?>
<h4>Rubbish Removal Articles</h4>
<ul>
    <?php foreach ($posts as $post) : ?>
    <li>
        <a><?php echo $post->post_title; ?></a>
    </li>
    <?php endforeach ?>
</ul>