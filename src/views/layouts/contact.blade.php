<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://www.jqueryscript.net/demo/Powerful-Customizable-jQuery-Carousel-Slider-OWL-Carousel/owl-carousel/owl.carousel.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://www.jqueryscript.net/demo/Powerful-Customizable-jQuery-Carousel-Slider-OWL-Carousel/owl-carousel/owl.theme.css" rel="stylesheet" id="bootstrap-css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    
    <style>
        .carousel-indicators .active{ background: #31708f; } .content{ margin-top:20px; } .adjust1{ float:left; width:100%; margin-bottom:0; } .adjust2{ margin:0; } .carousel-indicators li{ border :1px solid #ccc; } .carousel-control{ color:#31708f; width:5%; } .carousel-control:hover, .carousel-control:focus{ color:#31708f; } .carousel-control.left, .carousel-control.right { background-image: none; } .media-object{ margin:auto; margin-top:15%; } @media screen and (max-width: 768px) { .media-object{ margin-top:0; } }
    </style>
    <title>Document</title>
</head>
<body>
    @yield('contact')

<script src="https://www.jqueryscript.net/demo/Powerful-Customizable-jQuery-Carousel-Slider-OWL-Carousel/assets/js/jquery-1.9.1.min.js"></script>
<script src="https://www.jqueryscript.net/demo/Powerful-Customizable-jQuery-Carousel-Slider-OWL-Carousel/owl-carousel/owl.carousel.js"></script>
<script>
    $(document).ready(function() {
 
 $("#owl-demo").owlCarousel({

     autoPlay: 3000, //Set AutoPlay to 3 seconds
     navigation:false,
     items : 1,
     itemsDesktop : [1199,3],
     itemsDesktopSmall : [979,3]

 });

});
</script>
</body>
</html>