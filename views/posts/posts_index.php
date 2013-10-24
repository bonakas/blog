<ul>
	<?foreach($posts as $post):?>
	<div class="span8">
		<h1><a href="<?=BASE_URL?>posts/view/<?=$post["post_id"]?>"><?=$post['post_subject']?></a></h1>
		<p><?=$post['post_text']?></p>
		<div>
			<span class="badge badge-success"><?=$post['post_created']?></span><div class="pull-right"><span class="label">alice</span> <span class="label">story</span> <span class="label">blog</span> <span class="label">personal</span></div>

		</div>
		<?foreach ($tags[$post['post_id']] as $tag):?>
			<a href="<?=BASE_URL?>tags/view/<?=$tag[1]?>"><span class="label label-info"><?=$tag[0]?></span></a>
		<?endforeach?>
		<hr>
		<?endforeach?>
</ul>