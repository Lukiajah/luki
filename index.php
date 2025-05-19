<?php $page = isset($_GET['page']) ? $_GET['page'] : 'home'; ?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hearts 2 Hearts - Hearts2Hearts</title>
    <style>
        :root {
            --text: #1e293b;
            --bg: #f8fafc;
            --gradient: linear-gradient(90deg, #ec4899, #db2777, #f472b6);
            /* Gradasi pink elegan */
            --pink-dark: #9b1c6d;
            /* Darker Pink */
            --pink-light: #fcd5e3;
            /* Lighter Pink */
            --link-color: #ec4899;
            /* Pink for links */
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: var(--bg);
            color: var(--text);
        }

        header {
            background: var(--gradient);
            color: white;
            padding: 40px 20px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        header h1 {
            margin: 0;
            font-size: 32px;
        }

        header p {
            margin-top: 10px;
            color: var(--pink-light);
        }

        nav {
            background: linear-gradient(to right, #9b1c6d, #f472b6);
            text-align: center;
            padding: 12px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 999;
        }

        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
            padding-bottom: 5px;
            border-bottom: 2px solid transparent;
            transition: 0.2s ease;
        }

        nav a.active,
        nav a:hover {
            border-color: white;
            text-shadow: 0 0 4px rgba(255, 255, 255, 0.6);
        }

        main {
            max-width: 800px;
            margin: 40px auto;
            background: white;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.06);
        }

        footer {
            text-align: center;
            padding: 20px;
            background: linear-gradient(to right, #ec4899, #db2777);
            color: white;
            font-size: 14px;
            margin-top: 60px;
            box-shadow: 0 -4px 10px rgba(0, 0, 0, 0.1);
        }

        a {
            color: var(--link-color);
        }

        a:hover {
            text-decoration: underline;
        }

        h2 {
            margin-top: 0;
        }

        /* Style for the image in the header */
        .header-image {
            width: 80%;
            max-width: 600px;
            margin: 20px 0;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid var(--pink-dark);
            border-radius: 8px;
        }

        input[type="submit"] {
            background-color: var(--pink-dark);
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #e11d48;
        }

        /* Member Favorit Style */
        .member-favorite {
            background: var(--pink-light);
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 40px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .member-favorite img {
            width: 200px;
            height: auto;
            border-radius: 50%;
            margin: 20px 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body>

    <header>
        <h1>🎤 Hearts2Hearts: Dunia K-pop yang Memikat</h1>
        <p>Selamat datang di website resmi Hearts2Hearts, grup K-pop yang telah mencuri hati banyak penggemar!</p>

        <?php if ($page == 'home'): ?>
            <img src="https://cms.disway.id/uploads/15bd680c298c0430a493e9e4455d2800.jpg" alt="Hearts2Hearts" class="header-image">
        <?php endif; ?>
    </header>

    <nav>
        <a href="?page=home" class="<?= $page == 'home' ? 'active' : '' ?>">Beranda</a>
        <a href="?page=about" class="<?= $page == 'about' ? 'active' : '' ?>">Tentang</a>
        <a href="?page=contact" class="<?= $page == 'contact' ? 'active' : '' ?>">Kontak</a>
        <a href="?page=gallery" class="<?= $page == 'gallery' ? 'active' : '' ?>">Galeri</a>
        <a href="?page=album" class="<?= $page == 'album' ? 'active' : '' ?>">Album</a>
        <a href="?page=login" class="<?= $page == 'login' ? 'active' : '' ?>">login</a>
    </nav>

    <main>
        <?php
        switch ($page) {
            case 'home':
                echo "<h2>🎤 Selamat Datang di Dunia Hearts2Hearts</h2>                       
                  <p>Hearts2Hearts adalah girl group terbaru dari SM Entertainment, rumah bagi berbagai artis legendaris K-pop. Dibentuk dengan visi untuk menghadirkan warna baru dalam industri musik Korea, Hearts2Hearts menyatukan lima talenta muda yang memiliki pesona, bakat, dan semangat luar biasa.</p>                       
                  <p>Dengan perpaduan vokal yang kuat, koreografi yang dinamis, serta konsep visual yang memikat, Hearts2Hearts hadir membawa energi segar ke panggung K-pop. Sejak debut resmi mereka pada tahun 2023, grup ini langsung menarik perhatian publik dan penggemar global berkat konsep yang unik dan lagu debut mereka yang sukses besar,</p>                       
                  <p>Jangan lewatkan update terbaru, termasuk jadwal konser, berita, dan banyak lagi! Terus dukung Hearts2Hearts dan jadi bagian dari perjalanan mereka!</p>";
                break;

            case 'about':
                echo "<h2>🌟 Di Bawah Naungan SM Entertainment</h2>                       
                  <p>Hearts2Hearts bukan sekadar grup K-pop biasa — mereka merupakan bagian dari keluarga besar SM Entertainment, salah satu agensi hiburan terbesar dan paling berpengaruh di Korea Selatan. SM Entertainment telah dikenal selama puluhan tahun sebagai pionir dalam membentuk wajah industri K-pop global, melahirkan banyak artis papan atas seperti BoA, TVXQ, Super Junior, Girls’ Generation, SHINee, EXO, Red Velvet, NCT, dan aespa.</p>                       
                  <p>Sebagai bagian dari SM, Hearts2Hearts mendapatkan akses ke sistem pelatihan yang sangat ketat dan terstruktur, yang terkenal di seluruh dunia karena kemampuannya membentuk trainee menjadi bintang kelas dunia. Setiap anggota Hearts2Hearts telah menjalani pelatihan bertahun-tahun dalam vokal, tari, akting, bahasa asing, dan bahkan komunikasi dengan penggemar — semuanya untuk memastikan mereka siap bersinar di panggung internasional.</p>";
                break;

            case 'contact':
                include "kontak.php";
                break;

            case 'gallery':
                echo "<h2>Galeri Hearts2Hearts</h2>                       
                  <p>Lihat momen-momen spesial dari perjalanan Hearts2Hearts dalam galeri foto kami.</p>";

                // *** TAMBAHAN MEMBER FAVORIT 1 ***
                echo "<div class='member-favorite'>
                    <h3> Member Favorit: jiwoo </h3>
                    <img src='Jiwoo.jpg' alt='jiwoo'>
                    <p>Jiwoo debut sebagai leader pada usia 18 tahun (kelahiran 2006), menjadikannya salah satu leader termuda dalam sejarah grup rookie SM Entertainment. Meski muda, ia menunjukkan ketegasan dan kedewasaan yang luar biasa.</p>
                  </div>";

                echo "<div style='display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 20px;'>";



                $images = [
                    ['src' => '1.jpg', 'alt' => 'Hearts2Hearts 1'],
                    ['src' => '2.jpg', 'alt' => 'Hearts2Hearts 2'],
                    ['src' => '3.jpg', 'alt' => 'Hearts2Hearts 3'],
                    ['src' => '4.jpg', 'alt' => 'Hearts2Hearts 4'],
                    ['src' => '5.jpg', 'alt' => 'Hearts2Hearts 5'],
                    ['src' => '6.jpg', 'alt' => 'Hearts2Hearts 6'],
                ];

                foreach ($images as $image) {
                    echo "<div class='gallery-item' style='position: relative;'>                         
                        <img src='{$image['src']}' alt='{$image['alt']}' class='gallery-image' style='width:100%; height: 200px; object-fit: cover; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); cursor: pointer; transition: transform 0.3s ease-in-out;'>                       
                      </div>";
                }

                echo "</div>";

                echo "<div id='lightboxModal' style='display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.8); justify-content: center; align-items: center;'>                         
                    <span id='closeBtn' style='position: absolute; top: 20px; right: 20px; font-size: 30px; color: white; cursor: pointer;'>×</span>                         
                    <img id='lightboxImage' src='' style='max-width: 90%; max-height: 90%; border-radius: 10px;'>                       
                  </div>";

                // JavaScript for lightbox                 
                echo "<script>                         
                    document.querySelectorAll('.gallery-image').forEach(item => {                             
                        item.addEventListener('click', function() {                                 
                            var src = this.src;                                 
                            document.getElementById('lightboxImage').src = src;                                 
                            document.getElementById('lightboxModal').style.display = 'flex';                             
                        });                         
                    });                          

                    document.getElementById('closeBtn').addEventListener('click', function() {                             
                        document.getElementById('lightboxModal').style.display = 'none';                         
                    });                          

                    document.getElementById('lightboxModal').addEventListener('click', function(event) {                             
                        if (event.target === this) {                                 
                            this.style.display = 'none';                             
                        }                         
                    });                       
                  </script>";
                break;

            case 'album':
                echo "<h2>Album The Chase - H2H</h2>
          <p>Berikut adalah beberapa lagu unggulan dari album <em>The Chase</em> oleh H2H, termasuk video yang bisa kamu tonton langsung dari YouTube:</p>

          <h3>🎬 The Chase</h3>
          <iframe width='100%' height='400' src='https://www.youtube.com/embed/kxUA2wwYiME?si=1jXk0e2t7BZZS20Y' 
              title='The Chase - Hearts2Hearts' frameborder='0' 
              allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
              allowfullscreen></iframe>

          <h3>🎥 Butterflies</h3>
          <iframe width='100%' height='400' src='https://www.youtube.com/embed/hJ9Wp3PO3c8?si=T5wWy7SaKCNHWfas' 
              title='Butterflies - Hearts2Hearts' frameborder='0' 
              allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share' 
              allowfullscreen></iframe>";
                break;


            case 'login':
                include "form.php";
                break;

            default:
                echo "<h2>404 - Halaman Tidak Ditemukan</h2>
                      <p>Ups, halaman yang kamu cari tidak ada! Coba pilih menu lain di atas.</p>";
        }
        ?>
    </main>

    <footer>
        &copy; <?= date("Y") ?> Hearts2Hearts |
    </footer>

</body>

</html>