"use strict";

var hh = 0; 
var mm = 0; 
var ss = 0; 
var tempo = 1000; // 1 segundo
var cronometro = null; 

// Função para iniciar o cronômetro
function start() {
    if (cronometro === null) { 
        cronometro = setInterval(timer, tempo);
    }
}

// Função para pausar o cronômetro
function pause() {
    clearInterval(cronometro);
    cronometro = null; 
}

// Função para resetar o cronômetro
function resetar() {
    clearInterval(cronometro); 
    cronometro = null; 
    hh = 0;
    mm = 0;
    ss = 0;
    updateDisplay(); 
}


function timer() {
    ss++;
    
    if (ss === 60) { 
        ss = 0;
        mm++;
        if (mm === 60) { 
            mm = 0;
            hh++;
        }
    }

    updateDisplay(); // Atualiza a exibição a cada segundo
}


function updateDisplay() {
    var format = (hh < 10 ? '0' + hh : hh) + ':' + (mm < 10 ? '0' + mm : mm) + ':' + (ss < 10 ? '0' + ss : ss);
    document.getElementById('time').innerText = format;
}
