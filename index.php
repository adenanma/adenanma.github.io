<?php
include 'config/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dapurNDA</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">    
    <!-- Link Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Link Google Font yang elegant -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <!-- Link Font Awesome untuk ikon WhatsApp -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    
    <!--PEMBATAS ATAS-->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="filter: drop-shadow(0 16px 6px rgba(0,0,0,0.5));"><path fill="#fff"  fill-opacity="1" d="M0,288L10.4,240C20.9,192,42,96,63,90.7C83.5,85,104,171,125,213.3C146.1,256,167,256,188,218.7C208.7,181,230,107,250,112C271.3,117,292,203,313,218.7C333.9,235,355,181,376,133.3C396.5,85,417,43,438,32C459.1,21,480,43,501,69.3C521.7,96,543,128,563,128C584.3,128,605,96,626,106.7C647,117,668,171,689,176C709.6,181,730,139,751,117.3C772.2,96,793,96,814,80C834.8,64,856,32,877,48C897.4,64,918,128,939,133.3C960,139,981,85,1002,96C1022.6,107,1043,181,1064,186.7C1085.2,192,1106,128,1127,96C1147.8,64,1169,64,1190,96C1210.4,128,1231,192,1252,213.3C1273,235,1294,213,1315,192C1335.7,171,1357,149,1377,165.3C1398.3,181,1419,235,1430,261.3L1440,288L1440,0L1429.6,0C1419.1,0,1398,0,1377,0C1356.5,0,1336,0,1315,0C1293.9,0,1273,0,1252,0C1231.3,0,1210,0,1190,0C1168.7,0,1148,0,1127,0C1106.1,0,1085,0,1064,0C1043.5,0,1023,0,1002,0C980.9,0,960,0,939,0C918.3,0,897,0,877,0C855.7,0,835,0,814,0C793,0,772,0,751,0C730.4,0,710,0,689,0C667.8,0,647,0,626,0C605.2,0,584,0,563,0C542.6,0,522,0,501,0C480,0,459,0,438,0C417.4,0,397,0,376,0C354.8,0,334,0,313,0C292.2,0,271,0,250,0C229.6,0,209,0,188,0C167,0,146,0,125,0C104.3,0,83,0,63,0C41.7,0,21,0,10,0L0,0Z"></path></svg>

<!-- Hero Section -->
<section class="hero py-5">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 text-center">
                <img src="logo.jpeg" alt="Logo dapurNda" class="img-fluid mb-4" style="max-width: 200px;">
                <h1 class="display-4 mb-4">Selamat Datang di<br>dapurNda</h1>
                <p class="lead mb-4">Nikmati kelezatan masakan rumahan kami yang dibuat dengan cinta dan bahan-bahan berkualitas tinggi.</p>
            </div>
        </div>
    </div>
</section>

<!--PEMBATAS BAWAH-->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="filter: drop-shadow(0 -10px 3px rgba(0,0,0,0.5));"><path fill="#fff" fill-opacity="1" d="M0,288L10.4,240C20.9,192,42,96,63,90.7C83.5,85,104,171,125,213.3C146.1,256,167,256,188,218.7C208.7,181,230,107,250,112C271.3,117,292,203,313,218.7C333.9,235,355,181,376,133.3C396.5,85,417,43,438,32C459.1,21,480,43,501,69.3C521.7,96,543,128,563,128C584.3,128,605,96,626,106.7C647,117,668,171,689,176C709.6,181,730,139,751,117.3C772.2,96,793,96,814,80C834.8,64,856,32,877,48C897.4,64,918,128,939,133.3C960,139,981,85,1002,96C1022.6,107,1043,181,1064,186.7C1085.2,192,1106,128,1127,96C1147.8,64,1169,64,1190,96C1210.4,128,1231,192,1252,213.3C1273,235,1294,213,1315,192C1335.7,171,1357,149,1377,165.3C1398.3,181,1419,235,1430,261.3L1440,288L1440,320L1429.6,320C1419.1,320,1398,320,1377,320C1356.5,320,1336,320,1315,320C1293.9,320,1273,320,1252,320C1231.3,320,1210,320,1190,320C1168.7,320,1148,320,1127,320C1106.1,320,1085,320,1064,320C1043.5,320,1023,320,1002,320C980.9,320,960,320,939,320C918.3,320,897,320,877,320C855.7,320,835,320,814,320C793,320,772,320,751,320C730.4,320,710,320,689,320C667.8,320,647,320,626,320C605.2,320,584,320,563,320C542.6,320,522,320,501,320C480,320,459,320,438,320C417.4,320,397,320,376,320C354.8,320,334,320,313,320C292.2,320,271,320,250,320C229.6,320,209,320,188,320C167,320,146,320,125,320C104.3,320,83,320,63,320C41.7,320,21,320,10,320L0,320Z"></path></svg>

<!-- Filter Menu Section -->
<section id="filter-menu" class="py-5">
    <div class="container">
        <h3 class="text-center mb-4">Temukan Menu Favorit Anda</h3>
        <div class="row mt-4">
            <div class="col-md-12">
                <select id="category-filter" class="form-select form-select-lg mb-3">
                    <option selected value="semua">Semua Kategori</option>
                    <option value="makanan-utama">Makanan Utama</option>
                    <option value="makanan-ringan">Makanan Ringan</option>
                    <option value="minuman">Minuman</option>
                </select>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const categoryFilter = document.getElementById('category-filter');
    const menuCards = document.querySelectorAll('#menu .card');

    function filterMenu() {
        const category = categoryFilter.value;

        menuCards.forEach(card => {
            const cardCategory = card.dataset.category;

            let showCard = (category === 'semua' || cardCategory === category);

            card.style.display = showCard ? '' : 'none';
        });
    }

    categoryFilter.addEventListener('change', filterMenu);
});
</script>

<style>
#filter-menu {
    background-color: #ffffff;
    border-radius: 10px;
}
.form-select {
    border-radius: 0.3rem;
    border: 1px solid #ced4da;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.form-select:focus {
    
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
</style>

<!--PEMBATAS ATAS-->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="filter: drop-shadow(0 16px 6px rgba(0,0,0,0.5));"><path fill="#fff"  fill-opacity="1" d="M0,288L10.4,240C20.9,192,42,96,63,90.7C83.5,85,104,171,125,213.3C146.1,256,167,256,188,218.7C208.7,181,230,107,250,112C271.3,117,292,203,313,218.7C333.9,235,355,181,376,133.3C396.5,85,417,43,438,32C459.1,21,480,43,501,69.3C521.7,96,543,128,563,128C584.3,128,605,96,626,106.7C647,117,668,171,689,176C709.6,181,730,139,751,117.3C772.2,96,793,96,814,80C834.8,64,856,32,877,48C897.4,64,918,128,939,133.3C960,139,981,85,1002,96C1022.6,107,1043,181,1064,186.7C1085.2,192,1106,128,1127,96C1147.8,64,1169,64,1190,96C1210.4,128,1231,192,1252,213.3C1273,235,1294,213,1315,192C1335.7,171,1357,149,1377,165.3C1398.3,181,1419,235,1430,261.3L1440,288L1440,0L1429.6,0C1419.1,0,1398,0,1377,0C1356.5,0,1336,0,1315,0C1293.9,0,1273,0,1252,0C1231.3,0,1210,0,1190,0C1168.7,0,1148,0,1127,0C1106.1,0,1085,0,1064,0C1043.5,0,1023,0,1002,0C980.9,0,960,0,939,0C918.3,0,897,0,877,0C855.7,0,835,0,814,0C793,0,772,0,751,0C730.4,0,710,0,689,0C667.8,0,647,0,626,0C605.2,0,584,0,563,0C542.6,0,522,0,501,0C480,0,459,0,438,0C417.4,0,397,0,376,0C354.8,0,334,0,313,0C292.2,0,271,0,250,0C229.6,0,209,0,188,0C167,0,146,0,125,0C104.3,0,83,0,63,0C41.7,0,21,0,10,0L0,0Z"></path></svg>

<!-- Menu Section -->
<section id="menu" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5">Menu Kami</h2>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
            <?php
            $query = "SELECT m.*, k.nama AS kategori_nama, GROUP_CONCAT(g.url_gambar) AS gambar_urls
                      FROM menu_makanan m 
                      JOIN menu_kategori mk ON m.id = mk.menu_id 
                      JOIN kategori k ON mk.kategori_id = k.id
                      LEFT JOIN gambar_menu g ON m.id = g.menu_id
                      GROUP BY m.id";
            $result = mysqli_query($koneksi, $query);

            if (!$result) {
                die("Query error: " . mysqli_error($koneksi));
            }

            while ($row = mysqli_fetch_assoc($result)) {
                $kategori = strtolower(str_replace(' ', '-', $row['kategori_nama']));
                $gambar_urls = explode(',', $row['gambar_urls']);
                echo '<div class="col">';
                echo '<div class="card h-100" data-category="' . $kategori . '">';
                echo '<div id="carousel-' . $row['id'] . '" class="carousel slide" data-bs-ride="carousel">';
                echo '<div class="carousel-inner">';
                foreach ($gambar_urls as $index => $url) {
                    echo '<div class="carousel-item ' . ($index === 0 ? 'active' : '') . '">';
                    echo '<img src="' . $url . '" class="d-block w-100 card-img-top" alt="' . $row['nama'] . '">';
                    echo '</div>';
                }
                echo '</div>';
                echo '<button class="carousel-control-prev" type="button" data-bs-target="#carousel-' . $row['id'] . '" data-bs-slide="prev">';
                echo '<span class="carousel-control-prev-icon" aria-hidden="true"></span>';
                echo '<span class="visually-hidden">Previous</span>';
                echo '</button>';
                echo '<button class="carousel-control-next" type="button" data-bs-target="#carousel-' . $row['id'] . '" data-bs-slide="next">';
                echo '<span class="carousel-control-next-icon" aria-hidden="true"></span>';
                echo '<span class="visually-hidden">Next</span>';
                echo '</button>';
                echo '</div>';
                echo '<div class="card-body d-flex flex-column">';
                echo '<h5 class="card-title">' . $row['nama'] . '</h5>';
                echo '<p class="card-text flex-grow-1">' . $row['deskripsi'] . '</p>';
                echo '<p class="card-text"><strong>Harga: Rp ' . number_format($row['harga'], 0, ',', '.') . '</strong></p>';
                echo '<a href="https://wa.me/6281234567890?text=Saya%20ingin%20memesan%20' . urlencode($row['nama']) . '%20dengan%20harga%20Rp%20' . number_format($row['harga'], 0, ',', '.') . '" class="btn btn-success btn-sm mt-auto" target="_blank"><i class="fab fa-whatsapp"></i> Pesan via WhatsApp</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</section>

<style>
    .hero {
        background-color: #fff;
    }
    .hero h1 {
        color: #333;
    }
    .hero p {
        color: #555;
    }
    .card {
        transition: transform 0.3s ease;
    }
    .card:hover {
        transform: translateY(-5px);
    }
    .card-img-top {
        height: 300px;
        object-fit: cover;
    }
    .btn-success {
        background-color: #25D366;
        border-color: #25D366;
    }
    .btn-success:hover {
        background-color: #128C7E;
        border-color: #128C7E;
    }
    .carousel-control-prev,
    .carousel-control-next {
        width: 10%;
    }
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 50%;
        padding: 10px;
    }
    .carousel-item {
        height: 300px;
    }
    @media (max-width: 767px) {
        .card-img-top,
        .carousel-item {
            height: 350px;
        }
    }
    @media (max-width: 575px) {
        .card-img-top,
        .carousel-item {
            height: 300px;
        }
    }
</style>

<!--PEMBATAS BAWAH-->
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" style="filter: drop-shadow(0 -10px 3px rgba(0,0,0,0.5));"><path fill="#fff" fill-opacity="1" d="M0,288L10.4,240C20.9,192,42,96,63,90.7C83.5,85,104,171,125,213.3C146.1,256,167,256,188,218.7C208.7,181,230,107,250,112C271.3,117,292,203,313,218.7C333.9,235,355,181,376,133.3C396.5,85,417,43,438,32C459.1,21,480,43,501,69.3C521.7,96,543,128,563,128C584.3,128,605,96,626,106.7C647,117,668,171,689,176C709.6,181,730,139,751,117.3C772.2,96,793,96,814,80C834.8,64,856,32,877,48C897.4,64,918,128,939,133.3C960,139,981,85,1002,96C1022.6,107,1043,181,1064,186.7C1085.2,192,1106,128,1127,96C1147.8,64,1169,64,1190,96C1210.4,128,1231,192,1252,213.3C1273,235,1294,213,1315,192C1335.7,171,1357,149,1377,165.3C1398.3,181,1419,235,1430,261.3L1440,288L1440,320L1429.6,320C1419.1,320,1398,320,1377,320C1356.5,320,1336,320,1315,320C1293.9,320,1273,320,1252,320C1231.3,320,1210,320,1190,320C1168.7,320,1148,320,1127,320C1106.1,320,1085,320,1064,320C1043.5,320,1023,320,1002,320C980.9,320,960,320,939,320C918.3,320,897,320,877,320C855.7,320,835,320,814,320C793,320,772,320,751,320C730.4,320,710,320,689,320C667.8,320,647,320,626,320C605.2,320,584,320,563,320C542.6,320,522,320,501,320C480,320,459,320,438,320C417.4,320,397,320,376,320C354.8,320,334,320,313,320C292.2,320,271,320,250,320C229.6,320,209,320,188,320C167,320,146,320,125,320C104.3,320,83,320,63,320C41.7,320,21,320,10,320L0,320Z"></path></svg>


</body>
</html>
