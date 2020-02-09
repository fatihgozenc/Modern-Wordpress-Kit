import $ from 'jquery';

$('.c-navigation').on('mouseenter', '.menu-item-has-children', (e) => {
	$(e.currentTarget).addClass('open');
	console.log(1)
}).on('mouseleave', '.menu-item-has-children', (e) => {
	$(e.currentTarget).removeClass('open');
})