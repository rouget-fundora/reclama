		var $backtop = $.noConflict();

$backtop(document).ready(function(){
	$backtop(window).scroll(function(){
		if($backtop(window).scrollTop() >= 1){
			$backtop('.backToTop').fadeIn(500);
		}else {
			$backtop('.backToTop').fadeOut(500);
		}
	});
	$backtop('.backToTop').click(function(){
		$backtop('html,body').animate({ scrollTop: 0 }, 'slow');
	});
	if($backtop(window).scrollTop() >= 1){
		$backtop('.backToTop').show();
	}
});
		var $backto = $.noConflict();
        $backto(function () {
            $backto(".scrollable").scrollable();
        });