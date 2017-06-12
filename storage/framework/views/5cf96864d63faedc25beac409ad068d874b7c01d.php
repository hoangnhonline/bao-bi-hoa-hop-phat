<!DOCTYPE html>
<!--[if lt IE 7 ]><html dir="ltr" lang="en-US" class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html dir="ltr" lang="en-US" class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en-US" class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en-US" class="no-js ie ie9 lte9"><![endif]-->
<!--[if IE 10 ]><html dir="ltr" lang="en-US" class="no-js ie ie10 lte10"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="vi">
<!--<![endif]-->
<head>
	<title><?php echo $__env->yieldContent('title'); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="robots" content="index,follow"/>
    <meta http-equiv="content-language" content="vi"/>
    <meta name="description" content="<?php echo $__env->yieldContent('site_description'); ?>"/>
    <meta name="keywords" content="<?php echo $__env->yieldContent('site_keywords'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <link rel="shortcut icon" href="<?php echo $__env->yieldContent('favicon'); ?>" type="image/x-icon"/>
    <link rel="canonical" href="<?php echo e(url()->current()); ?>"/>        
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?php echo $__env->yieldContent('title'); ?>" />
    <meta property="og:description" content="<?php echo $__env->yieldContent('site_description'); ?>" />
    <meta property="og:url" content="<?php echo e(url()->current()); ?>" />
    <meta property="og:site_name" content="iCho.vn" />
    <?php $socialImage = isset($socialImage) ? $socialImage : $settingArr['banner']; ?>
    <meta property="og:image" content="<?php echo e(Helper::showImage($socialImage)); ?>" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="<?php echo $__env->yieldContent('site_description'); ?>" />
    <meta name="twitter:title" content="<?php echo $__env->yieldContent('title'); ?>" />        
    <meta name="twitter:image" content="<?php echo e(Helper::showImage($socialImage)); ?>" />
	<link rel="icon" href="<?php echo e(URL::asset('assets/images/favicon.ico')); ?>" type="image/x-icon">
	<!-- <link rel="shortcut icon" href="" type="image/x-icon">
	<link rel="icon" href="" type="image/x-icon"> -->
	<!-- ===== Style CSS Common ===== -->
	<link rel="stylesheet" type="text/css" href="<?php echo e(URL::asset('assets/css/style.css')); ?>">
	<!-- ===== Responsive CSS ===== -->
    <link href="<?php echo e(URL::asset('assets/css/responsive.css')); ?>" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js') }} IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js') }} doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<link href='<?php echo e(URL::asset('assets/animations-ie-fix.css')); ?>' rel='stylesheet'>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>
		<script src="https://oss.maxcdn.com/libs/respond.<?php echo e(URL::asset('assets/js/1.4.2/respond.min.js')); ?>"></script>
	<![endif]-->
</head>
<body>
	
	<div class="wrapper container" id="wrapper">

		<header id="header" class="header">
			<section class="clearfix">
				<div class="col-sm-3 col-xs-12 logo">
					<img src="images/logo.jpg" alt="Logo">
				</div>
				<div class="col-sm-9 col-xs-12 info">
					<div class="newsection_text">
						<h1>CÔNG TY TNHH SẢN XUẤT - THƯƠNG MẠI HÒA HỢP PHÁT</h1>
						<p>Chuyên sản xuất giấy tấm, thủng carton, thùng hộp Offset, in ấn gia công các loại ...</p>
						<p><b>Khu KDC Thuận Giao, Kp. Bình Thuận 2, Thuận Giao, Thuận An, Bình Dương</b></p>
						<p><b>Tel: (0650) 3721230 - Fax: (0650) 3721231 - MST: 3702410080</b></p>
					</div>
				</div>
			</section>
		</header><!-- /header -->

		<nav id="mainNav" class="navbar navbar-default navbar-custom">
			<div class="container" id="main-menu">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
					</button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse menu" id="bs-example-navbar-collapse-1">
					<div class="text-center logo-menu-res">
						<a title="Logo" href="index.html"><img src="images/logo.jpg" alt="Logo"></a>
					</div>
					<ul class="nav navbar-nav navbar-left">
						<li class="level0">
							<a href="<?php echo e(route('home')); ?>" title="Trang Chủ">Trang Chủ</a>
						</li><!-- END MENU HOME -->
						<li class="level0">
							<a href="gioi-thieu.html" title="Giới Thiệu">Giới Thiệu</a>
						</li><!-- END MENU HOME -->
						<li class="level0 parent">
							<a href="san-pham.html" title="Sản Phẩm">Sản Phẩm</a>
							<ul class="level0 submenu submenu-white">
								<?php foreach($loaiSpList as $loaiSp): ?>
								<li class="level1 <?php if($cateList[$loaiSp->id]->count() > 0): ?> parent <?php endif; ?>">
									<a href="<?php echo e(route('danh-muc', $loaiSp->slug)); ?>" title="<?php echo $loaiSp->name; ?>"><?php echo $loaiSp->name; ?></a>
									<ul class="level1 submenu submenu-white">
										<?php if($cateList[$loaiSp->id]->count() > 0): ?>
										<?php foreach($cateList[$loaiSp->id] as $cate): ?>
										<li><a href="<?php echo e(route('danh-muc-con', [$loaiSp->slug, $cate->slug])); ?>" title="<?php echo $cate->name; ?>"><?php echo $cate->name; ?></a></li>
										<?php endforeach; ?>
										<?php endif; ?>
									</ul>
								</li>
								<?php endforeach; ?>
							</ul>
						</li><!-- END MENU HOME -->
						<li class="level0">
							<a href="ho-so-cong-ty.html" title="Hồ Sơ Công Ty">Hồ Sơ Công Ty</a>
						</li><!-- END MENU HOME -->
						<li class="level0">
							<a href="lien-he.html" title="Liên Hệ">Liên Hệ</a>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav><!-- /mainNav -->

	 	<?php echo $__env->yieldContent('slider'); ?>

        <?php echo $__env->yieldContent('gioi_thieu'); ?>

		<section class="block-2-col clearfix">
			<?php echo $__env->make('frontend.home.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

			<?php echo $__env->yieldContent('content'); ?>
		</section><!-- /block-2-col -->

		<footer id="footer">
			<div class="footer-main">
				<address class="block-address">
					<p style="font-size: 16px; color: #006699; text-transform: uppercase;">CÔNG TY TNHH SẢN XUẤT - THƯƠNG MẠI HÒA HỢP PHÁT</p>
					<p><strong>Địa chỉ:</strong> Khu KDC Thuận Giao, Kp. Bình Thuận 2, Thuận Giao, Thuận An, Bình Dương</p>
					<p>
						<strong>Điên thoại:</strong> (0650) 3721230 - <strong>Fax:</strong>(0650) 3721231
					</p>
					<p>
						<strong>Email:</strong> <a href="mailto:baobigiay.hoahopphatbd@gmail.com?subject=feedback" class="link"> baobigiay.hoahopphatbd@gmail.com</a> - 
						<strong>Website:</strong><a href="#" title="" class="link">http://truongdeptrai.com</a>
					</p>
				</address>
			</div>
		</footer>

	</div><!-- /main -->

	<a id="return-to-top" class="td-scroll-up" href="javascript:void(0)">
  		<i class="fa fa-angle-up" aria-hidden="true"></i>
	</a>
	<!-- Return To Top -->


	<!-- ===== JS ===== -->
	<script src="<?php echo e(URL::asset('assets/js/jquery.min.js')); ?>"></script>
	<!-- JS Bootstrap -->
	<script src="<?php echo e(URL::asset('assets/vendor/bootstrap/bootstrap.min.js')); ?>"></script>
	<!-- JS Semantic UI -->
	<script src="<?php echo e(URL::asset('assets/vendor/semantic-ui/semantic.min.js')); ?>"></script>
	<!-- JS Nivo Slider -->
	<script src="<?php echo e(URL::asset('assets/vendor/nivo-slider/jquery.nivo.slider.js')); ?>"></script>
	<script src="<?php echo e(URL::asset('assets/vendor/nivo-slider/jquery.nivo.slider.pack.js')); ?>"></script>
	<!-- ===== JS Bxslider ===== -->
	<script src="<?php echo e(URL::asset('assets/vendor/bxslider/jquery.bxslider.min.js')); ?>"></script>
	<!-- JS Sticky -->
	<script src="<?php echo e(URL::asset('assets/vendor/sticky/jquery.sticky.js')); ?>"></script>
	<!-- Js Common -->
	<script src="<?php echo e(URL::asset('assets/js/common.js')); ?>"></script>

	<script type="text/javascript"> 
	$(window).on('load', function() {
	    $('#slider').nivoSlider({
	    	theme: 'dark',
	    	effect: 'random',                 // Specify sets like: 'fold,fade,sliceDown' 
		    slices: 15,                       // For slice animations 
		    boxCols: 8,                       // For box animations 
		    boxRows: 4,                       // For box animations 
		    animSpeed: 500,                   // Slide transition speed 
		    pauseTime: 3000,                  // How long each slide will show 
		    startSlide: 0,                    // Set starting Slide (0 index) 
		    directionNav: true,               // Next & Prev navigation 
		    controlNav: 'bullets',                 // 1,2,3... navigation 
		    controlNavThumbs: false,          // Use thumbnails for Control Nav 
		    pauseOnHover: true,               // Stop animation while hovering 
		    manualAdvance: true,             // Force manual transitions 
		    prevText: 'Prev',                 // Prev directionNav text 
		    nextText: 'Next',                 // Next directionNav text
	    }); 
	}); 
	$(".bxslider").bxSlider({
		auto: true,
		pause: 3000,
		autoHover: true,
        pagerCustom: '.bx-thumbnail',
        controls: false,
        // adaptiveHeight: true,
        nextText: '<i class="icofont icofont-rounded-right"></i>',
        prevText: '<i class="icofont icofont-rounded-left"></i>'
    });

    $(".bx-thumbnail").bxSlider({
        slideMargin: 7,
        maxSlides: 3,
        pager: false,
        controls: false,
        slideWidth: 71,
        infiniteLoop: false
    });
	</script>

</body>
</html>