</article>
            </section>
            <aside>
                <h3>Veranstaltungen Suchen</h3>
                <br>
                Nach Party suchen:
                <form action="index.php" method="POST">
                    <input type="text" name="suchstring" class="ui-widget" value="" size="20" />
                    <input type="submit" value="suchen" />
                    <input type="hidden" name="sent" value="1" />
                </form>
                <br>
                Nach Club suchen:
                <form action="index.php" method="POST">
                    <input type="text" id="autocomplete" class="ui-widget" name="suchstring" value="" size="20"/>
                    <input type="submit" value="suchen" />
                    <input type="hidden" name="sent" value="1" />
                </form>
            </aside>
            <footer>		
                <p><a href="index.php?navi=3" title="Impressum">Impressum</a></p>
            </footer>
        </div>
    </body>
</html>
