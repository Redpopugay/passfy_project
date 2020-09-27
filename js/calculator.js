// Общий результат
function resultOfCalculation() {
	var weight = document.getElementById('weight').value; 
	var volume = document.getElementById('volume').value;

	var delivery_method = document.getElementById('deliverymethod').value;
	var delivery_price;

	var parcel_type = document.getElementById('type_parcel').value;
	var parcel_type_price;

	var total_checkout;

	switch(delivery_method) {
		case "Обычный (178 руб.)":
			delivery_price = 178;
			break;
		case "Ускоренный (153 руб.)":
			delivery_price = 153;
			break;
		case "ESM (323 руб.)":
			delivery_price = 323;
			break;
		default:
			console.log("ОШИБКА - Выбран неверный формат тип заказа.");
			break;
	}

	switch(parcel_type) {
		case "Бандероль":
			parcel_type_price = 100;
			break;
		case "Письмо":
			parcel_type_price = 150;
			break;
		case "Посылка":
			parcel_type_price = 250;
			break;
		case "Груз":
			parcel_type_price = 400;
			break;
		default:
			console.log("ОШИБКА - Выбран неверный формат тип посылки.")
			break;
	}

	// Проверка 
	if (volume > 0 && weight > 0) {
		total_checkout = (weight/5) + (Number(volume)/100) + delivery_price + parcel_type_price;
		document.getElementById('totalcheckout').value = Math.floor(total_checkout) + " руб.";
	}
	else {
		document.getElementById('totalcheckout').value = "Неверно введены данные";
	}

	console.log(total_checkout);

}

// Рассчет объема, вызывается из кнопки "Рассчитать", с помощью атрибута onclick
function valueCalculate() {
	var dimensions_lenght = document.getElementById('length_parcel').value; 
	var dimensions_width = document.getElementById('width_parcel').value; 
	var dimensions_height = document.getElementById('height_parcel').value;

	// Объявление переменной куба и его свойств
	let cube = {			
		length: dimensions_lenght,
		width: dimensions_width,
		height: dimensions_height
	};

	// Рассчет с использованием свойств куба, с помощью функции cubeFormula
	var cube_formula_result = cubeFormula(cube.length, cube.width, cube.height);
	// var result = (cube_formula_result / 0.5) + (weight / 0.1);

	// Вывод результата в поле "Объем"
	document.getElementById('volume').value = cube_formula_result;
}


// Формула куба(записал в одтельную функцию для удобства)
function cubeFormula(length, width, height) {
	result = (length * width * height) / 100;
	return result;
}
