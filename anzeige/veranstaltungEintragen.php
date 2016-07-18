<form action="index.php" method="POST">
    <table border="0" cellspacing="15" cellpadding="5">
        <thead>
            <tr>
                <th colspan="2">Tragen Sie Details zu Ihrer Veranstaltung hier ein</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Wie heißt die Veranstaltung?:</td>
                <td><input type="text" name="vaName" value="" required=""/></td>
            </tr>
            <tr>
                <td>In welcher Location findet die VA statt:</td>
                <td><select size="1" name="vaOrt">
                        <option value="1">Sage</option>
                        <option value="2">Bi Nuu</option>
                        <option value="3">Astra</option>
                    </select></td>
            </tr>
            <tr>
                <td>Wann findet die VA statt:</td>
                <td>
                    <input id="datepicker" type="text" name="vaDatum" value="" />
                </td>
            </tr>
            <tr>
                <td>Welche Uhrzeit beginnt die VA:</td>
                <td>
                    <input type="text" name="vaUhrzeit" value="" />
                </td>
            </tr>
            <tr>
                <td>Beschreiben Sie Ihre VA:</td>
                <td><textarea name="vaBeschreibung" rows="6" cols="20"></textarea></td>
            </tr>
            <tr>
                <tr>
                <td>Welches Genre hat Ihre VA:</td>
                <td><select size="1" name="vaGenre">
                        <option value="1">Rock</option>
                        <option value="2">Pop</option>
                        <option value="3">Metal</option>
                    </select></td>
            </tr>
            <tr>
                <td>Was Kostet der Eintritt:</td>
                <td>
                    <input type="text" name="vaPreis" value="" />
                </td>
            </tr>
                
                <td></td>
                <td><input type="reset"/> <input type="submit" />
                    <input type="hidden" name="insertsent" value="1" /></td>
            </tr>
        </tbody>
    </table>

</form>