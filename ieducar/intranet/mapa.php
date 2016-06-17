<?php
/* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
	*																	     *
	*	@author Prefeitura Municipal de Itajaí								 *
	*	@updated 29/03/2007													 *
	*   Pacote: i-PLB Software Público Livre e Brasileiro					 *
	*																		 *
	*	Copyright (C) 2006	PMI - Prefeitura Municipal de Itajaí			 *
	*						ctima@itajai.sc.gov.br					    	 *
	*																		 *
	*	Este  programa  é  software livre, você pode redistribuí-lo e/ou	 *
	*	modificá-lo sob os termos da Licença Pública Geral GNU, conforme	 *
	*	publicada pela Free  Software  Foundation,  tanto  a versão 2 da	 *
	*	Licença   como  (a  seu  critério)  qualquer  versão  mais  nova.	 *
	*																		 *
	*	Este programa  é distribuído na expectativa de ser útil, mas SEM	 *
	*	QUALQUER GARANTIA. Sem mesmo a garantia implícita de COMERCIALI-	 *
	*	ZAÇÃO  ou  de ADEQUAÇÃO A QUALQUER PROPÓSITO EM PARTICULAR. Con-	 *
	*	sulte  a  Licença  Pública  Geral  GNU para obter mais detalhes.	 *
	*																		 *
	*	Você  deve  ter  recebido uma cópia da Licença Pública Geral GNU	 *
	*	junto  com  este  programa. Se não, escreva para a Free Software	 *
	*	Foundation,  Inc.,  59  Temple  Place,  Suite  330,  Boston,  MA	 *
	*	02111-1307, USA.													 *
	*																		 *
	* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */

$desvio_diretorio = "";
require_once ("include/clsBase.inc.php");
require_once ("include/clsBanco.inc.php");

class clsIndex extends clsBase
{

	function Formular()
	{
		$this->SetTitulo( "{$this->_instituicao} i-Educar" );
		$this->processoAp = "624";
		$this->renderMenuSuspenso = false;
		$this->addEstilo('estilo-mapa');
	}
}

class indice
{
	function RenderHTML()
	{
		return "<div id='mapa' style='height: 800px; width: 100%'></div>";
	}
}

$pagina = new clsIndex();
$miolo = new indice();

$pagina->addForm($miolo);
$pagina->MakeAll();
?>


<script src="https://code.jquery.com/jquery-3.0.0.min.js" integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="../map/infobox.js"></script>
<script type="text/javascript" src="../map/markerclustererplus/src/markerclusterer.js"></script>
<script type="text/javascript">
	var map;
	var idInfoBoxAberto;
	var infoBox = [];
	var markers = [];

	function initialize() {	
		var latlng = new google.maps.LatLng(-18.8800397, -47.05878999999999);
		
	    var options = {
	        zoom: 5,
			center: latlng,
	        mapTypeId: google.maps.MapTypeId.ROADMAP
	    };

	    map = new google.maps.Map(document.getElementById("mapa"), options);
	}

	initialize();

	function abrirInfoBox(id, marker) {
		if (typeof(idInfoBoxAberto) == 'number' && typeof(infoBox[idInfoBoxAberto]) == 'object') {
			infoBox[idInfoBoxAberto].close();
		}

		infoBox[id].open(map, marker);
		idInfoBoxAberto = id;
	}

	function carregarPontos() {
		
		$.getJSON('https://raw.githubusercontent.com/rodolfoprr/GoogleMapsAPIv3MapaPersonalizado/master/js/pontos.json', function(pontos) {
			
			var latlngbounds = new google.maps.LatLngBounds();
			
			$.each(pontos, function(index, ponto) {
				
				var marker = new google.maps.Marker({
					position: new google.maps.LatLng(ponto.Latitude, ponto.Longitude),
					title: "Meu ponto personalizado! :-D",
					icon: 'https://raw.githubusercontent.com/rodolfoprr/GoogleMapsAPIv3MapaPersonalizado/master/img/marcador.png'
				});
				
				var myOptions = {
					content: "<p>" + ponto.Descricao + "</p>",
					pixelOffset: new google.maps.Size(-150, 0)
	        	};

				infoBox[ponto.Id] = new InfoBox(myOptions);
				infoBox[ponto.Id].marker = marker;
				
				infoBox[ponto.Id].listener = google.maps.event.addListener(marker, 'click', function (e) {
					abrirInfoBox(ponto.Id, marker);
				});
				
				markers.push(marker);
				
				latlngbounds.extend(marker.position);
				
			});
			
			var markerCluster = new MarkerClusterer(map, markers);
			
			map.fitBounds(latlngbounds);
			
		});
		
	}

	carregarPontos();
</script>