<html>
    <head>
        <link rel="stylesheet" href="src/views/assets/home.css">
        <link rel="stylesheet" href="src/views/assets/buttons.css">

        <link rel="icon" type="image/png" href="src/storage/icon.png">

        <!-- Archivo Narrow font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
        <!-- -->
    </head>
    <body>

        <div id="orange-welcome-div" style="display: flex; padding: 15px 0px 30px; background-color: #FF621F; color: white;">
            <div>
                <img src="src/storage/me.jpg" alt='me' />
            </div>
            <div class='title-and-links'>
                <h1>Salvador Diaz</h1>
                <a href='https://github.com/salvador-diaz' target="_blank" rel="noopener noreferrer">My Github</a>
                <a href='https://www.linkedin.com/in/salvador-d' target="_blank" rel="noopener noreferrer">My LinkedIn</a>
            </div>
        </div>
        <div id="home-content-div">

            <button id='my-cv-button' class="orange-btn">My Curriculum</button>
            <button id='this-website-button' class="orange-btn">This Website</button>

            <div id="cv-div">
                <h2>Experience</h2>

                <div class="section-div">
                    <div>
                        <img src="src/storage/netuy.svg" width='80px' />
                    </div>
                    <div>
                        <p><b>Netuy</b> - Full Stack Developer | Mar. 2023 - present (1 year 3 months)</p>
                            <ul>
                            <li>Created web software solutions involving every step (planning, developing, auditing, deploying, validating).</li>
                            <li>Participated in a broad range of projects (Payment gateway, Whatsapp bot, survey module, file processing, and more).</li>
                            <li>Implemented automated integration testing standard used to date by the company.</li>
                        </ul>
                    </div>
                </div>
                <br />

                <div class="section-div">
                    <div>
                        <img src="src/storage/tcs.png" width='80px' />
                    </div>
                    <div>
                        <p><b>Tata Consultancy Services</b> - IT Technician | Aug. 2022 - Dec. 2022 (5 months)</p>
                        <ul>
                            <li>Provided assistance to Microsoft customers having issues with <i>Dynamics 365 CRM</i>.</li>
                            <li>Worked daily in english with customers and teammates via email and meetings.</li>
                            <li>Constant troubleshooting and teamwork required to come up with a solution to the customers.</li>
                        </ul>
                    </div>
                </div>
                <br />

                <h2>Education</h2>

                <div class="section-div">
                    <div>
                        <img src="src/storage/hb.png" width='80px' height='80px' />
                    </div>
                    <div>
                        <p><b>Holberton School Uruguay</b> - Software engineering bootcamp | Sep. 2021 - Jul. 2022 (10 months)</p>
                        <ul>
                            <li>1st trimester: Git, Linux and Bash, Low level with C language. - github: <a href='https://github.com/sl4dex/holbertonschool-low_level_programming' target="_blank" rel="noopener noreferrer">here</a></li>
                            <li>2nd trimester: High level with Python language, OOP, Algorithms. - github: <a href='https://github.com/sl4dex/holbertonschool-higher_level_programming' target="_blank" rel="noopener noreferrer">here</a> and <a href='https://github.com/sl4dex/sorting_algorithms'>here</a></li>
                            <li>3rd trimester: Web Architecture, final project MVP (stockIT MVP). - github: <a href='https://github.com/sl4dex/stockIT' target="_blank" rel="noopener noreferrer">here</a></li>
                        </ul>
                    </div>
                </div>
                <br />

                <div class="section-div">
                    <div>
                        <img src="src/storage/utu.png" width='80px' height='80px' />
                    </div>
                    <div>
                        <p><b>Escuela Superior de Informática</b> - Technical Higschool | 2016 - 2019</p>
                        <ul>
                            <li>Introduction to Programming, OOP, Networks, Basic Linux and Bash, and MySQL</li>
                        </ul>
                    </div>
                </div>
                <br />

                <h2>Projects</h2>

                <h3>This Website :)</h3>
                <p><b>Fullstack Single Page Application</b> | Dec. 2022 | github: <a href='https://github.com/sl4dex/salvador-diaz' target="_blank" rel="noopener noreferrer">here</a></p>
                <p>
                Website app with my CV, a Forum, and some of my favourite web-dev memes. For more information see the 'This Website' section above.
                </p>
                <br />

                <h3>stockIT MVP</h3>
                <p><b>Holberton School final team project</b> | Jul. 2022 | github: <a href='https://github.com/sl4dex/stockIT' target="_blank" rel="noopener noreferrer">here</a></p>
                <p>
                    (See my live presentation on youtube <a href="https://www.youtube.com/live/ohsMjuoY3_c?si=ciZ3YYKBxKerMwys&t=4798">here!</a>) In the span of 2 months, our team of four people designed, developed, deployed, and presented a Python Flask web-app that lets users manage their own online inventory, adding and updating products and branches, while also see graphs and charts generated by their data.
                </p>
            </div>
            <div id="this-website-div">
            </div>
        </div>
    </body>

    <script type="text/javascript">
        let my_cv_button = document.getElementById("my-cv-button");
        let cv_div = document.getElementById("cv-div");

        let this_website_button = document.getElementById("this-website-button");
        let this_website_div = document.getElementById("this-website-div");

        this_website_button.addEventListener("click", function() {
            /*
            if (this_website_div.visibility == "hidden") {
            }
            const readme = await axios.get('https://api.github.com/repos/salvador-diaz/salvador-diaz-lamp/readme')
            const readmeContent = await axios.get(readme.data.download_url)
            setReadme(readmeContent.data);
            */
        });
        my_cv_button.addEventListener("click", function() {
        });

    </script>

</html>
