@foreach ($products as $prod)
<div class="products">
    <div class="prod">{{$prod->productName}}</div>
    <div class="prod">{{$prod->productPrice}}</div>
</div>


@endforeach