<!-- BlueStrong: #0072BC -->
<!-- SkyBlue:    #9ACD32 -->
<style type="text/css">
	#cssmenu {
	  width: auto;
	  /*border: 1px solid #67B8DE;*/
	  background: #67B8DE;
	}

	#cssmenu > ul {
	  padding: 1px 0;
	  margin: 0px;
	  list-style: none;
	  width: 100%;
	  height: 22px;
	  /*border-top: 1px solid #FFFFFF;
	  border-bottom: 1px solid #FFFFFF;*/
	  font: normal 9pt 'century gothic', arial, sans-serif;
	  letter-spacing: 0.1em;
	}

	#cssmenu > ul li {
	  margin: 0;
	  padding: 0;
	  display: block;
	  float: left;
	  position: relative;
	  width: 174px;
	}

	#cssmenu > ul li a:link,
	#cssmenu > ul li a:visited {
	  padding: 4px 0;
	  display: block;
	  text-align: center;
	  text-decoration: none;
	  background: #67B8DE;
	  color: #f7f7f7;	  
	  width: 174px;
	}

	#cssmenu > ul li:hover a,
	#cssmenu > ul li a:hover,
	#cssmenu > ul li a:active {
	  padding: 4px 0;
	  display: block;
	  text-align: center;
	  text-decoration: none;
	  background: #0072BC;
	  color: #ffffff;
	  width: 174px;
	 /* border-left: 1px solid #ffffff;
	  border-right: 1px solid #ffffff;*/
	}

	#cssmenu > ul li ul {
	  margin: 0;
	  padding: 1px 1px 0;
	  list-style: none;
	  display: none;
	 /* background: #ffffff;*/
	  width: 174px;
	  position: absolute;
	  top: 21px;
	  left: -1px;
	  /*border: 1px solid #67B8DE;
	  border-top: none;*/
	}

	#cssmenu > ul li:hover ul {
	  display: block;
	}

	#cssmenu > ul li ul li {
	  clear: left;
	  width: 174px;
	}

	#cssmenu > ul li ul li a:link,
	#cssmenu > ul li ul li a:visited {
	  clear: left;
	  background: #67B8DE;
	  padding: 4px 0;
	  width: 174px;
	  /*border-top: 1px solid #ffffff;
	  border-bottom: 1px solid #ffffff;*/
	  position: relative;
	  z-index: 1000;
	}

	#cssmenu > ul li ul li:hover a,
	#cssmenu > ul li ul li a:active,
	#cssmenu > ul li ul li a:hover {
	  clear: left;
	  background: #0072BC;
	  padding: 4px 0;
	  width: 174px;
	  font-size: 12px;
	  color: #CDF63E;
	  /*border-top: 1px solid #ffffff;
	  border-bottom: 1px solid #ffffff;*/
	  position: relative;
	  z-index: 1000;
	}

	#cssmenu > ul li ul li ul.navigation-3 {
	  display: none;
	  margin: 0;
	  padding: 0;
	  list-style: none;
	  position: absolute;
	  left: 145px;
	  top: -2px;
	  padding: 1px 1px 0 1px;
	  /*border: 1px solid #67B8DE;*/
	  /*border-right: 1px solid #67B8DE;
	  border-left: 1px solid #67B8DE;
	  background: #ffffff;*/
	  z-index: 900;
	}

	#cssmenu > ul li ul li:hover ul.navigation-3 {
	  display: block;
	}

	#cssmenu > ul li ul li ul.navigation-3 li a:link,
	#cssmenu > ul li ul li ul.navigation-3 li a:visited {
	  background: #67B8DE;
	}
</style>
<div class="scrollable">
	<div class="items">
		<div class="item">
			<div class="header1"></div>                                    
		</div>
		<div class="item">
			<div class="header2"></div>						
		</div>
		<div class="item">
			<div class="header3"></div>						
		</div>			
	</div>
</div>
<div class="navi"></div>
<div id='cssmenu' >
	<ul>
		<li><a href="/afip/inicio.php"><span>INICIO</span></a></li>
		<li><a href="#"><span>ALTA</span></a>
			<ul>
				<li><a href="/afip/inicio.php">Factura</a></li>
			</ul>
		</li>
		<li><a href="#"><span>FACTURA</span></a>
			<ul>
				<?php
				//if ($_SESSION['categoria'] == 'ad' || $_SESSION['categoria'] == 'op'){?>
					<li><a href="/afip/pdf_factura.php">Imprimir</a></li>
					<?php
				//}?>
			</ul>
		</li>
		<li>&nbsp;</li>
		<li>&nbsp;</li>
		<li><a href="#">SALIR</a>
			<ul>
				<li><a href="/afip/logout.php">Cerrar Sesion</a></li>
			</ul>
		</li>
	</ul>
</div>