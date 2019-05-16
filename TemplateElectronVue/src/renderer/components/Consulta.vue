<template lang="">
    <div>
        <b-tabs active-nav-item-class="font-weight-bold text-uppercase text-dark"  card vertical>
            <b-tab title="Tab 1"  active>
                <div class="cuerpo">
                    <form class="form-horizontal">
                        <fieldset>

                        <!-- Text input-->
                        <h1 style="text-align: center;">Consulta General</h1>

                        <!-- Text input-->
                        <div class="form-group ">
                        <!-- Lefts-->
                        <div class="encapsulado">
                            <b-container>
                                <b-row class="justify-content-md-center">
                                <b-col>
                                    <div>
                                        <b-container>
                                            <b-row class="justify-content-md-center">
                                                <b-col>
                                                    <h3 style="font-weight: bold;">Paciente: </h3>  
                                                </b-col>
                                                <b-col>
                                                    <h3>Juan García</h3> 
                                                </b-col>
                                                <b-col>
                                                </b-col>
                                            </b-row>
                                            <b-row>
                                            <img style="margin-left: 10%; margin-top: 2%" src="../assets/javier.jpg" alt="" width="273" height="183">
                                            </b-row>
                                        </b-container>
                                    </div>
                                </b-col>                       
                                <b-col>
                                    <!-- Right-->
                                    <div style="margin-left: 2%">
                                        <h3 style="text-align:center; font-weight: bold;margin-bottom: 2%;">Observaciones especiales: </h3>  
                                        <div>                     
                                            <textarea rows="8" class="form-control" id="textarea" name="textarea"></textarea>
                                        </div>
                                        <b-container>
                                            <b-row class="justify-content-md-center">
                                                <b-col>
                                                    <button type="button" class="btn btn-lg btn-warning btn-block">Agregar Comentario</button> 
                                                </b-col>
                                                <b-col>
                                                    <button type="button" class="btn btn-lg btn-warning btn-block">Ver más</button>
                                                </b-col>
                                            </b-row>
                                        </b-container>
                                    </div>
                                </b-col>
                                </b-row>
                            </b-container>
                        </div>
                        </div>
                        <!-- Form Name -->
                        <h2 style="text-align: left;">Datos Generales</h2>

                        <div class="form-group encapsulado">
                            <b-container>
                                <b-row class="justify-content-md-center">
                                <b-col>
                                    <div>
                                        <b-container>
                                            <b-row class="justify-content-md-center">
                                                <b-col>
                                                    <label>Peso: </label>  
                                                </b-col>
                                                <b-col>
                                                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                </b-col>
                                                <b-col>
                                                    <label>Kg. Percentil: </label>  
                                                </b-col>
                                                <b-col>
                                                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                </b-col>
                                            </b-row>
                                            <b-row class="justify-content-md-center">
                                                <b-col>
                                                    <label>Talla: </label>  
                                                </b-col>
                                                <b-col>
                                                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                </b-col>
                                                <b-col>
                                                    <label>Cms. Percentil: </label>  
                                                </b-col>
                                                <b-col>
                                                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                </b-col>
                                            </b-row>
                                            <b-row class="justify-content-md-center">
                                                <b-col>
                                                    <label>P/A: </label>  
                                                </b-col>
                                                <b-col>
                                                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                </b-col>
                                                <b-col>
                                                    <label>Percentil: </label>  
                                                </b-col>
                                                <b-col>
                                                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                </b-col>
                                            </b-row>
                                            <b-row class="justify-content-md-center">
                                                <b-col>
                                                    <label>Teléfonos: </label>  
                                                </b-col>
                                                <b-col>
                                                    <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                </b-col>
                                                <b-col>
                                                </b-col>
                                                <b-col>
                                                </b-col>
                                            </b-row>
                                            
                                        
                                        </b-container>
                                    </div>
                                </b-col>
                                </b-row>
                            </b-container>
                        </div>

                        <!-- Form Name -->
                        <h2 style="text-align: left;">Dar Consulta</h2>
                        <div>
                        <b-container class="bv-example-row2">
                            <b-row class="justify-content-md-center">
                                <b-col>
                                    <!-- Left-->
                                    <div class="form-group encapsulado" style="text-align:left;">
                                        <div class="form-group">
                                        <div class=" col-md-10 custom-control custom-checkbox">
                                            <label class="custom-control-label">Síndorme Clínico de Presentación</label>
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
                                </b-col>
                                <b-col>
                                    <!-- Center-->
                                    <div style="margin-left: 2%"class="form-group encapsulado">
                                        <div class="custom-control custom-checkbox">
                                            <label>Dx. Definitivo</label>
                                        </div> 
                                        <div class="col-md-15">                     
                                            <textarea rows="13" class="form-control" id="textarea" name="textarea"></textarea>
                                        </div>
                                    </div>
                                </b-col>
                                <b-col>
                                    <!-- Right-->
                                    <div style="margin-left: 2%"class="form-group encapsulado">
                                        <div class="custom-control custom-checkbox">
                                            <label>Dx. Asociado</label>
                                        </div> 
                                        <div class="col-md-15">                     
                                        <textarea rows="13" class="form-control" id="textarea" name="textarea"></textarea>
                                        </div>
                                    </div>  
                                </b-col>
                            </b-row>
                        </b-container>
                        </div>       

                        <!-- Textarea -->
                        <div class="form-group encapsulado">
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="textarea">Historia</label>
                            <div>                     
                                <textarea rows="5" class="form-control" id="textarea" name="textarea"></textarea>
                            </div>
                        </div>
                        </div>

                        <!-- Text input-->
                    <div class="form-group ">
                        <!-- Left-->
                        <b-container>
                            <b-row>
                                <b-col>
                                    <div class="form-group encapsulado" style="text-align:left;">
                                        <div>
                                            <b-container>
                                                <b-row>
                                                    <b-col>
                                                        <label class="custom-control-label" for="defaultUnchecked">Prednisona</label>
                                                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">   
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                                    </b-col>
                                                    <b-col>
                                                        <label for="textinput">mg</label> 
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <label class="custom-control-label" for="defaultUnchecked">Cyac/Tac</label>
                                                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">   
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                                    </b-col>
                                                    <b-col>
                                                        <label for="textinput">mg</label> 
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <label class="custom-control-label" for="defaultUnchecked">MMF/AZA</label>
                                                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">   
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                                    </b-col>
                                                    <b-col>
                                                        <label for="textinput">mg</label> 
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <label class="custom-control-label" for="defaultUnchecked">CFM</label>
                                                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">   
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                                    </b-col>
                                                    <b-col>
                                                        <label for="textinput">mg</label> 
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <label class="custom-control-label" for="defaultUnchecked">Enalapril</label>
                                                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">   
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                                    </b-col>
                                                    <b-col>
                                                        <label for="textinput">mg</label> 
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <label class="custom-control-label" for="defaultUnchecked">Losartan</label>
                                                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">   
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                                    </b-col>
                                                    <b-col>
                                                        <label for="textinput">mg</label> 
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <label class="custom-control-label" for="defaultUnchecked">Amlodipina</label>
                                                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">   
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                                    </b-col>
                                                    <b-col>
                                                        <label for="textinput">mg</label> 
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <label class="custom-control-label" for="defaultUnchecked">Citrato Na K</label>
                                                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">   
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                                    </b-col>
                                                    <b-col>
                                                        <label for="textinput">mg</label> 
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <label class="custom-control-label" for="defaultUnchecked">Furosemida</label>
                                                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">   
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                                    </b-col>
                                                    <b-col>
                                                        <label for="textinput">mg</label> 
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <label class="custom-control-label" for="defaultUnchecked">Alfacalcidol</label>
                                                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">   
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                                    </b-col>
                                                    <b-col>
                                                        <label for="textinput">mg</label> 
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <label class="custom-control-label" for="defaultUnchecked">CaCO3</label>
                                                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">   
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                                    </b-col>
                                                    <b-col>
                                                        <label for="textinput">mg</label> 
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <label class="custom-control-label" for="defaultUnchecked">EPO</label>
                                                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">   
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                                    </b-col>
                                                    <b-col>
                                                        <label for="textinput">mg</label> 
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <label class="custom-control-label" for="defaultUnchecked">Fe</label>
                                                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">   
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                                    </b-col>
                                                    <b-col>
                                                        <label for="textinput">mg</label> 
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <label class="custom-control-label" for="defaultUnchecked">Cefradoxilo</label>
                                                        <input type="checkbox" class="custom-control-input" id="defaultUnchecked">   
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                                    </b-col>
                                                    <b-col>
                                                        <label for="textinput">mg</label> 
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">
                                                    </b-col>
                                                </b-row>
                                            </b-container> 
            
                                        </div>
                                    </div>
                                </b-col>
                        <!-- Right-->
                                <b-col>
                                    <div class="form-group encapsulado" style="text-align:left;">
                                        <div>
                                            <b-container>
                                                <b-row>
                                                    <b-col>
                                                        <label class="control-label" for="textinput">Na</label>  
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                    </b-col>
                                                    <b-col>
                                                        <label class="control-label" for="textinput">Cl</label>  
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                    </b-col>
                                                    <b-col>
                                                        <label class="control-label" for="textinput">BUN</label>  
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                    </b-col>
                                                    <b-col>
                                                        <label class="control-label" for="textinput">Glu</label>  
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <label class="control-label" for="textinput">K</label>  
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                    </b-col>
                                                    <b-col>
                                                        <label class="control-label" for="textinput">HCO</label>  
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                    </b-col>
                                                    <b-col>
                                                        <label class="control-label" for="textinput">Creat</label>  
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                    </b-col>
                                                    <b-col>
                                                        <label class="control-label" for="textinput">WB</label>  
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <label class="control-label" for="textinput">Col</label>  
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                    </b-col>
                                                    <b-col>
                                                        <label class="control-label" for="textinput">Alb</label>  
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                    </b-col>
                                                    <b-col>
                                                        <label class="control-label" for="textinput">HB</label>  
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                    </b-col>
                                                    <b-col>
                                                        <label class="control-label" for="textinput">HT</label>  
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <label class="control-label" for="textinput">Ca</label>  
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                    </b-col>
                                                    <b-col>
                                                        <label class="control-label" for="textinput">P</label>  
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                    </b-col>
                                                    <b-col>
                                                        <label class="control-label" for="textinput">MG</label>  
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                    </b-col>
                                                    <b-col>
                                                        <label class="control-label" for="textinput">PTL</label>  
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <label class="control-label" for="textinput">EGO</label>  
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                    </b-col>
                                                    <b-col>
                                                        <label class="control-label" for="textinput">pH</label>  
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                    </b-col>
                                                    <b-col>
                                                        <label class="control-label" for="textinput">Glu</label>  
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                    </b-col>
                                                    <b-col>
                                                        <label class="control-label" for="textinput">Prot</label>  
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <label class="control-label" for="textinput">Hem</label>  
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                    </b-col>
                                                    <b-col>
                                                    </b-col>
                                                    <b-col>
                                                    </b-col>
                                                    <b-col>
                                                    </b-col>
                                                    <b-col>
                                                    </b-col>
                                                    <b-col>
                                                    </b-col>
                                                    <b-col><input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <label class="control-label" for="textinput">GR</label>  
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                    </b-col>
                                                    <b-col>
                                                        <label class="control-label" for="textinput">GB</label>  
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                    </b-col>
                                                    <b-col>
                                                        <label class="control-label" for="textinput">Cil</label>  
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                    </b-col>
                                                    <b-col>
                                                        <label class="control-label" for="textinput">URO</label>  
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <label class="control-label" for="textinput">PTH</label>  
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md"> 
                                                    </b-col>
                                                    <b-col>
                                                        <label class="control-label" for="textinput">Ferritina</label>  
                                                    </b-col>
                                                    <b-col>
                                                        <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md">  
                                                    </b-col>
                                                    <b-col>
                                                    </b-col>
                                                </b-row>
                                                <b-row>
                                                    <b-col>
                                                        <button type="button" class="btn btn-lg btn-warning btn-block" style="margin-top:10%;">Imágenes</button>
                                                    </b-col>
                                                    <b-col>
                                                    </b-col>
                                                                                
                                                </b-row>
                                            </b-container> 
                                        </div>
                                    </div>
                                </b-col>
                            </b-row>
                        </b-container>
                    </div>

                        <table class="table table-bordered table-ligth">
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
                            <th scope="row" style="width: 10%">   </th>
                            <td style="width: 5%"></td>
                            <td style="text-align: left;"></td>
                            </tr>
                        </tbody>
                        </table>



                        <!-- Textarea -->
                        <div class="form-group encapsulado">
                        <div class="form-group">
                        <label class="col-md-2 control-label" for="textarea">Síndrome Clínico</label>
                        <div>                     
                            <textarea rows="5" class="form-control" id="textarea" name="textarea"></textarea>
                        </div>
                        </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group encapsulado">
                        <div class="form-group">
                        <label class="col-md-2 control-label" for="textarea">Psicosocial</label>
                        <div>                     
                            <textarea rows="5" class="form-control" id="textarea" name="textarea"></textarea>
                        </div>
                        </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group encapsulado" >
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="textarea">Plan Médico</label>
                            <div>                     
                            <textarea rows="5" class="form-control" id="textarea" name="textarea"></textarea>
                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="textarea">Plan Psicosocial</label>
                            <div>                     
                            <textarea rows="5" class="form-control" id="textarea" name="textarea"></textarea>
                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="textarea">Plan Nutricional</label>
                            <div>                     
                            <textarea rows="5" class="form-control" id="textarea" name="textarea"></textarea>
                            </div>
                        </div>
                        </div>
                        
                        <!-- Button -->
                        <div class="form-inline" style="text-align: center;align-items: center;justify-content: center;">
                            <div>
                            <b-container class="bv-example-row2">
                                <b-row class="justify-content-md-center">
                                <b-col>
                                
                                </b-col>
                                <b-col>
                                    <button type="button" class="btn btn-lg btn-warning btn-block" >Agregar imagen</button>
                                </b-col>
                                <b-col>
                                    
                                </b-col>
                                </b-row>
                            </b-container>
                            </div>
                        </div>
        
                        <div class=" col-md-18 custom-control custom-checkbox" style="margin: 2%">
                                <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                                <label class="custom-control-label" for="defaultUnchecked">Solicitar próxima visita</label>
                        </div> 

                        <div class="form-inline" style="text-align: center;align-items: center;justify-content: center;">
                            <div>
                            <b-container class="bv-example-row2">
                                <b-row class="justify-content-md-center">
                                <b-col>
                                    <button type="button" class="btn btn-lg btn-warning btn-block" >Guardar</button>
                                </b-col>
                                <b-col>
                                    <button type="button" class="btn btn-lg btn-warning btn-block" >Cancelar</button>
                                </b-col>
                                <b-col>
                                    <button type="button" class="btn btn-lg btn-warning btn-block" >Imprimir</button>
                                </b-col>
                                </b-row>
                            </b-container>
                            </div>
                        </div>
                        </fieldset>
                        </form>

                        </fieldset>
                        </form>

                    
                    
                </div>
            </b-tab>
            <b-tab class='posicion' title="Tab 2"><b-card-text>Tab Contents 2</b-card-text></b-tab>
            <b-tab class='posicion' title="Tab 3"><b-card-text>Tab Contents 3</b-card-text></b-tab>
        </b-tabs>
    </div>
</template>

<style>
  .cuerpo {
    border: solid #A9A9A9 2px;
    text-align:  center;
    margin-left: 5%;
    width: 90%;
    padding: 5%;
    padding-top: 2%;
    padding-bottom: 1%;
  }

  .encapsulado {
    border: solid #A9A9A9 2px; 
    margin: 2%; padding: 5%; 
    border-radius: 25px;
  }

  table.table-bordered > tbody > tr >th {
    border:1px solid  #A9A9A9;
  }
  table.table-bordered > tbody > tr >td {
    border:1px solid  #A9A9A9;
  }

  .posicion {
      position: relative;
  }

</style>