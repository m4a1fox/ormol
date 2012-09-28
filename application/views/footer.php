</div>
</div>
<div id="footer">
    <div id="footerbottom">
    	<div class="footerwrap">
            <div class="socialfooter">
                <?php if(Session::get('login')):?>
                <ul>
                <li><a href="<?php echo M4A1_HOST;?>admin" class="admin-admin"></a></li>
                <li><a href="<?php echo M4A1_HOST;?>fima" class="admin-fima"></a></li>
                <li><a href="<?php echo M4A1_HOST;?>ladmin" class="admin-ladmin"></a></li>
                <li><a href="<?php echo M4A1_HOST;?>fadmin" class="admin-fadmin"></a></li>
                <li><a href="<?php echo M4A1_HOST;?>cadmin" class="admin-cadmin"></a></li>
                <li><a href="<?php echo M4A1_HOST;?>editor" class="admin-editor"></a></li>
                <li><a href="<?php echo M4A1_HOST;?>log/out" class="admin-logout"></a>/li>
                </ul>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>