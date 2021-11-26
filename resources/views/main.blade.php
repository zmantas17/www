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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>