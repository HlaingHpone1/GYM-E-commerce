<?php require("./header.php"); ?>

<style>
    .card_container .product__card {
        width: 300px;
        height: 500px;

        margin: 0 auto;

        border-radius: 15px;
        box-shadow: 0 15px 60px rgba(0, 0, 0, 0.5);

        background: #000;

        position: relative;
    }

    .card_container .product__card .face {
        width: 100%;
        height: 100%;

        position: absolute;
        bottom: 0;
        left: 0;

        display: flex;
        justify-content: center;
        align-items: center;
    }

    .card_container .product__card .face.face1 {
        padding: 20px;

        align-items:flex-start;

    }

    .card_container .product__card .card_sub_title {
        margin: 0 0 20px 0;
        color: #fff;
    }

    .card_container .product__card .card_sub_title ~ p {
        color: #fff;
    }

    .card_container .product__card .face.face2 {
        transition: 0.5s;
    }

    .card_container .product__card .face.face2 h2 {
        margin: 0;
        padding: 0;

        font-size: 3em;
        text-transform: capitalize;

        text-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);

        color: #fff;
        z-index: 10;

        transition: 0.5s;
    }
    .card_container .product__card:hover .face.face2 {
        height: 60px;
    }

    .card_container .product__card:hover .face.face2 h2 {
        font-size: 2em;
    }

    .card_container .product__card:nth-of-type(1) .face.face2 {
        border-radius: 15px;

        background: rgba(0, 0, 0, 0.3) url("./img/bg1.jpg"); /* ../images/ */
        background-position: center;
        background-size: 100% 100%;
        background-repeat: no-repeat;
        background-blend-mode: multiply;
    }

    .card_container .product__card:nth-of-type(2) .face.face2 {
        border-radius: 15px;

        background: rgba(0, 0, 0, 0.3) url("./img/bg1.jpg");
        background-position: right;
        background-size: cover;
        background-repeat: no-repeat;
        background-blend-mode: multiply;
    }

    .card_container .product__card:nth-of-type(3) .face.face2 {
        border-radius: 15px;

        background: rgba(0, 0, 0, 0.3) url("./img/bg1.jpg"); 
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-blend-mode: multiply;
    }

    .card_container .product__card .star_gp > p {
        margin: 15px 10px 0 0;

        font-size: 17px;

        color: #fff;
        display: inline-block;
    }

    .card_container .product__card .fas,
    .card_container .product__card .far {
        margin-top: 10px;
        color: #00ccff;
    }

    .card_container .product__card .updated {
        margin: 10px 0 0 0;
        font-size: 14px;
    }

    .card_container .product__card a {
        margin: 10px 0 0 0;
        padding: 10px 20px;

        text-decoration: none;

        border-radius: 10px;
        color: #fff;
        background-color: #00ccff;

        display: inline-block;

        transition: all 500ms linear;
    }

    .card_container .product__card a:hover {
        background-color: #0b6b83;
    }
</style>

<div class="contianer-fluid">
    <div class="row card_container">
        <div class="col-md-4">
            <div class="product__card">
						<div class="face face1">
							<div class="content">
								<h2 class="card_sub_title">Java</h2>
								<p class="">
									Java is a class-based, object-oriented programming language
									that is designed to have as few implementation dependencies as
									possible.
								</p>

								<div class="star_gp">
									<p>4.95</p>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<p>(7500)</p>
								</div>
								<p class="updated">Updated Mar 2021</p>
								<a href="./course/learnmore.html">Learn More</a>
								<a href="">Add to Card</a>
							</div>
						</div>
						<div class="face face2">
							<h2>Java</h2>
						</div>
					</div>
        </div>
        <div class="col-md-4">
            <div class="product__card">
						<div class="face face1">
							<div class="content">
								<h2 class="card_sub_title">Java</h2>
								<p class="">
									Java is a class-based, object-oriented programming language
									that is designed to have as few implementation dependencies as
									possible.
								</p>

								<div class="star_gp">
									<p>4.95</p>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<p>(7500)</p>
								</div>
								<p class="updated">Updated Mar 2021</p>
								<a href="./course/learnmore.html">Learn More</a>
								<a href="">Add to Card</a>
							</div>
						</div>
						<div class="face face2">
							<h2>Java</h2>
						</div>
					</div>
        </div>
        <div class="col-md-4">
            <div class="product__card">
						<div class="face face1">
							<div class="content">
								<h2 class="card_sub_title">Java</h2>
								<p class="">
									Java is a class-based, object-oriented programming language
									that is designed to have as few implementation dependencies as
									possible.
								</p>

								<div class="star_gp">
									<p>4.95</p>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<i class="fas fa-star"></i>
									<p>(7500)</p>
								</div>
								<p class="updated">Updated Mar 2021</p>
								<a href="./course/learnmore.html">Learn More</a>
								<a href="">Add to Card</a>
							</div>
						</div>
						<div class="face face2">
							<h2>Java</h2>
						</div>
					</div>
        </div>
    </div>
</div>


<?php require("./footer.php"); ?>
