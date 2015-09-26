$("document").ready(function() {
	initApp();
	googlemap();
	
	var timelineBlocks = $('.cd-timeline-block'),
		offset = 0.8;

	//hide timeline blocks which are outside the viewport
	hideBlocks(timelineBlocks, offset);

	//on scolling, show/animate timeline blocks when enter the viewport
	$(window).on('scroll', function(){
		(!window.requestAnimationFrame) 
			? setTimeout(function(){ showBlocks(timelineBlocks, offset); }, 100)
			: window.requestAnimationFrame(function(){ showBlocks(timelineBlocks, offset); });
	});	
	
});

$things = [["Web Designer", "#fff"],["Android Developer", "#fff"],["Windows Developer", "#fff"],["Web developer", "#fff"],["UI/UX Designer", "#fff"],
			["Programmer", "#fff"],["Coder", "#fff"],["Learner", "#fff"], ["Reader", "#fff"],["Wordpress developer", "#fff"], ["Chrome developer", "#fff"], ["Random person","#fff"]];

function initApp() {
	updateThingsIDo();
}

function updateThingsIDo(){
	setInterval(function(){
		$index = Math.floor($things.length*Math.random());
		$(".things").html($things[$index][0]);
		$(".things").css({"color":$things[$index][1]});
	},2000);
}


	
function hideBlocks(blocks, offset) {
	blocks.each(function(){
		( $(this).offset().top > $(window).scrollTop()+$(window).height()*offset ) && $(this).find('.cd-timeline-img, .cd-timeline-content').addClass('is-hidden');
	});
}

function showBlocks(blocks, offset) {
	blocks.each(function(){
		( $(this).offset().top <= $(window).scrollTop()+$(window).height()*offset && $(this).find('.cd-timeline-img').hasClass('is-hidden') ) && $(this).find('.cd-timeline-img, .cd-timeline-content').removeClass('is-hidden').addClass('bounce-in');
	});
}
	