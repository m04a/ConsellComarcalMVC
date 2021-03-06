/*Toggle dropdown list*/
	/*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/
	
	
	var userMenuDiv = document.getElementById("userMenu");
	var userMenu = document.getElementById("userButton");
	
	var navMenuDiv = document.getElementById("nav-content");
	var navMenu = document.getElementById("nav-toggle");
	
	document.onclick = check;
	


	function check(e){
	  var target = (e && e.target) || (event && event.srcElement);

	  //User Menu
	  if (!checkParent(target, userMenuDiv)) {
		// click NOT on the menu
		if (checkParent(target, userMenu)) {
		  // click on the link
		  if (userMenuDiv.classList.contains("invisible")) {
			userMenuDiv.classList.remove("invisible");
		  } else {userMenuDiv.classList.add("invisible");}
		} 
	  }
	  
	  //Nav Menu
	  if (!checkParent(target, navMenuDiv)) {
		// click NOT on the menu
		if (checkParent(target, navMenu)) {
		  // click on the link
		  if (navMenuDiv.classList.contains("hidden")) {
			navMenuDiv.classList.remove("hidden");
		  } else {navMenuDiv.classList.add("hidden");}
		} 
	  }
	  
	}

	function checkParent(t, elm) {
	  while(t.parentNode) {
		if( t == elm ) {return true;}
		t = t.parentNode;
	  }
	  return false;
	}

	
	//Editor de articles
	tinymce.init({
		selector: 'textarea#editor-article',
		height: 500,
		menubar: false,
		plugins: [
		  'advlist autolink lists link image charmap print preview anchor',
		  'searchreplace visualblocks code fullscreen',
		  'insertdatetime media table paste code help wordcount'
		],
		toolbar: ' fullscreen preview | undo redo | formatselect | ' +
		'bold italic backcolor visualblocks | alignleft aligncenter ' +
		'alignright alignjustify | table link | bullist numlist outdent indent | ' +
		'removeformat | code print wordcount charmap searchreplace insertdatetime anchor help',
		content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:15px }'
	  });
	  

// Carregador de la nostra pagina
	$(window).on('load', function() {

        $('#js-preloader').addClass('loaded');

    });
	
	//Funció per enviar un contacte amb ajax
	$(function () {

        $('#contacte').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'POST',
            url: 'index.php?r=docontacte',
            data: $('#contacte').serialize(),
            success: function () {
			$(".success-missatge").removeClass('hidden');
			$('#contacte').trigger("reset");
            }
			});
        });
      });

	  /*Funcions per convertir les lletres més grans*/
	  $(document).ready(function() {
		var resize = new Array('p', 'a');
		resize = resize.join(',');
	  
		//resets the font size when "reset" is clicked
		var resetFont = $(resize).css('font-size');
		$(".reset").click(function() {
		  $(resize).css('font-size', resetFont);
		});
	  
		//increases font size when "+" is clicked
		$(".increase").click(function() {
		  var originalFontSize = $(resize).css('font-size');
		  var originalFontNumber = parseFloat(originalFontSize, 10);
		  var newFontSize = originalFontNumber * 1.05;
		  if (newFontSize <= 25) {
			$(resize).css('font-size', newFontSize);
		  }
		  return false;
		});
	  
		//decrease font size when "-" is clicked
	  
		$(".decrease").click(function() {
		  var originalFontSize = $(resize).css('font-size');
		  var originalFontNumber = parseFloat(originalFontSize, 10);3
		  var newFontSize = originalFontNumber * 0.95;
		  if (newFontSize >= 10) {
			$(resize).css('font-size', newFontSize);
		  }
		  return false;
		});
	  });
	  // swiper    
var mySwiper = new Swiper('.swiper-container', {
	effect: '',
	loop: false,
	speed: 1000,
	slidesPerView: 1,
	navigation: {
	   nextEl: '.swiper-button-next',
	   prevEl: '.swiper-button-prev'
	},
	pagination: {
	   el: '.swiper-pagination',
	   type: 'bullets',
	   clickable: 'true'
	},
 });