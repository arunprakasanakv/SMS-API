<?php 
	include_once 'header.php';
	include_once 'text_view_count.php';
	if (!isset($_POST['user_data'])) {
		echo "<div class='alert alert-danger'><strong>Please select a row for message ! </strong>no data</div>";
	}
	else{	
	$_SESSION['numbers']= $_POST['user_data'];
	// print_r($number);
	// print_r($headers);
?>	
	<div>
		<h1>Enter Your Message</h1>
		<hr style="border-top: 1px solid #191616">
	</div>
	<form>
		<table class="table">
			<tr>
				<td>
					<p>Sender ID :- </p>
				</td>
				<td>
					<select class="form-control" id="bulk_sender_id">
						<?php
							if(is__array($user_details['sender_id'])){
								foreach ($user_details['sender_id'] as $key => $sender_id) {
									echo $sender_id;
								} 
							}else{
								echo "<option>".$user_details['sender_id']."</option>";
							}
						 ?>
					</select>
				</td>
			</tr>
			<tr>
				<td>
				<p>Enter Message :- </p>
				</td>
				<td>
				<textarea class="form-control" rows="5" id="bulk_message" name="message" onkeyup="countChar(this)" required></textarea>
				<div id="bulk_charNum">Number of SMS will Send = 1 (0)</div>
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td>
				<label><input type="checkbox" id="bulk_unicode" name="unicode"> Unicode</label>
				</td>
			</tr>
				<tr>
				<td>
				</td>
				<td>
				<button type="submit" class="btn btn-success" id="send_bulk_sms" style="width: 208px;">Send SMS</button>
				</td>
			</tr>
		</table>
	</form>
	<div id="response"></div>
<?php }  include_once '../view/footer.php'; ?>