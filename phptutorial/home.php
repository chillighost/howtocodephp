<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
    var kondisi = 1;
    $(document).on("click",".cardnya",function(){
      if(kondisi == 1){
        var html = '<div style="border-radius: 15px; box-shadow:0px 3px 10px #bfcbde;float:left; width:152px;height:192px; margin-right:32px;" class="cardnya">'+
        '<div class="row">'+
          '<img src="IconDealer.png" style="margin-left:30px; margin-right:30px; margin-top:35px;">'+
        '</div>'+
        '<div class="row" style="margin-top:15px; margin-left: 25px; font-size:20px;"> Dealership & Workshop'+

        '</div>'+
        '</div>';
        $("#lokasi").append(html);
        kondisi = 0
      } else{
        timer=setTimeout(function validate() {
          kondisi = 1;
        },3000);
      }


    })
  </script>
  <div id="lokasi" style="width:800px">
    <div style="border-radius: 15px; box-shadow:0px 3px 10px #bfcbde; width:152px;height:192px; margin-right:32px; float:left;" class="cardnya">
      <div class="row">
        <img src="IconDealer.png" style="margin-left:30px; margin-right:30px; margin-top:35px;">
      </div>
      <div class="row" style="margin-top:15px; margin-left: 25px; font-size:20px;">
        Dealership & Workshop
      </div>
    </div>
  </div>

</html>
