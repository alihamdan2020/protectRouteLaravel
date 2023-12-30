<h1>log in view</h1>
<form action="/products/login" method="post">
    @csrf
user name<input type="text" name="email">
password_get_info <input type="password" name="password">
<input type="submit" value="submit">
</form>
<p>{{ session()->get("message")}}</p>