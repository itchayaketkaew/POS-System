<?php 
session_start();
        if(isset($_POST['m_username'])){
                  include("condb.php");
                  $m_username = mysqli_real_escape_string($con,$_POST['m_username']);
                 

                  $sql="SELECT * FROM tbl_member 
                  WHERE  m_username='".$m_username."' ";

                  $result = mysqli_query($con,$sql);
    
                  if(mysqli_num_rows($result)==1){

                      $row = mysqli_fetch_array($result);

                      $_SESSION["m_id"] = $row["m_id"];
                      $_SESSION["m_level"] = $row["m_level"];

                      if($_SESSION["m_level"]=="Admin"){ 
                        //echo 'R U ADMIN';
                        Header("Location: admin/");
                        
                      }elseif ($_SESSION["m_level"]=="Staff") {
                        Header("Location: staff/");
                      }
                      elseif ($_SESSION["m_level"]=="Customer") {
                        Header("Location: sale/");
                      }
                      else{
                        echo "<script>";
                        echo "alert(\" user    ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
                      }
                  }else{
                    echo "<script>";
                        echo "alert(\" user  ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";

                  }

        }else{
             Header("Location: login.php"); //user & m_password incorrect back to login again
             
        }
?>