Feature: Consulta
    As a Doctor I want to give consulta.

    Scenario: Store Consulta
        When I send a POST request to "/ConsultaController/insert" with body:
        """"
        {
            "id":"12",
            "cui":"7566410",
            "fecha":"2019-08-15",
            "peso":"50",
            "talla":"60",
            "pa":"70",
            "sindrome_clinico":"1",
            "Dx_Definitivo":"definitivo",
            "Dx_Asociados":"asociado",
            "historia":"historia",
            "medicamento":"{}",
            "resultados_laboratorio":"{"Na":"1","Cl":"2","BUN":"3","Glu":"0","K":"0","HCO":"0","Creat":"0","WB":"0","Col":"0","Alb":"0","HB":"0","HT":"0","Ca":"0","P":"0","MG":"0","PTL":"0","EGO":"0","pH":"0","Glu2":"0","Prot":"0","Hem":"0","Gr":"0","GB":"0","Cil":"0","URO":"0","PTH":"0","Ferritina":"0"}",
            "examen_fisico":"{"corazon":"conrazon amigo","genitales":"genitales","piel":"piel"}",
            "evaluacion_medica":"a",
            "plan_medico":"b",
            "evaluacion_psicologica":"c",
            "plan_psicologico":"d",
            "evaluacion_trabajo_social":"e",
            "plan_trabajo_social":"f",
            "evaluacion_nutricional":"g",
            "plan_nutricional":"h",
            "evaluacion_farmacologica":"i",
            "plan_farmacologico":"j"
        }
        """
        Then the response code should be 200
        And the JSON response should have a "message" containing "Consulta creada"
