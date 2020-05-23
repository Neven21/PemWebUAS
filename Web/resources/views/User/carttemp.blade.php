@foreach ($carts as $crt)
<p>{{$crt->product_name}} {{$crt->qty}} @ {{$crt->price}} total = {{$crt->qty * $crt->price}} <?php $total = $total + $crt->qty * $crt->price ?> <a href="/deletecart/{{$crt->cart_id}}"> Delete </a>
@endforeach 
<br>
total all = {{$total}}