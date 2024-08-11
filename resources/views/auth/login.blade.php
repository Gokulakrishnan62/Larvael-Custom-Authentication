@if ($errors->any())
    <ul>
        {!! implode('', $errors->all('<li>:message</li>')) !!}
    </ul>
@endif


<form method="post" action="user-login">
    @csrf
    <label for="">Email</label><input type="email" name="email">
    <label for="">Password</label><input type="password" name="password">
    <input type="submit" value="login">
</form>
<a href="{{url('register')}}">New User Register here</a>
