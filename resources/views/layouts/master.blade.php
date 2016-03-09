<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- TODO keywords and description -->

    <title>
        Garden Hose Reel - By Sunneday Manufacturing
    </title>

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.css"/>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/libs.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>

    <header class="container">
        <div class="col-xs-3 col-sm-3 col-md-2 logo">
            <img src="/img/gartenkraft-whitelogo.png" alt="Gartenkraft Logo">
        </div>
        <h1>Retractable<br><span>Hose Reel</span></h1>
    </header>

    <div class="container content">
        @yield('content')
    </div>

    <footer class="container">

            {{--<div class="row">--}}
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-2 col-md-2 col-md-offset-0" id="sunneday-logo">
                    <img src="/img/sunneday-logo-white.png" alt="Sunneday Corporate Logo">
                </div>
                <div class="col-xs-12 col-sm-6 col-sm-offset-0 col-md-4 col-md-offset-0 contact-info">
                    <ul>
                        <li>Office: 402-852-2008</li>
                        <li>Fax: 402-852-2031</li>
                        <li>Email: <a href="mailto:info@sunneday.com">info@sunneday.com</a></li>
                        <li>Web: <a href="http://www.sunneday.com" target="_blank">Sunneday Corporate Website</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-xs-offset-3 col-sm-4 col-sm-offset-4 col-md-2 col-md-offset-4" id="gartenkraft-logo">
                    <img src="/img/gartenkraft-whitelogo.png" alt="Gartenkraft Logo">
                </div>
            {{--</div>--}}
            <div id="copyright">
                <p class="copyright">Copyright &copy; {{ date('Y') }} Gartenkraft All Rights Reserved.</p>
            </div>

    </footer>

    <!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="/js/responsiveslides.min.js"></script>
    <script src="/js/libs.js"></script>
    <script>
        $(function () {
            $(".rslides").responsiveSlides({
                pager: false,
                nav: true,
                speed: 500,
                namespace: "centered-btns",
                pause: true
            });

        });
    </script>

</body>
</html>