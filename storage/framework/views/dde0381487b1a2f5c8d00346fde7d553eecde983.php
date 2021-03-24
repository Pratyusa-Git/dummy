<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>Products</h2>

<table>
  <tr>
    <th>Product</th>
    <th>Category</th>
    <th>Price</th>
    <th>Description</th>
  </tr>
  <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <tr>
    <td><?php echo e($product->product_name); ?></td>
    <td><?php echo e($product->category->category); ?></td>
    <td><?php echo e($product->price); ?></td>
    <td><?php echo e($product->description); ?></td>
  </tr>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>

</body>
</html><?php /**PATH C:\xampp\htdocs\dummyproject\resources\views/product/product.blade.php ENDPATH**/ ?>