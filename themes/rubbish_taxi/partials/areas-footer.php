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
            <a href="<?php echo get_permalink($post->ID) ?>"><?php echo $post->post_title; ?></a>
        </li>
    <?php endforeach ?>
    <li>
    <a href="http://rubbishtaxi.com.au/contact-us/" target="_blank" class="ask-area-btn">Ask about your area <i class="glyphicon glyphicon-chevron-right hidden-sm"></i> </a>
    </li>
</ul>