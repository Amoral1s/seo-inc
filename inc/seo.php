<?php 

//Микроразметка для пунктов меню
class True_Walker_Nav_Menu extends Walker_Nav_Menu {
	/*
	 * Позволяет перезаписать <ul class="sub-menu">
	 */
	function start_lvl(&$output, $depth = 0, $args = array()) {
	// для WordPress 5.3+
	// function start_lvl( &$output, $depth = 0, $args = NULL ) {
		/*
		 * $depth – уровень вложенности, например 2,3 и т д
		 */ 
		$output .= '<ul itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ItemList" class="menu_sublist">';
	}
	/**
	 * @see Walker::start_el()
	 * @since 3.0.0
	 *
	 * @param string $output
	 * @param object $item Объект элемента меню, подробнее ниже.
	 * @param int $depth Уровень вложенности элемента меню.
	 * @param object $args Параметры функции wp_nav_menu
	 */
	function start_el(&$output, $item, $depth = 0, $args = array(), $current_object_id = 0) {
	// для WordPress 5.3+
	// function start_el( &$output, $item, $depth = 0, $args = NULL, $id = 0 ) {
		global $wp_query;           
		/*
		 * Некоторые из параметров объекта $item
		 * ID - ID самого элемента меню, а не объекта на который он ссылается
		 * menu_item_parent - ID родительского элемента меню
		 * classes - массив классов элемента меню
		 * post_date - дата добавления
		 * post_modified - дата последнего изменения
		 * post_author - ID пользователя, добавившего этот элемент меню
		 * title - заголовок элемента меню
		 * url - ссылка
		 * attr_title - HTML-атрибут title ссылки
		 * xfn - атрибут rel
		 * target - атрибут target
		 * current - равен 1, если является текущим элементом
		 * current_item_ancestor - равен 1, если текущим (открытым на сайте) является вложенный элемент данного
		 * current_item_parent - равен 1, если текущим (открытым на сайте) является родительский элемент данного
		 * menu_order - порядок в меню
		 * object_id - ID объекта меню
		 * type - тип объекта меню (таксономия, пост, произвольно)
		 * object - какая это таксономия / какой тип поста (page /category / post_tag и т д)
		 * type_label - название данного типа с локализацией (Рубрика, Страница)
		 * post_parent - ID родительского поста / категории
		 * post_title - заголовок, который был у поста, когда он был добавлен в меню
		 * post_name - ярлык, который был у поста при его добавлении в меню
		 */
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		/*
		 * Генерируем строку с CSS-классами элемента меню
		 */
		$class_names = $value = '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;
 
		// функция join превращает массив в строку
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
		$class_names = ' class="' . esc_attr( $class_names ) . '"';
 
		/*
		 * Генерируем ID элемента
		 */
		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = strlen( $id ) ? ' id="' . esc_attr( $id ) . '"' : '';
 
		/*
		 * Генерируем элемент меню
		 */
		$output .= $indent . '<li' . $id . $value . $class_names .'>';
 
		// атрибуты элемента, title="", rel="", target="" и href=""
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
 
		// ссылка и околоссылочный текст
		$item_output = $args->before;
		$item_output .= '<a itemprop="url"'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= '<meta itemprop="name" content="';
		$item_output .= apply_filters( 'the_title', $item->title, $item->ID );
		$item_output .= '" />';
		$item_output .= $args->after;
 
 		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args, $id );
	}
}


remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );

add_filter( 'wpseo_next_rel_link', '__return_false' );
add_filter( 'wpseo_prev_rel_link', '__return_false' );

//Убираем ul в меню
function remove_wp_nav_menu_ul($menu){
  return preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#'), '', $menu );
}
add_filter( 'wp_nav_menu', 'remove_wp_nav_menu_ul' );

//микроразметка изображений
function micro_image($content) {
global $post;
$pattern = "<img";
$replacement = '<img itemprop="image"';
$content = str_replace($pattern, $replacement, $content);
return $content;
}
add_filter('the_content', 'micro_image');


//микроразметка подзаголовков h2
function micro_alternateName($content) {
global $post;
$pattern = "<h2";
$replacement = '<h2 itemprop="alternateName"';
$content = str_replace($pattern, $replacement, $content);
return $content;
}
add_filter('the_content', 'micro_alternateName');


//микроразметка подзаголовков h3
function micro_alternateName3($content) {
global $post;
$pattern = "<h3";
$replacement = '<h3 itemprop="alternateName"';
$content = str_replace($pattern, $replacement, $content);
return $content;
}
add_filter('the_content', 'micro_alternateName3');


//микроразметка видео
function micro_video($content) {
global $post;
$pattern = "<iframe";
$replacement = '<iframe itemprop="video"';
$content = str_replace($pattern, $replacement, $content);
return $content;
}

//Устраняем ошибку Яндекс валидатора
function artabr_opengraph_fix_yandex($lang) {
	$lang_prefix = 'prefix="og: http://ogp.me/ns# article: http://ogp.me/ns/article#  profile: http://ogp.me/ns/profile# fb: http://ogp.me/ns/fb#"';
	$lang_fix = preg_replace('!prefix="(.*?)"!si', $lang_prefix, $lang);
	return $lang_fix;
	}
add_filter( 'language_attributes', 'artabr_opengraph_fix_yandex',20,1);