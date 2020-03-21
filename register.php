<html>
<head>
<title>ThaiCreate.Com Tutorials</title>
<link rel="stylesheet" href="allpaint.css">
<link rel="stylesheet" href="test.css">
<style>
  body{
    background-image : url(BG1.jpg);
    background-size:cover;
  }
</style>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>

<form name="form1" method="post" action="save_register.php">

  <table width="400"  style="width: 400px" >
    <div style="padding: 6rem; ">
    
	
		<div class="header" style="margin-top:-20rem">
			<div style="font-size :40px; font-weight: bold;">REGIS<span>TER </span></div>
		</div>
    </div>
    <tbody style=" position: relative; position: absolute;  left: 30%; ">
      <tr>
        <td width="125" style="color: #0066cc; font-weight:bold; font-size: 40px;"> &nbsp;Username</td>
        <td width="180" style="width: 2rem; font-size: 30px; " >
          <input name="txtUsername" type="text" id="txtUsername" size="20" style="height: 2rem;font-size: 20px;">
        </td>
      </tr>
      <tr>
        <td style="color: #0066cc; font-weight:bold; font-size: 40px;"> &nbsp;Password</td>
        <td><input name="txtPassword" type="password" id="txtPassword" size="20" style="height: 2rem; font-size: 20px ;">
        </td>
      </tr>
      <tr>
        <td style="color: #0066cc; font-weight:bold; font-size: 40px;"> &nbsp;Confirm Password</td>
        <td><input name="txtConPassword" type="password" id="txtConPassword" size="20" style="height: 2rem; font-size: 20px;">
        </td>
      </tr>
      <tr>
        <td style="color: #0066cc; font-weight:bold; font-size: 40px;">&nbsp;Name</td>
        <td><input name="txtName" type="text" id="txtName" size="20" style="height: 2rem;font-size: 20px;"></td>
      </tr>
      <tr>
    </div>
        <td style="color: #0066cc; font-weight:bold; font-size: 40px;"> &nbsp;Family</td>
        <td><input name="txtFamily" type="text" id="txtFamily" size="20" style="height: 2rem;font-size: 20px;"></td>
      </tr>
    </tbody>
  </table>
  <br>
  <div style="padding: 18rem;">
    <input class ="hoverlink" type="submit" name="Submit" value="Save" style=" color : black;background-color :white;position: relative; position: absolute; left: 60%;  padding: 1.5rem; ">
    <input class ="hoverlink" type="button" name="Submit" onclick='location.replace("index.php")' value="Back" style=" color : black;background-color :white;position: relative; position: absolute; left: 35%  ;  padding: 1.5rem; ">
  </div>
  
</form>
</body>
</html>