/**
* ---------------------------------------------------------------------------------------------------------------------------------------
* All form interactions
* ---------------------------------------------------------------------------------------------------------------------------------------
*/
$(document).on('confirm', '[data-remodal-id=thx_modal]', function () {
	var inst = $.remodal.lookup[$('[data-remodal-id=pay_modal]').data('remodal')];
    inst.open();
    yaCounter25566455.reachGoal("pay_attempt");

});

$(document).ready(function(){

	var metrikaGoalList = {   //[form_id] : [metrika_mark]
		order_form: 'ORDER',
		reviews_form: "review",
		message_form: "message"
	};

	$("form").submit(function(e){

		e.preventDefault();
		var activeForm = $(this);
		var activeFormId = activeForm.attr("id");

		if(activeFormId === "order_form"){

			var currentSliderState = parseInt($("#order_slider").find("ul").css("left"));
			var order_slider_elems = $("#order_slider").find("li");
			var order_sum;
			var order_amount; 

			if(currentSliderState === 0){
				order_amount = order_slider_elems.first().data("amount");
				order_sum = order_slider_elems.first().data("sum");
				
			}
			else if(currentSliderState == -300){
				order_sum = order_slider_elems.eq(1).data("sum");
				order_amount = order_slider_elems.eq(1).data("amount");
			}
			else{
				order_sum = order_slider_elems.eq(2).data("sum");
				order_amount = order_slider_elems.eq(2).data("amount");
			}

			order_sum += " рублей";
			order_amount += " бутылочек";

			order_slider_elems.closest("#order_form_container").find("#order_sum").val(order_sum).end().find("#order_amount").val(order_amount);
		}
		

		$.post("/processing.php", activeForm.serialize(), function(data){

    		var inst = $.remodal.lookup[$('.remodal').data('remodal')];
    		inst.close();

			if(data == "success") { //При возврате от сервера ответа "success"
				// yaCounter25566455.reachGoal('total');

				for(var key in metrikaGoalList){ //Перебор свойств хэша ключей метрики
					if(activeFormId == key) { //При совпадении id submit формы с ключом хэша целей метрики
						yaCounter25566455.reachGoal(metrikaGoalList[key]);
					}
				}

				if(activeFormId === "order_form"){
					inst = $.remodal.lookup[$('[data-remodal-id=thx_modal]').data('remodal')];
		    		inst.open();
				}
				else{
					inst = $.remodal.lookup[$('[data-remodal-id=thx2_modal]').data('remodal')];
					inst.open();

					setTimeout(function(){
	    				inst.close();
	    			},5000);
				}

				
	    		
				// console.log("Target 'total' just reached!");
			}
			// else data ? console.log(data) : console.log("Nothing returned");

			activeForm.find("input, textarea").not("[type=submit]").val("");
			activeForm.find("select").val(0);
			
		});

	});

});

