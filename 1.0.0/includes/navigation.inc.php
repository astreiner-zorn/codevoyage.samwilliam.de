<div class="navigation">
    <?php
    if (!isset($navigation_header_liste) || !is_array($navigation_header_liste)) {
        $navigation_header_liste = [];
        try {
            $stmt = $connection->query("SELECT url, ziel FROM navigation_header ORDER BY reihenfolge ASC");
            $navigation_header_liste = $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            $navigation_header_liste = [];
        }
    }
    ?>
    <?php if (!empty($navigation_header_liste)): ?>
        <?php foreach ($navigation_header_liste as $row): ?>
            <a href="<?php echo htmlspecialchars($row['url']); ?>" 
               <?php if ($bereich === $row['ziel']): ?> class="active"<?php endif; ?>>
               <?php echo htmlspecialchars($row['ziel']); ?>
            </a>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Keine Einträge gefunden.</p>
    <?php endif; ?>
</div>