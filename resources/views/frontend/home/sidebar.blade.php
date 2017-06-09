<div class="col-sm-3 block-sidebar">
				<section class="block block-search">
					<div class="block-content">
						<form action="formsearch.php" method="POST" class="form-inline">
							<div class="form-group input-serach-sidebar">
								<input type="text" placeholder="Tìm sản phẩm và dịch vụ">
							</div>
							<button type="submit" class="btn-search"><i class="fa fa-search"></i></button>
						</form>
					</div>
				</section><!-- /block-search -->
				@foreach($loaiSpList as $loaiSp)
				<section class="block block-menu-sidebar">
					<h3 class="block-title"><a title="{!! $loaiSp->name !!}" href="{{ route('danh-muc', $loaiSp->slug) }}">{!! $loaiSp->name !!}</a></h3>
					@if($cateList[$loaiSp->id]->count() > 0)
					<ul class="block-content">
						@foreach($cateList[$loaiSp->id] as $cate)
						<li><a href="{{ route('danh-muc-con', [$loaiSp->slug, $cate->slug])}}" title="{!! $cate->name !!}">{!! $cate->name !!}</a></li>
						@endforeach
					</ul>
					@endif
				</section><!-- /block-menu-sidebar -->
				@endforeach
				<section class="block block-contact-sidebar block-title-sidebar">
					<h3 class="block-title">Thông Tin Liên Hệ</h3>
					<div class="block-content">
						<div class="contact-sidebar-item">
							<img src="{{ URL::asset('assets/images/contact2.jpg') }}" alt="">
							<div class="contact-sidebar-item-bottom">
								<p class="contact-name">Ông Trần Ngọc Tới</p>
								<p class="contact-position">Giám Đốc</p>
								<p class="contact-phone">0931 824 042 - (0650) 3721230</p>
								<p class="contact-email">Email: <a href="mailto:joe@example.com?subject=feedback" class="link"></a></p>
								<div class="contact-add">
									<a href="skype:2?chat"><img src="{{ URL::asset('assets/images/skype-icon.png') }}" alt=""></a>
									<a href="ymsgr:SendIM?baobitruongnx"><img src="{{ URL::asset('assets/images/Yahoo_3.png') }}" alt=""></a>
								</div>
							</div>
						</div><!-- /contact-sidebar-item -->
						<div class="contact-sidebar-item">
							<img src="{{ URL::asset('assets/images/contact1.jpg') }}" alt="">
							<div class="contact-sidebar-item-bottom">
								<p class="contact-name">Ms.Sen</p>
								<p class="contact-position">P. Kinh Doanh</p>
								<p class="contact-phone">0000 000 000</p>
								<p class="contact-email">Email: <a href="mailto:joe@example.com?subject=feedback" class="link"></a></p>
								<div class="contact-add">
									<a href="skype:2?chat"><img src="{{ URL::asset('assets/images/skype-icon.png') }}" alt=""></a>
									<a href="ymsgr:SendIM?baobitruongnx"><img src="{{ URL::asset('assets/images/Yahoo_3.png') }}" alt=""></a>
								</div>
							</div>
						</div><!-- /contact-sidebar-item -->
					</div>
				</section><!-- /block-contact-sidebar -->
			</div><!-- /block-sidebar -->