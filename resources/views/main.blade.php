<!DOCTYPE html>
<html lang="en">

@include("_partials/head")
<style>
.button{
    border: none;
    border-radius: 5px;
    color: #fff;
    text-transform: uppercase;
    padding-bottom: 15px;
    position: relative;
    background-image: linear-gradient(to top, #262626 0px, #404040 10px, #262626 10px, #333 100%);
}
.button:hover{
    color: #fff;
}
.button:after{
    content: "";
    width: 0;
    position: absolute;
    bottom: 0;
    left: 0;
    border-radius: 0 0 5px 5px;
    transition: all 0.7s ease 0s;
}
.button:hover:after{
    width: 100%;
}
.button.btn-lg{
    background-image: linear-gradient(to top, #262626 0px, #404040 8px, #262626 8px, #333 100%);
}
.button.btn-lg:after{
    height: 8px;
}
.button.blue:after{
    background: #5cbcf6;
}
@media only  screen and (max-width: 767px){
    .button{ margin-bottom: 20px; }
}
</style>
<body class="bg-dark text-white">
        @include("_partials/nav")

        @yield('content')

        @include("_partials/footer")

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>