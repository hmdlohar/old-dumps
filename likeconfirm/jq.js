function getLog() {
    $.ajax({
        url: 'old.txt',
        dataType: 'text',
        success: function(text) {
            $("#text").text(text);
            setTimeout(getLog, 1000); // refresh every 30 seconds
        }
    })
}

function getinput(){
var inputget = $("#get").val();
$("#post").text(inputget);
setTimeout(getinput, 1000);
	}

	});
//getinput();
//getLog();