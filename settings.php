<?php
	if (file_exists('./settings.txt')) {
		$configFile = fopen("./settings.txt", "r") or die("Unable to open file!");
		//read contents
	}
	else 
	{
		$phHost		= "MySQL host name";	// input placeholder
		$phUsername	= "MySQL user account";
		$phPassword	= "MySQL password";
		$valHost		= ""; 					// input value 
		$valUsername	= "";
		$valPassword	= "";
		
	}


?> 


<?php require("./templates/header.php"); ?>

<div class="container">
        <?php require "./templates/nav.php" ?>
        <div class="card" style="width: 50%">
        <form method="post" style="padding: 20px" action="./savesettings.php">
            <div class="form-group">
                <label for="host" class="text-primary">DB Hostname</label>
                <input class="form-control" id="host" name="host" placeholder="<?php echo $phHost ?>" value="<?php echo $valHost?>" >
				<label for="name" class="text-primary">DB Username</label>
                <input class="form-control" id="name" name="name" placeholder="<?php echo $phUsername ?>" value="<?php echo $valUsername?>" >
				<label for="password" class="text-primary">DB Password</label>
                <input class="form-control" id="password" name="password" placeholder="<?php echo $phPassword ?>" value="<?php echo $valPassword?>">               
            </div>
                <input  type="submit" class="btn btn-primary" name="submit" value="Save Settings">
        </form>
        </div>
    </div> <!-- container -->

<?php require("./templates/footer.php"); ?>