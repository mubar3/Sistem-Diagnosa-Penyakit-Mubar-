<x-app-layout>
	<x-slot name="title">New Pakar</x-slot>
	
	{{-- show alert if there is errors --}}
	<x-alert-error/>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<form action="{{ route('admin.pakar_member.create') }}" enctype="multipart/form-data" method="post">
			@csrf

			<div class="row">
				<div class="col-md-6">
					<x-input text="Name" name="name" type="text" />
				</div>
				<div class="col-md-6">
					<x-input text="Asal" name="asal" type="text" />
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<x-input text="Profesi" name="profesi" type="text" />
				</div>
				<div class="col-md-6">
					<x-input text="foto" name="foto" type="file" />
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<x-input text="Deskripsi" name="deskripsi" type="text" />
				</div>
			</div>

			<x-button type="primary" text="Submit" for="submit" />
			
		</form>
	</x-card>
</x-app-layout>