
function relogio() {
    var data = new Date();
    // Guarda cada pedaço em uma variável
    var dia = data.getDate();           // do dia 1 ao 31
    var dia_sem = data.getDay();            // 0-6 (zero=domingo)
    var mes = data.getMonth();          // 0-11 (zero=janeiro)
    var ano2 = data.getYear();           // ano com 2 dígitos
    var ano4 = data.getFullYear();       // ano com 4 dígitos
    var hora = data.getHours();          // horas 0-23
    var min = data.getMinutes();        // minutos 0-59
    var seg = data.getSeconds();        // segundos 0-59
    var mseg = data.getMilliseconds();   // milissegundos 0-999
    var tz = data.getTimezoneOffset(); // timezone em minutos
    if (seg < 10) {
        seg = "0" + seg;
    }
    if (min < 10) {
        min = "0" + min;
    }
    if (hora < 10) {
        hora = "0" + hora;
    }
    if (mseg <= 9) {
        mseg = "00" + mseg;
    }
    if (mseg <= 99) {
        mseg = "0" + mseg;
    }
    if(dia < 10){
        dia = "0" + dia;
    }
    // if((seg == 00)&&(min ==26)&&((hora == 14))){
    //     console.log("São 14 horas, 26 minutos e 00 segundos");
    // }
    switch (dia_sem) {
        case 0:
            var nomedodia = "Domingo";
            break;
        case 1:
            var nomedodia = "Segunda-feira";
            break;
        case 2:
            var nomedodia = "Terça-feira";
            break;
        case 3:
            var nomedodia = "Quarta-feira";
            break;
        case 4:
            var nomedodia = "Quinta-feira";
            break;
        case 5:
            var nomedodia = "Sexta-feira";
            break;
        case 6:
            var nomedodia = "Sábado";
            break;
        default:
            console.log("erro ao nomear o dia da semana");
    }
    switch (mes) {
        case 0:
            var nomedomes = "Janeiro";
            break;
        case 1:
            var nomedomes = "Fevereiro";
            break;
        case 2:
            var nomedomes = "Março";
            break;
        case 3:
            var nomedomes = "Abril";
            break;
        case 4:
            var nomedomes = "Maio";
            break;
        case 5:
            var nomedomes = "Junho";
            break;
        case 6:
            var nomedomes = "Julho";
            break;
        case 7:
            var nomedomes = "Agosto";
            break;
        case 8:
            var nomedomes = "Setembro";
            break;
        case 9:
            var nomedomes = "Outubro";
            break;
        case 10:
            var nomedomes = "Novembro";
            break;
        case 11:
            var nomedomes = "Dezembro";
            break;
        default:
            console.log("erro ao nomear o mês do ano");
    }
            //let dados = hora + ":" + min + ":" + seg + " "+"</br>" + nomedodia+"</br>"+dia+" de " +nomedomes+ " de "+ ano4;
            //console.log(hora+":"+min+":"+seg+" "+ nomedodia);

            let horainfo = hora+":"+min+":"+seg;
            let diainfo = +dia+"/"+nomedomes+"/"+ano4;





            document.querySelector('.hora').innerHTML = horainfo;
            document.querySelector('.data').innerHTML = diainfo;
    }

    //let exibir = setInterval(relogio,0);
