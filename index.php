<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Veranstaltungskalender</title>
        <!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />

    </head>

    <body>
        <div id="container">
            <header>
                <div id="text">Veranstaltungskalender für Berlin</div>
            </header>
            <nav>
                <ul>
                    <li><a href="#">Veranstaltung</a></li>
                    <li><a href="#">Veranstaltung hinzufügen</a></li>
                </ul>
            </nav>
            <section id="content">
                <article>
                    <h1>Inhalt</h1>
                </article>
            </section>
            <aside>
                <h2>Seiten Menü</h2>
                <form action="index.php" method="POST">
                    <table>
                        <tr>
                            <td><input type="text" id="autocomplete" class="ui-widget" name="suchstring" value=""/></td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="suchen" /><input type="hidden" name="sent" value="1" /></td>
                        </tr>

                    </table>

                </form>
            </aside>
            <footer>		
                <h2>Hier könnte Ihre Werbung stehen</h2>
            </footer>
        </div>
    </body>
</html>
