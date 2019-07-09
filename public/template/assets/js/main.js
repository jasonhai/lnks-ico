/*
	Landed by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function($) {

	$(window).scroll(function(){
	    if ($(window).scrollTop() >= 12) {
	        $('body').addClass('fixed-header');
	    }
	    else {
	        $('body').removeClass('fixed-header');
	    }
	});

	var	$window = $(window),
		$body = $('body');

	// Breakpoints.
		breakpoints({
			xlarge:   [ '1281px',  '1680px' ],
			large:    [ '981px',   '1280px' ],
			medium:   [ '737px',   '980px'  ],
			small:    [ '481px',   '736px'  ],
			xsmall:   [ null,      '480px'  ]
		});

	// Touch mode.
		if (browser.mobile)
			$body.addClass('is-touch');


	// Dropdowns.
		$('#nav > ul').dropotron({
			alignment: 'right',
			hideDelay: 350
		});

	// Nav.

		// Title Bar.
			$(
				'<div id="titleBar">' +
					'<a href="#navPanel" class="toggle"></a>' +
					'<span class="title">' + $('#logo').html() + '</span>' +
				'</div>'
			)
				.appendTo($body);

		// Panel.
			$(
				'<div id="navPanel">' +
					'<nav>' +
						$('#nav').navList() +
					'</nav>' +
				'</div>'
			)
				.appendTo($body)
				.panel({
					delay: 500,
					hideOnClick: true,
					hideOnSwipe: true,
					resetScroll: true,
					resetForms: true,
					side: 'left',
					target: $body,
					visibleClass: 'navPanel-visible'
				});

	// Parallax.
	// Disabled on IE (choppy scrolling) and mobile platforms (poor performance).
		if (browser.name == 'ie'
		||	browser.mobile) {

			$.fn._parallax = function() {

				return $(this);

			};

		}
		else {

			$.fn._parallax = function() {

				$(this).each(function() {

					var $this = $(this),
						on, off;

					on = function() {

						$this
							.css('background-position', 'center 0px');

						$window
							.on('scroll._parallax', function() {

								var pos = parseInt($window.scrollTop()) - parseInt($this.position().top);

								$this.css('background-position', 'center ' + (pos * -0.15) + 'px');

							});

					};

					off = function() {

						$this
							.css('background-position', '');

						$window
							.off('scroll._parallax');

					};

					breakpoints.on('<=medium', off);
					breakpoints.on('>medium', on);

				});

				return $(this);

			};

			$window
				.on('load resize', function() {
					$window.trigger('scroll');
				});

		}

	// Spotlights.
		var $spotlights = $('.spotlight');

		$spotlights
			._parallax()
			.each(function() {

				var $this = $(this),
					on, off;

				on = function() {

					var top, bottom, mode;

					// Use main <img>'s src as this spotlight's background.
						$this.css('background-image', 'url("' + $this.find('.image.main > img').attr('src') + '")');

					// Side-specific scrollex tweaks.
						if ($this.hasClass('top')) {

							mode = 'top';
							top = '-20%';
							bottom = 0;

						}
						else if ($this.hasClass('bottom')) {

							mode = 'bottom-only';
							top = 0;
							bottom = '20%';

						}
						else {

							mode = 'middle';
							top = 0;
							bottom = 0;

						}

					// Add scrollex.
						$this.scrollex({
							mode:		mode,
							top:		top,
							bottom:		bottom,
							initialize:	function(t) { $this.addClass('inactive'); },
							terminate:	function(t) { $this.removeClass('inactive'); },
							enter:		function(t) { $this.removeClass('inactive'); },

							// Uncomment the line below to "rewind" when this spotlight scrolls out of view.

							//leave:	function(t) { $this.addClass('inactive'); },

						});

				};

				off = function() {

					// Clear spotlight's background.
						$this.css('background-image', '');

					// Remove scrollex.
						$this.unscrollex();

				};

				breakpoints.on('<=medium', off);
				breakpoints.on('>medium', on);

			});

	// Wrappers.
		var $wrappers = $('.wrapper');

		$wrappers
			.each(function() {

				var $this = $(this),
					on, off;

				on = function() {

					$this.scrollex({
						top:		250,
						bottom:		0,
						initialize:	function(t) { $this.addClass('inactive'); },
						terminate:	function(t) { $this.removeClass('inactive'); },
						enter:		function(t) { $this.removeClass('inactive'); },

						// Uncomment the line below to "rewind" when this wrapper scrolls out of view.

						//leave:	function(t) { $this.addClass('inactive'); },

					});

				};

				off = function() {
					$this.unscrollex();
				};

				breakpoints.on('<=medium', off);
				breakpoints.on('>medium', on);

			});

	// Banner.
		var $banner = $('#banner');

		$banner
			._parallax();

	function toggleTeam($this){
		$('.team-read-more').not($this).closest('.team-tile').removeClass('act');

    	if($($this).closest('.team-tile').hasClass('act')){
    		$($this).closest('.team-tile').removeClass('act');
    	} else {
    		$($this).closest('.team-tile').addClass('act');
    	}
	}

    // Click toogle membercard info
    $('.team-read-more').on('click', function(e){
    	toggleTeam(this);
    });

    // Click toogle membercard info
    $('.member-head').on('click', function(e){
    	toggleTeam(this);
    });

    // Close membercard info
    $('.team-member-card-close').on('click', function(e){
    	if($(this).closest('.team-tile').hasClass('act')){
    		$(this).closest('.team-tile').removeClass('act');
    	}
    });

	$(function(){
		// this will get the full URL at the address bar
		var url = window.location.href;

		// passes on every "a" tag for desktop
		$(".topbar-nav li a").each(function() {
			// checks if its the same on the address bar
			if(url == (this.href)) {
				$(this).closest("li").addClass("active");
			}
		});

		// passes on every "a" tag for mobile
		$("#navPanel nav a").each(function() {
			// checks if its the same on the address bar
			if(url == (this.href)) {
				$(this).addClass("active");
			}
		});

	});

	function readURL(input, type, id) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				if(type === 1) {
					$(id).attr('src', e.target.result);
				}
			};
			reader.readAsDataURL(input.files[0]);
		}
	}

	 $("#upload-doc").change(function() {
		if(this.files && this.files[0]) {
			var imgPath = this.files[0].name;
			var imgSize = this.files[0].size;
			var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

			if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg" || extn == "doc" || extn == "pdf" || extn == "doc" || extn == "docx") {
				if(imgSize <= 2000000) {
					$("#file-name1").text(this.files[0].name);
					if(extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
						readURL(this, 1, "#doc1")
					} else {
						readURL(this, 0, "#doc1")
					}

				} else {
					$('.notification1').show();
					$('.notification1').html('The maximum upload file size 2MB');
					setTimeout(function () {
						$('.notification1').hide();
						$('.notification1').html('');
					}, 2000);
					$("#file-name1").text('');
					$('#doc1').removeAttr('src');
				}

			} else {
				$('.notification1').show();
				$('.notification1').html('Unable to upload a file: This file type is not supported');
				setTimeout(function () {
					$('.notification1').hide();
					$('.notification1').html('');
				}, 2000);
				$("#file-name1").text('');
				$('#doc1').removeAttr('src');
			}
		} else {
			$('.notification1').hide();
			$('.notification1').html('');
			$("#file-name1").text('');
			$('#doc1').removeAttr('src');
		}
	});

	$("#upload-photo-id").change(function() {
		if(this.files && this.files[0]) {
			var imgPath = this.files[0].name;
			var imgSize = this.files[0].size;
			var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

			if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
				if(imgSize <= 2000000) {
					$("#file-name2").text(this.files[0].name);
					// readURL2(this);
					readURL(this, 1, "#doc2")
				} else {
					$('.notification2').show();
					$('.notification2').html('The maximum upload file size 2MB');
					setTimeout(function () {
						$('.notification2').hide();
						$('.notification2').html('');
					}, 2000);
					$("#file-name2").text('');
					$('#doc2').removeAttr('src');
				}

			} else {
				$('.notification2').show();
				$('.notification2').html('Unable to upload a file: This file type is not supported');
				setTimeout(function () {
					$('.notification2').hide();
					$('.notification2').html('');
				}, 2000);
				$("#file-name2").text('');
				$('#doc2').removeAttr('src');
			}
		} else {
			$('.notification2').hide();
			$('.notification2').html('');
			$("#file-name2").text('');
			$('#doc2').removeAttr('src');
		}
	});

	$("#upload-avatar").change(function() {
		if(this.files && this.files[0]) {
			var imgPath = this.files[0].name;
			var imgSize = this.files[0].size;
			var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();

			if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
				if(imgSize <= 2000000) {
					$("#file-name3").text(this.files[0].name);
					readURL3(this);
					readURL(this, 1, "#avatar-image")
				} else {
					$('.notification3').show();
					$('.notification3').html('The maximum upload file size 2MB');
					setTimeout(function () {
						$('.notification3').hide();
						$('.notification3').html('');
					}, 2000);
					$("#file-name3").text('');
					$('#avatar-image').removeAttr('src');
				}

			} else {
				$('.notification3').show();
				$('.notification3').html('Unable to upload a file: This file type is not supported');
				setTimeout(function () {
					$('.notification3').hide();
					$('.notification3').html('');
				}, 2000);
				$("#file-name3").text('');
				$('#avatar-image').removeAttr('src');
			}
		} else {
			$('.notification3').hide();
			$('.notification3').html('');
			$("#file-name3").text('');
			$('#avatar-image').removeAttr('src');
		}
	});

	$('#clock').countdown('2019/8/25', function(event) {
	var $this = $(this).html(event.strftime(''
	  + '<span class="countdown-row countdown-show5">'
		+ '<span class="countdown-section">'
		+	'<span class="countdown-amount">%d</span>'
		+	'<span class="countdown-period">Days</span>'
		+ '</span>'
		+ '<span class="countdown-section">'
		+	'<span class="countdown-amount">%H</span>'
		+	'<span class="countdown-period">Hours</span>'
		+ '</span>'
		+ '<span class="countdown-section">'
		+	'<span class="countdown-amount">%M</span>'
		+	'<span class="countdown-period">Minutes</span>'
		+ '</span>'
		+ '<span class="countdown-section">'
		+	'<span class="countdown-amount">%S</span>'
		+	'<span class="countdown-period">Seconds</span>'
		+ '</span>'
	  + '</span>'));
	});
})(jQuery);
