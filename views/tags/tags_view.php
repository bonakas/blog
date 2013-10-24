/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 24.10.13
 * Time: 23:11
 * To change this template use File | Settings | File Templates.
 */
<div class="span8">
	<?foreach($posts as $post):?>

		<h1><a href="<?=BASE_URL?>posts/view/<?=$post["post_id"]?>"><?=$post['post_subject']?></a></h1>
		<p><?=$post['post_text']?></p>
		<div>
			<span class="badge badge-success"><?=$post['post_created']?></span>
		</div>


		<?foreach ($tags[$post['post_id']] as $tag):?>
			<a href="<?=BASE_URL?>tags/view/<?=$tag[1]?>"><span class="label label-info"><?=$tag[0]?></span></a>
		<?endforeach?>

		<hr>


	<?endforeach?>


</div>