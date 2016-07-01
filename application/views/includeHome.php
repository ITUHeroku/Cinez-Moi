<link href="<?php echo csss_url("styles");?>" type="text/css" rel="stylesheet" media="all"> 
<link href="<?php echo csss_url("calendar");?>" rel="stylesheet" type="text/css" />
<script src="<?php echo jss_url("modernizr.custom.63321");?>"></script>
<script type="text/javascript" src="<?php echo jss_url("jquery.calendario");?>"></script>
<script type="text/javascript" src="<?php echo jss_url("data");?>"></script>
<script type="text/javascript"> 
	$(function() {
		function updateMonthYear() {
			$( '#custom-month' ).html( $( '#calendar' ).calendario('getMonthName') );
			$( '#custom-year' ).html( $( '#calendar' ).calendario('getYear'));
		}
		
		$(document).on('finish.calendar.calendario', function(e){
			$( '#custom-month' ).html( $( '#calendar' ).calendario('getMonthName') );
			$( '#custom-year' ).html( $( '#calendar' ).calendario('getYear'));
			$( '#custom-next' ).on( 'click', function() {
				$( '#calendar' ).calendario('gotoNextMonth', updateMonthYear);
			} );
			$( '#custom-prev' ).on( 'click', function() {
				$( '#calendar' ).calendario('gotoPreviousMonth', updateMonthYear);
			} );
			$( '#custom-current' ).on( 'click', function() {
				$( '#calendar' ).calendario('gotoNow', updateMonthYear);
			} );
			$( '#custom-current' ).on( 'click', function() {
				$( '#calendar' ).calendario('gotoNow', updateMonthYear);
			} );
		});
		
		$('#calendar').on('shown.calendar.calendario', function(){
			$('div.fc-row > div').on('onDayClick.calendario', function(e, dateprop) {
				console.log(dateprop);
				if(dateprop.data) {
					showEvents(dateprop.data.html, dateprop);
				}
			});
		});
	
		var transEndEventNames = {
			'WebkitTransition' : 'webkitTransitionEnd',
			'MozTransition' : 'transitionend',
			'OTransition' : 'oTransitionEnd',
			'msTransition' : 'MSTransitionEnd',
			'transition' : 'transitionend'
		},
		transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
		$wrapper = $( '#custom-inner' );

		function showEvents( contentEl, dateprop ) {
			hideEvents();
			var $events = $( '<div id="custom-content-reveal" class="custom-content-reveal"><h4>' + dateprop.monthname + ' '
			+ dateprop.day + ', ' + dateprop.year + ' events</h4></div>' ),
			$close = $( '<span class="custom-content-close"></span>' ).on( 'click', hideEvents);
			$events.append( contentEl.join('') , $close ).insertAfter( $wrapper );
			setTimeout( function() {
				$events.css( 'top', '0%' );
			}, 25);
		}
		
		function hideEvents() {
			var $events = $( '#custom-content-reveal' );
			if( $events.length > 0 ) {   
				$events.css( 'top', '100%' );
				Modernizr.csstransitions ? $events.on( transEndEventName, function() { $( this ).remove(); } ) : $events.remove();
			}
		}
		
		$( '#calendar' ).calendario({
			caldata : events,
			displayWeekAbbr : true,
			events: ['click', 'focus']
		});
	
	});
</script>