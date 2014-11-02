{doctype type="xtransitional"}
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
{head_meta}
{head_title}
{head_link href="inner.css" rel="stylesheet"}
{scriptaculous}
{javascript_include_tag name="tiny_mce/tiny_mce.js"}
{javascript_include_tag name="tinymce.js"}
</head>

<body>
<div class="wrapper">
	<div class="topline">
    	<div class="topline_left">
        	&nbsp;
        </div>
        <div class="topline_right">
        	<div class="topline_right_top">
            	&nbsp;
            </div>
            <div class="topline_right_mid">
                        	{link_to class="textstyle8" controller="../admin"}Dashboard{/link_to}&nbsp; <span class="textstyle1">|</span> &nbsp;
                            {link_to class="textstyle8" controller="../admin/projects"}Projects{/link_to}&nbsp; <span class="textstyle1">|</span> &nbsp;
                            {link_to class="textstyle8" controller="../admin/tickets"}Tickets{/link_to}&nbsp; <span class="textstyle1">|</span> &nbsp;
                            {link_to class="textstyle8" controller="../admin/users"}Users{/link_to}&nbsp; <span class="textstyle1">|</span> &nbsp;                           
                            {link_to class="textstyle8" controller="index"}Change Log{/link_to}&nbsp; <span class="textstyle1">|</span> &nbsp;
                            {link_to class="textstyle8" controller="../admin/settings"}Settings{/link_to}
            </div>
            <div class="topline_right_bot">
            {$__WELCOME_MESSAGE} | {link_to class="textstyle9" href="/logout"}Logout{/link_to}
            </div>
        </div>
        <div class="invis"></div>
    </div>
    <div class="midline">
    	<div class="midline_top">
        	&nbsp;
        </div>
        <div class="midline_mid">
         {$content_for_layout}               
        </div>
    </div>
    <div class="botline">
    	<span class="textstyle1">Copyright &copy; 2008. Rex2Check. All Rights Reserved.</span>
    </div>
</div>

</body>
</html>