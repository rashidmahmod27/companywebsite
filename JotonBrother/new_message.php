<form >
			<div class="form-group">
			<input type = "text" class="form-control" placeholder="名称" name="name" id="name">
			</div>
            <div class="form-group">
			<input type = "text" class="form-control" placeholder="性别"  name="sex" id="sex">
			</div>
			<div class="form-group">
			<input type = "email" class="form-control" placeholder="Email" name="email" id="email">
			</div>
			<div class="form-group">
			<input type = "text" class="form-control" placeholder="网站"  name="website" id="website">
			</div>
			<div class="form-group">
			<input type = "text" class="form-control" placeholder="标题"  name="title" id="title">
			</div>
			<div class="form-group">
			<textarea class="form-control" rows="10"  name="content" id="content" placeholder="内容"></textarea>
			</div>
			<div class="form-group">
			<input type = "submit" class="btn btn-primary btn-lg submitted" value="确定">&emsp;<input type = "button" class="btn btn-primary btn-lg cancel" value="返回" name="cancel">
			</div>
		</form>
<script>
$('.new-message').hide();
$('.cancel').on('click', function(){
	$('form').hide();
	$('.message_table').show();
	$('.new-message').show();
});
$('.submitted').on('click',function(){
	var name = $("#name").val();
	var sex = $("#sex").val();
	var email = $("#email").val();
	var website = $("#website").val();
	var title = $("#title").val();
	var content = $("#content").val();
	var dataString = 'name='+ name + '&sex='+ sex +'&email='+ email + '&website='+ website + '&title='+ title +'&content='+ content;
	if(name == '' || sex == '' || email == '' || website == '' || title == '' || content == '')
	{
		alert("Please Fill All Fields");
		return false;
	}else
	{
		$.ajax({
type: "POST",
url: "post.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
	$('form').hide();
	$('.message_table').show();
	$('.new-message').show();
}
});
	}
});
</script>
