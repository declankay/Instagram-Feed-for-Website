<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>How to Add an Instagram Feed to Your Website - The Digital Den Blog</title>
    <meta name="description" content="Add an Instagram feed into your website using a Behold embed or a custom feed using the Instagram API with Behold." />

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="styles.css" />

</head>

<body>

    <?php

    // Behold feed URL
    $beholdFeedURL = "";

    // If Instagram content has been collected
    if(@file_get_contents($beholdFeedURL)){

        ?><section class="instagram-feed">

            <div class="container">

                <div id="instagram-feed-grid" class="flex">

                    <?php

                    // Convert the Instagram posts (JSON) into a PHP object
                    $instagramPosts = json_decode(file_get_contents($beholdFeedURL));

                    // Loop through each Instagram post
                    foreach($instagramPosts as $instagramPost){

                        // Add a link to the Instagram post
                        ?><a href="<?php echo $instagramPost -> permalink; ?>" target="_blank" rel="noopener noreferrer nofollow" class="instagram-post" >

                            <img src="<?php echo $instagramPost -> mediaUrl; ?>" alt="<?php echo $instagramPost -> prunedCaption; ?>" class="instagram-image"/><div class="instagram-post-overlay-bg"></div><div class="instagram-post-overlay-label"><span>View on Instagram</span></div>

                        </a><?php

                    } 

                    ?>

                </div>

            </div>

        </section><?php

    }

    // If there is no Instagram content or there is a connection error
    else {

        echo "<h1 class='no-posts-found'>No Posts Found</h1>";

    }

    ?>

</body>

</html>