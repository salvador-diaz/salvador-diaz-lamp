<nav>
    <ul>
        <li><a href="/">Home</a></li>
        <li><a href="/posts">Posts</a></li>
        <!-- <li><Link to={'/memes'}>Memes</Link></li> -->
        <!-- <li><Link to={'/my-sites'}>My Sites</Link></li> -->
        <?php
        if (isset($_SESSION["user"])) {
            echo <<<HTML
                <li style="margin-left: auto; display: flex; align-items: center;">
                    <img src="{$_SESSION["user"]->picture}" style="margin-right: 0.5rem">
                    <span>{$_SESSION["user"]->givenName}</span>
                    <a href='/logout' style="font-size: initial">Logout</a>
                </li>
            HTML;
        } else {
            echo <<<HTML
                <a class="google-sign-in-button" href="{$this->params["authurl"]}">
                Sign in with Google
                </a>
            HTML;
        }
        ?>
    </ul>
</nav>
