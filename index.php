<?php
$pesan_status ="";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn_kirim'])) {
    
    $nama = htmlspecialchars($_POST['txt_nama']);
    $email =htmlspecialchars($_POST['txt_email']);
    $pesan =htmlspecialchars($_POST['txt_pesan']);

    if (!empty($nama) && !empty ($email) && !empty($pesan)) {
       
    $pesan_status = "<div class='alert-succes'>Terima Kasih
<strong>$nama</strong>,pesan Anda telah berhasil dikirim ke server SMKN
5 Batam!</div";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sekar - SMKN 5 Batam</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 

<div class="container">
    <header>
        <div class="profile-info">
            <div class="avatar">👤</div>
            <div>
                <h1 style="margin:0,">sekar</h1>
                <p style="margin:5px 0 0 0; color: gray;">Siswa Teknik 
Komputer dan Jaringan SMKN 5 Batam</p>
               </div>  
            </div>
            <nav>
                <a href="#profil">Home</a>
                <a href="#skills">Skills</a
                <a href="#kontak">Contact</a>
                <button id="btn-theme" onclink="toggleTheme()"🌙>Dark
                Mode</button>
        </nav>
    </header>
    <div class="main-cotent">
        <!--PROFIL-->
        <div class="left-column">
            <div class="card" id="profil">
                <h2>PROFIL</h2>
                <h3>👤 BIODATA</h3>
                <p>Siswa aktif dan praktisi di bidang Teknik Komputer
                dan Jaringan dengan fokus pada administrasi server dan keamanan jaringan </p>

                <h3>🎓PENDIDIKAN</h3>
                <ul>
                    <li>Lulusan SDN 010 Batam </li>
                    <li>Lulusan SMP 44 Batam </li>
                    <li>siswa aktif di SMK Negeri 5 Batam </li>
                </ul> 

                <h3>📚 PENGALAMAN BELAJAR</h3>
                <ul >
                    <li> Belajar Membuat Crimping Cable</li>
                    <li>Belajar membuat Jaringan Mikrotik</li>
                    <li>Seeting mikrotik</li>
                </ul>
            </div>
        </div>

        <!--SKILLS DAN KONTAK--> 
        <div class="right-column">
            <div class="card"id="skills">
        <h2>NETWORK SKILLS</h2>

        <ul>
            <li>Crimping Cable</li>
            <li>mikrotik router</li>
            <li>Cisco networking</li>
        </ul>

            <div class="skill-item">
                <span class="skill-name">Mikrotik RouterOS</span>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 90%;"></div>
            </div>
        </div> 
        </div class="skill-item">
            <span class="skill-name">Cisco Networking</span>
            <div class="progress-bar">
                <div class="progress-fill" style="width: 85%;"></div>
            </div>
        </div>
        </div class="skill-name">
            <span class="skill-name">Linux Server (Debian/Ubuntu)</span>
            
        </div class="progress-bar">
            <div class="progress-fill" style="width: 80%;"></div>
            </div>
        </div>

        <div class="skill-item">
            Network Security
            </span>
            
            <div class="proress-bar">
                <div class="progress-fill"style="width:75%;"></div>
            </div>
        </div>      
    </div>
    
        <div class= "card" id= "kontak">
            <h2>FORM KONTAK</h2>

            <?php echo $pesan_status; ?>

            <form method="POST"action="">
                <div class="form-group">
                    <label for="nama">Nama Lengkap:</label>
                    <input type="text" id="nama" name="txt_nama" placeholder="Masukkan nama lengkap..." required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="txt_email" placeholder="Masukkan email..." required>
                </div>

                <div class="form-group">
                    <label for="pesan">pesan:</label>
                    <input type="pesan" id="pesan" name="txt_pesan" placeholder="Masukkan pesan..." required>
                </div>

                </div class="form-group">
                <label for="pesan">
                    pesan:
                    </label>

                    <texterea id="pesan" name="txt_pesan" rows="4" placeholder="Tuliskan pesan..." required></textarea>
                </div>

                     <button type="submit" name="btn_kirim" class="btn-submit">KIRIM PESAN</button>
                </form>
            </div>
        </div>

    </div>
</div>
<script src="script.js"></script>

</body>
</html>