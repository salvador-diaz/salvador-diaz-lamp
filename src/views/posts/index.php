<html>
    <head>
        <link rel="stylesheet" href="src/views/assets/general.css">
        <link rel="stylesheet" href="src/views/assets/buttons.css">
        <link rel="stylesheet" href="src/views/assets/nav.css">
        <link rel="stylesheet" href="src/views/assets/posts.css">

        <link rel="icon" type="image/png" href="src/storage/icon.png">

        <!-- Archivo Narrow font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
        <!-- -->
    </head>
    <body>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/posts">Posts</a></li>
                <!-- <li><Link to={'/memes'}>Memes</Link></li> -->
                <!-- <li><Link to={'/my-sites'}>My Sites</Link></li> -->
                <!-- {!logged && (<li><Link to={'/register'}>Sign up</Link></li>)} -->
                <!-- {!logged && (<li><Link to={'/login'}>Login</Link></li>)} -->
            </ul>
        </nav>
        <div id="page-content-div">
            <h1>Posts</h1>
            <div id="posts-div">
            <?php
               foreach ($this->params["posts"] as $post) { 
                    if (strlen($post->content) > 80)
                        $post->content = (substr($post->content, 0, 80)." ...");
                    echo "<div class='post' onclick='window.location.href = \"/post?id=$post->id\"'>
                        <h3><b>$post->title</b></h3>
                        <p>$post->content</p>
                    </div>";
                }
            ?>
            </div>
        </div>
    </body>
</html>
