<?php
include ("connect.php");

// cek apakah tombol daftar sudah diklik atau blum?
if (isset($_POST['submit'])) {

	// ambil data dari formulir
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$msg = $_POST['message'];

    // buat query
    $sql = "INSERT INTO contacts (firstName, lastName, email, subject, message) VALUE ('$fname', '$lname', '$email', '$subject', '$msg')";
	$query = mysqli_query($conn, $sql);

	// apakah query simpan berhasil?
	if ($query) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		echo "<script type='text/javascript'>alert('Thank You!');window.location.href='../#hoaxy-consult';</script>";
	}
	else {
		// kalau gagal alihkan ke halaman indek.php dengan status=gagal
		echo "<script type='text/javascript'>alert('Failed!');window.location.href='../#hoaxy-consult';</script>";
	}
}
else {
	die("Akses dilarang...");
}

?>