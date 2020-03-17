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
                   
                    <form action="{{route('file.store')}}" method="POST" enctype="multipart/form-data" >

                    @csrf
                    <input required type="file" class="form-control" name="file">
                    <br>
                    <input type="submit" class="btn btn-sm btn-block btn-danger" value="upload">
                     
                   </form>
               </div>
           </div>
           <hr>
           <div class="row">
             <div class="table-responsive mt-10">
                            <table class="table table-hover table-striped">
                                <thead>
                                <tr>
                                    <td>Title</td>
                                    <td>downloadUrl</td>
                                    <td>fileSize</td>
                                    <td>mimeType</td>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($files as $file)
                                    <tr>
                                        <td>{{$file->title}}</td>

                                        <td><a href="{{$file->downloadUrl}}">
                                          Download
                                        </a></td>

                                      <td><?php echo number_format($file->fileSize / 1000,2); ?>KB</td>

                                        
                                        <td>{{$file->mimeType}}</td>
                                        
                                    </tr>
                                @endforeach
                                @if(count($files) == 0)
                                    <tr>
                                        <td colspan="3" style="text-align: center">There is no files in your google drive! you can upload some from this form</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
           </div>
       </div>
    </body>
</html>
