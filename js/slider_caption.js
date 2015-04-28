jQuery(function($) {
	$("[data-orbit]").bind('after-slide-change.fndtn.orbit', function(event){
			
		var position = $("li.active").index();
		$('.appended blockquote').remove();
		$('.appended p').remove();
	
		if (position == 0){	
			$(".appended").append( '<blockquote>Let your eyes stay fixes on the horizon, and surrender your thoughts to the gentle sea breeze. Out there somewhere, at a point where the rainforest meets the ocean, something will catch up with you and carry you away. To a place where no worries in the world can keep you from smiling</blockquote><p>VILA pool area</p>' );
	
		}
		else if (position == 1){
			$(".appended").append( '<blockquote>Vila is a connection point between Bahia and Scandinavia. A small but completely unique pousada right in the heart of Bahia, with a touch of nordic influence. </blockquote><p>VILA BARRACUDA sunkissed room</p>' );
		}
		else if (position == 2){
			$(".appended").append( '<blockquote>Located on a historic site in the town of Itacare, on the Bahia coastline named Costa de Cacao, the Cacao Coast, half a day\'s journey south of the state capital Salvador.. </blockquote><p>VILA BARRACUDA breakfast area</p>' );
		}
   
	});
});



