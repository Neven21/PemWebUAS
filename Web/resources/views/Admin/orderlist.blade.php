@foreach ($product_orders as $ors)
<p>{{$ors->username}} ordered with total price of = Rp{{$ors->total_price}},- <a href="/deleteorder/{{$ors->order_id}}"> Cancel Order </a>
@endforeach 
<br><br>
CURRENT STONKSS = Rp{{$total}}.-