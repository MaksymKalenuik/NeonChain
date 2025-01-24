<?php

function get_header(){
    include "header.php";
}
function get_footer(){
    include "footer.php";
}
function get_sidebar(){
    include "sidebar.php";
}

function get_banner(){
    include "banner.php";
}
function get_blog_posts() {
    return [
        [
            'image' => 'images/posts/post1.jpg',
            'title' => 'Neon Art Revolution',
            'excerpt' => 'Discover how neon is transforming the NFT landscape with cutting-edge designs.',
            'url' => '/post.php'
        ],
        [
            'image' => 'images/posts/post2.jpg',
            'title' => 'Behind the Glow',
            'excerpt' => 'A sneak peek into the creative process of crafting vibrant neon NFTs.',
            'url' => '/post.php'
        ],
        [
            'image' => 'images/posts/post7.jpg',
            'title' => 'Why Neon NFTs?',
            'excerpt' => 'Explore the unique appeal and value of neon-themed digital collectibles.',
            'url' => '/post.php'
        ],
        [
            'image' => 'images/posts/post3.jpg',
            'title' => 'Meet the Artists',
            'excerpt' => 'Get to know the visionary creators behind our exclusive neon NFT collection.',
            'url' => '/post.php'
        ],
        [
            'image' => 'images/posts/post5.jpg',
            'title' => 'Top Trends in Neon Art',
            'excerpt' => 'Stay ahead with the latest trends in neon-inspired digital art.',
            'url' => '/post.php'
        ],
        [
            'image' => 'images/posts/post6.jpg',
            'title' => 'The Future of Digital Art',
            'excerpt' => 'How neon NFTs are shaping the future of the art world and beyond.',
            'url' => '/post.php'
        ],
        [
            'image' => 'images/posts/post8.jpg',
            'title' => 'From Concept to Creation',
            'excerpt' => 'The journey of turning neon ideas into stunning NFT realities.',
            'url' => '/post.php'
        ],
        [
            'image' => 'images/posts/post9.jpg',
            'title' => 'Limited Editions Spotlight',
            'excerpt' => 'Highlighting our rarest and most exclusive neon NFT drops.',
            'url' => '/post.php'
        ],
        [
            'image' => 'images/posts/post10.jpg',
            'title' => 'Neon NFT Community',
            'excerpt' => 'Join the vibrant community of collectors and creators in the neon art space.',
            'url' => '/post.php'
        ],
    ];
}

?>