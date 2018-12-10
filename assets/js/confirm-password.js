document.getElementById('signButton').disabled = 'disabled';
document.getElementById('signButton').style.backgroundColor = '#ccc';

var match_password = function() {
	if (document.getElementById('password').value == document.getElementById('confirm-password').value) {
		document.getElementById('message').style.color = 'green';
		document.getElementById('message').innerHTML = '';
		document.getElementById('signButton').disabled = '';
		document.getElementById('signButton').style.backgroundColor = '';
		
	} else {
		document.getElementById('signButton').disabled = 'disabled';
		document.getElementById('signButton').style.backgroundColor = '#ccc';
		document.getElementById('message').style.color = 'red';
		document.getElementById('message').innerHTML = "Password didn't match";
	}
}