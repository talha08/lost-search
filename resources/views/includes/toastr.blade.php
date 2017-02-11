@if($success = Session::get('success'))
<script>
	$(document).ready(function() {
		setTimeout(function() {
			toastr.options = {
				closeButton: true,
				progressBar: true,
				positionClass: "toast-bottom-right",
				showMethod: 'slideDown',
				timeOut: 4000
			};
			toastr.success('Lost! Web App', "<?php echo $success ?>");

		}, 1300);

	});
</script>
@endif

@if($error = Session::get('error'))
	<script>
		$(document).ready(function() {
			setTimeout(function() {
				toastr.options = {
					closeButton: true,
					progressBar: true,
					positionClass: "toast-bottom-right",
					showMethod: 'slideDown',
					timeOut: 4000
				};
				toastr.error('Lost! Web App', "<?php echo $error ?>");

			}, 1300);

		});
	</script>
@endif

@if($warning = Session::get('warning'))
	<script>
		$(document).ready(function() {
			setTimeout(function() {
				toastr.options = {
					closeButton: true,
					progressBar: true,
					showMethod: 'slideDown',
					positionClass: "toast-bottom-right",
					timeOut: 4000
				};
				toastr.warning('Lost! Web App', "<?php echo $warning ?>");

			}, 1300);

		});
	</script>
@endif

@if($info = Session::get('info'))
	<script>
		$(document).ready(function() {
			setTimeout(function() {
				toastr.options = {
					closeButton: true,
					progressBar: true,
					showMethod: 'slideDown',
					positionClass: "toast-bottom-right",
					timeOut: 4000
				};
				toastr.info('Lost! Web App', "<?php echo $info ?>");

			}, 1300);

		});
	</script>
@endif


@if (!$errors->isEmpty())
	@foreach($errors->all() as $error)
	<script>
		$(document).ready(function() {
			setTimeout(function() {
				toastr.options = {
					closeButton: true,
					progressBar: true,
					showMethod: 'slideDown',
					positionClass: "toast-bottom-right",
					timeOut: 4000
				};
				toastr.error('Lost! Web App', "<?php echo $error ?>");

			}, 1300);

		});
	</script>
	@endforeach
@endif