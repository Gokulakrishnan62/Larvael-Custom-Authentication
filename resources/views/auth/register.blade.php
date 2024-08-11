@if ($errors->any())
    <ul>
        {!! implode('', $errors->all('<li>:message</li>')) !!}
    </ul>
@endif

<pre>

</pre>

<form method="post" action="user-register">
    @csrf
    <label for="">Name</label><input type="text" name="name">
    <label for="">Email</label><input type="email" name="email">
    <label for="">Password</label><input type="password" name="password">
    <label for="">Confirm Password</label><input type="password" name="password_confirmation">
    <input type="submit" value="register">
</form>


