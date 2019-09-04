function __getBrands(container) {
	const _url = 'https://prediction-service-dot-investindo.appspot.com/api/v0/brands';

	$.ajax({
		url: _url,
		type: 'get',
		success: function(brands) {
			__addToDropdown(container, brands);
		}
	})

}

function __getModels(container, brand) {
	const _url = 'https://prediction-service-dot-investindo.appspot.com/api/v0/models';

	$.ajax({
		url: _url,
		type: 'get',
		data: {
			brand: brand
		},
		success: function(models) {
			__addToDropdown(container, models);
		}
	})
}

function __getBodyType(brand, model, _callback) {
	const _url = 'https://carlist.endpoints.investindo.cloud.goog/v1/body-type';

	$.ajax({
		url: _url,
		type: 'get',
		data: {
			brand: brand,
			model: model
		},
		success: _callback
	});
}

function __getYear(container, brand, model) {
	const _url = 'https://prediction-service-dot-investindo.appspot.com/api/v0/year';

	$.ajax({
		url: _url,
		type: 'get',
		data: {
			brand: brand,
			model: model
		},
		success: function(models) {
			__addToDropdown(container, models);
		}
	});
}

function __getVarian(container, brand, model, year) {
	const _url = 'https://prediction-service-dot-investindo.appspot.com/api/v0/varian';

	$.ajax({
		url: _url,
		type: 'get',
		data: {
			brand: brand,
			model: model,
			year: year
		},
		success: function(varians) {
			__addToDropdown(container, varians);
		}
	});
}

function __getTransmission(container, brand, model, year, varian) {
	const _url = 'https://prediction-service-dot-investindo.appspot.com/api/v0/transmission';

	$.ajax({
		url: _url,
		type: 'get',
		data: {
			brand: brand,
			model: model,
			year: year,
			varian: varian
		},
		success: function(transmissions) {
			__addToDropdown(container, transmissions);
		}
	});

}

function __getColor(container, brand, model, year, varian) {
	const _url = 'https://prediction-service-dot-investindo.appspot.com/api/v0/color';

	$.ajax({
		url: _url,
		type: 'get',
		data: {
			brand: brand,
			model: model,
			year: year,
			varian: varian
		},
		success: function(colors) {
			__addToDropdown(container, colors);
		}
	});

}

function __getPrediction(location, brand, model, year, mileage, varian, transmission, color, bodyType, _callback) {
	const _url = 'https://prediction.endpoints.investindo.cloud.goog/v1/predict';

	$.ajax({
		url: _url,
		type: 'get',
		data: {
			location: location,
			brand: brand,
			model: model,
			year: year,
			mileage: mileage,
			varian: varian,
			transmission: transmission,
			color: color,
			bodytype: 'MPV'
		},
		success: _callback
	});
}

function __addToDropdown(container, contents) {
	const _container = $(container);
	var _content = '';
	contents.forEach(function(_c) {
		_content += `<option>${_c}</option>`;
	});
	_container.empty();
	_container.append(_content);
	_container.trigger('change');
}
// {
// 		"price": [{
// 			"year": 2019,
// 			"price": 178567920
// 		}, {
// 			"year": 2020,
// 			"price": 148660736
// 		}, {
// 			"year": 2021,
// 			"price": 142098608
// 		}, {
// 			"year": 2022,
// 			"price": 131175104
// 		}, {
// 			"year": 2023,
// 			"price": 118759504
// 		}],
// 		"spectrum": {
// 			"lowRange": {
// 				"min": 0,
// 				"max": 169639523
// 			},
// 			"fairRange": {
// 				"min": 169639524,
// 				"max": 187496316
// 			},
// 			"highRange": {
// 				"min": 187496317,
// 				"max": 198716800
// 			},
// 			"regressionPrice": 178567920
// 		}
// 	}