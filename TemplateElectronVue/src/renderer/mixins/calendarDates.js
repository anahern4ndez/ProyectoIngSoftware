export const calendarDates = {
    methods: {
        getMes(mes) {
            if (mes == 0) return "Enero";
            else if (mes == 1) return "Febrero";
            else if (mes == 2) return "Marzo";
            else if (mes == 3) return "Abril";
            else if (mes == 4) return "Mayo";
            else if (mes == 5) return "Junio";
            else if (mes == 6) return "Julio";
            else if (mes == 7) return "Agosto";
            else if (mes == 8) return "Septiembre";
            else if (mes == 9) return "Octubre";
            else if (mes == 10) return "Noviembre";
            else if (mes == 11) return "Diciembre";
            else return "Error en mes";
        }
    }
}