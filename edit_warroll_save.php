<?php
include('../../connect.php');

$roll_id=$_POST['roll_id'];
$gender=$_POST['gender'];
$surname=$_POST['surname'];
$forename=$_POST['forename'];
$address=$_POST['address'];
$elec_ward=$_POST['elec_ward'];
$town=$_POST['town'];
$rank=$_POST['rank'];
$reg=$_POST['reg'];
$unit=$_POST['unit'];
$Company=$_POST['Company'];
$other_reg=$_POST['other_reg'];
$other_unit=$_POST['other_unit'];
$other_com=$_POST['other_com'];
$bm1=$_POST['bm1'];
$bm2=$_POST['bm2'];
$certificates=$_POST['certificates'];
$men1=$_POST['men1'];
$men2=$_POST['men2'];
$fm1=$_POST['fm1'];
$fm2=$_POST['fm2'];
$enlist_date=$_POST['enlist_date'];
$elist_date_format=$_POST['elist_date_format'];
$discharge_dare_format=$_POST['discharge_dare_format'];
$discharge_date=$_POST['discharge_date'];
$death_ser_format=$_POST['death_ser_format'];
$death_ser_date=$_POST['death_ser_date'];
$misc_norh_info=$_POST['misc_norh_info'];
$age=$_POST['age'];
$ser_no=$_POST['ser_no'];
$other_ser_no=$_POST['other_ser_no'];
$cem_mem=$_POST['cem_mem'];
$cem_mem_ref=$_POST['cem_mem_ref'];
$cem_mem_country=$_POST['cem_mem_country'];
$add_cwcg_ifo=$_POST['add_cwcg_ifo'];
$occupation=$_POST['occupation'];
$mun_factory_worker=$_POST['mun_factory_worker'];
$rej_dis=$_POST['rej_dis'];
$death_unknown=$_POST['death_unknown'];
$kia=$_POST['kia'];
$dgas_poision=$_POST['dgas_poision'];
$dcapt=$_POST['dcapt'];
$shipsunk_sur=$_POST['shipsunk_sur'];
$dship_sank=$_POST['dship_sank'];
$daccident=$_POST['daccident'];
$dwounds=$_POST['dwounds'];
$dillness=$_POST['dillness'];
$ser_athome=$_POST['ser_athome'];
$ser_athome_ill=$_POST['ser_athome_ill'];
$ser_athome_unfit=$_POST['ser_athome_unfit'];
$western_front=$_POST['western_front'];
$balkans=$_POST['balkans'];
$dard_gall=$_POST['dard_gall'];
$egy_pal=$_POST['egy_pal'];
$meso=$_POST['meso'];
$salonika=$_POST['salonika'];
$east_africa=$_POST['east_africa'];
$italy=$_POST['italy'];
$malta=$_POST['malta'];
$isle_man=$_POST['isle_man'];
$ireland=$_POST['ireland'];
$india=$_POST['india'];
$russia=$_POST['russia'];
$at_sea=$_POST['at_sea'];
$persia=$_POST['persia'];
$occ_turkey=$_POST['occ_turkey'];
$occ_germany=$_POST['occ_germany'];
$wds1=$_POST['wds1'];
$wds2=$_POST['wds2'];
$wds3=$_POST['wds3'];
$gds=$_POST['gds'];
$limb=$_POST['limb'];
$speech=$_POST['speech'];
$sight=$_POST['sight'];
$shell_shock=$_POST['shell_shock'];
$sship_sank=$_POST['sship_sank'];
$dishell_shock=$_POST['dishell_shock'];
$diswound=$_POST['diswound'];
$disgassed=$_POST['disgassed'];
$disill=$_POST['disill'];
$disphyunfit=$_POST['disphyunfit'];
$dismedunfit=$_POST['dismedunfit'];
$unfit_overseas=$_POST['unfit_overseas'];
$over_under_age=$_POST['over_under_age'];
$son_claim=$_POST['son_claim'];
$captured=$_POST['captured'];

$N = count($buried_id);
for($i=0; $i < $N; $i++)
{
    $result = "Uupdate bf_rollofhonour set
    roll_id='$roll_id[$i]',
    gender='$gender[$i]',
surname='$surname[$i]',
forename='$forename[$i]',
address='$address[$i]',
elec_ward='$elec_ward[$i]',
town='$town[$i]',
rank='$rank[$i]',
reg='$reg[$i]',
unit='$unit[$i]',
Company='$Company[$i]',
other_reg='$other_reg[$i]',
other_unit='$other_unit[$i]',
other_com='$other_com[$i]',
bm1='$bm1[$i]',
bm2='$bm2[$i]',
certificates='$certificates[$i]',
men1='$men1[$i]',
men2='$men2[$i]',
fm1='$fm1[$i]',
fm2='$fm2[$i]',
enlist_date='$enlist_date[$i]',
elist_date_format='$elist_date_format[$i]',
discharge_dare_format='$discharge_dare_format[$i]',
discharge_date='$discharge_date[$i]',
death_ser_format='$death_ser_format[$i]',
death_ser_date='$death_ser_date[$i]',
misc_norh_info='$misc_norh_info[$i]',
age='$age[$i]',
ser_no='$ser_no[$i]',
other_ser_no='$other_ser_no[$i]',
cem_mem='$cem_mem[$i]',
cem_mem_ref='$cem_mem_ref[$i]',
cem_mem_country='$cem_mem_country[$i]',
add_cwcg_ifo='$add_cwcg_ifo[$i]',
occupation='$occupation[$i]',
mun_factory_worker='$mun_factory_worker[$i]',
rej_dis='$rej_dis[$i]',
death_unknown='$death_unknown[$i]',
kia='$kia[$i]',
dgas_poision='$dgas_poision[$i]',
dcapt='$dcapt[$i]',
shipsunk_sur='$shipsunk_sur[$i]',
dship_sank='$dship_sank[$i]',
daccident='$daccident[$i]',
dwounds='$dwounds[$i]',
dillness='$dillness[$i]',
ser_athome='$ser_athome[$i]',
ser_athome_ill='$ser_athome_ill[$i]',
ser_athome_unfit='$ser_athome_unfit[$i]',
western_front='$western_front[$i]',
balkans='$balkans[$i]',
dard_gall='$dard_gall[$i]',
egy_pal='$egy_pal[$i]',
meso='$meso[$i]',
salonika='$salonika[$i]',
east_africa='$east_africa[$i]',
italy='$italy[$i]',
malta='$malta[$i]',
isle_man='$isle_man[$i]',
ireland='$ireland[$i]',
india='$india[$i]',
russia='$russia[$i]',
at_sea='$at_sea[$i]',
persia='$persia[$i]',
occ_turkey='$occ_turkey[$i]',
occ_germany='$occ_germany[$i]',
wds1='$wds1[$i]',
wds2='$wds2[$i]',
wds3='$wds3[$i]',
gds='$gds[$i]',
limb='$limb[$i]',
speech='$speech[$i]',
sight='$sight[$i]',
shell_shock='$shell_shock[$i]',
sship_sank='$sship_sank[$i]',
dishell_shock='$dishell_shock[$i]',
diswound='$diswound[$i]',
disgassed='$disgassed[$i]',
disill='$disill[$i]',
disphyunfit='$disphyunfit[$i]',
dismedunfit='$dismedunfit[$i]',
unfit_overseas='$unfit_overseas[$i]',
over_under_age='$over_under_age[$i]',
son_claim='$son_claim[$i]',
captured='$captured[$i]'
  where roll_id='$roll_id[$i]'";
	$query_run = mysqli_query($connection,$result);
}
header("location: ../view/warroll.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>