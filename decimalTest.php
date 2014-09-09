<!--<html>
<head>
<script type="text/javascript">
function checkDec(el){
 var ex = preg_match('/^\d+(\.\d+)?$/', el);
 if(var ex == true){
     alert('pleasse');
 }
// if(ex.test(el.value)==false){
//   el.value = el.value.substring(0,el.value.length - 1);
//  }
}
</script>  
</head>
<body>
 <input type="text" id="" onkeyup="checkDec(this.value);" />
</body>
</html>-->


<html>
<head>
<title> Untitled </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>
<body>
<input type="text" id="text"onkeyup="return processNumber(this)" value="">
<script type="text/javascript">
function processNumber(info) {
	var v = info.value;
	var n = v.split('.');
	if (n[1] != undefined) { 
		v = n[0]+'.'+n[1].substring(0,2); 
	}
	info.value = v;
	return true;
}

</script>

</body>
</html>
