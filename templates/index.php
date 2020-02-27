<!doctype html>
<html>
<head>
<meta http-equiv="refresh" content="5" />
<meta charset="UTF-8">
<title>RClone Logs</title>
<style type="text/css">
body {
	background-color: #282E39;
	text-align: left;
}
.test {
}
body,td,th {
	color: #FFFFFF;
	font-size: medium;
	font-family: Segoe, "Segoe UI", "DejaVu Sans", "Trebuchet MS", Verdana, sans-serif;
}
a:link {
	color: #E8DD06;
}
a:visited {
	color: #E8DD06;
}
</style>
</head>

<body text="#FFFFFF">
<br>
<table width="100%" cellpadding="10">
  <tbody>
    <tr>
      <td height="100" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tbody>
            <tr>
              <td width="90%" height="30" style="color: #0FA702; font-family: 'Lucida Grande', 'Lucida Sans Unicode', 'Lucida Sans', 'DejaVu Sans', Verdana, sans-serif; font-weight: bolder; font-size: large; text-align: center;">RClone Logs</td>
            </tr>
          </tbody>
        </table>
        <table width="100%" height="100%" border="1" align="center" cellpadding="5" cellspacing="0">
          <tbody>
            <tr>
              <td colspan="6" bgcolor="#000000" style="color: #F7F6F6; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-weight: bold; font-size: medium;"><span class="test" style="color: #FFFFFF; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, sans-serif; font-size: medium;">
                <?php $output = shell_exec('tail -n 25 /plexguide/logs/pgblitz.log | sed -e "/Log - Cycle/q"');
echo "<pre>$output</pre>";
?>
              </span></td>
            </tr>
          </tbody>
        </table>
        <br>
      </td>
    </tr>
  </tbody>
</table>
</body>
</html>
