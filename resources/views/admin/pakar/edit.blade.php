<x-app-layout>
	<x-slot name="title">Edit User</x-slot>

	{{-- show alert if there is errors --}}
	<x-alert-error/>
	
	<x-card>
		<form action="{{ route('admin.pakar_member.update', $user->id) }}" method="post">
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
			</div>


			<x-button type="primary" text="Submit" for="submit" />
			
		</form>
	</x-card>
</x-app-layout>