<div class="titlesnormal">
    <h1>Folio</h1><span></span>
</div>
<span id="show-article">press me to show all articles <span class="arrow">&#9660;</span> </span>
<ul id="article">
<?php foreach ($content as $value):?>
    <li  id="arrayorder_<?php echo $value->id?>"><?php echo $value->id?>:: <?php echo $value->title?>
        <div id="varrow">
        <a href="/fadmin/delete/<?php echo $value->id?>" type="del"></a>
        <a href="/fadmin/edit/<?php echo $value->id?>" type="edit"></a>
        </div>
    </li>
<?php endforeach;?>
</ul>
<form action="" method="post" enctype="multipart/form-data" id="form-article">
    <label>Title</label><input type="text" name="title" /><br />
    <label>Dev. time</label><input type="text" name="dev-time" /><br />
    <label>Platform</label><input type="text" name="platform" /><br />
    <label>Link</label><input type="text" name="link" /><br />
    <label>Description</label><input type="text" name="description" /><br />
    <label></label><input type="file" name="file" /><br />
    <input type="submit" name="send" value="download" />
</form>