<x-layout title="Profile">

    <div class="bg-white shadow rounded-lg p-6">

        <h2 class="text-2xl font-bold mb-4">
            Profile Saya
        </h2>

        <div class="flex flex-col items-center">

            <img
                src="{{ asset('img/pictayaa.jpg') }}"
                alt="Foto Profil"
                class="w-48 h-48 rounded-full object-cover object-top border-4 border-gray-300 shadow-lg">

            <h3 class="mt-4 text-xl font-semibold">
                Gea 
            </h3>

            <p class="text-gray-600">
                Mahasiswa TRPL
            </p>

        </div>

        <div class="mt-6 space-y-2">
            <p><strong>Nama:</strong> Gea Dwi Putri</p>
            <p><strong>Jurusan:</strong> teknologi rekayasa perangkat lunak</p>
            <p><strong>Status:</strong> Mahasiswa</p>
            <p><strong>Mata Kuliah:</strong> Pemrograman Web lanjutan</p>
            <p><strong>Alamat:</strong> Sungailiat</p>
            <p><strong>Hobi:</strong> menonton dan memasak</p>
        </div>

    </div>

</x-layout>