<div class="boxcontents">
    <details class="tablecontent">
        <summary>
            <h2><i class="fa fa-cube" style="margin-inline-end: 10px;"></i>List Data Lokasi Unit OB </h2>
        </summary>
        <div class="maincontentsection">
            <button onclick="showformlocationob()"> <i class="fa fa-plus" style="margin-inline-end: 8px"></i>Update Lokasi Unit (OB)</button>
        </div>
        <table>
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Nama Unit</th>
                    <th>Tipe</th>
                    <th>Area</th>
                    <th>Lokasi</th>
                    <th>Update Terakhir</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include "../codes/connection.php"; 
                    $no = 1;
                    $query = mysqli_query($connection, "SELECT * FROM t_location INNER JOIN t_unit WHERE loc_unit_name = t_unit.unit_name AND t_unit.unit_type IN ('Belaz','Shovel PC-3000','PC 1250','HD PPA','Grader','Water Tank','Dozer','PC 200','Compac') ORDER BY id_data DESC LIMIT 50");
                    while($row = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['loc_unit_name'] ?></td>
                            <td><?php echo $row['unit_type'] ?></td>
                            <td><?php echo $row['loc_area'] ?></td>
                            <td><?php echo $row['loc_location'] ?></td>
                            <td><?php echo $row['updated_at'] ?></td>
                        </tr>
                        <?php
                    }
                ?>
                
            </tbody>
        </table>
    </details>
    <details class="tablecontent">
    <summary>
            <h2><i class="fa fa-cubes" style="margin-inline-end: 10px;"></i>List Data Lokasi Unit Coal </h2>
        </summary>
        <div class="maincontentsection">
        <button onclick="showformlocationcoal()"> <i class="fa fa-plus" style="margin-inline-end: 8px"></i>Update Lokasi Unit Coal</button>
        </div>
        <table>
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Nama Unit</th>
                    <th>Tipe</th>
                    <th>Area</th>
                    <th>Lokasi</th>
                    <th>Update Terakhir</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include "../codes/connection.php"; 
                    $no = 1;
                    $query = mysqli_query($connection, "SELECT * FROM t_location INNER JOIN t_unit WHERE loc_unit_name = t_unit.unit_name AND t_unit.unit_type IN ('Excavator','Excavator Tanah','Excavator Coal') ORDER BY id_data DESC LIMIT 50");
                    while($row = mysqli_fetch_array($query)){
                        ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['loc_unit_name'] ?></td>
                            <td><?php echo $row['unit_type'] ?></td>
                            <td><?php echo $row['loc_area'] ?></td>
                            <td><?php echo $row['loc_location'] ?></td>
                            <td><?php echo $row['updated_at'] ?></td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>    
    </details>
    
</div>