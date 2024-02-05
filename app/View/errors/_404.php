<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APPNAME ?></title>
    <!-- Bulma CSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <style>
        body {
            background-color: #f0f0f0; /* Dodajemo boju pozadine */
        }
        .section {
            background-color: #fff; /* Dodajemo boju sekciji */
            border-radius: 8px; /* Dodajemo zaobljeni ivičnjak sekciji */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Dodajemo senku sekciji */
            padding: 20px; /* Dodajemo razmak unutar sekcije */
            margin: 50px auto; /* Centriramo sekciju */
            max-width: 600px; /* Postavljamo maksimalnu širinu sekcije */
            text-align: center; /* Centriramo tekst unutar sekcije */
        }
        h1 {
            color: #ff3860; /* Dodajemo boju naslovu */
        }
        p {
            color: #333; /* Dodajemo boju paragrafu */
        }
        a {
            color: #3273dc; /* Dodajemo boju linku */
        }
        a:hover {
            text-decoration: underline; /* Dodajemo podvlačenje na hover linka */
        }
    </style>
</head>
<body>

<section class="section">
    <div class="container">
        <h1 class="title">404 - no need to explain!</h1>
        <p> <?= $msg ?> <br><br>
            • Check your URL<br />
            • Check Class names<br />
            • Check again<br /><br /><br /></p>
        <h3><a href="/">Go to homepage </a></h3>
    </div>
</section>

</body>
</html>
