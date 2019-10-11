<!DOCTYPE html>
<html>
<head>

<title>My Proxy</title>

<meta name="generator" content="php-proxy.com">
<meta name="version" content="<?=$version;?>">
<meta name="content-type" content="text/html; charset=utf-8">

<style type="text/css">
html body {
	font-family: Arial,Helvetica,sans-serif;
	font-size: 12px;
}

#container {
	width:500px;
	margin:0 auto;
	margin-top:150px;
}

#error {
	color:red;
	font-weight:bold;
}

#frm {
	padding:10px 15px;
	
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
}

#footer {
	text-align:center;
	font-size:10px;
	margin-top:35px;
	clear:both;
}
</style>

<script type="text/javascript">
function getUrlParam(name) {
    var url = document.referrer;
    if(url!=null && url.indexOf("?")!=-1){
        var url_param = url.split("?")[1];
        var url_param_arr = url_param.split("&");
        for(var i=0;i<url_param_arr.length;i++){
            var tempParam = url_param_arr[i];
            var paramName =  tempParam.split("=")[0];
            if(paramName==name){
                return tempParam.split("=")[1]
            }
        }
    }
    return null;
}
	
function getCUrlParam(name) {
    var url = window.location.href;
    if(url!=null && url.indexOf("?")!=-1){
        var url_param = url.split("?")[1];
        var url_param_arr = url_param.split("&");
        for(var i=0;i<url_param_arr.length;i++){
            var tempParam = url_param_arr[i];
            var paramName =  tempParam.split("=")[0];
            if(paramName==name){
                return tempParam.split("=")[1]
            }
        }
    }
    return null;
}

function validURL(str) {
  var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
    '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // domain name
    '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
    '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
    '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
    '(\\#[-a-z\\d_]*)?$','i'); // fragment locator
  return !!pattern.test(str);
}

window.onload = function(){
var sa1=getUrlParam("q");
if (validURL(sa1)){
   document.getElementById("demo1").value = sa1;
   document.getElementById("Submit1").click();
}

var sa2=getCUrlParam("q");	
if (sa2 == "hello"){
   var url1 = document.referrer;
var domain = url1.split('/'); 
if( domain[2] ) {
    domain = domain[2];
}
    location.replace("https://"+domain+"/1?q=hello")
}	
</script>

</head>

<body>


<div id="container">

	<div style="text-align:center;">
		<h1 style="color:blue;">My Proxy</h1>
	</div>
	
	<?php if(isset($error_msg)){ ?>
	
	<div id="error">
		<p><?php echo strip_tags($error_msg); ?></p>
	</div>
	
	<?php } ?>
	
	<div id="frm">
	
	<!-- I wouldn't touch this part -->
	
		<form action="index.php" method="post" style="margin-bottom:0;">
			<input id="demo1" name="url" type="text" style="width:400px;" autocomplete="on" placeholder="www.xxxx" />
			<input id="Submit1" type="submit" value="Go" />
		</form>
		
		<script type="text/javascript">
			document.getElementsByName("url")[0].focus();
		</script><br>
		eg: www.xxxx.com.......
		<br>
		想建立自己专属的反向代理网站? 请发邮件zhaifangyuan2@gmail.com联系,50元一次
	<!-- [END] -->
	
	</div>
	
	
</div>

<div id="footer">
</div>


</body>
</html>
