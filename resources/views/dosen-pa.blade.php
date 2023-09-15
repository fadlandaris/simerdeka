@extends("layouts.header-pa")
@section("navbar-prodi")
  <!DOCTYPE html>
  <html lang="en" dir="ltr">

    <head>
      <meta charset="UTF-8" />
      <title>SIMERDEKA</title>
      <link href="{{ URL::to("css/style-2.css") }}" rel="stylesheet" />
      <link href="{{ URL::to("css/dosen-pa.css") }}" rel="stylesheet">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com" rel="preconnect">
      <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
      <link href="{{ URL::to("css/tabel.css") }}" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap" rel="stylesheet">
      <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>

    <body>
      <section>
        <div class="content">
          <div class="content-box">
            <div class="tabel">
              <input class="search-bar" id="myInput" type="text" placeholder="Cari nama..." onkeydown="searchTable()" />
              <table id="myTable" style="width: 100%;">
                <thead>
                  <tr>
                    <th style="width: 10px;">No</th>
                    <th>Nama <br>Mahasiswa</th>
                    <th>Nama <br>Kegiatan</th>
                    <th>NIM</th>
                    <th>Jurusan - Angkatan</th>
                    <th>No. HP</th>
                    <th>Status</th>
                    <th>Persetujuan</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Yuda Nadhika</td>
                    <td>Skripsi</td>
                    <td>21120121130058</td>
                    <td>Teknik Komputer 2021</td>
                    <td>0129303123</td>
                    <td class="status1">Belum Selesai</td>
                    <td> <button class="button-25" id="button1" onclick="openPopup('.status1', 'button1');">Setujui</button></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Raoul Habonaran</td>
                    <td>Tesis</td>
                    <td>21120121130053</td>
                    <td>Teknik Komputer 2021</td>
                    <td>1293012993</td>
                    <td class="status2">Belum Selesai</td>
                    <td> <button class="button-25" id="button2" onclick="openPopup('.status2', 'button2');">Setujui</button></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Muhammad Fadlan Daris</td>
                    <td>Studi Independen</td>
                    <td>21120121140054</td>
                    <td>Teknik Komputer 2021</td>
                    <td>1093012293</td>
                    <td class="status3">Belum Selesai</td>
                    <td> <button class="button-25" id="button3" onclick="openPopup('.status3', 'button3');">Setujui</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="popup" id="popup">
          <img class="popup-img" src="../img/tick.png" alt="tick">
          <h2>Peringatan!</h2>
          <p>Setujui Mahasiswa untuk melakukan kegiatan.</p>
          <button type="button" onclick="closePopup(); updateStatus(statusElem, buttonElem)">Ya</button>
          <button type="button" style="background-color: red" onclick="closePopup()">Tidak</button>
        </div>
        <div class="popup2" id="popup2">
          <img class="popup-img" src="../img/stop.png" alt="tick">
          <h2>Peringatan!</h2>
          <p>Batalkan Mahasiswa untuk melakukan kegiatan.</p>
          <button type="button" onclick="closePopup2(); updateStatus(statusElem, buttonElem)">Ya</button>
          <button type="button" style="background-color: red" onclick="closePopup2()">Tidak</button>
        </div>
      </section>

      <script>
        function searchTable() {
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");

          // Loop through all table rows, and hide those that don't match the search query
          for (let i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1]; // Change the index to the column you want to search
            if (td) {
              txtValue = td.textContent || td.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            }
          }
        }



        let statusElem, buttonElem;

        function updateStatus(status, button) {
          if (document.querySelector(status).innerHTML === "Belum Selesai") {
            document.querySelector(status).innerHTML = "Selesai";
            document.getElementById(button).innerHTML = "Batalkan";
            document.getElementById(button).classList.add("button-26");
          } else {
            document.querySelector(status).innerHTML = "Belum Selesai";
            document.getElementById(button).innerHTML = "Setujui";
            document.getElementById(button).classList.remove("button-26");
          }

        }

        function openPopup(status, button) {
          statusElem = status;
          buttonElem = button;

          if (document.querySelector(status).innerHTML === "Belum Selesai") {
            popup.classList.add("open-popup");
          } else {
            popup2.classList.add("open-popup");
          }
        }

        function closePopup() {
          popup.classList.remove("open-popup");
        }

        function closePopup2() {
          popup2.classList.remove("open-popup");
        }

        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
          arrow[i].addEventListener("click", (e) => {
            let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
            arrowParent.classList.toggle("showMenu");
          });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", () => {
          sidebar.classList.toggle("close");
        });
      </script>
    @endsection
  </body>

</html>
