<style>
    th {
        width: 8rem;
        text-align: left;
        border: 2px solid blue;
        border-style:ridge;
        background-color: #2348F0;
        color: #ffffff;
    }

    td {
        width: 8rem;
        border: 1px solid blue;
        border-style:ridge;
        background-color: azure;
    }
</style>


<h3>Renderiza atributos de un objeto tipo coche</h3>
<table>
    <tr>
	    <th>Registro</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Color</th>
        <th>Propietario</th>
    </tr>
	<!--renderiza los atributos de cada objeto tipo coche-->
    <?php foreach ($rowset as $row): ?>
    <tr>
	    <td><?php echo $row->registro ?></td>
        <td><?php echo $row->marca ?></td>
        <td><?php echo $row->modelo ?></td>
        <td><?php echo $row->color ?></td>
        <td><?php echo $row->propietario ?></td>
    </tr>
    <?php endforeach; ?>
</table>