var Compare=new Object();Compare={add:function(c,a,d){var e=0;for(var b in this.data){if(typeof(this.data[b])=="function"){continue}if(this.data[b].t!=d){alert(goods_type_different.replace("%s",a));return}e++}if(this.data[c]){alert(exist.replace("%s",a));return}else{this.data[c]={n:a,t:d}}this.save();this.init()},relocation:function(){if(this.compareBox.style.display!=""){return}var a=Math.max(document.documentElement.scrollTop,document.body.scrollTop);var b=0.2*(a-this.lastScrollY);if(b>0){b=Math.ceil(b)}else{b=Math.floor(b)}this.compareBox.style.top=parseInt(this.compareBox.style.top)+b+"px";this.lastScrollY=this.lastScrollY+b},init:function(){this.data=new Object();var g=document.getCookie("compareItems");if(g!=null){this.data=$.evalJSON(g)}if(!this.compareBox){this.compareBox=document.createElement("DIV");var b=document.createElement("INPUT");this.compareList=document.createElement("UL");this.compareBox.id="compareBox";this.compareBox.style.display="none";this.compareBox.style.top="200px";this.compareBox.align="center";this.compareList.id="compareList";b.type="button";b.value=button_compare;this.compareBox.appendChild(this.compareList);this.compareBox.appendChild(b);b.onclick=function(){var n=document.getCookie("compareItems");var m=$.evalJSON(n);var j=document.location.href;j=j.substring(0,j.lastIndexOf("/")+1)+"compare.php";var l=0;for(var h in m){if(typeof(m[h])=="function"){continue}if(l==0){j+="?goods[]="+h}else{j+="&goods[]="+h}l++}if(l<2){alert(compare_no_goods);return}document.location.href=j};document.body.appendChild(this.compareBox)}this.compareList.innerHTML="";var c=this;for(var d in this.data){if(typeof(this.data[d])=="function"){continue}var a=document.createElement("LI");var e=document.createElement("SPAN");e.style.overflow="hidden";e.style.width="100px";e.style.height="20px";e.style.display="block";e.innerHTML=this.data[d].n;a.appendChild(e);a.style.listStyle="none";var f=document.createElement("IMG");f.src="themes/default/images/drop.gif";f.className=d;f.onclick=function(){document.getElementById("compareList").removeChild(this.parentNode);delete c.data[this.className];c.save();c.init()};a.insertBefore(f,a.childNodes[0]);this.compareList.appendChild(a)}if(this.compareList.childNodes.length>0){this.compareBox.style.display="";this.timer=window.setInterval(this.relocation.bind(this),50)}else{this.compareBox.style.display="none";window.clearInterval(this.timer);this.timer=0}},save:function(){var a=new Date();a.setTime(a.getTime()+99999999);document.setCookie("compareItems",$.toJSON(this.data))},lastScrollY:0};