<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example that shows off a blog page with a list of posts.">

    <title>Blog &ndash; Layout Examples &ndash; Pure</title>




<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">



<!--[if lte IE 8]>

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">

<![endif]-->
<!--[if gt IE 8]><!-->

    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">

<!--<![endif]-->

    <!--[if lte IE 8]>
        <link rel="stylesheet" href="/css/blog-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="/css/blog.css">
    <!--<![endif]-->

        <link rel="stylesheet" href="/css/app.css">

</head>
<body>
<a href="https://github.com/allanesquina/laravel-sample"><img style="position: absolute; top: 0; right: 0; border: 0;" src="https://camo.githubusercontent.com/38ef81f8aca64bb9a64448d0d70f1308ef5341ab/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png"></a>
<div id="layout" class="pure-g">
    <div class="sidebar pure-u-1 pure-u-md-1-4">
        <div class="header">
            <h1 class="brand-title">Task Manager</h1>
            <h2 class="brand-tagline">Creating your tasks</h2>

            <nav class="nav">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a class="pure-button" href="http://github.com/allanesquina" target="_blank">Allan Esquina</a>
                    </li>
                    <li class="nav-item">
                        <a class="pure-button" href="http://purecss.io" target="_blank">Pure</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <div class="content pure-u-1 pure-u-md-3-4">
        <div>

        <main>
            <div class="container">
                @if(Session::has('flash_message'))
                    <div class="alert alert-success">
                        {{ Session::get('flash_message') }}
                    </div>
                @endif
                @if (Auth::check())
                <div class="pure-menu pure-menu-horizontal">
                    <a href="/" class="pure-menu-heading pure-menu-link">TASK MANAGER</a>
                    <ul class="pure-menu-list">
                        <li class="pure-menu-item"><a href="/tasks" class="pure-menu-link"><i class="fa fa-list"></i> List</a></li>
                        <li class="pure-menu-item"><a href="/tasks/create" class="pure-menu-link"><i class="fa fa-plus"></i> Add task</a></li>
                    </ul>
                </div>
                 @endif

                @yield('content')
            </div>
        </main>

            <div class="footer">
                <div class="pure-menu pure-menu-horizontal">
                    <ul>
                        <li class="pure-menu-item"><a href="http://purecss.io/" class="pure-menu-link">About</a></li>
                        <li class="pure-menu-item"><a href="http://twitter.com/yuilibrary/" class="pure-menu-link">Twitter</a></li>
                        <li class="pure-menu-item"><a href="http://github.com/yahoo/pure/" class="pure-menu-link">GitHub</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-1.11.3.min.js" charset="utf-8"></script>
    <script src="/js/app.js" charset="utf-8"></script>

</body>
</html>
