<?php 
    
    if(is_array($sanpham1)){
        extract($sanpham1);
    }
    $img = $img_path.$img;   
    
?>
<section>
		<div class="container">
			

			<div class="row" style="margin-top: 10px;">			
            
					<div class="product-details"><!--product-details-->
                     <?php
                        
                     ?>

                        <div class="img-detail col-sm-5">                
                        
                        <div class="view-product">
								<img src="<?=$img?>" alt="" />
								
						</div>
                                    
                        </div>
                        <div class="col-sm-7">
							<div class="product-information"><!--/product-information-->							
								<h2><?=$name?></h2>								
								<span>
									<span>$<?=number_format($price, 2)?></span>
								</span>									
								<p><b>Số lượng:</b> <input type="text" value="3" />
									</p>
                                    <button type="button" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
									Add to cart
									</button>
							</div><!--/product-information-->
						</div>	
					
                    </div><!--/product-details-->
					
					<div class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Details</a></li>
								<li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
							</ul>
						</div>
						<div class="tab-content">
							<div class="tab-pane fade" id="details" >
                                <div class="col-sm-12">
                                    <p><?=$des?></p>
                                </div>
							</div>
						
							
							<div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>
										<?php
											if((isset($_SESSION['user'])) && (is_array($_SESSION['user']))){
												extract($_SESSION['user']);	
												echo "$user";
											}
										
										?>
									</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i><?php
										date_default_timezone_set('Asia/Ho_Chi_Minh');
										echo date('H:i a');?>
										</a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i><?php
										date_default_timezone_set('Asia/Ho_Chi_Minh');
										echo date('d M Y');?>
										</a></li>
									</ul>
									
									
									<?php include "view/binhluan/binhluanform.php";?>
								</div>
							</div>
							
						</div>
					</div><!--/category-tab-->

					<div class="recommended_items"><!--sp cùng loại-->
						<h2 class="title text-center">Sản phẩm cùng loại</h2>				
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<?php
									if(!empty($dssanphamcungloai))
									foreach ($dssanphamcungloai as $key  => $value){
										if($key % 3 == 0){
											?> 
											<div class="item <?php echo $key == 0 ? 'active' : '' ?>">	
											<?php
										}
										$imgcungloai = $img_path.$value['img'];
										$linkspcungloai = "index.php?act=sanphamct&idsp=".$value['id'];
										?>

									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?=$imgcungloai?>" alt="" />
													<h2>$<?=number_format(($value['price']),2)?></h2>
													<p><?=$value['name']?></p>
													<a href="<?=$linkspcungloai?>" class="btn btn-default add-to-cart"><i class="fa fa-eye"></i>Xem ngay</a>
												</div>
											</div>
										</div>
									</div>
									<?php
									if($key % 3 == 2){
										?> 									
									</div>
									<?php
								}
								?>
								<?php
							}
						?>			
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div><!--/sp cùng loại-->
					
            </div>		
		
					
				
			</div>
		</div>
	</section> 