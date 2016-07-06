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
</script></head>
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
		<li><a href="." title="首页">首页</a><em></em></li> <li><a title="全部商品" href="category-36-b0.html">全部商品</a><em></em></li> <li><a title="新品" href="category-40-b0.html">新品</a><em class="last2"></em></li> <li class="last"><a class="last" title="1月20号新品" href="category-881-b0.html">1月20号新品</a><em class="last"></em></li>	</ul>
</div>
<div id="main" class="cf">
	<div id="product_list_main">
	<div id="left_column_nav">
		
		
<div class="newTsLeftMenuModule cf">
    <div class="newTsLeftMenuTitle">品牌</div>
    <ul class="newTsAttributeItems ">
						<li><a href="#" class="enabled" title="所有品牌">所有品牌</a></li>
								<li><a href="http://www.onlyts.cn/category-881-b99999-min0-max0-attr0.html" title="其他品牌">其他品牌</a></li>
			    </ul>
</div>
<div class="newTsLeftMenuModule newTsLeftMenuTree cf">
  <ul class="newTsLeftMenuTreeName">
  										<li><a href="http://www.onlyts.cn/category-1.html"  title="外套">外套</a></li>
												<li><a href="http://www.onlyts.cn/category-83.html"  title="热荐">热荐</a></li>
												<li><a href="http://www.onlyts.cn/category-32.html"  title="连衣裙">连衣裙</a></li>
												<li><a href="http://www.onlyts.cn/category-33.html"  title="上衣">上衣</a></li>
												<li><a href="http://www.onlyts.cn/category-152.html"  title="小礼服">小礼服</a></li>
												<li><a href="http://www.onlyts.cn/category-165.html"  title="复古系列">复古系列</a></li>
												<li><a href="http://www.onlyts.cn/category-71.html"  title="折扣">折扣</a></li>
												<li><a href="http://www.onlyts.cn/category-34.html"  title="下装">下装</a></li>
											    </ul>
</div>
			<div class="newTsLeftMenuModule cf">
          <div class="newTsLeftMenuTitle">尺码:</div>
          <ul class="newTsAttributeItems ">
							<li><a href="http://www.onlyts.cn/category-881-b0-min0-max0-attr0.html" class="enabled">全部</a></li>
							<li><a href="http://www.onlyts.cn/category-881-b0-min0-max0-attr1.html" >2</a></li>
							<li><a href="http://www.onlyts.cn/category-881-b0-min0-max0-attr2.html" >4</a></li>
							<li><a href="http://www.onlyts.cn/category-881-b0-min0-max0-attr3.html" >6</a></li>
							<li><a href="http://www.onlyts.cn/category-881-b0-min0-max0-attr4.html" >8</a></li>
							<li><a href="http://www.onlyts.cn/category-881-b0-min0-max0-attr5.html" >10</a></li>
							<li><a href="http://www.onlyts.cn/category-881-b0-min0-max0-attr6.html" >12</a></li>
							<li><a href="http://www.onlyts.cn/category-881-b0-min0-max0-attr7.html" >14</a></li>
							<li><a href="http://www.onlyts.cn/category-881-b0-min0-max0-attr8.html" >16</a></li>
							<li><a href="http://www.onlyts.cn/category-881-b0-min0-max0-attr9.html" >16W</a></li>
							<li><a href="http://www.onlyts.cn/category-881-b0-min0-max0-attr10.html" >18W</a></li>
							<li><a href="http://www.onlyts.cn/category-881-b0-min0-max0-attr11.html" >20W</a></li>
							<li><a href="http://www.onlyts.cn/category-881-b0-min0-max0-attr12.html" >22W</a></li>
							<li><a href="http://www.onlyts.cn/category-881-b0-min0-max0-attr13.html" >24W</a></li>
							<li><a href="http://www.onlyts.cn/category-881-b0-min0-max0-attr14.html" >26W</a></li>
			          </ul>
        </div>
	
		
				
				
		 
				
			
	</div>
	
	<div id="right_column_content">
	
		
					
		<h1 id="product_list_headline">新品 &gt; 1月20号新品</h1>
							
			<div id="product_list_sort">
				<span id="by_new">按上架</span>
				<a id="desc_new"  href="/category-881-b0-min0-max0-attr0-1-goods_id-DESC-shownormal.html" title="按上架时间从新到旧显示商品顺序">新的在前</a>
				
				<span id="by_price">按价格</span>
				<a id="asc_price"  href="/category-881-b0-min0-max0-attr0-1-shop_price-ASC-shownormal.html" title="按价格从低到高显示商品">低到高</a>
				<a id="desc_price"  href="/category-881-b0-min0-max0-attr0-1-shop_price-DESC-shownormal.html" title="按价格从高到低显示商品">高到低</a>
				<!--
					<span id="by_sale">按销量</span>
					<a id="desc_sale" href="" class="selected" title="当前按照销量从高到低排序">高到低</a><a id="asc_sale" href="">低到高</a>
				-->
								 
			</div>
				
				
							
<form name="selectPageForm" action="/category.php" method="get">
	
	 <div class="page page_right">
	  <div class="page_desc">共 28 款 </div>
	  1/1 页 	  	  	<a class="page_prev disable" href="javascript:void(0)">上一页</a>
	  	  
	  	  	<a class="page_next disable" href="javascript:void(0)">下一页</a>
	  	  
	</div>
	
</form>
<script type="Text/Javascript" language="JavaScript">
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>						
			<ul id="product_list_lists" class="cf lazyLoadClass">			
				
            	    	<li class="list_item5 ">
			<div class="item_image">
				<a title="TS 2015新款年会宴会礼服淡黄色长裙主持人礼服" href="goods-34586.html" target="_blank">
					<img alt="TS 2015新款年会宴会礼服淡黄色长裙主持人礼服" src="images/34586_m_1421979221954.jpg"  width="180px" height="270px"/>
				</a>
												</div>
			<p class="item_name">
				<a href="goods-34586.html" target="_blank" title="TS 2015新款年会宴会礼服淡黄色长裙主持人礼服">TS 2015新款年会宴会礼服淡黄色长裙主持人礼...</a>
			</p>
			<p class="product_price pink" title="售价：￥461">
				￥461			
								<span class="mprice" title="原价：￥1383">原价：<span>￥1383</span></span>	
							</p>
		</li>    	
    	        	    	<li class="list_item5 ">
			<div class="item_image">
				<a title="TS 2015新款年会礼服主持人服装女装连衣裙亮片鱼尾" href="goods-34585.html" target="_blank">
					<img alt="TS 2015新款年会礼服主持人服装女装连衣裙亮片鱼尾" src="images/34585_m_1421974192658.jpg"  width="180px" height="270px"/>
				</a>
												</div>
			<p class="item_name">
				<a href="goods-34585.html" target="_blank" title="TS 2015新款年会礼服主持人服装女装连衣裙亮片鱼尾">TS 2015新款年会礼服主持人服装女装连衣裙亮...</a>
			</p>
			<p class="product_price pink" title="售价：￥568">
				￥568			
								<span class="mprice" title="原价：￥1707">原价：<span>￥1707</span></span>	
							</p>
		</li>    	
    	        	    	<li class="list_item5 ">
			<div class="item_image">
				<a title="TS 2015新款年会宴会礼服长款淡紫色主持人礼服拖尾" href="goods-34584.html" target="_blank">
					<img alt="TS 2015新款年会宴会礼服长款淡紫色主持人礼服拖尾" src="images/34584_m_1421973160841.jpg"  width="180px" height="270px"/>
				</a>
												</div>
			<p class="item_name">
				<a href="goods-34584.html" target="_blank" title="TS 2015新款年会宴会礼服长款淡紫色主持人礼服拖尾">TS 2015新款年会宴会礼服长款淡紫色主持人礼...</a>
			</p>
			<p class="product_price pink" title="售价：￥469">
				￥469			
								<span class="mprice" title="原价：￥1409">原价：<span>￥1409</span></span>	
							</p>
		</li>    	
    	        	    	<li class="list_item5 i5_fix">
			<div class="item_image">
				<a title="TS 2015新款年会宴会 象牙白礼服大码聚会礼服V领" href="goods-34582.html" target="_blank">
					<img alt="TS 2015新款年会宴会 象牙白礼服大码聚会礼服V领" src="images/34582_m_1421971356050.jpg"  width="180px" height="270px"/>
				</a>
												</div>
			<p class="item_name">
				<a href="goods-34582.html" target="_blank" title="TS 2015新款年会宴会 象牙白礼服大码聚会礼服V领">TS 2015新款年会宴会 象牙白礼服大码聚会礼...</a>
			</p>
			<p class="product_price pink" title="售价：￥507">
				￥507			
								<span class="mprice" title="原价：￥1522">原价：<span>￥1522</span></span>	
							</p>
		</li>    	
    	        	    	<li class="list_item5 ">
			<div class="item_image">
				<a title="TS 2015新款年会礼服主持人礼服钉珠齐地长裙深海蓝色" href="goods-34581.html" target="_blank">
					<img alt="TS 2015新款年会礼服主持人礼服钉珠齐地长裙深海蓝色" src="images/34581_m_1421970624138.jpg"  width="180px" height="270px"/>
				</a>
												</div>
			<p class="item_name">
				<a href="goods-34581.html" target="_blank" title="TS 2015新款年会礼服主持人礼服钉珠齐地长裙深海蓝色">TS 2015新款年会礼服主持人礼服钉珠齐地长裙...</a>
			</p>
			<p class="product_price pink" title="售价：￥559">
				￥559			
								<span class="mprice" title="原价：￥1679">原价：<span>￥1679</span></span>	
							</p>
		</li>    	
    	        	    	<li class="list_item5 ">
			<div class="item_image">
				<a title="TS 2015新款礼服灰绿色花朵连衣裙公主裙年会聚会礼服" href="goods-34580.html" target="_blank">
					<img alt="TS 2015新款礼服灰绿色花朵连衣裙公主裙年会聚会礼服" src="images/34580_m_1421969564966.jpg"  width="180px" height="270px"/>
				</a>
												</div>
			<p class="item_name">
				<a href="goods-34580.html" target="_blank" title="TS 2015新款礼服灰绿色花朵连衣裙公主裙年会聚会礼服">TS 2015新款礼服灰绿色花朵连衣裙公主裙年会...</a>
			</p>
			<p class="product_price pink" title="售价：￥410">
				￥410			
								<span class="mprice" title="原价：￥1232">原价：<span>￥1232</span></span>	
							</p>
		</li>    	
    	        	    	<li class="list_item5 ">
			<div class="item_image">
				<a title="TS 2015新款中长裙礼服钉珠双肩深绿色公主裙" href="goods-34579.html" target="_blank">
					<img alt="TS 2015新款中长裙礼服钉珠双肩深绿色公主裙" src="images/34579_m_1421966206941.jpg"  width="180px" height="270px"/>
				</a>
												</div>
			<p class="item_name">
				<a href="goods-34579.html" target="_blank" title="TS 2015新款中长裙礼服钉珠双肩深绿色公主裙">TS 2015新款中长裙礼服钉珠双肩深绿色公主裙</a>
			</p>
			<p class="product_price pink" title="售价：￥530">
				￥530			
								<span class="mprice" title="原价：￥1593">原价：<span>￥1593</span></span>	
							</p>
		</li>    	
    	        	    	<li class="list_item5 i5_fix">
			<div class="item_image">
				<a title="TS 2015新款礼服 淡黄色双肩蝴蝶结公司年会礼服" href="goods-34578.html" target="_blank">
					<img alt="TS 2015新款礼服 淡黄色双肩蝴蝶结公司年会礼服" src="images/34578_m_1421964048607.jpg"  width="180px" height="270px"/>
				</a>
												</div>
			<p class="item_name">
				<a href="goods-34578.html" target="_blank" title="TS 2015新款礼服 淡黄色双肩蝴蝶结公司年会礼服">TS 2015新款礼服 淡黄色双肩蝴蝶结公司年会...</a>
			</p>
			<p class="product_price pink" title="售价：￥334">
				￥334			
								<span class="mprice" title="原价：￥1003">原价：<span>￥1003</span></span>	
							</p>
		</li>    	
    	        	    	<li class="list_item5 ">
			<div class="item_image">
				<a title="TS 2015新款礼服年会晚礼服主持人礼服银白色双肩" href="goods-34577.html" target="_blank">
					<img alt="TS 2015新款礼服年会晚礼服主持人礼服银白色双肩" src="images/34577_m_1421952878734.jpg"  width="180px" height="270px"/>
				</a>
												</div>
			<p class="item_name">
				<a href="goods-34577.html" target="_blank" title="TS 2015新款礼服年会晚礼服主持人礼服银白色双肩">TS 2015新款礼服年会晚礼服主持人礼服银白色...</a>
			</p>
			<p class="product_price pink" title="售价：￥427">
				￥427			
								<span class="mprice" title="原价：￥1281">原价：<span>￥1281</span></span>	
							</p>
		</li>    	
    	        	    	<li class="list_item5 ">
			<div class="item_image">
				<a title="TS 2015新款年会宴会 礼服紫红色礼服 连衣裙 名媛" href="goods-34576.html" target="_blank">
					<img alt="TS 2015新款年会宴会 礼服紫红色礼服 连衣裙 名媛" src="images/34576_m_1421888198041.jpg"  width="180px" height="270px"/>
				</a>
												</div>
			<p class="item_name">
				<a href="goods-34576.html" target="_blank" title="TS 2015新款年会宴会 礼服紫红色礼服 连衣裙 名媛">TS 2015新款年会宴会 礼服紫红色礼服 连衣...</a>
			</p>
			<p class="product_price pink" title="售价：￥375">
				￥375			
								<span class="mprice" title="原价：￥1126">原价：<span>￥1126</span></span>	
							</p>
		</li>    	
    	        	    	<li class="list_item5 ">
			<div class="item_image">
				<a title="TS 2015新款聚会公司年会礼服红色公主裙连衣裙" href="goods-34575.html" target="_blank">
					<img alt="TS 2015新款聚会公司年会礼服红色公主裙连衣裙" src="images/34575_m_1421887491156.jpg"  width="180px" height="270px"/>
				</a>
												</div>
			<p class="item_name">
				<a href="goods-34575.html" target="_blank" title="TS 2015新款聚会公司年会礼服红色公主裙连衣裙">TS 2015新款聚会公司年会礼服红色公主裙连衣...</a>
			</p>
			<p class="product_price pink" title="售价：￥429">
				￥429			
								<span class="mprice" title="原价：￥1288">原价：<span>￥1288</span></span>	
							</p>
		</li>    	
    	        	    	<li class="list_item5 i5_fix">
			<div class="item_image">
				<a title="TS 2015新款主持人礼服粉色长裙连衣裙伴娘团礼服" href="goods-34574.html" target="_blank">
					<img alt="TS 2015新款主持人礼服粉色长裙连衣裙伴娘团礼服" src="images/34574_m_1421886694683.jpg"  width="180px" height="270px"/>
				</a>
												</div>
			<p class="item_name">
				<a href="goods-34574.html" target="_blank" title="TS 2015新款主持人礼服粉色长裙连衣裙伴娘团礼服">TS 2015新款主持人礼服粉色长裙连衣裙伴娘团...</a>
			</p>
			<p class="product_price pink" title="售价：￥394">
				￥394			
								<span class="mprice" title="原价：￥1182">原价：<span>￥1182</span></span>	
							</p>
		</li>    	
    	        	    	<li class="list_item5 ">
			<div class="item_image">
				<a title="TS 2015新款春季礼服深海蓝色名媛宴会抹胸长款" href="goods-34573.html" target="_blank">
					<img alt="TS 2015新款春季礼服深海蓝色名媛宴会抹胸长款" src="images/34573_m_1421885889991.jpg"  width="180px" height="270px"/>
				</a>
												</div>
			<p class="item_name">
				<a href="goods-34573.html" target="_blank" title="TS 2015新款春季礼服深海蓝色名媛宴会抹胸长款">TS 2015新款春季礼服深海蓝色名媛宴会抹胸长...</a>
			</p>
			<p class="product_price pink" title="售价：￥442">
				￥442			
								<span class="mprice" title="原价：￥1326">原价：<span>￥1326</span></span>	
							</p>
		</li>    	
    	        	    	<li class="list_item5 ">
			<div class="item_image">
				<a title="TS 2015新款年会宴会 礼服金色长裙" href="goods-34572.html" target="_blank">
					<img alt="TS 2015新款年会宴会 礼服金色长裙" src="images/34572_m_1421885237151.jpg"  width="180px" height="270px"/>
				</a>
												</div>
			<p class="item_name">
				<a href="goods-34572.html" target="_blank" title="TS 2015新款年会宴会 礼服金色长裙">TS 2015新款年会宴会 礼服金色长裙</a>
			</p>
			<p class="product_price pink" title="售价：￥503">
				￥503			
								<span class="mprice" title="原价：￥1510">原价：<span>￥1510</span></span>	
							</p>
		</li>    	
    	        	    	<li class="list_item5 ">
			<div class="item_image">
				<a title="TS 2015新款年会宴会 礼服紫色长裙" href="goods-34571.html" target="_blank">
					<img alt="TS 2015新款年会宴会 礼服紫色长裙" src="images/34571_m_1421884612908.jpg"  width="180px" height="270px"/>
				</a>
												</div>
			<p class="item_name">
				<a href="goods-34571.html" target="_blank" title="TS 2015新款年会宴会 礼服紫色长裙">TS 2015新款年会宴会 礼服紫色长裙</a>
			</p>
			<p class="product_price pink" title="售价：￥253">
				￥253			
								<span class="mprice" title="原价：￥1062">原价：<span>￥1062</span></span>	
							</p>
		</li>    	
    	        	    	<li class="list_item5 i5_fix">
			<div class="item_image">
				<a title="TS 2015新款年会宴会 礼服象牙白长裙" href="goods-34569.html" target="_blank">
					<img alt="TS 2015新款年会宴会 礼服象牙白长裙" src="images/34569_m_1421883023309.jpg"  width="180px" height="270px"/>
				</a>
												</div>
			<p class="item_name">
				<a href="goods-34569.html" target="_blank" title="TS 2015新款年会宴会 礼服象牙白长裙">TS 2015新款年会宴会 礼服象牙白长裙</a>
			</p>
			<p class="product_price pink" title="售价：￥597">
				￥597			
								<span class="mprice" title="原价：￥1791">原价：<span>￥1791</span></span>	
							</p>
		</li>    	
    	        	    	<li class="list_item5 ">
			<div class="item_image">
				<a title="TS 2015新款年会宴会 礼服珍珠粉短裙" href="goods-34568.html" target="_blank">
					<img alt="TS 2015新款年会宴会 礼服珍珠粉短裙" src="images/34568_m_1421881822039.jpg"  width="180px" height="270px"/>
				</a>
												</div>
			<p class="item_name">
				<a href="goods-34568.html" target="_blank" title="TS 2015新款年会宴会 礼服珍珠粉短裙">TS 2015新款年会宴会 礼服珍珠粉短裙</a>
			</p>
			<p class="product_price pink" title="售价：￥379">
				￥379			
								<span class="mprice" title="原价：￥1138">原价：<span>￥1138</span></span>	
							</p>
		</li>    	
    	        	    	<li class="list_item5 ">
			<div class="item_image">
				<a title="TS 2015新款年会礼服厚礼服韩版结婚红色连衣裙女装" href="goods-34567.html" target="_blank">
					<img alt="TS 2015新款年会礼服厚礼服韩版结婚红色连衣裙女装" src="images/34567_m_1421880168844.jpg"  width="180px" height="270px"/>
				</a>
												</div>
			<p class="item_name">
				<a href="goods-34567.html" target="_blank" title="TS 2015新款年会礼服厚礼服韩版结婚红色连衣裙女装">TS 2015新款年会礼服厚礼服韩版结婚红色连衣...</a>
			</p>
			<p class="product_price pink" title="售价：￥409">
				￥409			
								<span class="mprice" title="原价：￥1227">原价：<span>￥1227</span></span>	
							</p>
		</li>    	
    	        	    	<li class="list_item5 ">
			<div class="item_image">
				<a title="TS 2015新款年会宴会 礼服黑色中长裙" href="goods-34566.html" target="_blank">
					<img alt="TS 2015新款年会宴会 礼服黑色中长裙" src="images/34566_m_1421878159817.jpg"  width="180px" height="270px"/>
				</a>
												</div>
			<p class="item_name">
				<a href="goods-34566.html" target="_blank" title="TS 2015新款年会宴会 礼服黑色中长裙">TS 2015新款年会宴会 礼服黑色中长裙</a>
			</p>
			<p class="product_price pink" title="售价：￥361">
				￥361			
								<span class="mprice" title="原价：￥1085">原价：<span>￥1085</span></span>	
							</p>
		</li>    	
    	        	    	<li class="list_item5 i5_fix">
			<div class="item_image">
				<a title="TS 2015新款年会宴会 礼服中长裙西瓜红" href="goods-34565.html" target="_blank">
					<img alt="TS 2015新款年会宴会 礼服中长裙西瓜红" src="images/34565_m_1421869614124.jpg"  width="180px" height="270px"/>
				</a>
												</div>
			<p class="item_name">
				<a href="goods-34565.html" target="_blank" title="TS 2015新款年会宴会 礼服中长裙西瓜红">TS 2015新款年会宴会 礼服中长裙西瓜红</a>
			</p>
			<p class="product_price pink" title="售价：￥362">
				￥362			
								<span class="mprice" title="原价：￥1085">原价：<span>￥1085</span></span>	
							</p>
		</li>    	
    	        	    	<li class="list_item5 ">
			<div class="item_image">
				<a title="TS 2015新款年会宴会 礼服金色长裙" href="goods-34564.html" target="_blank">
					<img alt="TS 2015新款年会宴会 礼服金色长裙" src="images/34564_m_1421868903977.jpg"  width="180px" height="270px"/>
				</a>
												</div>
			<p class="item_name">
				<a href="goods-34564.html" target="_blank" title="TS 2015新款年会宴会 礼服金色长裙">TS 2015新款年会宴会 礼服金色长裙</a>
			</p>
			<p class="product_price pink" title="售价：￥546">
				￥546			
								<span class="mprice" title="原价：￥1638">原价：<span>￥1638</span></span>	
							</p>
		</li>    	
    	        	    	<li class="list_item5 ">
			<div class="item_image">
				<a title="TS 2015新款年会礼服 婚纱礼服裙银色" href="goods-34563.html" target="_blank">
					<img alt="TS 2015新款年会礼服 婚纱礼服裙银色" src="images/34563_m_1421868415892.jpg"  width="180px" height="270px"/>
				</a>
												</div>
			<p class="item_name">
				<a href="goods-34563.html" target="_blank" title="TS 2015新款年会礼服 婚纱礼服裙银色">TS 2015新款年会礼服 婚纱礼服裙银色</a>
			</p>
			<p class="product_price pink" title="售价：￥576">
				￥576			
								<span class="mprice" title="原价：￥1727">原价：<span>￥1727</span></span>	
							</p>
		</li>    	
    	        	    	<li class="list_item5 ">
			<div class="item_image">
				<a title="TS 2015新款年会宴会 礼服橘色长裙" href="goods-34562.html" target="_blank">
					<img alt="TS 2015新款年会宴会 礼服橘色长裙" src="images/34562_m_1421867538556.jpg"  width="180px" height="270px"/>
				</a>
												</div>
			<p class="item_name">
				<a href="goods-34562.html" target="_blank" title="TS 2015新款年会宴会 礼服橘色长裙">TS 2015新款年会宴会 礼服橘色长裙</a>
			</p>
			<p class="product_price pink" title="售价：￥377">
				￥377			
								<span class="mprice" title="原价：￥1132">原价：<span>￥1132</span></span>	
							</p>
		</li>    	
    	        	    	<li class="list_item5 i5_fix">
			<div class="item_image">
				<a title="TS 2015新款年会宴会 礼服黑色长裙" href="goods-34560.html" target="_blank">
					<img alt="TS 2015新款年会宴会 礼服黑色长裙" src="images/34560_m_1421866175214.jpg"  width="180px" height="270px"/>
				</a>
												</div>
			<p class="item_name">
				<a href="goods-34560.html" target="_blank" title="TS 2015新款年会宴会 礼服黑色长裙">TS 2015新款年会宴会 礼服黑色长裙</a>
			</p>
			<p class="product_price pink" title="售价：￥501">
				￥501			
								<span class="mprice" title="原价：￥1505">原价：<span>￥1505</span></span>	
							</p>
		</li>    	
    	        	    	<li class="list_item5 ">
			<div class="item_image">
				<a title="TS 2015新款年会礼服 礼服裙黑色V领" href="goods-34559.html" target="_blank">
					<img alt="TS 2015新款年会礼服 礼服裙黑色V领" src="images/34559_m_1421865489257.jpg"  width="180px" height="270px"/>
				</a>
												</div>
			<p class="item_name">
				<a href="goods-34559.html" target="_blank" title="TS 2015新款年会礼服 礼服裙黑色V领">TS 2015新款年会礼服 礼服裙黑色V领</a>
			</p>
			<p class="product_price pink" title="售价：￥329">
				￥329			
								<span class="mprice" title="原价：￥988">原价：<span>￥988</span></span>	
							</p>
		</li>    	
    	        	    	<li class="list_item5 ">
			<div class="item_image">
				<a title="TS 2015新款年会礼服 礼服裙 深海军蓝色双肩露背" href="goods-34558.html" target="_blank">
					<img alt="TS 2015新款年会礼服 礼服裙 深海军蓝色双肩露背" src="images/34558_m_1421864998828.jpg"  width="180px" height="270px"/>
				</a>
												</div>
			<p class="item_name">
				<a href="goods-34558.html" target="_blank" title="TS 2015新款年会礼服 礼服裙 深海军蓝色双肩露背">TS 2015新款年会礼服 礼服裙 深海军蓝色双...</a>
			</p>
			<p class="product_price pink" title="售价：￥406">
				￥406			
								<span class="mprice" title="原价：￥1218">原价：<span>￥1218</span></span>	
							</p>
		</li>    	
    	        	    	<li class="list_item5 ">
			<div class="item_image">
				<a title="TS 2015新款年会礼服 婚纱礼服裙" href="goods-34557.html" target="_blank">
					<img alt="TS 2015新款年会礼服 婚纱礼服裙" src="images/34557_m_1421864826792.jpg"  width="180px" height="270px"/>
				</a>
												</div>
			<p class="item_name">
				<a href="goods-34557.html" target="_blank" title="TS 2015新款年会礼服 婚纱礼服裙">TS 2015新款年会礼服 婚纱礼服裙</a>
			</p>
			<p class="product_price pink" title="售价：￥382">
				￥382			
								<span class="mprice" title="原价：￥1145">原价：<span>￥1145</span></span>	
							</p>
		</li>    	
    	        	    	<li class="list_item5 i5_fix">
			<div class="item_image">
				<a title="TS 2015新款 年会宴会 抹胸礼服裙" href="goods-34556.html" target="_blank">
					<img alt="TS 2015新款 年会宴会 抹胸礼服裙" src="images/34556_m_1421708820250.jpg"  width="180px" height="270px"/>
				</a>
									<!-- p class="tag item_tag"><span id="tag_angle" style="border-color: transparent #ff3300 transparent transparent;"></span><span id="tag_name" style="background:#ff3300">限时特惠</span></p -->
												</div>
			<p class="item_name">
				<a href="goods-34556.html" target="_blank" title="TS 2015新款 年会宴会 抹胸礼服裙">TS 2015新款 年会宴会 抹胸礼服裙</a>
			</p>
			<p class="product_price pink" title="售价：￥367">
				￥367			
								<span class="mprice" title="原价：￥1102">原价：<span>￥1102</span></span>	
							</p>
		</li>    	
    	      			</ul>
			
							
<form id="selectPageForm" name="selectPageForm" method="post" action="" onsubmit="submit_page();">
	
	 <div class="page page_right">
	  	  <div class="page_desc">共 28 款 </div>
	  1/1 页 	  	  	  	<a class="page_prev disable" href="javascript:void(0)">上一页</a>
	  	  	  	  	<a class="page_next disable" href="javascript:void(0)">下一页</a>
	  	  
	  	  
	</div>
	
</form>
<script type="Text/Javascript" language="JavaScript">
function choose_page(){
	var page = $('#page').val();
	if(page > 1){
		page = 1;
	}else if(page < 1){
		page = 1;
	}
	var url = "category-881-b0-min0-max0-attr0-"+page+"-sort_order, goods_id-DESC.html";
	$('#selectPageForm').attr("action", url)
	$('#selectPageForm').submit();
}
function submit_page(){
	var page = $('#page').val();
	if(page > 1){
		page = 1;
	}else if(page < 1){
		page = 1;
	}
	var url = "category-881-b0-min0-max0-attr0-"+page+"-sort_order, goods_id-DESC.html";
	$('#selectPageForm').attr("action", url)
}
<!--
function selectPage(sel)
{
  sel.form.submit();
}
//-->
</script>						
				
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
<script type="text/javascript" src="js/jquery.lazyload.js"></script>
<script type="text/javascript" src="js/mediav_traffic.js?version=V310001.js"></script>
	
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
