<!DOCTYPE html>
<html>
<style>
input[type=text],textarea, select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>

<h1>SMS Form</h1>

<div>
  <form method="POST" action="<?=base_url('sms/send_sms')?>">
    <label for="message">Message</label>
   	<textarea name="message"></textarea>
	<div style="padding-left:500px;padding-right:500px;">
    <input type="submit"  value="Send SMS">
	</div>
  </form>
</div>

</body>
</html>
