<?php


    while($row = mysqli_fetch_assoc($sql)){
        $output .= '<a href="chatBox.php?user_id='.$row['unq_id'].' ">
        <div class="content">
        <img src="script/auth/images/'. $row['profile'] .'" alt="">
            <div class="detail">
                <span>'. $row['fname']." ".$row['lname'] .'</span>
                <p>Message Demo</p>
            </div>
        </div>
        <div class="status-icon"> 
        </div>
    </a>';


}


?>