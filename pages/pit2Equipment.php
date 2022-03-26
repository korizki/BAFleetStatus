<?php 
    include "../codes/queryLocation.php";
    include "../codes/queryFleet.php";
?>
<article class="boxlocation">
    <h3><i class="fa fa-coins" style="margin-inline-end: 8px; margin-inline-end: 15px;"></i> Overbudden | Primary Mining Equipment</h3>
    <div class="boxeqtype">
        <div class="boxShovel">
            <h1>PIT 2 Banko Barat</h1>
            <div class="shovelsummary">
                <div>
                    <h3>Ready</h3>
                    <p>Shovel : <span> <?php echo mysqli_num_rows($readypit2)?> Unit<span></p>
                    <p>PC | PPA : <span><?php echo mysqli_num_rows(countUnit('PIT 2', 'PC 1250', 'Ready'))?> Unit</span></p>
                    <p>Belaz : <span><?php echo mysqli_num_rows(countUnit('PIT 2', 'Belaz', 'Ready'))?> Unit</span></p>
                    <p>HD | PPA : <span><?php echo mysqli_num_rows(countUnit('PIT 2', 'HD PPA', 'Ready'))?> Unit</span></p>
                </div>
                <div>
                    <h3>Breakdown</h3>
                    <p>Shovel : <span><?php echo mysqli_num_rows($breakdownpit2)?> Unit</span></p>
                    <p>PC | PPA : <span><?php echo mysqli_num_rows(countUnit('PIT 2', 'PC 1250', 'Breakdown'))?> Unit</span></p>
                    <p>Belaz : <span><?php echo mysqli_num_rows(countUnit('PIT 2', 'Belaz', 'Breakdown'))?> Unit</span></p>
                    <p>HD | PPA : <span><?php echo mysqli_num_rows(countUnit('PIT 2', 'HD PPA', 'Breakdown'))?> Unit</span></p>
                </div>
                <div>
                    <h3>Standby</h3>
                    <p>Shovel : <span><?php echo mysqli_num_rows($standbypit2)?> Unit</span></p>
                    <p>PC | PPA : <span><?php echo mysqli_num_rows(countUnit('PIT 2', 'PC 1250', 'Standby'))?> Unit</span></p>
                    <p>Belaz : <span><?php echo mysqli_num_rows(countUnit('PIT 2', 'Belaz', 'Standby'))?> Unit</span></p>
                    <p>HD | PPA : <span><?php echo mysqli_num_rows(countUnit('PIT 2', 'HD PPA', 'Standby'))?> Unit</span></p>
                </div>
            </div>
            <?php 
                $queryshovel = mysqli_query($connection, "SELECT DISTINCT(unit_name) FROM t_unit WHERE area = 'PIT 2' AND unit_type IN('Shovel PC-3000', 'PC 1250') AND status IN('Ready','Breakdown','Standby','General') ORDER BY unit_name DESC");
                while($rowshovel = mysqli_fetch_array($queryshovel)){
                    ?>
                        <div class="boxdetailshovel" style=" justify-content: space-around">
                            <img src="../assets/logo/exca.svg" alt="shovelicon" style="margin-inline-start: 5px;"/>
                            <h4 id="shovelName" class="shovelstatus <?php echo mysqli_fetch_array(getStatus($rowshovel['unit_name']))['status']?>" title="Unit <?php echo mysqli_fetch_array(getStatus($rowshovel['unit_name']))['status'];?>"><?php echo $rowshovel['unit_name'] ?></h4>
                            <div class="setUnit">
                                <p style="width: 100px; "><?php echo mysqli_fetch_array(getFleet($rowshovel['unit_name']))['fleet_hauler'];?> Belaz</p>
                                <p style="width: 100px; ">- HD PPA</p>
                            </div>
                            <p style="width: 240px; "><?php echo mysqli_fetch_array(getflow($rowshovel['unit_name']))['fl_info'];?></p>
                        </div>
                    <?php
                }
            ?>
        </div>
        <div class="boxShovel">
            <h1> PIT 3 Banko Barat</h1>
            <div class="shovelsummary" style="justify-content: space-around">
                <div>
                    <h3>Ready</h3>
                    <p>Shovel : <span><?php echo mysqli_num_rows($readypit3)?> Unit</span></p>
                    <p>PC | PPA : <span><?php echo mysqli_num_rows(countUnit('PIT 3', 'PC 1250', 'Ready'))?> Unit</span></p>
                    <p>Belaz : <span><?php echo mysqli_num_rows(countUnit('PIT 3', 'Belaz', 'Ready'))?> Unit</span></p>
                    <p>HD | PPA : <span><?php echo mysqli_num_rows(countUnit('PIT 3', 'HD PPA', 'Ready'))?> Unit</span></p>
                </div>
                <div>
                    <h3>Breakdown</h3>
                    <p>Shovel : <span><?php echo mysqli_num_rows($breakdownpit3)?> Unit</span></p>
                    <p>PC | PPA : <span><?php echo mysqli_num_rows(countUnit('PIT 3', 'PC 1250', 'Breakdown'))?> Unit</span></p>
                    <p>Belaz : <span><?php echo mysqli_num_rows(countUnit('PIT 3', 'Belaz', 'Breakdown'))?> Unit</span></p>
                    <p>HD | PPA : <span><?php echo mysqli_num_rows(countUnit('PIT 3', 'HD PPA', 'Breakdown'))?> Unit</span></p>
                </div>
                <div>
                    <h3>Standby</h3>
                    <p>Shovel : <span><?php echo mysqli_num_rows($standbypit3)?> Unit</span></p>
                    <p>PC | PPA : <span><?php echo mysqli_num_rows(countUnit('PIT 3', 'PC 1250', 'Standby'))?> Unit</span></p>
                    <p>Belaz : <span><?php echo mysqli_num_rows(countUnit('PIT 3', 'Belaz', 'Standby'))?> Unit</span></p>
                    <p>HD | PPA : <span><?php echo mysqli_num_rows(countUnit('PIT 3', 'HD PPA', 'Standby'))?> Unit</span></p>
                </div>
            </div>
            <?php 
                $queryshovel = mysqli_query($connection, "SELECT DISTINCT(unit_name) FROM t_unit WHERE area = 'PIT 3' AND unit_type IN('Shovel PC-3000', 'PC 1250') AND status IN('Ready','Breakdown','Standby','General') ORDER BY unit_name DESC");
                while($rowshovel = mysqli_fetch_array($queryshovel)){
                    ?>
                        <div class="boxdetailshovel pit3" style=" justify-content: space-around">
                            <img src="../assets/logo/exca.svg" alt="shovelicon" style="margin-inline-start: 5px;"/>
                            <h4 id="shovelName" class="shovelstatus <?php echo mysqli_fetch_array(getStatus($rowshovel['unit_name']))['status']?>" title="Unit <?php echo mysqli_fetch_array(getStatus($rowshovel['unit_name']))['status'];?>"><?php echo $rowshovel['unit_name'] ?></h4>
                            <div class="setUnit">
                                <p style="width: 100px;"><?php echo mysqli_fetch_array(getFleet($rowshovel['unit_name']))['fleet_hauler'];?> Belaz</p>
                                <p style="width: 100px;">- HD PPA</p>
                            </div>
                            <p><?php echo mysqli_fetch_array(getflow($rowshovel['unit_name']))['fl_info'];?></p>
                        </div>
                    <?php
                }
            ?>
        </div>
        
    </div>
    <h3 style="margin-top: 80px;"><i class="fa fa-coins" style="margin-inline-end: 8px; margin-inline-start: 10px;"></i>Overbudden | Mining Support Equipment</h3>
    <div class="boxeqtype">
        <div class="boxapt">
            <div class='aptarea'>
                <h2><i class="fa fa-truck-loading " style="margin-inline-end: 10px;"></i>Area Front | PIT 2 (<?php echo mysqli_num_rows($queryaptfrontpit2)?> Unit) </h2>
                <div>
                    <?php 
                        while($rowaptfront = mysqli_fetch_array($queryaptfrontpit2)){
                            ?>
                                <p class="<?php echo mysqli_fetch_array(getStatus($rowaptfront['unit_name']))['status'] ?>"><?php echo $rowaptfront['unit_name'] ?></p>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class='aptarea'>
                <h2><i class="fa fa-dumpster" style="margin-inline-end: 10px;"></i>Area Disposal | PIT 2 (<?php echo mysqli_num_rows($queryaptdisposalpit2)?> Unit) </h2>
                <div>
                <?php 
                        while($rowaptdisposal = mysqli_fetch_array($queryaptdisposalpit2)){
                            ?>
                                <p class="<?php echo mysqli_fetch_array(getStatus($rowaptdisposal['unit_name']))['status'] ?>"><?php echo $rowaptdisposal['unit_name'] ?></p>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class='aptarea'>
                <h2><i class="fa fa-road" style="margin-inline-end: 10px;"></i>Area Jalan | PIT 2 (<?php echo mysqli_num_rows($queryaptjalanpit2)?> Unit) </h2>
                <div>
                <?php 
                        while($rowaptjalan = mysqli_fetch_array($queryaptjalanpit2)){
                            ?>
                                <p class="<?php echo mysqli_fetch_array(getStatus($rowaptjalan['unit_name']))['status'] ?>"><?php echo $rowaptjalan['unit_name'] ?></p>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
        <div class="boxapt">
            <div class='aptarea'>
                <h2><i class="fa fa-truck-loading " style="margin-inline-end: 10px;"></i>Area Front | PIT 3 (<?php echo mysqli_num_rows($queryaptfrontpit3)?> Unit) </h2>
                <div>
                    <?php 
                        while($rowaptfront = mysqli_fetch_array($queryaptfrontpit3)){
                            ?>
                                <p class="<?php echo mysqli_fetch_array(getStatus($rowaptfront['unit_name']))['status'] ?>"><?php echo $rowaptfront['unit_name'] ?></p>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class='aptarea'>
                <h2><i class="fa fa-dumpster" style="margin-inline-end: 10px;"></i>Area Disposal | PIT 3 (<?php echo mysqli_num_rows($queryaptdisposalpit3)?> Unit) </h2>
                <div>
                <?php 
                        while($rowaptdisposal = mysqli_fetch_array($queryaptdisposalpit3)){
                            ?>
                                <p class="<?php echo mysqli_fetch_array(getStatus($rowaptdisposal['unit_name']))['status'] ?>"><?php echo $rowaptdisposal['unit_name'] ?></p>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class='aptarea'>
                <h2><i class="fa fa-road" style="margin-inline-end: 10px;"></i>Area Jalan | PIT 3 (<?php echo mysqli_num_rows($queryaptjalanpit3)?> Unit) </h2>
                <div>
                <?php 
                        while($rowaptjalan = mysqli_fetch_array($queryaptjalanpit3)){
                            ?>
                                <p class="<?php echo mysqli_fetch_array(getStatus($rowaptjalan['unit_name']))['status'] ?>"><?php echo $rowaptjalan['unit_name'] ?></p>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
</article>