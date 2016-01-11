// Scripts for the corresponding answer_sheet.php page

//Sends the answer to the server to be graded
function gradeAnswer(qNum, l3, l2, l1){
	obj = new Object;
	obj.action = 'gradeAnswer';
	obj.question = qNum;	//question number, as an INT
	obj.level3 = l3;		//level 3 answer, as a char
	obj.level2 = l2;		//level 2 answer, as a char
	obj.level1 = l1;		//level 1 answer, as a char
	$.post('server/user_runner.php',obj,function(data){
		console.log(data);
		data = JSON.parse(data);
		var hist = data[0];	//new history statement, in format "0;0;0;0;2;1;1;0...": 0 = unattempted, 1 = correct, 2 = incorrect
		var res1 = data[1];	//result for level 1: 1 = correct, 0 = incorrect
		var res2 = data[2];	//result for level 2
		var res3 = data[3];	//result for level 3
		//console.log("hist "+hist+" ; "+res1+" "+res2+" "+res3);
		
		//WRITE GUI CHANGE HERE
	});
}

$(document).ready( function() {
	var action;
		$.post("server/user_control.php", action= "action=getNickname", function(data) {
			console.log("Retrieving nickname if available.");
			//console.log(JSON.parse(data));
			if(data){
				$("#nickname").text(JSON.parse(data));
			}
		});
		
	
	$("#submitNickname").click( function(){
		 obj = new Object;
		 obj.action = "setNickname";
		 obj.nickname =  $("#nicknameInput").val();
		$.post("server/user_control.php", obj, function(data) {
			console.log(data)
			console.log(nickname)
			if(data){
				$("#nickname").text(obj.nickname);
				console.log(data);
			}
			else {
				console.log("Oops! Something went wrong. :(")
			}
			
		});
		document.getElementById("nicknameInput").value = "";
	});
	
	$("#logoutButton").click( function() {
		action = "action=userLogout";
		$.post("server/user_control.php", action, function(data) {
			console.log(data)
			
			if(data){
				window.location.href = "index.php";
			}
			else {
				console.log("Logout failed.");
			}
		});
	});
});
