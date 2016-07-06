
<div id="footer">
	<div id="footer_highlight_con">
		<div id="footer_highlight">
			<div id="footer_tagline"></div>
		</div>
	</div>
	<div id="footer_info_con">
		<div id="footer_info">
			<div id="footer_subscribe">
			<form name="newsletter" id="newsletter" method="post" action="user.php">
				<div id="subs_intro"></div>
				<div id="corner"></div>
				<div id="subs_name">
					姓名：<input id="txt_subs_name" name="name" type="text" />
				</div>
				<div id="subs_email">
					邮箱：<input type="text" id="txt_subs_email" name="email" class="inputBg" />
				</div>
				<input type="hidden" name="act" value="email_list">
				<input type="hidden" name="job" value="add">				
				<div id="subs_submit">
					<a id="subs_button" title="订 阅" href="javascript:void(0)" onclick="add_email_list(); return false;">订 阅</a>
				</div>
			</form>
			</div>
			<div id="footer_info_1">
				<div class="footer_info_title">购物指南</div>
				<ul class="footer_info_list">
					<li><a href="/article-36.html" title="新用户注册">新用户注册</a></li>
					<li><a href="/article-37.html" title="购物流程">购物流程</a></li>
                    <li><a href="/article-125.html" title="潮流集市购物指南">潮流集市购物指南</a></li>
					<li><a href="/article-17.html" title="支付方式说明">支付方式说明</a></li>
					<li><a href="/article-38.html" title="发票制度说明">发票制度说明</a></li>
					<li><a href="/article-16.html" title="配送方式/费用查询">配送方式/费用查询</a></li>
					<li><a href="/article-41.html" title="款到区域及配送时间">款到区域及配送时间</a></li>
					<!--<li><a href="/article-42.html" title="货到付款区域">货到付款区域</a></li>-->
					<!--<li><a href="/article-9.html" title="售后流程">售后流程</a></li>-->
					<li><a href="/article-22.html" title="售后服务保证">售后服务保证</a></li>
					<li><a href="/article-23.html" title="如何办理退换货">如何办理退换货</a></li>
				</ul>
			</div>
			<div id="footer_info_2">
				<div class="footer_info_title">我的账户</div>
				<ul class="footer_info_list">
					<li><a href="/user.php" title="注册/登录">注册/登录</a></li>
					<li><a href="/user.php" title="我的会员中心">我的会员中心</a></li>
					<li><a href="/user.php?act=collection_list" title="我的收藏">我的收藏</a></li>
					<li><a href="/flow.php" title="我的购物篮">我的购物篮</a></li>
					<li><a href="/user.php?act=order_list" title="历史订单查询">历史订单查询</a></li>
				</ul>
			</div>
			<div id="footer_info_3">
				<div class="footer_info_title">关于我们</div>
				<ul class="footer_info_list">
					<li><a href="/topic-20.html" title="TS品牌">TS品牌</a></li>
					<li><a href="/article-52.html" title="人才招聘">人才招聘</a></li>
					<!-- <li><a href="/topic-2.html" title="品牌介绍">品牌介绍</a></li> -->
					<li><a href="/article-45.html" title="媒体聚焦">媒体聚焦</a></li>
					<li><a href="http://t.sina.com.cn/threeseasons" target="_blank" title="微博@TS绝对搭配">微博@TS绝对搭配</a></li>
					<li><a href="/article-39.html" title="意见及联系方式">意见及联系方式</a></li>
					<li><a href="/article-2.html" title="隐私政策">隐私政策</a></li>
					<li><a href="/article-53.html" title="友情链接">友情链接</a></li>
										<li>沪ICP备14043761号</li>
									</ul>
			</div>
            <div id="footer_info_4">
              <ul class="footer_info_list">
                <div><img src="images/pic_weixin_01.jpg" width="87" height="87"></div>
                <li>扫一扫，一起微信吧</li>
              </ul>
          </div>
			<div id="footer_litb">
				<span>兰亭旗下网站：</span>
				<a href="http://www.lightinthebox.com/" title="China Wholesale, Wedding dresses" target="_blank" rel="nofollow">LightInTheBox</a>
				<a href="http://www.miniinthebox.com/" title="Gadgets" target="_blank" rel="nofollow">MiniInTheBox</a>
				<a href="http://www.dropinthebox.com/" title="Wholesale" target="_blank" rel="nofollow">DropInTheBox</a>
				<a href="http://www.hikaribox.com/" title="卸売" target="_blank" rel="nofollow">HikariBox</a>
				<a href="http://www.onlyts.com/" title="Fast Fashion" target="_blank" rel="nofollow">TS</a>
			</div>
			<div id="footer_copy">
			“TS” AND “Three Seasons” ARE REGISTERED TRADEMARKS BELONG TO LIGHTINTHEBOX, INC.<br/>
						© 2009-2011 - ONLYTS ALL RIGHTS RESERVED.						<a href="http://www.miibeian.gov.cn/" class="footer_copy_color" target="_blank" rel="nofollow">沪ICP备14043761号</a>
						</div>
		</div>
	</div>
</div>
<!--[if IE 6]>
<script type="text/javascript" >
	DD_belatedPNG.fix('.tag_c1,.tag_c2,.tag_c3,.tag_c4,.cbottom,#tsTopAdvClose');
</script>
<![endif]-->
<script language="JavaScript">
var rightbonusbarAd={
	controlattrs: {offsety:168},
	keepfixed:function(){
		var $window=jQuery(window);
		var controlx=$window.scrollLeft() + $window.width() - $('#rightbar_bonus').width();
		var controly=$window.scrollTop() + this.controlattrs.offsety;
		$('#rightbar_bonus').css({right:'0px', top:controly+'px'});
	},
	
	positioncontrol:function(){
		if (!this.cssfixedsupport)
			this.keepfixed();
	},
	
	init:function(){
		jQuery(document).ready(function($){
			var rightbonusbarobj=rightbonusbarAd;
			var iebrws=document.all;
			rightbonusbarobj.cssfixedsupport=!iebrws || iebrws && document.compatMode=="CSS1Compat" && window.XMLHttpRequest; //not IE or IE7+ browsers in standards mode
			rightbonusbarobj.positioncontrol();
			$(window).bind('scroll resize', function(e){
				rightbonusbarobj.positioncontrol();
			});
		});
	}
};
rightbonusbarAd.init();
</script>
<div class="hide_element"><script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20788741-2']);
  _gaq.push(['_setDomainName', 'onlyts.cn']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F609ce6669ca441ca061d684ca80aa054' type='text/javascript'%3E%3C/script%3E"));
</script>
<script language="javascript" type="text/javascript" src=" js/4240458.js"></script></div>
</body>
<script type="text/javascript">
	</script>
<script type="text/javascript">
	var process_request = "正在处理您的请求...";
		var username_exist = "";
	var compare_no_goods = "您没有选定任何需要比较的商品或者比较的商品数少于 2 个。";
	var btn_buy = "购买";
	var is_cancel = "取消";
	var select_spe = "请选择商品属性";
</script>
<script type="text/javascript">
	var email = document.getElementById('txt_subs_email');
	var name = document.getElementById('txt_subs_name');
	
	function add_email_list()
	{
		if (check_email())
	  	{
	  		document.getElementById('newsletter').submit();
	  	}
	}
	
	function check_email()
	{
  		if (Utils.isEmail(email.value))
  		{
    		return true;
  		}
  		else
  		{
    		alert('邮件地址非法！');
    		return false;
  		}
	}
</script>
</html>