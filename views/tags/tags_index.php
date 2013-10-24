/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 24.10.13
 * Time: 10:27
 * To change this template use File | Settings | File Templates.
 */
<div class="list-group">
    <? foreach ($tags as $tag): ?>
	<a href="<?= BASE_URL ?>/tags/view/<?= $tag['tag_id'] ?>" class="list-group-item"><?= $tag['tag_name'] ?></a>
<? endforeach ?>
</div>
