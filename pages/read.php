<!DOCTYPE html>
	<head>
		<title>#THREADNAME# #BOARDNAME#</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta property="og:title" content="#BOARDNAME#"/>
		<meta property="og:url" content="#THISURL#"/>
		<meta property="og:description" content="#DESCRIPTION#"/>
		<base href="#BBSURL#">
	</head>
	<body bgcolor=#efefef text=black link=blue alink=red vlink=#660099>
		
		<div style='margin-top:1em;'><span style='float:left;'><div style="margin-top:1em;"><span style='float:left;'>
			<a href="#HOMEURL#">トップへ</a>
			<a href="./">■掲示板に戻る■</a>
			<a href="./test/read.php?bbs=#BOARDID#&key=#THREADID#">全部</a>
			<a href="./test/read.php?bbs=#BOARDID#&key=#THREADID#&ls=50">最新50</a>
		</span>
		<span style='float:right;'>
		</span>&nbsp;</div>
		<hr style="background-color:#888;color:#888;border-width:0;height:1px;position:relative;top:-.4em;">
		<h1 style="color:red;font-size:larger;font-weight:normal;margin-right: 185px;word-wrap: break-word;">#THREADNAME#</h1>
		<div><dl class="thread" style="margin-right:185px;word-wrap:break-word; ">
#THREADDATA#			
		</div>
		<font color=red face="Arial"><b>#FILESIZE#</b></font>
		<hr>
		<center><a href="./test/read.php?bbs=#BOARDID#&key=#THREADID#&st=#NEWRES#">新着レスの表示</a></center>
		<hr>
		<a href="./">■掲示板に戻る■</a>
		<a href="./test/read.php?bbs=#BOARDID#&key=#THREADID#">全部</a>
		<a href="./test/read.php?bbs=#BOARDID#&key=#THREADID#&ls=50">最新50</a>
		<form method=POST action="./test/bbs.php">
			<input type=submit value="書き込む" name="submit">
			名前： <input name=FROM size=19 value="#FORMNAME#">
			E-mail<font size=1> (省略可) </font>: <input name=mail size=19 value="#FORMMAIL#"><br>
			<textarea rows=5 cols=70 wrap=off name="MESSAGE"></textarea>
			<input type=hidden name="bbs" value="#BOARDID#">
			<input type=hidden name="key" value="#THREADID#">
		</form>
		<br><br>read.php ver #VERSION# #RELEASEDATE# <font color=#FE642E><strong>Atnanasi★</strong></font><br>
		<font color=green><b>Atnanasi ★</b></font> <a href="http://user.otyakani.xyz/atnanasi/" target="_blank">BBSreadphp</a>
	</body>
</html>