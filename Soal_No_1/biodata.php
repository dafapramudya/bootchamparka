<?php
function biodata()
{
	$nama = "Dafa Pramudya";
	$address = "Kracak, Ajibarang RT 05 RW 07 Kabupaten Banyumas";
	$hobbies = array
	(
		'Coding',
		'Musik',
		'Game',
		'Basket'
	);
	$isMarried = false;
	$school = "SMK TELKOM PURWOKERTO";
	$skills = array
	(
		'HTML', 
		'PHP', 
		'C#',  
		'Java', 
		'Javascript', 
	);

	$data = array('Nama' => $nama, 'Address' => $address, 'Hobbies' => $hobbies, 'isMarried' => $isMarried, 'School' => $school, 'Skills' => $skills);
	
	$json = json_encode($data);
	echo $json;
}

return biodata();
?>
