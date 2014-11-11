{literal}
<script language="javascript">
Event.observe(window, 'load', function(){
    $('username').focus();
});
</script>
{/literal}

{head_link href="main.css" rel="stylesheet"}


{form multipart=true display_error=false}

<div class="login_wrapper">
	<div class="login_topline">
    	<div class="login_headertop">
        	<div class="login_headertopleft">
            	&nbsp;
            </div>
            <div class="login_headertopcenter">
            	&nbsp;
            </div>
            <div class="login_headertopright">
            	&nbsp;
            </div>
        	<div class="invis"></div>
        </div>
        <div class="login_headerbot">
        	&nbsp;
        </div>
    </div>
    <div class="login_midline">
    	<div class="login_midline_left">
        	<a href=""><img src="../images/login_rpluslogo.jpg" border="0" /></a>
        </div>
        <div class="login_midline_right">
        	<div class="titlebar1">
            	<span class="textstyle1">USER LOGIN</span>
            </div>
            <div class="login_content">
            
				<table>
                	<tr>
                    	<td>
                        	Username
                        </td>
                        <td>
                        	{form_text type="text" class="inputbox1" name="username"}
                        </td>
                    </tr>
                    <tr>
                    	<td>
                        	&nbsp;
                        </td>
                        <td>
                        	&nbsp;
                        </td>
                    </tr>
                    <tr>
                    	<td>
                        	Password
                        </td>
                        <td>
                        	{form_password type="password" class="inputbox1" name="password"}
                        </td>
                    </tr>
                    <tr>
                    	<td>
                        	&nbsp;
                        </td>
                        <td>
                        	&nbsp;
                        </td>
                    </tr>
                    <tr>
                    	<td>
                        	&nbsp;
                        </td>
                        <td>
                        	{form_submit name="submit" value="     LOGIN     "}
                        </td>
                    </tr>
                </table>		
			</div>
        </div
        
        {flash}
        {display_errors}
       
    	<div class="invis"></div>
    </div>
    <div class="login_botline">
    	&nbsp;
    </div>
</div>

{/form}