<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
      body {
        background-color: rgb(18, 18, 18);
      }
      .card-img-top:hover {
        transform: scale(0.9);
        cursor: zoom-in;
      }
      .navbar {
        background: rgb(18, 18, 18);
          position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 1000; /* Pastikan navbar muncul di atas konten lain */
        transition: top 0.3s; /* Animasi saat navbar bergerak */
      }

      .navbar.sticky {
        top: -100px; /* Geser navbar ke atas saat digulir, misalnya ke tinggi navbar */
      }

      .card {
        background: rgb(18, 18, 18);
        border: none;
        color: rgb(232, 232, 232);
      }
      .card-img-container {
        width: 100%;
        height: 570px;
        overflow: hidden;
        border-radius: 6px;
      }
      .card-img-container-1 {
        width: 100%;
        height: 730px;
        overflow: hidden;
        border-radius: 6px;
      }
      .card-img-container img {
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
    </style>
  </head>


  <body>
    <!-- Navbar -->
<nav class="navbar">
  <div class="container">
    <a class="navbar-brand text-light" href="index.html">Anime</a>
    <button
      class="navbar-toggler"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active text-light" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-light" href="#">Product</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


    <!-- End Of Navbar -->
    {{-- Header --}}

<div class="container mt-3">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
        <div class="card-img-container-1">
      <img src="https://img1.hotstarext.com/image/upload/f_auto/sources/r1/cms/prod/7767/1657767-h-61e9ebc76c77" class="d-block w-100" alt="...">
    </div>
    </div>
    <div class="carousel-item" data-bs-interval="2000">
        <div class="card-img-container-1">
      <img src="https://imgsrv.crunchyroll.com/cdn-cgi/image/format=auto,fit=contain,width=1200,height=675,quality=85/catalog/crunchyroll/efec45c8a6e22eca462728e9347992d8.jpe" class="d-block w-100" alt="...">
    </div>
    </div>
    <div class="carousel-item">
        <div class="card-img-container-1">
      <img src="https://m.media-amazon.com/images/S/pv-target-images/0429f0f5cabdf696ceadec8013ca3279cd54c577f40f00b7774f8c3ffe77348b.jpg" class="d-block w-100" alt="...">
    </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

    {{-- End Header --}}
{{-- Content --}}
<div class="container mt-3">
  <div class="row row-cols-1 row-cols-md-3 g-4" id="cardContainer">
        <!-- Existing cards go here -->
        <div class="col">
          <div class="card h-100">
            <a href="https://www.bilibili.tv/id/video/2047089010">
              <div class="card-img-container">
                <img
                  src="https://cdn0-production-images-kly.akamaized.net/wQd3McgbupEseI9b6XQAjiFfBF8=/800x1066/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3998604/original/077948100_1650275092-MV5BZmY2MDYxMjAtNDFmNS00YmY5LWJhMTItMDZkZGNkMjg5ODJiXkEyXkFqcGdeQXVyODMyNTM0MjM_._V1_.jpg"
                  class="card-img-top"
                  alt="..."
                />
              </div>
            </a>
            <div class="card-body">
              <h5 class="card-title">Spy X Family</h5>
              <p class="card-text">
                Anya Forger merupakan anak angkat dari Loid Forger dan juga Yor
                Briar dalam serial Spy x Family.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <a href="https://www.youtube.com/watch?v=xqZUtkRyVwM&list=PLPanbgyToztbA5dorY4gAfBcT5yhgMpDY&pp=iAQB">
              <div class="card-img-container">
                <img
                  src="https://m.media-amazon.com/images/M/MV5BOTE4OGI2NzYtNzE4MC00NGJlLTgwZTItN2Y3OTljMzFhODllXkEyXkFqcGdeQXVyNjA5MDIyMzU@._V1_.jpg"
                  class="card-img-top"
                  alt="..."
                />
              </div>
            </a>
            <div class="card-body">
              <h5 class="card-title">The New Gate</h5>
              <p class="card-text">
                Dimana akan menceritakan game online "The New Gate" telah mengubah penampilannya
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <a href="https://www.youtube.com/watch?v=6SWMj8cWBEo&list=PLPanbgyToztZaugoWl1EsZA-GTScAga1i&pp=iAQB">
              <div class="card-img-container">
                <img
                  src="https://m.media-amazon.com/images/M/MV5BMjg5NGQ0ZjMtODk0MC00MmNlLWJmZTUtZDUwNmY1ZTc3ODk0XkEyXkFqcGdeQXVyMTQ3MjMyMTYz._V1_.jpg"
                  class="card-img-top"
                  alt="..."
                />
              </div>
            </a>
            <div class="card-body">
              <h5 class="card-title">Date A Live</h5>
              <p class="card-text">
                Berkisah mengenai seorang pemuda bernama Itsuka Shidou
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <a href="https://www.youtube.com/watch?v=cUZHQF71y0w&list=PLPanbgyToztZVZgaofBHOgWb624juQTQ8&pp=iAQB">
              <div class="card-img-container">
                <img
                  src="https://m.media-amazon.com/images/M/MV5BMTlhNmE5OGMtMWU0ZC00YTRiLWI5YWUtOWM2MmFlZTFkNWVkXkEyXkFqcGdeQXVyMzgxODM4NjM@._V1_FMjpg_UX1000_.jpg"
                  class="card-img-top"
                  alt="..."
                />
              </div>
            </a>
            <div class="card-body">
              <h5 class="card-title">I Was Reincarnated</h5>
              <p class="card-text">
                Bersama ingatan masa lalunya, LLoyd dilahirkan kembali dengan garis keturunan dan bakat yang sempurna.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <a href="https://www.youtube.com/watch?v=GW-3XmaamY0&list=PLPanbgyToztaF7MtQR-ZWL9SmG5WzKZ91&pp=iAQB">
              <div class="card-img-container">
                <img
                  src="https://m.media-amazon.com/images/M/MV5BZTY3MTI3MzEtOWZlYy00YmI2LWE1ZTEtYjI5ZTZhMTYzZWUyXkEyXkFqcGdeQXVyMzgxODM4NjM@._V1_FMjpg_UX1000_.jpg"
                  class="card-img-top"
                  alt="..."
                />
              </div>
            </a>
            <div class="card-body">
              <h5 class="card-title">My Instant Death Ability</h5>
              <p class="card-text">
                Menceritakan Takato Yogiri adalah seorang siswa SMA yang menyukai pemainan dan tidur siang.
              </p>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <a href="https://anoboy.io/anime/remonster/">
              <div class="card-img-container">
                <img
                  src="https://api.duniagames.co.id/api/content/upload/file/18639275071709271590.jpg"
                  class="card-img-top"
                  alt="..."
                />
              </div>
            </a>
            <div class="card-body">
              <h5 class="card-title">Re:Monster</h5>
              <p class="card-text">
                Seorang pria biasa yang kini dikenal sebagai Rou, goblin berkekuatan esper setelah dirinya meninggal dunia.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
{{-- End Content --}}

    <script>
      window.onload = function () {
        const newEntry = JSON.parse(localStorage.getItem("newEntry"));

        if (newEntry) {
          const cardContainer = document.getElementById("cardContainer");

          const newCard = document.createElement("div");
          newCard.className = "col";
          newCard.innerHTML = `
                    <div class="card h-100">
                        <a href="${newEntry.videoURL}">
                            <div class="card-img-container">
                                <img src="${newEntry.imageURL}" class="card-img-top" alt="...">
                            </div>
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">New Entry</h5>
                            <p class="card-text">${newEntry.description}</p>
                        </div>
                    </div>
                `;

          cardContainer.appendChild(newCard);

          // Clear the localStorage
          localStorage.removeItem("newEntry");
        }
      };
    </script>
    <script>
        $(document).ready(function() {
  var prevScrollpos = window.pageYOffset;
  window.onscroll = function() {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
      $(".navbar").removeClass("sticky");
    } else {
      $(".navbar").addClass("sticky");
    }
    prevScrollpos = currentScrollPos;
  }
});

    </script>
  </body>
</html>
