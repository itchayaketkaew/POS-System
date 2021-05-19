<?php  
session_start();
?>
<table cellpadding="0" cellspacing="0" border="0">
  <tbody>
    <?php
      //Connect to database
      require'connectDB.php';
      
      
      $sql = "SELECT * FROM users_logs ORDER BY id DESC limit 1";
      $result = mysqli_stmt_init($conn);
      if (!mysqli_stmt_prepare($result, $sql)) {
          echo '<p class="error">SQL Error</p>';
      }
      else{
        mysqli_stmt_execute($result);
          $resultl = mysqli_stmt_get_result($result);
        if (mysqli_num_rows($resultl) > 0){
            while ($row = mysqli_fetch_assoc($resultl)){
              
      ?>
                  <TR>
                  
                  <TD>สวัสดี<?php echo $row['username'];?></TD>
                  
                  <!-- <TD><?php echo $row['fingerprint_id'];?></TD> -->
        
                  </TR>
                  

    <?php
            }   
        }
      }
    ?>
  </tbody>
</table>

โปรดป้อน username อีกครั้งเพื่อยืนยันการเข้าสู่ระบบ

<!-- Start menu Area -->
<section class="menu-area section-gap" style="margin-top: 100px;">
	<div class="container">
		<div class="row">
			<div class="menu-content pb-60 col-lg-10">
				<div class="title text-center">
					<h1 class="mb-10">RIWY POS</h1><br
					<h2 class="mb-10">ระบบจัดการร้านกาแฟ</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-3"></div>
			<div class="col-lg-9">
				<!-- <font color="red"> *Username & Password looked at tbl_member </font> -->
				
				<form action="cclogin.php" method="post" class="form-horizontal">
					<div class="form-group">
						<div class="col-sm-2 control-label">
							Username :
						</div>
						<div class="col-sm-5">
							<input type="text" name="m_username" required class="form-control" autocomplete="off">
						</div>
					</div>
					<!-- <div class="form-group">
						<div class="col-sm-5 control-label" class="form-control" >
							Password :
						</div>
						<div class="col-sm-5">
							<input type="password" name="m_password" required class="form-control">
						</div>
					</div> -->
					<div class="form-group">
						<div class="col-sm-2">
						</div>
						<div class="col-sm-3">
							<button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
						</div>
					</div>
					<!-- <div class="text-center p-t-115">
						<span class="txt1">
							Don’t have an account?
						</span>
						<a class="txt2" href="regis.php">
							Sign Up
						</a>
					</div> -->
				</form>
				<hr>
				<br>
				
			</div>
		</div>
	</div>
</section>
<!-- End menu Area



