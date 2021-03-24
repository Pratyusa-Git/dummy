<?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $subcategorry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<ul>
	<li>
		<?php echo e($subcategorry->category); ?> <a href="<?php echo e(route('add_product',['category'=>base64_encode($subcategorry->id)])); ?>">Add Product</a>
	</li>
		<?php if(count($subcategorry->subcategory)): ?>
			<?php echo $__env->make('category.subcategories',['subcategories'=>$subcategorry->subcategory], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php endif; ?>
</ul>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php /**PATH C:\xampp\htdocs\dummyproject\resources\views/category/subcategories.blade.php ENDPATH**/ ?>