<style>
html {
    height: 100vh;
    margin: 0;
}

.full-height {
    height: 100vh;
}

.flex-center {
    align-items: center;
    display: flex;
    justify-content: center;
}

.position-ref {
    position: relative;
}

/* Simple CSS3 Fade-in Animation */
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fadeIn {
    opacity:0;
    -webkit-animation:fadeIn ease-in 1;
    -moz-animation:fadeIn ease-in 1;
    animation:fadeIn ease-in 1;
    -webkit-animation-fill-mode:forwards;
    -moz-animation-fill-mode:forwards;
    animation-fill-mode:forwards;
    -webkit-animation-duration:0.5s;
    -moz-animation-duration:0.5s;
    animation-duration:0.5s;
}

.fadeIn.first {
    -webkit-animation-delay: 0.1s;
    -moz-animation-delay: 0.1s;
    animation-delay: 0.1s;
}

.fadeIn.second {
    -webkit-animation-delay: 0.2s;
    -moz-animation-delay: 0.2s;
    animation-delay: 0.2s;
}

.fadeIn.third {
    -webkit-animation-delay: 0.4s;
    -moz-animation-delay: 0.4s;
    animation-delay: 0.4s;
}

.fadeIn.fourth {
    -webkit-animation-delay: 0.6s;
    -moz-animation-delay: 0.6s;
    animation-delay: 0.6s;
}

.imgContainer {
    position: relative;
    width: 100%;
    border-radius: 5px 5px 5px 5px;
}

.productImg {
    display: block;
    width: 100%;
    height: auto;
    border-radius: 5px;
}

.overlay {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    height: 100%;
    width: 100%;
    opacity: 0;
    transition: .5s ease;
    background-color: rgba(0,0,0,0.6);
}

.imgContainer:hover .overlay {
    opacity: 1;
    border-radius: 5px 5px 5px 5px;
}

.text-overlay {
    color: white;
    font-size: 20px;
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    text-align: center;
}

.text-overlay:hover {
    cursor: pointer;
}

a.text-ov:hover {
    color:#f6f6f6;
    font-size: 250%;
    font-weight: bold;
    text-decoration: none;
}

a.text-ov {
    color:#f6f6f6;
    font-size: 200%;
}

/* FORM TYPOGRAPHY*/

.btn1 {
    background-color: #4d443d;
    border: none;
    color: white;
    padding: 15px 80px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    text-transform: uppercase;
    font-size: 13px;
    -webkit-box-shadow: 0 0 20px 0 rgba(169,142,104,0.4);
    box-shadow: 0 0 20px 0 rgba(169,142,104,0.4);
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
    margin: 20px 20px 20px 20px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.btn1:hover {
    background-color: #a98e68;
}

.btn1:active {
    -moz-transform: scale(0.95);
    -webkit-transform: scale(0.95);
    -o-transform: scale(0.95);
    -ms-transform: scale(0.95);
    transform: scale(0.95);
}

input[type=button], input[type=submit], input[type=reset]  {
    background-color: #4d443d;
    border: none;
    color: white;
    padding: 15px 80px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    text-transform: uppercase;
    font-size: 13px;
    -webkit-box-shadow: 0 0 20px 0 rgba(169,142,104,0.4);
    box-shadow: 0 0 20px 0 rgba(169,142,104,0.4);
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
    margin: 20px 20px 20px 20px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
    background-color: #a98e68;
}

input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
    -moz-transform: scale(0.95);
    -webkit-transform: scale(0.95);
    -o-transform: scale(0.95);
    -ms-transform: scale(0.95);
    transform: scale(0.95);
}

input[type=text], input[type=email], input[type=password], input[type=date] {
    background-color: #f6f6f6;
    border: none;
    color: #0d0d0d;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 5px;
    width: 85%;
    border: 2px solid #f6f6f6;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
}

input[type=text]:focus, input[type=email]:focus, input[type=password]:focus {
    background-color: #fff;
    border-bottom: 2px solid #a98e68;
}

input[type=text]:placeholder, input[type=email]:placeholder, input[type=password]:placeholder, input[type=date]:placeholder {
    color: #cccccc;
}

/* ANIMATIONS */

/* Simple CSS3 Fade-in-down Animation */
.fadeInDown {
    -webkit-animation-name: fadeInDown;
    animation-name: fadeInDown;
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
    }
    100% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
    }
}

@keyframes fadeInDown {
    0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
    }
    100% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
    }
}

/* Simple CSS3 Fade-in Animation */
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fadeIn {
    opacity:0;
    -webkit-animation:fadeIn ease-in 1;
    -moz-animation:fadeIn ease-in 1;
    animation:fadeIn ease-in 1;
    -webkit-animation-fill-mode:forwards;
    -moz-animation-fill-mode:forwards;
    animation-fill-mode:forwards;
    -webkit-animation-duration:1s;
    -moz-animation-duration:1s;
    animation-duration:1s;
}

.fadeIn.first {
    -webkit-animation-delay: 0.3s;
    -moz-animation-delay: 0.3s;
    animation-delay: 0.3s;
}

.fadeIn.second {
    -webkit-animation-delay: 0.4s;
    -moz-animation-delay: 0.4s;
    animation-delay: 0.4s;
}

.fadeIn.third {
    -webkit-animation-delay: 0.5s;
    -moz-animation-delay: 0.5s;
    animation-delay: 0.5s;
}

.fadeIn.fourth {
    -webkit-animation-delay: 0.6s;
    -moz-animation-delay: 0.6s;
    animation-delay: 0.6s;
}

.checked {
  color: orange;
}

.rating {
    float:left;
}

.rating i { 
    float:right; 
    position:relative;
    padding:5px;
}

.rating i input {
    position:absolute;
    top:0px;
    left:0px;
    opacity:0;
}

.rating i label {
    width:20px;
    height:20px;
    text-align:center;
    color:#FFF;
    background:#ccc;
    font-size:30px;
    line-height:30px;
    border-radius:50%;
    -webkit-border-radius:50%;
}

.rating i:hover ~ i label,
.rating i:hover label,
.rating i.checked label,
.rating i.checked ~ i label {
    background: orange;
    color:#FFF;
}
</style>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="/bootstrap-4.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Authentic Restaurant</title>
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
</head>
<body class="bg">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background:#4d443d; font-family: 'Nunito'; padding-left:5%; padding-right:5%; font-size:20px">
        <a class="navbar-brand" href="/userhome" style="margin-left:50px; margin-right:50px;"><img src="/assets/logo.png" style="width:50px; height:50px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item" style="padding-left:5px; padding-right:5px;">
                    <a class="nav-link" href="/userhome">Home</a>
                </li>
                <li class="nav-item" style="padding-left:5px; padding-right:5px;">
                    <a class="nav-link" href="/productlist">Menu</a>
                </li>
                <li class="nav-item" style="padding-left:5px; padding-right:5px;">
                    <a class="nav-link" href="/shoppingcart">Cart</a>
                </li>
                <li class="nav-item" style="padding-left:5px; padding-right:5px; border-bottom: 2px solid #a98e68;">
                    <a class="nav-link" style="color: #a98e68;" href="/orderhistory">History</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Welcome {{$name}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/userprofile">Profile</a>
                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/logout">Sign Out</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Modal -->
    <div class="modal fade" id="detailModal" tabindex="-1" role="dialog" aria-labelledby="detailModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h4 id="productName" class="m-auto text-center productName"></h4>
            </div>
            <form method="POST" action="/giverating">
                <div class="modal-body">
                    @csrf
                    <div class="rating col-md-12 m-auto fadeIn second" style="padding-right:33%;">
                        <i><input class="rate5" type="radio" name="rating" id="str5" value="5" data-id="/"><label for="str5"></label></i>
                        <i><input class="rate4" type="radio" name="rating" id="str4" value="4" data-id="/"><label for="str4"></label></i>
                        <i><input class="rate3" type="radio" name="rating" id="str3" value="3" data-id="/"><label for="str3"></label></i>
                        <i><input class="rate2" type="radio" name="rating" id="str2" value="2" data-id="/"><label for="str2"></label></i>
                        <i><input class="rate1" type="radio" name="rating" id="str1" value="1" data-id="/"><label for="str1"></label></i>
                    </div>
                    <input class="ratingval" id="/" type="hidden" min="0" max="5" name="rating" placeholder="0 - 5" value="" required/>
                    <input id="prodNameModal" type="hidden" name="productname" value="">
                    <input id="orderIdModal" type="hidden" name="orderid" value="">
                </div>
                <div class="modal-footer" style="border-top:none;">
                    <input class="m-auto" type="submit" value="Rate" style="padding-right:auto;">
                </div>
            </form>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <div class="full-height mx-auto" style="width:80%;">
        <div style="padding-top:50px;">
            @if ($orderhistory3->isEmpty())
                <div class="row text-center">  
                    <div class="col-sm-5 fadeIn first m-auto" id="formFooter">
                        <h1 class="card-title"><b>You don't have any orders in your history yet.</b></h1>
                        <a style="text-decoration: none;" class="fadeIn second btn1" href="/productlist">Discover Menu</a>
                    </div>
                </div>
            @else
                <div class="row text-center" style="border-bottom: 2px solid #ffffff;">
                        @foreach ($users_orders as $ors1)
                        <div class="col-sm-6 fadeIn first" style="padding:3%;">
                            <p>{{$ors1->order_id}}</p>
                            <p class="card-text">You ordered <b>{{$ors1->qty}}</b> packages of <b>{{$ors1->product_name}}</b></p>
                            <div>
                                <i class="fa fa-star {{$ors1->rating >= 1 ? 'checked' : ''}} aria-hidden="false"></i>
                                <i class="fa fa-star {{$ors1->rating >= 2 ? 'checked' : ''}} aria-hidden="false"></i>
                                <i class="fa fa-star {{$ors1->rating >= 3 ? 'checked' : ''}} aria-hidden="false"></i>
                                <i class="fa fa-star {{$ors1->rating >= 4 ? 'checked' : ''}} aria-hidden="false"></i>
                                <i class="fa fa-star {{$ors1->rating >= 5 ? 'checked' : ''}} aria-hidden="false"></i>
                            </div>
                        </div>
                        @endforeach
                </div>
                <div class="row text-center">
                    @foreach ($users_orders2 as $ors1)
                    <div class="col-sm-6 fadeIn first" style="padding:3%;">
                        <p>{{$ors1->order_id}}</p>
                        <p class="card-text">You ordered with No Rating <b>{{$ors1->qty}}</b> packages of <b>{{$ors1->product_name}}</b></p>
                        <div class="col-sm-12 fadeIn first">
                        <a type="button" data-id="{{$ors1->order_id}}" data-name="{{$ors1->product_name}}" data-toggle="modal" class="openModal text-ov" href="#detailModal">-> Rate This! <-</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            @endif 
        </div>
    </div>
        
    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            // Check Radio-box
            $(".rating input:radio").attr("checked", false);

            $('.rating input').click(function () {
                $(".rating i").removeClass('checked');
                $(this).parent().addClass('checked');
            });

            $('input:radio').change(
            function(){
                var productId = $(this).data('id');
                var userRating = this.value;
                document.getElementById("ratingvalue"+productId).value = userRating;
            }); 
        });
    </script>
    <script>
        $(document).on("click", ".openModal", function() {
            var productId = $(this).data('id');
            var productName = $(this).data('name');
            var nama = document.getElementsByClassName('productName')[0];
            nama.innerHTML = "<b>Rate This "+productName+"</b>";
            for(var x=5; x>0; x--){
                var rate = document.getElementsByClassName('rate'+x)[0];
                rate.setAttribute("data-id", productId); 
            }
            var rateval = document.getElementsByClassName('ratingval')[0];
            rateval.setAttribute("id", "ratingvalue"+productId);
            document.getElementById("prodNameModal").value = productName;
            document.getElementById("orderIdModal").value = productId;
            $('#detailModal').modal('show');
        });
    </script>
</body>
</html>