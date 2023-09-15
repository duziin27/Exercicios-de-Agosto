if ($_SERVER["REQUEST_METHOD"] == "POST") {
const anosEl = document.getElementById("anos");
const mesesEl = document.getElementById("meses");
const diasEl = document.getElementById("dias");
const horasEl = document.getElementById("horas");
const minutosEl = document.getElementById("minutos");
const segundosEl = document.getElementById("segundos");

//testes com data escolhida
//var dataEscolhida = document.getElementById($_POST["dataEscohida"]);

//var dataEscolhida = $_POST["dataEscohida"];

//teste com data fixa
var dataEscolhida = "13 Set 2024";
function countdown(){
    var novaData = new Date(dataEscolhida);
    const dataAtual = new Date();

    const segundosTotais = (novaData - dataAtual) / 1000;

    const anos = Math.floor(segundosTotais / 60 / 60 / 24 / 30 / 12
    );
    const meses = Math.floor(segundosTotais / 60 / 60 / 24 / 30) % 12;
    const dias = Math.floor(segundosTotais / 60 / 60 / 24) % 30;
    const horas = Math.floor(segundosTotais / 3600) % 24;
    const minutos = Math.floor(segundosTotais / 60) % 60;
    const segundos = Math.floor(segundosTotais) % 60;

    anosEl.innerHTML = anos;
    mesesEl.innerHTML = meses;
    diasEl.innerHTML = dias;
    horasEl.innerHTML = formatTime(horas);
    minutosEl.innerHTML = formatTime(minutos);
    segundosEl.innerHTML = formatTime(segundos);

}

function formatTime(time){
    return time < 10 ? `0${time}` : `${time}`;
}

countdown();

setInterval(countdown, 1000);

}


