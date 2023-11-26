<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ahmadi
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<div class="mainHeaderBack">
		<div class="mainHeader mainView">
			<div class="menuSectionUp">
				<a class="logoSection">
					<svg width="65" height="65" fill="#003470" viewBox="0 0 76 76" xmlns="http://www.w3.org/2000/svg" baseProfile="full" xml:space="preserve"><path d="M47.458 53.833h-7.983l-2.09-6.502H25.418l-2.068 6.502h-7.939l11.822-32.51h8.672l11.553 32.51ZM35.433 40.83l-3.41-10.777c-.267-.817-.45-1.792-.552-2.924h-.182a10.556 10.556 0 0 1-.573 2.83l-3.476 10.87h8.193Zm10.88-5.996H64.52v6.334H46.312v-6.334Z"/></svg>
				</a>
				<a class="callNumberHeader generalButton noArrowButton" href="#">
					<span>09125005590</span>
					<svg width="20" height="20" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill="#d4dfeb" d="M12.2 10c-1.1-.1-1.7 1.4-2.5 1.8C8.4 12.5 6 10 6 10S3.5 7.6 4.1 6.3c.5-.8 2-1.4 1.9-2.5-.1-1-2.3-4.6-3.4-3.6C.2 2.4 0 3.3 0 5.1c-.1 3.1 3.9 7 3.9 7 .4.4 3.9 4 7 3.9 1.8 0 2.7-.2 4.9-2.6 1-1.1-2.5-3.3-3.6-3.4z"></path></svg>
				</a>
			</div>
			<div class="menuSectionDown">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'container_class'=>'mainMenu'
						)
					);
				?>
				<div class="accountCartSection">
					<a href="#">
						<svg width="20" height="20" viewBox="0 0 24 24" data-name="Flat Color" xmlns="http://www.w3.org/2000/svg" class="icon flat-color"><path d="M21 20a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2 6 6 0 0 1 6-6h6a6 6 0 0 1 6 6Zm-9-8a5 5 0 1 0-5-5 5 5 0 0 0 5 5Z" style="fill:#3f3f3f"/></svg>
						<span>ورود / ثبت‌نام</span>
					</a>
					<a href="#">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#3f3f3f" viewBox="0 0 52 52" xml:space="preserve"><path d="M20.1 26H44c.7 0 1.4-.5 1.5-1.2l4.4-15.4c.3-1.1-.5-2-1.5-2H11.5l-.6-2.3C10.6 4 9.6 3.3 8.6 3.3h-4c-1.3 0-2.5 1-2.6 2.3C1.9 7 3.1 8.2 4.4 8.2h2.3l7.6 25.7c.3 1.1 1.2 1.8 2.3 1.8h28.2c1.3 0 2.5-1 2.6-2.3.1-1.4-1.1-2.6-2.4-2.6H20.2c-1.1 0-2-.7-2.3-1.7V29c-.5-1.5.7-3 2.2-3z"/><circle cx="20.6" cy="44.6" r="4"/><circle cx="40.1" cy="44.6" r="4"/></svg>
						<span>سبد خرید</span>
					</a>
				</div>
			</div>
		</div>
	</div>