@extends("layouts.header")
@section("navbar")
  <!DOCTYPE html>
  <html lang="en" dir="ltr">

    <head>
      <meta charset="UTF-8" />
      <title>SIMERDEKA</title>
      <link href="{{ URL::to("css/formmatakuliah.css") }}" rel="stylesheet">
      <link href="{{ URL::to("css/style-2.css") }}" rel="stylesheet" />
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
                    <th>Konversi SKS </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Yuda Nadhika</td>
                    <td>Skripsi</td>
                    <td>21120121130058</td>
                    <td>Teknik Komputer 2021</td>
                    <td>081586900715</td>
                    <td><button class="button-1" id="openPopupBtn">Konversi</button></td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>Raoul Habonaran</td>
                    <td>Tesis</td>
                    <td>21120121130053</td>
                    <td>Teknik Komputer 2021</td>
                    <td>1293012993</td>
                    <td><button class="button-1" id="">Konversi Mata Kuliah</button></td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>Muhammad Fadlan Daris</td>
                    <td>Studi Independen</td>
                    <td>21120121140054</td>
                    <td>Teknik Komputer 2021</td>
                    <td>1093012293</td>
                    <td><button class="button-1" id="">Konversi Mata Kuliah</button></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>
      <div class="matakuliahPopup">
        <div class="overlay" id="overlay"></div>

        <div class="popup" id="popup">
          <span class="close-btn" id="closeBtn">&times;</span>
          <h2>Konversi Mata Kuliah</h2>
          <div class="form-group">
            <label for="username">Kegiatan:</label>
            <input id="username" name="username" type="text" placeholder="Kerja Praktik" disabled required />
          </div>
          <div class="form-group">
            <label for="email">Nama Mahasiswa:</label>
            <input id="email" name="email" type="email" placeholder="Bintang Mahesa Pangestu" disabled required />
          </div>
          <div class="form-group">
            <label for="email">Alamat Rumah Tinggal:</label>
            <input id="email" name="email" type="email" placeholder="Jl. Jati Pakis no.9, Jati, Pulo Gadung, Jakarta Timur" disabled required />
          </div>
          <div class="form-group">
            <label for="email">No Handphone:</label>
            <input id="email" name="email" type="email" placeholder="081586900715" disabled required />
          </div>

          <div class="matakuliah">
            <select class="js-matakuliah-input selects" id="arrayDropdown"></select>

            <button class="button-1" onclick="tambahkanMatakuliah()">
              Tambahkan
            </button>
          </div>
          <div class="container-matakuliah">
            <h4 style="background-color: rgb(220, 220, 220); padding: 10px; margin-bottom: 10px">Mata Kuliah yang Dipilih</h4>
            <div class="js-generate-html"></div>
          </div>

          <div class="form-group">
            <input type="submit" value="Tambahkan Konversi SKS" />
          </div>

        </div>
      </div>

      <script>
        function searchTable() {
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");

          // Loop through all table rows, and hide those that don't match the search query
          for (i = 0; i < tr.length; i++) {
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

        function renderMatakuliah() {
          let todoListHTML = "";

          for (let i = 0; i < data.length; i++) {
            const matakuliah = data[i];
            const html = `<p>${matakuliah}<p>`;

            todoListHTML += html;
            localStorage.setItem("html", "html.value"); //penting
          }
          document.querySelector(".js-generate-html").innerHTML = todoListHTML;
        }

        const data = [];

        function tambahkanMatakuliah() {
          const inputElement = document.querySelector(".js-matakuliah-input");
          const name = inputElement.value;
          if (name !== "none") {
            data.push(name);
          }
          document.querySelectorAll(".js-matakuliah-input option").forEach(opt => {
            if (opt.value === name) {
              opt.disabled = true;
              document.getElementById("none").selected = true;
            }
          });

          renderMatakuliah();
        }

        var arr = ["Dasar Komputer Pemrograman", "Pemrograman Berorientasi Objek", "Rekayasa Perangkat Lunak", "Pemrograman Perangkat Bergerak", ""];
        var options = `<option value="none" id="none" selected disabled hidden>Pilih kegiatan</option>`;
        arr.map((op, i) => {
          options += `<option value="${op}" id="${i}">${op}</option>`;
        });
        document.getElementById("arrayDropdown").innerHTML = options;

        function disabledSelect(i) {
          document.getElementById(i).disabled = true;
        }

        const openPopupBtn = document.getElementById("openPopupBtn");
        const overlay = document.getElementById("overlay");
        const popup = document.getElementById("popup");
        const closeBtn = document.getElementById("closeBtn");

        openPopupBtn.addEventListener("click", () => {
          overlay.style.display = "block";
          popup.style.display = "block";
        });

        closeBtn.addEventListener("click", () => {
          overlay.style.display = "none";
          popup.style.display = "none";
        });

        // Close the popup when clicking outside the form
        overlay.addEventListener("click", () => {
          overlay.style.display = "none";
          popup.style.display = "none";
        });

        // function sksFunction() {
        //   document.getElementById("myDropdown").classList.toggle("show");
        // }

        // function filterFunction() {
        //   var input, filter, ul, li, a, i;
        //   input = document.getElementById("myInput");
        //   filter = input.value.toUpperCase();
        //   div = document.getElementById("myDropdown");
        //   a = div.getElementsByTagName("a");
        //   for (i = 0; i < a.length; i++) {
        //     txtValue = a[i].textContent || a[i].innerText;
        //     if (txtValue.toUpperCase().indexOf(filter) > -1) {
        //       a[i].style.display = "";
        //     } else {
        //       a[i].style.display = "none";
        //     }
        //   }
        // }
      </script>
    @endsection
  </body>

</html>
