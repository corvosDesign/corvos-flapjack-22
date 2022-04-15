// JavaScript Document
$(window).on('load', function() {
   var $headings = $('.headings');
   var $phrases = ["photography", "web projects","freelance","corvos.design"];




function startUp(){
		$headings.textillate('in');
}

$headings.on('inAnimationEnd.tlt', function(){
	setTimeout( function(){$headings.textillate('out')} ,2000)

})
$headings.on('outAnimationEnd.tlt',function(){headingOut()});

function headingOut(){
	switch ($(".texts li").text()) {
  case $phrases[3]:
    $(".texts li").text($phrases[0]);
	startUp();
    break;
  case $phrases[0]:
    $(".texts li").text($phrases[1])
	startUp();
    break;
 case $phrases[1]:
    $(".texts li").text($phrases[2])
	startUp();
    break;
 case $phrases[2]:
    $(".texts li").text($phrases[3])
	$headings.textillate('in').off()

    break;
}
}

startUp();





});//ready
