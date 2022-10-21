<?php
$hospital_name = $_POST['hospital_name'];
$hospital_registration = $_POST['hospital_registration'];
$address = $_POST['address'];
$landmark = $_POST['landmark'];
$locality = $_POST['locality'];
$pincode = $_POST['pincode'];
$latitude = $_POST['latitude'];
$longitude = $_POST['longitude'];
$facility_type = $_POST['facility_type'];
$state = $_POST['state'];
$district = $_POST['district'];
$taluka = $_POST['taluka'];
$block = $_POST['block'];

$query = 'INSERT INTO public.hlist("Index", "Health Facility Name", "Address", "Landmark", "Locality", "Pincode", latitude, longitude, "Facility Type", "State_Name", "District_Name", "Taluka_Name", "Block_Name", geom) VALUES ('.$hospital_registration.', \''.$hospital_name.'\', \''.$address.'\', \''.$landmark.'\', \''.$locality.'\', \''.$pincode.'\', '.$latitude.', '.$longitude.', \''.$facility_type.'\',\''.$state.'\', \''.$district.'\', \''.$taluka.'\', \''.$block.'\' , ST_SetSRID(ST_MakePoint('.$latitude.', '.$longitude.'), 4326));';


$conn=pg_connect("host=localhost dbname=db_gis-hos user=postgres password=Saurabh port=5432");
if($conn)
{
	$result = pg_query($conn, $query);
	if(!$result)
		echo 'Failed to enter data';
	else
		echo 'Data Entered Successfully';
}
else
	echo 'Connection Failed';
?>
