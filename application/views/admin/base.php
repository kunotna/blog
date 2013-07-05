<!DOCTYPE html>
<html lang="en">
	<head>
		<title><?=$title?></title>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <?foreach ($styles as $style => $attributes):?>
            <?=HTML::style($style,$attributes)?>
        <?endforeach?>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    </head>
	<body>
        
        <? if(isset($content)): ?>
            <?=$content?>
        <? endif; ?>
        
        <? foreach ($scripts as $script): ?>
            <?=HTML::script($script)?>
        <? endforeach; ?>
        
	</body>
</html>
