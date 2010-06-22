
</div></div>
<div id="footer">
	<div id="footer_container" class="container">
		<div class="span-18">
			<h2>About Akvo.org</h2>
		</div>
		<div class="span-18">
			<div class="span-3 first">
				<h3>Policies</h3>
				<p class="small">
					<a href="#">Privacy</a><br />
					<a href="#">Legal</a><br />
					<a href="#">Partners</a><br />
					<a href="#">Donations</a><br />
					<a href="#">Submissions</a>
				</p>
			</div>
			<div class="span-3">
				<h3>About</h3>
				<p class="small">
					<a href="#">Read our blog</a><br />
					<a href="#">Who are we?</a><br />
					<a href="#">How does it work</a><br />
					<a href="#">Financials</a><br />
					<a href="#">Statistics</a><br />
					<a href="#">FAQs</a><br />
					<a href="#">Thanks</a><br />
					<a href="#">Jobs</a><br />
				</p>
			</div>
			<div class="span-3">
				<h3>Partners</h3>
				<p class="small">
					<a href="#">Professionals</a><br />
					<a href="#">Organisations</a><br />
					<a href="#">Corporate</a><br />
					<a href="#">Volunteers</a><br />
					<a href="#">Knowledge</a><br />
				</p>
			</div>
			<div class="span-3">
				<h3>Developers</h3>
				<p class="small">
					<a href="#">Akvo Labs</a><br />
					<a href="#">Developer Guide</a><br />
					<a href="#">Source Code</a><br />
				</p>
			</div>
			<div class="span-3">
				<h3>Contact us</h3>
				<p class="small">
					<a href="http://help.akvo.org/">Help &amp; Support</a><br />
					<a href="#">Website Feedback</a><br />
					<a href="#">General Questions</a><br />
					<a href="#">Press Inquiries</a><br />
					<a href="#">Mailing Address</a><br />
					<a href="#">Directions</a><br />
				</p>
			</div>
			<div class="span-3">
				&nbsp;
			</div>
			<div class="span-3 last">
				
			</div>
		</div>
	</div>
</div>
	
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>


<script type="text/javascript">
	var $ = jQ = jQuery.noConflict();
	
	jQ(document).ready(function(){
		{% block jq_ready %}{% endblock jq_ready %}
		/*
		jQ('#main_nav_account').click(function () {
			jQ('#account_nav').slideToggle();
		});
		*/
		
		jQ('#grid_toggle').click(function () {
			jQ('.container').toggleClass('showgrid');
		});
		
		if (Modernizr.cssanimations) {
			jQ('#modern_header').html('Browser supports CSS Animations');
		} else {
			jQ('#modern_header').html('No browser support for CSS Animations');
		};
		
	});		
</script>	
</body>
</html>