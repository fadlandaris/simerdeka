{{-- @dd($data->nama) --}}
@extends("layouts.header")
@section("navbar")
  <!DOCTYPE html>
  <html lang="en" dir="ltr">

    <head>
      <meta charset="UTF-8" />
      <title>SIMERDEKA</title>
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
            <div class="content-header">
              <h1 class="content-title">Pendaftar Kegiatan</h1>
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
                    <th>Jurusan - Angkatan</th>
                    <th>No. HP</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  
                  @foreach ($mhs as $data)
                  <tr>
                    <td>{{ $loop->iteration}}</td>
                    <td>{{ $data->nama }}</td>
                    <td>{{ $data->nama_kegiatan }}</td>
                    <td>{{ $data->nim }}</td>
                    <td>{{ $data->nama_prodi }}</td>
                    <td>{{ $data->whatsapp }}</td>
                    <td>{{ $data->status }}</td>   
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </section>

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
      </script>
    @endsection
  </body>

</html>
