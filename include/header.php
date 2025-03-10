<header class="header stricky">
	<div class="containerFull">
		<div class="inline-header py-3">
			<div class="left_logo">
				<a href="index.php">
					<h1 class="heading text_primary fontWeight700 fontHeading">
						Adv. Kunal Shah
					</h1>
					<!-- <img src="images/logo.png" alt=""> -->
				</a>

			</div>
			<div class="menu-links ">

				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about-us.php">About</a></li>

					<li><a href="our-practice">Our Practice</a></li>
					<!--<li><a href="important-links.php">Important Links</a></li>-->
					<li><a href="contact-us.php">Contact Us</a></li>
				</ul>


			</div>
			<div>
				<a class="callActionBtn" href="tel: +91-9930911997">
					<div class="iconPhone pulse">
						<i class="fa fa-phone"></i>
					</div>
					<div class="rightIcon">
						<p class="fontWeight700 text_primary">Call to our Experts</p>
						<h4 class="title mt-1 text_secondary fontWeight700 fontHeading"> +91-9930911997</h4>
					</div>
				</a>
			</div>

		</div>

	</div>


</header>



<!-- popup  -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
	Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header bg_primary">
				<h5 class="modal-title fontHeading text_primary" id="exampleModalLabel"> <span
						class="fontWeight600 fontHeading text-white">Speak To A Our Expert</span> <br /><span
						class="fs-6 text-white-50">We'r here to help you!</span></h5>
				<button type="button" class="btn-close  " data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form action="" class="bg-white popup ">

					<div class="px-4 py-4">
						<div class="form-floating mb-3">
							<input type="tel" class="form-control" id="floatingName" placeholder="Name">
							<label for="floatingName">Name</label>
						</div>
						<div class="form-floating mb-3">
							<input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
							<label for="floatingInput">Email address</label>
						</div>
						<div class="form-floating mb-3">
							<input type="tel" class="form-control" id="floatingPassword" placeholder="Phone No.">
							<label for="floatingPassword">Phone No.</label>
						</div>
						<div class="form-floating">
							<textarea class="form-control" placeholder="Leave a message here" style="height: 100px"
								id="floatingTextarea"></textarea>
							<label for="floatingTextarea">Message</label>
						</div>
						<button class="btn btn_6 fontHeading w-100 py-3 mt-3  " type="submit">
							Speak To A Consultant
						</button>
					</div>

				</form>

			</div>
			<!-- <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div> -->
		</div>
	</div>
</div>



<!--share buttons-->
<div class="socialBtn_sticky">
	<div class="share">
		<span><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
				<path fill="none" stroke-linejoin="round" stroke-width="32" d="M408 64H104a56.16 56.16 0 0 0-56 56v192a56.16 56.16 0 0 0 56 56h40v80l93.72-78.14a8 8 0 0 1 5.13-1.86H408a56.16 56.16 0 0 0 56-56V120a56.16 56.16 0 0 0-56-56z"></path>
				<circle cx="160" cy="216" r="32"></circle>
				<circle cx="256" cy="216" r="32"></circle>
				<circle cx="352" cy="216" r="32"></circle>
			</svg></span>
		<nav> <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
			<a href="#"><i class="fa-brands fa-facebook-f"></i></a>
			<a href="#"><i class="fa-brands fa-instagram"></i></a>
			<a href="#"><i class="fa-brands fa-x-twitter"></i></a>

		</nav>
	</div>

</div>
<!--share buttons-->

<!-- <div class="whatChat">
	<a target="_blank" href="https://api.whatsapp.com/send?phone=910123456789&amp;text=Hi">
		
		<picture>
			<source srcset="images/icons/whatsapp.webp" type="image/webp">
			<img src="images/icons/whatsapp.webp">
		</picture>
	</a>
</div> -->


<div class="cursor"></div>
<div class="cursor2"></div>

<script>
	// Force a hover to see the effect
	const share = document.querySelector('.share');

	setTimeout(() => {
		share.classList.add("hover");
	}, 1000);

	setTimeout(() => {
		share.classList.remove("hover");
	}, 3000);
</script>