<section class="wrapper">
			<h2 class="tweet-form__title"><?php echo $title; ?></h2>
			<div class="tweet-form__error">Что-то пошло не так</div>
			<form class="tweet-form" action="<?php echo get_url('include/sign_up.php');?>" method = "post"> 
				<div class="tweet-form__wrapper_inputs">
				</div>
				<div class="tweet-form__btns_center">
					<button class="tweet-form__btn_center" type="submit">Зарегистрироваться</button>
				</div>
			</form>
		</section> 