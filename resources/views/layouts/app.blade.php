<html>
    <head>
        <title>My New Blog</title>

        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/@tailwindcss/typography@0.2.x/dist/typography.min.css" />
    </head>
    <body>
        <div class="border-t-8 border-blue-500 p-32">
            <div class="max-w-4xl mx-auto prose xl:prose-xl">
                @yield('content')
            </div>
        </div>
    </body>
</html>
