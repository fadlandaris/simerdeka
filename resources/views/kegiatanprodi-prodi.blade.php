@extends("layouts.header")
@section("navbar")
  <!DOCTYPE html>
  <html lang="en" dir="ltr">

    <head>
      <meta charset="UTF-8" />
      <title>SIMERDEKA</title>
      <link href="{{ URL::to('css/kegiatan.css'); }}" rel="stylesheet">
      <link href="{{ URL::to('css/style-2.css'); }}" rel="stylesheet" />
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- Boxiocns CDN Link -->
      <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>

    <body>
      <div class="content">
        <div class="content-kegiatan">
          <div class="content-header">
            <h1 class="content-title">Kegiatan Prodi</h1>
          </div>
          <div class="content-flex">
            <div class="kegiatan">
              <img class="content-box-image" src="../img/kampusmerdeka.png">
              <div class="a">Laporan Akhir Studi
                <p>Kegiatan Kampus merdeka yang akan dilakukan mahasiswa</p>
              </div>
              <div class="b">
                <button class="button-68" id="tambah-1" role="button" onclick="openPopup('tambah-1', 'kurang-1');">Tambahkan</button>
                <button class="button-69 disabled" id="kurang-1" role="button" disabled onclick="openPopup2('tambah-1', 'kurang-1');">Hilangkan</button>
                <p class="sks"> Total SKS : 20</p>
              </div>
            </div>
            <div class="kegiatan">
              <img class="content-box-image" src="../img/kampusmerdeka.png">
              <div class="a">Bimbingan Akademis
                <p>Kegiatan Kampus merdeka yang akan dilakukan mahasiswa</p>
              </div>
              <div class="b">
                <button class="button-68" id="tambah-2" role="button" onclick="openPopup('tambah-2', 'kurang-2');">Tambahkan</button>
                <button class="button-69 disabled" id="kurang-2" role="button" disabled onclick="openPopup2('tambah-2', 'kurang-2');">Hilangkan</button>
                <p class="sks"> Total SKS : 20</p>
              </div>
            </div>
            <div class="kegiatan">
              <img class="content-box-image" src="../img/kampusmerdeka.png">
              <div class="a">Tesis
                <p>Kegiatan Kampus merdeka yang akan dilakukan mahasiswa</p>
              </div>
              <div class="b">
                <button class="button-68" id="tambah-3" role="button" onclick="openPopup('tambah-3', 'kurang-3');">Tambahkan</button>
                <button class="button-69 disabled" id="kurang-3" role="button" disabled onclick="openPopup2('tambah-3', 'kurang-3');">Hilangkan</button>
                <p class="sks"> Total SKS : 20</p>
              </div>
            </div>

            <div class="kegiatan">
              <img class="content-box-image" src="../img/kampusmerdeka.png">
              <div class="a">Disertasi
                <p>Kegiatan Kampus merdeka yang akan dilakukan mahasiswa</p>
              </div>
              <div class="b">
                <button class="button-68" id="tambah-4" role="button" onclick="openPopup('tambah-4', 'kurang-4');">Tambahkan</button>
                <button class="button-69 disabled" id="kurang-4" role="button" disabled onclick="openPopup2('tambah-4', 'kurang-4');">Hilangkan</button>
                <p class="sks"> Total SKS : 20</p>
              </div>
            </div>

            <div class="kegiatan">
              <img class="content-box-image" src="../img/kampusmerdeka.png">
              <div class="a">Skripsi
                <p>Kegiatan Kampus merdeka yang akan dilakukan mahasiswa</p>
              </div>
              <div class="b">
                <button class="button-68" id="tambah-5" role="button" onclick="openPopup('tambah-5', 'kurang-5');">Tambahkan</button>
                <button class="button-69 disabled" id="kurang-5" role="button" disabled onclick="openPopup2('tambah-5', 'kurang-5');">Hilangkan</button>
                <p class="sks"> Total SKS : 20</p>
              </div>
            </div>

            <div class="kegiatan">
              <img class="content-box-image" src="../img/kampusmerdeka.png">
              <div class="a">Tugas Akhir
                <p>Kegiatan Kampus merdeka yang akan dilakukan mahasiswa</p>
              </div>
              <div class="b">
                <button class="button-68" id="tambah-6" role="button" onclick="openPopup('tambah-6', 'kurang-6');">Tambahkan</button>
                <button class="button-69 disabled" id="kurang-6" role="button" disabled onclick="openPopup2('tambah-6', 'kurang-6');">Hilangkan</button>
                <p class="sks"> Total SKS : 20</p>
              </div>
            </div>

            <div class="kegiatan">
              <img class="content-box-image" src="../img/kampusmerdeka.png">
              <div class="a">Kerja Praktik / PKL
                <p>Kegiatan Kampus merdeka yang akan dilakukan mahasiswa</p>
              </div>
              <div class="b">
                <button class="button-68" id="tambah-7" role="button" onclick="openPopup('tambah-7', 'kurang-7');">Tambahkan</button>
                <button class="button-69 disabled" id="kurang-7" role="button" disabled onclick="openPopup2('tambah-7', 'kurang-7');">Hilangkan</button>
                <p class="sks"> Total SKS : 20</p>
              </div>
            </div>

            <div class="kegiatan">
              <img class="content-box-image" src="../img/kampusmerdeka.png">
              <div class="a">Kuliah Kerja Nyata
                <p>Kegiatan Kampus merdeka yang akan dilakukan mahasiswa</p>
              </div>
              <div class="b">
                <button class="button-68" id="tambah-8" role="button" onclick="openPopup('tambah-8', 'kurang-8');">Tambahkan</button>
                <button class="button-69 disabled" id="kurang-8" role="button" disabled onclick="openPopup2('tambah-8', 'kurang-8');">Hilangkan</button>
                <p class="sks"> Total SKS : 20</p>
              </div>
            </div>
            <div class="kegiatan">
              <img class="content-box-image" src="../img/kampusmerdeka.png">
              <div class="a">Program Kreativitas Mahasiswa
                <p>Kegiatan Kampus merdeka yang akan dilakukan mahasiswa</p>
              </div>
              <div class="b">
                <button class="button-68" id="tambah-9" role="button" onclick="openPopup('tambah-9', 'kurang-9');">Tambahkan</button>
                <button class="button-69 disabled" id="kurang-9" role="button" disabled onclick="openPopup2('tambah-9', 'kurang-9');">Hilangkan</button>
                <p class="sks"> Total SKS : 20</p>
              </div>
            </div>
            <div class="popup-notif" id="popup-notif">
              <h3>Kegiatan Berhasil Diperbarui</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="overlay" id="overlay">
        <div class="popup" id="popup">
          <img class="popup-img" src="../img/tick.png" alt="tick">
          <h2>Peringatan!</h2>
          <p>Apakah anda yakin menambahkan kegiatan ini?</p>
          <button id="js-notif" type="button" onclick="closePopup(); disableButton(tambahElement, kurangElement)">Ya</button>
          <button type="button" style="background-color: red" onclick="closePopup()">Tidak</button>
        </div>

        <div class="popup2" id="popup2">
          <img class="popup-img" src="../img/stop.png" alt="stop">
          <h2>Peringatan!</h2>
          <p>Apakah anda yakin menghapus kegiatan ini?</p>
          <button id="js-notif2" type="button" onclick="closePopup2(); enableButton(tambahElement, kurangElement)">Ya</button>
          <button type="button" style="background-color: red" onclick="closePopup2()">Tidak</button>
        </div>
      </div>

      <script>
        let popup = document.getElementById("popup");
        const overlay = document.getElementById("overlay");
        const notif = document.getElementById("notif");
        const closeBtn = document.getElementById("closeBtn");
        let tambahElement, kurangElement;

        function openPopup(tambah, kurang) {
          tambahElement = tambah;
          kurangElement = kurang;
          overlay.style.display = "flex";
          popup.classList.add("open-popup");
          overlay.addEventListener("click", (e) => {
            if (e.target === overlay) {
              closePopup();
            }
          });
        }

        function closePopup() {
          popup.classList.remove("open-popup");
          overlay.style.display = "none";
        }

        function openPopup2(tambah, kurang) {
          tambahElement = tambah;
          kurangElement = kurang;
          overlay.style.display = "flex";
          popup2.classList.add("open-popup");
          overlay.addEventListener("click", (e) => {
            if (e.target === overlay) {
              closePopup2();
            }
          });
        }

        function closePopup2() {
          popup2.classList.remove("open-popup");
          overlay.style.display = "none";
        }

        function tongolinNotif() {
          const popupNotif = document.getElementById("popup-notif");
          popupNotif.style.display = "block";
          setTimeout(() => {
            popupNotif.style.display = "none";
          }, 2000);
        }

        function disableButton(tambah, kurang) {
          document.getElementById(tambah).classList.add("disabled");
          document.getElementById(tambah).disabled = true;
          document.getElementById(kurang).classList.remove("disabled");
          document.getElementById(kurang).disabled = false;
        }

        function enableButton(tambah, kurang) {
          document.getElementById(tambah).classList.remove("disabled");
          document.getElementById(tambah).disabled = false;
          document.getElementById(kurang).classList.add("disabled");
          document.getElementById(kurang).disabled = true;
        }

        document.getElementById("js-notif").addEventListener("click", () => {
          tongolinNotif();
        });

        document.getElementById("js-notif2").addEventListener("click", () => {
          tongolinNotif();
        });

        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
          arrow[i].addEventListener("click", (e) => {
            let arrowParent = e.target.parentElement
              .parentElement; //selecting main parent of arrow
            arrowParent.classList.toggle("showMenu");
          });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        sidebarBtn.addEventListener("click", () => {
          sidebar.classList.toggle("close");
        });
      </script>
    @endsection
  </body>

</html>
