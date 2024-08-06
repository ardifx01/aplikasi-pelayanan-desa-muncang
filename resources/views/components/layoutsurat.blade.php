<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>{{ $tabs }}</title>

    <style>
        .judul {
            margin: 0;
            padding: 0;
            text-align: center;
        }

        .judul-surat {
            text-decoration: underline;
            font-size: 1.2em;
            margin-bottom: 5px;
            line-height: 1;
        }

        .nomor-surat {
            font-size: 1em;
            line-height: 1;
        }

        .justify {
            text-align: justify;
            line-height: 1.5;
        }
    </style>
</head>

<body>
    <x-kopsurat></x-kopsurat>

    <div class="judul mt-4">
        <strong class="judul-surat">{{ $judulsurat }}</strong>
        <p class="nomor-surat mt-1">{{ $nomorsurat }}</p>
    </div>

    <div class="mt-4 justify">
        {{ $slot }}
    </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>
