<div class="titlesnormal">
    
    	<h1>LOG IN</h1>
        
        <span></span>
    
    </div>
<div class="boxes-full">
    <div class="boxes-padding fullpadding">
<form action="/log/in" method="post" id="form-login">
    <label>Login</label><input type="text" name="login" /><br />
    <label>Password</label><input type="text" name="password" /><br />
    <label></label><input type="submit" value="Log In" name="send" />
</form>

<?php
    dbg::showPrint($post);
?>
    </div>
</div>