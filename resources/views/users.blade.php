<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite('resources/css/app.css')
  <title>Document</title>
</head>
<body class="bg-light-black">
  <div class="md:py-[50px] md:px-[150px] p-5">
    <form class="mb-5">
      <a href="{{ route("export") }}" class="px-5 py-3 bg-black text-green rounded-md">Export</a>
    </form>
    <div class="rounded-lg">
      <table class="w-full text-sm text-left text-gray dark:text-gray-400">
        <thead class="bg-black border-b">
          <tr>
            <th class="text-sm font-medium text-white px-6 py-4 text-left">
              #Id
            </th>
            <th class="text-sm font-medium text-white px-6 py-4 text-left">
              Name
            </th>
            <th class="text-sm font-medium text-white px-6 py-4 text-left">
              Email
            </th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
              <tr class="bg-black border-b dark:bg-gray dark:border-gray">
                <td class="py-4 px-6 hover:text-green">
                  {{ $user->id }}
                </td>
                <td class="py-4 px-6 hover:text-green">
                  {{ $user->name }}
                </td>
                <td class="py-4 px-6 hover:text-green">
                  {{ $user->email }}
                </td>
              </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>


