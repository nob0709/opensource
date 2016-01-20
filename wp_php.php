
<!--タイトル字数制限出力-->
<?php if(mb_strlen($post->post_title)>10) { $title= mb_substr($post->post_title,0,20) ; echo $title. ･･･ ;
} else {echo $post->post_title;}?>

<!--コンテンツ字数制限出力-->
<?php if(mb_strlen($post->post_content)>10) { $title= mb_substr($post->post_content,0,20) ; echo $title. ･･･ ;
} else {echo $post->post_content;}?>
