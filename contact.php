<?php require("./header.php"); ?>

    <div class="banner" id="aboutbanner">
		<h1 class="fs-1">Contact Us</h1>
		<p>Home / Pages / Contact Us</p>
	</div>

    <div class="container-fluid ">
        <div class="row mybg-dark contant_info">
            <div class="col-lg-6 col-md-12 text-white text-center">
                <h1 class="fs-1">Information</h1>
				<p>
					If you have any questions, please do not hesitate to contact us.
				</p>
				<i class="me-2 my-3 fas fa-map-marker-alt"></i>
				<span> No.9 Kabar Aye Pagoda Rd, Yangon, Myanmar (Burma)</span><br />
				<i class="me-2 my-3 fas fa-phone"></i> <span>Call Free: (01) 4567859</span><br />
				<i class="me-2 my-3 fas fa-fax"></i> <span>FAX: (123) 456-7891</span><br />
				<i class="me-2 my-3 fas fa-clock"></i> <span>Mon - Sat 8:00 - 18:00</span><br />
				<i class="me-2 my-3 fas fa-envelope"></i> <span>info@dragonworld.com</span
				><br/>
                <a href="./privacy.php" class="text-white text-decoration-none">Privacy Policy</a>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="box">
                    <h2 class="fs-2 text-center ">Contact Us</h2>
                    <form action="" method="">
                        <div>
                            <input type="text" name="" required="" />
                            <label for="name">Name</label>
                        </div>

                        <div>
                            <input type="email" name="" required="" />
                            <label for="name">Email</label>
                        </div>

                        <div>
                            <input type="text" name="" required="" />
                            <label for="name">Phone</label>
                        </div>

                        <div>
                            <textarea required=""></textarea>
                            <label>Message</label>
                        </div>
                        <input class="contactus_btn" type="submit" name="" value="submit" />
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 location_section">
                <h1 class="pt-5">Dragon World Shopping Center</h1>

                <iframe class="google_map mt-5" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3818.7751607159335!2d96.15543307660556!3d16.837506620189238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1935921531903%3A0x80e39d53ce1c6ee3!2s9%20Kabar%20Aye%20Pagoda%20Rd%2C%20Yangon!5e0!3m2!1sen!2smm!4v1642820652854!5m2!1sen!2smm" allowfullscreen="" loading="lazy">
                </iframe>
            </div>
        </div>
    </div>

<?php require_once("./footer.php"); ?>