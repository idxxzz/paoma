<?php
/* Smarty version 3.1.29, created on 2018-03-29 19:29:03
  from "/Library/WebServer/Documents/allenyoung___/templates/allentest.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5abccdffc579a4_34784706',
  'file_dependency' => 
  array (
    'c666998c5607309f5daca6da6cf2946bb7ec759b' => 
    array (
      0 => '/Library/WebServer/Documents/allenyoung___/templates/allentest.html',
      1 => 1522322942,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5abccdffc579a4_34784706 ($_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
     <title><?php echo $_smarty_tpl->tpl_vars['webtitle']->value;?>
</title>
  <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
  <meta name="generator" content="editplus" />
  <meta name="author" content="allen" />
  <meta name="keywords" content="赛车，游戏，博彩，湘西吉首" />
  <meta name="description" content="吉首人自己的网上赛场游戏" />
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <?php echo '<script'; ?>
 src="./jquery.min.js" type="text/javascript"><?php echo '</script'; ?>
>
  <style type="text/css">
  .clsHide{
    color:blue;
	font-weight:bold;
    background:url(./run.gif) no-repeat;
    visibility:hidden;
	text-align:center;
  }
  .clsShow{
      color:red;
      font-size:19px;
      background-color:white;
      font-weight:bold;
      font-weight:bold;
      visibility:show;
      text-align:right;
      position:absolute;
      left:0px;
      margin-top:-10px;
  }
  .clsBegin{
      color:red;
      font-size:19px;
      background-color:white;
      font-weight:bold;
	font-weight:bold;
    visibility:show;
	text-align:right;
    position:absolute;
    left:0px;
    margin-top:-10px;
  }
  .clsWin{
      color:red;
      font-size:19px;
      background-color:white;
      font-weight:bold;
      font-weight:bold;
      visibility:show;
      text-align:right;
      position:absolute;
      left:0px;
      margin-top:-10px;
  }
  .clsShowEnd{
      color:red;
      font-size:19px;
      font-weight:bold;
      background-color:green;
      font-weight:bold;
      visibility:show;
      text-align:right;
      position:absolute;
      height:21px;
      width:10px;
      left:0px;
      margin-top:-10px;
  }
   body{
       margin:0px auto;
   }
   table{
       width:100%;
   }
  input[type="button"]{
      color:white;
      background-color:black;
      height:30px;
  }
   table tr{
   }
   #runtable td{
       color:black;font-weight:bold;text-align:center;height:17px;
   }
   #runtable{
       border-style:solid;border-width:0px;background-color:white;width:100%;
       background:url(./bg1.png) repeat;
   }
   #msgDialog{
    width:200px;
	height:200px;
	line-height:200px;
	text-align:center;
	border-style:solid;
	border-color:red;
	color:white;
	background-color:black;
	z-index:994;
	display:none;
	position:absolute;
   }
  #titleDialog{
      width:100%;
      text-align:center;
      border-style:solid;
      border-color:red;
      color:white;
      background-color:black;
      z-index:995;
      display:none;
      position:absolute;
  }
  #resultDialog{
      width:330px;
      height:330px;
      text-align:center;
      border-style:solid;
      border-color:red;
      color:white;
      background-color:black;
      z-index:996;
      display:none;
      position:absolute;
  }
  #startPromptDialog{
      width:200px;
      height:200px;
      line-height:160px;
      text-align:center;
      border-style:solid;
      border-color:red;
      color:white;
      background-color:black;
      z-index:997;
      display:none;
      position:absolute;
  }
  #chooseItemDialog{
      color:white;
      background-color:black;
      text-align:center;
      border-style:solid;
      border-color:green;
      z-index:992;
      position:absolute;
      display:none;
  }
  #numberPanel{
      width:330px;
      height:330px;
      color:white;
      background-color:black;
      text-align:center;
      border-style:solid;
      border-color:green;
      z-index:993;
      position:absolute;
      display:none;
  }
  #chooseItemDialog td{
      color:white;
  }
  #chooseItemDialog span{
      color:red;
  }
  #umoney,#uwin,#uloss,#unumber{
    color:red;
   }
   #smoney,#swin,#sloss,#snumber{
    color:blue;
   }
  #userInfo td{
      color:red;
  }
  #userInfo .title{
      color:black;
  }
  #rightPanel{
      display:none;
  }
  #sysInfo,#userInfo{
      display:block;
  }
  </style>
 </head>

 <body>
  <?php echo '<script'; ?>
>
  var gameStart=false,gameOver=false,gameDelay=1000*5,maxGameCount=100,gameAutoTimer=null;
  var minLeft=40;//终点象素
  var loaddingTimeer=null;
  var winGold=20,feeGold=2;
  var win3Colors=['red','blue','white','yellow','yellow','yellow','yellow','yellow','yellow','yellow'];
  var win3Titles=['1','2','3','4','5','6','7','8','9','10'];
  var win3=0;
  var loaddingTimeEnd=0;
  var vip,sysObj,teryObj;
  var timeArr=[10,20,31];
  var rateArr=[10,12,18,13,5,9];
  
  var runArr=[[2,0,1],
              [2,0,1],
              [2,0,1],
              [2,0,1],
              [2,0,1],
              [2,0,1],
              [2,0,1],
              [2,0,1],
              [2,0,1],
              [2,0,1],
              [2,0,1]];
              
  var rowSize=runArr.length,colSize=runArr[0].length;
  var myObjs=new Array(rowSize);
  function gameObj(pRow,pCol,pType){
   this.row=pRow;
   this.col=pCol;
   this.oldCol=pCol;
   this.type=pType;
   this.isOver=false;
   this.timer=null;
   this.winCount=0;
   this.keepState=pRow+1;
   this.width=36;
   this.left=0;
   this.oldLeft=0;
   this.begin=new Date().getTime();
   this.end=new Date().getTime();
   this.rateList=[];
   this.draw=function(){
    getCellFromIndex(this.row,this.col).children("div").eq(0).css("left",this.left);
   };
   this.drawOld=function(){
    getCellFromIndex(this.row,this.oldCol).children("div").eq(0).removeClass("clsShow");
    getCellFromIndex(this.row,this.oldCol).children("div").eq(0).addClass("clsHide");
   };
   this.go=function(){
    getCellFromIndex(this.row,this.col).children("div").eq(0).removeClass("clsWin");
    getCellFromIndex(this.row,this.col).children("div").eq(0).removeClass("clsBegin");
    getCellFromIndex(this.row,this.col).children("div").eq(0).addClass("clsShow");
    if(loaddingTimeer){
        gameStart=true;
        hideTitle();
        hideResult();
        hideChooseItemDialog();
        clearInterval(loaddingTimeer);
        loaddingTimeer=null;
    }
	if(!this.begin)this.begin=new Date().getTime();
    this.end=new Date().getTime();
    this.rateList.push(this.left);
    if(this.left<=minLeft){
	   this.win();
	 }else{
	   if(!gameOver&&parseInt(Math.random()*10+1)==1){
	    this.timer=setTimeout("myObjs["+this.row+"].go()",1);//这里设置一个判断 1/2机会可能不跑动
	    return;
	   }
       this.oldLeft=this.left;
       this.left-=rateArr[makeRateIndex()];
	   if(this.left<=minLeft)this.left=minLeft
	   this.draw();
	   //this.drawOld();之前像素，例如尾气魔法
	   if(this.left<=minLeft)
	    this.go();
        else{
            var i=timeArr[makeTimeIndex()];
            this.timer=setTimeout("myObjs["+this.row+"].go()",i);
        }
	 }
   };
   this.win=function(){
       
       this.rateList.push(this.left);
    clearTimeout(this.timer);
    getCellFromIndex(this.row,this.col).children("div").eq(0).removeClass("clsShow");
    getCellFromIndex(this.row,this.col).children("div").eq(0).removeClass("clsBegin");
    getCellFromIndex(this.row,this.col).children("div").eq(0).addClass("clsWin");
    if(win3<3){
        sysObj.number[win3]=(this.row+1);
    }else if(win3==3){
        teryObj.winList=sysObj.number;
        drawTitle("开奖号码：["+teryObj.winList+"]");
        setTimeout("hideTitle()",1500);
    }else{
        sysObj.show();
    }
    //getCellFromIndex(this.row,0).children("div").eq(0).html(win3Titles[win3]);
    //getCellFromIndex(this.row,0).children("div").eq(0).html((this.end-this.begin)/1000);//显示到终点用时
	//getCellFromIndex(this.row,0).children("div").eq(0).css("color",win3Colors[win3++]);
    win3++;//前三号码递增
	this.isOver=true;
	if(!gameOver){
	 this.winCount++;
	 showObjWinCount();
     //drawTitle("恭喜"+(this.row+1)+"号获得本场冠军");
     //setTimeout("hideTitle()",1500);
	 gameOver=true;
	}
		/**
		 自动化测试
		*/
        if(win3>=runArr.length){
            teryObj.checkCurrentGame();//比赛结束进行开奖判断
            vip.restart();
            sysObj.init();
            if(sysObj.gameCount<maxGameCount)
            setTimeout(start,1600);
            else{
                $("#resultDialog h1").html("今天的所有赛事比完");
            }
		}
   };
   this.reset=function(){
    getCellFromIndex(this.row,this.col).children("div").eq(0).removeClass("clsShow");
    getCellFromIndex(this.row,this.col).children("div").eq(0).removeClass("clsWin");
    getCellFromIndex(this.row,this.col).children("div").eq(0).addClass("clsBegin");
    this.isOver=false;
    this.begin=0;
    this.end=new Date().getTime();
    getCellFromIndex(this.row,0).children("div").eq(0).css("color","yellow");
    getCellFromIndex(this.row,0).children("div").eq(0).html("");//终点
	//this.col=this.oldCol=colSize-1;
	this.left=this.oldLeft=($(document).width()-this.width);
	this.draw();
   }
  }
  function drawPanel(){
		var s="<table id='runtable' border=0 cellspacing=0 bordercolor='orange'>";
		for(var i=0;i<rowSize;i++){
		 s+="<tr>";
		   for(var j=0;j<colSize;j++){
		    s+="<td>";
			if(j==0){
			 s+=makeDiv(2,"");//终点
			}else if(j==colSize-1){
			 myObjs[i]=new gameObj(i,j,runArr[i][j]);
			 s+=makeDiv(runArr[i][j],(i<9?"0":"")+(i+1));
			}else{
			 s+=makeDiv(0,"");
			}
		    s+="</td>";
		   }
		 s+="</tr>";
		}
		s+="</table>";
		$("#panel").html(s);
        //计算重点的宽度即碰撞终点的像素
		minLeft=getCellFromIndex(0,0).children("div").eq(0).width();
		for(var i=0;i<rowSize;i++){
         //计算猴子的宽度即碰撞起点的像素
		 myObjs[i].width=getCellFromIndex(i,colSize-1).children("div").eq(0).width();
		 myObjs[i].left=myObjs[i].oldLeft=($(document).width()-myObjs[i].width);
		 myObjs[i].draw();
		}
	}
	function getCellFromIndex(row,col){
	  return $("#runtable").children("tbody").eq(0).children("tr").eq(row).children("td").eq(col);
	}
	function makeDiv(type,s){
	 switch(type){
			   case 0:{
				  return "<div class='clsHide'>"+s+"</div>";
			   }
			   case 1:{
				  return "<div class='clsBegin'>"+s+"</div>";
			   }
			   case 2:{
				  return "<div class='clsShowEnd'>"+s+"</div>";
			   }
			   default:{
				  return "<div class='clsHide'>"+s+"</div>";
			   }
	  }
	}
    //跑动时间随机函数
	function makeTimeIndex(){
	 return Math.floor(Math.random()*timeArr.length);
	}
    //跑动距离随机函数
	function makeRateIndex(){
	 return Math.floor(Math.random()*rateArr.length);
	}
	//- 函数 start()
    function start(){
        gameStart=false;
        gameOver=false;
        showChooseItemDialog();
	 /**
		 自动化测试
	 */
	 //vip.number=prompt("请投注(1-"+runArr.length+"),猜对奖励"+winGold+"元！"+feeGold+"元一次");
     sysObj.gameCount++;
     sysObj.show();
	 showObjWinCount();
	 win3=0;
     gameOver=false;
	 clearInterval(loaddingTimeer);
	 loaddingTimeEnd=new Date().getTime()+gameDelay+100;
	 loaddingTimeer=setInterval(loadding2Begin,1);
	 for(var i in myObjs){
	  myObjs[i].reset();
      var s=parseInt(gameDelay)+(myObjs.length-parseInt(i)*1);
	  setTimeout("myObjs["+i+"].go()",s);
	 }
	}
	function loadding2Begin(){
	 var s="倒计时：("+(parseInt((loaddingTimeEnd-new Date().getTime())/1000))+")";
	 drawTitle(s);
	}
	function main(){
	 drawPanel();
	 vip=new User("13141628808");
	 sysObj=new SysClass();
     teryObj=new teryClass();
	 vip.show();
	 sysObj.show();
     start();
	}
	function drawWinTitle(s){
	 var dw=$(document).width()-200;
	 var dh=$(document).height()-200;
	 var left=parseInt(dw/2)+$(window).scrollLeft(),top=parseInt(dh/2)+$(window).scrollTop();
	 $("#msgDialog").css({ "left":left,"top":top});
	 $("#msgDialog").html(s);
	 $("#msgDialog").show();
	}
  function drawMsg(s){
      var dw=$(document).width()-200;
      var dh=$(document).height()-200;
      var left=parseInt(dw/2)+$(window).scrollLeft(),top=parseInt(dh/2)+$(window).scrollTop();
	 $("#msgDialog").css({ "left":left,"top":top});
	 $("#msgDialog").html(s);
	 $("#msgDialog").show();
    }
  function drawNumberPanel(s){
      var dw=$(document).width()-330;
      var dh=$(document).height()-330;
      var left=parseInt(dw/2)+$(window).scrollLeft(),top=parseInt(dh/2)+$(window).scrollTop();
      $("#numberPanel").css({ "left":left,"top":top});
      $("#numberPanel").html(s);
      $("#numberPanel").show();
  }
  function drawTitle(s){
      var left=0,top=0;
      $("#titleDialog").css({ "left":left,"top":top});
      $("#titleDialog").html(s);
      $("#titleDialog").show();
  }
  function drawResult(s){
      var dw=$(document).width()-330;
      var dh=$(document).height()-320;
      var left=parseInt(dw/2)+$(window).scrollLeft(),top=parseInt(dh/2)+$(window).scrollTop();
      $("#resultDialog").css({ "left":left,"top":top});
      $("#resultDialog").html(s);
      $("#resultDialog").show();
  }
  function showStartPrompt(){
      var dw=$(document).width()-200;
      var dh=$(document).height()-200;
      var left=parseInt(dw/2)+$(window).scrollLeft(),top=parseInt(dh/2)+$(window).scrollTop();
      $("#startPromptDialog").css({ "left":left,"top":top });
      //$("#startPromptDialog").html(s);
      $("#startPromptDialog").show();
  }
  function showChooseItemDialog(){
      var dw=$(document).width()-$("#chooseItemDialog").width();
      var dh=$(document).height()-$("#chooseItemDialog").height()-200;
      var left=parseInt(dw/2)+$(window).scrollLeft(),top=parseInt(dh/2)+$(window).scrollTop();
      $("#chooseItemDialog").css({ "left":left,"top":top });
      //$("#chooseItemDialog").html(s);
      $("#chooseItemDialog select").each(function(){
                                         //$(this).html('');
                                         $(this).css('background-color','white');
                                         });
      $("#vipLessMoney").html("<h1 style='color:white'>您的剩余金币：<span style='color:red'>"+vip.money+"</span></h1>");
      $("#chooseItemDialog").show();
  }
  function hideWinTitle(){
	 $("#msgDialog").hide();
  }
  function hideNumberPanel(){
      $("#numberPanel").hide();
  }
  function hideMsg(){
	 $("#msgDialog").hide();
  }
  function hideTitle(){
      $("#titleDialog").hide();
      //顶部对话框
  }
  function hideResult(){
      $("#resultDialog").hide();
      //showStartPrompt();
      //初始化用户的投注数据
      //vip.restart();
  }
  function hideStartPrompt(){
      $("#startPromptDialog").hide();
  }
  function hideChooseItemDialog(){
      $("#chooseItemDialog").hide();
  }
  function showObjWinCount(){
	 s="<tr><th>号码</th>";
	 for(var i in myObjs){
	  s+=("<th>"+(parseInt(i)<9?"0":"")+(parseInt(i)+1)+"</th>");
	 }
	 s+="</tr>";
	 s+="<tr><th>赢</th>";
	 for(var i in myObjs){
		 s+="<th>"+myObjs[i].winCount+"</th>";
	 }
	 s+="</tr>";
	 $("#objWinCountPanel").html(s);
	}
	$(function(){
      //游戏入口函数
      main();
	});
    //投注类，参数1 号码数组 参数2 倍数
    function teryNumberClass(px,pn){
        this.x=px;
        this.n=pn;
    }
	function User(pid){
     this.id=pid;
	 this.money=100;
     this.number={
         "x1":[],"x2":[],"x3":[],"z1":[],"z2":[],"z3":[]
     };
     this.numberWin={
         "x1":0,"x2":0,"x3":0,"z1":0,"z2":0,"z3":0
     };
     this.numberLoss={
         "x1":0,"x2":0,"x3":0,"z1":0,"z2":0,"z3":0
     };
	 this.addMoney=function(x){
	  this.money+=x;
	  this.show();
	 };
	 this.cutMoney=function(x){
	  this.money-=x;
	  this.show();
	 };
     this.restart=function(){
         this.number={
             "x1":[],"x2":[],"x3":[],"z1":[],"z2":[],"z3":[]
         };
         $("#chooseItemDialog select").each(function(){
                                            $(this).html('');
                                            $(this).css('background-color','white');
                                            });
         this.show();
     };
	 this.show=function(){
         var s='';
         s+="<tr><td class='title'>ID</td><td>"+this.id+"</td><td class='title'>金币</td><td>"+this.money+"</td><td class='title'>您购买的：</td>";
         s+="<td><pre>";
         for(var i in this.number){
             var item=(eval("this.number."+i));
             switch(i){
                 case "x1":{
                     s+="\r\n选一：\r\n";
                     for(var j in item){
                         s+=("["+(item[j].x)+"]*"+(item[j].n)+"倍"+((j<item.length-1)?"，":"")+"\r\n");
                     }
                     break;
                 }
                 case "x2":{
                     s+="\r\n选二：\r\n";
                     for(var j in item){
                         s+=("["+(item[j].x)+"]*"+(item[j].n)+"倍"+((j<item.length-1)?"，":"")+"\r\n");
                     }
                     break;
                 }
                 case "x3":{
                     s+="\r\n选三：\r\n";
                     for(var j in item){
                         s+=("["+(item[j].x)+"]*"+(item[j].n)+"倍"+((j<item.length-1)?"，":"")+"\r\n");
                     }
                     break;
                 }
                 case "z1":{
                     s+="\r\n直一：\r\n";
                     for(var j in item){
                         s+=("["+(item[j].x)+"]*"+(item[j].n)+"倍"+((j<item.length-1)?"，":"")+"\r\n");
                     }
                     break;
                 }
                 case "z2":{
                     s+="\r\n直二：\r\n";
                     for(var j in item){
                         s+=("["+(item[j].x)+"]*"+(item[j].n)+"倍"+((j<item.length-1)?"，":"")+"\r\n");
                     }
                     break;
                 }
                 case "z3":{
                     s+="\r\n直三：\r\n";
                     for(var j in item){
                         s+=("["+(item[j].x)+"]*"+(item[j].n)+"倍"+((j<item.length-1)?"，":"")+"\r\n");
                     }
                     break;
                 }
          }
         }
         s+="</pre></td>";
         s+="</tr>";
         $("#userInfo table").html(s);
     };
	}
	function SysClass(){
     this.gameCount=0;
	 this.money=1000;
	 this.number=[0,0,0];
	 this.addMoney=function(x){
	  this.money+=x;
	  this.show();
	 };
	 this.cutMoney=function(x){
	  this.money-=x;
	  this.show();
	 };
     this.init=function(){
         this.number=[0,0,0];
         this.show();
     };
     this.show=function(){
	  $("#smoney").html(this.money);
	  $("#snumber").html("第("+this.gameCount+")期<pre>["+this.number+"]</pre>");
	 };
	}
	function teryClass(){
	 this.winList=[0,0,0];
	 this.zhi1Test=function(arr){
         if(1!=arr.length)return false;
	     return (arr[0]==this.winList[0]);
	 };
     this.zhi2Test=function(arr){
         if(2!=arr.length)return false;
	     return (arr[0]==this.winList[0]&&arr[1]==this.winList[1]);
	 };
     this.zhi3Test=function(arr){
         if(3!=arr.length)return false;
	     return (arr[0]==this.winList[0]&&arr[1]==this.winList[1]&&arr[2]==this.winList[2]);
     };
     this.xuan1Test=function(arr){
         if(1!=arr.length)return false;
         var x=0;
         for(var i in arr){
             for(var j in this.winList){
                 if(arr[i]==this.winList[j])x++;
             }
         }
         return x==1;
     };
     this.xuan2Test=function(arr){
         if(2!=arr.length)return false;
         var x=0;
         for(var i in arr){
             for(var j in this.winList){
                 if(arr[i]==this.winList[j])x++;
             }
         }
         return x==2;
     };
     this.xuan3Test=function(arr){
         if(3!=arr.length)return false;
         var x=0;
         for(var i in arr){
             for(var j in this.winList){
                 if(arr[i]==this.winList[j])x++;
             }
         }
         return x==3;
	 };
     this.checkCurrentGame=function(){
         var str="<h1 style='color:white'>第(<span style='color:red'>"+sysObj.gameCount+"</span>)场结束</h1></hr/><h3 style='color:white'>开奖号码：[<span style='color:red'>"+teryObj.winList+"</span>]</h3>";
         str+="<pre style='color:white'>";
         for(var i in vip.number){
             var item=(eval("vip.number."+i));
             switch(i){
                 case "x1":{
                     for(var j in item){
                         if(teryObj.xuan1Test(item[j].x)){
                             str+=("恭喜您,您的选一中奖号码:["+(item[j].x)+"]*"+(item[j].n)+"倍,奖金("+(item[j].n*feeGold*2)+")\r\n");
                             var q=parseInt((item[j].n*feeGold*2));
                             vip.addMoney(q);
                             sysObj.cutMoney(q);
                      }
                     }
                     break;
                 }
                 case "x2":{
                      for(var j in item){
                          if(teryObj.xuan2Test(item[j].x)){
                              str+=("恭喜您,您的选二中奖号码:["+(item[j].x)+"]*"+(item[j].n)+"倍,奖金("+(item[j].n*feeGold*4)+")\r\n");
                              var q=parseInt((item[j].n*feeGold*4));
                              vip.addMoney(q);
                              sysObj.cutMoney(q);
                       }
                     }
                     break;
                 }
                 case "x3":{
                      for(var j in item){
                          if(teryObj.xuan3Test(item[j].x)){
                              str+=("恭喜您,您的选三中奖号码:["+(item[j].x)+"]*"+(item[j].n)+"倍,奖金("+(item[j].n*feeGold*8)+")\r\n");
                              var q=parseInt((item[j].n*feeGold*8));
                              vip.addMoney(q);
                              sysObj.cutMoney(q);
                        }
                      }
                     break;
                 }
                 case "z1":{
                      for(var j in item){
                          if(teryObj.zhi1Test(item[j].x)){
                              str+=("恭喜您,您的直一中奖号码:["+(item[j].x)+"]*"+(item[j].n)+"倍,奖金("+(item[j].n*feeGold*3)+")\r\n");
                              var q=parseInt((item[j].n*feeGold*3));
                              vip.addMoney(q);
                              sysObj.cutMoney(q);
                        }
                      }
                     break;
                 }
                 case "z2":{
                   for(var j in item){
                       if(teryObj.zhi2Test(item[j].x)){
                           str+=("恭喜您,您的直二中奖号码:["+(item[j].x)+"]*"+(item[j].n)+"倍,奖金("+(item[j].n*feeGold*6)+")\r\n");
                           var q=parseInt((item[j].n*feeGold*6));
                           vip.addMoney(q);
                           sysObj.cutMoney(q);
                     }
                   }
                   break;
                 }
                 case "z3":{
                  for(var j in item){
                      if(teryObj.zhi3Test(item[j].x)){
                          str+=("恭喜您,您的直三中奖号码:["+(item[j].x)+"]*"+(item[j].n)+"倍,奖金("+(item[j].n*feeGold*10)+")\r\n");
                          var q=parseInt((item[j].n*feeGold*10));
                          vip.addMoney(q);
                          sysObj.cutMoney(q);
                       }
                    }
                  break;
                 }
             }
         }
       str+="</pre>";
       drawResult(str);
     };
	}
  function drawNumberPanelGoldTitle(rate){
      $("#vipLessMoney").html("<h1 style='color:white'>您的剩余金币：<span style='color:red'>"+vip.money+"</span></h1>");
      $("#numberPanel_goldTitle").html("您的金币：<span style='color:red'>"+vip.money+"</span>投注所需金币：<span style='color:red'>"+(feeGold*rate)+"</span>");
      vip.show();
      sysObj.show();
  }
  function gotoChooseNumber(btn,type){
      var size=rowSize;
      chooseNumberList=[];
      chooseNumberIndex=0;
      var s="<table border=1>";
      s+="<tr><td>";
      s+="<ul style='float:left;width:100%;margin-left:-30px;'>";
      var a=eval("vip.number."+type);
      for(var i=0;i<size;i++){
          s+=("<li tag='0' onclick=\"setChooseNumber(this,"+(i+1)+",'"+type+"')\" style='color:white;height:30px;line-height:30px;float:left;width:30%;list-style:none;display:block;border-style:solid;border-color:black;border-width:1px;background-color:black;'>"+(i<9?"0":"")+(i+1)+"</li>");
      }
      s+="</ul></td></tr>";
      s+="<tr><td>倍数：<select style='background:white;' onchange='drawNumberPanelGoldTitle(this.value)'>";
      for(var i=0;i<99;i++)s+="<option value='"+(i+1)+"'>"+(i+1)+"</option>";
      s+="</select></td></tr>";
      s+="<tr><td id='numberPanel_goldTitle'></td></tr>";
      s+="<tr><td><input  type='button' value='购买' onclick='submitChooseNumber(\""+type+"\")'/><input type='button' value='关闭' onclick='hideNumberPanel();drawNumberPanelGoldTitle(0)'/></td></tr>";
      s+="</table>";
      drawNumberPanel(s);
  }
  function submitChooseNumber(type){
      if(gameStart){
          console.log("赛事已经开始，无法下注");
          return;
      }
      var x=parseInt($("#numberPanel select").val());
      if(vip.money<(parseInt(x)*feeGold)){
          alert("金币不足");
          return;
      }
      if(!chooseNumberList.length||chooseNumberList.length<parseInt(type.substr(1,1)))return;
      var idx=checkInChooseNumberList(chooseNumberList,type);//相同规则的号码倍数＋＋，不同的新增一个号码规则
      if(idx){
          var obj=eval("vip.number."+type);//购买号码
          obj[idx].n=parseInt(obj[idx].n)+parseInt(x);
      }else{
          eval("vip.number."+type+".push(new teryNumberClass(chooseNumberList,x))");//购买号码
      }
      $("#"+type+"Numbers").html("");
      var obj=eval("vip.number."+type);
      for(var i in obj){
       $("#"+type+"Numbers").html($("#"+type+"Numbers").html()+"<option value='["+(obj[i].x)+"]*"+obj[i].n+"倍'>["+(obj[i].x)+"]*"+obj[i].n+"倍</option>");
      }
      sysObj.addMoney((parseInt(x)*feeGold));//2元一注*倍数
      vip.cutMoney((parseInt(x)*feeGold));//2元一注*倍数
      drawNumberPanelGoldTitle($("#numberPanel select").val());
      
  }
  var chooseNumberList=[],chooseNumberIndex=0;
  //检查一个数字是否在数组中
  function checkInChooseNumberList(arr,type){
      switch(type){
          case "x1":{
              for(var i in vip.number.x1){
                  var a=vip.number.x1[i];
                  if(a.x[0]==arr[0])return i;
              }
              break;
          }
          case "x2":{
              for(var i in vip.number.x2){
                  var a=vip.number.x2[i];
                  if((a.x[0]==arr[0]||a.x[0]==arr[1])&&(a.x[1]==arr[0]||a.x[1]==arr[1]))return i;
              }
              break;
          }
          case "x3":{
              for(var i in vip.number.x3){
                  var a=vip.number.x3[i];
                  if((a.x[0]==arr[0]||a.x[0]==arr[1]||a.x[0]==arr[2])&&(a.x[1]==arr[0]||a.x[1]==arr[1]||a.x[1]==arr[2])&&(a.x[2]==arr[0]||a.x[2]==arr[1]||a.x[2]==arr[2]))return i;
              }
              break;
          }
          case "z1":{
              for(var i in vip.number.z1){
                  var a=vip.number.z1[i];
                  if(a.x[0]==arr[0])return i;
              }
              break;
          }
          case "z2":{
              for(var i in vip.number.z2){
                  var a=vip.number.z2[i];
                  if(a.x[0]==arr[0]&&a.x[1]==arr[1])return i;
              }
              break;
          }
          case "z3":{
              for(var i in vip.number.z3){
                  var a=vip.number.z3[i];
                  if(a.x[0]==arr[0]&&a.x[1]==arr[1]&&a.x[2]==arr[2])return i;
              }
              break;
          }
      }
      return 0;
  }
  //移除一个数字从数组中
  function removeChooseNumberList(arr,x){
      var a=[],j=0;
      for(var i in arr){
          if(arr[i]!=x){
              a[j++]=arr[i];
          }
      }
      chooseNumberList=a;
      chooseNumberIndex--;
  }
  function setChooseNumber(liObj,num,type){
      if(!parseInt($(liObj).attr("tag"))){
          if(chooseNumberIndex>=parseInt(type.substr(1,1))){
              return;
          }
          $(liObj).css("background-color","pink");
          $(liObj).css("color","black");
          $(liObj).attr("tag",1);
      }else{
          $(liObj).css("background-color","black");
          $(liObj).css("color","white");
          $(liObj).attr("tag",0);
          removeChooseNumberList(chooseNumberList,num);
          drawNumberPanelGoldTitle(0);//不满足号码规则数字提示0金额
          return;
      }
      chooseNumberList[chooseNumberIndex++]=num;
      if(chooseNumberIndex==parseInt(type.substr(1,1)))drawNumberPanelGoldTitle($("#numberPanel select").val());//达到号码规则数字后提示金额
      
  }
  function hideChooseItem0(){
      //取消选择投注项目窗口
      hideStartPrompt();
      hideChooseItemDialog();
  }
  function hideChooseItem1(){
      //确认选择投注项目窗口
      vip.show();
      sysObj.show();
      hideChooseItemDialog();
      hideStartPrompt();
  }
  function gotoChooseItem(){
      //确认开始游戏，前往选择投注界面
      hideStartPrompt();
      showChooseItemDialog();
  }
  function exitGame(){
      hideStartPrompt();
  }
  <?php echo '</script'; ?>
>
  <div id="panel" style="width:100%">
  </div>
  <div id="rightPanel">
  <table id="objWinCountPanel" border=1 width="100%">
  </table>
  </div>
  <div id="userInfo">
   <table border=1>
       
   </table>
  </div>
  <div id="sysInfo">
   <table border=1 width="100%">
   <tr><th colspan=4>系统数据</tr>
    <tr><td>金币：</td><td id="smoney">0</td><td>本期开奖：</td><td id="snumber">第1期<pre>[0,0,0]</pre></td></tr>
   </table>
  </div>
  <div id="msgDialog">
  </div>
  <div id="resultDialog" onclick="hideResult()">
  </div>
  <div id="titleDialog" onclick="hideTitle()">
  </div>
  <div id="numberPanel">
  </div>
  <div id="startPromptDialog">
      <table height="100%" border=1>
          <tr>
            <th colspan=2>是否确认开始本场比赛</th>
          </tr>
          <tr>
            <th><input type="button" value="确认" style="width:100%" onclick="gotoChooseItem()"/></th><th><input type="button" value="取消"  style="width:100%" onclick="exitGame()"/></th>
          </tr>
      </table>
  </div>
  <div id="chooseItemDialog">
      <table width="100%" border=1>
          <caption id="vipLessMoney"></caption>
          <tr>
              <th>名称</th><th>赔率</th><th colspan=3>您的号码</th><th>前往投注</th>
          </tr>
          <tr>
              <td>任选一</td><td>1:2</td><td colspan=3><select id="x1Numbers"></select></td><td><input type="button" value="前往选择" onclick="gotoChooseNumber(this,'x1')"/></td>
          </tr>
          <tr>
              <td>任选二</td><td>1:4</td><td colspan=3><select id="x2Numbers"></select></td><td><input type="button" value="前往选择" onclick="gotoChooseNumber(this,'x2')"/></td>
          </tr>
          <tr>
              <td>任选三</td><td>1:8</td><td colspan=3><select id="x3Numbers"></select></td><td><input type="button" value="前往选择" onclick="gotoChooseNumber(this,'x3')"/></td>
          </tr>
          <tr>
              <td>直选一</td><td>1:3</td><td colspan=3><select id="z1Numbers"></select></td><td><input type="button" value="前往选择" onclick="gotoChooseNumber(this,'z1')"/></td>
          </tr>
          <tr>
              <td>直选二</td><td>1:6</td><td colspan=3><select id="z2Numbers"></select></td><td><input type="button" value="前往选择" onclick="gotoChooseNumber(this,'z2')"/></td>
          </tr>
          <tr>
              <td>直选三</td><td>1:10</td><td colspan=3><select id="z3Numbers"></select></td><td><input type="button" value="前往选择" onclick="gotoChooseNumber(this,'z3')"/></td>
          </tr>
          <tr>
              <th colspan=6><input type="button" value="确认" onclick="hideChooseItem1()" style="width:40%;"/>&nbsp;&nbsp;&nbsp;<input type="button" value="关闭" onclick="hideChooseItem0()" style="width:40%;"/></th>
          </tr>
      </table>
  </div>
 </body>
</html>
<?php }
}
