<p> Your Previous Ratings </p>
@foreach ($ratings as $rts)
<p> You rated {{$rts->product_name}} for {{$rts->rating}} stars </p>
@endforeach 
<br><br>

@foreach ($users_orders as $ors)
<p>You ordered {{$ors->qty}} packages of {{$ors->product_name}} 
<form method="POST" action="/giverating">
    @csrf
    <label> Rate this: </label>
    <input type="number" min="0" max="5" name="rating" placeholder="0 - 5" value="" required/>
    <input type="hidden" name="productname" value="{{$ors->product_name}}">
    <input type="submit" value="Rate">
</form>
@endforeach 
<br><br>