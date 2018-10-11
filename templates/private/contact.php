<?php
$contact = '<main>
		<div class="row">
			<div class="col col-md-one-third col-lg-one-third nodisplay"></div>
			<!--<div class="col col-md-one-third col-lg-one-third hidden"></div>-->
			<div class="col col-md-two-third col-lg-two-third">    
				<form action="#" method="post" id="theForm">
					<fieldset>
						<div class="two"><label for="wholeName">Name</label><input type="text" name="wholeName" id="wholeName" required></div>
						<div class="two"><label for="email">Email</label><input type="email" name="email" id="email" required></div>
						<div class="two"><label for="interest">Interests</label>
							<select name="state" id="interest">
								<option value="">Select your Interest</option> 
								<option value="WD">Website Design</option> 
								<option value="DLD">Digital layout Design</option> 
								<option value="UX">User Experience Design</option> 
								<option value="UI">User Interface Design</option> 
								<option value="BL">Branding Design</option> 
								<option value="MB">My Band</option>
								<option value="OS">Other</option> 
							</select>
						</div>    
						<div class="two">
							<label for="comments">Comments*<span class="tooltip">Please provide as much information as you can.</span></label><textarea name="comments" id="comments" rows="5" required></textarea>
						</div>
						<div class="one"><input type="submit" value="Send" id="submit"></div>
					</fieldset>
				</form>
			</div>
		</div>
		
		<div class="row">
			<div class="col col-md-one-third nodisplay">
				<!--<div class="info-box">
					<h2>Experience</h2>
					<button class="moreinfo">Read More</button>
					<div class="panel">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<br class="clearfloat" />
				</div>-->
			</div>
			<div class="col col-md-one-third">
				<div class="info-box">
					<h2>Facebook</h2>
					<img src="images/fblogo.png" alt="facebook logo">
					<a href="https://www.facebook.com/connor.marr.7" target="_blank" class="socialinfo">Face Me</a>
					<div class="panel">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<br class="clearfloat" />
				</div>
			</div>
			<div class="col col-md-one-third">
				<div class="info-box">
					<h2>Github</h2>
					<img src="images/gitlogo.png" alt="github logo">
					<a href="https://www.facebook.com/connor.marr.7" target="_blank" class="socialinfo">Git Me</a>
					<div class="panel">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					<br class="clearfloat" />
				</div>
			</div>
		</div>	
	</main>
	<script src="js/script.js"></script>
	<script src="js/cookies.js"></script>
	<script src="js/register.js"></script>
	<script src="js/errorMessages.js"></script>
	<script src="js/utilities.js"></script>';
    ?>
    