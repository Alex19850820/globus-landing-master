<?php
/**
 * Created by PhpStorm.
 * User: Neo
 * Date: 28.03.2018
 * Time: 14:34
 */

global $wpdb;

if(isset($_FILES['file_name'])) {
	
	$table_name = $wpdb->prefix . 'property';
	
	//Проверяем на существование таблицы
	if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {

		// тут мы добавляем таблицу в базу данных
		$sql = "	CREATE TABLE " . $table_name . " (
					id int(10) unsigned NOT NULL AUTO_INCREMENT,
					housing varchar(255) NOT NULL default '',
					section tinyint(3) unsigned NOT NULL default  '0',
					flats tinyint(3) unsigned NOT NULL default  '0' ,
					floor smallint(5) unsigned NOT NULL default  '0' ,
					area float unsigned NOT NULL  default '0.0',
					decoration VARCHAR(255) NOT NULL,
					price decimal(12,2) unsigned NOT NULL default  '0'  ,
					region VARCHAR(255) NOT NULL default '',
					jk_id VARCHAR(255) NOT NULL default '',
					PRIMARY KEY  (id),
					UNIQUE KEY id (id)
				);";
	
		require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
		dbDelta($sql);
//		fw_print($wpdb->last_error);
	}
	
	// Каталог, в который мы будем принимать файл:
	$uploaddir = get_template_directory().'/includes/uploads/';
	
	$uploadfile = $uploaddir.basename($_FILES['file_name']['name']);
	
	
	// Копируем файл из каталога для временного хранения файлов:
	if (copy($_FILES['file_name']['tmp_name'], $uploadfile))
	{
		echo "<h3>Файл успешно загружен на сервер</h3>";
	}
	else { echo "<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>"; exit; }
	
	
	$loadfile = $_FILES['file_name']['name']; // получаем имя загруженного файла

	require_once get_template_directory()."/includes/phpexcel/Classes/PHPExcel/IOFactory.php"; // подключаем класс для доступа к файлу
	
	// Удалим все старые записи из таблицы
	$wpdb->delete( $wpdb->prefix . 'property', array( 'jk_id' => $_POST['jk'] ) );
	
	$objPHPExcel = PHPExcel_IOFactory::load(get_template_directory().'/includes/uploads/'.$loadfile);
	
	foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) // цикл обходит страницы файла
	{
		$highestRow = $worksheet->getHighestRow(); // получаем количество строк
		$highestColumn = $worksheet->getHighestColumn(); // а так можно получить количество колонок
		
		for ($row = 2; $row <= $highestRow; ++ $row) // обходим все строки
		{
			$cell1 = $worksheet->getCellByColumnAndRow(0, $row); //артикул
			$cell2 = $worksheet->getCellByColumnAndRow(1, $row); //наименование
			$cell3 = $worksheet->getCellByColumnAndRow(2, $row); //количество
			$cell4 = $worksheet->getCellByColumnAndRow(3, $row); //цена
			$cell5 = $worksheet->getCellByColumnAndRow(4, $row); //валюта
			$cell6 = $worksheet->getCellByColumnAndRow(5, $row); //единица измерения
			$cell7 = $worksheet->getCellByColumnAndRow(6, $row); //единица измерения
			$cell8 = $worksheet->getCellByColumnAndRow(7, $row); //единица измерения
			$cell9 = $worksheet->getCellByColumnAndRow(8, $row); //единица измерения
			
			
			$wpdb->insert('wp_property', ['housing' => $cell1, 'section' => $cell2, 'flats' => $cell3, 'floor' => $cell4, 'area' => $cell5, 'decoration' => $cell6, 'price' => $cell7, 'region' => $cell8, 'jk_id' => $_POST['jk']], ['%s', '%d', '%d', '%d', '%f', '%s', '%f', '%s', '%s']);
			
			
		}
	}
	
	//удфляем файл
	unlink($uploadfile);
}
global $post;
$postslist = get_posts( array( 'category'=>'Новостройки' ) );

?>
<form method="post"  enctype="multipart/form-data">
	<input type="file" name="file_name" required>
	<select name="jk" required>
		<option value=""  >Укажите ЖК</option>
		<?php foreach ($postslist as $post):?>
			<option value="<?=$post->post_title?>"><?=$post->post_title?></option>
		<?php endforeach;?>
	</select>
	<input type="submit">
</form>