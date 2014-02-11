<!DOCTYPE html>
<!--[if IEMobile 7]><html class="iem7" <?php print $html_attributes; ?>><![endif]-->
<!--[if lte IE 6]><html class="lt-ie9 lt-ie8 lt-ie7" <?php print $html_attributes; ?>><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="lt-ie9 lt-ie8" <?php print $html_attributes; ?>><![endif]-->
<!--[if IE 8]><html class="lt-ie9" <?php print $html_attributes; ?>><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html <?php print $html_attributes . $rdf_namespaces; ?>><!--<![endif]-->

    <head>
        <title><?php print $head_title; ?></title>
        <?php print $styles; ?>
        <?php print $scripts; ?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script type="text/javascript" src="http://checkherefirst.com/js/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="//use.typekit.net/qnr8ldg.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
        <script type="text/javascript">
            $(document).ready(function(){
               $('.pager-next a').html('<div><span>Older </span><span>›</span></div>');
               $('.pager-previous a').html('<div><span>‹</span><span> Newer</span></div>');
               /* change "ReadMore" to "Full Story"*/
               $('li.node-readmore > a').html('Full Story');                
            });
        </script>
		<link rel="stylesheet" type="text/css" href="http://checkherefirst.com/css/style_v2.css" />                
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0, user-scalable=yes, width=device-width">
		<style>
			.contextual-links-wrapper{display: none;}
			.contextual-links-wrapper a{color:#ff0000;font-size:12px;}
			#drop_lst{position:absolute;display:none;z-index:999;background:#8DC343;filter:alpha(opacity=80);-moz-opacity:0.8;-khtml-opacity: 0.8;opacity: 0.8;}
			#drop_lst ul li{cursor:pointer;height:24px;font-size:18px;line-height:24px;padding-left:10px;color:#ffffff;}
			#drop_lst ul li.currTip{cursor:pointer;background:#ffffff;color:#8DC343;}
			.element-invisible{display:none;}
			#navigation{height:40px;background:#888888;margin-bottom:25px;padding-left:20px;}
			#content{float:left;width:600px;margin:0px 20px;}
			.sidebars{float:left;width:300px;margin:20px 20px 0px 19px;}
			ul.inline li{float:left;}
			.clearfix{clear:both;}
			#navigation ul li{margin-left:20px;line-height:40px;}
			#navigation ul li a {color:#FFFFFF;font-size:16px;}			
			.node-teaser header h2{line-height:28px;}
			.node-teaser header h2 a{font-size:30px;font-weight:bold;color:#000000;}			
			.node-teaser div.field-name-field-subtitle{position:absolute;left:160px;top:67px;font-size:12px;font-weight:bold;color:#4b4b4b;}
			.node-teaser p.submitted{font-size:13px;color:#3b3b38;}			
			article.node-teaser{position:relative;}
			
			#block-views-latest-articles-block{margin-bottom:30px;}
			#block-views-latest-articles-block h2.block-title{color:#755387;font-size:20px;line-height:16px;}
			#block-views-latest-articles-block .view-content{margin-top:17px;}
			#block-views-latest-articles-block .view-content div.views-field-title{line-height:12px;}
			#block-views-latest-articles-block .view-content div.views-row{margin-top:15px;}
			#block-views-latest-articles-block .view-content a{font-size:15px;color:#000000;font-weight:bold;line-height:12px;}
			#block-views-latest-articles-block .view-content .views-field-changed{font-size:12px;color:#999999;margin-top:5px;}
			
			#block-views-populor-block{margin:30px 0px;}
			#block-views-populor-block h2.block-title{color:#755387;font-size:20px;line-height:16px;}
			#block-views-populor-block .view-content{margin-top:17px;}
			#block-views-populor-block .view-content div.views-field-title{line-height:12px;}
			#block-views-populor-block .view-content div.views-row{margin-top:15px;}
			#block-views-populor-block .view-content a{font-size:15px;color:#000000;font-weight:bold;line-height:12px;}
			#block-views-populor-block .view-content .views-field-changed{font-size:12px;color:#999999;margin-top:5px;}
			
			#main{overflow:hidden;}
			
			.view-latest-articles .views-field-created{font-size:12px;margin-top:4px;}
			.view-populor .views-field-created{font-size:12px;margin-top:4px;}
			
			#nav a:hover, #navigation a:hover{color:rgb(117, 83, 135) !important;}
            
		</style>
	</head>
	<body>


<div id="nav-con">
	<div id="nav-bar" class="line-wrap">
		<div id="logo-con-bg">
			<div id="logo-con">
				<a href=""><img src="http://checkherefirst.com/img/chf_logo.png" /></a>
			</div>
		</div>
		<ul id="nav">
			<li><a href="">
				Phones
			</a></li>
			<li><a href="">
				Plans
			</a></li>
			<li><a href="">
				Top 5
			</a></li>
			<li><a href="">
				Articles
			</a></li>
			<li><a href="/blog/faq-page">
				FAQ
			</a></li>
            <li class="last"><a href="">
                Featured Deals
            </a></li>
		</ul>
		<div id="header-buttons" class="line-wrap" >
			<ul>
				<li><a href="">
					<!--<div class="with-bg" style="background-position:0px 0px; width:26px;height:26px;"></div>-->
                    <div class="social"><img src="http://checkherefirst.com/img/fb_icon.png" alt=""></div>                    
				</a></li>
				<li><a href="">					
                    <div class="social"><img src="http://checkherefirst.com/img/twitter_icon.png" alt=""></div>
				</a></li>
				<li><a href="">					
                    <div class="social"><img src="http://checkherefirst.com/img/goog_plus_icon.png" alt=""></div>                    
				</a></li>
				<li><a href="">					
                    <div class="social"><img src="http://checkherefirst.com/img/tumblr_icon.png" alt=""></div>                    
				</a></li>
			</ul>
		</div>
		
		
		<div id="search-bar" class="line-wrap" >
			<form id="search_form" method="get" action="test/solr_test.php">
				<input type="text" id="kw" name="kw" autocomplete="off"/>
				<input type="submit" id="go-search" value=""/>
			</form>
		</div>
		
	</div>
</div>
<div id="drop_lst"></div>
<script type="text/javascript">
$(function(){
	$("#kw").keyup(function(){
		var theEvent = window.event || arguments.callee.caller.arguments[0];
		if(theEvent.which==38 || theEvent.which==40)
		{
			if(theEvent.which==38){prevTip();}
			if(theEvent.which==40){nextTip();}
		}
		else
		{
			var curr_kw=$("#kw").val();
			if(curr_kw!="")
			{
				var X = $('#kw').offset().left;
				var Y = $('#kw').offset().top;
				var W = $('#kw').width();
				var H = $('#kw').height();
				$.get("searchtips/get_pop_tips.php?kw="+curr_kw, {Action:"get",Name:"check"}, function (data, textStatus){
					$("#drop_lst").html(data).css("left",X+"px").css("top",(Y+H+2)+"px").css("width",W+"px").css("display","block");
					}
				);
			}
			else
			{
				$("#drop_lst").css("display","none");
			}
		}
	});

	$("#kw").blur(function(){
		$("#drop_lst").css("display","none");
	});
});
function setKW(kw)
{
	$('#kw').val(kw);
	//$('#search_form').submit();
	//$("#drop_lst").css("display","none");
}
function prevTip()
{
	if($(".currTip").size()==0)
	{
		$("#sTips").children().last().addClass("currTip");
	}
	else
	{
		$(".currTip").removeClass("currTip").prev().addClass("currTip");
	}
	setKW($(".currTip").html());
}
function nextTip()
{
	
	if($(".currTip").size()==0)
	{
		$("#sTips").children().first().addClass("currTip");
	}
	else
	{
		$(".currTip").removeClass("currTip").next().addClass("currTip");
	}
	setKW($(".currTip").html());
}

</script>
		<div class="line-wrap" style="background:#EDF0EF;margin-top:12px;">
<?php print $page; ?>
		</div>
		<div class="line-wrap" style="background:#EDF0EF;height:20px;"></div>
<div id="footer_wrap" class="line-wrap">
	<div id="carrier-coverage" class="footer_infoblock">
		<h3>Carrier Coverage Maps</h3>
		<div class="dashed_h_w" style="margin-bottom:7px;"></div>
		<div id="carrier-coverage-img"></div>
		<div id="carrier-coverage-lst">
			<ul>
				<li><a href="">AT&T</a></li>
				<li><a href="">Sprint</a></li>
				<li><a href="">T-Mobile</a></li>
				<li><a href="">Verizon</a></li>
			</ul>
		</div>
		<div style="clear:both;"></div>
		<div id="carrier-coverage-rootmetrics" class="dashed_h_w" >
			<p>View official carrier coverage maps above or view <span class="green">real world results</span> by RootMetrics</p>
		</div>
	</div>
	<div id="navigation-m" class="footer_infoblock">
		<h3>Navigation</h3>
		<div class="dashed_h_w" style="margin-bottom:7px;"></div>
		<ul class="fl">
			<li><a href="">Phones</a></li>
			<li><a href="">Top5</a></li>
			<li><a href="">FAQ</a></li>			
			<li><a href="">About</a></li>
		</ul>
		<ul class="fr">
			<li><a href="">Plans</a></li>
			<li><a href="">Articles</a></li>
            <li><a href="">Featured Deals</a></li>
		</ul>
	</div>
	<div id="follow-us" class="footer_infoblock">
		<h3>Follow Us</h3>
		<div class="dashed_h_w" style="margin-bottom:6px;"></div>
		<ul class="fl">			
            <li class="facebook"><a href="">facebook</a></li>			
            <li class="twitter"><a href="">twitter</a></li>			
		</ul>
		<ul class="fr">			
            <li class="tumblr"><a href="">tumblr</a></li>			
            <li class="googlePlus"><a href="">Google+</a></li>			
		</ul>
		<div style="clear:both;"></div>
		<div id="copyright">
			<p>&copy;2013 Checkherefirst | <a href="">Privacy Policy</a> | <a href="">Terms of Use</a></p>
		</div>
	</div>
	<div style="clear: both;"></div>
</div>	
	<!-- <iframe src="http://www.t-mobile.com/coverage/pcc.aspx/" style="width:100%;height:500px;"></iframe> -->
	
	</body>
</html>


