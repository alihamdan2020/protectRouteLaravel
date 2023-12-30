<h1>dd new product</h1>
<form action="/products" method="post">
    @csrf
    name<input type="text" name="productName">
    price<input type="text" name="productPrice">
    <input type="submit" value="submit">
</form>