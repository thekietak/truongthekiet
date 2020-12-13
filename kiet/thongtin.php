<?php
include 'inc/header.php';
Session::checkSession();


?>
<?php
if(isset($_GET['idorder']) && $_GET['idorder']=='order'){
	$userid= session::get('id');

}
if($_SERVER['REQUEST_METHOD']==='POST'){
 


   $del_cart = $ct->del_all_cart();
   header('location: success.php');
  }


?>

    
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/anhbia.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center mb-4">
            <h1 class="mb-2 bread">Book a Table</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Reservation <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container-fluid px-0">
				<div class="row d-flex no-gutters">
          <div class="col-md-6 order-md-last ftco-animate makereservation p-4 p-md-5 pt-5">
          	<div class="py-md-5">
	          	<div class="heading-section ftco-animate mb-5">
		          	<span class="subheading">Thông tin </span>
		            <h2 class="mb-4">Đặt hàng</h2>
		          </div>
	            <form action="" method="post">
	              <div class="row">
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">Name</label>
	                    <input type="text" class="form-control" value= "<?php echo session::get('name') ?>" >
	                  </div>
	                </div>
	            
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">Phone</label>
	                    <input type="text" class="form-control" value= "<?php echo session::get('phone') ?>">
	                  </div>
					</div>
					<div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">Email</label>
	                    <input type="text" class="form-control" value= "<?php echo session::get('email') ?>">
	                  </div>
					</div>
					<div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">Địa chỉ</label>
	                    <input type="text" name=diachi class="form-control" >
	                  </div>
	                </div>

	                <div class="col-md-12 mt-3">
	                  <div class="form-group">
	                    <input type="submit" value="Make a Reservation" class="btn btn-primary py-3 px-5">
	                  </div>
	                </div>
	              </div>
	            </form>
	          </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch pb-5 pb-md-0">
						<div id="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.95411457213!2d106.67568771472574!3d10.738019992347608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752fde3267c70f%3A0xc7a7f2ee73639bd6!2zxJDhuqFpIGjhu41jIEPDtG5nIE5naOG7hyBTw6BpIEfDsm4!5e0!3m2!1svi!2s!4v1607237077498!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
					</div>
        </div>
			</div>
		</section>
		<?php
  include 'inc/footer.php';
  ?>