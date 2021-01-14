
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body style="background-color: rgb(255,94,17);">
    <h1 class="text-center my-3" style="color: rgb(0,121,245);">Face Matching With Document Photo</h1>
    <div style="width: 100%;height: 2px;background-color: black" class="my-2"></div>
    <div class="container">
        <div style="display: none" id="lodding">
            <img src="{{asset('images/load3.gif')}}" style="width: 100%;height:300px;">
        </div>
        <form method="post" action="{{ route('photosend')}}" enctype="multipart/form-data" id="photo_form">
            @csrf
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                <div class="card mb-4 shadow-sm">
                   <img src="" id="img_1" style="display: none;width: 100%;height: 300px; border-radius: 20%">
                    <div class="card-body">
                    <p class="card-text">Select Only JPEG And PNG Image (Photo Should Only Contain Single And Clear Face) <br><strong>Image 1</strong></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <input type="file" name="selfie" style="border: 1px solid #ccc;display: inline-block;padding: 6px 12px; cursor: pointer;" accept="image/x-png,image/jpeg" required="" id="img_1_select"> 
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                <div class="card mb-4 shadow-sm">
                    <img src="" id="img_2" style="display: none;width: 100%;height: 300px; border-radius: 20%">
                    <div class="card-body">
                    <p class="card-text">Select Only JPEG And PNG Image (Photo Should Only Contain Single And Clear Face)<br><strong>Image 2</strong></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <input type="file" name="selfie_2" style="border: 1px solid #ccc;display: inline-block;padding: 6px 12px; cursor: pointer;" accept="image/x-png,image/jpeg" required="" id="img_2_select">
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                <div class="card mb-4 shadow-sm">
                    <img src="" id="doc_img" style="display: none;width: 100%;height: 300px; border-radius: 20%">
                    <div class="card-body">
                    <p class="card-text">Select Only JPEG And PNG Image Of Any Document <br><strong>Document Image</strong></p>
                    <div class="d-flex justify-content-between align-items-center">
                        <input type="file" name="id_card" style="border: 1px solid #ccc;display: inline-block;padding: 6px 12px; cursor: pointer;" accept="image/x-png,image/jpeg" required="" id="doc_select">
                    </div>
                    </div>
                </div>
                </div>

                   <div class="col-12 text-center my-2">
                        <button class="btn btn-primary" style="width: 100%" id="check">Check</button>
                   </div>
            </div>
        </form>
        @if($data)
        <div class="row my-5">
            <div class="col-lg-8 col-sm-12 mx-auto text-center" style="background-color: #abcdef">
                <h4><strong>{{$msg}}</strong></h4>
                <h5><strong>Matching % : </strong>{{$pesentage}}</h5>
            </div>
        </div>
        @endif
    </div>
    <footer class="mastfoot  text-center  my-3">
        <div class="inner">
          <p style="color:rgb(0,121,245); "><strong>Created By : @Pandey_Ji<br>2:15 AM 05-12-2020</strong></p>
        </div>
      </footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(document).on('change','#img_1_select',function(e){
          
                
                    var x=URL.createObjectURL(e.target.files[0]);//this.files[0].mozFullPath;
                    console.log(x);

                     $('#img_1').attr('src',x);
                     $('#img_1').show();
                 
            });

        $(document).on('change','#img_2_select',function(e){
          
                
                    var x=URL.createObjectURL(e.target.files[0]);//this.files[0].mozFullPath;
                    console.log(x);

                     $('#img_2').attr('src',x);
                     $('#img_2').show();
                 
            });

        $(document).on('change','#doc_select',function(e){
          
                
                    var x=URL.createObjectURL(e.target.files[0]);//this.files[0].mozFullPath;
                    console.log(x);

                     $('#doc_img').attr('src',x);
                     $('#doc_img').show();
                 
            });

        $(document).on('submit','#photo_form',function(e){

                     $('#photo_form').hide();
                     $('#lodding').show();
                 
            });
    });
</script>
</body>
</html>