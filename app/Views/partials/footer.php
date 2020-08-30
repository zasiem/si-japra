  <p class="text-center" style="color:transparent;">Dibuat oleh programmer yang bercita-cita menjadi selebgram kondang - <a href="https://instagram.com/erzaputra_" style="color:transparent;" target="_blank">ERZ</a></p>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <!-- datatables -->
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

  <!-- owl carousel -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      $('#datatable').DataTable();
      $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 30,
        items: 3,
        nav: false,
        dots: false,
        responsiveClass: true,
        autoplay: 2500,
        slideSpeed: 300,
        paginationSpeed: 500,
        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 2,
          },
          1024: {
            items: 3,
          },
          1224: {
            items: 3
          }
        }
      });
    });
  </script>

  </body>

  </html>