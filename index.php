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
<form name="form1" method="post" action="login.php">
  <table width="400"  style="width: 400px" >
    <div style="padding: 10rem;">
      
    </div>
    <tbody style=" position: relative; position: absolute;  left: 37%;  ">
      <tr >
        <td width="125" style="color: white; font-weight:bold; font-size: 30px;"> &nbsp;Username</td>
        <td  style="width: 2rem; font-size: 20px;">
          <input name="txtUsername" type="text" id="txtUsername" size="20">
        </td>
      </tr>
      <tr>
        <td style="color: white; font-weight:bold; font-size: 30px;"> &nbsp;Password</td>
        <td style="width: 2rem; font-size: 20px;"><input name="txtPassword" type="password" id="txtPassword">
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <div style="padding: 5rem;">
    <input class =" hoverlink" type="submit" name="Submit" value="Save" style="position: relative; position: absolute; left: 40%;  padding: 0.5rem;">
    <input class =" hoverlink" type="submit" name="register" value="Register"  style="position: relative; position: absolute; left: 48% ; padding: 0.5rem; " onclick='location.replace("register.php")'>
  </div>
  
    
  
</form>

</body>
</html>