<!DOCTYPE html>
<html>
<body>

<h2>Add Product</h2>
<?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>

<form action="<?php echo e(route('addProduct')); ?>" method="post">
	<?php echo csrf_field(); ?>
  <label for="product">Product Name:</label><br>
  <input type="text" id="product" name="product"><br>
  <label for="price">Product Price:</label><br>
  <input type="number" id="price" name="price" min="0"><br>
  <label for="description">Product Description:</label><br>
  <textarea name="description"></textarea><br>
  <input type="hidden" name="category_id" value="<?php echo e($category_id); ?>">
  <input type="submit" value="Submit">
</form> 

</body>
</html><?php /**PATH C:\xampp\htdocs\dummyproject\resources\views/product/create_product.blade.php ENDPATH**/ ?>