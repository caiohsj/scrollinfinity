<?php
$pag = $_GET['pag'] ? $_GET['pag'] : 1;

$dadosPag1 = [
	[
		'id' => 1,
		'nome' => 'joão'
	],
	[
		'id' => 2,
		'nome' => 'josé'
	],
	[
		'id' => 3,
		'nome' => 'antônio'
	]
];

$dadosPag2 = [
	[
		'id' => 4,
		'nome' => 'maria'
	],
	[
		'id' => 5,
		'nome' => 'pedro'
	],
	[
		'id' => 6,
		'nome' => 'clara'
	]
];

$dadosPag3 = [
	[
		'id' => 7,
		'nome' => 'joaquim'
	],
	[
		'id' => 8,
		'nome' => 'agostinho'
	],
	[
		'id' => 9,
		'nome' => 'jorge'
	]
];

$html = '';

if ($pag == 1) {
	foreach($dadosPag1 as $dados) {
		$html = $html.'<li>
					<a href="#">'.$dados['nome'].'</a>
				  </li>';
	}
} else if ($pag == 2) {
	foreach($dadosPag2 as $dados) {
		$html = $html.'<li>
					<a href="#">'.$dados['nome'].'</a>
				  </li>';
	}
} else if ($pag == 3) {
	foreach($dadosPag3 as $dados) {
		$html = $html.'<li>
					<a href="#">'.$dados['nome'].'</a>
				  </li>';
	}
}

echo $html;