<?php

class cwToc {

	public static function childPagesList() {
		$currentPageId = get_the_ID();
		return wp_list_pages(array('echo'=>false, 'child_of'=> $currentPageId, 'post_status'=>array('publish', 'private'), 'title_li'=>''));
	}

}
?>