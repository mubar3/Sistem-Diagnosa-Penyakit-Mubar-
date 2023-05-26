<x-app-layout>
	<x-slot name="title">Member</x-slot>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<x-slot name="title">All Pakar</x-slot>
		<x-slot name="option">
			@if ($role == 1)
			<a href="{{ route('admin.pakar_member.create') }}" class="btn btn-success">
				<i class="fas fa-plus"></i>
			</a>
			@endif
		</x-slot>
		<table class="table table-bordered">
			<thead>
				<th>Foto</th>
				<th>Name</th>
				<th>Asal</th>
				<th>Profesi</th>
				<th>Deskripsi</th>
				<th>Action</th>
			</thead>
			<tbody>
				@forelse($pakars as $user)
				<tr>
					<td>
						@if (!empty($user->foto))
							<img width="100px" src="{{ asset('/storage/foto/'.$user->foto) }}" class="rounded">
						@endif
					</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->asal }}</td>
					<td>{{ $user->profesi }}</td>
					<td>{{ $user->deskripsi }}</td>
					<td class="text-center">
						<button type="button" class="btn btn-info mr-1 info"
						data-name="{{ $user->name }}" data-foto="{{ $user->foto }}" data-asal="{{ $user->asal }}" data-profesi="{{ $user->profesi }}" data-deskripsi="{{ $user->deskripsi }}" data-created="{{ $user->created_at->format('d-M-Y H:m:s') }}">
							<i class="fas fa-eye"></i>
						</button>
						@if ($role == 1)
							<a href="{{ route('admin.pakar_member.edit', $user->id) }}" class="btn btn-primary mr-1"><i class="fas fa-edit"></i></a> 
							<form action="{{ route('admin.pakar_member.delete', $user->id) }}" style="display: inline-block;" method="POST">
								@csrf
								<button type="button" class="btn btn-danger delete"><i class="fas fa-trash"></i></button>
							</form>
						@endif
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

		{{-- <img width="100px" src="{{ asset('/storage/foto/mb378.jpg') }}" id="foto_modal" class="rounded"> --}}
		<div class="row">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm">
			  </div>
			  <div class="col-sm">
				  <img width="100px" id="foto-modal" class="rounded">
			  </div>
			  <div class="col-sm">
			  </div>
			</div>
		  </div>
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
				<b>Deskripsi</b>
			</div>
			<div class="col-6" id="deskripsi-modal"></div>
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
				if($(this).data('foto') != ''){
					document.getElementById("foto-modal").src="/storage/foto/"+$(this).data('foto')
				}
				$('#profesi-modal').text($(this).data('profesi'))
				$('#created-modal').text($(this).data('created'))
				$('#deskripsi-modal').text($(this).data('deskripsi'))

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