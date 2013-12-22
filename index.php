<!DOCTYPE html>
<html lang="ru">
<head>
<link href='http://fonts.googleapis.com/css?family=Open+Sans&subset=latin,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>PHP Morpher</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" type="text/css" href="/static/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/static/style.css">

<script type="text/javascript" src="/static/js/jquery.js"></script>
</head>
<body>

<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"></a>
      <a class="brand" href="/"><b>PHP Morpher by AJ1</b></a>
      <div class="nav-collapse">
        <ul class="nav">
          <li>
            <a href="http://ifud.ws">iFud.ws</a>
          </li>
          
            <li>
              <a href="skype:secondslayer?call">Мой Skype</a>
            </li>
          
        </ul>
      
      </div> 
    </div>
  </div>
</div>

<script>
function obf()
{
	$.post("resh.php",{"mew":encodeURIComponent(document.getElementById("code").value)},function(data){document.getElementById("code").value = data;})
}
</script>
<div class="container">
  
    
  <br/><br/>
  <h1 style="text-align:center">Обфускация кода</h1>
  
	<br/>
  
    <div class="well">
	<form role="form">
	<br/>
	<textarea class="form-control" rows="12" style="width:99%;" id="code"></textarea>
	<div class="btn btn-primary" style="width:98%" onClick="obf()" >Обфусцировать код</div>
	</form>
	</div>

  
  
</div>

</body>
</html>