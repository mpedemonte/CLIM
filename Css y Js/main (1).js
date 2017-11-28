$(function() {
	var slidermod = (function() { //funcion auto ejecutable
		var pb = {};  //creamos un obeto 
			pb.el = $("#slider"); //le añadimos un atributo el(elemento) con el id slider
			pb.items = {  // aqui trabajaremos con los elementos de html
				panel: pb.el.find("li") //trabajar con las etiquetas <li> 
			}
			
			//variables necesarias

			var SliderInterval,
				currentSlider = 0, //slider actual
				nextSlider = 1, //siguiente slider
				LargoSlider = pb.items.panel.length; //cantidad de imagenes del slider

			pb.init= function() {
				//activamos el slider

				sliderInit();
			}
			var sliderInit = function() {
				SliderInterval = setInterval(pb.startSlider,3000); //la funcion setInterval llama al primer 
			}													  //argumento con intervalos de tiempo en ms
			pb.startSlider = function() { //funcion para controlar las imagenes
				var imagenes = pb.items.panel;

				if (nextSlider>=LargoSlider) { //si la siguente foto es mayor o igual a la ultima
					nextSlider=0; //la siguiente foto es la primera
				}

				//efectos

				imagenes.eq(currentSlider).fadeOut("slow");//que la imagen desaparesca lento
				imagenes.eq(nextSlider).fadeIn("slow"); //que aparesca lento


				//actualizando datos
				
				currentSlider=nextSlider;
				nextSlider += 1;

			}
		return pb;
	}());
	slidermod.init(); //se ejecuta la funcion 
});