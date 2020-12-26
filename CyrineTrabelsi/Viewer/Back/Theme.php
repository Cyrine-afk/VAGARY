<?php 
    require_once 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/Controller/TypeC.php';
    require_once 'D:/Programmes/xampp/htdocs/projet/VAGARY/CyrineTrabelsi/Model/Type.php';

    $tp1= new TypeC();
    $liste=$tp1->afficherType();


  $tp2= new TypeC();
  if(!isset($_POST['str'])){
      $liste = $tp2->afficherType();
  }
  else{
      $liste = $tp2->rechercherType($_POST['str']);
  }

  foreach ($liste as $t) {
    ?>
    <tr>
    <th scope="row">  <?php echo $t['id__type'] ?>  </th>
    <td>  <?php echo $t['nom_type'] ?>  </td>
    <td><img src="<?php  echo $t['img_type']?>" ></td>
    <td>
      <a href="updateFormType.php?id__type=<?php echo $t['id__type'] ?>"> Update </a>
    </td>
    <td>
      <a href="themes.php?id__type=<?php echo $t['id__type'] ?>"> Delete </a>
    </td>
    </tr>
    <?php
}

?>