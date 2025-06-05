<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Buku Tamu Digital</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background: linear-gradient(to right, #eef2f3, #8e9eab);
    }
  </style>
</head>
<body class="min-h-screen flex flex-col items-center justify-center px-4 py-10 font-sans">

  <div class="w-full max-w-xl bg-white/80 backdrop-blur-lg rounded-xl shadow-xl p-8">
    <h1 class="text-3xl font-bold text-center text-indigo-700 mb-6 tracking-wide">📘 Buku Tamu</h1>

    @if(session('success'))
      <div class="bg-green-100 text-green-800 px-4 py-3 rounded mb-6 border border-green-300 text-sm">
        {{ session('success') }}
      </div>
    @endif

    <form action="{{ route('tamu.store') }}" method="POST" class="space-y-4">
      @csrf
      <input type="text" name="nama" placeholder="Nama" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400" required>
      <input type="email" name="email" placeholder="Email" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400" required>
      <textarea name="pesan" placeholder="Pesan" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400" rows="3" required></textarea>
      <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded shadow transition duration-300">Kirim</button>
    </form>
  </div>

  <div class="w-full max-w-xl mt-10">
    <h2 class="text-xl font-semibold text-gray-700 mb-4">📄 Daftar Tamu</h2>
    @forelse($tamus as $tamu)
      <div class="bg-white/90 backdrop-blur rounded-md shadow-md p-4 mb-3 border border-gray-200">
        <div class="flex justify-between items-center mb-1">
          <div>
            <p class="font-bold text-gray-800">{{ $tamu->nama }} <span class="text-sm text-gray-500">({{ $tamu->email }})</span></p>
          </div>
          <small class="text-gray-400 text-xs">{{ $tamu->created_at->diffForHumans() }}</small>
        </div>
        <p class="text-gray-700">{{ $tamu->pesan }}</p>
      </div>
    @empty
      <p class="text-gray-600 text-sm">Belum ada tamu yang mengisi.</p>
    @endforelse
  </div>

</body>
</html>
