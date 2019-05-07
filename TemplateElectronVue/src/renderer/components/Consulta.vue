<template lang="">
    <div>
        <div class="body">
            <form class="form-horizontal">
                <fieldset>

                <!-- Text input-->
                <h1 style="text-align: center;">Consulta General</h1>

                <!-- Text input-->
                <div class="form-group ">
                <!-- Lefts-->
                <div class="form-group col-md-6">
                    <h3 class="col-md-2 control-label" style="font-weight: bold;">Paciente: </h3>  
                    <h3 class="col-md-6 control-label" >Juan Andrés</h3>  
                    <img src="picture.png" class="col-md-10">
                </div>
                <!-- Right-->
                <div style="margin-left: 2%" class="form-group col-md-6">
                    <h3 class="col-md-10 control-label" style="text-align:center; font-weight: bold;margin-bottom: 2%;">Observaciones especiales: </h3>  
                    
                    <div class="col-md-14">                     
                    <textarea rows="8" class="form-control" id="textarea" name="textarea"></textarea>
                    </div>

                    <div class="form-inline" style="text-align: center; margin-top: 2%;">
                    <div class="form-group" >
                        <div class="col-md-0">
                        <button id="singlebutton" name="singlebutton" class="btn ">Agregar Comentario</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="singlebutton"></label>
                        <div class="col-md-4" >
                        <button id="singlebutton" name="singlebutton" class="btn ">Ver más</button>
                        </div>
                    </div>
                    </div>

                </div>
                </div>
                <!-- Form Name -->
                <h2 style="text-align: left;">Datos Generales</h2>

                <div class="form-group">
                    <label class="col-md-1 control-label" for="textinput">Peso: </label>  
                    <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>

                    <label class="col-md-2 control-label" for="textinput">Kg. Percentil</label>  
                    <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-1 control-label" for="textinput">Talla: </label>  
                    <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>

                    <label class="col-md-2 control-label" for="textinput">Cms. Percentil</label>  
                    <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-1 control-label" for="textinput">P/A:</label>  
                    <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>

                    <label class="col-md-2 control-label" for="textinput">Percentil</label>  
                    <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>

                </div>
                <div class="form-group">
                    <label class="col-md-1 control-label" for="textinput">Teléfonos</label>  
                    <div class="col-md-10">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                </div>

                <!-- Form Name -->
                <h2 style="text-align: left;">Dar Consulta</h2>

                <!-- Text input-->
                <div class="form-group ">
                <!-- Left-->
                <div class="form-group encapsulado col-md-4" style="text-align:left;">
                    <div class="form-group">
                    <div class=" col-md-10 custom-control custom-checkbox">
                        <label class="custom-control-label"">Síndorme Clínico de Presentación</label>
                    </div> 
                    <div class=" col-md-8 custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">Sx. Nefrítico</label>
                    </div> 
                    <div class=" col-md-8 custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">Sx. Nefrotico</label>
                    </div> 
                    <div class=" col-md-10 custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">Anomalias Urinarias Asintomáticas</label>
                    </div> 
                    <div class=" col-md-8 custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">IRA</label>
                    </div> 
                    <div class=" col-md-8 custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">IRC</label>
                    </div> 
                    <div class=" col-md-8 custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">ITU</label>
                    </div> 
                    <div class=" col-md-8 custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">Uropatía Obstructiva</label>
                    </div> 
                    <div class=" col-md-8 custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">Tubulopatía</label>
                    </div> 
                    <div class=" col-md-8 custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">HTA</label>
                    </div> 
                    <div class=" col-md-8 custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">Nefrolitiasis</label>
                    </div> 
                    </div>
                </div>
                <!-- Center-->
                <div style="margin-left: 2%"class="form-group encapsulado col-md-4">
                    <div class=" col-md-10 custom-control custom-checkbox">
                        <label class="custom-control-label"">Dx. Definitivo</label>
                    </div> 
                    <div class="col-md-15">                     
                    <textarea rows="13" class="form-control" id="textarea" name="textarea"></textarea>
                    </div>
                </div>
                <!-- Right-->
                <div style="margin-left: 2%"class="form-group encapsulado col-md-4">
                    <div class=" col-md-10 custom-control custom-checkbox">
                        <label class="custom-control-label"">Dx. Asociado</label>
                    </div> 
                    <div class="col-md-15">                     
                    <textarea rows="13" class="form-control" id="textarea" name="textarea"></textarea>
                    </div>
                </div>
                </div>


                <!-- Textarea -->
                <div class="form-group encapsulado">
                <div class="form-group">
                <label class="col-md-2 control-label" for="textarea">Historia</label>
                <div class="col-md-9">                     
                    <textarea rows="5" class="form-control" id="textarea" name="textarea"></textarea>
                </div>
                </div>
                </div>

                <!-- Text input-->
                <div class="form-group ">
                <!-- Left-->
                <div class="form-group encapsulado col-md-6" style="text-align:left;">
                    <div class="form-group">
                    <div class=" col-md-4 custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">Prednisona</label>
                    </div> 
                    <div class="col-md-3">
                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    <label class="col-md-1 control-label" for="textinput">mg</label>  
                    <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    </div>
                    <div class="form-group">
                    <div class=" col-md-4 custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">Cyac/Tac</label>
                    </div> 
                    <div class="col-md-3">
                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    <label class="col-md-1 control-label" for="textinput">mg</label>  
                    <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    </div>
                        <div class="form-group">
                    <div class=" col-md-4 custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">MMF/AZA</label>
                    </div> 
                    <div class="col-md-3">
                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    <label class="col-md-1 control-label" for="textinput">mg</label>  
                    <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    </div>
                    <div class="form-group">
                    <div class=" col-md-4 custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">CFM</label>
                    </div> 
                    <div class="col-md-3">
                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    <label class="col-md-1 control-label" for="textinput">mg</label>  
                    <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    </div>
                        <div class="form-group">
                    <div class=" col-md-4 custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">Enalapril</label>
                    </div> 
                    <div class="col-md-3">
                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    <label class="col-md-1 control-label" for="textinput">mg</label>  
                    <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    </div>
                    <div class="form-group">
                    <div class=" col-md-4 custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">Losartan</label>
                    </div> 
                    <div class="col-md-3">
                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    <label class="col-md-1 control-label" for="textinput">mg</label>  
                    <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    </div>
                        <div class="form-group">
                    <div class=" col-md-4 custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">Amlodipina</label>
                    </div> 
                    <div class="col-md-3">
                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    <label class="col-md-1 control-label" for="textinput">mg</label>  
                    <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    </div>
                    <div class="form-group">
                    <div class=" col-md-4 custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">Citrato Na K</label>
                    </div> 
                    <div class="col-md-3">
                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    <label class="col-md-1 control-label" for="textinput">mg</label>  
                    <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    </div>
                        <div class="form-group">
                    <div class=" col-md-4 custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">Furosemida</label>
                    </div> 
                    <div class="col-md-3">
                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    <label class="col-md-1 control-label" for="textinput">mg</label>  
                    <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    </div>
                    <div class="form-group">
                    <div class=" col-md-4 custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">Alfacalcidol</label>
                    </div> 
                    <div class="col-md-3">
                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    <label class="col-md-1 control-label" for="textinput">mg</label>  
                    <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    </div>
                        <div class="form-group">
                    <div class=" col-md-4 custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">CaCO3</label>
                    </div> 
                    <div class="col-md-3">
                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    <label class="col-md-1 control-label" for="textinput">mg</label>  
                    <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    </div>
                    <div class="form-group">
                    <div class=" col-md-4 custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">EPO</label>
                    </div> 
                    <div class="col-md-3">
                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    <label class="col-md-1 control-label" for="textinput">mg</label>  
                    <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    </div>
                        <div class="form-group">
                    <div class=" col-md-4 custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">Fe</label>
                    </div> 
                    <div class="col-md-3">
                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    <label class="col-md-1 control-label" for="textinput">mg</label>  
                    <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    </div>
                    <div class="form-group">
                    <div class=" col-md-4 custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">Cefradoxilo</label>
                    </div> 
                    <div class="col-md-3">
                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    <label class="col-md-1 control-label" for="textinput">mg</label>  
                    <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    </div>
                        <div class="form-group">
                    <div class=" col-md-1 custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                    </div>
                    <div class="col-md-3">
                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div> 
                    <div class="col-md-3">
                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    <label class="col-md-1 control-label" for="textinput">mg</label>  
                    <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    </div>
                    <div class="form-group">
                    <div class=" col-md-1 custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                    </div> 
                    <div class="col-md-3">
                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div> 
                    <div class="col-md-3">
                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    <label class="col-md-1 control-label" for="textinput">mg</label>  
                    <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    </div>
                </div>


                <!-- Right-->
                <div style="margin-left: 2%"class="form-group encapsulado col-md-6">
                    
                    <div class="form-group">
                    <label class="col-md-1 control-label" for="textinput">Na</label>  
                    <div class="col-md-2">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>

                    <label class="col-md-1 control-label" for="textinput">Cl</label>  
                    <div class="col-md-2">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>

                    <label class="col-md-1 control-label" for="textinput">BUN</label>  
                    <div class="col-md-2">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>

                    <label class="col-md-1 control-label" for="textinput">Glu</label>  
                    <div class="col-md-2">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-md-1 control-label" for="textinput">K</label>  
                    <div class="col-md-2">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>

                    <label class="col-md-1 control-label" for="textinput">HCO</label>  
                    <div class="col-md-2">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>

                    <label class="col-md-1 control-label" for="textinput">Creat</label>  
                    <div class="col-md-2">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>

                    <label class="col-md-1 control-label" for="textinput">WB</label>  
                    <div class="col-md-2">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-md-1 control-label" for="textinput">Col</label>  
                    <div class="col-md-2">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>

                    <label class="col-md-1 control-label" for="textinput">Alb</label>  
                    <div class="col-md-2">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>

                    <label class="col-md-1 control-label" for="textinput">HB</label>  
                    <div class="col-md-2">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>

                    <label class="col-md-1 control-label" for="textinput">HT</label>  
                    <div class="col-md-2">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-md-1 control-label" for="textinput">Ca</label>  
                    <div class="col-md-2">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>

                    <label class="col-md-1 control-label" for="textinput">P</label>  
                    <div class="col-md-2">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>

                    <label class="col-md-1 control-label" for="textinput">MG</label>  
                    <div class="col-md-2">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>

                    <label class="col-md-1 control-label" for="textinput">PTL</label>  
                    <div class="col-md-2">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-md-3 control-label" for="textinput">EGO :SG 1.0</label>  
                    <div class="col-md-1">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>

                    <label class="col-md-1 control-label" for="textinput">pH</label>  
                    <div class="col-md-1">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>

                    <label class="col-md-1 control-label" for="textinput">Glu</label>  
                    <div class="col-md-1">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>

                    <label class="col-md-1 control-label" for="textinput">Prot</label>  
                    <div class="col-md-1">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>

                    <label class="col-md-1 control-label" for="textinput">Hem</label>  
                    <div class="col-md-1">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>

                    </div>

                    <div class="form-group">
                    <label class="col-md-1 control-label" for="textinput">GR</label>  
                    <div class="col-md-2">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>

                    <label class="col-md-1 control-label" for="textinput">GB</label>  
                    <div class="col-md-2">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>

                    <label class="col-md-1 control-label" for="textinput">Cil</label>  
                    <div class="col-md-2">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>

                    <label class="col-md-1 control-label" for="textinput">URO</label>  
                    <div class="col-md-2">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>
                    </div>

                    <div class="form-group">
                    <label class="col-md-1 control-label" for="textinput">PTH</label>  
                    <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>

                    <label class="col-md-2 control-label" for="textinput">Ferritina</label>  
                    <div class="col-md-4">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>

                    </div>

                    <div class="form-group">
                    <label class="col-md-2 control-label" for="textinput">IMAGENES</label>  
                    <div class="col-md-6">
                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                    </div>

                    </div>

                


                </div>
                </div>

                <table class="table table-bordered">
                <tbody>
                    <tr>
                    <th scope="row" style="width: 10%">COONG</th>
                    <td style="width: 5%">NI</td>
                    <td style="text-align: left;"></td>
                    </tr>
                    <tr>
                    <th scope="row" style="width: 10%">Corazón</th>
                    <td style="width: 5%"></td>
                    <td style="text-align: left;"></td>
                    </tr>
                    <tr>
                    <th scope="row" style="width: 10%">Pulmones</th>
                    <td style="width: 5%"></td>
                    <td style="text-align: left;"></td>
                    </tr>
                    <tr>
                    <th scope="row" style="width: 10%">Abdomen</th>
                    <td style="width: 5%"></td>
                    <td style="text-align: left;"></td>
                    </tr>
                    <tr>
                    <th scope="row" style="width: 10%">Genitales</th>
                    <td style="width: 5%"></td>
                    <td style="text-align: left;">Taner</td>
                    </tr>
                    <tr>
                    <th scope="row" style="width: 10%">Extremidades</th>
                    <td style="width: 5%"></td>
                    <td style="text-align: left;"></td>
                    </tr>
                    <tr>
                    <th scope="row" style="width: 10%">Piel</th>
                    <td style="width: 5%"></td>
                    <td style="text-align: left;"></td>
                    </tr>
                    <tr>
                    <th scope="row" style="width: 10%">SN</th>
                    <td style="width: 5%"></td>
                    <td style="text-align: left;"></td>
                    </tr>
                    <tr>
                    <th scope="row" style="width: 10%">Otros</th>
                    <td style="width: 5%"></td>
                    <td style="text-align: left;"></td>
                    </tr>
                    <tr>
                    <th scope="row" style="width: 10%"></th>
                    <td style="width: 5%"></td>
                    <td style="text-align: left;"></td>
                    </tr>
                </tbody>
                </table>



                <!-- Textarea -->
                <div class="form-group encapsulado">
                <div class="form-group">
                <label class="col-md-2 control-label" for="textarea">Síndrome Clínico</label>
                <div class="col-md-9">                     
                    <textarea rows="5" class="form-control" id="textarea" name="textarea"></textarea>
                </div>
                </div>
                </div>

                <!-- Textarea -->
                <div class="form-group encapsulado">
                <div class="form-group">
                <label class="col-md-2 control-label" for="textarea">Psicosocial</label>
                <div class="col-md-9">                     
                    <textarea rows="5" class="form-control" id="textarea" name="textarea"></textarea>
                </div>
                </div>
                </div>

                <!-- Textarea -->
                <div class="form-group encapsulado" >
                <div class="form-group">
                    <label class="col-md-2 control-label" for="textarea">Plan Médico</label>
                    <div class="col-md-9">                     
                    <textarea rows="5" class="form-control" id="textarea" name="textarea"></textarea>
                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-2 control-label" for="textarea">Plan Psicosocial</label>
                    <div class="col-md-9">                     
                    <textarea rows="5" class="form-control" id="textarea" name="textarea"></textarea>
                    </div>
                </div>

                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-2 control-label" for="textarea">Plan Nutricional</label>
                    <div class="col-md-9">                     
                    <textarea rows="5" class="form-control" id="textarea" name="textarea"></textarea>
                    </div>
                </div>
                </div>
                
                <!-- Button -->
                <div class="form-group">
                <label class="col-md-4 control-label" for="singlebutton"></label>
                <div class="col-md-4">
                    <button id="singlebutton" name="singlebutton" class="btn">Agregar Imagen</button>
                </div>
                </div>
                <div class=" col-md-18 custom-control custom-checkbox" style="margin: 2%">
                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                        <label class="custom-control-label" for="defaultUnchecked">Solicitar próxima visita</label>
                </div> 

                <div class="form-inline" style="text-align: center;">
                    <div class="form-group" >
                    <div class="col-md-0">
                        <button id="singlebutton" name="singlebutton" class="btn ">Guardar</button>
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton"></label>
                    <div class="col-md-4" >
                        <button id="singlebutton" name="singlebutton" class="btn ">Cancelar</button>
                    </div>
                    </div>
                    <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton"></label>
                    <div class="col-md-4">
                        <button id="singlebutton" name="singlebutton" class="btn ">Imprimir</button>
                    </div>
                    </div>
                </div>
                </fieldset>
                </form>

                </fieldset>
                </form>

            
            
        </div>
    </div>
</template>
<style>
  body {
    border: solid #e0ebeb 2px;
    text-align:  center;
    margin-left: 17.5%;
    width: 65%;
    padding: 5%;
    padding-top: 2%;
    padding-bottom: 1%;
  }
  textarea{
    width: 40%;
    height: 80%;
  }
  .encapsulado {
    border: solid #e0ebeb 2px; 
    margin: 2%; padding: 2%; 
    border-radius: 25px;
  }
</style>