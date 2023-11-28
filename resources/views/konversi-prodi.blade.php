@extends("layouts.header")
@section("navbar")
  <!DOCTYPE html>
  <html lang="en" dir="ltr">

    <head>
      <meta charset="UTF-8" />
      <title>SIMERDEKA</title>
      <link href="{{ URL::to("css/formmatakuliah.css") }}" rel="stylesheet">
      <link href="{{ URL::to("css/style-2.css") }}" rel="stylesheet" />
      <link href="{{ URL::to("css/tabel.css") }}" rel="stylesheet">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com" rel="preconnect">
      <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
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
            <div class="content-header">
              <h1 class="content-title">Konversi Mata Kuliah</h1>
            </div>
            <div class="tabel">
              <input class="search-bar" id="myInput" type="text" placeholder="Cari nama..." onkeydown="searchTable()" />
              <table id="myTable" style="width: 100%;">
                <thead>
                  <tr>
                    <th style="width: 10px;">No</th>
                    <th>Nama <br>Mahasiswa</th>
                    <th>Nama <br>Kegiatan</th>
                    <th>NIM</th>
                    <th>Nama Prodi</th>
                    <th>No. HP</th>
                    <th>Konversi SKS </th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="row-1">
                    <td>1</td>
                    <td class="js-nama">Yuda Nadhika</td>
                    <td class="js-kegiatan">Skripsi</td>
                    <td class="js-nim">21120121130058</td>
                    <td class="js-prodi">Ilmu Komputer</td>
                    <td class="js-nomorhp">081586900715</td>
                    <td><button class="js-open-popup-btn button-1" onclick="copyText(1)">Konversi</button></td>
                  </tr>
                  <tr class="row-2">
                    <td>2</td>
                    <td class="js-nama">Muhammad Fadlan Daris</td>
                    <td class="js-kegiatan">Selobe</td>
                    <td class="js-nim">2112012110981</td>
                    <td class="js-prodi">Ilmu Komunikasi</td>
                    <td class="js-nomorhp">081586912793</td>
                    <td><button class="js-open-popup-btn button-1" onclick="copyText(2)">Konversi</button></td>
                  </tr>
                  <tr class="row-3">
                    <td>3</td>
                    <td class="js-nama">Raoul Habonaran</td>
                    <td class="js-kegiatan">Kerja Praktik</td>
                    <td class="js-nim">21120122362342</td>
                    <td class="js-prodi">Peternakan</td>
                    <td class="js-nomorhp">0812381381395</td>
                    <td><button class="js-open-popup-btn button-1" onclick="copyText(3)">Konversi</button></td>
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
            <input class="js-target-kegiatan" type="text" placeholder="" disabled />
          </div>
          <div class="form-group">
            <label for="email">Nama Mahasiswa:</label>
            <input class="js-target-nama" type="text" placeholder="" disabled />
          </div>
          <div class="form-group">
            <label for="email">Nim:</label>
            <input class="js-target-nim" type="text" placeholder="" disabled />
          </div>
          <div class="form-group">
            <label for="email">Prodi:</label>
            <input class="js-target-prodi" type="text" placeholder="" disabled required />
          </div>
          <div class="form-group">
            <label for="email">No Handphone:</label>
            <input class="js-target-nomorhp" type="text" placeholder="" disabled required />
          </div>

          <div class="matakuliah">
            <select class="js-matakuliah-input selects" id="arrayDropdown"></select>

            <button class="button-1" onclick="tambahkanMatakuliah()">
              Tambahkan
            </button>
          </div>
          <div class="container-matakuliah">
            <div class="js-generate-html">
              <table id="matkulTable" style="width: 100%">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Mata Kuliah</th>
                    <th>SKS</th>
                  </tr>
                </thead>
                <tbody id="table-body">
                  <tr></tr>
                </tbody>
              </table>
            </div>
          </div>

          <div class="form-group">
            <span><input type="submit" value="Tambahkan Konversi SKS" /></span>
          </div>

        </div>
      </div>

      <script>
        let selectorPopup;

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
        sidebarBtn.addEventListener("click", () => {
          sidebar.classList.toggle("close");
        });

        let data = [];

        function renderMatakuliah(type) {
          let dataMatkulHTML = "";

          for (let i = 0; i < data.length; i++) {
            const html = `
              <tr>
                <td>${i + 1}</td>
                <td>${data[i]}</td>
                <td><button 
                  class="delete-matkul-button"
                  onclick="
                    hapusMatakuliah(${i});
                    renderMatakuliah(${type});
                  "
                >
                  Delete
                </button></td>
              </tr>`;

            dataMatkulHTML += html;
          }
          document.getElementById("table-body").innerHTML = dataMatkulHTML;
        }

        function hapusMatakuliah(i) {
          const name = data[i];
          data.splice(i, 1);
          document.querySelectorAll(".js-matakuliah-input option").forEach(opt => {
            if (opt.value === name) {
              opt.disabled = false;
              document.getElementById("none").selected = true;
            }
          });
        }

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

          renderMatakuliah(selectorPopup);
        }

        var arr = ["Dasar Komputer Pemrograman", "Pemrograman Berorientasi Objek", "Rekayasa Perangkat Lunak", "Pemrograman Perangkat Bergerak"];
        var options = `<option value="none" id="none" selected disabled hidden>Pilih kegiatan</option>`;
        arr.map((op, i) => {
          options += `<option value="${op}" id="${i}">${op}</option>`;
        });
        document.getElementById("arrayDropdown").innerHTML = options;

        function disabledSelect(i) {
          document.getElementById(i).disabled = true;
        }


        const openPopupButtons = document.querySelectorAll('.js-open-popup-btn');
        const overlay = document.getElementById("overlay");
        const popup = document.getElementById("popup");
        const closeBtn = document.getElementById("closeBtn");

        // Add a click event listener to each button
        openPopupButtons.forEach((button) => {
          button.addEventListener("click", () => {
            overlay.style.display = "block";
            popup.style.display = "block";
          });
        });

        closeBtn.addEventListener("click", () => {
          overlay.style.display = "none";
          popup.style.display = "none";
          data = [];
          document.querySelectorAll(".js-matakuliah-input option").forEach(opt => {
            opt.disabled = false;
            document.getElementById("none").selected = true;
          });
        });

        // Close the popup when clicking outside the form
          overlay.addEventListener("click", () => {
            overlay.style.display = "none";
            popup.style.display = "none";
            data = [];
            document.querySelectorAll(".js-matakuliah-input option").forEach(opt => {
              opt.disabled = false;
              document.getElementById("none").selected = true;
            });
          });

        function copyText(numbers) {
          selectorPopup = numbers;
          const rowSelector = `.row-${numbers}`;
          const row = document.querySelector(rowSelector);
          const popup = document.getElementById("popup");

          if (row && popup) {

            let targetNamaElem = popup.querySelector('.js-target-nama');
            let targetKegiatanElem = popup.querySelector('.js-target-kegiatan');
            let targetNimElem = popup.querySelector('.js-target-nim');
            let targetProdiElem = popup.querySelector('.js-target-prodi');
            let targetNomorhpElem = popup.querySelector('.js-target-nomorhp');

            let namaElem = row.querySelector('.js-nama').innerHTML;
            let kegiatanElem = row.querySelector('.js-kegiatan').innerHTML;
            let nimElem = row.querySelector('.js-nim').innerHTML;
            let prodiElem = row.querySelector('.js-prodi').innerHTML;
            let nomorhpElem = row.querySelector('.js-nomorhp').innerHTML;

            targetNamaElem.placeholder = namaElem;
            targetKegiatanElem.placeholder = kegiatanElem;
            targetNimElem.placeholder = nimElem;
            targetProdiElem.placeholder = prodiElem;
            targetNomorhpElem.placeholder = nomorhpElem;
          }
          renderMatakuliah(numbers);
        }
      </script>
    @endsection
  </body>

</html>
