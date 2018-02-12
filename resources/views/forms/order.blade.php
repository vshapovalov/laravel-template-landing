<form class="reg_form {{ $modal ? 'is-modal' : '' }}" action="">
    <h1 class="reg_form_h1">{{ data_content('order_form_title') }}</h1>
    <p class="reg_form_p">{{ data_content('order_form_description') }}</p>
    <input type="text" class="reg_input control-value" placeholder="Ваше имя" name="name" required>
    <input type="email" class="reg_input control-value" placeholder="Ваш e-mail" name="email" required>
    <input type="text" class="reg_input control-value" placeholder="Ваш телефон" name="phone" required>
    <a class="big_yellow_button js-order-send">{{ data_content('program_button') }}</a>
</form>