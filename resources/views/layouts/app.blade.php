<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        navy: {
                            DEFAULT: '#1e293b',
                            light: '#334155',
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-navy text-white min-h-screen p-6">
    <div class="max-w-6xl mx-auto border border-navy-light rounded-xl bg-white text-navy p-8 shadow">
        @yield('content')
    </div>
</body>
</html>