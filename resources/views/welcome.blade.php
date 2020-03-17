<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Google Drive Systemmmm</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


        

      
    </head>
    <body>
       <div class="container">
           <div class="row">
               <div class="col-12">
                   <br><br><br>
                   <form action="/upload" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" class="form-control" name="file">
                    <br>
                    <input type="submit" class="btn btn-sm btn-block btn-danger" value="upload">
                     
                   </form>
               </div>
           </div>
       </div>
    </body>
</html>
