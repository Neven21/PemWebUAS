@foreach ($carts as $crt)
<p>{{$crt->product_name}} {{$crt->qty}} @ {{$crt->price}} total = {{$crt->qty * $crt->price}} <a href="/deletecart/{{$crt->cart_id}}"> Delete </a>
@endforeach 
<br>
<form method="POST" action="/placeorder">
    @csrf
    <label> Total all = </label>
    <input type="number" name="totalall" value="{{$total}}" readonly>
    <input type="submit" value="Check Out">
</form>