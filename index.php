<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
    <title>Login Panel</title>
    <link rel="stylesheet" href="css/bootstrap-theme.css"/>
    <link rel="stylesheet" href="css/bootstrap-theme.css.map"/>
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/bootstrap.css.map"/>
    <link rel="stylesheet" href="css/custom.css"/>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<!--    <script src="js/custom.js"></script>-->
    <script>

    </script>
</head>
<body>
    <div class="header">
        <h1>Demo of Crud Application including image-resize(IMAGE-RESIZE class) option using Object Oriented PHP.No Validation Included </h1>
    </div>
    
    <div class="container">
        <div class="mainContent">
            <div class="row">
                <div class="col-xs-12">
                    <h1>Signup Form</h1>
                        <h2>Each field should be field</h2>
                    <form class="form-horizontal" action="action.php" method="post" role="form" enctype="multipart/form-data">
                        <div class="form-group">
                           <label for="name" class="control-label col-xs-2">Name :</label>
                           <div class="col-xs-10">
                               <input type="text" name="name" id="name" class="form-control" placeholder="Type your name here!!">
                           </div> 
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label col-xs-2">E-mail : </label>
                            <div class="col-xs-10">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Your E-mail address here!!">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label col-xs-2">Password : </label>
                            <div class="col-xs-10">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password!!">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="retypePassword" class="control-label col-xs-2">Re-Password : </label>
                            <div class="col-xs-10">
                                <input type="password" name="retypePassword" id="retypePassword" class="form-control" placeholder="Re-password!!">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="upload" class="control-label col-xs-2">Upload Image : </label>
                            <div class="col-xs-10">
                                <input type="file" name="photo" id="photo">
                            </div>
                        </div>
                        <div class="col-sm-offset-2 col-sm-10">
                            <div class="form-group">
                                <div class="col-xs-2">
                                    <select class="form-control" name="height">
                                        <option value="">Height</option>
                                        <option value="300">300</option>
                                        <option value="200">200</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                                <div class="col-xs-2">
                                    <select class="form-control" name="width">
                                        <option value="">Width</option>
                                        <option value="300">300</option>
                                        <option value="200">200</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>
                                <div class="col-xs-2">
                                    <select class="form-control" name="option">
                                        <option value="">Option</option>
                                        <option value="exact">Exact</option>
                                        <option value="auto">Auto</option>
                                        <option value="crop">Crop</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                            <input class="btn btn-primary pull-left" type="submit" value="Submit" name="signup" id="signup"/>
                              <!-- <button class="btn btn-primary btn-block" name="login">Submit</button> -->
                            </div>
                        </div>

                        <!-- <label for="name">Name: </label> <input type="text" name="name" id="name"/><br/>
                        <label for="email">Email: </label><input type="email" name="email" id="email"/><br/>
                        <label for="password">Password: </label><input type="password" name="password" id="password"/><br/>
                        <input type="button" value="Submit" name="login" id="login"/> -->
                        <!-- <button type="submit" name="login" id="login" value="Login">Login</button> -->
                        
                    </form>
                </div>    
            </div>
        </div>
    </div>
    
    
    <div class="footer">
        <h1>this is Footer div</h1>
    </div>
</body>
</html>
<?php
$hello = "valobashi";
?>

