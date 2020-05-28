<p> Your Previous Ratings </p>
@foreach ($ratings as $rts)
<p> You rated {{$rts->product_name}} for {{$rts->rating}} stars </p>
@endforeach 
<br><br>

@foreach ($users_orders as $ors)
<p>You ordered {{$ors->qty}} packages of {{$ors->product_name}}</p>
<form method="POST" action="/giverating">
    @csrf
    <label> Rate this: </label>
    <input type="number" min="0" max="5" name="rating" placeholder="0 - 5" value="" required/>
    <input type="hidden" name="productname" value="{{$ors->product_name}}">
    <input type="submit" value="Rate">
</form>
@endforeach 
<br><br>




<!-- admin home -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/adminhome">Authentic Restaurant</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
         <ul class="nav navbar-nav ml-auto"> <a href="/userprofile"> <span class="fa fa-user-circle-o"> </span> Welcome {{$name}} </a> <a href="/logout"> Log Out </a> </ul>        
      </nav>
      <a href="/addproduct" class="btn btn-primary">Add Product</a>
      <a href="/orderlist" class="btn btn-primary">View Orders</a>
      <a href="/graphlist" class="btn btn-primary">Show Graph</a>

    {{-- TAMBAHAN NEVEN UNTUK SEARCH--}}
    <form method="GET" action="/adminsearch">
        <div class="form-group"  style="width: 10%">
            <input type="search" name="search" class="form-control">
            <span class="form-group-btn">
                <button type="submit" class="btn btn-primary"> Search </button>
            </span>
        </div>
    </form>
    {{-- END OF TAMBAHAN NEVEN UNTUK SEARCH--}}

      <div class="card-deck">
        @foreach ($products as $prd)
        @if(($loop->iteration%3)==1)
            </div><div class="card-deck">
        @endif
            <div class="card">
                <img  class="card-img-top" src="{{ asset('uploads/products/'. $prd->Image) }}" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$prd->ProductName}}</h5>
                    <p class="card-text">{{$prd->Description}}</p>
                    <p class="card-text">Kategori   : {{$prd->Category}}</p>
                    <p class="card-text">Stock      : {{$prd->Stock}}</p>
                    <p class="card-text">Harga      : Rp {{$prd->Harga}},-</p><br>
                    <p class="card-text">Rating      : {{$prd->avg_rating}}</p><br>
                    <a href="/products/{{ $prd->id }}" class="btn btn-primary">Detail</a>
                    <a href="/deleteproduct/{{ $prd->id }}" class="btn btn-danger">Delete</a>
                </div>
                <div class="card-footer">
                </div>
            </div>
        @endforeach
    </div>





<!-- add product -->
<body>
        <div class="wrapper fadeInDown">
            <div id="formContent">
              <!-- Tabs Titles -->
          
              <!-- Icon -->
              <div class="fadeIn first">
                <h3> Add Products </h3>
              </div>
          
            
              <!-- Register Form -->
              <form method="post" enctype="multipart/form-data" action="/addproduct">
                @csrf
                <select name="kategori">
                    <option disabled selected value> -- select an option -- </option>
                    <option value="Makanan">Makanan</option>
                    <option value="Minuman">Minuman</option>
                </select>
                <input type="text" id="login" class="fadeIn second" name="name" placeholder="Product Name" required>
                <input type="number" id="lastname" class="fadeIn third" name="stock" placeholder="Stock" required>
                <input type="text" id="lastname" class="fadeIn third" name="description" placeholder="Description" required>
                <input type="number" id="lastname" class="fadeIn third" name="harga" placeholder="Price" required>
                <input type="file" id ="Image" accept="image/*" class="fadeIn third" name="gambar" placeholder="Image" required>
                <input type="submit" class="fadeIn fourth" value="Add Product">
              </form>
          
            </div>
          </div>
          @include('Template.footer');
    </body>





    <!-- graph -->

    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/adminhome">Authentic Restaurant</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
         <ul class="nav navbar-nav ml-auto"> <a href="/userprofile"> <span class="fa fa-user-circle-o"> </span> Welcome {{$name}} </a> <a href="/logout"> Log Out </a> </ul>        
      </nav>
      <a href="/addproduct" class="btn btn-primary">Add Product</a>
      <a href="/orderlist" class="btn btn-primary">View Orders</a>
      <a href="/graphlist" class="btn btn-primary">Show Graph</a>

       {{-- TAMBAHAN NEVEN UNTUK SEARCH--}}
       <form method="GET" action="/adminsearch">
        <div class="form-group"  style="width: 10%">
            <input type="search" name="search" class="form-control">
            <span class="form-group-btn">
                <button type="submit" class="btn btn-primary"> Search </button>
            </span>
        </div>
    </form>
    {{-- END OF TAMBAHAN NEVEN UNTUK SEARCH--}}

    <div id="container"></div>
    @include('Template.footer');
    <script src="https://code.highcharts.com/stock/highstock.js"></script>
    <script>
        Highcharts.chart('container', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Total Penjualan'
        },
        subtitle: {
            text: 'Authentic Restaurant'
        },
        xAxis: {
            categories: {!!json_encode($categories)!!},
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Quantity (pcs)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} pcs</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Penjualan',
            data: {!!json_encode($qty,JSON_NUMERIC_CHECK)!!}

        }]
    });
</script>
</body>