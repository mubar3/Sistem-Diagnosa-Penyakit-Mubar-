<x-app-layout>
	<x-slot name="title">Member</x-slot>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<x-slot name="title">All Pakar</x-slot>
		<x-slot name="option">
			<a href="{{ route('admin.pakar_member.create') }}" class="btn btn-success">
				<i class="fas fa-plus"></i>
			</a>
		</x-slot>
		<table class="table table-bordered">
			<thead>
				<th>Name</th>
				<th>Asal</th>
				<th>Profesi</th>
				<th>Action</th>
			</thead>
			<tbody>
				@forelse($pakars as $user)
				<tr>
					<td>{{ $user->name }}</td>
					<td>{{ $user->asal }}</td>
					<td>{{ $user->profesi }}</td>
					<td class="text-center">
						<button type="button" class="btn btn-info mr-1 info"
						data-name="{{ $user->name }}" data-asal="{{ $user->asal }}" data-profesi="{{ $user->profesi }}" data-created="{{ $user->created_at->format('d-M-Y H:m:s') }}">
							<i class="fas fa-eye"></i>
						</button>
						<a href="{{ route('admin.pakar_member.edit', $user->id) }}" class="btn btn-primary mr-1"><i class="fas fa-edit"></i></a> 
						<form action="{{ route('admin.pakar_member.delete', $user->id) }}" style="display: inline-block;" method="POST">
							@csrf
							<button type="button" class="btn btn-danger delete"><i class="fas fa-trash"></i></button>
						</form>
					</td>
				</tr>
				@empty
				<tr>
					<td colspan="3" class="text-center">No Member</td>
				</tr>
				@endforelse
			</tbody>
		</table>
		<div class="mt-3">
			{{-- {{ $users->links() }} --}}
		</div>
	</x-card>

	<x-modal>
		<x-slot name="id">infoModal</x-slot>
		<x-slot name="title">Information</x-slot>

		<div class="row mb-2">
			<div class="col-6">
				<b>Name</b>
			</div>
			<div class="col-6" id="name-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Asal</b>
			</div>
			<div class="col-6" id="asal-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Profesi</b>
			</div>
			<div class="col-6" id="profesi-modal"></div>
		</div>
		<div class="row mb-2">
			<div class="col-6">
				<b>Created</b>
			</div>
			<div class="col-6" id="created-modal"></div>
		</div>
	</x-modal>

	<x-slot name="script">
		<script>
			$('.info').click(function(e) {
				e.preventDefault()

				$('#name-modal').text($(this).data('name'))
				$('#asal-modal').text($(this).data('asal'))
				$('#profesi-modal').text($(this).data('profesi'))
				$('#created-modal').text($(this).data('created'))

				$('#infoModal').modal('show')
			})

			$('.delete').click(function(e){
				e.preventDefault()
				const ok = confirm('Ingin menghapus pakar?')

				if(ok) {
					$(this).parent().submit()
				}
			})
		</script>
	</x-slot>
</x-app-layout>