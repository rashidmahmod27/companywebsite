<?php 
$buffer   = file_get_contents( "messages.xml" );
$xml = simplexml_load_string( $buffer );
$count = json_decode($_GET['id']);
echo '<div class="name"><span>名称&emsp;:</span>'.$xml->note[$count]->name.'</div>';
echo '<div class="name"><span>性别&emsp;:</span>'.$xml->note[$count]->sex.'</div>';
echo '<div class="name"><span>Email&nbsp;&nbsp;:</span>'.$xml->note[$count]->mail.'</div>';
echo '<div class="name"><span>网站&emsp;:</span>'.$xml->note[$count]->website.'</div>';
echo '<div class="name"><span>标题&emsp;:</span>'.$xml->note[$count]->title.'</div>';
echo '<div class="name"><span>内容&emsp;:</span>'.$xml->note[$count]->content.'</div>';
?>
<script>
$('.close-span').html('Back');
$('.close-span').on('click',function(){
	$('.message_table').show();
	$('.single_message_box').hide();
	$('.close-span').html('');
});
</script>
