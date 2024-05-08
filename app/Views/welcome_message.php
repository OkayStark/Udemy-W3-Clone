<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Courses - Learn Anything On.</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/5c324d89d4.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <li><img class="brand-logo" src="logo-dark.png" alt="CodingJr" style="margin-left:10px"></li>
            <li>
                <div class="header--vertical-divider--ZCA7Z"></div>
            </li>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="#">Class 12</a></li>
                <li class="breadcrumb-item"><a href="#">Web Development</a></li>
                <li class="breadcrumb-item active" aria-current="page">HTML</li>
            </ol>
            <div class="dropdown" style="position: relative;">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-user"></i>
                    <span class="user-name">Vikas</span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="right: 0;">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="body-container">
        <div class="row">
            <div class="col-md-8">
                <div id="player"></div>
                <script src="https://www.youtube.com/iframe_api"></script>
                <script>
                    var videoId = 'mAnqTu1aw7M';
                    var player;
                    function onYouTubeIframeAPIReady() {
                        player = new YT.Player('player', {
                            height: '700',
                            width: '1260',
                            videoId: videoId,
                            events: {
                                'onReady': onPlayerReady,
                                'onStateChange': onPlayerStateChange
                            }
                        });
                    }
                    function onPlayerReady(event) {
                        event.target.playVideo();
                    }
                    function onPlayerStateChange(event) {
                    }
                </script>
            </div>
            <div class="col-md-4">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <strong>Introduction To HTML</strong>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div style="margin-bottom: 10px;">
                                    <div style="margin-bottom: 10px;">
                                        HTML stands for HyperText Markup Language. It is the standard markup language
                                        used
                                        to create web pages. HTML is a combination of Hypertext and Markup language.
                                        Hypertext defines the link between web pages. A markup language is used to
                                        define
                                        the text document within the tag to define the structure of web pages.
                                    </div>
                                    <div>
                                        This language is used to annotate (make notes for the computer) text so that a
                                        machine can understand it and manipulate text accordingly. Most markup languages
                                        (e.g. HTML) are human-readable. The language uses tags to define what
                                        manipulation
                                        has to be done on the text.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <strong>Adding Images, Videos and Tables</strong>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div style="display: flex; justify-content: space-between;" onclick="vidfunction()">
                                    <a href="#" class="clickable-text" style="text-decoration: none; color: black">
                                        <strong>
                                            <span class="fas fa-play" style="margin-right: 10px;"></span> Video: Adding
                                            Images
                                        </strong>
                                    </a>
                                    <div class="check-icon" style="display: none;">
                                        <span class="fas fa-check-circle" style="margin-right: 10px;"></span> 5:00
                                    </div>
                                </div>
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                                <div style="display: flex; justify-content: space-between;" onclick="pptfunction()">
                                    <a href="#" class="clickable-text" style="text-decoration: none; color: black">
                                        <strong>
                                            <span class="fas fa-file-powerpoint" style="margin-right: 10px;"></span>
                                            PPT:
                                            Adding Images
                                        </strong>
                                    </a>
                                    <div class="check-icon" style="display: none;">
                                        <span class="fas fa-check-circle" style="margin-right: 10px;"></span> 2:00
                                    </div>
                                </div>
                                <div style="display: flex; justify-content: space-between;" onclick="notefunction()">
                                    <a href="#" class="clickable-text" style="text-decoration: none; color: black">
                                        <strong>
                                            <span class="fas fa-clipboard" style="margin-right: 10px;"></span> Notes:
                                            Adding
                                            Images
                                        </strong>
                                    </a>
                                    <div class="check-icon" style="display: none;">
                                        <span class="fas fa-check-circle" style="margin-right: 10px;"></span> 1:30
                                    </div>
                                </div>
                                <div style="display: flex; justify-content: space-between;" onclick="quizfunction()">
                                    <a href="#" class="clickable-text" style="text-decoration: none; color: black">
                                        <strong>
                                            <span class="fas fa-question" style="margin-right: 10px;"></span> Quiz:
                                            Adding
                                            Images
                                        </strong>
                                    </a>
                                    <div class="check-icon" style="display: none;">
                                        <span class="fas fa-check-circle" style="margin-right: 10px;"></span> 1:00
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <strong>Lists</strong>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet. Nam esse eligendi ut voluptatem quia et soluta laboriosam et
                                unde architecto ut itaque voluptatem ut voluptatum error At nostrum tempore. Est neque
                                repellat et accusamus autem non inventore dolores id vero magni et incidunt quisquam est
                                exercitationem saepe ad perspiciatis odit! Ad vitae adipisci sed dolorum ratione est
                                consequatur amet in facilis aspernatur eos quia maxime. Et consequatur consequatur ut
                                sunt mollitia aut sequi distinctio est voluptas autem eum sunt dolores. Est asperiores
                                reiciendis qui architecto voluptatem hic itaque earum et dolorum velit. Rem libero quis
                                sed corrupti magni ut officia cumque 33 excepturi voluptates aut officiis architecto ea
                                ullam autem. Aut dolorem veritatis nam vero voluptatem et sapiente accusantium ut dolore
                                sequi et quaerat nisi ut voluptatem commodi At
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <strong>Hyperlinks</strong>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet. Nam esse eligendi ut voluptatem quia et soluta laboriosam et
                                unde architecto ut itaque voluptatem ut voluptatum error At nostrum tempore. Est neque
                                repellat et accusamus autem non inventore dolores id vero magni et incidunt quisquam est
                                exercitationem saepe ad perspiciatis odit! Ad vitae adipisci sed dolorum ratione est
                                consequatur amet in facilis aspernatur eos quia maxime. Et consequatur consequatur ut
                                sunt mollitia aut sequi distinctio est voluptas autem eum sunt dolores. Est asperiores
                                reiciendis qui architecto voluptatem hic itaque earum et dolorum velit. Rem libero quis
                                sed corrupti magni ut officia cumque 33 excepturi voluptates aut officiis architecto ea
                                ullam autem. Aut dolorem veritatis nam vero voluptatem et sapiente accusantium ut dolore
                                sequi et quaerat nisi ut voluptatem commodi At
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <strong>Frames</strong>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Lorem ipsum dolor sit amet. Nam esse eligendi ut voluptatem quia et soluta laboriosam et
                                unde architecto ut itaque voluptatem ut voluptatum error At nostrum tempore. Est neque
                                repellat et accusamus autem non inventore dolores id vero magni et incidunt quisquam est
                                exercitationem saepe ad perspiciatis odit! Ad vitae adipisci sed dolorum ratione est
                                consequatur amet in facilis aspernatur eos quia maxime. Et consequatur consequatur ut
                                sunt mollitia aut sequi distinctio est voluptas autem eum sunt dolores. Est asperiores
                                reiciendis qui architecto voluptatem hic itaque earum et dolorum velit. Rem libero quis
                                sed corrupti magni ut officia cumque 33 excepturi voluptates aut officiis architecto ea
                                ullam autem. Aut dolorem veritatis nam vero voluptatem et sapiente accusantium ut dolore
                                sequi et quaerat nisi ut voluptatem commodi At
                            </div>
                        </div>
                    </div>
                    <script>
                        window.addEventListener('DOMContentLoaded', (event) => {
                            document.querySelectorAll('.clickable-text').forEach(function (text) {
                                text.addEventListener('click', function () {
                                    this.nextElementSibling.style.display = '';
                                });
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="side hide">
                    <h3>HTML Images</h3>
                    <ul>
                        <li class="side-list"><a href="#">HTML HOME</a></li>
                        <li class="side-list"><a href="#">HTML Introduction</a></li>
                        <li class="side-list"><a href="#">HTML Editors</a></li>
                        <li class="side-list"><a href="#">HTML Basic</a></li>
                        <li class="side-list"><a href="#">HTML Elements</a></li>
                        <li class="side-list"><a href="#">HTML Attributes</a></li>
                        <li class="side-list"><a href="#">HTML Headings</a></li>
                        <li class="side-list"><a href="#">HTML Paragraphs</a></li>
                        <li class="side-list"><a href="#">HTML Styles</a></li>
                        <li class="side-list"><a href="#">HTML Formatting</a></li>
                        <li class="side-list"><a href="#">HTML Quotations</a></li>
                        <li class="side-list"><a href="#">HTML Comments</a></li>
                        <li class="side-list"><a href="#">HTML Colors</a></li>
                        <li class="side-list"><a href="#">HTML CSS</a></li>
                        <li class="side-list"><a href="#">HTML Links</a></li>
                        <li class="side-list"><a href="#">HTML Images</a></li>
                        <li class="side-list"><a href="#">HTML Favicon</a></li>
                        <li class="side-list"><a href="#">HTML Page Title</a></li>
                        <li class="side-list"><a href="#">HTML Tables</a></li>
                        <li class="side-list"><a href="#">HTML Lists</a></li>
                        <li class="side-list"><a href="#">HTML Block & Inline</a></li>
                        <li class="side-list"><a href="#">HTML Div</a></li>
                        <li class="side-list"><a href="#">HTML Classes</a></li>
                        <li class="side-list"><a href="#">HTML Id</a></li>
                        <li class="side-list"><a href="#">HTML Iframes</a></li>
                        <li class="side-list"><a href="#">HTML JavaScript</a></li>
                        <li class="side-list"><a href="#">HTML File Paths</a></li>
                        <li class="side-list"><a href="#">HTML Head</a></li>
                        <li class="side-list"><a href="#">HTML Layout</a></li>
                        <li class="side-list"><a href="#">HTML Responsive</a></li>
                        <li class="side-list"><a href="#">HTML Computercode</a></li>
                        <li class="side-list"><a href="#">HTML Semantics</a></li>
                        <li class="side-list"><a href="#">HTML Style Guide</a></li>
                        <li class="side-list"><a href="#">HTML Entities</a></li>
                        <li class="side-list"><a href="#">HTML Symbols</a></li>
                        <li class="side-list"><a href="#">HTML Emojis</a></li>
                        <li class="side-list"><a href="#">HTML Charsets</a></li>
                        <li class="side-list"><a href="#">HTML URL Encode</a></li>
                        <li class="side-list"><a href="#">HTML vs. XHTML</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="content hide">
                    <div class="content-header">
                        <h1>HTML Tutorial</h1>
                    </div>
                    <div class="nextBtnRow">
                        <button>
                            < Home</button>
                                <button>Next ></button>
                    </div>
                    <div class="img-content">
                        <p style="padding: 10px">Images can improve the design and the appearance of a web page</p>
                        <div class="image-row">
                            <img src="pic_trulli.jpg" alt="Italian Trulli">
                            <img src="img_girl.jpg" alt="Girl in a jacket">
                            <img src="img_chania.jpg" alt="Flowers in Chania">
                        </div>
                    </div>

                    <div class="empty-content">
                        <p>Example</p>
                        <div class="text">&lt;img src="pic_trulli.jpg" alt="Italian Trulli"&gt;</div>
                        <button onclick="tryitfunction()">Try it Yourself >></button>
                    </div>

                    <div class="empty-content">
                        <p>Example</p>
                        <div class="text">&lt;img src="img_girl.jpg" alt="Girl in a jacket"&gt;</div>
                        <button onclick="tryitfunction()">Try it Yourself >></button>
                    </div>

                    <div class="empty-content">
                        <p>Example</p>
                        <div class="text">&lt;img src="img_chania.jpg" alt="Flowers in Chania"&gt;</div>
                        <button onclick="tryitfunction()">Try it Yourself >></button>
                    </div>
                    <div class="nextBtnRow last">
                        <button>
                            < Home</button>
                                <button>Next ></button>
                    </div>
                </div>
            </div>
            <script>
                let side = document.querySelector(".side");
                let dropdown = document.querySelector('.drop-down-container');
                let content = document.querySelector(".content");
                toggle.addEventListener("click", () => {
                    side.classList.toggle("hide");
                    content.classList.toggle("hide");
                });
            </script>
            <div class="col-md-4">

            </div>
        </div>

    </div>

    <div class="links">
        <div class="footer">
            <div class="footer-brand">
                <p>Terms & Conditions</p>
                <p>Coding Jr</p>
            </div>
        </div>
    </div>

    <style {csp-style-nonce}>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        li {
            list-style: none;
        }

        .body-container {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: center;
            width: 100%;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }

        .navbar {
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            align-items: center
        }

        .header--vertical-divider--ZCA7Z {
            height: 40px;
            width: 1px;
            background-color: #043872;
            margin: 0 10px;
        }

        .breadcrumb {
            padding: 10px 16px;
            background-color: #eee;
            border-radius: 10px;
            display: flex;
            align-items: center
        }

        .breadcrumb-item {
            font-size: 20px;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            color: black;
            content: "\FF1E\00a0";
        }

        .breadcrumb-item a {
            color: #0275d8;
            text-decoration: none;
        }

        .breadcrumb-item a:hover {
            color: #01447e;
            text-decoration: underline;
        }

        .user-name {
            font-size: 20px;
            margin-left: 10px;
        }

        .dropdown {
            margin-left: auto;
            margin-right: 30px;
        }

        /*Main*/
        #player {
            display: flex;
            margin: 0;
            margin-top: 10px;
            margin-left: 20px;
            border: 1px solid #eee;
            border-radius: 5px;
            padding: 30px;
            background-color: #eee;
        }

        .accordion {
            margin: 0;
            margin-top: 10px;
            border: 1px solid #eee;
            border-radius: 5px;
            padding: 30px;
            background-color: #eee;
        }

        .col-md-6 {
            margin: 0;
            margin-top: 20px;
            border: 1px solid #eee;
            border-radius: 5px;
            padding: 30px;
            background-color: #eee;
            margin-left: 10px;
        }

        .side {
            box-sizing: border-box;
            height: 100%;
            overflow: auto;
            background: #e7e9eb;
            margin-left: 20px;
            margin-top: 20px;
            border-radius: 5px;
        }

        /* side panel */
        .side h3 {
            padding: 10px 20px;
        }

        .side li {
            list-style-type: none;
        }

        .side a {
            display: inline-block;
            width: 100%;
            padding: 5px 0 5px 25px;
            text-decoration: none;
            color: black;
            font-size: 14px;
        }

        .side a:hover {
            background: #cccccc;
        }

        .side ul {
            padding: 0;
            margin: 0;
        }

        /* w3 content */

        .image-row {
            display: flex;
            justify-content: space-between;
        }

        .image-row img {
            width: 33%;
        }

        .content {
            flex: 1;
            height: 100%;
            overflow: auto;
        }

        .content-header {
            width: 85%;
            margin: 40px auto 20px;
        }

        .content-header h1 {
            font-weight: 400;
        }

        .nextBtnRow {
            width: 85%;
            margin: auto;
            display: flex;
            gap: 60%;
        }

        .content button {
            background-color: #1d4c80;
            border: none;
            outline: none;
            color: white;
            padding: 7px 15px;
            border-radius: 4px;
            cursor: pointer;
        }

        .content button:active {
            background-color: hsl(158, 95%, 30%);
        }

        .img-content {
            height: 240px;
            width: 85%;
            margin: 40px auto 0;
            background: rgba(99, 99, 99, 0.16);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .empty-content {
            height: 180px;
            width: 85%;
            margin: 40px auto 0;
            background: rgba(99, 99, 99, 0.16);
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .empty-content p {
            margin: 20px 0 0 40px;
        }

        .empty-content button {
            width: fit-content;
            margin: 0 0 20px 40px;
        }

        .empty-content .text {
            height: 30px;
            max-width: 80%;
            margin: 0 40px;
            background-color: rgb(252, 252, 252);
            border-left: 4px solid #04a96d;
        }

        .toggle {
            display: none;
            margin: 0 20px;
            cursor: pointer;
            align-items: center;
        }

        .toggle:active {
            background-color: black;
        }

        .toggle img {
            width: 25px;
            margin-top: 3px;
            margin-right: 5px;
            margin: auto;
        }

        .last {
            margin: 50px auto;
        }

        .text {
            display: flex;
            align-items: center;
            padding-left: 10px;
            color: #1d4c80;
            font-size: 14px;
        }

        /*Footer*/

        .links {
            width: 100%;
            background-color: rgba(0, 0, 0, 0.93);
            height: auto;
            margin-top: 3rem;
            display: flex;
            justify-content: center;
        }

        .footer {
            display: flex;
            flex-direction: column;
            flex-wrap: nowrap;
            width: 100%;
            margin-top: 3rem;
            margin-bottom: 1.5rem;
            margin-inline: 2rem;
            gap: 3rem;
        }

        .footer-brand {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            color: white;
            font-size: small;
        }

        /* Media Queries */

        @media screen and (max-width:1100px) {
            .left-nav-links:nth-child(n + 11) {
                display: none;
            }
        }

        @media screen and (max-width:890px) {
            .left-nav-links:nth-child(n + 10) {
                display: none;
            }
        }

        @media screen and (max-width:812px) {
            .left-nav-links:nth-child(n + 8) {
                display: none;
            }
        }

        @media screen and (max-width: 550px) {
            .left-nav-links:nth-child(5) {
                display: none;
            }

            .left-nav-links:nth-child(4) {
                display: none;
            }

            .left-nav-links:nth-child(6) {
                display: none;
            }

            .left-nav-links:nth-child(n + 8) {
                display: none;
            }

            .content {
                margin: 0;
            }

            .side {
                position: absolute;
                box-shadow: 0 0 10px -2px black;
            }

            .toggle {
                display: flex;
            }

            .side.hide {
                display: none;
            }
        }
    </style>
    <script>
        function vidfunction() {
            $.ajax({
                url: 'http://localhost/api/vid_data',
                type: 'GET',
                success: function (data) {
                    sessionStorage.setItem('apiData', JSON.stringify(data));
                    window.open('http://localhost/redirected', '_blank');
                },
                error: function (error) {
                    console.log('Error: ', error);
                }
            });
        }

        function pptfunction() {
            $.ajax({
                url: 'http://localhost/api/ppt_data',
                type: 'GET',
                success: function (data) {
                    sessionStorage.setItem('apiData', JSON.stringify(data));
                    window.open('http://localhost/redirected', '_blank');
                },
                error: function (error) {
                    console.log('Error: ', error);
                }
            });
        }

        function notefunction() {
            $.ajax({
                url: 'http://localhost/api/note_data',
                type: 'GET',
                success: function (data) {
                    sessionStorage.setItem('apiData', JSON.stringify(data));
                    window.open('http://localhost/redirected', '_blank');
                },
                error: function (error) {
                    console.log('Error: ', error);
                }
            });
        }

        function quizfunction() {
            $.ajax({
                url: 'http://localhost/api/quiz_data',
                type: 'GET',
                success: function (data) {
                    sessionStorage.setItem('apiData', JSON.stringify(data));
                    window.open('http://localhost/redirected', '_blank');
                },
                error: function (error) {
                    console.log('Error: ', error);
                }
            });
        }

        function tryitfunction() {
            $.ajax({
                url: 'http://localhost/api/editor',
                type: 'GET',
                success: function (data) {
                    sessionStorage.setItem('apiData', JSON.stringify(data));
                    window.open('http://localhost/redirected', '_blank');
                },
                error: function (error) {
                    console.log('Error: ', error);
                }
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>