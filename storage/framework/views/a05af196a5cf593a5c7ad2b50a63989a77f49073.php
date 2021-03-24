<!DOCTYPE html>
<html>
<body>

<h2>Category</h2>
<?php $__currentLoopData = $parent_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $parent_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php echo e($parent_category->category); ?> <a href="<?php echo e(route('add_product',['category'=>base64_encode($parent_category->id)])); ?>">Add Product</a><br>
  <?php if(count($parent_category->subcategory)): ?>
    <?php echo $__env->make('category.subcategories',['subcategories'=>$parent_category->subcategory], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</body>
</html><?php /**PATH C:\xampp\htdocs\dummyproject\resources\views/category/categories.blade.php ENDPATH**/ ?>