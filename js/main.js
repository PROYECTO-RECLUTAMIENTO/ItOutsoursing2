var end = new Date('11/24/2022 11:30 PM ');

    var _second = 1000;
    var _minute = _second * 60;
    var _hour = _minute * 60;
    var _day = _hour * 24;
    var timer;

    function showRemaining() {
        var now = new Date();
        var distance = end - now;
        if (distance < 0) {

            clearInterval(timer);
            document.getElementById('countdown').innerHTML = 'EXPIRED!';

            return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

        //document.getElementById('countdown').innerHTML = days + ' dias, ';
        //document.getElementById('countdown').innerHTML = hours + ' horas, ';
        document.getElementById('countdown').innerHTML = minutes +':' ;
        document.getElementById('countdown').innerHTML += seconds ;
    }

    timer = setInterval(showRemaining, 1000);


    //Alerta finalizar examen 

    function alertaFinalizar(){
        Swal.fire({
        title: 'Estas apunto de terminar tu examen <br> ¿Estas seguro que desas continuar?',
        icon: 'error',
        iconHtml: 'X',
    
      });
    }

