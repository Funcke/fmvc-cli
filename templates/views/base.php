<!-- Basic page template! Please modify but do not delete! -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $params["title"]; ?></title>
    <?php if(array_key_exists('styles', $params)): ?>
        <?php foreach($params['styles'] as $style): ?>
            <link rel="stylesheet" href="public/css/<?= $style ?>" />
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body>
    <?php include("views/".$name.".php"); ?>
    <?php if(array_key_exists('scripts', $params)): ?>
        <?php foreach($params['scripts'] as $script): ?>
            <script src="public/js/<?= $script ?>"></script>
        <?php endforeach; ?>
    <? endif; ?>
</body>
</html>
