<?php $__env->startSection('content'); ?>
  <div class="login">
    <div class="container">
        <form method="POST" action="<?php echo e(route('user.authUser')); ?>">
            <?php echo csrf_field(); ?>
        <table
          class="table m-auto"
          style="table-layout: auto; width: auto; border: 1px solid #ccc"
        >
          <thead>
            <th colspan="2" class="text-center">Màn hình đăng nhập</th>
          </thead>
          <tbody>
            <tr>
              <td>Username</td>
              <td>
                <input type="text" name="name" id="name" placeholder="Name"/>
                <?php if($errors->has('name')): ?>
                    <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                <?php endif; ?>
              </td>
            </tr>
            <tr>
              <td>Mật khẩu</td>
              <td>
                <input type="text" name="password" id="password" placeholder="Password"/>
                <?php if($errors->has('password')): ?>
                <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                <?php endif; ?>
              </td>
            </tr>
            <tr>
              <td></td>
              <td><input type="checkbox" /> Ghi nhớ mật khẩu</td>
            </tr>
            <tr class="pt-4">
              <td></td>
              <td>
                <span><a href="">Quên mật khẩu</a></span>
                <button type="submit" class="btn btn-primary">
                  Đăng nhập
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </form>
    </div>
  </div>
  <!-- Footer -->
  
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\HK4\BE2\laptrinhweb_demo.git\example-app\resources\views/crud_user/login.blade.php ENDPATH**/ ?>