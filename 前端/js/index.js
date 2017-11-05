$(function(){
	$('.nav_box').hover(
		function(){
			$(this).find('b').show();
			$(this).find('.inbox').show();
		},
		function(){
			$(this).find('b').hide();
			$(this).find('.inbox').hide();
		}
	);
	$('.nav_box').each(function(index, element) {
        $(this).find('span').eq(1).css({color:'#fff'});
    }).last().css({'border-right':'none'});
	$('#footer').corner('4px');
	if($('#gla')){
		$('.gla_inbox').corner('5px');
		$('#gla_box>ul').roundabout({
			minOpacity:1,
			btnNext: ".next",
			duration: 1000,
			reflect: true,
			btnPrev: '.prev',
			autoplay:true,
			autoplayDuration:5000,
			tilt:0,
			shape: 'figure8'
		});
	}
});
function turn_image_1()
{
	document.getElementById('list_1').src='images/banner_01.jpg';
	document.getElementById('list_2').src='images/banner_02.jpg';
	document.getElementById('list_3').src='images/banner_03.jpg';
	document.getElementById('list_4').src='images/banner_04.jpg';
	document.getElementById('list_5').src='images/banner_05.jpg';
	document.getElementById('list_6').src='images/banner_06.jpg';
}
function turn_image_2()
{
	document.getElementById('list_1').src='images/banner_02.jpg';
	document.getElementById('list_2').src='images/banner_03.jpg';
	document.getElementById('list_3').src='images/banner_04.jpg';
	document.getElementById('list_4').src='images/banner_05.jpg';
	document.getElementById('list_5').src='images/banner_06.jpg';
	document.getElementById('list_6').src='images/banner_01.jpg';
}
function turn_image_3()
{
	document.getElementById('list_1').src='images/banner_03.jpg';
	document.getElementById('list_2').src='images/banner_04.jpg';
	document.getElementById('list_3').src='images/banner_05.jpg';
	document.getElementById('list_4').src='images/banner_06.jpg';
	document.getElementById('list_5').src='images/banner_01.jpg';
	document.getElementById('list_6').src='images/banner_02.jpg';
}
function turn_image_4()
{
	document.getElementById('list_1').src='images/banner_04.jpg';
	document.getElementById('list_2').src='images/banner_05.jpg';
	document.getElementById('list_3').src='images/banner_06.jpg';
	document.getElementById('list_4').src='images/banner_01.jpg';
	document.getElementById('list_5').src='images/banner_02.jpg';
	document.getElementById('list_6').src='images/banner_03.jpg';
}
function turn_image_5()
{
	document.getElementById('list_1').src='images/banner_05.jpg';
	document.getElementById('list_2').src='images/banner_06.jpg';
	document.getElementById('list_3').src='images/banner_01.jpg';
	document.getElementById('list_4').src='images/banner_02.jpg';
	document.getElementById('list_5').src='images/banner_03.jpg';
	document.getElementById('list_6').src='images/banner_04.jpg';
}
function turn_image_6()
{
	document.getElementById('list_1').src='images/banner_06.jpg';
	document.getElementById('list_2').src='images/banner_01.jpg';
	document.getElementById('list_3').src='images/banner_02.jpg';
	document.getElementById('list_4').src='images/banner_03.jpg';
	document.getElementById('list_5').src='images/banner_04.jpg';
	document.getElementById('list_6').src='images/banner_05.jpg';
}




