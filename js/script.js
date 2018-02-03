$(document).ready(function(){
	$('#submit').on('click', function(){
		var name = $('#name').val();
		var shout = $('#shout').val();
		var date = getDate();
		var dataString = 'name='+ name + '&shout=' + shout + '&date=' + date;

		// Validation
		if(name == '' || shout == ''){
			alert('Please fill in your name and shout');
		} else {
			// AJAX sends the data to the php file
			$.ajax({
				type:"POST",
				url:"../test/shoutbox.php",//the folder name correcpends to my folder in Xampp folder
				data: dataString,
				cache: false,
				success: function(html){
					$('#shouts ul').prepend(html);
				}
			});
		}

		return false;
	});
});

//Format date like MySQL date
function getDate(){
	var date;
    date = new Date();
    date = date.getUTCFullYear() + '-' +
            ('00' + (date.getUTCMonth() + 1)).slice(-2) + '-' +
            ('00' + date.getUTCDate()).slice(-2) + ' ' +
            ('00' + date.getUTCHours()).slice(-2) + ':' +
            ('00' + date.getUTCMinutes()).slice(-2) + ':' +
            ('00' + date.getUTCSeconds()).slice(-2);
    return date;
}
