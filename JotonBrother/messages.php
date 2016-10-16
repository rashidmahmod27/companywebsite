<!DOCTYPE html>
<html>
<head>
	<title>Beijing Long an hua chang || Official</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>
	<link rel="stylesheet" href="bootstrap-sass/assets/stylesheets/_bootstrap.scss" />
	<link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap\css\navbar-fixed-side.css">
	<link rel="stylesheet" type="text/css" href="bootstrap\css\bootstrap.min.css">
	<link href="css/navbar-fixed-side.css" rel="stylesheet" />
	<script type="text/javascript" src="bootstrap/js/jquery.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<link rel="stylesheet" href="css/styles.css" type="text/css">
	<script type="text/javascript" src="js/scripts.js"></script>
	<!-- Start WOWSlider.com HEAD section -->
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<!-- End WOWSlider.com HEAD section -->

</head>
<body style="background:black;">

<?php
require_once'header.php';
?>
<div class="container messages-container-custom">
	<div class="modal-dialog">
	<div class="modal-content">
		<div class="modal-header messages-modal-header-custom" style="background:">Messages</div>
		<div class="modal-body">
		<div class="message_table">
			<table class="table table-striped">
    <thead>
      <tr>
        <th>Name</th>
        <th>Title</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>     
      <?php
$xml = simplexml_load_file('messages.xml');
$count = count($xml->children());
for($i = 0;$i < $count;$i++)
{
echo '<tr class="table_row" id="'.$i.'" style="cursor:pointer;">';
echo '<td>'.$xml->note[$i]->name.'</td>';
echo '<td>'.$xml->note[$i]->title.'</td>';
echo '<td>'.$xml->note[$i]->date.'</td>';
echo '</tr>';
}
?>
    </tbody>
  </table>	
  </div>
  <div class="single_message_box">
  	
  </div>
  <div class="new_message_box"></div>
		</div>
		<div class="modal-footer messages-modal-footer-custom">
			<span class="new-message">New Message</span><span class="close-span"></span>
		</div>
	</div>
		
	</div>
</div>
<script type="text/javascript">
    $('.table_row').on('click', function (){
    var selected = $(this).attr('id');
    $('.message_table').hide();
	$.ajax({
		url: "single_messages.php", 
		data: 'id='+selected,
		success: function(data){
		$('.single_message_box').show();
		$('.single_message_box').html(data);
		
    }});
	});
	$('.new-message').on('click',function(){
		$('.message_table').hide();
		$(".new_message_box").load("new_message.php");
	});
    </script>
</body>
</html>

