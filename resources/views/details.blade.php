<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Video Details</title>
</head>
<body>
    <div class="d-flex flex-column align-items-center justify-content-center" style="padding: 70px">
        <h1 class="text-danger">Video Details</h1>
        <a href="{{route('home')}}" class="btn btn-success">Back Home</a>



        <div class="mt-5">
            <h2 class="text-success ">The Video:</h2> 
            <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $id ?>?si=ZnNvPgOJ8orA19xx" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

            <h2 class="text-success pt-5">Video Title:</h2> 
                <h2><?php echo $video->title ?></h2>


            <h2 class="text-success pt-5">Video Thumbnail:</h2>
            <img 
                src='<?php echo $video->thumbnails->high->url ?>' 
                class="mt-2"
                style="width: 300px" 
                alt='Thumbnail for the video <?php echo $video->title ?>'>

            <h2 class="text-success pt-5">Video Description:</h2>
            <textarea style='width:700px; height:200px'><?php echo $video->description ?></textarea>
        </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>