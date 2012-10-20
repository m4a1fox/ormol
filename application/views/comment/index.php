<div class="titlesnormal">
    <h1>Comment</h1>
    <span></span>
</div>
<div class="leftsection">
<?php foreach ($comments as $val):?>
<div class="blogcomment">
    <div class="blogwcommentwrap">
        <div class="commenttitle">
            <p>
                <span class="avatarname"><?php echo $val->name;?></span>
                <span class="avatardate">On: <span class="avatardateorange"><?php echo $val->date;?></span></span>
                <span class="avatarreply"><a href="#" title="reply">Reply</a></span>
            </p>
        </div>
        <div class="commentuser"><img src="<?php echo M4A1_HOST;?>public/img/avatar.jpg" alt="John Doe"></div>
        <div class="commenttext">
            <?php echo $val->comment;?>
        </div>
        <span class="box-arrow"></span>
    </div>
</div>
<?php endforeach;?>
<br />
<?php  echo $number;?>
<div class="blogcomment">
    <div class="blogwcommentwrap2">
        <div class="blogcommentform">
            <form action="" method="post" name="comment">
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
                    <img src="<?php echo M4A1_HOST?>usefull/magic" id="captcha" name="code" style="float: left;">
                    <input type="text" name="captcha" value="" placeholder="code" style="width: 100px;" />
                    <span id="refresh-captcha"></span>
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
</div>

<div class="rightsection">
        
        	<!-- Start Blog Widget -->
            <div class="blogwidget">
            	<!-- Start Categories Widget -->
            	<div class="widgettitle"><h4>Blog Categories</h4></div>
                
                <div class="widgetbody">
                
                	<div class="blogcategories">
                    
                    	<ul>
                        	<li><a href="#" title="All Blogs">All Blogs</a></li>
                            <li><a href="#" title="All Blogs">Lorem ipsum dolor sit</a></li>
                            <li><a href="#" title="All Blogs">Maecenas non ipsum </a></li>
                            <li><a href="#" title="All Blogs">Lorem ipsum dolor sit</a></li>
                            <li><a href="#" title="All Blogs">Maecenas non ipsum </a></li>
                            <li><a href="#" title="All Blogs">Lorem ipsum dolor sit</a></li>
                            <li><a href="#" title="All Blogs">Maecenas non ipsum </a></li>
                            <li><a href="#" title="All Blogs">Lorem ipsum dolor sit</a></li>
                            <li><a href="#" title="All Blogs">Maecenas non ipsum </a></li>
                            <li><a href="#" title="All Blogs">Lorem ipsum dolor sit</a></li>
                            <li><a href="#" title="All Blogs">Maecenas non ipsum </a></li>
                            <li><a href="#" title="All Blogs">Lorem ipsum dolor sit</a></li>
                            <li><a href="#" title="All Blogs">Maecenas non ipsum </a></li>                            
                        </ul>
                    
                    </div>
                
              </div>
              <!-- End Categories Widget -->
              <span class="box-arrow"></span>
            
            </div>
            <!-- End Blog Widget -->
            
        	<!-- Start Blog Widget -->
            <div class="blogwidget">
            	<!-- Start Categories Widget -->
            	<div class="widgettitle"><h4>Top 5 Blog Posts</h4></div>
                
                <div class="widgetbody">
                
                	<div class="blogcategories">
                    
                    	<ul>
                        	<li><a href="#" title="All Blogs">Maecenas non ipsum nunc</a></li>
                            <li><a href="#" title="All Blogs">Lorem ipsum dolor </a></li>
                            <li><a href="#" title="All Blogs">Maecenas non ipsum </a></li>
                            <li><a href="#" title="All Blogs">Lorem ipsum dolor sit</a></li>
                            <li><a href="#" title="All Blogs">Maecenas non ipsum nunc</a></li>                        
                        </ul>
                    
                    </div>
                
              </div>
              <!-- End Categories Widget -->
              <span class="box-arrow"></span>
            
            </div>
            <!-- End Blog Widget -->
        
        </div>