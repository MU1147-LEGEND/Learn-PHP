<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="10">
    <title>Document</title>
</head>

<body>
    <h1>Hello World </h1>

    <?php
    $name = "JavaScript";
    $learned = true;

    if ($learned) {
        $message = "You've learned $name";
    } else {
        $message = "You haven't learned $name";
    }

    ?>

    <h1>
        <?= $message; ?>
    </h1>

    <!-- PHP arrays with associative array, condition, function -->

    <?php
    $languages = [
        [
            'name' => 'C',
            'author' => 'Dennis Ritchie',
            'officialLink' => 'https://en.wikipedia.org/wiki/C_(programming_language)',
            "year" => 1972
        ],
        [
            'name' => 'JavaScript',
            'author' => 'Brendan Eich',
            'officialLink' => 'https://javascript.com',
            "year" => 1995
        ],
        [
            'name' => 'PHP',
            'author' => 'Rasmus Lerdorf',
            'officialLink' => 'https://php.net',
            "year" => 1995
        ],
        [
            'name' => 'Python',
            'author' => 'Van Rossum',
            'officialLink' => 'https://python.org',
            "year" => 1991
        ],
    ];

    function filterByYear($langs, $year)
    {
        $filteredLangs = [];

        foreach ($langs as $lang) {
            if ($lang['year'] >= $year) {
                $filteredLangs[] = $lang;
            }
        }

        return $filteredLangs;
    }


    ?>
    <h2>Languages and Founders</h2>
    <ul>
        <?php foreach ($languages as $lang) : ?>
            <li>
                <a href="<?= $lang['officialLink'] ?>">
                    <?= $lang['name'] ?> - By <?= $lang['author']; ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>

    <h2>
        <?= "My first language is " . $languages[0]['name'] ?>
    </h2>

    <h2>Languages that founded after 1990</h2>
    <ul>
        <?php foreach (filterByYear($languages, 1990) as $lang) : ?>
            <li>
                <a href="<?= $lang['officialLink'] ?>">
                    <?= $lang['name'] ?> - Founded in: <?= $lang['year'] ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>


</body>

</html>