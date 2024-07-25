<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>

    <style>
        ul {
            width: max-content;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        li.list-item {
            display: flex;
            flex-direction: column;
        }
        .releaseDate {
            color: rgba(0, 0, 0, .5);
            align-self: end;
        }
    </style>
</head>

<body>
    <?php
        $movies = [
            [
                'name' => 'Inception',
                'director' => 'Christopher Nolan',
                'year' => 2010,
                'url' => 'http://example.com'
            ],
            [
                'name' => 'The Dark Knight',
                'director' => 'Christopher Nolan',
                'year' => 2008,
                'url' => 'http://example.com'
            ],
            [
                'name' => 'The Matrix',
                'director' => 'Lana Wachowski, Lilly Wachowski',
                'year' => 1999,
                'url' => 'http://example.com'
            ],
            [
                'name' => 'Pulp Fiction',
                'director' => 'Quentin Tarantino',
                'year' => 1994,
                'url' => 'http://example.com'
            ],
            [
                'name' => 'Fight Club',
                'director' => 'David Fincher',
                'year' => 1999,
                'url' => 'http://example.com'
            ]
        ];

        function filteredByYear($movies, $year) {
            $filteredMovies = [];

            foreach ($movies as $movie) {
                if ($movie['year'] < $year) {
                    $filteredMovies[] = $movie;
                }
            }
            
            return $filteredMovies;
        }
    ?>

    <ul>
        <?php foreach (filteredByYear($movies, 2000) as $movie) : ?>
            <li class="list-item">
                <a href="<?= $movie['url'] ?>">
                    <?= $movie['name'] ?>
                </a>
                <span class="releaseDate"><?= $movie['year'] ?></span>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>