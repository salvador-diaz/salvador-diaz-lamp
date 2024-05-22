<html>
    <head>
        <link rel="stylesheet" href="src/views/assets/general.css">
        <link rel="stylesheet" href="src/views/assets/buttons.css">
        <link rel="stylesheet" href="src/views/assets/nav.css">
        <link rel="stylesheet" href="src/views/assets/post.css">

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
                <h1><?= $this->params["post"]->title ?></h1>
                <?php
                    if (!empty($this->params["post"]->url))
                        echo "<a target='_blank' href='{$this->params["post"]->url}'>See original article</a>";
                    echo "<p style='white-space: pre-line'>{$this->params["post"]->content}</p>";
                ?>
        </div>
    </body>
</html>
