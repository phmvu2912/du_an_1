<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?></title>
    <link href="<?= BASE_URL ?>assets/client/css/main.css" rel="stylesheet">
</head>

<body>

    <?php require_once PATH_VIEW . 'layouts/partials/header.php'; ?>

    <main>
        <!-- Banner -->
        <section>
            <div class="banner">
                <div class="banner-img">
                    <img src="<?= BASE_URL ?>assets/client/images/banner1.jpg" alt="">
                </div>

                <div class="banner-title">
                    <b><?= $title ?></b>
                </div>
            </div>
        </section>

        <!-- Content -->
        <?php require_once PATH_VIEW . $view . '.php'; ?>
    </main>

    <!-- Footer -->
    <?php require_once PATH_VIEW . 'layouts/partials/footer.php'; ?>
</body>

</html>
