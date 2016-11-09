<?php include 'myportfolio/modular/designheader.php'; ?>


<br>
<br>
<br>
 <div class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT INFO</h2>
  <br>
  <div class="row">
    <div class="col-sm-5">
      <p>If you have any questions, would like to request a resume or want to do business please fill out the following form or call my cell.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Utah, USA</p>
      <p><span class="glyphicon glyphicon-phone"></span> 385-399-3152</p>
    </div>
    <div class="col-sm-7">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
          <div class="col-sm-6 form-group">
          <input class="form-control" id="phone" name="phone" placeholder="Phone" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
          <div class="col-sm-6 form-group">
          <input class="form-control" id="company" name="company" placeholder="Company" type="text" required>
        </div>
      </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="subject" name="subject" placeholder="Subject" type="text" required>
        </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-default pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
<form name="contactform" method="post" action="send_form_email.php">
 
<table width="450px">
 
<tr>
 
 <td valign="top">
 
  <label for="first_name">First Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="first_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top"">
 
  <label for="last_name">Last Name *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="last_name" maxlength="50" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="email">Email Address *</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="email" maxlength="80" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="telephone">Telephone Number</label>
 
 </td>
 
 <td valign="top">
 
  <input  type="text" name="telephone" maxlength="30" size="30">
 
 </td>
 
</tr>
 
<tr>
 
 <td valign="top">
 
  <label for="comments">Comments *</label>
 
 </td>
 
 <td valign="top">
 
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 
 </td>
 
</tr>
 
<tr>
 
 <td colspan="2" style="text-align:center">
 
  <input type="submit" value="Submit">   
 
 </td>
 
</tr>
 
</table>
 
</form>
<div class="container-fluid bg-2 text-center">
  <p>I am open to growing my skills and collaborating on projects.  I am looking for employment and freelance projects.  I will be graduating in April 2017 with a Degree from BYU-I in Web Development.  Looking forward to hearing from you!   </p>

</div>
<br>
<br>
<?php include 'myportfolio/modular/designfooter.php'; ?>
