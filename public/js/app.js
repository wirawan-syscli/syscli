/* Utility Classes for screen rules */

function isMobile(){ return $(".text-left-center-right").css("text-align") == "left"; };
function isTablet(){ return $(".text-left-center-right").css("text-align") == "center"; };	
function isDesktop(){ return $(".text-left-center-right").css("text-align") == "right"; };
function isSlidingNavbar(){ return $("#header-bar").css("display") == "block"; };	

$(document).ready(function(){

	function init(){

		// validate screen's rules
		checkScreenCompatibility();

		// init a slideshow
		$('#slideshow').owlCarousel({
			margin: 10,
		    loop: true,
		    autoplay: true,
		    items: 1,
		    responsive:{
		    	0:{
		    		stagePadding: 26
		    	},
		    	645:{
		    		stagePadding: 46
		    	},
		    	900: {
		    		stagePadding: 56
		    	},
		    	1024: {
		    		items: 2,
		    		stagePadding: 120
		    	},
		    	1900: {
		    		items: 2,
		    		stagePadding: 200
		    	}
		    }
		});
		$("#client-detail").owlCarousel({
			autoplay:true,
			responsive:{
				0:{
					items:2
				},
				450:{
					items:3
				},
				600:{
					items:4
				},
				700:{
					items:5
				},
				1540:{
					items:7
				}
			}
		});

	};

	function checkScreenCompatibility(){
		if(isSlidingNavbar()){
			$("#header-login-bar").hide();
			$("#header-navigation").hide();
		}else{
			$("#header-login-bar").hide();
			$("#header-navigation").show("fast");
		}

		if(!isMobile()){
			$(".services-item .services-bottom").slideUp()
			$(".services-item:first-child").addClass("hide");
			$(".services-item").not(".hide").each(function(){
				$(this).hide().show();
			});
			$("#services-big-item-wrapper").removeClass("hide");
		}else{
			$(".services-item:first-child").removeClass("hide");
			$("#services-big-item-wrapper").addClass("hide")
		}
	};

	function scrollTo(target){
		$("html, body").animate({scrollTop: target}, "slow");
	}

	function scrollToSection(section){
		var targetSection = "#" + section.html().toLowerCase() + "-wrapper";
		var targetHeight = $(targetSection).offset().top;
		var headerHeight = 0;

		if(isMobile()){
			headerHeight = $("#header-navigation").height();
		}

		targetHeight = targetHeight - headerHeight;

		scrollTo(targetHeight);

		//console.log(targetSection);
		//var headerHeight = $("#header").height();
		// menu = '#' + menu;

		// if(!$("#header-wrapper").hasClass("fixed")){
		// 	headerHeight = headerHeight + $("#header-wrapper").height();
		// }

		// if(isDesktop()){
		// 	headerHeight = headerHeight - $("#header").height() + $("#header-menubar-wrapper").height();
		// }

		// destinedHeight = $(menu).offset().top - headerHeight;
		// $("html, body").animate({scrollTop:destinedHeight}, "slow");
	}

	function slideHeaderNavigation($element, navbar){
		if(navbar === undefined){ navbar = true }; // default parameter

		if(isSlidingNavbar() || navbar == false){
			if(isDesktop()){
				$($element).fadeToggle({
					"duration": 300
				});
			}else{
				$($element).slideToggle({
					"duration": 300
				});
			}
		}
	};

	function showServices($service){
		$($service).find(".services-bottom").slideToggle();
	};

	function showBigServices($service){
		var $bigService = $("#services-big-item")

		var bigTitle = $bigService.find("h3");
		var bigDesc = $bigService.find("p");

		var title = $($service).find("h4").html();
		var desc = $($service).find("p").html();

		// Replace text
		bigTitle.html(title);
		bigDesc.html(desc);

		// Replace icon
		var newClassString = $($service).find(".icon").attr("class");
		$bigService.find(".icon").removeClass().addClass(newClassString);


		// Add animation for selected service's item and big service's item
		$($service).siblings(".hide").slideDown("slow").removeClass("hide");
		$($service).addClass("hide").hide("slow");
		$bigService.hide().slideDown("slow");
	}

	init();

	$(window).resize(function(){checkScreenCompatibility()});

	$("#header-bar").click(function(){slideHeaderNavigation($("#header-navigation"))});
	$("#header-login").click(function(){slideHeaderNavigation($("#header-login-bar"), false)});
	$("#header-navigation").click(function(){slideHeaderNavigation($(this))});
	$("#header-navigation a").click(function(){scrollToSection($(this))});
	$(".services-item").click(function(){
		if(!isMobile()){
			showBigServices($(this));
		}else{
			showServices($(this));
		};
	});
	$("#copyright-top-button img").click(function(){scrollTo(0)});
});