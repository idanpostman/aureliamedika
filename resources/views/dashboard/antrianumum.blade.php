@extends('dashboard.layout.main')

@section('container')
<div class="pt-20 pl-4 sm:ml-64 ">
    <main class="w-full flex-grow">
        <h1 class="text-3xl text-secondary font-bold pb-1">Hi {{ auth()->user()->name }} !</h1>
</div>

<div class=" pl-4 pr-4 sm:ml-64 relative overflow-x-auto sm:rounded-lg shadow-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 shadow-lg">
        <caption class="p-5 text-lg font-semibold text-left rtl:text-right text-gray-900 bg-white ">
            Antrian Poli Umum Hari Ini
            <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-5 items-center justify-between pb-4">
                <!-- Button Tambah Antrian -->
                <a href="/dashboard/antrian/create">
                    <button class="absolute top-8 right-8 text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5"> + Tambah Antrian</button>
                </a>
            </div>
        </caption>

        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-100 "><tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama Pasien
                </th>
                <th scope="col" class="px-6 py-3">
                    No Telpon
                </th>
                <th scope="col" class="px-6 py-3">
                    Poli
                </th>
                <th scope="col" class="px-6 py-3">
                    No Antrian
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Aksi
                    <span class="sr-only pr-10"></span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($antrians as $antrian)
                <tr class="bg-white border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-primary whitespace-nowrap">
                        {{ $loop->iteration }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $antrian->nama }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $antrian->no_telp }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $antrian->poli }}
                    </td>
                    <td class="px-6 py-4">
                        {{ "{$antrian->kode_poli} - {$antrian->nomor_antrian}" }}
                    </td>
                <td class="px-3 py-4 text-center">
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-500/90 focus:ring-4 focus:outline-none focus:ring-green-500/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-green-500/55 me-2 mb-2"
                    onclick="playNotificationSound('{{ $antrian->kode_poli }}', '{{ $antrian->nomor_antrian }}')">
                        <svg class="w-4 h-4 mb-1 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="#ffffff" d="M480 32c0-12.9-7.8-24.6-19.8-29.6s-25.7-2.2-34.9 6.9L381.7 53c-48 48-113.1 75-181 75H192 160 64c-35.3 0-64 28.7-64 64v96c0 35.3 28.7 64 64 64l0 128c0 17.7 14.3 32 32 32h64c17.7 0 32-14.3 32-32V352l8.7 0c67.9 0 133 27 181 75l43.6 43.6c9.2 9.2 22.9 11.9 34.9 6.9s19.8-16.6 19.8-29.6V300.4c18.6-8.8 32-32.5 32-60.4s-13.4-51.6-32-60.4V32zm-64 76.7V240 371.3C357.2 317.8 280.5 288 200.7 288H192V192h8.7c79.8 0 156.5-29.8 215.3-83.3z"/>
                        </svg>
                    </button>
                    <button type="button" class="text-white bg-green-400 hover:bg-green-600/90 focus:ring-4 focus:outline-none focus:ring-green-500/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-green-500/55 me-2 mb-2"
                            onclick="moveToRekamMedis('{{ $antrian->id }}')">
                        Ada
                    </button>
                    <form action="{{ url('/dashboard/antrian-poli-umum/' . $antrian->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-white bg-red-700 hover:bg-red-600/90 focus:ring-4 focus:outline-none focus:ring-green-500/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-green-500/55 me-2 mb-2">
                            Tidak Ada
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<audio id="notificationSound">
    <source src="/path-to-your-sound-file.mp3" type="audio/mp3">
    Your browser does not support the audio element.
</audio>
<script>
    function moveToRekamMedis(antrianId) {
        if (confirm('Apakah Anda yakin ingin memindahkan data ke rekam medis?')) {
            window.location.href = '/dashboard/antrian/move-to-rekam-medis/' + antrianId;
        }
    }

    function playNotificationSound(kode_poli, nomor_antrian) {
    var audioPath = "/sound/";

    // Mapping for the sounds based on digits
    var digitSounds = {
        '0': 'nol',
        '1': '1',
        '2': '2',
        '3': '3',
        '4': '4',
        '5': '5',
        '6': '6',
        '7': '7',
        '8': '8',
        '9': '9'
    };

    // Mapping for special cases
    var specialCases = {
        '10': 'sepuluh',
        '11': 'sebelas'
    };

    function playNext(index) {
        if (index < audioFiles.length) {
            var audio = new Audio(audioFiles[index]);
            audio.addEventListener('ended', function () {
                playNext(index + 1);
            });
            audio.play();
        }
    }

    // Define the sequence of audio files
    var audioFiles = [
        audioPath + "Airport_Bell.mp3",
        audioPath + "Nomor_antrian.mp3",
        audioPath + kode_poli.toLowerCase() + ".mp3",
    ];

    // Add audio files for special cases
    if (specialCases.hasOwnProperty(nomor_antrian)) {
        audioFiles.push(audioPath + specialCases[nomor_antrian] + ".mp3");
    } else {
        // Handle tens and units separately
        var tens = Math.floor(nomor_antrian / 10);
        var units = nomor_antrian % 10;

        // Add audio files for tens
        if (tens > 1) {
            audioFiles.push(audioPath + digitSounds[tens] + ".mp3");
            audioFiles.push(audioPath + "puluh.mp3");
        }

        // Add audio files for units
        if (units > 0) {
            audioFiles.push(audioPath + digitSounds[units] + ".mp3");
        }
    }

    // Add the "Masuk ke Ruangan" sound
    audioFiles.push(audioPath + "masuk_ke_ruangan.mp3");

    // Start playing the first audio file
    playNext(0);

}
</script>

@endsection
