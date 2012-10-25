<?php
    if(!Session::get('login'))
        header("Location: /");
?>
<div class="titlesnormal">
    <h1>Admin</h1><span></span>
</div>
<span id="show-article">press me to show all articles <span class="arrow">&#9660;</span></span>
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
<form action="/admin/add" method="post" id="form-article">
    <label>Title</label><input type="text" name="title" /><br />
    <label>Link</label><input type="text" name="link" /><br />
    <label>Tags</label><input type="text" name="tag" /><br />
    <label>KeyWords</label><input type="text" name="meta_k" /><br />
    <label>Description</label><input type="text" name="meta_d" /><br />
    <label id="label-content">Content</label><textarea name="content" id="text"></textarea><br />
    <label></label><input type="date" name="date" />
    <input type="time" name="time" value="<?php echo date("H:i:s"); ?>" />
    <input type="submit" name="send" value="ok" />
</form>
<script type="text/javascript">

</script>