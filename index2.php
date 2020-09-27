<!DOCTYPE html>

			<html lang="pt-br">
<head>
			<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	
			<link rel="shortcut icon" href="images/unioscar2.jpg">

            <title>Gestão de Reclamações da Universidade Oscar Ribas</title>

            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
			<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css" href="css/bootstrap-social.css">
            <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
			<link rel="stylesheet" type="text/css" href="css/stylefooter.css">
			<link rel="stylesheet" type="text/css" href="css/navbar.css">
			<link rel="stylesheet" type="text/css" href="css/slidermain.css">
			<link rel="stylesheet" type="text/css" href="css/galeria.css">
			<link rel="stylesheet" type="text/css" href="view.css.css">
			<link rel='stylesheet' type="text/css" href='css/simplelightbox.min.css'>
			<link rel='stylesheet' type="text/css" href='css/minisocialbotton.css'>
			<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css" />
			<link rel="stylesheet" type="text/css" href="css/animate.min.css">
			<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Rasa|Yrsa|Tenali+Ramakrishna|Rhodium+Libre|ubuntu|Roboto" rel="stylesheet">
			
			<script type="text/javascript" src="js/jquery-2.2.4.js"></script> 
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
			<script type="text/javascript" src="js/jquery.fancybox.js"></script> 
			<script type="text/javascript" src="js/gallerize.js"></script>
			<script type="text/javascript" src="js/egallerize.js"></script>
			<script type="text/javascript" src="js/vgallery.js"></script> 
			
<div style="background: url(images/3289999.png); -webkit-box-shadow: 2px 2px 10px -4px rgba(0,0,0,0.75);
-moz-box-shadow: 2px 2px 10px -4px rgba(0,0,0,0.75);
box-shadow: 2px 2px 10px -4px rgba(0,0,0,0.75);">

<style>
.icon-circle i{
	font-size:13px
}
</style>

<!-- Importante la libería jQuery. -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>    
    <!-- AJAX. -->
    <script type="text/javascript">         
        $(document).ready(function() {              
            $(document).on('submit', '#mi_formulario', function() {             
                var data = $(this).serialize();//Obtenemos datos.       
                $.ajax({            
                    type : 'POST',
                    url  : 'inserta.php',
                    data : data,
                    success :  function(data) {                 
                        $(".result-mi-formulario").html(data).fadeIn();
                    },
                    complete: function(){
                       setTimeout(function() {
                            $('.result-mi-formulario').fadeOut();
                       }, 15000);    
                    }
                });         
                return false;           
            });        
        });//End document

    </script>

</head>

<div class="col-sm-12" style=" background-color: #f4f4f4; box-shadow: 0px -2px 10px 0px rgba(0, 0, 0, 1);">	
                </div>
                <div class="container" style="padding:0"> 
<div class="col-sm-12" style="padding:0; margin:0">	
                    <div class="col-md-6" style="margin:15px 0 20px 0">
					<a href="?p=inicio">
								<img class="imgmain pull-left img-responsive" src="images/unioscar23.png" style="width: auto; height: 90px;" alt="" /></a>  
								</div>

					<div class="col-md-6 text-right" style="margin:40px 0 20px 0">
					<ul id ="textotop" class="breadcrumb ini" style="background-color: rgba(0,0,0,0); margin:0 0 5px 0; padding:0"> 
       
		<li><a>Contactos</a></li>
    </ul>
					<ul id ="textotop" class="breadcrumb ini" style="background-color: rgba(0,0,0,0); margin:0 0 5px 0; padding:0"> 
        <li><a style="text-decoration:none; text-transform:lowercase; font-size:12px"><i class="glyphicon glyphicon-envelope"></i> secretariacademica@uor.ed.ao | <i class="glyphicon glyphicon-earphone"></i> (+244) 924 618 089</a></li>
		</ul>
		<ul class="breadcrumb ini" style="background-color: rgba(0,0,0,0); margin:0; padding:0"> 
		<b class="icon-circle">
		<a href="https://twitter.com/Uor_university" class="itwittter" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
		<a href="https://www.facebook.com/www.uor.ed.ao/?fref=ts" class="ifacebook" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
	</b>
		</li>
    </ul>
                    </div>

                </div>
                </div>

        <div class="col-xs-12 mod" style="margin-bottom:-20px; padding:0">
			<div class="container" style="padding:0; width:100%; ">	

            </div>
            </div>
            </div>

<body id="main_body" >

	<div class="container">
	
	<div class="col-md-12" style="margin: 50px 0 100px 0">
	
	    <div class="row">
	        <div class="col-md-6" style="background: url(images/imageedit_3_6281400032.png); height:448px; object-fit: cover; object-position: left; margin-bottom:30px">
            <div style="position: relative; top: 30%; Rasa|Yrsa|Tenali+Ramakrishna|Rhodium+Libre|ubuntu" >
                
            		<h3 align="center" style="color: #707070; font-family: Arial;">SISTEMA DE GESTÃO DE RECLAMAÇÕES</h3>
					<br>
					<h4 align="center" style="color: #707070; font-family: Arial;">UNIVERSIDADE ÓSCAR RIBAS</h4>
					<hr>
					<hr>
            		<h3 align="center" style="color: #707070; font-family: Arial;"><b>FORMULÁRIO DE RECLAMAÇÃO</b></h3>
   	
            </div>
			</div>

	<div class="col-md-6">	
	
	
		
<div class="result-mi-formulario">	
<form name="mi_formulario" id="mi_formulario" method="post" onSubmit="return validar ()"> <div class="form_description"></div>						
	  <div class="form-group">

	                <select class="form-control" id="curso" name="curso" values="" required>
	                    <option selected value="">
	                        Curso:
	                    </option>
	    
	                    <option value="1">
	                        Direito 
	                    </option>
	    
	                    <option value="2">
	                        Gestão e Marketing
	                    </option>
						
	                    <option value="3">
	                        Psicologia
	                    </option>

	                    <option value="4">
	                        Relações Internacionais
	                    </option>

	                    <option value="5">
	                        Engenharia Civil
	                    </option>

	                    <option value="6">
	                        Engenharia Informática e Comunicações
	                    </option>

	                    <option value="7">
	                        Engenharia Electromecânica
	                    </option>
						
						<option value="9">
	                        Contabilidade e Finanças
	                    </option>
						
						<option value="10">
	                        Arquitetura e Urbanismo
	                    </option>
						
						<option value="11">
	                        Gestão Industrial
	                    </option>
	                </select>
					
				 <select class="form-control" id="gabinetes" name="gabinetes" values="" required>
	                    <option selected value="">
	                        Encaminhar para:
	                    </option>
	    
	                    <option value="1">
	                        Reclamação de Nota 
	                    </option>
	    
	                    <option value="2">
	                        Secretaria Académica
	                    </option>
						
	                    <option value="3">
	                        Gabinete de Apoio ao Estudante
	                    </option>

	                    <option value="4">
	                        Chefe do Departamento
	                    </option>
                           
                            <option value="5">
                                Certificados e Declarações. 2018
                            </option>
	               </select>	
					
	            </div>
	  
			<div class="form-group">
				<input type="text" class="form-control" name="processo" id="processo"  values="" placeholder="Número de Processo" required>
				 </div>
				 
			<div class="form-group">
				<input type="text" class="form-control" name="bi" id="bi"  values="" placeholder="Bilhete de Identidade" required>
				 </div>
				 
			<div class="form-group">
				<input type="email" class="form-control" name="email" id="email"  values="" placeholder="Email" required>
				 </div>
				  
			<div class="form-group">
				<input type="text" class="form-control" name="tel" id="tel"  values="" placeholder="Telefone" required>
				 </div>
				  
			<div class="form-group">
				<textarea rows="6" cols="100" class="form-control" id="message" name="message" values="" placeholder="Messagem" required></textarea>
				 </div> 
					  
					<button type="reset" id="feedbackSubmit" class="btn btn-danger btn-sm col-md-1" style="display:; margin-right: 10px; margin-top: 11px; width:150px; height:34px">Limpar</button>  
			
			
				<button type="submit" name="id" id="id" class="btn btn-success btn-sm col-md-1" style="display:; margin-top: 11px; width:150px; height:34px" onClick="confirmar()"; >Enviar</button>
			
					
</form>	
	
</div>	

</div>
</div>
</div>
</div>

<script>

 function validar()
 { 
  var numeroTelefono=document.getElementById('tel');
  var expresionRegular1=/^([0-9]+){9}$/;//<--- con esto vamos a validar el numero
  var expresionRegular2=/\s/;//<--- con esto vamos a validar que no tenga espacios en blanco
 
 // if(numeroTelefono.value=='') 
 // { alert("Campo es obligatorio"); return false; }

 // else
 
   if(expresionRegular2.test(numeroTelefono.value))
   { alert("Telemóvel com espaços!"); return false; }
	
  else if(!expresionRegular1.test(numeroTelefono.value))
   { alert("Telemóvel Incorrecto!"); return false; }
	
  else
	 { return true; }
 }

</script>

</body>

<footer style="background-color: #383838; width:100%; padding-top:0px">
<div class="col-md-12" style=" background-color: #383838; margin-top:0px; padding:40px 0">
                            
							
							<div class="container" style=" margin-top:40px 0 30px 0;">
                                    <div class="col-sm-4">
                                        <h6 class="heading7">Sobre</h6>
                                        <ul class="footer-ul">
									
<div style="text-align: justify; color: #ababab;"><p><img src="images/uorlogo.png" alt="teste" border="0" style="height:70px; width:auto; float: left; margin: 0px 10px 0px 0px;"/></p> O tratamento de reclamações merece nossa atenção especial. Portanto, colocamos um sistema para facilitar o envio de eventuais reclamações para que possamos respondê-las o mais rapidamente possível. Uma vez que nós colocamos como valor a satisfação do cliente e a resolução imediata das reclamações que os mesmos possam ter, também somos capazes de usar este processo como uma excelente ferramenta para melhorar os nossos serviços.</div>
								
										</ul>
                                    </div>

                                    <div class="col-sm-4">
                                        <h6 class="heading7">Contactos</h6>
                                        <ul class="footer-ul">
                                            <li><a style="text-decoration: none; color: #ababab;"><i class="glyphicon glyphicon-earphone"></i> (+244) 924 618 089</a></li>
                                            <li><a style="text-decoration: none; color: #ababab;"><i class="glyphicon glyphicon-earphone"></i> (+244) 923 471 720</a></li>
											<li><a style="text-decoration: none; color: #ababab;"><i class="glyphicon glyphicon-earphone"></i> (+244) 926 137 575</a></li>

                                            <li><a style="text-decoration: none; color: #ababab;"><i class="glyphicon glyphicon-map-marker"></i> Avenida Samora Machel s/nº, Município de Belas</a></li>
                                            <li><a style="text-decoration: none; color: #ababab;">Luanda - Angola</a></li>
                                        </ul>
										
										
										
                                    </div>
                                    <div class="col-sm-4">
                                        <h6 class="heading7" style="margin-bottom:32px">Siga-nos</h6>
										
<script>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_PT/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<div class="fb-page" data-href="https://www.facebook.com/www.uor.ed.ao/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/www.uor.ed.ao/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/www.uor.ed.ao/">Universidade Óscar Ribas</a></blockquote>
</div>
                                    </div>	
                                </div>
                                </div>
                        
                        <!--footer start from here-->

                        <div class="copyright" style="background-color: rgba(0,0,0,0.3); color: #ababab; width:100%; margin-bottom:0px;">
                            <div class="container" style=" ">
                                <div class="col-sm-8">
                                    <p style="color: #ababab;"><i class="glyphicon glyphicon-copyright-mark"></i> 2007-
                                        2018 | Sistema Gestão de Reclamações da Universidade Oscar Ribas.</p>
										
                                </div>
                                <div class="col-sm-4">
                                    <p style="color: #ababab; float:right;" >
                                        <br>									</p>
                                </div>
                            </div>
                            </div>
        </footer>

</html>

<style>

.sm{
    list-style:none;
    overflow:auto;
}
.sm li {
    display: inline;
    padding:5px;
    float:left;
} 
.sm li a img {
    width:32px;
}
	.form-control{
	border-radius: 0px; 
	margin-bottom: 16.5px;
	}
	
	a, h1, h2, h3, h4, h5, h6, small, p, li{
	    font-family: Roboto,sans-serif !important;
		font-size: px
}
</style>
