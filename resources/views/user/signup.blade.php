<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h1>Sign Up</h1>
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
        <form action="" method="post">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="email">Password</label>
                <input type="password" id="password" name="password">
            </div>
            <button type="submit">Sign In</button>
        </form>
    </div>
</div>