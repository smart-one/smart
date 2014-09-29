<!-- Здесь пишем все скрытые блоки на странице
Подключение происходит из footer.php -->

<div class="remodal" data-remodal-id="header_modal">
    <h2>Расскажите мне как это работает</h2>
    <form action="/" method="POST" class="modal-form" id="header_form">
    	<input type="text" placeholder="Имя" name="name">
    	<input type="tel" placeholder="Телефон*" name="phone" required>
    	<input type="submit" value="ПОЗВОНИТЕ МНЕ!" name="submit">
    </form>
</div>
<div class="remodal" data-remodal-id="costs_modal">
    <h2>Задать вопрос специалисту</h2>
    <form action="/" method="POST" class="modal-form" id="faq_form">
    	<input type="text" placeholder="Имя" name="name">
    	<input type="tel" placeholder="Телефон*" name="phone" required>
    	<input type="submit" value="ПОЗВОНИТЕ МНЕ!" name="submit">
    </form>
</div>
<div class="remodal" data-remodal-id="footer_modal">
    <h2>Заказать звонок</h2>
    <form action="/" method="POST" class="modal-form" id="footer_form">
    	<input type="text" placeholder="Имя" name="name">
    	<input type="tel" placeholder="Телефон*" name="phone" required>
    	<input type="submit" value="ПОЗВОНИТЕ МНЕ!" name="submit">
    </form>
</div>

<div class="remodal reviews-remodal" data-remodal-id="review1_modal">
    <h2>Узнать о заявках на бурение скважин в вашем регионе</h2>
    <form action="/" method="POST" class="modal-form" id="review1_form">
    	<input type="text" placeholder="Имя*" name="name" required>
    	<input type="tel" placeholder="Телефон*" name="phone" required>
    	<input type="text" placeholder="Регион, Город" name="city">
    	<input type="number" placeholder="Желаемое количество заявок в месяц" name="leads_amount">
    	<input type="submit" value="РАССКАЖИТЕ МНЕ!" name="submit">
    </form>
    <p>спешите! такой информации больше<br> ни у кого нет!</p>
</div>
<div class="remodal reviews-remodal" data-remodal-id="review3_modal">
    <h2>Узнать о заявках на ремонт квартир в вашем регионе</h2>
    <form action="/" method="POST" class="modal-form" id="review3_form">
    	<input type="text" placeholder="Имя*" name="name" required>
    	<input type="tel" placeholder="Телефон*" name="phone" required>
    	<input type="text" placeholder="Регион, Город" name="city">
    	<input type="number" placeholder="Желаемое количество заявок в месяц" name="leads_amount">
    	<input type="submit" value="РАССКАЖИТЕ МНЕ" name="submit">
    </form>
    <p>спешите! такой информации больше<br> ни у кого нет!</p>
</div>

<div class="remodal" data-remodal-id="thx_modal">
    <h2>Спасибо за Вашу заявку</h2>
    <p>Наш специалист по лидогенерации свяжется с Вами в ближайшее время.</p>
    <p>Заявки, полученные после 18.00 будут обработаны в начале 
    	следующего рабочего дня (пн - пт, после 10:00), спасибо за понимание.</p>
</div>

