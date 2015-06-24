<?php
$args = array(
    'post_type' => 'area',
    'posts_per_page' => 7,
    'status' => 'publish'
);

$posts = get_posts($args);
//var_dump($posts);
?>
<h4>Rubbish Removal Areas</h4>
<ul>
    <?php foreach ($posts as $post) : ?>
        <li>
            <a href="<?php echo get_permalink(get_page_by_title('Areas')) ?>"><?php echo $post->post_title; ?></a>
        </li>
    <?php endforeach ?>
</ul>