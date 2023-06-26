<!DOCTYPE html>
<html lang="zh-Hant-TW">
@include('Include.head_inc')

<body class="stretched">

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PTLHLW4"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->



	<div id="wrapper" class="clearfix">

		<!-- <div class="modal-on-load" data-target="#myModal1"></div>

		<div class="modal1 mfp-hide subscribe-widget mx-auto" id="myModal1" style="max-width: 750px;">
			<div class="row justify-content-center bg-white align-items-center" style="min-height: 380px;">
				<div class="col-md-5 p-0">
					<div style="background: url('images/modals/modal1.jpg') no-repeat center right; background-size: cover;  min-height: 380px;"></div>
				</div>
				<div class="col-md-7 bg-white p-4">
					<div class="heading-block border-bottom-0 mb-3">
						<h3 class="font-secondary nott ">Join Our Newsletter &amp; Get <span class="text-danger">40%</span> Off your First Order</h3>
						<span>Get Latest Fashion Updates &amp; Offers</span>
					</div>
					<div class="widget-subscribe-form-result"></div>
					<form class="widget-subscribe-form2 mb-2" action="include/subscribe.php" method="post">
						<input type="email" id="widget-subscribe-form2-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email Address..">
						<div class="d-flex justify-content-between align-items-center mt-1">
							<button class="button button-dark  bg-dark text-white ml-0" type="submit">Subscribe</button>
							<a href="#" class="btn-link" onClick="$.magnificPopup.close();return false;">Don't Show me</a>
						</div>
					</form>
					<small class="mb-0 font-italic text-black-50">*We also hate Spam &amp; Junk Emails.</small>
				</div>
			</div>
		</div> -->

		<div class="modal1 mfp-hide" id="modal-register">
			<div class="card mx-auto" style="max-width: 540px;">
				<div class="card-header py-3 bg-transparent center">
					<h3 class="mb-0 font-weight-normal">Hello, Welcome Back</h3>
				</div>
				<div class="card-body mx-auto py-5" style="max-width: 70%;">

					<a href="#" class="button button-large btn-block si-colored si-facebook nott font-weight-normal ls0 center m-0"><i class="icon-facebook-sign"></i> Log in with Facebook</a>

					<div class="divider divider-center"><span class="position-relative" style="top: -2px">OR</span></div>

					<form id="login-form" name="login-form" class="mb-0 row" action="#" method="post">

						<div class="col-12">
							<input type="text" id="login-form-username" name="login-form-username" value="" class="form-control not-dark" placeholder="Username" />
						</div>

						<div class="col-12 mt-4">
							<input type="password" id="login-form-password" name="login-form-password" value="" class="form-control not-dark" placeholder="Password" />
						</div>

						<div class="col-12">
							<a href="#" class="float-right text-dark font-weight-light mt-2">Forgot Password?</a>
						</div>

						<div class="col-12 mt-4">
							<button class="button btn-block m-0" id="login-form-submit" name="login-form-submit" value="login">Login</button>
						</div>
					</form>
				</div>
				<div class="card-footer py-4 center">
					<p class="mb-0">Don't have an account? <a href="#"><u>Sign up</u></a></p>
				</div>
			</div>
		</div>
		

		@include('Include.header_inc')

		
		<section id="slider" class="slider-element revslider-wrap">
		</section>

		<section id="content">
			<div class="content-wrap">
				<div class="container">

					<div class="heading_box center headw_md">
						<p>ディディピック !</p>
						<h3>提供一站式日貨<span>代購＆直送</span>，日本同步限定品<span>直覺</span>買！</h3>
					</div>

					<div>

						<div class="align-items-center mt-5 mb-4 ind_title_box">
							<div class="ind_title">
								<h2>達人勸敗</h2>
								<span>PICKING!<br><small>ピック</small></span>
							</div>
							<div class="mt-4 mt-lg-0 morebtn">
								<a href="master.html">看更多</a>
							</div>
						</div>

						<div class="row justify-content-center col-mb-50 pickingbox" id="master">
							

						</div>
					</div>
					<div class="clear"></div>
					<div class="h_20"></div>

					<div>

						<div class="align-items-center mt-5 mb-4 ind_title_box">
							<div class="ind_title">
								<h2>熱銷排行</h2>
								<span>RANKING!<br><small>ランキング</small></span>
							</div>
							<div class="mt-4 mt-lg-0 morebtn">
								<a href="product_top20.htm">看更多</a>
							</div>
						</div>


						<div class="ocpropad">
							<div id="oc-products" class="owlbox owl-carousel products-carousel carousel-widget" data-pagi="false" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-lg="4">
							</div>
						</div>
					</div>
					<div class="clear"></div>
					<div class="h_20"></div>

					<div class="addbox">

							<div class="addimg">
								<img src="images/indbanner_1.jpg" alt="" class="img_stretch">
							</div>
	
							<div class="row">
								<div class="col-sm-6 col-lg-4 text-center addiconbox">
									<img src="images/addicon_free.png" alt="">
									<h5>滿額免運</h5>
								</div>
	
								<div class="col-sm-6 col-lg-4 text-center addiconbox" data-delay="200">
									<img src="images/addicon_map.png" alt="">
									<h5>日本同步</h5>
								</div>
	
								<div class="col-sm-6 col-lg-4 text-center addiconbox" data-delay="400">
									<img src="images/addicon_airplan.png" alt="">
									<h5>日本直送</h5>
								</div>
	
							
							</div>
	
					</div>
					<div class="clear"></div>
					<div class="h_20"></div>

					<div>

						<div class="align-items-center mt-5 mb-4 ind_title_box">
							<div class="ind_title">
								<h2>熱銷品牌</h2>
								<span>BRANDING!<br><small>ランキング</small></span>
							</div>
							<div class="mt-4 mt-lg-0 morebtn">
								<a href="#">看更多</a>
							</div>
						</div>


						<div class="brandbox" id="brand">

						</div>

					</div>
					<div class="clear"></div>
					<div class="h_40"></div>

				</div>

				<div class="bg_main feedbakbox">
					<div class="h_20"></div>
					<div class="container">

						<div class="align-items-center mt-5 mb-4 ind_title_box">
							<div class="ind_title">
								<h2 class="title_w">好評推薦</h2>
								<span class="title_w">FEEDBACK!<br><small>ランキング</small></span>
							</div>
							<div class="mt-4 mt-lg-0 morebtn">
								<a href="feedback.html">看更多</a>
							</div>
						</div>

						

						<div id="posts" class="post-grid row grid-container gutter-40">
						</div>


					</div>
				</div>
				<div class="clear"></div>
				<div class="h_40"></div>

				<div class="container">
					<div class="fancy-title fancy-c mt-5 center">
						<h2>常見問題</h2>
						<span>FAQ!<br><small>よくある質問</small></span>
					</div>

					<div class="qabox">
						<ul>
							<li><a href="qa.html">購物一定要加入會員嗎？</a></li>
							<li><a href="qa.html">目前提供哪些付款方式？</a></li>
							<li><a href="qa.html">退出貨日期是幾天呢？我什麼時候可以收到貨？</a></li>
							<li><a href="qa.html">如何查詢目前訂單的處理情況？</a></li>
							<li><a href="qa.html">完成訂購後，可以取消或修改訂單嗎？</a></li>
							<li><a href="qa.html">收到商品有毀損或數量不正確，該如何處理？</a></li>
						</ul>
					</div>

				</div>

	
				<div class="clear"></div>

				
			</div>
		</section>

		
		@include('Include.footer_inc')

	</div>

	
	<div id="gotoTop"><img src="images/gotop.png" alt=""></div>

	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>

	<script src="js/functions.js"></script>

	
	<script src="include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			csrf = $("meta[name=csrf-token]").attr('content');
	        $.ajax({
	            url:"/ajax_index",
	            type:"POST",
	            data:{},
	            headers: {
	                //把csrfToken放到headers
	                'X-CSRF-TOKEN': csrf
	            },
	            success:function(resp){
	                resp = $.parseJSON(resp);
	                resp.forEach(function(value, index){
	                	$("#" + value.id).html(value.data);
	                });
	            },
	            error:function(xhr){
	                console.log(xhr);
	            }
	        });
		});
	</script>
	

</body>
</html>