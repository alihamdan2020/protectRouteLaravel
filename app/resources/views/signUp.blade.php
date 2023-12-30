<h1>add new user</h1>
<form action="/products/register" method="post">
    @csrf
    user name <input type="text" name="email" id="">
    password <input type="password" name="password">
    <input type="submit" value="submit">
</form>