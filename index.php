<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Blue Reviewer | Curated Home & Decor</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">
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
        $posts = [
            ['title'=>'Levoit Air Purifier','excerpt'=>'The gold standard for clean home air. Quiet, efficient, and sleek design.','image'=>'images/air-purifier.jpg','link'=>'reviews/purifier.php'],
            ['title'=>'Luna Weighted Blanket','excerpt'=>'Premium 100% Oeko-Tex cotton weighted comfort for better sleep.','image'=>'images/blanket.jpg','link'=>'reviews/blanket.php'],
            // Add other posts here
        ];

        foreach($posts as $post) {
            echo '<a href="'.$post['link'].'" class="card">';
            echo '<div class="card-img" style="background-image:url('.$post['image'].');"></div>';
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
