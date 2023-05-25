<x-app-layout>
	<x-slot name="title">Edit User</x-slot>

	{{-- show alert if there is errors --}}
	<x-alert-error/>
	
	<x-card>
		<form action="{{ route('admin.pakar_member.update', $user->id) }}" enctype="multipart/form-data" method="post">
			@csrf

			<div class="row">
				<div class="col-md-6">
					<x-input text="Name" name="name" type="text" value="{{ $user->name }}" />
				</div>
				<div class="col-md-6">
					<x-input text="Asal" name="asal" type="text" value="{{ $user->asal }}" />
				</div>
			</div>

			<div class="row">
				<div class="col-md-6">
					<x-input text="Profesi" name="profesi" type="text" value="{{ $user->profesi }}" />
				</div>
				<div class="col-md-6">
					@if (!empty($user->foto))
						<img width="100px" src="{{ asset('/storage/foto/'.$user->foto) }}" class="rounded">
					@endif
					<x-input text="foto" name="foto" type="file" />
				</div>
			</div>


			<x-button type="primary" text="Submit" for="submit" />
			
		</form>
	</x-card>
</x-app-layout>