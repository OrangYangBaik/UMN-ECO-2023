$(document).ready(function() {
  setInterval(buttonClick, 300);
  function buttonClick(){
	  $(".toggle-class-act-1").change(function(){
		const swalWithBootstrapButtons = Swal.mixin({
			customClass: {
				confirmButton: "btn btn-success",
				cancelButton: "btn btn-danger",
			},
			buttonsStyling: false,
		});

		var user_name = $(this).data('filter');

		swalWithBootstrapButtons.fire({
			title: "Kamu Yakin ?",
			text: "Anda akan mengubah status Activity Booth 1 dari user dengan nama "+user_name,
			showCancelButton: true,
			confirmButtonText: "Ubah",
			cancelButtonText: "Batalkan",
			reverseButtons: true,
			allowOutsideClick: false,
		}).then((result) => {
		  var status = ($(this).prop('checked') == true) ? 1 : 0;
		  if (result.isConfirmed) {
			var user_id = $(this).data('id');
			$.ajax({
			  type: "GET",
			  dataType: "json",
			  url: "/changeActivity1Status",
			  data: {'status': status, 'user_id': user_id},
			  success: function(data){
				  console.log('success');
			  }
			});
		  }else{
			if(status == true){
			  $(".toggle-class-act-1").prop("checked", false);
			}else{
			  $(".toggle-class-act-1").prop("checked", true);
			}
		  }
		});
	  });

	  $(".toggle-class-act-2").change(function(){
		const swalWithBootstrapButtons = Swal.mixin({
			customClass: {
				confirmButton: "btn btn-success",
				cancelButton: "btn btn-danger",
			},
			buttonsStyling: false,
		});

		var user_name = $(this).data('filter');

		swalWithBootstrapButtons.fire({
			title: "Kamu Yakin ?",
			text: "Anda akan mengubah status Activity Booth 2 dari user dengan nama "+user_name,
			showCancelButton: true,
			confirmButtonText: "Ubah",
			cancelButtonText: "Batalkan",
			reverseButtons: true,
			allowOutsideClick: false,
		}).then((result) => {
		  var status = ($(this).prop('checked') == true) ? 1 : 0;
		  if (result.isConfirmed) {
			var user_id = $(this).data('id');
			$.ajax({
			  type: "GET",
			  dataType: "json",
			  url: "/changeActivity2Status",
			  data: {'status': status, 'user_id': user_id},
			  success: function(data){
				  console.log('success');
			  }
			});
		  }else{
			if(status == true){
			  $(".toggle-class-act-2").prop("checked", false);
			}else{
			  $(".toggle-class-act-2").prop("checked", true);
			}
		  }
		});
	  });

	  $(".toggle-class-act-3").change(function(){
		const swalWithBootstrapButtons = Swal.mixin({
			customClass: {
				confirmButton: "btn btn-success",
				cancelButton: "btn btn-danger",
			},
			buttonsStyling: false,
		});

		var user_name = $(this).data('filter');

		swalWithBootstrapButtons.fire({
			title: "Kamu Yakin ?",
			text: "Anda akan mengubah status Activity Booth 3 dari user dengan nama "+user_name,
			showCancelButton: true,
			confirmButtonText: "Ubah",
			cancelButtonText: "Batalkan",
			reverseButtons: true,
			allowOutsideClick: false,
		}).then((result) => {
		  var status = ($(this).prop('checked') == true) ? 1 : 0;
		  if (result.isConfirmed) {
			var user_id = $(this).data('id');
			$.ajax({
			  type: "GET",
			  dataType: "json",
			  url: "/changeActivity3Status",
			  data: {'status': status, 'user_id': user_id},
			  success: function(data){
				  console.log('success');
			  }
			});
		  }else{
			if(status == true){
			  $(".toggle-class-act-3").prop("checked", false);
			}else{
			  $(".toggle-class-act-3").prop("checked", true);
			}
		  }
		});
	  });

	  $(".toggle-class-act-4").change(function(){
		const swalWithBootstrapButtons = Swal.mixin({
			customClass: {
				confirmButton: "btn btn-success",
				cancelButton: "btn btn-danger",
			},
			buttonsStyling: false,
		});

		var user_name = $(this).data('filter');

		swalWithBootstrapButtons.fire({
			title: "Kamu Yakin ?",
			text: "Anda akan mengubah status Activity Booth 4 dari user dengan nama "+user_name,
			showCancelButton: true,
			confirmButtonText: "Ubah",
			cancelButtonText: "Batalkan",
			reverseButtons: true,
			allowOutsideClick: false,
		}).then((result) => {
		  var status = ($(this).prop('checked') == true) ? 1 : 0;
		  if (result.isConfirmed) {
			var user_id = $(this).data('id');
			$.ajax({
			  type: "GET",
			  dataType: "json",
			  url: "/changeActivity4Status",
			  data: {'status': status, 'user_id': user_id},
			  success: function(data){
				  console.log('success');
			  }
			});
		  }else{
			if(status == true){
			  $(".toggle-class-act-4").prop("checked", false);
			}else{
			  $(".toggle-class-act-4").prop("checked", true);
			}
		  }
		});
	  });

	  $(".toggle-class-seminar").change(function(){
		const swalWithBootstrapButtons = Swal.mixin({
			customClass: {
				confirmButton: "btn btn-success",
				cancelButton: "btn btn-danger",
			},
			buttonsStyling: false,
		});

		var user_name = $(this).data('filter');

		swalWithBootstrapButtons.fire({
			title: "Kamu Yakin ?",
			text: "Anda akan mengubah status Seminar dari user dengan nama "+user_name,
			showCancelButton: true,
			confirmButtonText: "Ubah",
			cancelButtonText: "Batalkan",
			reverseButtons: true,
			allowOutsideClick: false,
		}).then((result) => {
		  var status = ($(this).prop('checked') == true) ? 1 : 0;
		  if (result.isConfirmed) {
			var user_id = $(this).data('id');
			$.ajax({
			  type: "GET",
			  dataType: "json",
			  url: "/changeSeminarStatus",
			  data: {'status': status, 'user_id': user_id},
			  success: function(data){
				  console.log('success');
			  }
			});
		  }else{
			if(status == true){
			  $(".toggle-class-seminar").prop("checked", false);
			}else{
			  $(".toggle-class-seminar").prop("checked", true);
			}
		  }
		});
	  });
  }
});