<?php
require_once('function5.php');
$a = isset($_POST['a']) ? $_POST['a'] : false;
$b = isset($_POST['b']) ? $_POST['b'] : false;
$c = isset($_POST['c']) ? $_POST['c'] : false;
$result2 = "";
$msg = "";
if ($a !== false && $b !== false && $c !== false) {
    $result2 =  caculator($a, $b, $c);
} else {
    $msg .= '<br> [Error] Đã có lỗi xãy ra  ';
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<form action="bai5.php" method="post" >
<table width="806" border="1">
<tr>
<td colspan="4" bgcolor="#336699"><strong>Giải phương trình bậc 2</strong></td>
</tr>
<tr>
<td width="83">Phương trình </td>
<td width="236">
<input name="a" type="text" />
    X^2 + </td>
<td width="218"><label for="textfield3"></label>
<input type="text" name="b" id="textfield3" />
      X+</td>
<td width="241"><label for="textfield"></label>
<input type="text" name="c" id="textfield" />
      =0</td>
</tr>
<tr>
<td colspan="4">
  Nghiệm  
<label for="textfield2"></label>
<input name="textfield" type="text" id="textfield2" width="400" value="<?php echo $result2 ?>" /></tr>
<tr>
<td colspan="4" align="center" valign="middle"><input type="submit" name="chao" id="chao" value="Xuất" /></td>
</tr>
</table>
</form>
</body>
</html>
