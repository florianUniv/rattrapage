<script language="JavaScript">
var NS4 = (document.layers);
var IE4 = (document.all);
var win = window;
var n = 0;
function Rechercher(str) {
var txt, i, found;
if (str == "")
return false;
if (NS4) {
if (!win.find(str))
while(win.find(str, false, true))
n++;
else
n++;
// Si le mot n'a pas été trouvé (Netscape)
if (n == 0)
alert("Pas trouvé !");
}
if (IE4) {
txt = win.document.body.createTextRange();
// Find the nth match from the top of the page.
for (i = 0; i <= n && (found = txt.findText(str)) != false; i++) {
txt.moveStart("character", 1);
txt.moveEnd("textedit");
}
if (found) {
txt.moveStart("character", -1);
txt.findText(str);
txt.select();
txt.scrollIntoView();
n++;
}
else {
if (n > 0) {
n = 0;
Rechercher(str);
}
// Si le mot n'a pas été trouvé (Explorer)
else
alert("Pas trouvé !");
}
}
return false;
}
</script>

<form name="Recherche" onSubmit="return Rechercher(this.mot.value);">
<input name="mot" type="text" size=20 onChange="n = 0;">
<input type="submit" value="Rechercher">
</form>