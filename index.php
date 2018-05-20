<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bài test poker</title>
</head>

<body>
<p>Mời bạn nhập 5 lá bài</p>
<form id="form1" name="form1" method="post" action="">
  <label for="taybai"></label>
  <input type="text" name="taybai" id="taybai" maxlength="10" />
  <input type="submit" name="ketqua" id="ketqua" formmethod="post" value="Xem Kết Quả" />
</form>
<?php include_once('KhaiBao/XuLy.php') ?>
</body>
</html>