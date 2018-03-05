<?php if ( ! defined( 'FW' ) ) {
    die( 'Forbidden' );
}
/*
  * Верстка шорткода
  * весь контент лежит в переменной $atts
  */

?>
<!-- start header-search.html-->
<div class="header-search">
	<form action="#">
		<div class="custom-select">
			<select>
				<?php $i=0; foreach ( $atts['regions'] as $region ): ?>
					<option value="<?=$i?>"><?=$region['title']; $i++;?></option>
				<?php endforeach;?>
			</select>
		</div>
		<div class="custom-select">
			<?php $i = 0;?>
			<select>
				<?php foreach ( $atts['objects'] as $region ): ?>
					<option value="<?=$i?>"><?=$region['title']; $i++;?></option>
				<?php endforeach;?>
			</select>
		</div>
		<input type="search" name="header-search" placeholder="Введите название ЖК, объекта, района..">
		<a href="#" class="header-search__btn"></a>
	</form>
</div>
<!-- end header-search.html-->
