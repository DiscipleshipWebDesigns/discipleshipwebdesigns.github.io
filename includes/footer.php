<!-- footer -->
		<div data-role="panel" data-position-fixed="true" data-display="overlay" data-theme="b" id="nav-panel">
        <ul data-role="listview">
        	<li data-role="list-divider"><h1>
        		<?php 
        			$user =$facebook->getUser();
        			if($user):
        				echo '<img src="'.$pic.'"> '. $name;
        			endif;

        		?>
        	</h1></li>
        		<li><a href="home.php" data-ajax="false">Home</a></li>
                <li><a href="addnew.php" data-ajax="false">Add New</a></li>
                <li><a href="budget.php" data-ajax="false">Budget</a></li>
                <li><a href="calendar.php" data-ajax="false" >Calender</a></li>
                <li><a href="forecast.php" data-ajax="false">Forecast $</a></li>
                <li><a href="accounts.php" data-ajax="false">Manage Accounts</a></li>
                <li><a href="settings.php" data-ajax="false">Settings</a></li>
                <?php  //if($user):
            
                //     $logoutUrl = $facebook -> getLogoutUrl();
                //     // echo '<li><a href="logout.php">Logout of Facebook</a></li>';
                //     endif; 
                ?>
                <li><a href="index.php">Logout</a></li>
                
        </ul>
    </div><!-- /panel -->
		<!-- <div data-role="footer" data-position="fixed" data-tap-toggle="false"><h1>copyright 2014</h1></div>	 -->
        <div data-role="footer" data-position="fixed" data-tap-toggle="false">
                <div data-role="navbar">
                    <ul>
                        <li><a href="home.php" data-ajax="false" data-icon="home">Home</a></li>
                        <li><a href="calendar.php" data-ajax="false" data-icon="calendar">Calendar</a></li>
                        <li><a href="addnew.php" data-ajax="false" data-icon="plus">Add New</a></li>
                        <li><a href="home.php" data-ajax="false" data-icon="home">Home</a></li>
                        <li><a href="settings.php" data-ajax="false"data-icon="gear">Setup</a></li>

                    </ul>
                </div><!-- /navbar -->
        </div><!-- /footer -->
<!-- custom script -->
	</body>
</html>

<?php
	if(isset($db)){
		mysqli_close($db);
	};
?>