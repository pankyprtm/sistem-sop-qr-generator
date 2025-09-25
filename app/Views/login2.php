<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Your head content here... -->
</head>

<body>

<section id="hero">
  <!-- Your hero section content here... -->
</section>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-12 col-sm-8 col-md-4 mt-5 pt-3 pb-3 bg-white form-wrapper">
      <div class="container">
        <h3 class="text-center">Login</h3>
        <hr>
        <?php $validation = \Config\Services::validation(); ?>
        <?php if (session()->get('success')) : ?>
          <div class="alert alert-success" role="alert">
            <?= session()->get('success'); ?>
          </div>
        <?php endif; ?>
        <?php if (session()->get('danger')) : ?>
          <div class="alert alert-danger" role="alert">
            <?= session()->get('danger'); ?>
            <?php if (session()->get('resetlink')) {
              echo session()->get('resetlink');
            } ?>
          </div>
        <?php endif; ?>

        <form class="" action="/login" method="post">
          <div class="form-group">
            <label for="email">Email Address</label>
            <input type="text" class="form-control" name="email" id="email" value="<?= set_value('email') ?>">
            <?php if ($validation->getError('email')) { ?>
              <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('email'); ?>
              </div>
            <?php } ?>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" value="">
            <?php if ($validation->getError('password')) { ?>
              <div class='alert alert-danger mt-2'>
                <?= $error = $validation->getError('password'); ?>
              </div>
            <?php } ?>
          </div>
          <?php if ($config->rememberMe) : ?>
            <div class="form-check mb-3">
              <input type="checkbox" class="form-check-input" id="rememberme" name="rememberme" value="1">
              <label class="form-check-label" for="rememberme">Remember Me</label>
            </div>
          <?php endif; ?>

          <div class="text-center">
            <button type="submit" class="btn btn-primary">Login</button>
          </div>

          <div class="text-center mt-3">
            <ul>
              <li><a href="/register">Sign Up</a></li>
              <li><a href="/forgotpassword">Forgot Password?</a></li>
            </ul>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>
