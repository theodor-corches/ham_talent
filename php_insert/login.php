<!DOCTYPE html>
<html>

<head>
    <title>HAM talent</title>
    <link rel="stylesheet" href="Css/style.css">
</head>

<body>

<!-- Header -->
    <div id="header">
        <div class="image">
            <img src="Image/ham_logo.png" alt="">
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php">Inscrie-te</a></li>    
                <li><a href="">About</a></li>
                <li><a href="">Contact</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
    </div>

<!-- Main -->
    <div id="main">
        <div class="heading">
            <h1>Formular inscriere HAM talent</h1>
        </div>
        <div class="form">
            <div id="login">  
                <div class="form-field">
                    <label for="username">Nume utilizator:</label>
                    <input required="required" type="text" name="username" id="username" autocomplete="off">
                    <small></small>
                </div>

                <div class="form-field">
                    <label for="username">Parola:</label>
                    <input required="required" type="password" name="parola" id="parola">
                    <small></small>
                </div>
                <div class="form-field" style="font-size: 30px;">
                    <button onClick="checkLogin()" >Intra in cont</button>
                </div>
            </div>
        </div>
    </div>

<!-- JS Script -->
    <script src="Js/login.js"></script>
</body>

</html>