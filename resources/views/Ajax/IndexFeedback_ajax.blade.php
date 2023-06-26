@for($i=1;$i<=3;$i++)
	<div class="entry col-md-4 col-sm-6 col-12" data-delay="0">
		<div class="grid-inner">
			<div class="entry-image">
				<a href="images/feedimg_1.jpg" data-lightbox="image"><img src="images/feedimg_1.jpg" alt="[女生小心機]素顏美肌養成術！只需每天這樣做"></a>
			</div>
			<div class="entry-title">
				<h2><a href="feedback_info.html">[女生小心機]素顏美肌養成術！只需每天這樣做</a></h2>
			</div>
			<div class="entry-meta">
				<ul>
					<li><i class="icon-calendar3"></i> 20th Feb 2021</li>
					<li><a href="#"><i class="icon-eye2"></i> 13</a></li>
					<li><div class="s-keep"></div></li>
				</ul>
			</div>
		</div>
	</div>
@endfor
<script>
	$(".s-keep, .keep, .liked").on('click', function(){
		$(this).hasClass('clicked')?$(this).removeClass('clicked'):$(this).addClass('clicked');
	});
</script>