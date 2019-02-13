// $.ajaxSetup({
//     headers: {
//         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//     }
// });

// $('#reviewBtn').click(function(){
// 	let rating = $('#rating').val();
// 	let comment = $('#comment').val();
// 	let gameid = $('#gameid').val();

// 	$.ajax({
// 		'url': '/submitReview/'+gameid,
// 		'type': POST,
// 		'data': {
// 			'rating': rating,
// 			'comment': comment
// 		},
// 		'success':function(data){
// 			alert('You have submitted a review.');
// 		}
// 	});
// });