// global billboards array
// JSON structures array
// { slidesBlockElement: <jQuery pointer to the current slide element>, 
//   timerObject: <billboard timer pointer>,
//   slideSpeed: <slide speed>, use 0 value to disable auto-animating
//   animationSpeed: <animation speed> 
//	 effectName: <animation effect name to use>
// }
var gBillBoards			= [];
var g_moreIndex         = '6';
var g_lessIndex         = '4';

function OnAnimation( currentSlide, next, billBoardInfo, billBoardInfoIndex, callerObj ){
	var origHeight 	= next.height();
	var origWidth  	= next.width();
	var left 		= next.css('left');
	left 			= (left) ? left.replace( "px", "" )*1 : 0;
	var top 		= next.css('top');
	top 			= (top) ? top.replace( "px", "" )*1 : 0;

    billBoardInfo.canClick = ( callerObj == undefined );

	switch (billBoardInfo.effectName){
	case 'Fade':
		currentSlide.css( 	'z-index', g_lessIndex );
		next.css( 			'z-index', g_moreIndex );
		next.css( 			'opacity', '0.0' );
		next.css( 			'display', 'block' );

		next.animate(	{ opacity: '1.0'},
						billBoardInfo.animationSpeed,
						function(){
							currentSlide.css( 'display', 'none' );
                            billBoardInfo.canClick = true;
                            
                
                            billBoardInfo.slidesBlockElement = next; // set the current slide to the global array
                            billBoardInfo.timerObject = setTimeout( function(){ DoSwitch( next, billBoardInfoIndex, 'next' ); }, billBoardInfo.slideSpeed ); // initialize auto-scroll timer
						}
	   );
	break

	case 'Crossfade':
		currentSlide.css('z-index', g_lessIndex );
		currentSlide.css('opacity', '1.0' );
		next.css( 'z-index', g_moreIndex );
		next.css( 'opacity', '0.0' );
		next.css( 'display', 'block' );

		next.animate(	{ opacity: '1.0' },
						billBoardInfo.animationSpeed,
						function(){
                            billBoardInfo.canClick = true;
						}
					);
        currentSlide.animate(	{ opacity: '0.0' },
						billBoardInfo.animationSpeed,
						function(){
							currentSlide.css( 'display', 'none' );
                            billBoardInfo.canClick = true;

                            billBoardInfo.slidesBlockElement = next; // set the current slide to the global array
                
                            billBoardInfo.timerObject = setTimeout( function(){ DoSwitch( next, billBoardInfoIndex, 'next' ); }, billBoardInfo.slideSpeed ); // initialize auto-scroll timer
                        }
	   );
	break
	
	case 'SlideToLeft':
		currentSlide.css( 	'z-index', g_lessIndex );
		next.css( 			'z-index', g_moreIndex );
		next.css( 			'width', '0px' );
		next.css( 			'left', origWidth+left+'px' );
		next.css( 			'display', 'block' );

		next.animate(	{ width:origWidth, left:left+'px' },
						billBoardInfo.animationSpeed,
						function(){
							currentSlide.css( 'display', 'none' );
                            billBoardInfo.canClick = true;
                            
                            billBoardInfo.slidesBlockElement = next; // set the current slide to the global array
                
                            billBoardInfo.timerObject = setTimeout( function(){ DoSwitch( next, billBoardInfoIndex, 'next' ); }, billBoardInfo.slideSpeed ); // initialize auto-scroll timer
						}
        );
	break
	
	case 'SlideToTop':
		currentSlide.css( 	'z-index', g_lessIndex );
		next.css( 			'z-index', g_moreIndex );
		next.css( 			'height', '0px' );
		next.css( 			'top', origHeight+'px' );
		next.css( 			'display', 'block' );
		next.animate(	{ height:origHeight, top:top+'px'},
						billBoardInfo.animationSpeed,
						function(){
							currentSlide.css( 'display', 'none' );
                            billBoardInfo.canClick = true;

                            billBoardInfo.slidesBlockElement = next; // set the current slide to the global array
                        
                            billBoardInfo.timerObject = setTimeout( function(){ DoSwitch( next, billBoardInfoIndex, 'next' ); }, billBoardInfo.slideSpeed ); // initialize auto-scroll timer
						}
        );

	break
	
	case 'SlideToRight':
		currentSlide.css( 	'z-index', g_lessIndex );
		next.css( 			'z-index', g_moreIndex );
		next.css( 			'width', '0px' );
		next.css( 			'display', 'block' );
		next.animate(	{ width:origWidth },
						billBoardInfo.animationSpeed,
						function(){
							currentSlide.css( 'display', 'none' );
                            billBoardInfo.canClick = true;
                            
                            billBoardInfo.slidesBlockElement = next; // set the current slide to the global array
                        
                            billBoardInfo.timerObject = setTimeout( function(){ DoSwitch( next, billBoardInfoIndex, 'next' ); }, billBoardInfo.slideSpeed ); // initialize auto-scroll timer
						}
        );
	break
	
	case 'SlideToBottom':
		currentSlide.css( 	'z-index', g_lessIndex );
		next.css( 			'z-index', g_moreIndex );
		next.css( 			'height', '0px' );
		next.css( 			'top', top+'px' );
		next.css( 			'display', 'block' );
		next.animate(	{ height:origHeight},
						billBoardInfo.animationSpeed,
						function(){
							currentSlide.css( 'display', 'none' );
                            billBoardInfo.canClick = true;

                            billBoardInfo.slidesBlockElement = next; // set the current slide to the global array
                        
                            billBoardInfo.timerObject = setTimeout( function(){ DoSwitch( next, billBoardInfoIndex, 'next' ); }, billBoardInfo.slideSpeed ); // initialize auto-scroll timer
						}
	   );
	break
	case 'RollToLeft':
		currentSlide.css( 	'z-index', g_lessIndex );
		next.css( 			'z-index', g_moreIndex );
		next.css( 			'width', '0px' );
		next.css( 			'left', origWidth+left+'px' );
		next.css( 			'display', 'block' );
		next.animate(	{ width:origWidth, left:left+'px' },
						billBoardInfo.animationSpeed,
						function(){
                            billBoardInfo.canClick = true;
						}
		);
		currentSlide.animate(	{ backgroundPosition:-origWidth+'px 0px' },
						billBoardInfo.animationSpeed,
						function(){
							currentSlide.css( 'display', 'none' );
                            currentSlide.css( 'background-position', '0px 0px' );
                            billBoardInfo.canClick = true;

                            billBoardInfo.slidesBlockElement = next; // set the current slide to the global array
                        
                            billBoardInfo.timerObject = setTimeout( function(){ DoSwitch( next, billBoardInfoIndex, 'next' ); }, billBoardInfo.slideSpeed ); // initialize auto-scroll timer
						}
        );

	break
	case 'RollToTop':
		currentSlide.css( 	'z-index', g_lessIndex );
		next.css( 			'z-index', g_moreIndex );
		next.css( 			'height', '0px' );
        next.css( 			'top', top+origHeight+'px' );
		next.css( 			'display', 'block' );
		next.animate(	{height: origHeight+'px', top:top+'px'},
						billBoardInfo.animationSpeed,
						function(){
                            billBoardInfo.canClick = true;
						}
        );
		currentSlide.animate(	{ height: '0px', backgroundPosition: '0px -'+origHeight+'px'},
						billBoardInfo.animationSpeed,
						function(){
							currentSlide.css( 'display', 'none' );
                            currentSlide.css( 'background-position', '0px 0px' );
                            currentSlide.css( 'height', origHeight+'px' );
                            billBoardInfo.canClick = true;
                            
                            billBoardInfo.slidesBlockElement = next; // set the current slide to the global array
                        
                            billBoardInfo.timerObject = setTimeout( function(){ DoSwitch( next, billBoardInfoIndex, 'next' ); }, billBoardInfo.slideSpeed ); // initialize auto-scroll timer
						}
        );
	break
    
	case 'RollToRight':
		currentSlide.css( 	'z-index', g_lessIndex );
		next.css( 			'z-index', g_moreIndex );
		next.css( 			'width', '0px' );
        next.css( 			'background-position', -origWidth+'px 0px' );
		next.css( 			'display', 'block' );
		next.animate(	{ width: origWidth+'px', backgroundPosition:'0px 0px' },
						billBoardInfo.animationSpeed,
						function(){
						 							 
                            billBoardInfo.canClick = true;
						}
        );
		currentSlide.animate(	{ width:'0px',left:left+origWidth+'px' },
						billBoardInfo.animationSpeed,
						function(){
                            currentSlide.css('width', origWidth+'px' );
                            currentSlide.css('left', left+'px' );
							currentSlide.css( 'display', 'none' );
                            billBoardInfo.canClick = true;
                            
                            
                            billBoardInfo.slidesBlockElement = next; // set the current slide to the global array
                            billBoardInfo.timerObject = setTimeout( function(){ DoSwitch( next, billBoardInfoIndex, 'next' ); }, billBoardInfo.slideSpeed ); // initialize auto-scroll timer
						}
        );
	break
    
	case 'RollToBottom':
		currentSlide.css( 	'z-index', g_lessIndex );
		next.css( 			'z-index', g_moreIndex );
        next.css(           'background-position', '0px -'+origHeight+'px' );
		next.css( 			'height', '0px' );
		next.css( 			'display', 'block' );
		next.animate(	{height: origHeight+'px', backgroundPosition: '0px 0px'},
						billBoardInfo.animationSpeed,
						function(){
                            billBoardInfo.canClick = true;
						}
		);
		currentSlide.animate(	{ height: '0px', top:top+origHeight+'px'},
						billBoardInfo.animationSpeed,
						function(){
							currentSlide.css( 'display', 'none' );
                            currentSlide.css( 'height', origHeight+'px' );
                            currentSlide.css( 'top', top+'px' );
                            billBoardInfo.canClick = true;
                            
                            billBoardInfo.slidesBlockElement = next; // set the current slide to the global array
                            billBoardInfo.timerObject = setTimeout( function(){ DoSwitch( next, billBoardInfoIndex, 'next' ); }, billBoardInfo.slideSpeed ); // initialize auto-scroll timer
						}
        );

	break
	case '3DFlipToLeft':
		var slideImageCurrent   = jQuery(currentSlide).children('img');
		var slideImageNext      = jQuery(next).children('img');
        var slideContentCurrent = jQuery(currentSlide).children('div');
        var slideContentNext    = jQuery(next).children('div');
		currentSlide.css( 	'z-index', g_lessIndex );
		next.css( 			'z-index', g_moreIndex );
		next.css( 			'width', '0px' );
		next.css( 			'left', origWidth+left+'px' );
        next.css('display', 'block' );
		slideImageNext.css('opacity', '0.3' );
        slideContentCurrent.css('opacity','0');
        slideContentNext.css('opacity','0');
		slideImageNext.animate( { opacity: '1' }, billBoardInfo.animationSpeed );
		next.animate(	{ width:origWidth, left:left+'px' },
						billBoardInfo.animationSpeed,
						function(){
                            billBoardInfo.canClick = true;
						}
        );
		slideImageCurrent.animate( { opacity: '0.4' }, billBoardInfo.animationSpeed );
		currentSlide.animate(	{ width:'0px' },
						billBoardInfo.animationSpeed,
						function(){
							currentSlide.css( 'display', 'none' );
                            currentSlide.css( 'width', origWidth+'px' );
							slideImageCurrent.css('opacity', '1');
                            slideContentNext.animate( { opacity: '1' }, 500 );
                            billBoardInfo.canClick = true;
                            
                            billBoardInfo.slidesBlockElement = next; // set the current slide to the global array
                            billBoardInfo.timerObject = setTimeout( function(){ DoSwitch( next, billBoardInfoIndex, 'next' ); }, billBoardInfo.slideSpeed ); // initialize auto-scroll timer
						}
        );

	break
	case '3DFlipToTop':
		var slideImageCurrent   = jQuery(currentSlide).children('img');
		var slideImageNext      = jQuery(next).children('img');
        var slideContentCurrent = jQuery(currentSlide).children('div');
        var slideContentNext    = jQuery(next).children('div');
		currentSlide.css('z-index', g_lessIndex );
		next.css('z-index', g_moreIndex );
		next.css('height', '0px' );
        next.css('top', origHeight+top+'px' );
		next.css('display', 'block' );
		slideImageNext.css('opacity', '0.3' );
        slideContentCurrent.css('opacity','0');
        slideContentNext.css('opacity','0');
		slideImageNext.animate( { opacity: '1' }, billBoardInfo.animationSpeed );
        
		next.animate(	{ height:origHeight+'px', top:top+'px'},
						billBoardInfo.animationSpeed,
						function(){
                            billBoardInfo.canClick = true;
						}
		);
		slideImageCurrent.animate( { opacity: '0.3' }, billBoardInfo.animationSpeed );
		currentSlide.animate(	{ height: '0px'},
						billBoardInfo.animationSpeed,
						function(){
							currentSlide.css( 'display', 'none' );
                            currentSlide.css( 'height', origHeight+'px' );
                            currentSlide.css( 'top', top+'px' );
							slideImageCurrent.css('opacity', '1');
                            slideContentNext.animate( { opacity: '1' }, 500 );
                            billBoardInfo.canClick = true;
                            
                            
                            billBoardInfo.slidesBlockElement = next; // set the current slide to the global array
                            billBoardInfo.timerObject = setTimeout( function(){ DoSwitch( next, billBoardInfoIndex, 'next' ); }, billBoardInfo.slideSpeed ); // initialize auto-scroll timer
						}
        );

	break
	
	case '3DFlipToRight':
		var slideImageCurrent   = jQuery(currentSlide).children('img');
		var slideImageNext      = jQuery(next).children('img');
        var slideContentCurrent = jQuery(currentSlide).children('div');
        var slideContentNext    = jQuery(next).children('div');
		currentSlide.css( 'z-index', g_lessIndex );
		next.css( 'z-index', g_moreIndex );
		next.css( 'width', '0px' );
        next.css( 'display', 'block' );
		slideImageNext.css( 'opacity', '0.3' );
        slideContentCurrent.css('opacity','0');
        slideContentNext.css('opacity','0');
		slideImageNext.animate( { opacity: '1' }, billBoardInfo.animationSpeed );
		next.animate(	{ width:origWidth+'px' },
						billBoardInfo.animationSpeed,
						function(){
                            billBoardInfo.canClick = true;
						}
        );
		slideImageCurrent.animate( { opacity: '0.3' }, billBoardInfo.animationSpeed );
		currentSlide.animate(	{ width: '0px', left:origWidth+left+'px' },
						billBoardInfo.animationSpeed,
						function(){
							currentSlide.css( 'display', 'none' );
                            currentSlide.css( 'width', origWidth+'px' );
                            currentSlide.css( 'left', left+'px' );
							slideImageCurrent.css('opacity', '1');
                            slideContentNext.animate( { opacity: '1' }, 500 );
                            billBoardInfo.canClick = true;
                            
                            
                            billBoardInfo.slidesBlockElement = next; // set the current slide to the global array
                            billBoardInfo.timerObject = setTimeout( function(){ DoSwitch( next, billBoardInfoIndex, 'next' ); }, billBoardInfo.slideSpeed ); // initialize auto-scroll timer
						}
        );
	break

	case '3DFlipToBottom':
		var slideImageCurrent   = jQuery(currentSlide).children('img');
		var slideImageNext      = jQuery(next).children('img');
        var slideContentCurrent = jQuery(currentSlide).children('div');
        var slideContentNext    = jQuery(next).children('div');
		currentSlide.css( 'z-index', g_lessIndex );
		next.css( 'z-index', g_moreIndex );
        next.css( 'height', '0px' );
    
        next.css( 'display', 'block' );
		slideImageNext.css( 'opacity', '0.3' );
        slideContentCurrent.css('opacity','0');
        slideContentNext.css('opacity','0');
        
		slideImageNext.animate( { opacity: '1' }, billBoardInfo.animationSpeed );
		next.animate(	{ height:origHeight+'px' },
						billBoardInfo.animationSpeed,
						function(){
                            billBoardInfo.canClick = true;
						}
        );
		slideImageCurrent.animate( { opacity: '0.3' }, billBoardInfo.animationSpeed );
		currentSlide.animate(	{ height: '0px', top:origHeight+top+'px' },
						billBoardInfo.animationSpeed,
						function(){
							currentSlide.css( 'display', 'none' );
                            currentSlide.css( 'height', origHeight+'px' );
                            currentSlide.css( 'top', top+'px' );
							slideImageCurrent.css('opacity', '1');
                            slideContentNext.animate( { opacity: '1' }, 500 );
                            billBoardInfo.canClick = true;
                            
                            billBoardInfo.slidesBlockElement = next; // set the current slide to the global array
                            billBoardInfo.timerObject = setTimeout( function(){ DoSwitch( next, billBoardInfoIndex, 'next' ); }, billBoardInfo.slideSpeed ); // initialize auto-scroll timer
						}
        );   
	break;
    
    default:
        if ( callerObj != undefined ){
            billBoardInfo.canClick = false;
    		currentSlide.css( 	'z-index', g_lessIndex );
    		next.css( 			'z-index', g_moreIndex );
    		currentSlide.css(   'display', 'none' );
            next.css( 			'display', 'block' );
            billBoardInfo.canClick = true;
            billBoardInfo.slidesBlockElement = next; // set the current slide to the global array
      }
    }//default
}

// Billboards runner
function Run( element, index ){
	if ( gBillBoards[ index ].slideSpeed > 0 ){
        gBillBoards[ index ].timerObject = setTimeout( function(){ DoSwitch( element, index, 'next' ); }, gBillBoards[ index ].slideSpeed );	// initialize auto-scroll timer
	}
}

// Change markup structure for special elements
function OnPreInitBillboard( billboardInfo ) {
	if ( billboardInfo.effectName != '3DFlipToRight' &&
		billboardInfo.effectName != '3DFlipToBottom' &&
		billboardInfo.effectName != '3DFlipToTop' &&
		billboardInfo.effectName != '3DFlipToLeft' )
	{
		return;
	}
	
	parentObj = jQuery( billboardInfo.slidesBlockElement ).parent();
	parentObj.children().each(
		function( index, element ){
			jElement = jQuery( element );
			var regExp = new RegExp( '.*url[\(]([^)]+)[\)].*', '' );
			result = regExp.exec( jElement.css( 'background-image' ) );
			if ( !result ){ return; }
            jElement.css( 'background-image', 'none' );			
			jElement.css( 'background-color', 'black' );
			jElement.first().prepend( '<img src="' + result[1] + '" width="100%" height="100%" />' );
		}
	);

}

// Billboards initialization from global billboards array - gBillBoards
function OnBillboardsInit(){
	for( var index = 0; index < gBillBoards.length; ++index ){
		var element = gBillBoards[ index ].slidesBlockElement; // get the first slide
		if ( !element ){ continue; }
                if ( element.parent().children().length == 1 )
                    element.clone(true).appendTo(element.parent());
        element.css( "display", "block" ); // show the first slide
		element.css( "z-index", g_moreIndex ); // show the first slide
		/*OnPreInitBillboard( gBillBoards[ index ] );*/
        Run( element, index );
	}
}

// Switch slides animated
// currentSlide - current billboard slide
// billBoardInfoIndex - the billboard info index in global gBillBoards array
function DoSwitch( currentSlide, billBoardInfoIndex, slideDirection, callerObj ){
	var billBoardInfo = gBillBoards[ billBoardInfoIndex ]; // get the billboard info
	if ( !billBoardInfo ){ return; }
	
	var next = currentSlide;

	if ( slideDirection == 'previous' ){
		var next = currentSlide.prev(); // looking for the previous slide
		if ( next.length == 0 ){
			next = currentSlide.parent().children().last(); // or return to the last
		}
	}
	else{
		var next = currentSlide.next(); // looking for the next slide
		if ( next.length == 0 ){
			next = currentSlide.parent().children().first(); // or return to the first
		}
	}
    
	OnAnimation( jQuery( currentSlide ), jQuery( next ), billBoardInfo, billBoardInfoIndex, callerObj );
}

// user pressed Next slide button
// sender - button element pointer
function OnNextSlideClick( sender, index ){
	var billBoardInfo = gBillBoards[ index ];
	if ( !billBoardInfo || !billBoardInfo.canClick ){
		return;
	}
	clearTimeout( billBoardInfo.timerObject ); // remove auto-scroll timer
    DoSwitch( jQuery(billBoardInfo.slidesBlockElement), index, 'next', sender ); // switch to the next slide		
}

// user pressed the Previous slide button
// sender - button element pointer
function OnPreviousSlideClick( sender, index ){
	var billBoardInfo = gBillBoards[ index ];

	if ( !billBoardInfo || !billBoardInfo.canClick ){
		return;
	}	
	
	clearTimeout( billBoardInfo.timerObject ); // remove auto-scroll timer
	DoSwitch( jQuery(billBoardInfo.slidesBlockElement), index, 'previous', sender ); // switch to the previous slide
}