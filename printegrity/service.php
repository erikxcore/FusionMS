<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Printegrity Technologies: Managed Print Services: Service Request</title>

<link rel="stylesheet" type="text/css" href="styles1.css" />
</head>

<body>
<div id="wrapper">
  <div id="header">
<div id="logo"> <a href="home.html"><img src="images/ptLogo.png" alt="Printegrity Tech logo" width="249" height="107" border="0" /></a> </div>

<div id="nav">
  <ul>
  	<li><a href="#">Services</a>
    	<ul>
        	<li><a href="mps.html">Managed Print Services</a></li>
            <li><a href="service.php">Request Service Form</a></li>
            <li><a href="maintenance.html">Maintenance</a></li>
        </ul></li>
    <li><a href="orders.php">Orders</a></li>
    <li><a href="about.html">About</a></li>
    <li><a href="contact.html">Contact</a></li>
  </ul>
  <!--end nav--></div>
 <!--end header--> </div>
 
  <div id="main">
    <div id="fcontent">
      <h1>Service Request</h1>
    <p>Please fill out form below. An service ticket confirmation will be sent to you within 2 hours<br />
(business hours 9am-5pm EST). </p>
    <form id="form1" name="form1" method="post" action="forms/service.php">
<table width="626" border="0" cellpadding="5">
  <tr>
    <td colspan="3"><h3>CONTACT INFORMATION</h3></td>
  </tr>
  <tr>
    <td width="30%">Organization</td>
    <td width="70%" colspan="2"><input type="text" name="organization" id="organization" /></td>
  </tr>
  <tr>
    <td>Name</td>
    <td colspan="2"><input type="text" name="techname" id="techname" /></td>
  </tr>
  <tr>
    <td>Phone</td>
    <td colspan="2"><input type="text" name="techphone" id="techphone" /></td>
  </tr>
  <tr>
    <td>E-mail</td>
    <td colspan="2"><input type="text" name="techemail" id="techemail" /></td>
  </tr>
  <tr>
    <td>Address</td>
    <td colspan="2"><textarea name="techaddress" id="techaddress" cols="45" rows="5"></textarea></td>
  </tr>

  
  <tr>
    <td colspan="3"><h3>LOCATION INFORMATION</h3></td>
  </tr>
  
  <tr>
    <td>Name</td>
    <td colspan="2"><input type="text" name="locationcontact" id="locationcontact" /></td>
  </tr>
  <tr>
    <td>Phone</td>
    <td colspan="2"><input type="text" name="locationphone" id="locationphone" /></td>
  </tr>
  <tr>
    <td>E-mail</td>
    <td colspan="2"><input type="text" name="locationemail" id="locationemail" /></td>
  </tr>
  <tr>
    <td>Address</td>
    <td colspan="2"><textarea name="address" id="address" cols="45" rows="5"></textarea></td>
  </tr>
  
 </table>
 <table width="626" border="0" cellpadding="5">
  <tr>
    <td colspan="3"><strong>Print Device Information</strong></td>
    </tr>
  <tr>
    <td width="30%">Manufacturer</td>
    <td width="70%" colspan="2"><input type="text" name="manufacturer" id="manufacturer" /></td>
    </tr>
  <tr>
    <td>Model</td>
    <td colspan="2"><input type="text" name="model" id="model" /></td>
    </tr>
  <tr>
    <td>Serial Number</td>
    <td colspan="2"><input type="text" name="serialnumber" id="serialnumber" /></td>
    </tr>
  <tr>
    <td>Networked</td>
    <td colspan="2"><select name="networked" id="networked">      
      <option>Yes</option>
      <option>No</option>
    </select></td>
    </tr>
  <tr>
    <td>IP Address</td>
    <td colspan="2"><input type="text" name="ipaddress" id="ipaddress" /></td>
    </tr>
  <tr>
    <td>Problem Description</td>
    <td colspan="2"><textarea name="problem" id="problem" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td width="30%">Error Message?<br />
      <em>(if applicable)</em></td>
    <td><input type="text" name="error" id="error" /></td>
    </tr>
  <tr>
    <td>Does printer power on?</td>
    <td><select name="power" id="power">
      <option>Yes</option>
      <option>No</option>
    </select></td>
    </tr>
  <tr>
    <td>Does printer still print?</td>
    <td><select name="print" id="print">
      <option>Yes</option>
      <option>No</option>
    </select></td>
    </tr>
  <tr>
    <td>Has problem occurred before?</td>
    <td><select name="occurredbefore" id="occurredbefore">
      <option>No</option>
      <option>Yes</option>
    </select></td>
    </tr>
  <tr>
    <td>Has printer ever been serviced?</td>
    <td><select name="serviced" id="serviced">
      <option>No</option>
      <option>Yes</option>
    </select></td>
    </tr>
  <tr>
    <td style="text-align:center;"><img style="display:block;margin:0 auto;" src="captcha.php" />
    <label ;">Captcha : </label>
    <input class="input" type="text" name="norobot" style="display:block;margin:0 auto;" /></td>
    <td colspan="2" align="center"><input type="submit" name="Submit" id="Submit" value="Submit" /></td>
  </tr>
  </table>
</form>
    <!--end content--></div>
    <br style="clear: both;">
    <!--end main-->
  </div>
  
 <!-- end wrapper --></div>
<div id="footer">� 2011 Printegrity Technologies</div>
</body>
</html>