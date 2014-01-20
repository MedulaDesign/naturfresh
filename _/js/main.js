/* Author: Agustin Amenabar

*/
/*Primero declaramos variables generales
  First we declare general variables//*/

/*Segundo ejecutamos acciones a penas el DOM esté listo
  Second we ejecute acions on DOM ready*/
$(document).ready(function(){
	var pathArray = window.location.href.split( '/' );
	var lastElement = pathArray.pop();
	if (!lastElement) {
		lastElement = pathArray.pop();
	}
	var esteDoc = lastElement.split('?')[1];
	if(typeof(esteDoc) == 'undefined')esteDoc=lastElement;
	console.log('esteDoc=',esteDoc);
	$('.primniv>a').each(function(ind, ele){
		$elele = $(ele);
		ladire = filtraURL($elele.attr( 'href' ));
		if ( ladire == esteDoc ) {
			$elele.parent().addClass( 'abierto' );
			return;
		}else{
			$elele.parent().find('.unproducto').each(function(indice,elemento){
				ladire = filtraURL($(elemento).attr( 'href' ));
				if( ladire == esteDoc ){
					$elele.parent().addClass( 'abierto' );
					return;
				}
			});
		}
	});
	if(esteDoc.indexOf("#mostrados") == -1){
		$('.productos ul li:not(.abierto)>ul').hide();
	}else{
		$('.articleList').height('1300px');
	}
	$('.invisible').removeClass('invisible').hide();
});
  
/* Tercero: ejecutamos acciones no-escenciales y llamados a contenido externo adicional (como publicidad)
   Third: we execute the non-escential actions and extra content calls (like adds)*/
$(window).load(function(){
	//esto es un hack para que en chrome se renderizen bien las webfonts.
		$('h1:not(.titulo),h2,h3').fadeTo(0.5,0.8).delay(500).fadeTo(0.5,1);
	//hack para que IE marque fílas pares en tablas.
	$('.no-lastchild table').each(function(indx,ele){
		$(ele).find('tr').each(function(index,elemento){
			if(index % 2)$(elemento).addClass('par');
		});
	});
	activaForm();
});

function filtraURL(ladire){
	var ladire = ladire.split('?');
	if( ladire.length > 1 ){
		ladire = ladire[1];
	}else{
		ladire = ladire[0];
	}
	return ladire;
}

function activaForm(){
	var campos = $('.formAnimado').find('input, textarea, select');
	campos.focus(function (){
		$(this).closest('li').addClass('form-focus');
	});
	campos.blur(function(){
		$(this).closest('li').removeClass('form-focus');
	});
}