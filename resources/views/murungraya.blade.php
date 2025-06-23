<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Visi Misi | Sejarah | Peta</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap"
      rel="stylesheet"
    />
    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
  </head>
  <body>
    <section id="peta" class="section">
      <div class="content-wrapper">
        <h2>Peta Wilayah</h2>
        <div class="map-container">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2042786.6218839684!2d112.85137413654955!3d-0.033927158878316016!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df8ab1ef025bd0f%3A0xb90919241272d1db!2sMurung%20Raya%20Regency%2C%20Central%20Kalimantan!5e0!3m2!1sen!2sid!4v1750667103716!5m2!1sen!2sid"
            width="600"
            height="450"
            style="border: 0"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
    </section>
    <section id="visi-misi" class="section">
      <div class="content-wrapper">
        <h2>Visi & Misi</h2>
        <p>
          <strong>Visi:</strong> Menjadikan Murung Raya yang Maju, Mandiri, dan
          Sejahtera.
        </p>
        <p><strong>Misi:</strong></p>
        <ul>
          <li>
            Meningkatkan kualitas penduduk agar memiliki daya saing tinggi,
          </li>
          <li>
            Meningkatkan ketersediaan prasarana (infrastruktur fisik) untuk
            kepentingan pelayanan publik,
          </li>
          <li>
            Melaksanakan pembangunan ekonomi dengan pengelolaan sumber daya alam
            secara bijaksana untuk mencapai kemakmuran,
          </li>
          <li>
            Melakukan penyelarasan pemanfaatan ruang dan pengembangan wilayah,
          </li>
          <li>
            Melaksanakan prinsip-prinsip tata kelola Kepemerintahan yang baik
            dalam rangka meningkatkan percepatan pembangunan daerah,
          </li>
          <li>
            Melaksanakan pembangunan sosial-budaya, politik dan hukum agar
            terwujud kehidupan sosial budaya masyarakat yang harmonis,
            bermartabat dan meningkatnya kesadaran serta partisipasi politik
            masyarakat,
          </li>
          <li>
            Melaksanakan pembangunan berkelanjutan agar terwujud kondisi
            geomorfologi yang baik dan kondisi lingkungan hidup yang lestari.
          </li>
        </ul>
      </div>
    </section>
    <section id="sejarah" class="section">
      <div class="content-wrapper">
        <h2>Sejarah</h2>
        <p>
          Kabupaten Murung Raya adalah salah satu kabupaten di Provinsi
          Kalimantan Tengah yang berdiri sejak tahun 2002. Kabupaten ini
          merupakan pemekaran dari Kabupaten Barito Utara dan memiliki kekayaan
          alam serta budaya lokal yang sangat beragam.
        </p>
        <p>
          Wilayah ini awalnya merupakan bagian dari Distrik Barito Hulu di masa
          pemerintahan kolonial, kemudian menjadi wilayah administratif dengan
          status persiapan daerah tingkat II di Kalimantan Tengah. Dengan
          ibukota di Puruk Cahu, Murung Raya tumbuh menjadi wilayah yang
          memiliki potensi besar dalam sektor pertambangan, kehutanan,
          pertanian, dan pariwisata.
        </p>
        <p>
          Sejak diresmikan, Murung Raya terus berkembang sebagai kabupaten yang
          kaya akan sumber daya alam serta keanekaragaman budaya lokal.
        </p>
      </div>
    </section>
    <button id="scrollTopBtn" title="Kembali ke atas">↑</button>
    <script>
      // Animasi saat konten muncul
      const wrappers = document.querySelectorAll(".content-wrapper");
      const observer = new IntersectionObserver(
        (entries) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              entry.target.classList.add("show");
            }
          });
        },
        { threshold: 0.15 }
      );
      wrappers.forEach((wrapper) => observer.observe(wrapper));
      // Tombol scroll ke atas
      const scrollTopBtn = document.getElementById("scrollTopBtn");
      window.addEventListener("scroll", () => {
        if (window.scrollY > 400) {
          scrollTopBtn.style.display = "block";
        } else {
          scrollTopBtn.style.display = "none";
        }
      });
      scrollTopBtn.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
      });
    </script>
  </body>
</html>
