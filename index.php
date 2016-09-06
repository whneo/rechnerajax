<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>RechnerAjax</title>
        <script>
            function loadDoc() {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("ergebnis").value = this.responseText;
                    }
                };
//                var getVariablen = "?zahl1=" + document.getElementById('zahl1').value;
//                getVariablen += "&zahl2=" + document.getElementById('zahl2').value;
//                xhttp.open("GET", "rechne.php" + getVariablen, true);
//                xhttp.send();
                xhttp.open("POST", "rechne.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("zahl1=" + document.getElementById('zahl1').value + "&zahl2=" + document.getElementById('zahl2').value);
            }

            var berechne = function () {
                loadDoc();
            };
        </script>
    </head>
    <body>
        <input id="zahl1" type="text" name="zahl1" value="" required=""/><span> + </span>
        <input id="zahl2" type="text" name="zahl2" value="" required=""/><span> = </span>
        <input id="ergebnis" type="text" name="ergebnis" value="" readonly=""/><span>&nbsp;&nbsp;&nbsp;</span>
        <input type="submit" value="Rechne" onclick="berechne();" name="rechne" />
    </body>
</html>
