<h3>Create an account</h3>
<form action="{{ route('register') }}" method="post">
    @csrf

    <input type="text" id="name" name="name" placeholder="Name" @error('name') is-invalid @enderror value="{{ old('name') }}" required="" autocomplete="name" autofocus>

    <input type="email" name="Email" placeholder="Email Address" required="">
    <input type="password" name="Password" placeholder="Password" required="">
            <input type="password" name="ConfirmPassword" placeholder="Confirm Password" required="">
    <input type="submit" value="Register">
</form>


