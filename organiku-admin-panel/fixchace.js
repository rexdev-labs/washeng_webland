$(document).ready(function() {
	loadCSS = function(href) {
		var cssLink = $("<link rel='stylesheet' type='text/css' href='"+href+"'>");
		$("head").append(cssLink); 
	};
	

	loadSuggest = function(e) {
		if(sessionStorage.getItem('destination')) {
			const dest = sessionStorage.getItem('destination');
			var suggestText = {"quickReplies": ["Change my destination", "About "+dest, "How do I get to "+dest, "Where to stay at "+dest, "Best time to go "+dest, "Things to do in "+dest, "Entrance fee for "+dest, dest+ " Opening hours", dest + " Facilities", "Things to note for " + dest + " trip", "News from "+dest, "Transportations", "Event this month", "Today weather"]};
		} else {
			setBotResponse("Where is your destination?");
			var suggestText = {"quickReplies": ["Ijen", "Baluran", "Sukamade", "Alas Purwo", "Meuru Betiri", "Green Bay", "Red Island"]};
		}
		addSuggestion(suggestText);		
	}

    var hostname = window.location.hostname
    alert(hostname)
	loadCSS(hostname+"/static/chatbot/dinparbwi/v2.4/script.js");
	// Credentials
	var baseUrl = "https://citric-aleph-611.appspot.com/send_message";
	setBotResponse("Welcome on board @askbwi chatbot. I'm here to help you with all Banyuwangi tourism information. feel free to ask me questions. :)");
	loadSuggest()

	var mybot = '<div class="chatCont" id="chatCont">'+
								'<div class="bot_profile">'+
									'<img src="https://citric-aleph-611.appspot.com/static/askbwi/v2.1/bot2.svg" class="bot_p_img">'+
									'<div class="box-close">'+
									'<div class="close" style="margin-right: 12px;">'+
										'<i class="fa fa-times" aria-hidden="true"></i>'+
									'</div>'+
									'</div>'+
								'</div><!--bot_profile end-->'+
								'<div id="result_div" class="resultDiv"></div>'+
								'<div class="spinner">'+
								'<div class="bounce1"></div>'+
								'<div class="bounce2"></div>'+
								'<div class="bounce3"></div>'+
     							'</div>'+
								'<div class="chatForm" id="chat-div">'+
									'<input type="text" id="chat-input" autocomplete="off" placeholder="Try typing here"'+ 'class="form-control bot-txt"/>'+
								'</div>'+
							'</div><!--chatCont end-->'+

							'<div class="profile_div">'+
								'<div class="row">'+
									'<div class="col-hgt">'+
										'<img src="https://citric-aleph-611.appspot.com/static/askbwi/v2.1/bot2.svg" class="img-circle img-profile">'+
									'</div>'+
								'</div><!--row end-->'+
							'</div><!--profile_div end-->';

	$("mybot").html(mybot);

	// ------------------------------------------ Toggle chatbot -----------------------------------------------
	$('.profile_div').click(function() {
		
		$('.profile_div').toggle();
		$('.chatCont').toggle();
		$('.bot_profile').toggle();
		$('.chatForm').toggle();
		//document.getElementById('chat-input').focus();
	});

	$('.close').click(function() {
		$('.profile_div').toggle();
		$('.chatCont').toggle();
		$('.bot_profile').toggle();
		$('.chatForm').toggle();
	});


	var session = function() {
		if(sessionStorage.getItem('session')) {
			var retrievedSession = sessionStorage.getItem('session');
		} else {
			var randomNo = Math.floor((Math.random() * 1000) + 1);
			var timestamp = Date.now();
			var date = new Date();
			var weekday = new Array(7);
			weekday[0] = "Sunday";
			weekday[1] = "Monday";
			weekday[2] = "Tuesday";
			weekday[3] = "Wednesday";
			weekday[4] = "Thursday";
			weekday[5] = "Friday";
			weekday[6] = "Saturday";
			var day = weekday[date.getDay()];
			var session_id = randomNo+day+timestamp;
			sessionStorage.setItem('session', session_id);
			var retrievedSession = sessionStorage.getItem('session');
		}
		return retrievedSession;
	}

	var mysession = session();


	$('#chat-input').on('keyup keypress', function(e) {
		var keyCode = e.keyCode || e.which;
		var text = $("#chat-input").val();
		if (keyCode === 13) {
			if(text == "" ||  $.trim(text) == '') {
				e.preventDefault();
				return false;
			} else {
				$("#chat-input").blur();
				setUserResponse(text);
				send(text);
				e.preventDefault();
				return false;
			}
		}
	});


	function send(text) {
		$.ajax({
			type: "POST",
			url: baseUrl,
			data: { "message":text, "lang": "en", "sessionId":mysession },
			success: function(data) {
				main(data);
			},
			error: function(e) {
				console.log (e);
			}
		});
	}


	function main(data) {
		var messages = data.fulfillmentMessages;
		if(messages) { 
			if(messages.length >= 0) { 
				if (messages[0].platform) {
					if (data.fulfillmentText) {
						setBotResponse(data.fulfillmentText);
					} else {
						setBotResponse(messages[0].quickReplies.title);
					}
					var suggestions = messages[0].quickReplies;
					addSuggestion(suggestions);	
				} else {
                    for (var i = 0; i < messages.length; i++) {
						if (messages[i].text.text) 
                            setBotResponse(messages[i].text.text[0]);
					}
					loadSuggest()
				}
			}
			
		}
	}


	function setBotResponse(val) {
		setTimeout(function(){
			if($.trim(val) != '') {
				val = val.replace(new RegExp('\r?\n','g'), '<br />');
				val = val.replace(/\bhttps:\/\/([\w\.-]+\.)+[a-z]{2,}\/.+\b/gi, '<a href="$&">Link</a>');
				var BotResponse = '<p class="botResult">'+val+'</p><div class="clearfix"></div>';
				$(BotResponse).appendTo('#result_div');
			} 
			hideSpinner();
		}, 500);
	}


	function setUserResponse(val) {
		var UserResponse = '<p class="userEnteredText">'+val+'</p><div class="clearfix"></div>';
		$(UserResponse).appendTo('#result_div');
		$("#chat-input").val('');
		showSpinner();
		$('.suggestion').remove();
	}


	function showSpinner() {
		$('.spinner').show();
	}
	function hideSpinner() {
		$('.spinner').hide();
	}


	function addSuggestion(textToAdd) {
		setTimeout(function() {
			var suggestions = textToAdd.quickReplies;
			var suggLength = textToAdd.quickReplies.length;
			$('<p class="suggestion"></p>').appendTo('#result_div');
			$('<div class="sugg-title">Suggestions: </div>').appendTo('.suggestion');
			for(i=0;i<suggLength;i++) {
				$('<span class="sugg-options">'+suggestions[i]+'</span>').appendTo('.suggestion');
			}
			
		}, 1000);
	}

	$(document).on("click", ".suggestion span", function() {
		var text = this.innerText;
		var listdst = ["Ijen", "Baluran", "Sukamade", "Alas Purwo", "Meuru Betiri", "Green Bay", "Red Island"]
		if (listdst.includes(text)) {
			sessionStorage.setItem('destination', text);
			setUserResponse(text);
			setBotResponse("Ok, what do you want to know about "+ text + "?");
            loadSuggest()
		} else {
			setUserResponse(text);
			send(text);
		}

		$('.suggestion').remove();
	});
});