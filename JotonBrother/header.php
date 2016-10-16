<script>
	
		$(window).ready(function(){
		var width = $(this).width();
		if(width >769){
			$('.desktop-bootstrap').css('display','block');
		}
		if((width < 770) && (width > 481)){
			$('.tablet-bootstrap').css('display','block');
            $('.messages-container-custom').css('margin-top','15%');
            $('.content-custom').css('margin-top','0');
		}
		if(width < 482){
			$('.mobile-bootstrap').css('display','block');
            $('.messages-container-custom').css('margin-top','32%');
		}
		});
	
</script>
<!-- Desktop Menu -->
<div class="desktop-bootstrap">
<div class="container-fluid">

      <nav class="navbar navbar-inverse navbar-fixed-side" style="background:none;border:none;">
        <!-- normal collapsible navbar markup -->
        <div class="vert-offset-top-11" style="margin-top:10em;">
        <ul class="nav nav-stacked navbar-custom-ul">
        	<li><a data-target="#aboutus" data-toggle="modal" style="cursor:pointer;">About Us</a></li>
        	<li><a href="http://lahcgx.com/projects.php">Projects</a></li>
        	<li><a href="http://lahcgx.com/joinUs.php">Join Us</a></li>
        </ul>
        </div>
        <a href="http://lahcgx.com/"><img src="images/logo.gif" class="img-responsive"></a>
        <div class="clearfix">...</div>
        <ul class="nav nav-stacked navbar-custom-ul">
        	<li><a href="http://lahcgx.com/certificates.php">Certificates</a></li>
        	<li><a href="http://lahcgx.com/messages.php">Messages</a></li>
        	<li><a href="http://lahcgx.com/contact.php">Contact us</a></li>
        </ul>
      </nav>

    </div>
    </div>
    <!-- END Destop Menu -->
    <!-- Tablet Menu -->
    <div class="tablet-bootstrap">
    	<nav class="navbar navbar-inverse navbar-fixed-top mobile-bootstrap-custom-nav">
<div class="navbar-header">
	<a href="http://lahcgx.com/"><img src="images/logo.gif"  class="img-responsive navbar-brand"></a>
                <div class="navbar-toggle custom-navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse" style="margin-top:5%;">
                    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </div>
            </div>

	<div class="collapse navbar-collapse navHeaderCollapse" id="custom-dropdown-nav">
		<ul class="nav navbar-nav">
			<li><a data-target="#aboutus" data-toggle="modal" style="cursor:pointer;">About Us</a></li>
        	<li><a href="http://lahcgx.com/projects.php">Projects</a></li>
        	<li><a href="http://lahcgx.com/joinUs.php">Join Us</a></li>
        	<li><a href="http://lahcgx.com/certificates.php">Certificates</a></li>
        	<li><a href="http://lahcgx.com/messages.php">Messages</a></li>
        	<li><a href="http://lahcgx.com/contact.php">Contact us</a></li>
		</ul>
	</div>
</nav>
    </div>

    <!-- END Tablet Menu -->
    <!-- Mobile Menu -->
<div class="mobile-bootstrap">
	<nav class="navbar navbar-inverse navbar-fixed-top mobile-bootstrap-custom-nav">
<div class="navbar-header">
	<a href="http://lahcgx.com/"><img src="images/logo.gif"  class="img-responsive navbar-brand"></a>
                <a class="navbar-toggle custom-navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse" href="#" style="margin-top:12%;">
                    <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
                </a>
            </div>

	<div class="collapse navbar-collapse navHeaderCollapse" id="custom-dropdown-nav">
		<ul class="nav navbar-nav">
			<li><a data-target="#aboutus" data-toggle="modal" style="cursor:pointer;">About Us</a></li>
        	<li><a href="http://lahcgx.com/projects.php">Projects</a></li>
        	<li><a href="http://lahcgx.com/joinUs.php">Join Us</a></li>
        	<li><a href="http://lahcgx.com/certificates.php">Certificates</a></li>
        	<li><a href="http://lahcgx.com/messages.php">Messages</a></li>
        	<li><a href="http://lahcgx.com/contact.php">Contact us</a></li>
		</ul>
	</div>
</nav>
</div>


    <!-- END Mobile Menu -->
    <!-- About Us Model -->
<div class="modal fade" id="aboutus">
<div class="modal-dialog">
    <div class="modal-content">
            <div class="modal-header about-modal-custom">
            <button class="close " data-dismiss="modal"><span style="color:red;"><i class="glyphicon glyphicon-remove glyphicon-danger"></i></span></button>
        <div class="modal-title"><span>About Us</span></div>
    </div>
    <div class="modal-body">
    <p>
        北京龙安华诚建筑设计有限公司成立于 1988 年，于 2003 年改制 为有限责任公司，是北京勘察设计协会理事会员单位，是北京市规模大、 设计理念活跃的建筑设计公司。
            经过多年不懈地努力，公司现具有建筑工程设计甲级、风景园林工 程设计专项乙级、市政行业（道路工程、给水工程、排水工程、桥梁工 程）专业乙级、城市规划设计甲级等资质。主要业务包括：建筑工程设 计、市政工程设计、城市规划设计、室内装饰设计、工程顾问管理等多 个领域。公司现有办公面积 3650 平方米，员工总数 398 人，一级注册 建筑师 56 名，一级注册结构工程师 38 名，注册规划师 12 名、注册设 备师 30 名。具有中高级技术职称的设计师占总人数的 78%。
            我们恪求“创新、务实、诚信、求精”的设计理念，本着“为业主
            提供高质量的设计、高质量的服务”为工作原则，不断追求卓越与完美。 凭借实力和信誉真诚回报社会，与广大客户、合作伙伴携手共创美好未 来。<br>
            2008 年中央美术学院燕郊校区经中国人居典范评审委员会评审获“最 佳设计方案金奖”<br>
                2009 年东方宜家花园项目经中国人居典范评审委员会评审，获“最佳 设计方案金奖”<br>
                2009 年韶关东堤路改造项目经中国人居典范评审委员会评审，获“最 佳设计方案金奖”
                </p>
    </div>
        <div class="modal-footer about-modal-footer">
            
        </div>
    
    </div>
</div>
</div>
