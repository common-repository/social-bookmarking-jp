<?php
/*
Plugin Name: Social Bookmarking JP
Plugin URI: http://sakuratan.biz/contents/social-bookmarking-jp
Description: Social Bookmarking JP plugin embeds links and icons of Hatena Bookmark, Livedoor Clip, Yahoo!JAPAN Bookmark, BuzzURL, Twitter, Tumblr, FC2 Bookmark, newsing, Choix, Google Bookmark, Delicious and Digg to the heading or ending of the post. These are Japanese major social bookmark services (except Delicious and Digg).
Author: sakuratan
Author URI: http://sakuratan.biz/
Version: 0.9.1.4
*/

load_plugin_textdomain( 'social-bookmarking-jp',
			'wp-content/plugins/social-bookmarking-jp/po',
			'social-bookmarking-jp/po' );

global $SOCIAL_BOOKMARKING_JP_BOOKMARKS;

$SOCIAL_BOOKMARKING_JP_BOOKMARKS = array(
    // Hatena Bookmark
    'hatena' => array(
	'label' => __('Hatena', 'social-bookmarking-jp'),
	// http://b.hatena.ne.jp/help/button
	'entry' => array(
	    'link' => 'http://b.hatena.ne.jp/add?mode=confirm&url=@URLENCODED_LINK@',
	    'icon' => 'http://d.hatena.ne.jp/images/b_entry.gif',
	    'cache' => true,
	    'width' => 16,
	    'height' => 12,
	    'alt' => __('Hatena Bookmark for this entry', 'social-bookmarking-jp')
	),
	// http://b.hatena.ne.jp/help/count
	'users' => array(
	    'link' => 'http://b.hatena.ne.jp/entry/@LINK@',
	    'icon' => 'http://b.hatena.ne.jp/entry/image/@LINK@',
	    'alt' => __('Hatena Bookmark - @TITLE@', 'social-bookmarking-jp')
	)
    ),

    // Livedoor Clip
    'livedoor' => array(
	'label' => __('Livedoor Clip', 'social-bookmarking-jp'),
	// http://clip.livedoor.com/guide/blog.html
	'entry' => array(
	    'link' => 'http://clip.livedoor.com/redirect?link=@URLENCODED_LINK@&title=@URLENCODED_BLOGNAME@%20-%20@URLENCODED_TITLE@&ie=utf-8',
	    'icon' => 'http://parts.blog.livedoor.jp/img/cmn/clip_16_16_w.gif',
	    'width' => 16,
	    'height' => 16,
	    'alt' => __('Clip this entry on Livedoor Clip', 'social-bookmarking-jp')
	),
	// http://wiki.livedoor.jp/staff_clip/d/%a5%af%a5%ea%a5%c3%a5%d7%bf%f4%a4%f2%b2%e8%c1%fc%a4%c7%bc%e8%c6%c0%a4%b9%a4%eb%20API
	'users' => array(
	    'link' => 'http://clip.livedoor.com/page/@LINK@',
	    'icon' => 'http://image.clip.livedoor.com/counter/@LINK@',
	    'alt' => __('Livedoor Clip - @TITLE@', 'social-bookmarking-jp')
	)
    ),

    // Yahoo!JAPAN Bookmark
    'yahoo' => array(
	'label' => __('Yahoo!JAPAN Bookmark', 'social-bookmarking-jp'),
	// http://bookmarks.yahoo.co.jp/settings/tools/savelink
	'entry' => array(
	    'link' => 'http://bookmarks.yahoo.co.jp/bookmarklet/showpopup?t=@URLENCODED_TITLE@&u=@URLENCODED_LINK@&ei=UTF-8',
	    'icon' => 'http://i.yimg.jp/images/sicons/ybm16.gif',
	    'width' => 16,
	    'height' => 16,
	    'alt' => __('Bookmark this on Yahoo Bookmark', 'social-bookmarking-jp')
	),
	// http://bookmarks.yahoo.co.jp/settings/tools/numlink
	'users' => array(
	    'script' => '<script src="http://num.bookmarks.yahoo.co.jp/numimage.js?disptype=small"></script>'
	)
    ),

    // BuzzURL
    'buzzurl' => array(
	'label' => __('BuzzURL', 'social-bookmarking-jp'),
	// http://buzzurl.jp/icongenerator
	'entry' => array(
	    'link' => 'http://buzzurl.jp/entry/@LINK@',
	    'icon' => 'http://buzzurl.jp.eimg.jp/static/image/api/icon/add_icon_mini_01.gif',
	    'alt' => __('Bookmark this on BuzzURL', 'social-bookmarking-jp')
	),
	'users' => array(
	    'link' => 'http://buzzurl.jp/entry/@LINK@',
	    'icon' => 'http://api.buzzurl.jp/api/counter/@LINK@',
	    'alt' => __('Bookmark this on BuzzURL', 'social-bookmarking-jp')
	)
    ),

    // Nifty Clip
    'nifty' => array(
	'label' => __('@nifty clip', 'social-bookmarking-jp'),
	// http://clip.nifty.com/help/cat3/post_11.html
	'entry' => array(
	    'link' => 'http://clip.nifty.com/create?url=@URLENCODED_LINK@&title=@URLENCODED_TITLE@',
	    'icon' => 'http://clip.nifty.com/images/addclip_icn.gif',
	    'width' => 16,
	    'height' => 16,
	    'alt' => __('Add to @nifty clip', 'social-bookmarking-jp')
	),
	// http://clip.nifty.com/help/cat3/post_8.html
	'users' => array(
	    //'link' => 'http://clip.nifty.com/create?url=@URLENCODED_LINK@&title=@URLENCODED_TITLE@',
	    'icon' => 'http://api.clip.nifty.com/api/v1/image/counter/@LINK@',
	    'alt' => __('@nifty clip for this web page', 'social-bookmarking-jp')
	)
    ),

    // Twitter
    'twitter' => array(
	'label' => __('Twitter', 'social-bookmarking-jp'),
	'entry' => array(
	    'link' => 'http://twitter.com/home?status=@URLENCODED_TITLE@%20@URLENCODED_LINK@',
	    'icon' => WP_PLUGIN_URL . '/social-bookmarking-jp/twitter.gif',
	    'width' => 16,
	    'height' => 16,
	    'alt' => __('Post to Twitter', 'social-bookmarking-jp')
	),
	// http://tweetbuzz.jp/static/imgcounter
	'users' => array(
	    'link' => 'http://tweetbuzz.jp/redirect?url=@LINK@',
	    'icon' => 'http://tools.tweetbuzz.jp/imgcount?url=@LINK@',
	    'alt' => __('Tweets for this web page', 'social-bookmarking-jp')
	)
    ),

    // Tumblr
    'tumbrl' => array(
	'label' => __('Tumblr', 'social-bookmarking-jp'),
	// http://www.tumblr.com/goodies
	'entry' => array(
	    'link' => 'http://www.tumblr.com/share?v=3&u=@URLENCODED_LINK@&t=@URLENCODED_TITLE@&s=',
	    'icon' => WP_PLUGIN_URL . '/social-bookmarking-jp/tumblr.gif',
	    'width' => 16,
	    'height' => 16,
	    'alt' => __('Share on Tumblr', 'social-bookmarking-jp')
	)
    ),

    // FC2 Bookmark
    'fc2' => array(
	'label' => __('FC2 Bookmark', 'social-bookmarking-jp'),
	// http://bookmark.fc2.com/faq
	'entry' => array(
	    'link' => 'http://bookmark.fc2.com/user/post?url=@URLENCODED_LINK@&@URLENCODED_TITLE@',
	    'icon' => 'http://bookmark.fc2.com/images/add-16.gif',
	    'width' => 16,
	    'height' => 16,
	    'alt' => __('Bookmark this on FC2 Bookmark', 'social-bookmarking-jp')
	)
    ),

    // newsing
    'newsing' => array(
	'label' => __('newsing', 'social-bookmarking-jp'),
	// http://newsing.jp/about/buttonhelp
	'entry' => array(
	    'link' => 'http://newsing.jp/nbutton?title=@URLENCODED_TITLE@&url=@URLENCODED_LINK@',
	    'icon' => 'http://image.newsing.jp/common/images/newsingit/newsingit_s.gif',
	    'width' => 16,
	    'height' => 16,
	    'alt' => __('newsing it!', 'social-bookmarking-jp')
	)
    ),

    // Choix
    'choix' => array(
	'label' => __('Choix', 'social-bookmarking-jp'),
	// http://www.choix.jp/whatchoix/linkbutton
	'entry' => array(
	    'link' => 'http://www.choix.jp/bloglink/@LINK@',
	    'icon' => 'http://www.choix.jp/img/choix_it.gif',
	    'width' => 16,
	    'height' => 16,
	    'alt' => __('Choix it!', 'social-bookmarking-jp')
	)
    ),

    // Google Bookmark
    'google' => array(
	'label' => __('Google Bookmark', 'social-bookmarking-jp'),
	'entry' => array(
	    'link' => 'http://www.google.com/bookmarks/mark?op=edit&bkmk=@URLENCODED_LINK@&title=@URLENCODED_TITLE@',
	    'icon' => WP_PLUGIN_URL . '/social-bookmarking-jp/google.gif',
	    'width' => 16,
	    'height' => 16,
	    'alt' => __('Add to Google Bookmark', 'social-bookmarking-jp')
	)
    ),

    // Delicious
    'delicious' => array(
	'label' => __('Delicious', 'social-bookmarking-jp'),
	// http://delicious.com/help/savebuttons
	'entry' => array(
	    'link' => 'http://delicious.com/save?url=@URLENCODED_LINK@&title=@URLENCODED_TITLE@',
	    'icon' => 'http://static.delicious.com/img/delicious.16.gif',
	    'width' => 16,
	    'height' => 16,
	    'alt' => __('Bookmark this on Delicious', 'social-bookmarking-jp')
	)
    ),

    // Digg
    'digg' => array(
	'label' => __('Digg', 'social-bookmarking-jp'),
	// http://digg.com/tools/integrate
	'entry' => array(
	    'link' => 'http://digg.com/submit?url=@URLENCODED_LINK@&title=@URLENCODED_TITLE@',
	    // http://digg.com/tools/buttons
	    'icon' => 'http://digg.com/img/badges/16x16-digg-guy.gif',
	    'cache' => true,
	    'width' => 16,
	    'height' => 16,
	    'alt' => __('Digg This', 'social-bookmarking-jp')
	)
    ),

    // Friend feed
    'friendfeed' => array(
	'label' => __('FriendFeed', 'social-bookmarking-jp'),
	// http://friendfeed.com/about/help
	// http://friendfeed.com/embed/link
	'entry' => array(
	    'link' => 'http://friendfeed.com/?url=@URLENCODED_LINK@&title=@URLENCODED_TITLE@',
	    'icon' => 'http://friendfeed.com/static/images/icons/internal.png',
	    'width' => 16,
	    'height' => 16,
	    'alt' => __('Share on FriendFeed', 'social-bookmarking-jp')
	)
    )
);

global $SOCIAL_BOOKMARKING_JP_UPLOAD_DIR, $SOCIAL_BOOKMARKING_JP_UPLOAD_URL;
$SOCIAL_BOOKMARKING_JP_UPLOAD_DIR = NULL;
$SOCIAL_BOOKMARKING_JP_UPLOAD_URL = NULL;

function social_bookmarking_jp_get_options() {
    global $SOCIAL_BOOKMARKING_JP_BOOKMARKS;
    $defaults = array(
	'bookmarks' => array_keys( $SOCIAL_BOOKMARKING_JP_BOOKMARKS ),
	'bookmark_position' => 'head',
	'links_on_list' => true,
	'display_users' => true,
	'disable_pages' => false
    );
    return array_merge( $defaults,
			get_option( 'social-bookmarking-jp-options', array() ) );
}

function social_bookmarking_jp_setup_upload_dir() {
    global $SOCIAL_BOOKMARKING_JP_UPLOAD_DIR,
	   $SOCIAL_BOOKMARKING_JP_UPLOAD_URL;

    $upload = wp_upload_dir();
    if ( $upload['error'] )
	return false;
    $dir = "{$upload['basedir']}/social-bookmarking-jp";
    if ( !is_dir( $dir ) ) {
	if ( !wp_mkdir_p( $dir ) )
	    return false;
    }
    $SOCIAL_BOOKMARKING_JP_UPLOAD_DIR = $dir;
    $SOCIAL_BOOKMARKING_JP_UPLOAD_URL = "{$upload['baseurl']}/social-bookmarking-jp";
    return true;
}

function social_bookmarking_jp_get_cache_filename( $data ) {
    if ( $data['cache'] === true ) {
	return preg_replace( ',^.*/,', '', $data['icon'] );
    } elseif ( $data['cache'] ) {
	return $data['cache'];
    } else {
	return false;
    }
}

function social_bookmarking_jp_get( $url, $path ) {
    $res = wp_remote_get( $url );
    if ( $res['response']['code'] != 200 )
	return false;

    $fh = fopen( $path, 'wb' );
    if ( !$fh )
	return false;
    fwrite( $fh, $res['body'] );
    fclose( $fh );
    return true;
}

function social_bookmarking_jp_sync_icons() {
    if ( !social_bookmarking_jp_setup_upload_dir() )
	return;

    global $SOCIAL_BOOKMARKING_JP_BOOKMARKS, $SOCIAL_BOOKMARKING_JP_UPLOAD_DIR;

    foreach ( $SOCIAL_BOOKMARKING_JP_BOOKMARKS as $key => $data ) {
	if ( array_key_exists( 'cache', $data['entry'] ) &&
	     $data['entry']['cache'] ) {
	    $path = $SOCIAL_BOOKMARKING_JP_UPLOAD_DIR . '/' .
		social_bookmarking_jp_get_cache_filename( $data['entry'] );
	    if ( !file_exists( $path ) )
		social_bookmarking_jp_get( $data['entry']['icon'], $path );
	}
    }
}

function social_bookmarking_jp_link_tag( &$repl, $attrs ) {
    global $SOCIAL_BOOKMARKING_JP_UPLOAD_URL;

    $code = '';
    if ( array_key_exists( 'link', $attrs )) {
	$link = htmlspecialchars( strtr( $attrs['link'], $repl ) );
	$code .= "<a href=\"{$link}\"";
	if ( array_key_exists( 'alt', $attrs ) ) {
	    $_alt = htmlspecialchars( strtr( $attrs['alt'], $repl ) );
	    $code .= " title=\"{$_alt}\"";
	}
	$code .= ' rel="nofollow" target="_blank">';
    }
    $code .= '<img src="';
    $filename = social_bookmarking_jp_get_cache_filename( $attrs );
    if ( $filename ) {
	$code .= htmlspecialchars( $SOCIAL_BOOKMARKING_JP_UPLOAD_URL );
	$code .= '/';
	$code .= htmlspecialchars( $filename );
    } else {
	$code .= htmlspecialchars( strtr( $attrs['icon'], $repl ) );
    }
    $code .= '"';
    if ( array_key_exists( 'alt', $attrs ) ) {
	$code .= " alt=\"{$_alt}\"";
	$code .= " title=\"{$_alt}\"";
    }
    if ( array_key_exists( 'width', $attrs ) ) {
	$code .= " width=\"{$attrs['width']}\"";
    }
    if ( array_key_exists( 'height', $attrs ) ) {
	$code .= " height=\"{$attrs['height']}\"";
    }
    $code .= ' border="0" style="border:0" />';
    if ( array_key_exists( 'link', $attrs )) {
	$code .= '</a>';
    }
    return $code;
}

function social_bookmarking_jp_the_content_filter( $content ) {
    if ( is_feed() || is_404() || is_robots() || is_comments_popup() ||
	 ( function_exists( 'is_ktai' ) && is_ktai() ) ) {
	return $content;
    }

    global $SOCIAL_BOOKMARKING_JP_BOOKMARKS;
    extract( social_bookmarking_jp_get_options() );

    if ( !$links_on_list && !is_singular() ) {
	return $content;
    }

    if ( $disable_pages && is_page() ) {
	return $content;
    }

    if ( !social_bookmarking_jp_setup_upload_dir() ) {
	return $content;
    }

    $repl = array();
    $repl['@LINK@'] = get_permalink();
    $repl['@TITLE@'] = get_the_title();
    $repl['@BLOGNAME@'] = get_bloginfo( 'name' );

    $charset = get_settings( 'blog_charset' );
    if ( strcasecmp( $charset, 'UTF-8' ) != 0 &&
	 function_exists( 'mb_convert_encoding' ) ) {
	$repl['@TITLE@'] = mb_convert_encoding( $title, 'UTF-8', $charset );
	$repl['@BLOGNAME@'] = mb_convert_encoding( $blogname, 'UTF-8', $charset );
    }

    foreach ( $repl as $key => $value ) {
	$newkey = '@URLENCODED_' . substr( $key, 1 );
	$repl[$newkey] = rawurlencode( $repl[$key] );
    }

    $preview = array_key_exists( 'preview', $_REQUEST );
    $code = '';
    foreach ( $bookmarks as $name ) {
	$data =& $SOCIAL_BOOKMARKING_JP_BOOKMARKS[$name];

	if ( $code != '' )
	    $code .= ' ';
	$code .= '<span class="bookmark_entry">';
	$code .= social_bookmarking_jp_link_tag( $repl, $data['entry'] );
	$code .= '</span>';

	if ( $display_users && !$preview && array_key_exists( 'users', $data ) ) {
	    $code .= '<span class="bookmark_users" style="padding-left:2px">';
	    if ( array_key_exists( 'script', $data['users'] ) ) {
		$code .= $data['users']['script'];
	    } else {
		$code .= social_bookmarking_jp_link_tag( $repl, $data['users'] );
	    }
	    $code .= '</span>';
	}
    }

    if ( $code == '' ) {
	return $content;
    }

    if ( $bookmark_position == 'tail' ) {
	return "{$content}<div class=\"bookmark\">{$code}</div>";
    } else {
	return "<div class=\"bookmark\">{$code}</div>{$content}";
    }
}

function social_bookmarking_jp_options_page() {
    global $SOCIAL_BOOKMARKING_JP_BOOKMARKS;

    social_bookmarking_jp_sync_icons();

    if ( array_key_exists( 'social-bookmarking-jp-update', $_POST ) ) {
	$opts = array(
	    'bookmarks' => explode(',', $_POST['bookmarks'] ),
	    'bookmark_position' => $_POST['bookmark_position'],
	    'links_on_list' => array_key_exists( 'links_on_list', $_POST ),
	    'display_users' => array_key_exists( 'display_users', $_POST ),
	    'disable_pages' => array_key_exists( 'disable_pages', $_POST )
	);
	update_option( 'social-bookmarking-jp-options', $opts );
	echo '<div class="updated"><p><strong>';
	_e( 'Options saved.', 'social-bookmarking-jp'  );
	echo '</strong></p></div>';
    } else {
	$opts = social_bookmarking_jp_get_options();
    }

    extract( $opts );
?>

<h2>Social Bookmarking JP Options</h2>

<script type="text/javascript">
//<!--

function social_bookmarking_jp_reset_bookmarks(form) {
    var s = '';
    var sep = '';
    for (var i = 0; i < form.active.options.length; ++i) {
	s += sep;
	s += form.active.options[i].value;
	if (!sep)
	    sep = ',';
    }
    form.bookmarks.value = s;
}

function social_bookmarking_jp_move_option(selFrom, selTo) {
    for (var i = 0; i < selFrom.options.length;) {
	if (selFrom.options[i].selected) {
	    var opt = document.createElement('option');
	    opt.value = selFrom.options[i].value;
	    opt.innerHTML = selFrom.options[i].innerHTML;
	    selTo.appendChild(opt);
	    selFrom.remove(i);
	} else {
	    ++i;
	}
    }
}

function social_bookmarking_jp_selection_up(sel) {
    var i = 0;
    for (; i < sel.options.length; ++i) {
	if (!sel.options[i].selected)
	    break;
    }
    for (; i < sel.options.length; ++i) {
	if (sel.options[i].selected) {
	    var opt = sel.options[i];
	    sel.removeChild(opt);
	    sel.insertBefore(opt, sel.options[i-1]);
	}
    }
}

function social_bookmarking_jp_selection_down(sel) {
    var i = sel.options.length - 1;
    for (; i >= 0; --i) {
	if (!sel.options[i].selected)
	    break;
    }
    for (; i >= 0; --i) {
	if (sel.options[i].selected) {
	    var opt = sel.options[i];
	    sel.removeChild(opt);
	    sel.insertBefore(opt, sel.options[i+1]);
	}
    }
}

//-->
</script>

<form method="post" onsubmit="social_bookmarking_jp_reset_bookmarks(this); return true">

<table>
<tr>
<th><?php _e('Visible', 'social-bookmarking-jp') ?></th>
<th>&nbsp;</th>
<th><?php _e('Hide', 'social-bookmarking-jp') ?></th>
</tr>
<tr>
<td>
<input type="hidden" name="bookmarks" value="<?php echo implode(',', $bookmarks) ?>" />
<select name="active" multiple="multiple" size="5" style="height:10em;width:15em">
<?php foreach ( $bookmarks as $b ) { ?>
    <option value="<?php echo $b; ?>"><?php echo $SOCIAL_BOOKMARKING_JP_BOOKMARKS[$b]['label'] ?></option>
<?php } ?>
</select>
</td>
<td align="center">
<input type="button" value="<?php _e('Del', 'social-bookmarking-jp') ?>" style="width:4em" onclick="social_bookmarking_jp_move_option(this.form.active, this.form.inactive)" />
<input type="button" value="<?php _e('Add', 'social-bookmarking-jp') ?>" style="width:4em" onclick="social_bookmarking_jp_move_option(this.form.inactive, this.form.active)" />
</td>
<td align="center">
<select name="inactive" multiple="multiple" size="5" style="height:10em;width:15em">
<?php foreach ( array_keys( $SOCIAL_BOOKMARKING_JP_BOOKMARKS ) as $b ) { ?>
    <?php if ( !in_array( $b, $bookmarks ) ) { ?>
	<option value="<?php echo $b; ?>"><?php echo $SOCIAL_BOOKMARKING_JP_BOOKMARKS[$b]['label'] ?></option>
    <?php } ?>
<?php } ?>
</tr>
<tr>
<td align="center">
<input type="button" value="<?php _e('Up', 'social-bookmarking-jp') ?>" onclick="social_bookmarking_jp_selection_up(this.form.active)" />
<input type="button" value="<?php _e('Down', 'social-bookmarking-jp') ?>" onclick="social_bookmarking_jp_selection_down(this.form.active)" />
</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</table>

<p><?php _e( 'Select position of the social bookmark links:', 'social-bookmarking-jp' ); ?>
<select name="bookmark_position">
    <option value="head" <?php if ( $bookmark_position != 'tail' ) echo 'selected="selected"'; ?> /><?php _e( 'heading of the post', 'social-bookmarking-jp' ); ?></option>
    <option value="tail" <?php if ( $bookmark_position == 'tail' ) echo 'selected="selected"'; ?> /><?php _e( 'bottom of the post', 'social-bookmarking-jp' ); ?></option>
</select>
</p>

<p><input type="checkbox" name="links_on_list" id="links_on_list" value="1" <?php if ( $links_on_list ) echo 'checked="checked"'; ?> />
<label for="links_on_list"><?php _e( 'Display social bookmark links on home, category, tags and other listing page.', 'social-bookmarking-jp' ); ?></label></p>

<p><input type="checkbox" name="display_users" id="display_users" value="1" <?php if ( $display_users ) echo 'checked="checked"'; ?> />
<label for="display_users"><?php _e( 'Display the number of bookmarked users. (This option is available for Hatena bookmark, livedoor clip, Yahoo!JAPAN Bookmark, buzzurl, @nifty clip and Twitter.)', 'social-bookmarking-jp' ); ?></label></p>
<p><input type="checkbox" name="disable_pages" id="disable_pages" value="1" <?php if ( $disable_pages ) echo 'checked="checked"'; ?> />
<label for="disable_pages"><?php _e( 'Hide the Social Bookmarking JP plugin on pages.' ) ?></label>

<p class="submit"><input type="submit" class="button-primary"  name="social-bookmarking-jp-update" value="<?php _e( 'Save Changes', 'social-bookmarking-jp' ); ?>" /></p>

</form>

<?php
}

function social_bookmarking_jp_admin_notices() {
    if ( !social_bookmarking_jp_setup_upload_dir() ) {
	echo '<div class="error"><p><strong>';
	_e( 'ERROR: Failed to initialize the Social Bookmarking JP plugin. The WordPress does not have writing and/or executing permissions for wp-content/uploads directory. Please check the configuration.', 'social-bookmarking-jp' );
	echo '</strong></p></div>';
    }
}

function social_bookmarking_jp_admin_menu_action() {
    if ( function_exists('add_options_page') ) {
	add_options_page( 'Social Bookmarking JP Options',
			  'Social Bookmarking JP', 'manage_options',
			  __FILE__, 'social_bookmarking_jp_options_page' );
    }
}

function social_bookmarking_jp_init() {
    add_action( 'admin_notices', 'social_bookmarking_jp_admin_notices' );
    add_action( 'admin_menu', 'social_bookmarking_jp_admin_menu_action' );
    add_filter( 'the_content', 'social_bookmarking_jp_the_content_filter' );
}

add_action( 'init', 'social_bookmarking_jp_init' );

function social_bookmarking_jp_activation() {
    social_bookmarking_jp_sync_icons();
}

register_activation_hook( __FILE__, 'social_bookmarking_jp_activation' );

function social_bookmarking_jp_uninstall() {
    $upload = wp_upload_dir();
    if ( $upload['error'] )
	return false;
    $dir = "{$upload['basedir']}/social-bookmarking-jp";
    if ( !is_dir( $dir ) )
	return;

    $dh = opendir( $dir );
    if ( !$dh )
	return;
    while ( ( $file = readdir( $dh ) ) !== false ) {
	unlink( "{$dir}/{$file}" );
    }
    closedir( $dh );
    rmdir( $dir );
}

register_uninstall_hook( __FILE__, 'social_bookmarking_jp_uninstall' );

?>
