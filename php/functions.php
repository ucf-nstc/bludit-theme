<?php
// Extend Theme calss from bludit to support my preferences
class CustomTheme extends Theme {
	// Todo
}

// Route to correct php template
function route($url) {
	$url = THEME_DIR_PHP . $url . '.php';
	if (file_exists($url)) {
		include_once($url);
	}
	else {
		echo '<p class="404">This page does not exist</p>';
	}
}

// Return page content
function page_content($page) {
	global $pages;
	return $pages[$page]->vars['content'];
}

// Return page cover image url
function page_cover_image($page) {
	global $pages;
	$url;
	$url = HTML_PATH_THEME 
		   . 'public/img/' 
		   . $pages[$page]->vars['coverImage'];
	return $url;
}