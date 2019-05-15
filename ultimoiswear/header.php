<section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-0">
<nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </button>

    <?php
    $conn = mysqli_connect('localhost','root','','mydb');
    // Check connection
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    ?>

    <div class="menu-logo">
        <div class="navbar-brand">

            <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="./index.php">
                    Star wars: Droids</a></span>
        </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-white display-4" href="./catalog.php">
                    Catalog</a></li><li class="nav-item">
                <a class="nav-link link text-white display-4" href="https://patatap.com">
                    <span class="mbri-search mbr-iconfont mbr-iconfont-btn"></span>
                    About Us
                </a>
            <!--<a class="nav-link link text-white display-4" href="/ultimoiswear/php/login.php" aria-expanded="false">-->
              <?php
          //    session_start();
                if(isset($_SESSION['sess_user'])){

                  echo "<li class='nav-item active'>";
                  echo "<a class='nav-link link text-white display-4' href='./cart.php'> {$_SESSION['sess_user']} </a>";
                  echo "</li>";

                  echo "<li class='nav-item active'>";
                  echo "<a class='nav-link link text-white display-4' href='./logout.php' aria-expanded='false'> Logout </a>";
                  echo "</li>";

                }else{
                  echo "<li class='nav-item active'>";
                  echo "<a class='nav-link link text-white display-4' href='./login.php' aria-expanded='false'> Login </a>";
                  echo "</li>";
                }
              ?>

              <?php
              if(!isset($_SESSION['sess_user'])){
              }else{
                $admin = $_SESSION['sess_user'];
                if($admin == 'admin@swdroids.com'){
                    echo "<li class='nav-item active'>";
                    echo "<a class='nav-link' href='./admin.php'>MODIFY</a>";
                    echo "</li>";
                }
              }

              ?>

            </ul>
        <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" href="./cart.php"><span class="mbri-shopping-cart mbr-iconfont mbr-iconfont-btn"></span>Cart</a></div>
    </div>
</nav>
</section>

</section>
