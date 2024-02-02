<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>YOTUBE VIDEO</title>
</head>
<body>
    <div class="d-flex flex-column align-items-center justify-content-center" style="padding: 70px">
        <h1>YOTUBE VIDEO</h1>
        {{-- <a href="{{route('details')}}" class="btn btn-success"> see video details</a> --}}


        <form action="" method="POST" class="mt-5">
            <label>Enter Vido ID :</label>
            <input type="text" name='video_id'>
            <a href="{{route('details')}}" class="btn btn-success" type="submit"> see video details</a>
        </form>
    </div>

    <div style="margin-top: 120px; padding-left: 8px">
        <h4 class="text-danger">some videos id's to test if you dont have one</h4>
        <ul>
            <li>fYp0JXUH6lY</li>
            <li>fG08dcJ8xFE</li>
        </ul>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>