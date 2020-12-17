<?php
    require_once 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/config.php';

    $connect = mysqli_connect('localhost','root','','vagary');

    $output='';

    $sql="SELECT * FROM influenceur WHERE nom_inf LIKE '%".$_POST["searchI"]."%'";

    $result = mysqli_query($connect, $sql);

    if(mysqli_num_rows($result) >0 )
    {
        $output .="
            <div class='title' align='center'><strong>Search results</strong></div>
        ";

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

        echo $output;
        }
    else
    {
        echo 'Data not found';
    }

?>