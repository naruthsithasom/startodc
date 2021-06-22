// code from https://limonte.github.io/sweetalert2/
$(function () {
	$('.js-sweetalert button').on('click', function () {
		var type = $(this).data('type');
		if (type === 'basic') {
			swal('Any fool can use a computer');
		}
		else if (type === 'title') {
			swal(
				'The Internet?',
				'That thing is still around?',
				'question'
			);
		}
		else if (type === 'success') {
			swal(
				'Good job!',
				'You clicked the button!',
				'success'
			);
		} 
		else if (type === 'autoclose') {
			swal({
				title: 'Auto close alert!',
				text: 'I will close in 2 seconds.',
				timer: 2000,
				onOpen: function(){
				    swal.showLoading()
				}
			}).then(function(result){
				if (result.dismiss === 'timer') {
					console.log('I was closed by the timer')
				}
			})
		} 
		else if (type === 'custom-html') {
			swal({
				title: '<i>HTML</i> <u>example</u>',
				type: 'info',
				html: 'You can use <b>bold text</b>, ' +
					'<a href="//github.com">links</a> ' +
					'and other HTML tags',
				showCloseButton: true,
				showCancelButton: true,
				focusConfirm: false,
				confirmButtonText: '<i class="fa fa-thumbs-up"></i> Great!',
				confirmButtonAriaLabel: 'Thumbs up, great!',
				cancelButtonText: '<i class="fa fa-thumbs-down"></i>',
				cancelButtonAriaLabel: 'Thumbs down',
			})
		} 
		else if (type === 'animation') {
			swal({
				title: 'jQuery HTML example',
				html: $('<div>')
					.addClass('some-class')
					.text('jQuery is everywhere.'),
				animation: false,
				customClass: 'animated tada'
			});
		} 
		else if (type === 'warning-confirm') {
			swal({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!'
			}).then(function(result){
  				if (result.value) {
				    swal(
				      'Deleted!',
				      'Your file has been deleted.',
				      'success'
				    )
  				}
			})
		} 
		else if (type === 'warning-cancel') {
			swal({
				title: 'Are you sure?',
				text: "You won't be able to revert this!",
				type: 'warning',
				showCancelButton: true,
				confirmButtonColor: '#3085d6',
				cancelButtonColor: '#d33',
				confirmButtonText: 'Yes, delete it!',
				cancelButtonText: 'No, cancel!',
				confirmButtonClass: 'btn btn-success btn-lg m-l-5',
				cancelButtonClass: 'btn btn-danger btn-lg m-r-5',
				buttonsStyling: false,
				reverseButtons: true
			}).then(function (result) {
				if (result.value) {
					swal(
						'Deleted!',
						'Your file has been deleted.',
						'success'
					)
				// result.dismiss can be 'cancel', 'overlay',
				// 'close', and 'timer'
				} else if (result.dismiss === 'cancel') {
					swal(
						'Cancelled',
						'Your imaginary file is safe :)',
						'error'
					)
				}
			});
		} 
		else if (type === 'image-animation-disabled') {
			swal({
				title: 'Sweet!',
				text: 'Modal with a custom image.',
				imageUrl: 'https://unsplash.it/400/200',
				imageWidth: 400,
				imageHeight: 200,
				animation: false
			});
		} 
		else if (type === 'custom-width') {
			swal({
				title: 'Custom width, padding, background.',
				width: 600,
				padding: 100,
				background: '#fff url(//bit.ly/1Nqn9HU)'
			});
		} 
		else if (type === 'ajax') {
			swal({
				title: 'Submit email to run ajax request',
				input: 'email',
				showCancelButton: true,
				confirmButtonText: 'Submit',
				showLoaderOnConfirm: true,
				preConfirm: function (email) {
					return new Promise(function (resolve, reject) {
						setTimeout(function() {
							if (email === 'taken@example.com') {
								reject('This email is already taken.')
							} else {
								resolve()
							}
						}, 2000)
					})
				},
				allowOutsideClick: false
			}).then(function (email) {
				swal({
					type: 'success',
					title: 'Ajax request finished!',
					html: 'Submitted email: ' + email
				})
			});
		} 
		else if (type === 'chaining') {
			swal.setDefaults({
				input: 'text',
				confirmButtonText: 'Next &rarr;',
				showCancelButton: true,
				animation: false,
				progressSteps: ['1', '2', '3']
			})

			var steps = [
				{
					title: 'Question 1',
					text: 'Chaining swal2 modals is easy'
				},
				'Question 2',
				'Question 3'
			]

			swal.queue(steps).then(function (result) {
				swal.resetDefaults()
				swal({
					title: 'All done!',
					html:
						'Your answers: <pre>' +
							JSON.stringify(result) +
						'</pre>',
					confirmButtonText: 'Lovely!',
					showCancelButton: false
				});
			}, function () {
				swal.resetDefaults()
			});
		} 
		else if (type === 'dynamic') {
			swal.queue([{
				title: 'Your public IP',
				confirmButtonText: 'Show my public IP',
				text:
					'Your public IP will be received ' +
					'via AJAX request',
				showLoaderOnConfirm: true,
				preConfirm: function () {
					return new Promise(function (resolve) {
						$.get('https://api.ipify.org?format=json')
						.done(function (data) {
							swal.insertQueueStep(data.ip);
							resolve();
						})
					})
				}
			}]);
		}
		
	});
});
