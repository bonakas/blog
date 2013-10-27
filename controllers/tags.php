<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Administrator
 * Date: 24.10.13
 * Time: 10:19
 * To change this template use File | Settings | File Templates.
 */

class tags extends Controller{
	function index()
	{
		$this->tags= get_all("SELECT tag_id, tag_name, COUNT(post_id) AS count
                        FROM post_tags NATURAL JOIN tag
                        GROUP BY tag_id");
        }

}