<?php 

/**
 * Wordpress Admin Utils
 *
 * @copyright  Copyright © 2011-2012 Jordi Tost
 * @license    http://www.opensource.org/licenses/gpl-2.0.php GNU GPL version 2
 * @version    1.0
 *
 * @Developer Jordi Tost (Follow Me: @jorditost)
 */


///////////////////////
// TinyMCE Functions
///////////////////////

// Action that adds TinyMCE Editor on Post Excerpt

function tinymce_excerpt_js(){ ?>
<script type="text/javascript">
        jQuery(document).ready( tinymce_excerpt );
            function tinymce_excerpt() {
                jQuery("#excerpt").addClass("mceEditor");
                tinyMCE.execCommand("mceAddControl", false, "excerpt");
            }
</script>
<?php }
add_action( 'admin_head-post.php', 'tinymce_excerpt_js');
add_action( 'admin_head-post-new.php', 'tinymce_excerpt_js');

function tinymce_css(){ ?>
<style type='text/css'>
            #postexcerpt .inside{margin:0;padding:0;background:#fff;}
            #postexcerpt .inside p{padding:0px 0px 5px 10px;}
            #postexcerpt #excerpteditorcontainer { border-style: solid; padding: 0; }
</style>
<?php }
add_action( 'admin_head-post.php', 'tinymce_css');
add_action( 'admin_head-post-new.php', 'tinymce_css');
?>