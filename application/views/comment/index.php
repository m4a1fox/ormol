<div class="titlesnormal">
    <h1>Comment</h1>
    <span></span>
</div>

<div class="boxes-full">
    <div class="boxes-padding fullpadding">
        Comment page
    </div>
</div>

<div class="blogcomment">
    <div class="blogwcommentwrap2">
        <div class="blogcommentform">
            <form action="" method="post" enctype="multipart/form-data" name="comment">
                <fieldset>
                    <input type="text" name="name" placeholder="Имя" />
                    <input type="hidden" name="date" value="<?php echo date("Y-m-d");?>" />
                    <span id="error"><?php echo isset($name) ? $name : NULL;?></span>
                </fieldset>
                <fieldset>
                    <textarea name="comment" cols="5" rows="5" placeholder="Текст"></textarea>
                    <span id="error"><?php echo isset($comment) ? $comment : NULL;?></span>
                </fieldset>
                <fieldset>
                    <img src="<?php echo M4A1_HOST?>usefull/captcha" style="float: left;">
                    <input type="text" name="captcha" value="" placeholder="code" style="width: 100px;" />
                    <span id="error"><?php echo isset($captcha) ? $captcha: NULL;?></span>
                </fieldset>
                <fieldset class="commentbutton_fieldset">
                    <input name="submit" type="submit" value="Submit" class="commentbutton">
                </fieldset>
            </form>
        </div>
        <span class="box-arrow"></span>
    </div>
</div>




<?php

    function getFilePath($folder){
        $fullPath = NULL;
        
        $dir = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($folder), TRUE);
        while($dir->valid()) {

                $fullPath[] = $dir->key();
            
            $dir->next();
        }
        return $fullPath;
    }
    
    echo '<pre>'.print_r(getFilePath('./file/'), 1).'</pre>';


    
    echo '<pre>'.print_r(glob('./file/*.png'), 1).'</pre>';
    echo '<pre>'.print_r(glob('./file/*.png'), 1).'</pre>';

?>