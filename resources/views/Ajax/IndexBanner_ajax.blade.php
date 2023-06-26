<div id="portfolio_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="nice-and-clean-projects" data-source="gallery" style="margin:0px auto;background:#2d3032;padding:0px;margin-top:0px;margin-bottom:0px;">
	<div id="portfolio" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.4.7.2">
		<ul>
			@for($i=1;$i<=6;$i++)
				<li data-index="rs-312" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="include/rs-plugin/demos/assets/images/100x50_carousel3.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Wild" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
					<img src="images/banner_{{$i>3?$i-3:$i}}.jpg"  alt="Image"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>





					<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
						 id="slide-312-layer-10"
						 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
						 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
									data-width="2"
						data-height="75"
						data-whitespace="nowrap"

						data-type="shape"
						data-responsive_offset="on"

						data-frames='[{"delay":"bytrigger","speed":600,"frame":"0","from":"sY:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":600,"frame":"999","to":"sY:0;","ease":"Power4.easeOut"}]'
						data-textAlign="['inherit','inherit','inherit','inherit']"
						data-paddingtop="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-lasttriggerstate="reset"
						style="z-index: 7;font-family:Open Sans;background-color:rgba(255,255,255,1);"> </div>

					<div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
						 id="slide-312-layer-11"
						 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
						 data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
									data-width="75"
						data-height="2"
						data-whitespace="nowrap"

						data-type="shape"
						data-responsive_offset="on"

						data-frames='[{"delay":"bytrigger","speed":600,"frame":"0","from":"sX:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"bytrigger","speed":600,"frame":"999","to":"sX:0;","ease":"Power4.easeOut"}]'
						data-textAlign="['inherit','inherit','inherit','inherit']"
						data-paddingtop="[0,0,0,0]"
						data-paddingright="[0,0,0,0]"
						data-paddingbottom="[0,0,0,0]"
						data-paddingleft="[0,0,0,0]"
						data-lasttriggerstate="reset"
						style="z-index: 8;font-family:Open Sans;background-color:rgba(255,255,255,1);"> </div>
				</li>
			@endfor
		</ul>
		<div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
	</div>
</div>
<script>
		var revapi130,
			tpj;
		var $ = jQuery.noConflict();

		(function() {
			if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",onLoad); else onLoad();

			function onLoad() {
				if (tpj===undefined) { tpj = jQuery; if("off" == "on") tpj.noConflict();}
				if(tpj("#portfolio").revolution == undefined){
					revslider_showDoubleJqueryError("#portfolio");
				}else{
					revapi130 = tpj("#portfolio").show().revolution({
						sliderType:"carousel",
						jsFileLocation:"include/rs-plugin/js/",
						sliderLayout:"fullwidth",
						dottedOverlay:"none",
						delay:9000,
						navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
							 mouseScrollReverse:"default",
							onHoverStop:"off",
							arrows: {
								style:"uranus",
								enable:true,
								hide_onmobile:false,
								hide_onleave:false,
								tmp:'',
								left: {
									h_align:"center",
									v_align:"bottom",
									h_offset:-30,
									v_offset:30
								},
								right: {
									h_align:"center",
									v_align:"bottom",
									h_offset:30,
									v_offset:30
								}
							}
						},
						carousel: {
							horizontal_align: "center",
							vertical_align: "center",
							fadeout: "off",
							maxVisibleItems: 5,
							infinity: "on",
							space: 0,
							stretch: "off",
							 showLayersAllTime: "on",
							 easing: "Power3.easeInOut",
							 speed: "800"
						},
						viewPort: {
							enable:true,
							outof:"wait",
							visible_area:"80%",
							presize:false
						},
						responsiveLevels:[1240,1024,778,480],
						visibilityLevels:[1240,1024,778,480],
						gridwidth:[600,600,500,400],
						gridheight:[640,600,500,400],
						lazyType:"none",
						shadow:0,
						spinner:"spinner3",
						stopLoop:"on",
						stopAfterLoops:0,
						stopAtSlide:1,
						shuffle:"off",
						autoHeight:"off",
						disableProgressBar:"on",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
					});
				} /* END OF revapi call */
			} /* END OF ON LOAD FUNCTION */
		}()); /* END OF WRAPPING FUNCTION */
	</script>