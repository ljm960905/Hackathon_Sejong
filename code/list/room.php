<HTML>
<HEAD>
<meta http-equiv="Content-Type" content="text/html; charset=euc-kr" />
<TITLE> 중앙도서관 열람실 좌석 현황</TITLE>
<META NAME="Author" CONTENT="와이즈네스코">
<META NAME="Keywords" CONTENT=" 중앙도서관 열람실 좌석 현황">
<META NAME="Description" CONTENT=" 중앙도서관 열람실 좌석 현황">
<link rel="stylesheet" href="./common/style.css" type="text/css">
</HEAD>
<body leftmargin='0' topmargin='0'>
<center>



<table>
  <tr>
    <!--td valign=top>

<table width='100' border=0 cellspacing='0' cellpadding='0'>
  <tr>
    <td><font face="휴먼옛체">
      <BR><BR><BR>
<a href="./roomview5.asp?room_no=1">제 1 열람실</a><BR><BR>
<a href="./roomview5.asp?room_no=2">제 2 열람실</a><BR><BR>
    </font></td>
  </tr>
</table>

    </td-->
    <td>

<table width='1000' border='0' cellspacing='0' cellpadding='0' bbgcolor='#000000'>
  <tr>
    <td width=100%>
      <table width=100% border=0><tr>
        <td align=left width=50%>
             
        </td>
        <td align="right" width=50%>
          <font style='color:black;font-size:9pt;font-weight:900;'>사용중 색상 &nbsp;&nbsp;&nbsp; 미사용 색상 </font><table width=165 height=21 border='0' cellpadding='0' cellspacing='0'><tr><td width=70 bgcolor='red' align='center' valign='middle'><font style='colzor:yellow;font-size:8pt;font-weight:900;'>사용중</font></td><td width=25></td><td width=70 bgcolor='gray' align='center' valign='middle'><font style='color:yellow;font-size:8pt;font-weight:900;'>미사용</font></td></tr></table>
        </td>
      </tr></table>
    </td>
  </tr>

<?php

$url = 'http://210.107.226.14/seat/roomview5.asp?room_no='.$_GET['id'];


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
curl_close($ch);
$result = iconv("EUC-KR", "UTF-8", $result);
//echo $result;

$for_print = strstr($result, "<tr><!-- 1009 * 602 -->"); 

echo $for_print;
  

?>

