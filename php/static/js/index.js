		$(function(){
			
			//Expand all items
			$(".last-arrow").toggle(function(){
				$(this).addClass("alt");
				$(this).parent("ul").find("dt").slideUp();
				$(this).parent("ul").find("p.description").addClass("active");
				$(this).parent("ul").find(".divider").animate({height: 0, marginTop:0}, "normal");
				$(this).parent("ul").find("a").hide();
			}, function(){
				$(this).removeClass("alt");
				$(this).parent("ul").find("dt").slideDown();
				$(this).parent("ul").find("p.description").removeClass("active");
				$(this).parent("ul").find(".divider").animate({height: "12px", marginTop:"5px"}, "normal");
				$(this).parent("ul").find("a").show();
			});
			
			
			//Gallery slidedown
			$(".gallery dd").click(function(){
				$(this).find("a").show();
				$(this).find("p.description").removeClass("active");
				$(this).prev("dt").slideDown();
				$(this).parent("dl").next(".divider").animate({height: "12px", marginTop:"5px"}, "normal");
			});
			
			
			// Hide divider
			$(".gallery .divider").click(function(){
				$(this).animate({height: 0, marginTop: 0}, "normal");
				$(this).prev("dl").find("dt").slideUp();
				$(this).prev("dl").find("dd p.description").addClass("active");
				$(this).prev("dl").find("a").hide();
			});
			
		});

