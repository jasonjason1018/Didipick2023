@for($i=1;$i<=10;$i++)
	<div class="oc-item">
		<div class="product probox">
			<div class="product_logo center">
				<a href="#"><img src="images/product_logo/prologo_1.jpg" alt=""></a>
			</div>

			<div class="product-image">
				<a href="product_info.html"><img src="images/product_img/proimg_1.jpg" alt="日本 Fujiko Ponpon Powder 頭髮專用吸油粉撲"></a>
				<div class="liked">
					<!-- <img src="images/product_heart.png" alt=""> -->
				</div>
			</div>
			<div class="product-desc center">
				<div class="product-title"><h3><a href="product_info.html">日本 Fujiko Ponpon Powder 頭髮專用吸油粉撲</a></h3></div>
				<div class="product-price"><ins><small>NT.</small>300</ins></div>
				<div class="product-rating">
					<i class="icon-star3"></i>
					<i class="icon-star3"></i>
					<i class="icon-star3"></i>
					<i class="icon-star-half-full"></i>
					<i class="icon-star-empty"></i>
				</div>
			</div>
		</div>
	</div>
@endfor
<div class="oc-item more-item">
	<a href="product_top20.html">
		<div></div><img class="more-cover" src="images/more-cover@2x.png">
	</a>
</div>
<!-- <script>
	$(".liked").on('click', function(){
		$(this).hasClass('clicked')?$(this).removeClass('clicked'):$(this).addClass('clicked');
	});
</script> -->