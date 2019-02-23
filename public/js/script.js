$('.carousel.carousel-multi-item.v-2 .carousel-item').each(function(){
	var next = $(this).next();
	if (!next.length) {
		next = $(this).siblings(':first');
	}
	next.children(':first-child').clone().appendTo($(this));

	for (var i=0;i<3;i++) {
		next=next.next();
		if (!next.length) {
			next = $(this).siblings(':first');
		}
		next.children(':first-child').clone().appendTo($(this));
	}
});	
$('.carousel').carousel({
interval: 3000
});
$('#description').summernote({
	height: 200,                 // set editor height
	minHeight: null,             // set minimum height of editor
	maxHeight: null,             // set maximum height of editor
	focus: false,
});
