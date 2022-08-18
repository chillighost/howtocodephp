<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
  $(function () {
    $(document).ready(function(){
      $.ajax({
        type: "GET",
        dataType: 'JSON',
        url: 'https://api.themoviedb.org/3/discover/movie?api_key=b8ace249572320b7e1df3b404d403ee3&language=en-',
        success: function( data, textStatus, jQxhr ){
          data.results.forEach(function(item, index){
            $('#tbodynya').append(`
            <tr>
              <td>${index + 1}</td>
              <td><img src="https://image.tmdb.org/t/p/w500/${item['backdrop_path']}" class="mb-3" alt="" width="80px" height="auto"></td>
              <td>${item['original_title']}</td>
              <td style="display:flex;align-items:center;">Sinopsis Film ${item['original_title']} <img src="info.svg" style="margin-left:10px;" onclick="tampilkanmodal('${item['overview']}')"> </td>
            </tr>
            `);
          });

        },
      });

    })
  })
  function tampilkanmodal(isiSinopsis){
   $('#modalnya').modal('show');
   $('#sinopsisnya').html(isiSinopsis);
  }
</script>
  <table style="border: 1px solid #000000; width:100%;" class="table table-striped">
    <thead>
      <tr >
        <th style="width:5%; font-size:20px;">No</th>
        <th style="width:20%; font-size:20px;">Poster</th>
        <th style="width:20%;font-size:20px;">Judul Film</th>
        <th style="width:40%;font-size:20px;">Sinopsis</th>
      </tr>
    </thead>
    <tbody id="tbodynya">

    </tbody>
  </table>

  <div class="modal fade" id="modalnya" tabindex="-1" role="dialog" aria-labelledby="modalnyaLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document" >
      <div class="modal-content" style="background:#c7c3c1;">
        <center>
          <div class="modal-body">
            <div id="sinopsisnya"></div>
            <br>
            <button type="button" class="btn btn-secondary rounded-pill" style="width: 100px;background:#5c5c8A; color:#FFFFFF; border-radius:20px;" data-dismiss="modal">Tutup</button>
          </div>
        </center>
      </div>
    </div>
  </div>
</html>
