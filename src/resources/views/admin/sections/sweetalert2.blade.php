@if($msg = session('msg'))
	<script>
		swal.fire({
			type: '{{ $msg[2] }}',
			title: '{{ $msg[1] }}',
			text: '{{ $msg[0] }}',
			confirmTextButton: 'متوجه شدم'
		})
	</script>
@endif