<table>
    <thead>
    <tr>
        <td>ID</td>
        <td>Nimi</td>
        <td>E-mail</td>
        <td>Vanus</td>
        <td>Pääsmetüüp</td>
        <td>KUSTUTA</td>
    </tr>
    </thead>
    <tbody>
<?php

$query = 'SELECT * FROM ' . $tableName . ' WHERE deleted ="0";';

$res = mysqli_query($con, $query);
if($res){
    if(mysqli_num_rows($res)){
        while($row = mysqli_fetch_assoc($res)){
            echo '<tr>';
            echo '<td>'.$row['id'].'</td>'.'<td>'.$row['nimi'].'</td>'.'<td>'.$row['email'].'</td>'.'<td>'.$row['vanus'].'</td>'.'<td>'.$row['tyyp'].'</td>'.'<td><input type="submit" name="delete" value="Kustuta: ' . $row['id'] . '"/></td>';
            echo '</tr>';
        }
    }
}

?>

    </tbody>
</table>
