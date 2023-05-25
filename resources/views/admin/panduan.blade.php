<x-app-layout>
	<x-slot name="title">Panduan</x-slot>

	@if(session()->has('success'))
	<x-alert type="success" message="{{ session()->get('success') }}" />
	@endif
	<x-card>
		<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#step1" aria-expanded="false" aria-controls="collapseExample">
			1. Mengisi form pada halaman Diagnosa
		</button>
		<button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#step2" aria-expanded="false" aria-controls="collapseExample">
			2. Melihat hasil diagnosa di halaman Riwayat Diagnosa
		</button>
		<div class="collapse" id="step1">
			<div class="card card-body">
				<li>
					Memasukkan nama
				</li>
				<li>
					Mengisi form mengenai gejala-gejala yang dialami
				</li>
				<li>
					klik <b>Diagnosa sekarang</b> 
				</li>
				<li>
					sistem akan menganasisa sesuai data yang dimasukkan
				</li>

				</div>
		</div>
		<div class="collapse" id="step2">
			<div class="card card-body">
				Untuk hasil diagnosa akan tampil (bisa dilihat / dicetak) dan bisa dicari sesuai nama yang diinputkan.
			</div>
		</div>
	</x-card>

	

	
</x-app-layout>