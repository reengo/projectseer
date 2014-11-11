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
            {if $__USER_LEVEL eq 1}
                {include file="../../global/admin_nav.tpl"}            
            	{if $__USER_LEVEL eq 3}
            		{include file="../../global/pm_nav.tpl"}
            		{if $__USER_LEVEL eq 4}
            			{include file="../../global/qa_nav.tpl"}
            			{if $__USER_LEVEL eq 5}
            				{include file="../../global/dev_nav.tpl"}
            				{if $__USER_LEVEL eq 6}
            					{include file="../../global/marketing_nav.tpl"}
	    					{else}
	    						{include file="../../global/guest_nav.tpl"}
	    					{/if}
	    				{/if}
    				{/if}
    			{/if}
    		{/if}
            </div>
            <div class="topline_right_bot">
            {$__WELCOME_MESSAGE} | {if $__USER_LEVEL eq 1}{link_to class="textstyle9" controller="settings"}Settings{/link_to} | {/if}{link_to class="textstyle9" href="/logout"}Logout{/link_to}
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