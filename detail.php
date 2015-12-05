<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="login.css">
        <link rel="stylesheet" type="text/css" href="detail.css">
        <link rel="stylesheet" type="text/css" href="tmp.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script type="text/javascript" src="login.js"></script>
        <script type="text/javascript" src="detail.js"></script>
    </head>
    <body>
        <!-- header -->
        <div id="header">
            <div class="header-top">
                <ul class="top-nav-list">
                    <li>
                        This is header
                    </li>

                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="payment.html">Pay</a>
                    </li>
                </ul>
            </div>
            <div class="header-bottom">
                <a href="" > <img src="" alt=""/></a>
                <ul class="bottom-nav-list">
                    <li>FAQ</li>
                    <?php
                    include("db.php");
                    login_state();
                    ?>
                </ul>
            </div>
        </div>

        <!-- login window -->
        <div id="login">
            <div id="login-close" class="btn-close">
            </div>
            <div class="user-info-main">
                <form id="user-login" action="login.php" method="post">
                    <ul>
                        <li><label>E-mail :</label><br>
                        <input type="email" name="email" placeholder="yourname@email.com" required></li>     
                        <li><label>Password :</label><br>
                        <input type="password" name="password" placeholder="password" required></li>
                        <li><input type="submit" value="Log in"></li>
                    </ul>
                </form>
                <p>Don't have an accout?<a href="" class="signup-show">sign up</a></p>
            </div>
        </div>

        <!-- sign up window -->
        <div id="signup">
            <div id="signup-close" class="btn-close">
            </div>
            <div class="user-info-main">
                <div>
                    <form id="user-signup" action="signup.php" method="post">
                        <div class="left">
                            <ul>
                                <li><label>First Name :</label></li>
                                <li><label>Last Name :</label></li>
                                <li><label>E-mail :</label></li>
                                <li><label>Password :</label></li>
                                <li><label>Confirm password :</label></li>
                                <li><label>Gender :</label></li>
                                <li><label>Mailing address :</label></li>
                                <li><label>City :</label></li>
                                <li><label>State :</label></li>
                                <li><label>Country :</label></li>
                                <li><label>Security question :</label></li>
                                <li><label>Answer :</label></li>
                            </ul>
                        </div>
                        <div class="right">                  
                            <ul>
                                <li><input type="text" name="username" required></li>
                                <li><input type="text" name="lastname" required></li>
                                <li><input type="email" name="email" required></li>
                                <li><input type="password" name="password" required></li>
                                <li><input type="password" name="password-confirm" required></li>
                                <li>
                                    <select name="gender">
                                        <option value="male">male</option>
                                        <option value="female">female</option>
                                    </select>
                                </li>
                                <li><input type="text" name="mail" required></li>
                                <li><input type="text" name="city" required></li>
                                <li><input type="text" name="state" required></li>
                                <li><input type="text" name="country" required></li>
                                <li>
                                    <select name="security">
                                        <option value="a">What's the middle name of your mother?</option>
                                        <option value="b">What's your first pet?</option>
                                        <option value="c">What's your favourite food?</option>
                                        <option value="d">What's your favourite song?</option>
                                    </select>
                                </li>
                                <li><input type="text" name="answer" required></li>
                            </ul>
                        </div>
                        <input type="submit" value="Sign up">
                    </form>
                </div>
                <p>Already have an accout?<a href="" class="login-show">log in</a></p>
            </div>
        </div>


        <!-- main -->
        <div id="main">
            <li>
                <a id="vege-detail">show vege details</a>
            </li>
            <li>
                <a id="soup-detail">show details</a>
            </li>
        </div>

        <!-- detail window -->
        <div id="detail">
            <div id="detail-left"></div>
            <div id="detail-right">
                <div id="detail-window">
                    <div class="top">
                        <div class="detail-close"></div>
                        <h1>Food Details</h1>
                    </div>
                    <hr>
                    <!-- soup options -->
                    <div id="vege">
                        <p>soup type</p>
                        <form>
                            <label>Size :</label><br/>
                            <input type="radio" name="size" value="small" checked="checked">Samll<br/>
                            <input type="radio" name="size" value="medium">Medium<br/>
                            <input type="radio" name="size" value="large">Large<br/>
                            <label>Spicy :</label><br/>
                            <input type="radio" name="spicy" value="mild" checked="checked">Mild<br/>
                            <input type="radio" name="spicy" value="medium">Medium<br/>
                            <input type="radio" name="spicy" value="hot">Hot<br/>
                            <label>Special requests :</label><br/>
                            <textarea rows="10" cols="45">
                            </textarea>
                        </form>
                    </div>
                    <div id="check-out">
                        <a href="payment.html">check out</a>
                    </div>
                </div>
            </div>
        </div>



<?php include("footer.php");?>

