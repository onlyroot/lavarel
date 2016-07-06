
<?php


include '../head.php';



?>


<!--[if IE 6]>
<script type="text/javascript" src="http://img1.onlyts.cn/js/DD_belatedPNG_0.0.8a-min.js?version=V310001.js"></script><![endif]-->
<script language="JavaScript">
if(GetCookie(' continuetobuy') == 'yes'){
	delCookie(' continuetobuy');
	window.location.reload(true);
}
function GetCookie(sName)
{
    //cookies are separated by semicolons
    var aCookie = document.cookie.split(";");
    for (var i=0; i < aCookie.length; i++)
    {
        var aCrumb = aCookie[i].split("=");
        if (sName == aCrumb[0])  
    		return unescape(aCrumb[1]);
    }
    return null;
}
function delCookie(key){
    var date = new Date();
    date.setTime(date.getTime() - 10000);
    document.cookie = key + "=a; expires=" + date.toGMTString();
}
</script>
<script language="JavaScript">
	var miniHeader = false;
	var process_request = "正在处理您的请求...";
	
	<!-- Hide
	function killErrors() {
		return true;
	}
	window.onerror = killErrors;
	// -->
</script>
<script language="JavaScript">
function check_input(type) {
	if($('#search_keywords').val()=='' || $('#search_keywords').val()==null) {
		alert('请先输入一个搜索词，例如\n“衬衫”，“连衣裙”...');
		return false;
	} else {
		if(type == 'ts'){
			$('#searchForm').attr('action', '/search.html?search_keywords=' + encodeURIComponent(encodeURIComponent($('#search_keywords').val())) + '&brand=12');
		}else{
			$('#searchForm').attr('action', '/search.html?search_keywords=' + encodeURIComponent(encodeURIComponent($('#search_keywords').val())));
		}
		setTimeout(doSubmit,0);
	}
}
//function changeUrlEncode() {
	//$('#searchForm').attr('action', '/search.php?search_keywords=' + encodeURIComponent(encodeURIComponent($('#search_keywords').val())));
//}
function doSubmit() {	
	$('#searchForm').submit();	
}
function search_focus(){
	if($("#search_keywords").val()==$("#search_keywords").attr("value_bak")){
		$("#search_keywords").val("");
	$("#search_keywords").removeClass("search_gray");
	}
}
function search_blur(){
	if($("#search_keywords").val()==""){
		$("#search_keywords").val($("#search_keywords").attr("value_bak"));
	}
	if($("#search_keywords").val()==$("#search_keywords").attr("value_bak")){
		$("#search_keywords").addClass("search_gray");
	}
}
</script>
<script  type="text/javascript">
var _bdhm_top = 0;
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
var _bdhm_tim = new Image(1,1);
_bdhm_tim.id = "bdhmPerimg";
_bdhm_tim.src = _bdhmProtocol + "hm.baidu.com/_tt.gif?si=609ce6669ca441ca061d684ca80aa054&rnd=" + Math.round(Math.random()*2147483647);
_bdhm_tim.onload=function(){_bdhm_top = 1;}
</script><link rel="canonical" href="http://www.onlyts.cn/goods-34586.html" /></head>

<body>


<script language="JavaScript">
    function addBookmark(t, u) {
		var title= t? t : '--TS品牌欧美时尚女装网购--';
        var url = u? u : 'http://www.onlyts.cn/?from=favorite';
        if (window.sidebar)
    	{
            window.sidebar.addPanel(title, url, "");
        }
        else if(window.opera && window.print)
    	{
        	var mbm = document.getElementById('addFavor');
        	mbm.setAttribute('rel','sidebar');
        	mbm.setAttribute('href',url);
        	mbm.setAttribute('title',title);
        	mbm.click();
        }
        else if(document.all)
    	{
        	window.external.addFavorite(url, title);
        }
        else { 
        	alert("添加到浏览器收藏夹失败。请按Ctrl+D来手工添加。");
        }
    }
</script>	</ul>
	</div>
</div></div>
<!-- 页顶960广告 begin>
<div id="tsTopAdv">
  <a href="javascript:void(0);" id="tsTopAdvCloseGrey" onclick="shutDownTopAdv()"></a>
  <a href="/category-40.html" id="tsTopAdvImg"><img width="960" alt="" src="themes/new/images/notice.png"/></a>
  
</div>
<script type="text/javascript">
  function shutDownTopAdv(){
	  var tsTA=document.getElementById("tsTopAdv");
	  tsTA.style.display = "none";
  }
</script>
<页顶960广告 end -->

<link href="css/dialog.css?version=V310001.css" type="text/css" rel="stylesheet" />
<link href="css/MagicZoom.css?version=V310001.css" type="text/css" rel="stylesheet" />
<script language="JavaScript">
var goods_id = 34586;
var short_of_product = "无货";
var duplicate_action = "请勿重复操作";
var specification_count = 2;
var max_attr_id = 212;
var min_attr_id = 211;
function changeAtt(t, id) {
	if(specification_count > 1 && document.getElementById("spec_value_"+id).name == 'spec_'+max_attr_id) {
		judgeColorSelected(max_attr_id);
	}
	
	if(t.className == 'disable') {
		return false;
	}
	
	$("#spec_value_"+id).attr("checked", true);
	for (var i = 0; i<t.parentNode.childNodes.length;i++) {
        if (t.parentNode.childNodes[i].className == 'selected') {
            t.parentNode.childNodes[i].className = '';
        }
    }
	t.className = "selected";
	
	if(specification_count > 1 && document.getElementById("spec_value_"+id).name == 'spec_'+min_attr_id) {
		setShortage();
	}
	buy_num_init();
}
var shortage_list = [["193259","193260"],["193259","193261"],["193259","193262"],["193259","193267"],["193259","193268"],["193259","193269"],["193259","193270"],["193259","193271"],["193259","193272"],["193259","193273"]];
function setShortage() {
	for(var i=0;i<shortage_list.length;i++) {
		for(var j=0;j<shortage_list[i].length;j++){
			var attrNode = document.getElementById("attr_"+shortage_list[i][j]);
			if(attrNode.className=="disable") {
				attrNode.className = "";
				attrNode.firstChild.title = '';
			}
		}
	}
	for(var i=0;i<shortage_list.length;i++) {
		var selArr = new Array();
		var noSelArr = new Array();
		for(var j=0;j<shortage_list[i].length;j++){
			var attr = shortage_list[i][j];
			if(selArr.length<(shortage_list[i].length-1) && isSelected(attr)) selArr.push(attr); 
			else noSelArr.push(attr);
		}
		if(noSelArr.length==1){
			var attrNode = document.getElementById("attr_"+noSelArr[0]);
			if(attrNode.className=="selected") $("#spec_value_"+noSelArr[0]).attr("checked", false);
			if(document.getElementById("spec_value_"+noSelArr[0]).name == 'spec_'+max_attr_id) {
				attrNode.className = "disable";
				attrNode.firstChild.title = short_of_product;
			}
		}
	}
	
			var attrNode = document.getElementById("attr_"+193262);
		attrNode.className = "disable";
		attrNode.firstChild.title = short_of_product;
			var attrNode = document.getElementById("attr_"+193267);
		attrNode.className = "disable";
		attrNode.firstChild.title = short_of_product;
			var attrNode = document.getElementById("attr_"+193268);
		attrNode.className = "disable";
		attrNode.firstChild.title = short_of_product;
			var attrNode = document.getElementById("attr_"+193269);
		attrNode.className = "disable";
		attrNode.firstChild.title = short_of_product;
			var attrNode = document.getElementById("attr_"+193270);
		attrNode.className = "disable";
		attrNode.firstChild.title = short_of_product;
			var attrNode = document.getElementById("attr_"+193271);
		attrNode.className = "disable";
		attrNode.firstChild.title = short_of_product;
			var attrNode = document.getElementById("attr_"+193272);
		attrNode.className = "disable";
		attrNode.firstChild.title = short_of_product;
			var attrNode = document.getElementById("attr_"+193273);
		attrNode.className = "disable";
		attrNode.firstChild.title = short_of_product;
			var attrNode = document.getElementById("attr_"+193260);
		attrNode.className = "disable";
		attrNode.firstChild.title = short_of_product;
			var attrNode = document.getElementById("attr_"+193261);
		attrNode.className = "disable";
		attrNode.firstChild.title = short_of_product;
	}
function isSelected(attr){
	var attrNode = document.getElementById("attr_"+attr);
	if(attrNode.className=="selected") return true;
	else return false;
}
</script>
	
<script>
//子分类菜单显示/隐藏
var subcat_timer;
var subcat_delay = 300;
var subcat_slide_time = 200;
function subcat_show(i){
	clearTimeout(subcat_timer);
	subcat_timer = setTimeout(function(){
		$(".mount ul").slideUp(subcat_slide_time);
		$("#subcat_"+i+" ul").slideDown(subcat_slide_time);
	},subcat_delay);
}
function subcat_hide(){
	clearTimeout(subcat_timer);
	subcat_timer = setTimeout(function(){
		$(".mount ul").slideUp(subcat_slide_time);
	},subcat_delay);
}
function subcat_show_keep(){
	clearTimeout(subcat_timer);
}
function validEvent(event,node){
	var parent =(event.relatedTarget)?event.relatedTarget:(event.type=="mouseover"?event.fromElement:event.toElement);
	while(parent && parent!=node){
		parent = parent.parentNode;
	}
	if(parent==node) return false;
	else return true;
}
//另外:为了清理IE下滑动收起时留下的残影，"ul"后使用"&nbsp;"跟随滑动收起，重绘此区域，消除残影。
</script>
<div id="container">
<div id="bread" class="cf">
	<ul>
		<li><a href="." title="首页">首页</a><em></em></li> <li><a title="全部商品" href="category-36-b0.html">全部商品</a><em></em></li> <li><a title="新品" href="category-40-b0.html">新品</a><em></em></li> <li><a title="1月20号新品" href="category-881-b0.html">1月20号新品</a><em class="last2"></em></li> <li class="last"><a class="last" href="javascript:void(0);"> TS 2015新款年会宴会礼服淡黄色长裙主持人礼服</a><em class="last"></em></li>	</ul>
</div>
<div id="main" class="cf">
<div id="product_main">
	<h1 id="product_title">
		<span id="product_sku">S0403226</span>
		TS 2015新款年会宴会礼服淡黄色长裙主持人礼服	</h1>
	
	<div id="product_images">
			
<div id="product_main_img">
    	<a  
		href="http://img1.onlyts.cn/images/201501/o/34586_o_1421979222006.jpg" 
		onClick="return false;" 
		rel="disable-expand: true" 
		class="show_element no_border ">
			<img id="img_src" class="img_style" 
					src="images/34586_l_1421979221043.jpg" 
					name="rImage" 
					 />
	</a>
					
</div>
	<ul id="product_thumbs">
						<LI>
										<span onclick="changeHrefNew('product_thumb_0')" 
						id="product_thumb_0"
						class="no_border has_pointer"
						alt="http://img1.onlyts.cn/images/201501/o/34586_o_1421979223319.jpg" 
						rev="http://img1.onlyts.cn/images/201501/l/34586_l_1421979222978.jpg" 
						>
							<IMG src="images/34586_t_1421979222736.jpg" 
							width="60" border="0" >
					</span>
										
				</LI>
						<LI>
										<span onclick="changeHrefNew('product_thumb_1')" 
						id="product_thumb_1"
						class="no_border has_pointer"
						alt="http://img2.onlyts.cn/images/201501/o/34586_o_1421979224338.jpg" 
						rev="http://img2.onlyts.cn/images/201501/l/34586_l_1421979223528.jpg" 
						>
							<IMG src="images/34586_t_1421979223617.jpg" 
							width="60" border="0" >
					</span>
										
				</LI>
						<LI>
										<span onclick="changeHrefNew('product_thumb_2')" 
						id="product_thumb_2"
						class="no_border has_pointer"
						alt="http://img3.onlyts.cn/images/201501/o/34586_o_1421979224837.jpg" 
						rev="http://img3.onlyts.cn/images/201501/l/34586_l_1421979224065.jpg" 
						>
							<IMG src="images/34586_t_1421979224663.jpg" 
							width="60" border="0" >
					</span>
										
				</LI>
						<LI>
										<span onclick="changeHrefNew('product_thumb_3')" 
						id="product_thumb_3"
						class="no_border has_pointer"
						alt="http://img4.onlyts.cn/images/201501/o/34586_o_1421979225555.jpg" 
						rev="http://img4.onlyts.cn/images/201501/l/34586_l_1421979225129.jpg" 
						>
							<IMG src="images/34586_t_1421979224285.jpg" 
							width="60" border="0" >
					</span>
										
				</LI>
			</ul>
<script type="text/javascript">
	var end;
	window.onload = function () {
		if(document.all) {//简单判断是否是IE
			end = setInterval('updateImg()', 1000);
		} else {
			end =true;
		}
	}
	
	function updateImg() {         
		if (document.readyState == "complete") {
			try{
				return true;
			}catch(err){
				return false;
			}
		}
	}
	function changeHref() {
		if(is_loaded && !is_changed && end) {
			$("#product_thumb_0").attr('href', $("#product_thumb_0").attr('alt'));
			$("#product_thumb_1").attr('href', $("#product_thumb_1").attr('alt'));
			$("#product_thumb_2").attr('href', $("#product_thumb_2").attr('alt'));
			$("#product_thumb_3").attr('href', $("#product_thumb_3").attr('alt'));
			$("#product_thumb_4").attr('href', $("#product_thumb_4").attr('alt'));
			var is_changed = true;
		}else {
			return false;
		}
	}
	
	function changeHrefNew(thumb_id) {
		$("#img_src").attr('src', $("#"+thumb_id).attr('alt'));
		return false;
	}
</script>	</div>
	
	<div id="product_details">
		<form action="javascript:addToCart(34586)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
		
		<div>
			<div id="product_price_area">
				<!-- <div id="product_market_price" title="市场价：￥1383">市场价：<span>￥1383</span></div> -->
								<div id="product_original_price" title="原价：￥1383">原价：<span>￥1383</span></div>
								
								<div id="product_sale_price" title="售价：：￥461"><span>售价：</span>￥461</div>
				<!--div id="delivery_points">送积分：0</div-->
			</div>
						
					</div>
		
		<div id="product_actions">
			<a name="select_color"></a>
								
									<div id="product_select_color">
						<span>请选择颜色：</span>
						<ul>
			        		
	                    		                      																					<li id="attr_193259" onclick="changeAtt(this, 193259)" name="193259"><p class="product_attr" title="淡黄色">淡黄色</p><input class="hide_element" id="spec_value_193259" type="radio" name="spec_211" spec_name="颜色" value="193259" /></a></li>
										                        		                    							</ul>
						<input type="hidden" name="spec_list" value="0" />
					</div>
									<div id="product_select_size">
						<span>请选择尺码：</span>
						<ul>
			        		
	                    		                      																					<li id="attr_193260" onclick="changeAtt(this, 193260)" name="193260"><p class="product_attr" title="2">2</p><input class="hide_element" id="spec_value_193260" type="radio" name="spec_212" spec_name="尺码" value="193260" /></a></li>
																			<li id="attr_193261" onclick="changeAtt(this, 193261)" name="193261"><p class="product_attr" title="4">4</p><input class="hide_element" id="spec_value_193261" type="radio" name="spec_212" spec_name="尺码" value="193261" /></a></li>
																			<li id="attr_193262" onclick="changeAtt(this, 193262)" name="193262"><p class="product_attr" title="6">6</p><input class="hide_element" id="spec_value_193262" type="radio" name="spec_212" spec_name="尺码" value="193262" /></a></li>
																			<li id="attr_193263" onclick="changeAtt(this, 193263)" name="193263"><p class="product_attr" title="8">8</p><input class="hide_element" id="spec_value_193263" type="radio" name="spec_212" spec_name="尺码" value="193263" /></a></li>
																			<li id="attr_193264" onclick="changeAtt(this, 193264)" name="193264"><p class="product_attr" title="10">10</p><input class="hide_element" id="spec_value_193264" type="radio" name="spec_212" spec_name="尺码" value="193264" /></a></li>
																			<li id="attr_193265" onclick="changeAtt(this, 193265)" name="193265"><p class="product_attr" title="12">12</p><input class="hide_element" id="spec_value_193265" type="radio" name="spec_212" spec_name="尺码" value="193265" /></a></li>
																			<li id="attr_193266" onclick="changeAtt(this, 193266)" name="193266"><p class="product_attr" title="14">14</p><input class="hide_element" id="spec_value_193266" type="radio" name="spec_212" spec_name="尺码" value="193266" /></a></li>
																			<li id="attr_193267" onclick="changeAtt(this, 193267)" name="193267"><p class="product_attr" title="16">16</p><input class="hide_element" id="spec_value_193267" type="radio" name="spec_212" spec_name="尺码" value="193267" /></a></li>
																			<li id="attr_193268" onclick="changeAtt(this, 193268)" name="193268"><p class="product_attr" title="16W">16W</p><input class="hide_element" id="spec_value_193268" type="radio" name="spec_212" spec_name="尺码" value="193268" /></a></li>
																			<li id="attr_193269" onclick="changeAtt(this, 193269)" name="193269"><p class="product_attr" title="18W">18W</p><input class="hide_element" id="spec_value_193269" type="radio" name="spec_212" spec_name="尺码" value="193269" /></a></li>
																			<li id="attr_193270" onclick="changeAtt(this, 193270)" name="193270"><p class="product_attr" title="20W">20W</p><input class="hide_element" id="spec_value_193270" type="radio" name="spec_212" spec_name="尺码" value="193270" /></a></li>
																			<li id="attr_193271" onclick="changeAtt(this, 193271)" name="193271"><p class="product_attr" title="22W">22W</p><input class="hide_element" id="spec_value_193271" type="radio" name="spec_212" spec_name="尺码" value="193271" /></a></li>
																			<li id="attr_193272" onclick="changeAtt(this, 193272)" name="193272"><p class="product_attr" title="24W">24W</p><input class="hide_element" id="spec_value_193272" type="radio" name="spec_212" spec_name="尺码" value="193272" /></a></li>
																			<li id="attr_193273" onclick="changeAtt(this, 193273)" name="193273"><p class="product_attr" title="26W">26W</p><input class="hide_element" id="spec_value_193273" type="radio" name="spec_212" spec_name="尺码" value="193273" /></a></li>
										                        		                    							</ul>
						<input type="hidden" name="spec_list" value="13" />
					</div>
							
			
			<div id="dialog" class="hide_element">
				<div id="share_con">
					<span id="share_title"></span>
					<a id="share_qqmsn" href="javascript:void(0);" onclick="Share('msn')" title="分享到QQ或MSN聊天窗口"></a>
					<a id="share_sinat" href="javascript:void(0);" onclick="Share('sina')" title="分享到我的新浪微博"></a>
					<a id="share_qqt" href="javascript:void(0);" onclick="Share('qq')" title="分享到我的腾讯微博"></a>
					<a id="share_kaixin" href="javascript:void(0);" onclick="Share('kaixin')" title="分享到开心网"></a>
					<a id="share_renren" href="javascript:void(0);" onclick="Share('renren')" title="分享到人人网"></a>
					<a id="share_douban" href="javascript:void(0);" onclick="Share('douban')" title="分享到豆瓣网"></a>
				</div>
				<div id="share_msn">
					<div id="share_msn_con">
						<span>复制下面的内容后通过 MSN 或 QQ 发送给好友：</span>
						<textarea tip="复制成功，请粘贴到你的MSN或QQ上推荐给您的好友" id="share-copy-text">TS 2015新款年会宴会礼服淡黄色长裙主持人礼服 售价：：￥461，详情： http://www.onlyts.cn/goods-34586.html</textarea>
						<span id="copytip">请使用 Ctrl + C 复制链接</span>
					</div>
				</div>
			</div>
			<div id="product_buy">
									<div id="product_select_amount">
						<span>请选择数量：</span>
						<input id="buy_number" name="number" type="text" id="number" value="1" size="4" onblur="changePrice()" readonly="readonly" />
						<span>&nbsp;件</span>
						<a href="javascript:void(0);" id="add" title="增加数量" onclick="buy_num_add();"></a>
						<a href="javascript:void(0);" id="remove" class="disabled" title="减少数量" onclick="buy_num_remove();"></a>
                        
                                           		<p class="tsPdAtt">7个工作日发货</p>
                   		                        
					</div>
					
					<div id="prod_stock">
					</div>
					
					<input type="hidden" id="show_prod_stock_flag" value=0>
					
					<script>
						//调整购买数量
						var buy_num_min = 1;
						var buy_num_max = 10;
						
						function buy_num_add(){
							var num = parseInt($("#buy_number").val());
						
							if(num==buy_num_max) return;
						
							num++;
							$("#buy_number").val(num);
							buy_num_init();
							//$("#remove").removeClass("disabled");
							
							//if(num>=buy_num_max) $("#add").addClass("disabled");
						}
						
						function buy_num_remove(){
							var num = parseInt($("#buy_number").val());
						
							if(num==buy_num_min) return;
							
							num--;
							$("#buy_number").val(num);
							$("#add").removeClass("disabled");
							
							if(num==buy_num_min) $("#remove").addClass("disabled");
						}
						
						var stock_list = {"193259":{"193263":"3","193264":"5","193266":"7","193265":"8"}};
						function buy_num_init(){
							var color = size = max = 0;
							$("#product_select_color li").each(function(){
								if($(this).hasClass("selected")) color = $(this).children("input").val();
							});
							if(color>0){
								for(var index in stock_list[color]){
									max += parseInt(stock_list[color][index]);
								}
							}
						
							$("#product_select_size li").each(function(){
								if($(this).hasClass("selected")) size = $(this).children("input").val();
							});
							
							if(size>0 && color == 0){
								for(var index2 in stock_list[size]){
									max = parseInt(stock_list[size][index2]);
								}
							}else if(color>0 && size>0){
								max = parseInt(stock_list[color][size]);
							}
							
							if($("#show_prod_stock_flag").val() == 1) {
								$("#prod_stock").html("<span>库存:</span> "+max+" <span>  件</span>");
							}
						
							//整理购买数量区域
							if(max>10) max = 10;
							if(max<1) max = 1;
							max_buy_num = max;
						
							var num = parseInt($("#buy_number").val());
							if(num>max_buy_num) $("#buy_number").val(max_buy_num);
						
							num = parseInt($("#buy_number").val());
							$("#add").removeClass("disabled");
							$("#remove").removeClass("disabled");
							if(num==max_buy_num) $("#add").addClass("disabled");
							if(num==1) $("#remove").addClass("disabled");
						}
						
						$(document).ready(function(){
							$("#buy_number").val(1);
						});
					</script>
				
				<div id="product_select_add">
		<a title="加入购物篮" id="product_addtocart" href="javascript:addToCart(34586)"></a>		
		
	<div id="product_soldinfo">已销售<span id="soldcount">13</span> 件，目前 <span id="soldstatus">有货</span></div>
</div>			</div>
			<div id="product_share_area">
				<a title="收藏" id="product_addfavor" href="javascript: if(onlyOne(onlyOne_collect)){ var onlyOne_collect = true; var sharetosina=0;collect(34586, sharetosina);}"></a>
				<a title="分享" id="product_share" href="javascript:void(0);" onclick="create_share_dialog();"></a>
				<div id="product_sharesina" title="分享到我的新浪微博">
					<script type="text/javascript" charset="utf-8">
						(function(){
			  				var share_thumb = 'images/34586_l_1421979221043.jpg';
							var share_goods_name = 'TS 2015新款年会宴会礼服淡黄色长裙主持人礼服';
							var share_goods_id = '34586';
							var share_price = '￥461';
							var t = share_goods_name + ' ';
							var z = 'http://www.onlyts.cn/goods-' + share_goods_id + '.html';
			  				var _w = 90 , _h = 24;
			  				var param = {
			    				url: z,
			    				type:'2',
			    				count:'1',
			    				appkey:'436507378',
			    				title: t,
			    				pic: share_thumb,
			    				ralateUid:'1764069851',
			    				rnd:new Date().valueOf()
			  				}
			  				var temp = [];
			  				for( var p in param ){
			    				temp.push(p + '=' + encodeURIComponent( param[p] || '' ) )
			 	 			}
			  				document.write('<iframe allowTransparency="true" frameborder="0" scrolling="no" src="http://hits.sinajs.cn/A1/weiboshare.html?' + temp.join('&') + '" width="'+ _w+'" height="'+_h+'"></iframe>')
						})()
					</script>
				</div>
			</div>
			<div id="product_trust" title="放心购买：货到付款 支持开箱验货">
				<img src="images/promote_img.jpg">
			</div>
		</div>
	</div>
	
	
	<!--[if IE 6]>
				<script type="text/javascript">
			DD_belatedPNG.fix('#product_trust');
		</script>
	<![endif]-->
	<script>
		//一次性操作
		function onlyOne(val){
			if(typeof(val)!='undefined'){
				alert(duplicate_action);
				return false;
			}else return true;
		}
	</script>
	
	
	<div id="product_intros">
		<div id="product_intros_details">
			<div style="text-align: right; margin-top: 10px; color: #666; font-size: 12px">*温馨提示：平铺测量尺寸，单位：CM厘米， 没有拉伸，不考虑弹性范围内的数据，误差范围1～3CM</div>
<table cellspacing="0" cellpadding="0" border="0" width="750" align="center">
    <tbody>
        <tr>
            <td style="border-bottom: #ddd 1px solid"><span style="border-bottom: #ddd 1px solid"><img border="0" alt="" src="images/T2whvfXz0XXXXXXXXX-462939657.png" /></span></td>
        </tr>
        <tr>
            <td height="15">&nbsp;</td>
        </tr>
        <tr>
            <td align="center">
            <p><img src="/Home/public/images/70140003959288_y.jpg" alt="" />&nbsp;</p>
            <p><img src="/Home/public/images/70140003959280_y.jpg" alt="" />&nbsp;</p>
            <p><img src="/Home/public/images/70140003959292_y.jpg" alt="" />&nbsp;</p>
            <p><img src="/Home/public/images/70140003959285_y.jpg" alt="" />&nbsp;</p>
            <p><img src="/Home/public/images/70140003959289_y.jpg" alt="" />&nbsp;</p>
            </td>
        </tr>
        <tr>
        </tr>
        <tr>
            <td style="border-bottom: #ddd 1px solid">
            <p><img border="0" alt="" src="images/T2T22gXqhXXXXXXXXX-462939657.png" /></p>
            <p><img height="557" width="628" src="images/70140003961771_y.jpg" alt="" /></p>
            </td>
        </tr>
    </tbody>
</table>		</div>
		<dl id="product_intros_dl">
			<dt id="intro_customer_reviews"></dt>
			<dd id="comments_info_dd">
			<div id="comments_info">
				<a href="comments-34586.html" id="write_review" title="我来写评论">我来写评论</a>
				<span id="goods_score">商品评分：</span><span class="review_star rs5"></span><span id="goods_average_score"><span class="score_size">5</span>分</span>			
				<span id="comments_num">此商品共0条评论，<a href="comments-34586.html" id="check_all_comments" title="查看所有评论>>">查看所有评论<span class="check_all_comments_tag">>></span></a></span>
			</div>
			</dd>
			<dd>
				<div id="ECS_COMMENT"> 



<div id="review_noreview">暂时还没有任何用户评论</div>




<div id="comments_info_footer">			
	<span id="comments_num">此商品共0条评论，</span><a href="comments-34586.html" id="check_all_comments" title="查看所有评论>>">查看所有评论<span class="check_all_comments_tag">>></span></a>
</div>






<script type="text/javascript">
//<![CDATA[
var cmt_empty_username = "请输入您的用户名称";
var cmt_empty_email = "请输入您的电子邮件地址";
var cmt_error_email = "电子邮件地址格式不正确";
var cmt_empty_content = "您没有输入评论的内容";
var captcha_not_null = "验证码不能为空!";
var cmt_invalid_comments = "无效的评论内容!";

/**
 * 提交评论信息
*/
function submitComment(frm)
{
  var cmt = new Object;

  //cmt.username        = frm.elements['username'].value;
  cmt.sharetosina	  = frm.elements['sharetosina'].value;
  cmt.email           = frm.elements['email'].value;
  cmt.content         = frm.elements['content'].value;
  cmt.type            = frm.elements['cmt_type'].value;
  cmt.id              = frm.elements['id'].value;
  cmt.enabled_captcha = frm.elements['enabled_captcha'] ? frm.elements['enabled_captcha'].value : '0';
  cmt.captcha         = frm.elements['captcha'] ? frm.elements['captcha'].value : '';
  cmt.rank            = 0;

  for (i = 0; i < frm.elements['comment_rank'].length; i++)
  {
    if (frm.elements['comment_rank'][i].checked)
    {
       cmt.rank = frm.elements['comment_rank'][i].value;
     }
  }

//  if (cmt.username.length == 0)
//  {
//     alert(cmt_empty_username);
//     return false;
//  }

  if (cmt.email.length > 0)
  {
     if (!(Utils.isEmail(cmt.email)))
     {
        alert(cmt_error_email);
        return false;
      }
   }
   else
   {
        alert(cmt_empty_email);
        return false;
   }

   if (cmt.content.length == 0)
   {
      alert(cmt_empty_content);
      return false;
   }

   if (cmt.enabled_captcha > 0 && cmt.captcha.length == 0 )
   {
      alert(captcha_not_null);
      return false;
   }

   Ajax.call('comment.php', 'cmt=' + $.toJSON(cmt), commentResponse, 'POST', 'JSON');
   return false;
}

/**
 * 处理提交评论的反馈信息
*/
  function commentResponse(result)
  {
    if (result.message)
    {
      alert(result.message);
    }

    if (result.error == 0)
    {
      var layer = $('#ECS_COMMENT');

      if (layer)
      {
      	layer.html('');
        layer.html(result.content);
      }
    }
  }

//]]>
</script></div>
			</dd>
		</dl>
	</div>
	<div id="product_slide">
		
			</div>
</div>
</div>
	
</div>
<div id="rightbar">
	
			
	
			
</div>
	
		<div id="service_note">
			
							
			
						
			<div id="big_service_tag">
				<div id="top_black"></div>
				<a href="javascript:void(0)" id="customer_center"></a>
				<a href="javascript:void(0)" id="customer_before_sale"></a>
																	  											<a id="customer_wwang_contact" href="http://amos1.taobao.com/msg.ww?v=2&uid=%E5%85%B0%E4%BA%AD%E8%B4%B8%E6%98%93&s=2" target="_blank"></a>
					  								<a href="javascript:void(0)" id="customer_online_time"></a>
				<a href="javascript:void(0)" id="custome_cart"></a>
				<p>已有<a href="/flow.php">  </a>件商品</p>
				<a href="javascript:void(0)" id="custome_add_to_collection" onclick="addBookmark('--TS品牌欧美时尚女装网购--','http://www.onlyts.cn/?from=favorite')"></a>
				<a href="javascript:void(0)" id="back_to_top"></a>
			</div>
		</div>
	
<SCRIPT language="JavaScript">
var rightbarAd={
	controlattrs: {offsety:158},
	keepfixed:function(){
		var $window=jQuery(window);
		var controlx=$window.scrollLeft() + $window.width() - $('#rightbar').width();
		var controly=$window.scrollTop() + this.controlattrs.offsety;
		$('#rightbar').css({right:'0px', top:controly+'px'});
	},
	
	positioncontrol:function(){
		if (!this.cssfixedsupport)
			this.keepfixed();
	},
	
	init:function(){
		jQuery(document).ready(function($){
			var rightbarobj=rightbarAd;
			var iebrws=document.all;
			rightbarobj.cssfixedsupport=!iebrws || iebrws && document.compatMode=="CSS1Compat" && window.XMLHttpRequest; //not IE or IE7+ browsers in standards mode
			$('#rightbar').bind("mouseover", function() {
					$('#small_tag').hide();
					$('#big_tag').show();			
			});
			$('#rightbar').bind("mouseleave", function() {
					$('#big_tag').hide();
					$('#small_tag').show();
				}
			);
			rightbarobj.positioncontrol();
			$(window).bind('scroll resize', function(e){
				rightbarobj.positioncontrol();
			});
		});
	}
};
rightbarAd.init();
var serviceNote={
	controlattrs: {offsety:158},
	keepfixed:function(){
		var $window=jQuery(window);
		var controlx=$window.scrollLeft() + $window.width() - $('#service_note').width();
		var controly=$window.scrollTop() + this.controlattrs.offsety;
		$('#service_note').css({right:'0px', top:controly+'px'});
	},
	
	positioncontrol:function(){
		if (!this.cssfixedsupport)
			this.keepfixed();
	},
	
	init:function() {
		jQuery(document).ready(function($){
			var serviceNoteobj=serviceNote;
			var iebrws=document.all;
			serviceNoteobj.cssfixedsupport=!iebrws || iebrws && document.compatMode=="CSS1Compat" && window.XMLHttpRequest; //not IE or IE7+ browsers in standards mode
			$('#service_note').bind("mouseover", function() {
					$('#small_service_tag').hide();
					$('#big_service_tag').show();			
			});
			$('#service_note').bind("mouseleave", function() {
					$('#big_service_tag').hide();
					$('#small_service_tag').show();
				}
			);
			serviceNoteobj.positioncontrol();
			$(window).bind('scroll resize', function(e){
				serviceNoteobj.positioncontrol();
			});
			$('#big_service_tag').hide();
			$('#small_service_tag').show();
		});
	}
};
serviceNote.init();
</SCRIPT>
<script type="text/javascript" src="js/mediav_traffic.js?version=V310001.js"></script>
<script language="JavaScript">
var share_thumb = 'images/34586_l_1421979221043.jpg';
var share_goods_name = 'TS 2015新款年会宴会礼服淡黄色长裙主持人礼服';
var share_goods_id = '34586';
var share_price = '￥461';
function shareSineT(s,d,e,r,l,p,t,z,c) 
{
	var f='http://service.t.sina.com.cn/share/share.php?appkey=436507378&ralateUid=1764069851',u=z||d.location,p=['&url=',e(u),'&title=',e(t||d.title),'&source=',e(r),'&sourceUrl=',e(l),'&content=',c||'gb2312','&pic=',e(p||'')].join('');
	function a()
	{
		if(!(subWinSineT = window.open([f,p].join(''),'mb',['toolbar=0,status=0,resizable=1,width=440,height=430,left=',(s.width-440)/2,',top=',(s.height-430)/2].join(''))))
			u.href=[f,p].join('');
	}
	if(/Firefox/.test(navigator.userAgent))
		setTimeout(a,0);
	else 
		a();
}
function shareKaixin(s,d,e,r,l,p,t,z,c)
{
	var f='http://www.kaixin001.com/repaste/share.php',u=z||d.location,p=['?rurl=',e(u),'&rtitle=',e(t||d.title),'&source=',e(r),'&sourceUrl=',e(l),'&rcontent=',c||'','&pic=',e(p||'')].join('');
	function a()
	{
		if(!(subWinKaixin = window.open([f,p].join(''),'mb',['toolbar=0,status=0,resizable=1,width=530,height=360,left=',(s.width-530)/2,',top=',(s.height-360)/2].join(''))))
			u.href=[f,p].join('');
	}
	if(/Firefox/.test(navigator.userAgent))
		setTimeout(a,0);
	else 
		a();
}
function shareRenren(s,d,e,r,l,p,t,z,c)
{
	var f='http://share.renren.com/share/buttonshare.do',u=z||d.location,p=['?link=',e(u),'&title=',e(t||d.title),'&source=',e(r),'&sourceUrl=',e(l),'&content=',c||'gb2312','&pic=',e(p||'')].join('');
	function a()
	{
		if(!(subWinRenren = window.open([f,p].join(''),'mb',['toolbar=0,status=0,resizable=1,scrollbars,width=580,height=370,left=',(s.width-580)/2,',top=',(s.height-370)/2].join(''))))
			u.href=[f,p].join('');
	}
	if(/Firefox/.test(navigator.userAgent))
		setTimeout(a,0);
	else 
		a();
}
function shareDouban(s,d,e,r,l,p,t,z,c)
{
	var f='http://www.douban.com/recommend/',u=z||d.location,p=['?url=',e(u),'&title=',e(t||d.title),'&source=',e(r),'&sourceUrl=',e(l),'&content=',c||'gb2312','&pic=',e(p||'')].join('');
	function a()
	{
		if(!(subWinDouban = window.open([f,p].join(''),'mb',['toolbar=0,status=0,resizable=1,width=440,height=380,left=',(s.width-440)/2,',top=',(s.height-380)/2].join(''))))
			u.href=[f,p].join('');
	}
	if(/Firefox/.test(navigator.userAgent))
		setTimeout(a,0);
	else
		a();
}
function shareQQT(s,d,e,r,l,p,t,z,c){
	var f='http://v.t.qq.com/share/share.php?appkey=7eed1272c21740159a04c38b7d0e65c3',u=z||d.location,p=['&url=',e(u),'&title=',e(t||d.title),'&site=',e(r),'&sourceUrl=',e(l),'&pic=',e(p||'')].join('');
	function a()
	{
		if(!(subWinQQT = window.open([f,p].join(''),'mb',['toolbar=0,status=0,resizable=1,width=700,height=680,left=',(s.width-700)/2,',top=',(s.height-680)/2].join(''))))
			u.href=[f,p].join('');
	}
	if(/Firefox/.test(navigator.userAgent))
		setTimeout(a,0);
	else 
		a();
} 
function Share(type)
{
	if(type == "sina"){		
		shareSineT(screen,document,encodeURIComponent,'','',share_thumb,share_goods_name + ' ','http://www.onlyts.cn/goods-' + share_goods_id + '.html','utf-8');
	}	
	else if(type == "kaixin"){
		shareKaixin(screen,document,encodeURIComponent,'','',share_thumb, share_goods_name,'', share_goods_name + ' http://www.onlyts.cn/goods-' + share_goods_id + ".html");
	}
	else if(type == "renren"){
		shareRenren(screen,document,encodeURIComponent,'','',share_thumb, share_goods_name,'http://www.onlyts.cn/goods-' + share_goods_id + ".html",'utf-8');
	}
	else if(type == "douban"){
		shareDouban(screen,document,encodeURIComponent,'','',share_thumb, share_goods_name,'http://www.onlyts.cn/goods-' + share_goods_id + ".html",'utf-8');
	}
	else if(type == "qq"){
		shareQQT(screen,document,encodeURIComponent,'','',share_thumb, share_goods_name + ' http://www.onlyts.cn/goods-' + share_goods_id + ".html @TS绝对搭配",'http://www.onlyts.cn/');
	}	
	else if(type == "msn"){
		new Dialog({type:'id',value:'share_msn'}).show();
	}
	share_dialog.close();
}
function create_share_dialog(){
	share_dialog = new Dialog({type:'id',value:'dialog'});
	share_dialog.show();
}
function copyToCB(tid) {
	var o = $('#'+tid); o.select(); var maintext = o.val();
	if (window.clipboardData) {
		if ((window.clipboardData.setData("Text", maintext))) {
			var tip = o.attr('tip'); if ( tip ) alert(tip);
			return true;
		}
	}
	else {
		$('#copytip').show();
		return true;
	}
	return false;
};
$('#share-copy-text').click(function(){
$(this).select();copyToCB('share-copy-text');
});
</script>
<script>
	if(uncheckedAllInput()) {
		setShortage();
					$("#spec_value_"+193259).attr("checked", true);
			document.getElementById("attr_"+193259).className = "selected";
			};
</script>
<div id="rightbar_bonus">
</div>

<?php


include '../foot.php';





?>




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
