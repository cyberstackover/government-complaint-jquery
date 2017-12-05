<?php 

require "config/main.php";
$type = trim($_POST['type']);
$cmd = trim($_POST['cmd']);

switch ($type) {
	case 'data_user':
		if ($cmd=="tambah") {
			mysql_query("INSERT INTO user1(nama,alamat,telp,kontak)
			VALUES('$_POST[nama]',
					'$_POST[alamat]',
					'$_POST[telepon]',
					'$_POST[kontak]')");
		}
		elseif($cmd=="edit") {
			mysql_query("UPDATE user1 SET nama='$_POST[nama]',
				alamat='$_POST[alamat]',
				telp='$_POST[telepon]',
				kontak='$_POST[kontak]'
				WHERE id='$_POST[id]'");
		}
		else {
			die(); //jika bukan tambah atau edit, lalu apa ? die aja lah :p
		}
		header('Location:index.php?page=data_user');
		break;
	case 'data_pembelian':
			$buy = explode(", ",$_POST[citybuy]);
			$trans = explode(", ",$_POST[citytrans]);
			$cr = $buy[0];
			$cor = $buy[1];
			$cd = $trans[0];
			$cod = $trans[1];
		if ($cmd=="tambah") {
			mysql_query("INSERT INTO request(memberID,item,itemDesc,itemCategory,itemPic,itemUrl,cityRequest,countryRequest,cityDeal,countryDeal,pay,status)
			VALUES('$_POST[memberid]',
					'$_POST[item]',
					'$_POST[itemDesc]',
					'$_POST[category]',
					'$_POST[imageFile]',
					'$_POST[url]',
					'$cr',
					'$cor',
					'$cd',
					'$cod',
					'$_POST[price]',
					'$_POST[status]')");
		}
		elseif($cmd=="edit") {
			mysql_query("UPDATE request SET item='$_POST[item]',
				itemDesc='$_POST[itemDesc]',
				itemCategory='$_POST[category]',
				itemPic='$_POST[imageFile]',
				itemUrl='$_POST[url]',
				cityRequest='$cr',
				countryRequest='$cor',
				cityDeal='$cd',
				countryDeal='$cod',
				pay='$_POST[price]',
				status='$_POST[status]'
				WHERE reqID='$_POST[id]'");
		}
		else {
			die(); //jika bukan tambah atau edit, lalu apa ? die aja lah :p
		}
		header('Location:index.php?page=data_pembelian');
		break;
	case 'data_teknisi':
		if ($cmd=="tambah") {
			mysql_query("INSERT INTO admin(username,password,nama)
			VALUES('$_POST[username]','$_POST[password]','$_POST[nama]')");
		}
		elseif($cmd=="edit") {
			mysql_query("UPDATE admin SET nama='$_POST[nama]',
				username='$_POST[username]',
				password='$_POST[password]'
			WHERE id='$_POST[id]'");
		}
		else {
			die(); //jika bukan tambah atau edit, lalu apa ? die aja lah :p
		}
		header('Location:index.php?page=data_teknisi');
		break;
	case 'spk':
			$buy = explode(", ",$_POST[citybuy]);
			$trans = explode(", ",$_POST[citytrans]);
			$cr = $buy[0];
			$cor = $buy[1];
			$cd = $trans[0];
			$cod = $trans[1];
		if ($cmd=="tambah") {
			mysql_query("INSERT INTO trip(memberID,travel_to_city,travel_to_country,back_to_city,back_to_country,expected_back_date)
			VALUES('$_POST[memberid]',
			'$cd',
			'$cod',
			'$cr',
			'$cor',
			'$_POST[tanggal]')");
		}
		elseif($cmd=="edit") {
			mysql_query("UPDATE trip SET travel_to_city='$cd',
				travel_to_country='$cod',
				back_to_city='$cr',
				back_to_country='$cor',
				expected_back_date='2016-01-01',
				WHERE tripID='$_POST[id]'");
		}
		else {
			die(); //jika bukan tambah atau edit, lalu apa ? die aja lah :p
		}
		header('Location:index.php?page=spk');
		break;
	case 'admin':
		if ($cmd=="tambah") {
			mysql_query("INSERT INTO admin(nama,username,password)
			VALUES('$_POST[nama]',
			'$_POST[username]',
			'$_POST[password]')");
		}
		elseif($cmd=="edit") {
			mysql_query("UPDATE admin SET nama='$_POST[nama]',
				username='$_POST[username]',
				password='$_POST[password]'
				WHERE id=".$_POST[id]);
			
		}
		else {
			die(); //jika bukan tambah atau edit, lalu apa ? die aja lah :p
		}
		header('Location:index.php?page=admin');
		break;
	
	default:
		require_once("pages/404.php");
		break;
}

 ?>