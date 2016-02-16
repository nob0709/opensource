
<!--タイトル字数制限出力-->
<?php if(mb_strlen($post->post_title)>10) { $title= mb_substr($post->post_title,0,20) ; echo $title. ･･･ ;
} else {echo $post->post_title;}?>

<!--コンテンツ字数制限出力-->
<?php if(mb_strlen($post->post_content)>10) { $title= mb_substr($post->post_content,0,20) ; echo $title. ･･･ ;
} else {echo $post->post_content;}?>

<!--URLで表示を変える。wordpressでなくともphp環境で-->
<?php
	$url = $_SERVER['REQUEST_URI'];
	if(strstr($url,'news')):
?>
		<h2 class="h2 title_main  bold thin marginb30">News</h2>
<?php else:?>
		<h2 class="h2 title_main  bold thin marginb30">Blog</h2>
<?php endif;?>	
