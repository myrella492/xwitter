<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Xwitter - Cadastro</title>
  <style>
    
  </style>
</head>

<body class="bg-slate-900 text-black flex items-center justify-center min-h-screen">
  <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-sm">
    <h2 class="text-2xl font-semibold text-center text-gray-700 mb-6">Cadastrar-se</h2>
    <form action="/register" method="POST">
      <div class="mb-4">
        <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
        <input type="text" id="email" name="name" required
          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm color: black;">
      </div>
      <div class="mb-6">
        <label for="username" class="block text-sm font-medium text-gray-700">Nome de usuário</label>
        <input type="text" id="email" name="username" required
          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm color: black;">
      </div>
      <div class="mb-6">
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input type="text" id="email" name="email" required
          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm color: black;">
      </div>
      <div class="mb-6">
        <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
        <input type="password" id="password" name="password" required
          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm color: black;">
      </div>
      <input type="submit" value="Entrar"
        class="w-full bg-indigo-600 text-white font-semibold py-2 px-4 rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-opacity-50">
    </form>
  </div>
</body>

</html>