<?php

echo '<!DOCTYPE html>';
echo '<html lang="en" data-bs-theme="light">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"><meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors"><meta name="generator" content="Astro v5.13.2">
        <title>SGenerator</title>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/jumbotron/">
        <script src="/assets/scripts/color-modes.js"></script>
        <link href="/assets/styles/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB">
        <link rel="apple-touch-icon" href="/assets/icons/logo.svg" sizes="180x180">
        <link rel="icon" href="/assets/icons/logo.svg" sizes="32x32" type="image/png">
        <link rel="icon" href="/assets/icons/logo.svg" sizes="16x16" type="image/png">
        <link rel="manifest" href="/manifest.json">
        <link rel="mask-icon" href="/assets/icons/logo.svg" color="#712cf9">
        <link rel="icon" href="/assets/icons/logo.svg">
        <meta name="theme-color" content="#712cf9">
        <style>
            .bd-placeholder-img{
                font-size:1.125rem;text-anchor:middle;-webkit-user-select:none;-moz-user-select:none;user-select:none
            }
            @media (min-width: 768px){
                .bd-placeholder-img-lg{
                    font-size:3.5rem
                }
            }
            .b-example-divider{
                width:100%;
                height:3rem;
                background-color:#0000001a;
                border:solid rgba(0,0,0,.15);
                border-width:1px 0;
                box-shadow:inset 0 .5em 1.5em #0000001a,inset 0 .125em .5em #00000026
            }
            .b-example-vr{
                flex-shrink:0;
                width:1.5rem;
                height:100vh
            }
            .bi{
                vertical-align:-.125em;
                fill:currentColor
            }
            .nav-scroller{
                position:relative;
                z-index:2;
                height:2.75rem;
                overflow-y:hidden
            }
            .nav-scroller .nav{
                display:flex;
                flex-wrap:nowrap;
                padding-bottom:1rem;
                margin-top:-1px;
                overflow-x:auto;
                text-align:center;
                white-space:nowrap;
                -webkit-overflow-scrolling:touch
            }
            .btn-bd-primary{
                --bd-violet-bg: #712cf9;
                --bd-violet-rgb: 112.520718, 44.062154, 249.437846;
                --bs-btn-font-weight: 600;
                --bs-btn-color: var(--bs-white);
                --bs-btn-bg: var(--bd-violet-bg);
                --bs-btn-border-color: var(--bd-violet-bg);
                --bs-btn-hover-color: var(--bs-white);
                --bs-btn-hover-bg: #6528e0;
                --bs-btn-hover-border-color: #6528e0;
                --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
                --bs-btn-active-color: var(--bs-btn-hover-color);
                --bs-btn-active-bg: #5a23c8;
                --bs-btn-active-border-color: #5a23c8
            }
            .bd-mode-toggle{
                z-index:1500
            }
            .bd-mode-toggle .bi{
                width:1em;
                height:1em
            }
            .bd-mode-toggle .dropdown-menu .active .bi{
                display:block!important
            }
        </style>
    </head>
    <body>
        <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
            <symbol id="check2" viewBox="0 0 16 16">
                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"></path>
            </symbol>
            <symbol id="circle-half" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"></path>
            </symbol>
            <symbol id="moon-stars-fill" viewBox="0 0 16 16">
                <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"></path>
                <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"></path>
            </symbol>
            <symbol id="sun-fill" viewBox="0 0 16 16">
                <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"></path>
            </symbol>
        </svg>
        <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
            <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (light)">
                <svg class="bi my-1 theme-icon-active" aria-hidden="true">
                    <use href="#sun-fill"></use>
                </svg>
                <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
                <li>
                    <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="light" aria-pressed="true">
                        <svg class="bi me-2 opacity-50" aria-hidden="true">
                            <use href="#sun-fill"></use>
                        </svg>
                        Light
                        <svg class="bi ms-auto d-none" aria-hidden="true">
                            <use href="#check2"></use>
                        </svg>
                    </button>
                </li>
                <li>
                    <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                        <svg class="bi me-2 opacity-50" aria-hidden="true">
                            <use href="#moon-stars-fill"></use>
                        </svg>
                        Dark
                        <svg class="bi ms-auto d-none" aria-hidden="true">
                            <use href="#check2"></use>
                        </svg>
                    </button>
                </li>
                <li>
                    <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false">
                        <svg class="bi me-2 opacity-50" aria-hidden="true">
                            <use href="#circle-half"></use>
                        </svg>
                        Auto
                        <svg class="bi ms-auto d-none" aria-hidden="true">
                            <use href="#check2"></use>
                        </svg>
                    </button>
                </li>
            </ul>
        </div> 
        <main> 
            <div class="container py-4">
                <header class="pb-3 mb-4 border-bottom">

                    <nav class="navbar navbar-expand-lg bg-body-tertiary rounded" aria-label="Twelfth navbar example">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample10" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample10">
                                <ul class="navbar-nav">

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Base</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="/base/random-digits">Random Digits</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="/base/number-between">Number Between</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="/base/random-number">Random Number</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="/base/random-float">Random Float</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Address</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="/address/coordinates">Coordinates</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="/address/address">Address</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="/date-time/date-time">DateTime</a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Internet</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="/internet/email">Email</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="/internet/domain">Domain</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="/internet/password">Password</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="/internet/user-name">UserName</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="/internet/url">URL</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="/internet/slug">Slug</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="/internet/ip">Ip</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="/internet/mac-address">MacAddress</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Lorem</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a class="dropdown-item" href="/lorem/words">Words</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="/lorem/sentences">Sentences</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="/lorem/paragraphs">Paragraphs</a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="/lorem/text">Text</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="/person/name">Person name</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" aria-current="page" href="/phone-number/phone-number">Phone Number</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </nav>
                </header>
                <div class="p-5 mb-4 bg-body-tertiary rounded-3">
                    <div class="container-fluid py-5">
                        <h1 class="display-5 fw-bold">Custom jumbotron</h1>
                        <p class="col-md-8 fs-4">
                            Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.
                        </p>
                        <button class="btn btn-primary btn-lg" type="button">Example button</button>
                    </div>
                </div>
                <div class="row align-items-md-stretch">
                    <div class="col-md-6">
                        <div class="h-100 p-5 text-bg-dark rounded-3">
                            <h2>Change the background</h2>
                            <p>
                                Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.
                            </p>
                            <button class="btn btn-outline-light" type="button">Example button</button>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                            <h2>Add borders</h2>
                            <p>
                                Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as weve adjusted the alignment and sizing of both column`s content for equal-height.
                            </p>
                            <button class="btn btn-outline-secondary" type="button">Example button</button>
                        </div>
                    </div> 
                </div>
                <footer class="pt-3 mt-4 text-body-secondary border-top">
                    © 2025 
                </footer> 
            </div>
        </main>
        <script src="/assets/scripts/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" class="astro-vvvwv3sm"></script>
    </body>
</html>';

// use App\Service\Router;

require_once __DIR__ . "/vendor/autoload.php";

// (new Router())->newRequest($_SERVER['REQUEST_URI']);

require_once __DIR__ . match($_SERVER['REQUEST_URI']) {
    '/' => "/app/Page/home_page.php",

    // -- Base -- \\

    '/base/random-digits' => "/app/Page/Base/random_digit.php",
    '/base/number-between' => "/app/Page/Base/number_between.php",
    '/base/random-number' => "/app/Page/Base/random_number.php",
    '/base/random-float' => "/app/Page/Base/random_float.php",

    // -- Address -- \\

    '/address/coordinates' => "/app/Page/Address/coordinates.php",
    '/address/address' => "/app/Page/Address/address.php",

    // -- DateTime -- \\

    '/date-time/date-time' => "/app/Page/DateTime/date_time.php",

    // -- Internet -- \\

    '/internet/email' => "/app/Page/Internet/email.php",
    '/internet/domain' => "/app/Page/Internet/domain.php",
    '/internet/password' => "/app/Page/Internet/password.php",
    '/internet/user-name' => "/app/Page/Internet/user_name.php",
    '/internet/url' => "/app/Page/Internet/url.php",
    '/internet/slug' => "/app/Page/Internet/slug.php",
    '/internet/ip' => "/app/Page/Internet/ip.php",
    '/internet/mac-address' => "/app/Page/Internet/mac_address.php",

    // -- Lorem -- \\

    '/lorem/words' => "/app/Page/Lorem/words.php",
    '/lorem/sentences' => "/app/Page/Lorem/sentences.php",
    '/lorem/paragraphs' => "/app/Page/Lorem/paragraphs.php",
    '/lorem/text' => "/app/Page/Lorem/text.php",

    // -- Person -- \\

    '/person/name' => "/app/Page/Person/name.php",

    // -- PhoneNumber -- \\

    '/phone-number/phone-number' => "/app/Page/PhoneNumber/phone_number.php",

    default => "/app/Page/error_page.php"
};
