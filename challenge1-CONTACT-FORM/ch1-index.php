<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
 <form action="http://167.114.138.180/web-107/challenges/ch1-mail.php" method="POST">
  <label>Name</label> <input type="text" name="name"><br><br>
  <label>Email</label> <input type="text" name="email"><br><br>
  <label>Phone</label> <input type="text" name ="phone"><br><br>
   
  <label>Request Callback</label>
  <label><input type="radio" name="callback-yes">Yes</label>
  <label><input type="radio" name="callback-no">No</label><br><br>
  
  <label>Website</label> <input type="text" name="website"><br><br>
   
  <label>Select Urgency:</label>
  <select name="urgency">
    <option value="emergency">Emergency</option>
    <option value="urgent">Urgent</option>
    <option value="no rush">No Rush</option>
  </select><br><br>
   
  <label>Type:</label>
  <select name="type">
    <option value="server">Server Support</option>
    <option value="billing">Billing Support</option>
    <option value="message">Message</option>
  </select><br><br>
  
  <p>Message</p>
   <textarea name="message" rows="6" cols="25"></textarea><br><br>
   
  <input type="submit" value="Send"><input type="reset" value="Clear">
  
  
  </form>
  
</body>
</html>