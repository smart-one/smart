<!-- Здесь пишем все скрытые блоки на странице
Подключение происходит из footer.php -->
<!-- 
	Just test comment
 -->
<div class="remodal order_modal innerWrapper row" id="order_form_container" data-remodal-id="order_modal">

	<form action="/" id="order_form" class="text-center">
		<h3 class="">Быстрый заказ</h3>
		<input name="isLead" type="hidden" value="true">
		<div class="form-controls phone_controls">
			<input id="order_phone" required name="order_phone" class="" type="phone" placeholder="Телефон">
			<p class="label">обязательное</p>
		</div>
		<div class="form-controls">
			<input id="order_name" required name="order_name" class="" type="text" placeholder="Имя">
		</div>

		<div class="detailed_form">
			<div class="form-controls">
				<input id="order_adress" name="order_adress" class="" type="text" placeholder="Адрес">
			</div>
			<div class="form-controls">
				<input id="order_email" name="order_email" class="" type="email" placeholder="E-mail">
			</div>
		</div>

		<p class="detailed_link_container">
			<a href="" class="detailed">детальная информация</a>
		</p>

		<input type="hidden" name="order_sum" id="order_sum">
		<input type="hidden" name="order_amount" id="order_amount">

		<button class="btn btn-primary" type="submit">Оформить заказ</button>
	</form>

	<div id="orderSliderContainer">
		<div class="jcarousel" id="order_slider">
			<ul class="group">
				<li data-sum="1200" data-amount="6">
					<img src="img/offer1.png" alt="">
					<div class="credits">
						<p class="amount">Базовый - 6 бутылочек</p>
						<p class="price">Сумма: 1200 рублей</p>
						<p class="extra">+ 300 рублей доставка</p>
					</div>
				</li>
				<li data-sum="1920" data-amount="12">
					<img src="img/order2.png" alt="">
					<div class="credits">
						<p class="amount">Стандартный - 12 бутылочек</p>
						<p class="price">Сумма: 1920 рублей</p>
						<p class="extra">+ Бесплатная доставка по СПб</p>
						<p class="extra">+ Фирменный брелок-фонарик</p>
					</div>
				</li>
				<li data-sum="3360" data-amount="24">
					<img src="img/offer3.png" alt="">
					<div class="credits">
						<p class="amount">Запасливый - 24 бутылочки</p>
						<p class="price">Сумма: 3360 рублей</p>
						<p class="extra"><b>+</b> Бесплатная доставка по РФ</p>
						<p class="extra"><b>+</b> Фирменный брелок-фонарик</p>
					</div>
				</li>
			</ul>
		</div>
		
		<div class="controls">
			<a href="/" class="i i_order_prev" id="orderSliderPrev"></a>
			<a href="/" class="i i_order_next" id="orderSliderNext"></a>
		</div>
	</div>
		


</div>


<div class="remodal" data-remodal-id="reviews_modal">

	<h3 class="">Оставить отзыв</h3>

	<form action="/" id="reviews_form" class="text-center">
		<input name="isLead" type="hidden" value="false">
		<input id="reviews_name" required name="reviews_name" class="" type="text" placeholder="Евгений">
		<input id="reviews_social" required name="reviews_social" class="" type="text" placeholder="Ссылка на профиль в контакте">
		<textarea name="reviews_text" id="reviews_text" cols="30" rows="10" placeholder="Текст отзыва"></textarea>
	</form>

	<button class="btn btn-primary" type="submit" form="reviews_form">Оставить отзыв</button>

</div>

<div class="remodal" data-remodal-id="message_modal">

	<h3 class="">Будем рады ответить Вам!</h3>

	<form action="/" id="message_form" class="text-center">
		<input name="isLead" type="hidden" value="false">
		<input id="message_name" required name="message_name" class="" type="text" placeholder="Имя">
		<input id="message_social" required name="message_email" class="" type="email" placeholder="Email для ответа">
		<textarea name="message_text" id="message_text" cols="30" rows="10" placeholder="Ваше сообщение"></textarea>
	</form>

	<button class="btn btn-primary" type="submit" form="message_form">Отправить</button>

</div>

<div class="remodal" data-remodal-id="thx_modal">

	<h3>Спасибо! Ваш заказ оформлен.</h3>

	<p class="promo">Оплачивайте банковской картой и получайте 10% скидку + iPad mini*</p>

	<img src="img/ipad.jpg" alt="">

	<p class="details">iPad mini разыгрывается каждый месяц, среди оплативших заказ с банковской карты</p>

	<button class="btn btn-primary remodal-confirm">Оплатить онлайн</button>

</div>

<div class="remodal" data-remodal-id="thx2_modal">

	<h3>Спасибо! Ваш отзыв/сообщение доставлено!</h3>
	<button class="btn btn-primary remodal-confirm">Закрыть</button>

</div>


<div class="remodal" data-remodal-id="pay_modal">

	<h3>Очень жаль, но онлайн оплата временно не доступна!</h3>
	<button class="btn btn-primary remodal-confirm">Закрыть</button>

</div>

