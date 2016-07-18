<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="js/jquery-ui-1.12.0/jquery-ui.min.css" />
        <title>Veranstaltungskalender</title>
        <script src="js/jquery-3.0.0.min.js"></script>
        <script src="js/jquery-ui-1.12.0/jquery-ui.min.js"></script>
        
        
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        

        <!--hier werden die Scripte geladen--> 
        <script>
            $(document).ready(
                    function () {
                          $( "#datepicker" ).datepicker();
  } );
            
        </script>
        
    </head>

    <body>
        <div id="container">
            <header>
                <div id="text">Veranstaltungskalender für Berlin</div>
            </header>
            <nav>
                <ul>
                    <li><a href="index.php?navi=1" title="Veranstaltungen">Veranstaltung</a></li>
                    <li><a href="index.php?navi=2" title="VeranstaltungenEintragen">Veranstaltung hinzufügen</a></li>
                </ul>
            </nav>
            <section id="content">
                <article>
                    <h1>Inhalt</h1>