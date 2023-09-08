<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>URL Shorten</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>

    <div id="nav-background">
        <div id="nav-container">
            <header id="nav-header">
                <h1><a href="#" class="mode-color" id="nav-logo">Shorten</a></h1>
                <div id="nav-menu-button"><i class="fa fa-bars"></i></div>
            </header>
            <nav>
                <ul class="nav-ul hide-ul">
                    <li><a id="mode_btn" class="nav-link mode-color" href="#"><i class="fa fa-moon-o"></i></a>
                    </li>
                    <li><a class="nav-link mode-color" href="#">About</a></li>
                    <li><a class="nav-link mode-color" href="#">Github</a></li>
                </ul>
            </nav>
        </div>
    </div>
    <div class="content">
        <div class="header mode-color">
            Shorten
        </div>
        <div class="intro-text mode-color">
            Most link shorteners do too much <br>
            This one just makes your links shorter
        </div>
        <form id="form-data">
            <div class="input-area">
                <input type="text" name="input" value="https://www.google.com/" id="input">
                <input type="submit" id="btn" value="Drop!">
            </div>
        </form>
        <div class="output-area">
            <div id="output" class="output">
                <!-- dolor sit amet consectetur -->
            </div>
            <span id="copy" class="icon">
                <i class="fa fa-copy"></i>
            </span>
        </div>
    </div>
    <div class="footer mode-color">
        Made with <i class="fa-solid fa-heart"></i> by <a href="http://" target="_blank" rel="noopener noreferrer">Arafat Hossain Ar</a>
    </div>
    <script src="https://kit.fontawesome.com/24907615ba.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="{{ asset('assets/script.js') }}"></script>
</body>

</html>
