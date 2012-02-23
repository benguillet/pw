<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
        <title>Benjamin Guillet - Projects</title>
        <meta name="author" content="Benjamin Guillet" />        
        <!--[if IE]><script src="scripts/html5-ie.js"></script><![endif]-->
        <link rel="stylesheet" media="all" href="/styles/screen.css" />    
    </head>
    <body>
        <header role="banner">
            <h1><a href="/" title="Home"><span class="firstname">p</span>rojects</a></h1>        
        </header>
        <div id="github-projects">
            <!--<figure> 
                <img src="/images/projects/ag41_project.png" alt="Operational Research Project" />
                <figcaption>Blablabla Operational Research, so goood</figcaption>
            </figure>-->
        </div>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
        <script src="/scripts/github_min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                $("#github-projects").loadRepositories("Tartopom");
            });
        </script>
    </body>
</html>
