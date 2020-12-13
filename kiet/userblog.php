<?php
include 'inc/header.php';
// if($_SERVER['REQUEST_METHOD']==='POST'){
 
//   $ten = $_POST['ten'];
//   $sdt1=$_POST['sdt1'];
//   $sex=$_POST['gioitinh'];
//   $pass1= md5($_POST['pass1']);
//   $repass=md5($_POST['repass']);
//   $result = $us->insert_user($ten,$sdt1,$sex,$pass1,$repass);
 
// }
if(!isset($_GET['id']) || $_GET['id']==NULL){
    echo "<script>window.location = '404.php'</script>";
}else{
    $id= $_GET['id'];
}
if($_SERVER['REQUEST_METHOD']==='POST'){
 
    $ten = $_POST['ten'];
    $sdt1=$_POST['sdt1'];
    $sex=$_POST['gioitinh'];

    $result = $us->update_user($ten,$sdt1,$sex,$id);
   
  }
?>

<style>
label {
    color: black;

    font-weight: bold;
}
</style>

<!-- END nav -->

<section class="hero-wrap hero-wrap-2" style="background-image: url('images/anhbia.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center mb-4">
                <h1 class="mb-2 bread">Thông tin cá nhân</h1>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Trang cá nhân<i
                            class="ion-ios-arrow-forward"></i></span></p>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-md-5">
                <div class="col-md-6  p-md-5 ">
                    <h2 class="h4 mb-2 mb-md-5 font-weight-bold">Thông tin cá nhân </h2>
                    <span  > <?php 
				    if(isset($result))
				        {
				    	echo $result ;
				        }
			?></span>
                    <?php

            $usershow = $us->show_thongtin($id);
            if($usershow){
                    while($user = $usershow->fetch_assoc()){

      
            ?>
                    <form class="login-form" action="" method="post">
                        <div class="form-group">
                            <div class="form-row">
                                <div class="col">
                                    <label>Tên</label>
                                    <input type="text" class="form-control" value="<?php echo $user['ten']?>" required
                                        name="ten">
                                </div>

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-uppercase">Số điện thoại</label>
                            <input pattern="[0]{1}[0-9]{9}" name=sdt1 type="text" class="form-control"
                                value="<?php echo $user['phone'] ?>">

                        </div>
                        <div class="form-group">
                            <label>Giới tính</label>
                            <div class="row" data-toggle="buttons">
                                <div class="col">
                                    <label class="btn btn-outline-secondary">Nam
                                        <input <?php if( ($user['gioitinh'])==1){
                                                echo "checked";
                                            }
                                             ?> type="radio" name="gioitinh" value="1">
                                    </label>
                                </div>
                                <div class="col">
                                    <label class="btn btn-outline-secondary">Nữ
                                        <input type="radio" <?php if( ($user['gioitinh'])==0){
                                                echo "checked";

                                            }
                                             ?> name="gioitinh" value="0">
                                    </label>
                                </div>
                            </div>
                        </div>

                        <?php
                               }
                            }
                            ?>


                        <div class="form-check">
                         
                            <input type="submit" value=" Cập nhật " class="btn btn-primary py-3 px-5">
                            <hr>
                             <button><a href="pass.php?id=<?php echo session::get('id') ?>" > Đổi mật khẩu</a></button>
                        </div>

                    </form>
                </div>
            </div>
           
</section>

<?php
  include 'inc/footer.php';
  ?>