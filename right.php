       
        <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
        <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
        <div id="col" class="noprint">
          <center>
          <div id="col-in">


<h3>
  <center>Contact Us</center>
</h3>

<div id="about-me">

  <p><strong>JOB-PORTAL</strong></p>
  <P>099-520612</P>
  <p>982348094</p>
  <p>jobportal.com<br />
  </p>
  <p><b>Nairobi,Kenya</b></p>


</div> 

<hr class="noscreen" />


<center><h3>Login</h3></center>

<div class="login">
  <form name="form1" method="post" action="login.php">
    <table width="100%" border="0">
      <tr>
        <td><strong>User Name</strong></td>
      </tr>
      <tr>
        <td><span id="sprytextfield1">
            <label>
              <input type="text" name="txtUser" id="txtUser">
            </label>
            <span class="textfieldRequiredMsg">*</span></span>
          <label></label></td>
      </tr>
      <tr>
        <td><strong>Password</strong></td>
      </tr>
      <tr>
        <td><span id="sprytextfield2">
            <label>
              <input type="password" name="txtPass" id="txtPass">
            </label>
            <span class="textfieldRequiredMsg">*</span></span></td>
      </tr>
      <tr>
        <td><strong>User Type</strong></td>
      </tr>
      <tr>
        <td><label>
            <select name="cmbUser" id="cmbUser">
              <option value="JobSeeker">JobSeeker</option>
              <option value="Employer" selected="selected">Employer</option>
              <option value="Administrator">Administrator</option>
            </select>
          </label></td>
      </tr>
      <tr>
        <td><label>
            <div align="center">
              <input type="submit" name="button" id="button" value="Login">
            </div>
          </label></td>
      </tr>
      <tr>
        <td>
          <div align="center"><a href="Forget.php"><strong>Forgot Password? </strong></a></div>
        </td>
      </tr>
    </table>
  </form>
</div>
<br />

<hr class="noscreen" />




<hr class="noscreen" />



<hr class="noscreen" />
</div>
          </center>
          
        </div> 
        <script type="text/javascript">
          
          var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
          var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
          
        </script>