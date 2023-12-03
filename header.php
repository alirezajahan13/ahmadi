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
				<div class="mobMenuIcons">
					<a href="#"><svg width="25" height="25" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" transform="rotate(-90)"><path d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0 1 28.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 0 1-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 0 1 391 480Z" fill="#3f3f3f"/></svg></a>
					<svg id="openMobMenu" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#3f3f3f" viewBox="0 0 24.75 24.75" xml:space="preserve"><path d="M0 3.875a2 2 0 0 1 2-2h20.75a2 2 0 0 1 0 4H2a2 2 0 0 1-2-2zm22.75 6.5H2a2 2 0 0 0 0 4h20.75a2 2 0 0 0 0-4zm0 8.5H2a2 2 0 0 0 0 4h20.75a2 2 0 0 0 0-4z"/></svg>
				</div>
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

	<div class="mobMenuStickyParent">
		<div class="mobMenuSticky mainView">
			<a class="logoSection">
				<svg width="65" height="65" fill="#003470" viewBox="0 0 76 76" xmlns="http://www.w3.org/2000/svg" baseProfile="full" xml:space="preserve"><path d="M47.458 53.833h-7.983l-2.09-6.502H25.418l-2.068 6.502h-7.939l11.822-32.51h8.672l11.553 32.51ZM35.433 40.83l-3.41-10.777c-.267-.817-.45-1.792-.552-2.924h-.182a10.556 10.556 0 0 1-.573 2.83l-3.476 10.87h8.193Zm10.88-5.996H64.52v6.334H46.312v-6.334Z"/></svg>
			</a>
			<div class="mobMenuIcons">
				<a href="#"><svg width="25" height="25" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" transform="rotate(-90)"><path d="M391 480c-19.52 0-46.94-7.06-88-30-49.93-28-88.55-53.85-138.21-103.38C116.91 298.77 93.61 267.79 61 208.45c-36.84-67-30.56-102.12-23.54-117.13C45.82 73.38 58.16 62.65 74.11 52a176.3 176.3 0 0 1 28.64-15.2c1-.43 1.93-.84 2.76-1.21 4.95-2.23 12.45-5.6 21.95-2 6.34 2.38 12 7.25 20.86 16 18.17 17.92 43 57.83 52.16 77.43 6.15 13.21 10.22 21.93 10.23 31.71 0 11.45-5.76 20.28-12.75 29.81-1.31 1.79-2.61 3.5-3.87 5.16-7.61 10-9.28 12.89-8.18 18.05 2.23 10.37 18.86 41.24 46.19 68.51s57.31 42.85 67.72 45.07c5.38 1.15 8.33-.59 18.65-8.47 1.48-1.13 3-2.3 4.59-3.47 10.66-7.93 19.08-13.54 30.26-13.54h.06c9.73 0 18.06 4.22 31.86 11.18 18 9.08 59.11 33.59 77.14 51.78 8.77 8.84 13.66 14.48 16.05 20.81 3.6 9.53.21 17-2 22-.37.83-.78 1.74-1.21 2.75a176.49 176.49 0 0 1-15.29 28.58c-10.63 15.9-21.4 28.21-39.38 36.58A67.42 67.42 0 0 1 391 480Z" fill="#3f3f3f"/></svg></a>
				<svg id="openMobMenu" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#3f3f3f" viewBox="0 0 24.75 24.75" xml:space="preserve"><path d="M0 3.875a2 2 0 0 1 2-2h20.75a2 2 0 0 1 0 4H2a2 2 0 0 1-2-2zm22.75 6.5H2a2 2 0 0 0 0 4h20.75a2 2 0 0 0 0-4zm0 8.5H2a2 2 0 0 0 0 4h20.75a2 2 0 0 0 0-4z"/></svg>
			</div>
		</div>
	</div>