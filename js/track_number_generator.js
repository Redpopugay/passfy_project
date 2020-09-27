let lastTry = undefined
function trackNumberGeneration() {
	var track_number = ""; // Объявление переменное трек номера
	var symbols = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"; // Символы, используемые в трек номере
	var len = 16; // Длинна
	for (var i = 0; i <= len; i++){ // Запуск цикла, где i <= len кол-во символов, при котором цикл прекращается
	    track_number += symbols.charAt(Math.floor(Math.random() * symbols.length));     
	}

	console.log(track_number);
	if (lastTry && lastTry + time > new Date())
	return
	lastTry = new Date()
	document.getElementById('input_1').value = track_number;
}
