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
    <div style="padding: 10rem;  ">
        
    </div>
    <tbody style=" text-align: center; position: relative; position: absolute;  left: 28%; padding: 5rem;">
      <tr >
        <td width="125" style="color: black; font-weight:bold; font-size: 38px;"> &nbsp;Username :</td>
        <td  style="width: 2rem; ">
          <input name="txtUsername" type="text" id="txtUsername" size="20" style="height: 2rem; font-size: 30px;">
        </td>
      </tr>
      <tr>
        <td style="color: back; font-weight:bold; font-size: 40px;"> &nbsp;Password :</td>
        <td style="width: 2rem; ">
          <input name="txtPassword" type="password"
           id="txtPassword" size="20" style="height: 2rem; font-size: 30px;">
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <div style="padding: 11rem;">
    <input class =" hoverlink" type="submit" name="Submit" value="Save" style="position: relative; position: absolute; left: 46%;  padding: 0.6rem; margin-left: 0.5rem , 0; color : white;background-color : black">
    <input class =" hoverlink" type="button" name="register" value="Register"  style="position: relative; position: absolute; left: 62% ; padding: 0.5rem; color : white;background-color : black " onclick='location.replace("register.php")'>
  </div>
  
    
  
</form>

</body>
</html>