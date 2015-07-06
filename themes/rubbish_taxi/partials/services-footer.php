 <?php
$args = array(
    'post_type' => 'service',
    'posts_per_page' => 7,
    'status' => 'publish'
);

$posts = get_posts($args);
//var_dump($posts);
?>
<h4>Rubbish Removal Services</h4>
<ul>
    <?php foreach ($posts as $post) : ?>
        <li>
            <a href="<?php echo get_permalink($post->ID) ?>"><?php echo $post->post_title; ?></a>
        </li>
    <?php endforeach ?>
</ul>