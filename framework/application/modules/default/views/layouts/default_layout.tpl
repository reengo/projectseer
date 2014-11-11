<!-- this is a sample layout -->
{doctype type="xtransitional"}
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
{head_meta}
{head_title}
{head_link href="main.css" rel="stylesheet"}
{scriptaculous}
</head>

<body>
This is a sample layout. You can change this at: 
<span style="font-family:'courier new'; font-size:12px;">/application/modules/default/views/layouts</span>
<br><br>

You can change the title of this project by going to:
<span style="font-family:'courier new'; font-size:12px;">/application/config/global.php</span>
<br><br>

{$content_for_layout}
</body>
</html>