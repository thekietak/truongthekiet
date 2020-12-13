<?php
include 'inc/header.php';
?>
    
    <!-- END nav -->
	<section class="home-slider owl-carousel">

<div class="slider-item" style="background-image: url(images/anhbia.jpg);" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
  <div class="container">
	<div class="row slider-text justify-content-center align-items-center">

	  <div class="col-md-7 col-sm-12 text-center ftco-animate">
		  <h1 class="mb-3 mt-5 bread">Shop Bài YUGIOH </a>  </h1>
	
	  </div>

	</div>
  </div>
</div>
</section>



		<section class="ftco-section ftco-wrap-about">
			<div class="container">
				<div class="row">
					<div class="col-md-7 d-flex">
						<div class="img img-1 mr-md-2" style="background-image: url(images/sanpham/hopbai1.jpg);"></div>
						<div class="img img-2 ml-md-2" style="background-image: url(images/sanpham/hopbai2.jpg);"></div>
					</div>
					<div class="col-md-5 wrap-about pt-5 pt-md-5 pb-md-3 ftco-animate">
	          <div class="heading-section mb-4 my-5 my-md-0">
	          	<span class="subheading">About</span>
	            <h2 class="mb-4">SHop Bài YUGIOH</h2>
	          </div>
	          <p>Shop cung cấp thẻ bài uy tín nhất nước Việt Nam</p>
						<pc class="time">
						
						</p>
					</div>
				</div>
			</div>
		</section>

		
		<section class="ftco-section ftco-counter img ftco-no-pt" id="section-counter">
    	<div class="container">
    		<div class="row d-md-flex">
    			<div class="col-md-9">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="18">0</strong>
		                <span>Nhiều năm kinh nghiệm</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Thẻ/Hộp</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="50">0</strong>
		                <span>Nhân Viên</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="15000">0</strong>
		                <span>Khác hàng hài lòng</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
          <div class="col-md-3 text-center text-md-left">
          	<p>Shop luôn mang đến sự hài lòng tốt nhất.</p>
          </div>
        </div>
    	</div>
    </section>

		

    <section class="ftco-section">
    	<div class="container">
    		<div class="row no-gutters justify-content-center mb-5 pb-2">
          <div class="col-md-12 text-center heading-section ftco-animate">
          	<span class="subheading">Specialties</span>
            <h2 class="mb-4">Our Product</h2>
          </div>
        </div>
       
        <div class="row no-gutters d-flex align-items-stretch">
        	 <?php
        	$listindex = $sanpham->showindex1();
        	if($listindex){
        		while ($index1=$listindex->fetch_assoc()) {
        			# code...
        		

        ?>
        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img" style="background-image: url(images/sanpham/<?php echo $index1['images'] ?>);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3><?php echo $index1['ten'] ?></h3>
		                  <h5><?php echo $index1['ghichu'] ?></h5>
		                </div>
		                <div class="one-forth">
		                  <span class="price"><?php echo $index1['gia'] ?></span>
		                </div>
		              </div>

		              
		              <p><a href="detail.php?monid=<?php echo $index1['id'] ?>" class="btn btn-primary">Đặt ngay</a></p>
	              </div>
              </div>
            </div>
        	</div>
        <?php
    		}
        	}
        	
        ?>
        			 <?php
        	$listindex = $sanpham->showindex2();
        	if($listindex){
        		while ($index2=$listindex->fetch_assoc()) {
        ?>
        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img order-md-last" style="background-image: url(images/sanpham/<?php echo $index2['images'] ?>);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3><?php echo $index2['ten'] ?></h3>
		                  <h5><?php echo $index2['ghichu'] ?></h5>
		                </div>
		                <div class="one-forth">
		                  <span class="price"><?php echo $index2['gia'] ?></span>
		                </div>
		              </div>
		              <p><a href="detail.php?monid=<?php echo $index2['id'] ?>" class="btn btn-primary">Đặt ngay</a></p>
	              </div>
              </div>
            </div>
        	</div>
        <?php
    		}
        	}
        	
        ?>
             <?php
        	$listindex = $sanpham->showindex3();
        	if($listindex){
        		while ($index3=$listindex->fetch_assoc()) {
        	?>

        	<div class="col-md-12 col-lg-6 d-flex align-self-stretch">
        		<div class="menus d-sm-flex ftco-animate align-items-stretch">
              <div class="menu-img img" style="background-image: url(images/sanpham/<?php echo $index3['images'] ?>);"></div>
              <div class="text d-flex align-items-center">
								<div>
	              	<div class="d-flex">
		                <div class="one-half">
		                  <h3><?php echo $index3['ten'] ?></h3>
		                  <h5><?php echo $index3['ghichu'] ?></h5>
		                </div>
		                <div class="one-forth">
		                  <span class="price"><?php echo $index3['gia'] ?></span>
		                </div>
		              </div>
		              <p><a href="detail.php?monid=<?php echo $index3['id'] ?>" class="btn btn-primary">Đặt ngay</a></p>
	              </div>

              </div>
            </div>

        	</div>
        	        <?php
    		}
        	}
        	
        ?>
    </section>
    
		
		
    <?php
  include 'inc/footer.php';
  ?>