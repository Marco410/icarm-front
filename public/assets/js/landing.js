$('.collapse.show').each(function () {
	$(this).prev(".card-header").find(".fas").addClass("fa-minus").removeClass("fa-plus");

	$(".collapse").on("show.bs.collapse", function () {
		$(this).prev(".card-header").find(".fas").addClass("fa-minus").removeClass("fa-plus");
	}).on("hide.bs.collapse", function () {
		$(this).prev(".card-header").find(".fas").addClass("fa-plus").removeClass("fa-minus");
	});
});

$(".link-to").on("click", function (e) {
	// 1
	e.preventDefault();
	// 2
	const href = $(this).attr("href");
	// 3
	$("html, body").animate({ scrollTop: $(href).offset().top - 100 }, 800);
});

var inputs = document.querySelectorAll('.inputIne');
Array.prototype.forEach.call(inputs, function (input) {
	var label = input.nextElementSibling,
		labelVal = label.innerHTML;

	input.addEventListener('change', function (e) {
		var fileName = '';
		if (this.files && this.files.length > 1) {

		}
		else {
			fileName = e.target.value.split("\\").pop();
		}
		if (fileName) {
			$("#ine_filename").html(fileName + '<i class="fas fa-file-check float-right"></i>');
		} else {
			label.innerHTML = labelVal;
		}
	});
});

var inputActa = document.querySelectorAll('.inputActa');
Array.prototype.forEach.call(inputActa, function (input) {
	var label = input.nextElementSibling,
		labelVal = label.innerHTML;

	input.addEventListener('change', function (e) {
		var fileName = '';
		if (this.files && this.files.length > 1) {

		}
		else {
			fileName = e.target.value.split("\\").pop();
		}
		if (fileName) {
			$("#acta_constitutiva_filename").html(fileName + '<i class="fas fa-file-check float-right"></i>');
		} else {
			label.innerHTML = labelVal;
		}
	});
});

var inputsIden = document.querySelectorAll('.inputIden');
Array.prototype.forEach.call(inputsIden, function (input) {
	var label = input.nextElementSibling,
		labelVal = label.innerHTML;

	input.addEventListener('change', function (e) {
		var fileName = '';
		if (this.files && this.files.length > 1) {

		}
		else {
			fileName = e.target.value.split("\\").pop();
		}
		if (fileName) {
			$("#identificacion_filename").html(fileName + '<i class="fas fa-file-check float-right"></i>');
		} else {
			label.innerHTML = labelVal;
		}
	});
});

var inputsPoder = document.querySelectorAll('.inputPoder');
Array.prototype.forEach.call(inputsPoder, function (input) {
	var label = input.nextElementSibling,
		labelVal = label.innerHTML;

	input.addEventListener('change', function (e) {
		var fileName = '';
		if (this.files && this.files.length > 1) {

		}
		else {
			fileName = e.target.value.split("\\").pop();
		}
		if (fileName) {
			$("#poder_notarial_filename").html(fileName + '<i class="fas fa-file-check float-right"></i>');
		} else {
			label.innerHTML = labelVal;
		}
	});
});

var inputsHoja = document.querySelectorAll('.inputHoja');
Array.prototype.forEach.call(inputsHoja, function (input) {
	var label = input.nextElementSibling,
		labelVal = label.innerHTML;

	input.addEventListener('change', function (e) {
		var fileName = '';
		if (this.files && this.files.length > 1) {

		}
		else {
			fileName = e.target.value.split("\\").pop();
		}
		if (fileName) {
			$("#hoja_registro_filename").html(fileName + '<i class="fas fa-file-check float-right"></i>');
		} else {
			label.innerHTML = labelVal;
		}
	});
});

var inputsComp = document.querySelectorAll('.inputComp');
Array.prototype.forEach.call(inputsComp, function (input) {
	var label = input.nextElementSibling,
		labelVal = label.innerHTML;

	input.addEventListener('change', function (e) {
		var fileName = '';
		if (this.files && this.files.length > 1) {

		}
		else {
			fileName = e.target.value.split("\\").pop();
		}
		if (fileName) {
			$("#comprobante_filename").html(fileName + '<i class="fas fa-file-check float-right"></i>');
		} else {
			label.innerHTML = labelVal;
		}
	});
});