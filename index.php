<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css">

    <title>Teste GingaOne</title>
  </head>
  <body>
    <div class="container">

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <h3>Integração Beers</h3>

          <div class="col-md-6 col-sm-6 col-xs-6">

          <form name="form_api" action="javascript:void(0);" class="form-horizontal">
              
              <div class="form-group">
              <input type="text" name="beer_name" class="form-control">
              </div>

          </form>
          <button id="btn_search" class="btn_search">Pesquisar</button>
          </div>



        </div>
      </div>

      <!-- row -->
      <div class="row list_api">

      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>

    <script type="text/javascript">
    

    

    $(document).on('click','.btn_search', function(){


        getElements();


    })
      

      function getElements(){

          $.ajax({
            url: 'api.php',
            dataType: 'json',
            type: 'post',
            contentType: 'application/json',
            data: JSON.stringify({acao: "list_api"}),
            processData: false,
            success: function(data) {

                //limpar html .list_api
                $.each(data, function(){

                    console.log(this.id);
                    /*
                        <div class="col-sm-2 col-md-2 col-xs-2">
                          <h6></h6>
                          <img src=""/>
                        </div>

                    */
                    //create html
                });

                //apend

            }

          });

      }

      document.getElementById('btn_search').click();

    </script>
  </body>
</html>