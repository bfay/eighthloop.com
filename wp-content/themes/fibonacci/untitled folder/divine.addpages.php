<?php

class DivineAddPages {
	private function DBString($string) {
		return str_replace(array("'", "\\"), array("''", "\\\\"), $string);
	}
	
	
	public function Add($link, $title, $content, $comments = true) {
		list($post_id) = mysql_fetch_row(mysql_query("SELECT ID FROM wp_posts WHERE post_name = '{$this->DBString($link)}' LIMIT 1"));
		
		$comment_status = $comments ? 'open' : 'closed';
		
		if(!$post_id) {
			mysql_query("
				INSERT wp_posts
				SET
					post_name = '{$this->DBString($link)}',
					post_title = '{$this->DBString($title)}',
					post_content = '{$this->DBString($content)}',
					post_status = 'publish',
					comment_status = '{$comment_status}',
					post_author = 1,
					post_date = NOW(),
					post_date_gmt = NOW(),
					post_modified = NOW(),
					post_modified_gmt = NOW(),
					post_type = 'page'
			");
		} else {
			mysql_query("
				UPDATE wp_posts
				SET
					post_name = '{$this->DBString($link)}',
					post_title = '{$this->DBString($title)}',
					post_content = '{$this->DBString($content)}',
					post_status = 'publish',
					comment_status = '{$comment_status}',
					post_author = 1,
					post_date = NOW(),
					post_date_gmt = NOW(),
					post_modified = NOW(),
					post_modified_gmt = NOW(),
					post_type = 'page'
				WHERE
					ID = {$post_id}
			");
		}
	}
	
	public function Link($link) {
		if(in_array('mod_rewrite', apache_get_modules())) {
			return get_bloginfo('url').'/'.$link;
		} else {
			list($post_id) = mysql_fetch_row(mysql_query("SELECT ID FROM wp_posts WHERE post_name = '{$this->DBString($link)}' LIMIT 1"));
			return get_bloginfo('url').'/?p='.$post_id;
		}
	}
	
	public function SetPermalinksOption() {	
		mysql_query("UPDATE wp_options SET option_value = '/%post_id%' WHERE option_name = 'permalink_structure'");
	}
	
	
	public function DivineAddPages() {
		$this->SetPermalinksOption();
	}
}

$div_ap = new DivineAddPages();

?>
