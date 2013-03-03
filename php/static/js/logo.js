	function formatText(index, panel) {
				return index + "";
			};
	
			$(function () {
			
					$('.anythingSlider').anythingSlider({
							easing: "easeInOutExpo",        // Anything other than "linear" or "swing" requires the easing plugin
							autoPlay: false,                 // This turns off the entire FUNCTIONALY, not just if it starts running or not.
							delay: 3000,                    // How long between slide transitions in AutoPlay mode
							startStopped: false,            // If autoPlay is on, this can force it to start stopped
							animationTime: 600,             // How long the slide transition takes
							hashTags: true,                 // Should links change the hashtag in the URL?
							buildNavigation: false,          // If true, builds and list of anchor links to link to each slide
							pauseOnHover: true,             // If true, and autoPlay is enabled, the show will pause on hover
							startText: "Go",                // Start text
							stopText: "Stop",               // Stop text
							forwardText: "next project",
							backText: "prev project",
							navigationFormatter: formatText // Details at the top of the file on this use (advanced use)
					});
					
			});