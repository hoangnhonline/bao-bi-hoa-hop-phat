<?php echo $__env->make('frontend.partials.meta', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<div class="col-sm-9 block-main">
<div class="block-product block-block-title block-page">
	<h2 class="block-title">
	<?php if(isset($is_child)): ?>
	<?php echo $rsCate->name; ?>

	<?php else: ?>
	<?php echo $rs->name; ?>

	<?php endif; ?>
	</h2>
	<div class="block-share absolute">
		<span>Chia sẻ lên:</span>
		<a href="#" title="" class="facebook"><i class="fa fa-facebook"></i></a>
		<a href="#" title="" class="google"><i class="fa fa-google-plus"></i></a>
		<a href="#" title="" class="twitter"><i class="fa fa-twitter"></i></a>
		<a href="#" title="" class="print"><i class="fa fa-print"></i></a>
		<a href="#" title="" class="envelope"><i class="fa fa-envelope-o"></i></a>
	</div>
	<div class="block-content">
		<?php if(!empty( (array) $productList )): ?>
		<div class="row block-list-product">
			<?php foreach( $productList as $product ): ?>
			<div class="col-md-5ths col-xs-6">
				<div class="item">
					<div class="product-img">
						<a href="<?php echo e(route('chi-tiet', [$product->slug_loai, $product->slug, $product->id])); ?>" title="<?php echo $product->name; ?>">
							<img src="<?php echo e(Helper::showImageThumb($product->image_url)); ?>" alt="<?php echo $product->name; ?>">
						</a>
					</div>
					<h2 class="product-name"><?php echo $product->name; ?></h2>
				</div>
			</div><!-- /col-md-5ths col-xs-6 -->
			<?php endforeach; ?>				
		</div>
		<?php endif; ?>
	</div><!-- /block-content -->
</div><!-- /block-product -->
</div><!-- /block-main -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontend.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>