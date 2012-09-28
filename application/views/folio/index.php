<div class="titlesnormal">
    
    	<h1>Portfolio</h1>
        
        <span></span>
    
    </div>

<div class="boxes-full">
    <div class="boxes-padding fullpadding">
            <?php foreach ($content as $value):?>
        <div class="portfoliowrap">
            <div class="title"><?php echo $value->title?><span class="titlearrow"></span></div>
            <div class="portfolioimage">
                <a href="<?php echo $value->link;?>" rel="prettyPhoto" title="Lorem ipsum dolor sit amet">
                    <img src="<?php echo $value->img_s;?>" alt="Lorem ipsum dolor sit amet">
                </a>
            </div>
            <div class="text"><?php echo $value->description;?><span class="textarrow"></span></div>
        </div>
                    
            <?php endforeach;?>

    </div>
</div>
