<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Blue Reviewer | Curated Home & Decor</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php include('header.php'); ?>

<section class="hero">
    <h2>Elevated Living</h2>
    <p>Expert reviews of the best Amazon Home & Decor finds to transform your space with style and functionality.</p>
</section>

<main>
    <div class="grid">
        <?php
        // Array of posts for homepage teaser cards
        $posts = [
            [
                'title' => 'Levoit Air Purifier',
                'excerpt' => 'The gold standard for clean home air. Quiet, efficient, and sleek design perfect for bedrooms.',
                'image' => 'https://m.media-amazon.com',
                'link' => 'reviews/purifier.php'
            ],
            [
                'title' => 'Luna Weighted Blanket',
                'excerpt' => 'Premium 100% Oeko-Tex cotton weighted comfort for better sleep and deep pressure stimulation.',
                'image' => 'https://m.media-amazon.com',
                'link' => 'reviews/blanket.php'
            ],
            // Add other posts here
        ];

        foreach($posts as $post) {
            echo '<a href="'.$post['link'].'" class="card">';
            echo '<div class="card-img" style="background-image: url(\''.$post['image'].'\');"></div>';
            echo '<div class="card-body">';
            echo '<h3>'.$post['title'].'</h3>';
            echo '<p>'.$post['excerpt'].'</p>';
            echo '<div class="amazon-btn">View on Amazon</div>';
            echo '</div></a>';
        }
        ?>
    </div>
</main>

<?php include('footer.php'); ?>

</body>
</html>
