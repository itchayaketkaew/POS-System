<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title></title>
        <!-- Font Icon -->
        <link rel="stylesheet" href="fontss/material-icon/csss/material-design-iconic-font.min.css">
        <!-- Main css -->
        <link rel="stylesheet" href="csss/style.css">
    </head>
    <body>
        <div class="main">
            <section class="signup">
                <!-- <img src="images/signup-bg.jpg" alt=""> -->
                <div class="container">
                    <div class="signup-content">
                        <form action="register_db.php" method="POST" id="signup-form" class="signup-form">
                            <h2 class="form-title">Create account</h2>
                            
                            <div class="form-group">
                                <input type="text" class="form-input" name="m_username" id="name" placeholder="Username"/>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-input" name="m_password" id="password" placeholder="Password"/>
                                <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                            </div>
                            
                            <div class="form-group">
                                <select name="m_firstname" class="form-input" required >
                                    <option value="">Choose Fist Name</option>
                                    <option value="นาย">นาย</option>
                                    <option value="นาง">นาง</option>
                                    <option value="นางสาว">นางสาว</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-input" name="m_name" id="lastname" placeholder="Fist Name" required/>
                            </div>
                            
                            <div class="form-group">
                                <input type="text" class="form-input" name="m_lastname" id="lastname" placeholder="Last Name" required/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-input" name="m_address" id="address" placeholder="Address" required/>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-input" name="m_phone" id="Phone" placeholder="Phone Number" required/>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-input" name="m_email" id="email" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <input type="file" name="m_img"  class="form-input" accept="image/*" placeholder="Profile Picture">
                            </div>
                            <!-- <div class="form-group">
                                <div class="col-sm-2 control-label">
                                    ภาพโปรไฟล์ :
                                </div>
                                <div class="col-sm-4">
                                    <input type="file" name="m_img"  class="form-input" accept="image/*">
                                </div>
                            </div> -->
                            <div class="form-group">
                                <select name="m_level" class="form-group" required>
                                    <option value="Customer">ลูกค้า</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                            </div>
                        </form>
                        <p class="loginhere">
                            Have already an account ? <a href="login.php" class="loginhere-link">Login here</a>
                        </p>
                    </div>
                </div>
            </section>
        </div>
        <!-- JS -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="js/main.js"></script>
        </body><!-- This templates was made by Colorlib (https://colorlib.com) -->
    </html>