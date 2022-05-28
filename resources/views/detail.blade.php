<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Detail: {{$movie->title}}</title>
</head>
<body>
    <div class="container-fluid d-flex align-items-center" style="padding: 1% 2%; width: 100%; background-color: #343A40">
        <a href="/home" class="d-flex align-items-center" style="text-decoration: none">
            <img src="https://lh3.googleusercontent.com/X8evjIcKE8u8jV6HKxcUF7fTPBMGq5H8jGdXsZ7kDRfhdlm7oR9AjuLNc7SoKJw9V1BMZQ=s85" alt="" class="rounded-circle" style="width: 50px; height: 50px; margin-right: 10px">
            <h2 style="color: white">BeeFlix</h2>
        </a>
    </div>

    <div class="container-fluid" style="width: 95%; margin-top: 2%; background-color: #E9ECEF; padding-top: 1%; padding-bottom: 1%">
        <div class="container-fluid" style="background-color: white; padding-top: 1%; padding-bottom: 1%">
            <div class="row">
                <div class="col" style="padding-left: 2rem; width: 5rem">
                    <div class="image" style="width: auto; height: 25rem">
                        <img src="{{$movie->photo}}" alt="" style="object-fit: cover; width: 100%; height: 100%">
                    </div>
                </div>
                <div class="col" style="padding-left: 1rem">
                    <h4>
                        {{$movie->title}}
                    </h4>
                    <div class="container-fluid d-flex align-items-center" style="padding: 0px">
                        <img src="https://cdn-icons-png.flaticon.com/512/1828/1828614.png" alt="" style="width: 1rem; margin-right:0.5rem"> {{number_format($movie->rating,1)}}
                    </div>
                    <br>
                    {{$movie->description}}<br><br>
                    Episodes: {{$totalEpisode}}<br>
                    Kategori: <a href="/genre/{{$movie->genre_id}}" style="text-decoration: none">
                        {{$movie->genre->name}}
                    </a>
                </div>
                <div class="col-5" style="padding-right: 5rem; padding-left: 3rem">
                    <h5>
                        <br>List Episode
                    </h5>
                    <br>
                    <table class="table">
                        <thead class="text-center" style="background-color: #343A40; color: white">
                            <td class="col-1"><b>Episode</b></td>
                            <td class="col-4"><b>Title</b></td>
                        </thead>
                        <tbody>
                            @foreach ($episodes as $e)
                                <tr>
                                    <td  class="text-center">{{$e->episode}}</td>
                                    <td>: {{$e->title}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="container-fluid d-flex align-items-center" style="justify-content: space-between">
                        {{-- <p>
                            {{$episodes->currentPage()}} of {{ceil($totalEpisode/3)}} page(s)
                        </p>
                        {{$episodes->links()}} --}}
                        {{$episodes->withQueryString()->onEachSide(0)->links()}}
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>
</html>
