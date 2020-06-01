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

.btn1, .btnEdit, .btnDel {
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

.btn1:hover, .btnEdit:hover, .btnDel:hover {
    background-color: #a98e68;
    color: white;
}

.btn1:active, .btnEdit:active, .btnDel:active {
    -moz-transform: scale(0.95);
    -webkit-transform: scale(0.95);
    -o-transform: scale(0.95);
    -ms-transform: scale(0.95);
    transform: scale(0.95);
    color: white;
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

/* Search */
.searchbar{
    margin-bottom: auto;
    margin-top: auto;
    height: 60px;
    background-color: #f6f6f6;
    border-radius: 30px;
    padding: 10px;
}

.search_input{
    color: black;
    border: 0;
    outline: 0;
    background: none;
    width: 0;
    caret-color:transparent;
    line-height: 40px;
    transition: width 0.4s linear;
}

.searchbar:hover > .search_input{
    padding: 0 10px;
    width: 300px;
    caret-color:#a98e68;
    transition: width 0.4s linear;
}

.searchbar:hover > .search_icon{
    background: transparent;
    color: black;
}


.search_icon{
    height: 40px;
    width: 60px;
    float: right;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 50%;
    color:white;
    text-decoration:none;
}

.sort:hover {
    font-size:200%
}

.filter:hover {
    font-size:200%
}

.btnSort:hover {
    font-size:250%
}

.btnFilter:hover {
    font-size:250%
}

.filterBtn {
    padding: 5px 15px;
    background-color: #4d443d;
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    text-transform: uppercase;
    font-size: 13px;
    -webkit-box-shadow: 0 0 20px 0 rgba(169,142,104,0.4);
    box-shadow: 0 0 20px 0 rgba(169,142,104,0.4);
    -webkit-border-radius: 5px 5px 5px 5px;
    border-radius: 5px 5px 5px 5px;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.filterBtn:hover {
    background-color: #a98e68;
}

.filterBtn:active {
    -moz-transform: scale(0.95);
    -webkit-transform: scale(0.95);
    -o-transform: scale(0.95);
    -ms-transform: scale(0.95);
    transform: scale(0.95);
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
        <a class="navbar-brand" href="/adminhome" style="margin-left:50px; margin-right:50px;"><img src="/assets/logo.png" style="width:50px; height:50px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item" style="padding-left:5px; padding-right:5px; border-bottom: 2px solid #a98e68;">
                    <a class="nav-link" style="color: #a98e68;" href="/adminhome">Menu</a>
                </li>
                <li class="nav-item" style="padding-left:5px; padding-right:5px;">
                    <a class="nav-link" href="/addproduct">Add Product</a>
                </li>
                <li class="nav-item" style="padding-left:5px; padding-right:5px;">
                    <a class="nav-link" href="/orderlist">View Orders</a>
                </li>
                <li class="nav-item" style="padding-left:5px; padding-right:5px;">
                    <a class="nav-link" href="/graphlist">Show Graph</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Welcome {{$name}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/adminprofile">Profile</a>
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
                <img class="productImg" id="productImg" src="" alt="...">
            </div>
            <div class="modal-body">
                <h1 id="productName"></h1>
                <h2 id="rating"></h2>
                <h3 id="category"></h3>
                <h4 id="desc"></h4>
                <h4 id="stock"></h4>
                <h4 id="price"></h4>
            </div>
            <div class="modal-footer">
                    <a id="btnEdit" style="text-decoration: none;" class="fadeIn second btn1 col-md-5 m-auto" href="/">Edit</a>
                    <a id="btnDel" style="text-decoration: none;" class="fadeIn second btn1 col-md-5 m-auto btnDel" href="/" onclick="delAllert()">Delete</a>
            </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <!-- sortModal -->
    <div class="modal fade" id="sortModal" tabindex="-1" role="dialog" aria-labelledby="sortModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="m-auto text-center">Sort</h1>
                </div>
                <div class="modal-body m-auto text-center">
                    <h3 class="sort"><a href="/sortascbyname" style="text-decoration:none; color:black"> Sort Name Asc </a></h3>
                    <h3 class="sort"><a href="/sortdescbyname" style="text-decoration:none; color:black"> Sort Name Desc </a></h3>
                </div>
                <div class="modal-body m-auto text-center">
                    <h3 class="sort"><a href="/sortascbyprice" style="text-decoration:none; color:black"> Sort Price Asc </a></h3>
                    <h3 class="sort"><a href="/sortdescbyprice" style="text-decoration:none; color:black"> Sort Price Desc </a></h3>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    
    <!-- filterModal -->
    <div class="modal fade" id="filterModal" tabindex="-1" role="dialog" aria-labelledby="filterModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="m-auto text-center">Filter</h1>
                </div>
                <div class="modal-body m-auto text-center">
                    <h3 class="filter"><a href="/makananonly" style="text-decoration:none; color:black"> Makanan </a></h3>
                    <h3 class="filter"><a href="/minumanonly" style="text-decoration:none; color:black"> Minuman </a></h3>
                </div>
                <div class="modal-footer text-center" style="padding-left:0; padding-right:0;">
                    <form class="m-auto" method="GET" action="/filterprice">
                        <div class="form-group">
                            <div class="col-sm-3 m-auto" style="display: inline-block; padding:0;">
                                <select name="type"> 
                                    <option value="above"> Above </option>
                                    <option value="below"> Below </option>
                                </select>
                            </div>
                            <div class="col-sm-4 m-auto" style="display: inline-block; padding:0;;">
                                <input type="number" name="price" class="form-control" placeholder="Input Price..." required>
                            </div>
                            <div class="form-group-btn col-sm-4" style="display: inline-block; padding:0;">
                                <button type="submit" class="filterBtn">Filter Price</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->

    <div class="full-height mx-auto" style="width:90%;">
        <div style="padding-top:50px;">
            <div class="row text-center">  
                <div class="col-sm-4">
                    <h2 class="btnSort"><b><a style="text-decoration:none; float:right; color:white" type="button" data-toggle="modal" class="openModalSort" href="#sortModal">Sort</a></b></h2>
                </div>
                <div class="col-sm-4 m-auto input-group">
                    <form class="col-sm-12 m-auto input-group" method="GET" action="/adminsearch">
                        <input type="text" name="search" class="form-control" placeholder="Search Menu...">
                    </form>
                </div>
                <div class="col-sm-4">
                    <h2 class="btnFilter"><b><a style="text-decoration:none; float:left; color:white" type="button" data-toggle="modal" class="openModalFilter" href="#filterModal">Filter</a></b></h2>
                </div>
            </div>
            <div class="row text-center">  
                @foreach ($products as $prd)
                <div class="col-sm-4 fadeIn first" style="padding:3%;">
                    <div class="card fadeIn second">
                        <div class="imgContainer">
                            <img class="productImg" src="{{ asset('uploads/products/'. $prd->Image) }}" alt="...">
                            <div class="overlay">
                                <div class="text-overlay">
                                    <a type="button" data-id="{{$prd->id}}" data-img="{{ asset('uploads/products/'. $prd->Image) }}" data-name="{{$prd->ProductName}}" data-desc="{{$prd->Description}}" data-price="Rp. {{$prd->Harga}},-" data-category="{{$prd->Category}}" data-stock="{{$prd->Stock}}" data-rating="{{$prd->avg_rating}}" data-toggle="modal" class="openModal text-ov" href="#detailModal">Detail</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body fadeIn third">
                            <h5 class="card-title"><b>{{$prd->ProductName}}</b></h5>
                            <p class="card-text">Price : Rp.{{$prd->Harga}},-</p><br>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
        
    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        $(document).on("click", ".openModal", function() {
            var productId = $(this).data('id');
            var img = $(this).data('img');
            var productName = $(this).data('name');
            var desc = $(this).data('desc');
            var price = $(this).data('price');
            var category = $(this).data('category');
            var stock = $(this).data('stock');
            var rating = $(this).data('rating');
            console.log(productId);
            document.getElementById("productImg").src = img;
            document.getElementById("productName").innerHTML = "<b>"+productName+"</b>";
            document.getElementById("rating").innerHTML = "Rating : "+rating;
            document.getElementById("category").innerHTML = "Category : "+category;
            document.getElementById("desc").innerHTML = "Description : "+desc;
            document.getElementById("stock").innerHTML = "Stock : "+stock;
            document.getElementById("price").innerHTML = "Price : "+price;
            document.getElementById("btnEdit").setAttribute("href", "/editproduct/"+productId);
            document.getElementById("btnDel").setAttribute("href", "/deleteproduct/"+productId);
            $("#id").val(productId);
            $('#detailModal').modal('show');
        });
        function delAllert() {
            if (confirm("Are you sure?")) {
            } else {
            }
            document.getElementById("demo").innerHTML = txt;
        }
    </script>
</body>
</html>