<?php
//Verbindung zur MySQL-Datenbank aufbauen über PHP Data Object Schnittstelle
$pdo = new PDO('mysql:host=localhost;dbname=personentest;charset=utf8', 'root', 'rootPassword');

//Zuweisung Spaltennamen von SQL Tabelle als Spaltennamen im Frontend
$column = [
 'PersonenID' => 'ID',
 'Nachname' => 'Nachname',
 'Vorname' => 'Vorname',
 'Stadt' => 'Stadt',
 'PLZ' => 'PLZ'
];
?>

<!DOCTYPE html>
<html lang="de" dir="ltr">
 <head>
   <meta charset="utf-8">
   <title>Tabelle im Front und Backend</title>
 </head>
 <body>
       <table>
         <thead>
           <tr>
             <?php
             foreach ($column as $name) {
               echo '<th>', htmlspecialchars($name), '</th>';
             }
            ?>
          </tr>
         </thead>
         <tbody>
           <?php
           $sqlTable = $pdo->query("SELECT * FROM `dbtest`");

           foreach ($sqlTable as $result) {
             echo '<tr>';
             foreach ($column as $keys => $name) {
               echo '<td>', htmlspecialchars($result[$keys]), '</td>';
           }
           echo '</tr>';
         }
          ?>
         </tbody>
       </table>
 </body>
</html>
