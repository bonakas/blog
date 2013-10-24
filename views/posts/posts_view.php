<div class="span8">
    <h1><?=$post['post_subject']?></h1>
<p><?=$post['post_text']?></p>
<div>
	<span class="badge badge-success"><?=$post['post_created']?></span>
</div>
	<?foreach ($tags as $tag):?><a href="#"><span class="label label-info"><?=$tag['tag_name']?></a><?endforeach?>
	<hr>
</div>