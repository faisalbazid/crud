<?php
include 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

   
<button  class="btn btn-primary"><a href="user.php" class="text-light">add employe</a></button>
<form action="" method="post">
<input  type="text"   placeholder="rechercher" name="valueSearch" value="<?php if(isset($_GET['search'])) { echo $_GET['search'];}?>" > 
<button type="submit" value="filter"                 name="search">RECHERCHE</button> 


<table class="table table-success table-striped"  >

<thead>
    <tr>
      <th >MATRICULE</th>
      <th >NOM</th>
      <th >PRENOM</th>
      <th >DATE</th>
      <th >DEPARTEMENT</th>
      <th >SALAIRE</th>
      <th >FONCTION</th>
      <th >PHOTO</th>
      <th >ACTION</th>
                          

  </thead>
  
  <tbody>
  <?php
  $sql="Select * from `employe`";
    $result=mysqli_query($con,$sql);
    
    

    if($result){ 
       
        
        while($rows=mysqli_fetch_assoc($result)){

    $id=$rows['ID'];

            $matricule=$rows['MATRICULE'];
            $nom=$rows['NOM'];
            $prenom=$rows['PRENOM'];
            $date=$rows['DATE'];
            $departement=$rows['DEPARTEMENT'];
            $salaire=$rows['SALAIRE'];
            $fonction=$rows['FONCTION'];
            $photo=$rows['PHOTO'];

            echo' <tr>
            
      <td  >'.$matricule.'</td>
      <td>'.$nom.'</td>
      <td>'.$prenom.'</td>
      <td>'.$date.'</td>
      <td>'.$departement.'</td>
      <td>'.$salaire.'</td>
      <td>'.$fonction.'</td>
      <td>'.$photo.'</td>
      
    <td>  <button><a href="edit.php?indexID='.$id.'">MODIFIER</a></button>
      <button><a href="delete.php?indexID='.$id.'">SUPPRIMER</a></button>        </td>
  
                </tr>';

        } 
    }else {
        echo 'error for display data';
    }

    ?>
  
<?php
$con=mysqli_connect('localhost','root','','database');

if(isset($_POST['search']))
 {

  $valueSearch= $_POST['valueSearch'];
  $sql="SELECT * FROM `employe` WHERE CONCAT(`NOM`, `PRENOM`) LIKE '%$valueSearch%'";
  $query=mysqli_query($con,$sql);
 
  if(mysqli_num_rows($query) > 0)
  {
foreach($query as $items) 
{ 
?>


 
   <?= $items['MATRICULE']; ?>
      <?= $items['NOM']; ?>
      <?= $items['PRENOM']; ?>
      <?= $items['DATE']; ?>
      <?= $items['DEPARTEMENT']; ?>
      <?= $items['SALAIRE']; ?>
      <?= $items['FONCTION']; ?>
      <?= $items['PHOTO']; ?>
      
      <?php
    } 
  }
else {
  ?>

  
<td> NO RECORD DATA</td>
 
  

<?php 
}
}
?>


    
  </tbody>
</table>

</body>

</html>