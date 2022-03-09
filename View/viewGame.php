<?php ob_start(); ?>

<?php foreach ($hello as $jeu): ?>
    <div class="container">
        <table>
            <tr>
                <td><img class="dataBaseImg" src="<?= $jeu['GAME_COVER_URL'] ?>"></td>
                <td class="titre"><a
                            href="<?= HOME ?>viewDetails/<?php echo($jeu["GAME_ID"]) ?>"><?php echo($jeu["GAME_NAME"]) ?></a>
                </td>
                <td class="values"><?php echo $jeu["GAME_AGGREGATED_RATING"] ?></td>
            </tr>
        </table>
    </div>
<?php endforeach; ?>

<?php $content = ob_get_clean(); ?>
<?php require "template.php"; ?>