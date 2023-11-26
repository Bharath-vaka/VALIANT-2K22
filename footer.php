

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: red;
  color: white;
  cursor: pointer;
  padding: 15px 30px;
  border-radius: 12px;
}

#myBtn:hover {
  background-color: #555;
}
</style>
</head>
<body>

<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>


<script>
// Get the button
let mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

</body>
</html>














<footer id="footer">
				<!-- .footer start -->
				<!-- ================ -->
				 <div class="footer">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="footer-content">
									<div class="logo-footer"><img id="logo-footer" src="assets/img/vitbfooter.png" alt=""></div>
									<div class="row">
										<div class="col-sm-6">
											<p> At VISHNU, you'll enjoy a learning environment where you can grow, explore and discover all that you are capable of achieving.</p>
											<ul class="social-links circle">
												<li class="facebook"><a target="_blank" href="https://www.facebook.com/VITBhimavaram"><i class="fa fa-facebook"></i></a></li>
												<li class="twitter"><a target="_blank" href="https://twitter.com/VITBhimavaram"><i class="fa fa-twitter"></i></a></li>
												<li class="googleplus"><a target="_blank" href="https://plus.google.com/u/0/111745021549833496816"><i class="fa fa-google-plus"></i></a></li>
												<li class="youtube"><a target="_blank" href="https://www.youtube.com/channel/UCQ1e7LUEq6qqfzkPc-8xYeQ"><i class="fa fa-youtube-play"></i></a></li>
												<li class="linkedin"><a target="_blank" href="https://www.linkedin.com/school/vishnu-institute-of-technology-vishnupur-bhimavaram-pin-534202-cc-pa-/"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
										<div class="col-sm-6">
											<ul class="list-icons">
												<li><i class="fa fa-map-marker pr-10"></i> Vishnupur, Bhimavaram 534202</li>
												<li><i class="fa fa-phone pr-10"></i> +91 8816 251 333</li>
												<li><i class="fa fa-fax pr-10"></i> +91 8816 250 344 </li>
												<li><i class="fa fa-envelope-o pr-10"></i> info@vishnu.edu.in</li>
												<li><a href="">College Brochure</a></li>
											</ul>
										</div>
									</div>
									<a href="http://srivishnu.edu.in" class="link"><span>SRI VISHNU EDUCATIONAL SOCIETY</span></a>
								</div>
							</div>
                        </div>
                     </div>
                    </div>
    </footer>