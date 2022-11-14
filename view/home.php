<section>
		<div class="container">
			<div class="row">
				<!-- Slideshow container -->
				<div class="slideshow-container">

				<!-- Full-width images with number and caption text -->
				<div class="mySlides">
				<div class="numbertext">1 / 3</div>
				<img src="uploads/001.jpg" style="width:100%">
				<div class="text">Caption Text</div>
				</div>

				<div class="mySlides">
				<div class="numbertext">2 / 3</div>
				<img src="uploads/natural-rough-uncut-diamonds-249.jpg" style="width:100%">
				<div class="text">Caption Two</div>
				</div>

				<div class="mySlides">
				<div class="numbertext">3 / 3</div>
				<img src="uploads/001.jpg" style="width:100%">
				<div class="text">Caption Three</div>
				</div>

				<!-- Next and previous buttons -->
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>
				</div>
				<br>

				<!-- The dots/circles -->
				<div style="text-align:center">
				<span class="dot" onclick="currentSlide(1)"></span>
				<span class="dot" onclick="currentSlide(2)"></span>
				<span class="dot" onclick="currentSlide(3)"></span>
				</div>
			</div>

			<div class="row" style="margin-top: 10px;">			
				<div class="col-sm-auto">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Sản phẩm mới nhất</h2>
						<?php 
							$i = 0;
							foreach ($spnew as $sp){
								extract($sp);
								$linksp = "index.php?act=sanphamct&idsp=".$id;
								$hinh = $img_path.$img;
								echo '<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="'.$hinh.'" alt="" />
											<h2>$'.number_format($price, 2).'</h2>
											<p>'.$name.'</p>
											<a href="'.$linksp.'" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Xem ngay</a>
										</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>$'.number_format($price, 2).'</h2>
												<p>'.$name.'</p>
												<a href="'.$linksp.'" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Xem ngay</a>
											</div>
										</div>
									</div>
									
								</div>
							</div>';
							}
							
						?>
						
						
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section> 