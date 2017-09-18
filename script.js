      


      $(function() {
      	 var url_conv='conv_time.php';
         $('form').hide();
         $('#sub').hide();
      	$('#sub').click(function() {
          $.ajax({
            type: 'POST',
            url: url_conv,
            data:{ u1:$('#unit1').val(),u2:$('#unit2').val(),val:$('#val').val()},
            timeout: 3000,
            success: function(data) {
              $('#result').html(data); },
            error: function() {
              alert('La requête n\'a pas abouti'); }
          });    
        });  
      	 //affichage des unités de longueure 
         $('#long').click(function() {
           $('form').show();
           $('#sub').show();
           $('#unit1').html('<option value="mm">Millimètre</option>'+
				'<option value="cm">Centimètre</option>'+
				'<option value="dm">Décimètre</option>'+
			    '<option value="m">Mètre</option>'+
			    '<option value="dam">Décamètre</option>'+
			    '<option value="hm">Hectomètre</option>'+
			    '<option value="km">Kilomètre</option>'
			);
            
            $('#unit2').html('<option value="mm">Millimètre</option>'+
				'<option value="cm">Centimètre</option>'+
				'<option value="dm">Décimètre</option>'+
			    '<option value="m">Mètre</option>'+
			    '<option value="dam">Décamètre</option>'+
			    '<option value="hm">Hectomètre</option>'+
			    '<option value="km">Kilomètre</option>'
			);
             // l'url de fichier php pour la conversion de longueur
            url_conv="conv_long.php" ;

         });

         //affichage des unités de surface
$('#area').click(function() {
            $('form').show();
           $('#sub').show();
            $('#unit1').html('<option value="mm2">mm<SUP>2</SUP></option>'+
				'<option value="cm2">cm<SUP>2</SUP></option>'+
				'<option value="dm2">dm<SUP>2</SUP></option>'+
			    '<option value="m2">m<SUP>2</SUP></option>'+
			    '<option value="dam2">dam<SUP>2</SUP></option>'+
			    '<option value="hm2">hm<SUP>2</SUP></option>'
			);
            
                $('#unit2').html('<option value="mm2">mm<SUP>2</SUP></option>'+
				'<option value="cm2">cm<SUP>2</SUP></option>'+
				'<option value="dm2">dm<SUP>2</SUP></option>'+
			    '<option value="m2">m<SUP>2</SUP></option>'+
			    '<option value="dam2">dam<SUP>2</SUP></option>'+
			    '<option value="hm2">hm<SUP>2</SUP></option>'
			);
             // l'url de fichier php pour la conversion de surface
            url_conv="conv_area.php" ;                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                

         });




//affichage des unités de volume
$('#volume').click(function() {
            $('form').show();
           $('#sub').show();
           $('#unit1').html('<option value="mm3">mm<SUP>3</SUP></option>'+
				'<option value="cm3">cm<SUP>3</SUP></option>'+
				'<option value="dm3">dm<SUP>3</SUP></option>'+
			    '<option value="m3">m<SUP>3</SUP></option>'+
			    '<option value="dam3">dam<SUP>3</SUP></option>'+
			    '<option value="hm3">hm<SUP>3</SUP></option>'
			);
            
                       $('#unit2').html('<option value="mm3">mm<SUP>3</SUP></option>'+
				'<option value="cm3">cm<SUP>3</SUP></option>'+
				'<option value="dm3">dm<SUP>3</SUP></option>'+
			    '<option value="m3">m<SUP>3</SUP></option>'+
			    '<option value="dam3">dam<SUP>3</SUP></option>'+
			    '<option value="hm3">hm<SUP>3</SUP></option>'
			);
             // l'url de fichier php pour la conversion de volume
            url_conv="conv_vol.php" ;

         });
//affichage des unités de temps
$('#time').click(function() {
           $('form').show();
           $('#sub').show();
           $('#unit1').html('<option value="seconde">Seconde</option>'+
				'<option value="minute">Minute</option>'+
				'<option value="heure">Heure</option>'+
			    '<option value="jour">Jour</option>'
			    
			);
            
                $('#unit2').html('<option value="seconde">Seconde</option>'+
				'<option value="minute">Minute</option>'+
				'<option value="heure">Heure</option>'+
			    '<option value="jour">Jour</option>'
			    
			);
             // l'url de fichier php pour la conversion de temps
            url_conv="conv_time.php" ;

         });
//affichage des unités de temperature
$('#temperature').click(function() {
           $('form').show();
           $('#sub').show();
           $('#unit1').html('<option value="c">Celcius</option>'+
				'<option value="k">Kelvin</option>'+
				'<option value="f">Fahrenheit</option>'
			    
			);
            
                $('#unit2').html('<option value="c">Celcius</option>'+
				'<option value="k">Kelvin</option>'+
				'<option value="f">Fahrenheit</option>'
			    
			);
             // l'url de fichier php pour la conversion de temperature
            url_conv="conv_temper.php" ;

         });
       
//affichage des unités de l'energie
/*$('#energie').click(function() {

           $('#unit1').html('<option value="j">Joule</option>'+
				'<option value="kj">Kilojoule</option>'+
				'<option value="cal">Calorie</option>'+
			    '<option value="kcal">Kilocalorie</option>'+
				'<option value="wh">Watt-heure</option>'+
				'<option value="kwh">Kilowatt-heure</option>'+
				'<option value="kwh">Kilowatt-heure</option>'
			);
            
                $('#unit2').html('<option value="j">Joule</option>'+
				'<option value="kj">Kilojoule</option>'+
				'<option value="cal">Calorie</option>'+
			    '<option value="kcal">Kilocalorie</option>'+
				'<option value="wh">Watt-heure</option>'+
				'<option value="kwh">Kilowatt-heure</option>'+
				'<option value="kwh">Kilowatt-heure</option>'
			);
             // l'url de fichier php pour la conversion de l'energie
            url_conv="conv_ener.php" 

         });*/
//affichage des unités de l'energie
$('#poids').click(function() {
           $('form').show();
           $('#sub').show();
           $('#unit1').html('<option value="mg">milligramme</option>'+
				'<option value="cg">centigramme</option>'+
				'<option value="dg">decigramme</option>'+
				'<option value="g">gramme</option>'+
				'<option value="dag">decagramme</option>'+
			    '<option value="hg">hectogramme</option>'+
				'<option value="kg">kilogramme</option>'+
				'<option value="q">Quintal</option>'+
				'<option value="t">tonne</option>'
				
			);
            
                $('#unit2').html('<option value="mg">milligramme</option>'+
				'<option value="cg">centigramme</option>'+
				'<option value="dg">decigramme</option>'+
				'<option value="g">gramme</option>'+
				'<option value="dag">decagramme</option>'+
			    '<option value="hg">hectogramme</option>'+
				'<option value="kg">kilogramme</option>'+
				'<option value="q">Quintal</option>'+
				'<option value="t">tonne</option>'
				
			);
             // l'url de fichier php pour la conversion du poids
            url_conv="conv_poids.php" 

         });

    
 $('.brand').css('color','white');

      });                                                                                                                                                  