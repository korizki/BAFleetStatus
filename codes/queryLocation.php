<?php 

function filterUnitAPT($area, $location){
    include "connection.php";
    return mysqli_query($connection, "SELECT * FROM t_unit WHERE area = '$area' AND location = '$location' AND status IN('Ready','Breakdown','Standby','General') AND unit_type IN ('Grader','Dozer','Compac','PC200','Water Tank') ORDER BY unit_name ASC");
};
$queryaptjalanpit2 = filterUnitAPT('PIT 2', 'Jalan');
$queryaptfrontpit2 = filterUnitAPT('PIT 2', 'Front');
$queryaptdisposalpit2 = filterUnitAPT('PIT 2', 'Disposal');
$queryaptjalanpit3 = filterUnitAPT('PIT 3', 'Jalan');
$queryaptfrontpit3 = filterUnitAPT('PIT 3', 'Front');
$queryaptdisposalpit3 = filterUnitAPT('PIT 3', 'Disposal');

function CountUnit($area, $unittype, $status){
    include "connection.php";
    return mysqli_query($connection, "SELECT * FROM t_unit WHERE area = '$area' AND unit_type = '$unittype' AND status = '$status' ");
};
// PIT 2
$readypit2 = countUnit('PIT 2', 'Shovel PC-3000', 'Ready');
$breakdownpit2 = countUnit('PIT 2', 'Shovel PC-3000', 'Breakdown');
$standbypit2 = countUnit('PIT 2', 'Shovel PC-3000', 'Standby');
$generalpit2 = countUnit('PIT 2', 'Shovel PC-3000', 'General');
$readyexpit2 = countUnit('PIT 2', 'Excavator Coal', 'Ready');
$breakdownexpit2 = countUnit('PIT 2', 'Excavator Coal', 'Breakdown');
$standbyexpit2 = countUnit('PIT 2', 'Excavator Coal', 'Standby');
$generalexpit2 = countUnit('PIT 2', 'Excavator Coal', 'General');

// PIT 3
$readypit3 = countUnit('PIT 3', 'Shovel PC-3000', 'Ready');
$breakdownpit3 = countUnit('PIT 3', 'Shovel PC-3000', 'Breakdown');
$standbypit3 = countUnit('PIT 3', 'Shovel PC-3000', 'Standby');
$generalpit3 = countUnit('PIT 3', 'Shovel PC-3000', 'General');

$readyextanahpit3 = countUnit('PIT 3', 'Excavator Tanah', 'Ready');
$breakdownextanahpit3 = countUnit('PIT 3', 'Excavator Tanah', 'Breakdown');
$standbyextanahpit3 = countUnit('PIT 3', 'Excavator Tanah', 'Standby');
$generalextanahpit3 = countUnit('PIT 3', 'Excavator Tanah', 'General');

$readyexpit3 = countUnit('PIT 3', 'Excavator Coal', 'Ready');
$breakdownexpit3 = countUnit('PIT 3', 'Excavator Coal', 'Breakdown');
$standbyexpit3 = countUnit('PIT 3', 'Excavator Coal', 'Standby');
$generalexpit3 = countUnit('PIT 3', 'Excavator Coal', 'General');

function getStatus($unitname){
    include "connection.php";
    return mysqli_query($connection, "SELECT status FROM t_unit WHERE unit_name = '$unitname'");
}

?>