<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Codenest</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 800px;
            margin: 0 auto;
        }

        h1 {
            color: #2c3e50;
            text-align: center;
        }

        h2 {
            color: #34495e;
            border-bottom: 1px solid #ecf0f1;
            padding-bottom: 10px;
        }

        .company-description {
            font-style: italic;
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <header>
        {{-- @dd($hero[1]->title) --}}
        <h1>{{ $hero[1]->title }}</h1>
        <p class="company-description">{{ $hero[1]->subtitle }}</p>
    </header>

    <main>
        <section>
            <h2>Service</h2>
            @foreach ($service as $item)
                <h4>-{{ $item->heading }}</h4>
                <p>
                    {{ $item->description }}
                </p>
            @endforeach
        </section>

        <section>
            <h2>Teams </h2>
            @foreach ($team as $item)
                <h4>{{ $item->name }}</h4>
                <p>
                    {{ $item->bio }}
                </p>
            @endforeach
        </section>

        <section>
            <h2>Proyek Terbaru</h2>
            {{-- <ul>
                @foreach ($project as $item)
                    <li>{{ $item->name }}</li>
                @endforeach
            </ul> --}}

            @foreach ($project as $item)
                <div>
                    <h4>-{{ $item->name }}</h4>
                    <p>{{ $item->description }}</p>
                </div>
            @endforeach
        </section>

        <section>
            <h2>Perusahaan Terpercaya</h2>
            <ul>
                @foreach ($trustedcompany as $item)
                    <li>{{ $item->company_name }}</li>
                @endforeach
            </ul>
        </section>

        <section>
            <h2>Hubungi Kami</h2>
            <p>
                Email: info@techsolutions.id<br>
                Telepon: +62 21 1234 5678<br>
                Website: www.techsolutions.id
            </p>
        </section>
    </main>
</body>

</html>
