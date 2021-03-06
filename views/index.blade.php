<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>

    <link rel="shortcut icon" type="image/png" href="{{ url('favicon.ico') }}"/>

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes"> <!-- Fullscreen Landscape on iOS -->

    <meta name="abstract" content="@yield('title')" />
    <meta name="description" content="@yield('title')" />
    <meta name="keywords" content="" />
    <meta name="copyright" content="" />
    <meta name="robots" content="follow, index" />

		<meta http-equiv="origin-trial" data-feature="{{ $origin_trial_token_data_feature }}" data-expires="{{ $origin_trial_token_data_expires }}" content="{{ $origin_trial_token }}">

    <meta property="og:site_name" content="@yield('title')" />
    <meta property="og:image:secure_url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:description" content="@yield('title')" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ \Request::url() }}" />

    <link rel="stylesheet" href="{{ url($theme_dir . '/css/style.css') }}">
    <script src="{{ url($theme_dir . '/js/aframe/aframe-v0.8.2.min.js') }}"></script>
    <!--script src="{{ url($theme_dir . '/js/aframe-gradient-sky/gradientsky.min.js') }}"></script>
    <script src="{{ url($theme_dir . '/js/aframe-gif-shader/aframe-gif-shader.min.js') }}"></script>
    <script src="{{ url($theme_dir . '/js/aframe-html-shader/aframe-html-shader.min.js') }}"></script>
    <script src="{{ url($theme_dir . '/js/aframe-rounded-component/aframe-rounded-component.min.js') }}"></script//-->
    <script src="{{ url($theme_dir . '/js/ideaspacevr/isvr-repo.js') }}"></script>
</head>
<body>

@yield('scene')

</body>
</html>
