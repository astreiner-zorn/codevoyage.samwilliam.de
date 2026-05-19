<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['stadt'])) {
        $stadt = $_POST['stadt'];
        $statement = $connection->prepare("SELECT * FROM zeitzonen WHERE stadt = :stadt");
        $statement->bindParam(':stadt', $stadt, PDO::PARAM_STR);
    } else {
        $statement = $connection->prepare("SELECT * FROM zeitzonen ORDER BY stadt ASC");
    }

    $statement->execute();
    $zeitzonen = $statement->fetchAll(PDO::FETCH_ASSOC);
?>

<div class="row mt-3">
    <?php foreach ($zeitzonen as $zone): ?>
        <?php
            $timezone = $zone['zeitzone'] ?? 'Europe/Berlin';

            if (in_array($timezone, timezone_identifiers_list(), true)) {
                $currentTime = (new DateTime('now', new DateTimeZone($timezone)))->format('H:i');
            } elseif (preg_match('/^GMT([+-]\d{1,2})$/i', $timezone, $matches)) {
                $offset = (int) $matches[1];
                $currentTime = (new DateTime('now', new DateTimeZone('UTC')))
                    ->modify(($offset >= 0 ? '+' : '') . $offset . ' hours')
                    ->format('H:i');
            } else {
                $currentTime = date('H:i');
            }
        ?>
        <div class="col-md-3">
            <div class="card mb-4">
                <img src="/media/zeitzonen/<?= htmlspecialchars($zone['cover']); ?>" class="card-img-top" alt="<?= htmlspecialchars($zone['stadt']); ?>">
                <div class="card-body shadow-sm">
                    <h5 class="card-title"><?= htmlspecialchars($zone['stadt']); ?></h5>
                    <p class="card-text">Zeitzone: <?= htmlspecialchars($zone['zeitzone']); ?></p>
                    <p class="card-text"><strong><?= $currentTime ?> Uhr</strong></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>

    <?php if (empty($zeitzonen)): ?>
        <div class="col-12">
            <p>Keine Zeitzonen gefunden.</p>
        </div>
    <?php endif; ?>
</div>

<style>
    .card img {
        height: 200px;
        width: 100%;
        object-fit: fill;
    }
</style>