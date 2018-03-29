<?php
/* Smarty version 3.1.29, created on 2017-05-11 02:40:03
  from "/Library/WebServer/Documents/templates/index.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59135e83562eb7_38459846',
  'file_dependency' => 
  array (
    'ed105e506078a392c97ebf1d66223327c57bcd91' => 
    array (
      0 => '/Library/WebServer/Documents/templates/index.html',
      1 => 1494441602,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59135e83562eb7_38459846 ($_smarty_tpl) {
?>

 <!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<title>添加折线覆盖物</title>
<style type="text/css">
*{
    margin:0px;
    padding:0px;
}
body, button, input, select, textarea {
    font: 12px/16px Verdana, Helvetica, Arial, sans-serif;
}
#info{
    width:603px;
    padding-top:3px;
    overflow:hidden;
}
.btn{
    width:142px;
}
#container{
  min-width:100%;
  height: 600px;
}
</style>
  <?php echo '<script'; ?>
 charset="utf-8" src="http://map.qq.com/api/js?v=2.exp"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
function retLuxian(){
  var coors=[<?php echo implode($_smarty_tpl->tpl_vars['luxian']->value->result->routes[0]->polyline,',');?>
];
  for (var i = 2; i < coors.length ; i++){
    coors[i] = coors[i-2] + coors[i]/1000000;
  }
  return coors;
}
function makeLuxian(){
  var path=retLuxian(),ret=[];
  for(var i=0;i<path.length-1;i++){
    var lat=path[i],lng=path[i+1];
    var latlng=new qq.maps.LatLng(lat, lng);
    ret.push(latlng);
  }
  return ret;
}
var init = function() {
    var center = new qq.maps.LatLng(39.915285,116.403857);
    var map = new qq.maps.Map(document.getElementById('container'),{
        center: center,
        zoom: 13
    });
    var path=makeLuxian();
  for(var i=0;i<path.length-2;i++){
    var a=path[i],b=path[i+1],c=path[i+1+1];
    var path1=[a,b,c];
    var polyline = new qq.maps.Polyline({
        path: path1,
        strokeColor: '#f450ba',
        strokeWeight: 13,
        editable:false,
        map: map
    });
  }
}
<?php echo '</script'; ?>
>
</head>
 <body onload="init()">
 <div style="height:20px;">
  距离:<span><?php echo $_smarty_tpl->tpl_vars['luxian']->value->result->routes[0]->distance/1000;?>
km</span>耗时:<span><?php echo $_smarty_tpl->tpl_vars['luxian']->value->result->routes[0]->duration;?>
分钟</span>
 <div>
 <hr/>
<div id="container"></div>
</body>
</html><?php }
}
