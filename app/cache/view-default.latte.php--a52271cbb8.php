<?php

use Latte\Runtime as LR;

/** source: /home/iu/reikoframework/app//view/default.latte.php */
final class Templatea52271cbb8 extends Latte\Runtime\Template
{

	public function main(): array
	{
		extract($this->params);
		echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reiko Framework</title>
</head>
<body>
    <center>
        <h1>Welcome</h1>
    </center>
</body>
</html>';
		return get_defined_vars();
	}

}