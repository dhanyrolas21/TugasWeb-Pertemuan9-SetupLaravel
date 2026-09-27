<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home - Setup Laravel</title>
</head>
<body class="bg-slate-900 text-white min-h-screen flex flex-col justify-center items-center p-4">
    <div class="bg-slate-800 p-8 rounded-xl border border-slate-700 max-w-md w-full text-center shadow-lg">
        <h1 class="text-3xl font-bold text-indigo-400 mb-2">Selamat Datang!</h1>
        <p class="text-slate-300 mb-4">Pengguna: <span class="font-semibold text-emerald-400">{{ $user }}</span></p>
        
        <h2 class="text-lg font-semibold text-slate-200 mt-4 mb-2">Daftar Tech Stack:</h2>
        <div class="flex flex-wrap justify-center gap-2 mb-6">
            @foreach($skills as $skill)
                <span class="bg-slate-700 text-indigo-300 py-1 px-3 rounded-lg text-sm font-medium">{{ $skill }}</span>
            @endforeach
        </div>

        <div class="flex justify-center space-x-4 border-t border-slate-700 pt-4">
            <a href="/" class="text-indigo-400 hover:underline text-sm">Home</a>
            <a href="/about" class="text-indigo-400 hover:underline text-sm">About</a>
            <a href="/contact" class="text-indigo-400 hover:underline text-sm">Contact</a>
        </div>
    </div>
</body>
</html>