<template lang="">
	<div>	
		<div class="body">

			<b-container class="bv-example-row">

				<!-- FILA 1, FOTOS Y TÍTULO-->
				<b-row align-h="around" align-v="center">

					<b-col order="1" cols="1">
						<img src="../assets/Randall.jpeg" alt="" width="120" height="120">
					</b-col>

					<b-col order="1" cols="6">
						<h2>BIENVENIDO</h2>
						<h4>Dr. Randall Lou</h4>
					</b-col>

					<b-col order="1" cols="3" class="pb-4">
						<img src="../assets/mariposaFundanier.png" alt="" width="240" height="240">
					</b-col>

				</b-row>

				<!-- FILA 2, SET DE BOTONES-->
				<b-row align-h="around" align-v="center" class="pb-5">
					<b-col order="1" cols="8">
						<b-button variant="outline-primary">Gestionar Paciente</b-button>
						<b-button variant="outline-primary">Generar Reporte</b-button>
						<b-button variant="outline-primary">Informes Estadísticos</b-button>
						<b-button variant="outline-primary">Datos Generales</b-button>
					</b-col>
				</b-row>

				<div id="app">
					<v-app id="inspire">
						<v-layout wrap>
						<v-flex xs12 class="mb-3">
							<v-sheet height="500">
							<v-calendar
								ref="calendar"
								v-model="start"
								:type="week"
								:end="end"
								color="primary"
							></v-calendar>
							</v-sheet>
						</v-flex>
						</v-layout>
					</v-app>
					</div>

				<b-row>

					<b-col order="2" sm-8 align-v="left">
						<b-button variant="outline-primary">Hacer Cita</b-button>
						<b-button variant="outline-primary">Gestionar Usuarios</b-button>
					</b-col>

				</b-row>
			</b-container>


		</div>
		<br>
	</div>
</template>

<script>

export default {
	name: 'menu',

	components: {

	},

	methods: {

	}
}


</script>