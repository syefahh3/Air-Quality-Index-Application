<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Air Quality Index Application</title>
    <link rel="icon" href="asset\air.jpg">
    <link rel="stylesheet" type= "text/css" href="style.css">
    <link rel="stylesheet" type= "text/css" href="aqistyle.css">
</head>
<body>
    <div class="top">
        <img src="asset\air.jpg" >
        <h2>AIR QUALITY INDEX</h2></div>

    <div class="container">
        <div class="row">
            <div class="column">
                <div class="box">
                    <table>
                        <caption id="tbl">AQI of 10 cities</caption>
                        <thead>
                        </thead>
                        <tbody>
                            <tr><td>city1</td><td>data1</td></tr>
                            <tr><td>city1</td><td>data2</td></tr>
                            <tr><td>city3</td><td>data3</td></tr>
                            <tr><td>city4</td><td>data4</td></tr>
                            <tr><td>city5</td><td>data5</td></tr>
                            <tr><td>city6</td><td>data6</td></tr>
                            <tr><td>city7</td><td>data7</td></tr>
                            <tr><td>city8</td><td>data8</td></tr>
                            <tr><td>city9</td><td>data9</td></tr>
                            <tr><td>city10</td><td>data10</td></tr>
                            
                        </tbody>
                      
                    </table>
                </div>
                <div class="box"></div>
            </div>
            <div class="column">
                <div class="box box3">
                    
                    <form action="process.php" method="post">
                        <div id="errormessage"></div>
                        <h2>Registration Box</h2>
                        <label for="name">Full Name:</label><br><br>
                        <input type="text" id="uname" name="name"><br><br>
                        <label for="email">Email:</label><br><br>
                        <input type="text" id="email" name="email"><br><br>
                        <label for="password">Password:</label><br><br>
                        <input type="password" id="password" name="password"><br><br>
                        <label for="cpassword">Confirm Password:</label><br><br>
                        <input type="password" id="cpassword" name="cpassword"><br><br>
                        <label for="location">Location:</label><br><br>
                        <input type="text" id="location" name="location"><br><br>
                        <label for="zipcode">Zip Code:</label><br><br>
                        <select id="zipcode" name="zipcode">
                            <option value="">---</option>
                            <option value="1204">1204</option>
                            <option value="6100">6100</option>
                            <option value="3100">3100</option>
                            <option value="8200">8200</option>
                            <option value="5402">5402</option>
                            <option value="4100">4100</option>
                        </select><br><br>
                        <label> I agree to the <a href="#">Terms and Conditions</a></label>
                        <input type="checkbox" id="termsCheck"><br><br>
                        <input type="submit" id = "submit" name="submit" value="submit" onclick="return validate()">
                      </form>
                </div>
                <div class="box box4"></div>
            </div>
        </div>
    </div>

    <script src="code.js"></script>

</body>
</html>