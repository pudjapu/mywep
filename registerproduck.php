<html>
<head>
<title>login</title>
<link rel="stylesheet" href="allpaint.css">
<style>
  body{
       background-image: url(BG.JPG);
       background-size: cover;
  }
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<form name="form1" method="post" action="produck.php">
  <table width="400"  style="width: 400px">
    <div style="padding: 10rem;">
      
    </div>
    <tbody style=" position: relative; position: absolute;  left: 37%;">
      <tr>
        <td width="125" style="color: white; font-weight:bold; font-size: 30px;"> &nbsp;ProductName</td>
        <td width="180"style="width: 2rem; font-size: 20px;">
          <input name="ProductName" type="text" id="ProductName" size="20">
        </td>
      </tr>
      <tr>
        <td style="color: white; font-weight:bold; font-size: 30px;"> &nbsp;ProductID</td>
        <td><input name="ProductID" type="password" id="ProductID">
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <div style="padding: 5rem;">
    <input class =" hoverlink" type="submit" name="Submit" value="Save" style="position: relative; position: absolute; left: 47%;  padding: 1rem; ">
  </div>
  
</form>