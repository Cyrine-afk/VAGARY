<?php

require_once 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/config.php';

    $connect = mysqli_connect('localhost','root','','vagary');

    $record_per_page = 4;

    $page='';

    $output='';

    if (isset($_POST["page"])) {
        $page=$_POST["page"];
    }
    else {
        $page=1;
    }

    $start_from= ($page - 1) * $record_per_page;

    $query="SELECT * FROM influenceur LIMIT $start_from, $record_per_page";

    $result = mysqli_query($connect, $query);

    if (!$result) {
        printf("Error: %s\n", mysqli_error($connect));
        exit();
    }

    $output .=" 
    <table class='table table-responsive table-fluid' > 
        <thead>
          <tr>
            <th> ID </th>
            <th>Profile picture</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Further Infos</th>
            <th>Add a trip</th>
            <th>View trips</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
    ";
    while($row =  mysqli_fetch_array($result))
    {
        $output .='
            <tr>
                <th scope="row">' .$row["id_inf"]. '</th>
                <td><img src="' .$row["img_inf"]. '"</td>
                <td>' .$row["nom_inf"]. '</td>
                <td>' .$row["prenom_inf"]. '</td>
                <td>
                  <a href="influPlus.php?id_inf=' .$row["id_inf"]. '"> More infos </a>
                </td>
                <td>
                  <a href="formTripInf.php?id_inf=' .$row["id_inf"]. '"> Add trip </a>
                </td>
                <td>
                  <a href="TripInf.php?id_inf=' .$row["id_inf"]. '"> View trips </a>
                </td>
                <td>
                  <a href="updateFormInf.php?id_inf=' .$row["id_inf"]. '"> Edit </a>
                </td>
                <td>
                  <a href="influ.php?id_inf=' .$row["id_inf"]. '"> Delete </a> 
                </td>
            </tr>
        ';
    }
    $output .= '
        </tbody>
    </table> <br> <div align="center">
    ';

    $page_query = "SELECT * FROM influenceur ORDER BY id_inf DESC";

    $page_result = mysqli_query($connect, $page_query);

    $total_records = mysqli_num_rows($page_result);

    $total_pages = ceil($total_records/$record_per_page);
    
    $output .="
    <nav aria-label='Page navigation example'>
    <ul class='pagination justify-content-center'>
      
    ";

    for ($i=1; $i<=$total_pages; $i++) {
        $output .="<span class='pagination_link' style='cursor:pointer; padding:6px; border:1px; solid #ccc; ' id='".$i."'> 
        
          <li class='page-item'><a class='page-link' href='#'>".$i."</a></li>
          </span>
        ";
    }

    $output .="
    
    </ul>
    </nav>
    ";

    echo $output;


?>