<!DOCTYPE html>
<html>
<body>

<h2>Add Category</h2>
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form action="<?php echo e(route('addCategory')); ?>" method="post">
	<?php echo csrf_field(); ?>
  <label for="category">Category Name:</label><br>
  <input type="text" id="category" name="category"><br>
  <label for="parent">Choose Parent Category:</label>
  <select name="parent" id="parent">
  	<option value="0">No Category</option>
  <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  	<option value="<?php echo e($category['id']); ?>"><?php echo e($category['category']); ?></option>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </select><br>
  <input type="submit" value="Submit">
</form> 

</body>
</html><?php /**PATH C:\xampp\htdocs\dummyproject\resources\views/category/add_category.blade.php ENDPATH**/ ?>