
<article class="boxlocation" style="margin-block-start: 100px">
    <h3><i class="fa fa-coins" style="margin-inline-end: 8px; margin-inline-start: 10px;"></i>Coal Getting | Primary Mining Equipment</h3>
    <div class="boxeqtype">
        <div class="boxShovel" style="font-size: 0.9rem">
            <div class="shovelsummary coalsummary">
                <div>
                    <h3>Ready</h3>
                    <p><?php echo mysqli_num_rows($readyexpit2)?> Unit</p>
                </div>
                <div>
                    <h3>Breakdown</h3>
                    <p><?php echo mysqli_num_rows($breakdownexpit2)?> Unit</p>
                </div>
                <div>
                    <h3>Standby</h3>
                    <p><?php echo mysqli_num_rows($standbyexpit2)?> Unit</p>
                </div>
                <div>
                    <h3>General</h3>
                    <p><?php echo mysqli_num_rows($generalexpit2)?> Unit</p>
                </div>
            </div>
            <?php 
                $queryshovel = mysqli_query($connection, "SELECT DISTINCT(unit_name) FROM t_unit WHERE area = 'PIT 2' AND unit_type = 'Excavator Coal' AND status IN('Ready','Breakdown','Standby','General')  ORDER BY unit_name");
                while($rowshovel = mysqli_fetch_array($queryshovel)){
                    ?>
                        <div class="boxdetailshovel coalsummary" style=" justify-content: space-around">
                            <img src="../assets/logo/excacoal.svg" alt="shovelicon" style="margin-inline-start: 5px;"/>
                            <h4 id="shovelName" class="shovelstatus <?php echo mysqli_fetch_array(getStatus($rowshovel['unit_name']))['status'] ?>" title="Unit <?php echo mysqli_fetch_array(getStatus($rowshovel['unit_name']))['status']?>"><?php echo $rowshovel['unit_name'] ?></h4>
                            <p style="width: 100px; text-align:center"><?php echo mysqli_fetch_array(getFleet($rowshovel['unit_name']))['fleet_hauler'];?> Unit</p>
                            <p style="width: 190px; text-align:center"><?php echo mysqli_fetch_array(getflow($rowshovel['unit_name']))['fl_info'];?></p>
                        </div>
                    <?php
                }
            ?>
        
        </div>
    </div>
    <div class="boxeqtype" style="margin-block-start: 30px">
        <div class="boxShovel" style="font-size: 0.9rem">
            <div class="shovelsummary coalsummary">
                <div>
                    <h3>Ready</h3>
                    <p><?php echo mysqli_num_rows($readyexpit3)?> Unit</p>
                </div>
                <div>
                    <h3>Breakdown</h3>
                    <p><?php echo mysqli_num_rows($breakdownexpit3)?> Unit</p>
                </div>
                <div>
                    <h3>Standby</h3>
                    <p><?php echo mysqli_num_rows($standbyexpit3)?> Unit</p>
                </div>
                <div>
                    <h3>General</h3>
                    <p><?php echo mysqli_num_rows($generalexpit3)?> Unit</p>
                </div>
            </div>
            <?php 
                $queryshovel = mysqli_query($connection, "SELECT DISTINCT(unit_name) FROM t_unit WHERE area = 'PIT 3' AND unit_type = 'Excavator Coal' AND status IN('Ready','Breakdown','Standby','General')  ORDER BY unit_name");
                while($rowshovel = mysqli_fetch_array($queryshovel)){
                    ?>
                        <div class="boxdetailshovel coalsummary" style="justify-content: space-around">
                            <img src="../assets/logo/excacoal.svg" alt="shovelicon" style="margin-inline-start: 10px;"/>
                            <h4 id="shovelName" class="shovelstatus <?php echo mysqli_fetch_array(getStatus($rowshovel['unit_name']))['status'];?>" title="Unit <?php echo mysqli_fetch_array(getStatus($rowshovel['unit_name']))['status'];?>"><?php echo $rowshovel['unit_name'] ?></h4>
                            <p style="width: 100px; text-align:center"><?php echo mysqli_fetch_array(getFleet($rowshovel['unit_name']))['fleet_hauler'];?> Unit</p>
                            <p style="width: 170px; text-align:center"><?php echo mysqli_fetch_array(getflow($rowshovel['unit_name']))['fl_info'];?></p>
                        </div>
                    <?php
                }
            ?>
        </div>
        <div class="boxShovel" style="font-size: 0.9rem">
            <div class="shovelsummary coalsummary" >
                <div>
                    <h3>Ready</h3>
                    <p><?php echo mysqli_num_rows($readyextanahpit3)?> Unit</p>
                </div>
                <div>
                    <h3>Breakdown</h3>
                    <p><?php echo mysqli_num_rows($breakdownextanahpit3)?> Unit</p>
                </div>
                <div>
                    <h3>Standby</h3>
                    <p><?php echo mysqli_num_rows($standbyextanahpit3)?> Unit</p>
                </div>
                <div>
                    <h3>General</h3>
                    <p><?php echo mysqli_num_rows($generalextanahpit3)?> Unit</p>
                </div>
            </div>
            <?php 
                $queryshovel = mysqli_query($connection, "SELECT DISTINCT(unit_name) FROM t_unit WHERE area = 'PIT 3' AND unit_type = 'Excavator Tanah' AND status IN('Ready','Breakdown','Standby','General')  ORDER BY unit_name");
                while($rowshovel = mysqli_fetch_array($queryshovel)){
                    ?>
                        <div class="boxdetailshovel coalsummary" style="justify-content: space-around">
                            <img src="../assets/logo/excacoal.svg" alt="shovelicon" style="margin-inline-start: 10px;"/>
                            <h4 id="shovelName" class="shovelstatus <?php echo mysqli_fetch_array(getStatus($rowshovel['unit_name']))['status'];?>" title="Unit <?php echo mysqli_fetch_array(getStatus($rowshovel['unit_name']))['status'];?>"><?php echo $rowshovel['unit_name'] ?></h4>
                            <p style="width: 100px; text-align:center "><?php echo mysqli_fetch_array(getFleet($rowshovel['unit_name']))['fleet_hauler'];?> Unit</p>
                            <p style="width: 170px; text-align:center"><?php echo mysqli_fetch_array(getflow($rowshovel['unit_name']))['fl_info'];?></p>
                        </div>
                    <?php
                }
            ?>
        </div>
    </div>
</article>