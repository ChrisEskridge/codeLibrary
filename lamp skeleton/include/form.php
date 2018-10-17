<!--NOT REVIEWED-->

<form action="" method="post">
	<label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.."></input>
    <br><br>
    <label for="male">Male</label>
    <input type="radio" id="male" name="gender" value="male" checked>
    <label for="female">Female</label>
  	<input type="radio" id="female" name="gender" value="female">
    <label for="other">Other</label>
  	<input type="radio" id="other" name="gender" value="other">
    <br><br>
    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
    <br><br>
    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    <br><br>
    <input type="submit" value="Submit">
</form>