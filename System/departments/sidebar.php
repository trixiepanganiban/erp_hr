<div class="side_dental">
                                
        

<div class="alert alert-info" style="background-color: skyblue; color:white;">
    <center><p>Today is:
    <i class="fa fa-calendar"></i>
    <?php
    $Today = date('y:m:d');
    $new = date(' d/m/Y', strtotime($Today));
    echo $new;
    ?>
    </p></center>
</div>

<div class="navbar" >
    <div class="navbar-inner" style="background-color: skyblue;">
        <div class="pull-Left">
        <p>
        <form name="clock" style="color:white;">
        Time is: <i class="fa fa-hourglass"></i> <?php include ('time.php'); ?>
        </form>
        </p>                        
        </div>
    </div>
</div>
<ul class="nav nav-tabs nav-stacked">
    <li class="active" style="color: rgb(15, 15, 87);">
        <a href="dasboard.php" ><i class="fa fa-home"></i>&nbsp;Home</a>
    </li>
    <li><a href="leaves.php" style="color: black;"><i class="fa fa-book"></i>&nbsp;Leaves</a></li>
    <li><a href="user.php" style="color: black;"><i class="fa fa fa-user-secret"></i>&nbsp;User Accounts</a></li>
</ul>
</div>