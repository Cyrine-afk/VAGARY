<?php

require_once 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/config.php';

    $connect = mysqli_connect('localhost','root','','vagary');

    $records_page = 3;

    $page='';

    $output='';

    if (isset($_POST["page"])) {
        $page=$_POST["page"];
    }
    else {
        $page=1;
    }

    $output='';

    $query="SELECT * FROM influenceur LIMIT 1, $records_page";

    $result = mysqli_query($connect, $query);

    if (!$result) {
        printf("Error: %s\n", mysqli_error($connect));
        exit();
    }

    while($row =  mysqli_fetch_array($result))
    {
        $output .='
        <div class="avatar"><img src="' .$row["img_inf"]. '"  class="img-fluid">
        <div class="order dashbg-2">1st</div>
      </div><a href="influ.php" class="user-title">
        <h3 class="h5">' .$row["nom_inf"]. ' ' .$row["prenom_inf"]. '</h3></a>
      <div class="contributions">' .$row["nbr_ab_inf"]. ' K Followers</div>
      
        ';
    }

    $page_query = "SELECT * FROM influenceur ORDER BY nbr_ab_inf DESC";

    $page_result = mysqli_query($connect, $page_query);

    $total_records = mysqli_num_rows($page_result);

    $total_pages = ceil($total_records/$records_page);
    
    echo $output;


?>