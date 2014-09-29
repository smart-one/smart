/**
* ---------------------------------------------------------------------------------------------------------------------------------------
* All form interactions
* ---------------------------------------------------------------------------------------------------------------------------------------
*/

$(document).ready(function(){
	var metrikaGoalList = {   //[form_id] : [metrika_mark]
		offer_form: "offer",
		account_form: "account",
		spec_offer: "special",
		spec_offer_bottom: "discount",
		header_form: "callback",
		faq_form: "faq",
		footer_form: "footer",
		review1_form: "review1",
		review3_form: "review3"
	};
	$("form").submit(function(e){
		e.preventDefault();
		var activeForm = $(this);
		var activeFormId = activeForm.attr("id");
		
		yaCounter26380803.reachGoal('attempt'); //Если отправил форму (даже с ошибками)

		$.post("/processing.php", activeForm.serialize(), function(data){

    		var inst = $.remodal.lookup[$('.remodal').data('remodal')];
    		inst.close();

			if(data == "success") { //При возврате от сервера ответа "success"
				yaCounter26380803.reachGoal('total');
				for(var key in metrikaGoalList){ //Перебор свойств хэша ключей метрики
					if(activeFormId == key) { //При совпадении id submit формы с ключом хэша целей метрики
						yaCounter26380803.reachGoal(metrikaGoalList[key]);
					}
				}
			}
			activeForm.find("input, textarea").not("[type=submit]").val("");
		});
	});
});

