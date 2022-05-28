<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Genre: {{$genre->name}}</title>
</head>
<body>
    <div class="container-fluid d-flex align-items-center" style="padding: 1% 2%; width: 100%; background-color: #343A40">
        <a href="/home" class="d-flex align-items-center" style="text-decoration: none">
            <img src="https://lh3.googleusercontent.com/X8evjIcKE8u8jV6HKxcUF7fTPBMGq5H8jGdXsZ7kDRfhdlm7oR9AjuLNc7SoKJw9V1BMZQ=s85" alt="" class="rounded-circle" style="width: 50px; height: 50px; margin-right: 10px">
            <h2 style="color: white">BeeFlix</h2>
        </a>
    </div>

    <div class="container-fluid" style="width: 95%; margin-top: 2%; background-color: #E9ECEF; padding-top: 1%; padding-bottom: 1%">
        <div class="container-fluid" style="background-color: white; padding-top: 1%; padding-bottom: 2.5%">
            <div class="title">
                <h4 style="color: #343A40">
                    <b>{{$genre->name}}</b>
                </h4>
            </div>

            <div class="row row-cols-md-3 g-4">
                @foreach ($movies as $m)
                    <div class="col-6 col-sm-3">
                        <div class="d-flex flex-column">
                            <div class="image" style="width: auto; height: 25rem">
                                <img src="{{$m->photo}}" alt="" style="object-fit: cover; width: 100%; height: 100%">
                            </div>
                            <p class="text-center" style="height: 1.5rem; margin-bottom:0px; background-color: #eff1f4">
                                {{$m->title}}
                            </p>
                            <a href="/movie/{{$m->id}}" class="btn text-center" style="background-color: #343A40; color:white">
                                LIHAT FILM
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</body>
</html>
