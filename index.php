<!DOCTYPE html>
<html>
<head>
	<title>Scroll</title>
	<style type="text/css">
		body {
			width: 100%;
			height: 100%;
		}
		li {
			font-size: 40px;
		}
		select {
			width: 300px;
		}
	</style>
</head>
<body>
	<ul>
		<li>
			<a href="#">caio</a>
		</li>
		<li>
			<a href="#">felipe</a>
		</li>
		<li>
			<a href="#">paulo</a>
		</li>
		<li>
			<a href="#">luiz</a>
		</li>
		<li>
			<a href="#">gilson</a>
		</li>
		<li>
			<a href="#">claudia</a>
		</li>
		<li>
			<a href="#">ricardo</a>
		</li>
		<li>
			<a href="#">wilson</a>
		</li>
		<li>
			<a href="#">ana</a>
		</li>
		<li>
			<a href="#">gustavo</a>
		</li>
		<li>
			<a href="#">camila</a>
		</li>
		<li>
			<a href="#">monica</a>
		</li>
		<li>
			<a href="#">afonso</a>
		</li>
		<li>
			<a href="#">bruno</a>
		</li>
	</ul>
	<p id="carregando"></p>
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script type="text/javascript">
		var pagina = 1;
		var totalDePaginas = 3;
		var carregando = false;

		window.addEventListener('scroll', function(e) {
		
		  if (e.target.scrollingElement.scrollTop + e.target.scrollingElement.clientHeight >= e.target.scrollingElement.scrollHeight && carregando == false && pagina <= totalDePaginas) {
    		$('#carregando').text('Carregando');
		  	carregando = true;
		  	setTimeout(renderizaProximaPagina, 2000);
  		  }
		});

		function renderizaProximaPagina() {
			$.ajax({
			  url: 'busca.php?pag='+pagina,
			  type: 'get',
			  success: function(resposta) {
			  	$('ul').append(resposta);
			  	$('#carregando').text('');
			  	pagina++;
			  	carregando = false;
			  }
			});
		}
	</script>
</body>
</html>