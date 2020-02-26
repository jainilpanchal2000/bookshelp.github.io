<?php

session_start();


 if(!isset($_SESSION['userid'])){
    header("location: ../login/login.php");
}
?>
<?php

//fetch_user.php

include('database_connection.php');

//session_start();

$query = "
SELECT * FROM user 
WHERE uid != '".$_SESSION['userid']."' 
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

$output = '
<table class="table table-bordered table-striped">
 <tr>
  <th>Username</th>
  <th>Status</th>
  <th>Action</th>
 </tr>
';

foreach($result as $row)
{
 $status = '';
 $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
 $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
 $user_last_activity = fetch_user_last_activity($row['uid'], $connect);
 if($user_last_activity > $current_timestamp)
 {
  $status = '<span class="label label-success">Online</span>';
 }
 else
 {
  $status = '<span class="label label-danger">Offline</span>';
 }
 $output .= '
 <tr>
  <td>'.$row['uidusers'].' '.count_unseen_message($row['uid'], $_SESSION['userid'], $connect).'</td>
  <td>'.$status.'</td>
  <td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="'.$row['uid'].'" data-tousername="'.$row['uidusers'].'">Start Chat</button></td>
 </tr>
 ';
}

$output .= '</table>';

echo $output;

?>