$(document).ready(function(){
	$('#registrationButton').on('click', function(){
		$('#logIn').fadeOut(0);
		$('#signUp').fadeIn(0);

		$('#registrationButton').css('background-color', 'rgba(156, 0, 101, 1)');
		$('#loginButton').css('background-color', 'rgba(156, 0, 101, 0.4)');
	});
	$('#loginButton').on('click', function(){
		$('#signUp').fadeOut(0);
		$('#logIn').fadeIn(0);

		$('#registrationButton').css('background-color', 'rgba(156, 0, 101, 0.4)');
		$('#loginButton').css('background-color', 'rgba(156, 0, 101, 1)');
	});

	$('#docBtn').on('click', function(){
		$('#patBtn').css('background-color', 'rgba(37, 69, 93, 0.4)');
		$('#docBtn').css('background-color', 'rgba(37, 69, 93, 0.7)');
		$('#signUpButton').attr('name','createDoctorAccount');

		$('#hide').fadeOut(0);
		$('#signUpForm').css('animation','blurr 0.5s');
		setTimeout(function(){
			$('#signUpForm').css('filter','blur(0px)');
		}, 499);
	});
	$('#patBtn').on('click', function(){
		$('#docBtn').css('background-color', 'rgba(37, 69, 93, 0.4)');
		$('#patBtn').css('background-color', 'rgba(37, 69, 93, 0.7)');
		$('#signUpButton').attr('name','createPatientAccount');

		$('#hide').fadeOut(0);
		$('#signUpForm').css('animation','blurr 0.5s');
		setTimeout(function(){
			$('#signUpForm').css('filter','blur(0px)');
		}, 499);
	});

	// --------------

	
});