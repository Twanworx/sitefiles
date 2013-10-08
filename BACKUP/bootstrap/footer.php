     <hr>
<!--        <p class="footer">A project of <a href="http://imakewebthings.com">I Make Web Things</a></p>-->
      <!--<footer>--->
<!--</footer>-->
   <div id="footerSlideContainer">
	<div id="footerSlideButton">This is the button</div>
	<div id="footerSlideContent">
		<div id="footerSlideText">


            <form action="http://www.example.com/form.php" method="get" class="nine columns alpha">
                <fieldset>
                    <legend>We'll Contact You</legend>
                    <!--FIRST NAME-->
                    <div class="eight columns alpha">
                        <label for="name">First Name</label>
                        <input type="text" name="name" required="required" placeholder="First Name">
                    </div>
                    <!--LAST NAME-->
                    <div class="eight columns alpha">
                        <label for="lastName">Your Email</label>
                        <input type="text" name="lstname" required="required" placeholder="Last Name">
                    </div>
                    <!--YOUR EMAIL-->
                    <div class="eight columns alpha">
                        <label for="email">Your Email</label>
                        <input type="email" name="email" required="required" placeholder="john@example.com">
                    </div>
                    <!--COMPANY-->
                    <div class="eight columns alpha">
                        <label for="company">Company</label>
                        <input type="text" name="company" required="required" placeholder="Your Company">
                    </div>
                    <!--WEBSITE-->
                    <div class="eight columns alpha">
                        <label for="website">Website</label>
                        <input type="text" name="website" required="required" placeholder="www.yoursite.com">
                    </div>
                    <!--PHONE NUMBER-->
                    <div class="eight columns alpha">
                        <label for="phone">Phone Number</label>
                        <input type="text" name="phone" required="required" placeholder="#">
                    </div>
                    <!--INTERESTED-->
                    <div class="eight columns alpha">
                        <label for="project">Your Project</label>
                        <input type="text" name="project" required="required" placeholder="">
                    </div>
                    <div class="fifteen columns alpha">
                        <select>
                            <option>Branding / Corporate Identity</option>
                            <option>Digital Media</option>
                            <option>Marketing</option>
                            <option>UI/UX</option>
                            <option>Mobile Design</option>
                            <option>Web Design / Interactive</option>
                        </select>
                    </div>
                    <div class="fifteen columns alpha">
                        <label for="message">Your Message</label>
                        <textarea name="message" cols="50" rows="4"></textarea>
                    </div>
                    <div class="four columns alpha">
                        <button type="submit">Submit</button>
                    </div>
                </fieldset>
            </form>

		</div>
	</div>
</div>

<script src="http://dvwx.co/wp-content/themes/bootstrap/js/jquery.js"></script>
<script src="http://dvwx.co/wp-content/themes/bootstrap/js/doveworks.js"></script>
<script src="http://dvwx.co/wp-content/themes/bootstrap/js/index.js"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script type="text/javascript">
	jQuery(function($) {
		var open = false;
		$('#footerSlideButton').click(function () {
			if(open === false) {
				$('#footerSlideContent').animate({ height: '500px' });
				$(this).css('backgroundPosition', 'bottom left');
				open = true;
			} else {
				$('#footerSlideContent').animate({ height: '0px' });
				$(this).css('backgroundPosition', 'top left');
				open = false;
			}
		});		
	});
</script>
    </div>



    <?php wp_footer(); ?>

  </body>
</html>