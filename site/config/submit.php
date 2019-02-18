<?php
include ("connect.php");

// cek apakah tombol daftar sudah diklik atau blum?
if (isset($_POST['submit'])) {

	// ambil data dari formulir
	$fname = mysqli_real_escape_string($conn, $_POST['fname']);
	$lname = mysqli_real_escape_string($conn, $_POST['lname']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$subject = mysqli_real_escape_string($conn, $_POST['subject']);
	$msg = mysqli_real_escape_string($conn, $_POST['message']);

    // buat query
    // $sql = sprintf("INSERT INTO contacts (firstName, lastName, email, subject, message) VALUES ('%s', '%s', '%s', '%s', '%s')", mysqli_real_escape_string($fname), mysqli_real_escape_string($lname), mysqli_real_escape_string($email), mysqli_real_escape_string($subject), mysqli_real_escape_string($msg));
    
    $sql = "INSERT INTO contacts (firstName, lastName, email, subject, message) VALUES ('$fname', '$lname', '$email', '$subject', '$msg')";
    $pesan = "<h3>Hi Aditya!</h3><br><p>Pengunjung bernama <b>$fname $lname</b> dengan email <b>$email</b> telah meninggalkan pesan berikut:<br><br><b>Subject<span style='padding-left: 26px;'>:</span></b> $subject<br><b>Message<span style='padding-left: 20px;'>:</span></b> $msg<br><br>Silahkan hubungi <b>$fname $lname</b> ($email) jika diperlukan.<br><br><br>Regards,<br><br><br><br><b>your bot</b></p>";
	$query = mysqli_query($conn, $sql);

	// apakah query simpan berhasil?
	if ($query) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		echo "<script type='text/javascript'>alert('Thank You!');window.location.href='../#hoaxy-consult';</script>";
		
		include 'phpmailer/class.phpmailer.php';
		$mail = new PHPMailer(true);
		// Server Setting
		# $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host = 'mail.adityacprtm.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'aditya@adityacprtm.com';
        $mail->Password = 'aydict97';
        $mail->SMTPSecure = ‘tls’;
        $mail->Port = 587;
        // Recipients
        $mail->setFrom('bot@adityacprtm.com', 'Hoaxy Web');
        $mail->addAddress('adityacprtm@gmail.com', 'Aditya');
        //Content
        $mail->isHTML(true);
        $mail->Subject = 'Pemberitahuan Email dari Website';
        $mail->Body = $pesan;
        $mail->Send();
	}
	else {
		// kalau gagal alihkan ke halaman indek.php dengan status=gagal
		printf("Errormessage: %s\n", mysqli_error($conn));
		echo "<script type='text/javascript'>alert('Failed!');window.location.href='../#hoaxy-consult';</script>";
	}
}
else {
	die("Access Forbidden...");
}

?>