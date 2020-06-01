<div class="container">
  <div class="card login-form">
    <div class="card-content">
      <h5>Login Perusahaan</h5>
      <form action="<?= site_url('Login/submitPerusahaan') ?>" method="post">
        <div class="input-field">
          <input id="email" type="email" name="email">
          <label for="email">Email</label>
        </div>

        <div class="input-field">
          <input id="password" type="password" name="password">
          <label for="password">Password</label>
        </div>

        <div class="input-field">
          <button class="btn deep-purple" type="submit" style="width: 100%">Login</button>
        </div>
      </form>
    </div>
  </div>
</div>