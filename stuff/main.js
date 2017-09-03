function openCard() {
	$('.overlay').fadeIn();
	$('.card-back').delay(500).animate({
      opacity:'1'
	},400);
}

$(document).ready(function() {

	$('.create-offer').click(function() {

	$('.overlay2').fadeIn();

	$('.offer-box').fadeIn();

});

$('.close-button').click(function() {

$('.overlay2').fadeOut();

$('.offer-box').fadeOut();



// $('.card-main').mouseover(function(){
// 	$('.card-overlay').css({"opacity":"1"});
// 	$('.card-main').css({"top":"-80px"});
// });
//
// $('.card-main').mouseout(function(){
// 	$('.card-main').css({"top":"0"});
// 	$('.card-overlay').css({"opacity":"0"});
// });

});
});

function openOfferBox() {
	$('.overlay2').show();
	$('.offer-box').show();
}

function updateItems() {
    // var team = $('#players').val();
    // $.ajax({
    //         type: "POST",
    //         url: "update-items.php",
    //         data: {postdata: team},
    //         success: function(result){
    //               var json_obj = result;// $.parseJSON(result);
    //             //  var json_result = result['object'];
    //              console.log(json_obj);
    //             //   $('.trade-items').append("<input type='checkbox' name='items' value='"+json_result+"'>" + json_result);
    //                 // return "<input type='checkbox' name='items' value='"+result+"'>" + result;
    //                 // $('.trade-items').html("<input type='checkbox'>" + result);
    //                 var i;
    //             for (i = 1; i < json_obj.length; i++) {
    // // text += cars[i] + "<br>";
    //             console.log(json_obj[i]);
    //             $('.trade-items').append("<input type='checkbox' name='items' value='"+json_obj[i]+"'>" + json_obj[i]);
    //             }
    //         }
    // });
var team = $('#players').val();
		// console.log('team selected = ' + team);
    window.open('market.php?t=' + team,'_self');

    // console.log(team);
}

//Start here
//
// function getApprovalNotif() {
// 	// console.log("ready");
// 	 $.getJSON('getApprovalNotif.php', function(result) {
// 		 console.log(result);
// 			//  $('.result-team').css({"background": "#2980b9"});
// 			//  $('.result-team').html('Team ' + result.team);
// 			//  $('.result-team').append(' (' + result.points + ' points)');
// 			// console.log(result);
// 			var res_username1 = result.forusername1;
// 			var res_username2 = result.forusername2;
// 			var notifid = result.id;
// 			var sessionvar = $('#sessionvar').val();
// 			// var forusername1 = res_username1.toUpperCase();
// 			// console.log(forusername1);
// 			// console.log(res_username1);
// 			// var sessionusername = $('.sessionvar').val();
// 			// console.log(json_obj);
// 			// console.log(sessionusername);
// 			// console.log(result.forusername1);
// 			// console.log(res_username1[0]);
// 			console.log(result[0].forusername1);
// for (var i = 0; i < result.length; i++) {
//  if (result[i].forusername1 == sessionvar) {
// 	 $('.notif-panel').html("");
// 		 $.each(result, function( key, value ) {
// 				var obj_length = result.length;
// 			 // console.log(value.message);
// 			 $('.notif-panel').append("<div class='notif'><br><p>"+value.message1+"</p></div>");
// 			 console.log(value.message1);
// 			 // console.log(obj);
// 			 //  return (key !== obj_length);
// 			 // console.log(key);
// 		 });
//  }
//  else if (result[i].forusername2 == sessionvar) {
// 	//  $('.notif-panel').html("");
// 		 $.each(result, function( key, value ) {
// 			 var obj_length = result.length;
// 			 // console.log(value.message);
// 			 $('.notif-panel').append("<div class='notif'><br><p>"+value.message2+"</p></div>");
// 			 // console.log(obj);
// 			 //  return (key !== obj_length);
// 			 // console.log(key);
// 		 });
//  }
//
// }
// 				// console.log(json_obj);
// 				// return "<div class='notif'><br><p>"+notifmessage+"</p></div>";
//
//
//
//
// 				// var html = "";
// 				// for (var i = 0; i < json_obj; i++) {
// 				//    html += "<div class='notif'><br><p>"+notifmessage+"</p></div>";
// 				// 	//  $('.notif-panel').html(result[i]).appendTo('body');
// 				// }
// 				// var notifpanel = document.getElementById("notif-panel");
// 				// notifpanel.innerHTML = html;
//
// 				//  $('.notif-panel').html("<div class='notif'><br><p>"+notifmessage+"</p></div>");
//       //  console.log('issi ka hai!');
// 		});
//
//  // 	$.getJSON('getGeneralNotif.php', function(data) {
//  // 		console.log(data);
//  // 		 //  $('.result-team').css({"background": "#2980b9"});
//  // 		 //  $('.result-team').html('Team ' + result.team);
//  // 		 //  $('.result-team').append(' (' + result.points + ' points)');
//  // 		 // console.log(result);
//  // 		 var sessionvar = $('#sessionvar').val();
//  // 		 console.log(data[0].forusername);
//  // for (var i = 0; i < data.length; i++) {
//  // 		$.each(data, function( index, datval ) {
//  // 			 var obj_length = data.length;
//  // 			// console.log(value.message);
//  // 			 $('.notif-panel').append("<div class='notif'><br><p>"+datval.message+"</p></div>");
//  // 			console.log(datval.message);
//  // 			// console.log(obj);
//  // 			//  return (key !== obj_length);
//  // 			// console.log(key);
//  // 		});
//  //
//  //
//  // }
//  // 			 // console.log(json_obj);
//  // 			 // return "<div class='notif'><br><p>"+notifmessage+"</p></div>";
//  //
//  //
//  //
//  //
//  // 			 // var html = "";
//  // 			 // for (var i = 0; i < json_obj; i++) {
//  // 			 //    html += "<div class='notif'><br><p>"+notifmessage+"</p></div>";
//  // 			 // 	//  $('.notif-panel').html(result[i]).appendTo('body');
//  // 			 // }
//  // 			 // var notifpanel = document.getElementById("notif-panel");
//  // 			 // notifpanel.innerHTML = html;
//  //
//  // 			 //  $('.notif-panel').html("<div class='notif'><br><p>"+notifmessage+"</p></div>");
//  // 		 //  console.log('issi ka hai!');
//  // 	 });
// 			  // console.log(result.forusername1);
// 				setTimeout(function(){
// 					getApprovalNotif();
// 						 }, 1);
//
// }

// End here

//
// function getGeneralNotif() {
// 	// console.log("ready");
// 	 $.getJSON('getGeneralNotif.php', function(result) {
// 		 console.log(result);
// 			//  $('.result-team').css({"background": "#2980b9"});
// 			//  $('.result-team').html('Team ' + result.team);
// 			//  $('.result-team').append(' (' + result.points + ' points)');
// 			// console.log(result);
// 			var res_username1 = result.forusername1;
// 			var res_username2 = result.forusername2;
// 			var notifid = result.id;
// 			var sessionvar = $('#sessionvar').val();
// 			// var forusername1 = res_username1.toUpperCase();
// 			// console.log(forusername1);
// 			// console.log(res_username1);
// 			// var sessionusername = $('.sessionvar').val();
// 			// console.log(json_obj);
// 			// console.log(sessionusername);
// 			// console.log(result.forusername1);
// 			// console.log(res_username1[0]);
// 			console.log(result[0].forusername1);
// for (var i = 0; i < result.length; i++) {
//  if (result[i].forusername1 == sessionvar) {
// 	 $('.notif-panel').html("");
// 		 $.each(result, function( key, value ) {
// 				var obj_length = result.length;
// 			 // console.log(value.message);
// 			 $('.notif-panel').append("<div class='notif'><br><p>"+value.message1+"</p></div>");
// 			 console.log(value.message1);
// 			 // console.log(obj);
// 			 //  return (key !== obj_length);
// 			 // console.log(key);
// 		 });
//  }
//  else if (result[i].forusername2 == sessionvar) {
// 	 $('.notif-panel').html("");
// 		 $.each(result, function( key, value ) {
// 			 var obj_length = result.length;
// 			 // console.log(value.message);
// 			 $('.notif-panel').append("<div class='notif'><br><p>"+value.message2+"</p></div>");
// 			 // console.log(obj);
// 			 //  return (key !== obj_length);
// 			 // console.log(key);
// 		 });
//  }
//
// }
// 				// console.log(json_obj);
// 				// return "<div class='notif'><br><p>"+notifmessage+"</p></div>";
//
//
//
//
// 				// var html = "";
// 				// for (var i = 0; i < json_obj; i++) {
// 				//    html += "<div class='notif'><br><p>"+notifmessage+"</p></div>";
// 				// 	//  $('.notif-panel').html(result[i]).appendTo('body');
// 				// }
// 				// var notifpanel = document.getElementById("notif-panel");
// 				// notifpanel.innerHTML = html;
//
// 				//  $('.notif-panel').html("<div class='notif'><br><p>"+notifmessage+"</p></div>");
//       //  console.log('issi ka hai!');
// 		});
// 			  // console.log(result.forusername1);
// 				setTimeout(function(){
// 					getApprovalNotif();
// 						 }, 1);
//
// }

function getNotif() {

	$.when($.getJSON('getApprovalNotif.php'), $.getJSON('getGeneralNotif.php')).done(function(data1, data2) {
	    //do stuff with 'data' and 'data2'
			var result1 = data1[0];
			var result2 = data2[0];
			var datavar = "";
			//  console.log(result1);
			var sessionvar = $('#sessionvar').val();
			// console.log(sessionvar);
			for (var i = 0; i < result1.length; i++) {
				// console.log(result1[i].forusername1);
				// console.log(result2[i].forusername);


			 if (result1[i].forusername1 == sessionvar) {
				 $('.notif-panel').html("");
					 $.each(result1, function( key, value ) {
						 // console.log(value.message);
						 $('.notif-panel').append("<div class='notif'><br><p>"+value.message1+"</p></div>");
						//  console.log(value.message1);
						 // console.log(obj);
						 //  return (key !== obj_length);
						 // console.log(key);
						 datavar = "1";
					 });
			 }
			 else if (result1[i].forusername2 == sessionvar) {
				 $('.notif-panel').html("");
					 $.each(result1, function( key, value ) {
						 // console.log(value.message);
						 $('.notif-panel').append("<div class='notif'><br><p>"+value.message2+"</p></div>");
						 // console.log(obj);
						 //  return (key !== obj_length);
						 // console.log(key);
            datavar = "2";
					 });
			 }
// console.log(sessionvar);


			}
			// console.log(datavar);
// (result2.length);
			for (var j = 0; j < result2.length; j--) {
				// console.log(result1[i].forusername1);
				// console.log(result2[i].forusername);

			if (result2[j].forusername == sessionvar) {
				// console.log(sessionvar);
				if (datavar == "1") {
					// console.log("possible");
				}
				else if (datavar == "2") {
					// console.log("possible");
				}
				else {
					// console.log("possible");
						$('.notif-panel').html("");
				}
				// else if (datavar !== "2") {
				// 	// console.log("possible");
				// }
					$.each(result2, function( index, datval ) {
						// console.log(value.message);
						$('.notif-panel').append("<div class='notif'><br><p>"+datval['message']+"</p></div>");
						// console.log(obj);
						//  return (key !== obj_length);
						// console.log(key);
					});
			}

		}

	});

	setTimeout(function(){
		getNotif();
			 }, 1);

}


// function getRoundStatus() {
// 	$.getJSON('getRoundStatus.php', function(jd) {
// console.log(jd);
// if (jd.status == 0) {
// // console.log("working");
// window.open('round-end.php','_self');
// }
// });
// }

$(document).ready(function() {
	getNotif();
	getRoundStatus();
});
