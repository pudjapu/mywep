<html>
<head>
<title>login</title>
<link rel="stylesheet" href="allpaint.css">
<link rel="stylesheet" href="test.css">
<style>
  body{
       background-image: url(BG1.JPG);
       background-size: cover;
  }
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<form name="form1" method="post" action="produck.php">
  <table width="400"  style="width: 400px">
  <div class="header" style="margin-top:-20rem ; margin-left : 7rem">
			<div style="font-size :40px; font-weight: bold;">CLAIM <span> PRODUCT </span></div>
</div>
    <div style="padding: 10rem;">
      
    </div>
    <tbody style=" position: relative; position: absolute;  left: 37%;">
      <tr>
        <td width="125" style="color: #0066cc; font-weight:bold; font-size: 30px;"> &nbsp;ProductID</td>
        <td width="180"style="width: 2rem; font-size: 20px;">
          <input name="ProductID" type="text" id="ProductID" size="20">
        </td>
      </tr>
      <tr>
        <td style="color: #0066cc; font-weight:bold; font-size: 30px;"> &nbsp;อาการเสีย</td>
        <td><textarea type='textarea' class='form-control' id='ProductName' name='ProductName' style='font-size:20px;background-color:rgba(240,240,240,1.0);width:20rem; height:6rem' ></textarea>
        </td>
      </tr>
    </tbody>
  </table>
  <br>
  <div  class="login" style="left:46% ;position : absolute ;position: relative; margin-top: 10%" >
        <input type="submit" value="SAVE" >
        
        <input type="button" name="Submit" onclick='location.replace("link.php")' value="Back" > 
        
         
  </div>
  <!--<div style="padding: 5rem;">
    <input class ="hoverlink" type="submit" name="Submit" value="Save" style="position: relative; position: absolute; left: 53%;  padding: 1rem; color : white; background-color : black">
    <input class ="hoverlink" type="button" name="Submit" onclick='location.replace("link.php")' value="Back" style=" color : white;background-color :black;position: relative; position: absolute; left: 40%  ;  padding: 1rem; ">
  </div>-->
  
</form>