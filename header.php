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
	<div class="mainHeaderBack whiteBg">
		<div class="mainHeader mainView">
			<div class="menuSectionUp">
				<a class="logoSection">
					<svg width="65" height="65" fill="#003470" viewBox="0 0 76 76" xmlns="http://www.w3.org/2000/svg" baseProfile="full" xml:space="preserve"><path d="M47.458 53.833h-7.983l-2.09-6.502H25.418l-2.068 6.502h-7.939l11.822-32.51h8.672l11.553 32.51ZM35.433 40.83l-3.41-10.777c-.267-.817-.45-1.792-.552-2.924h-.182a10.556 10.556 0 0 1-.573 2.83l-3.476 10.87h8.193Zm10.88-5.996H64.52v6.334H46.312v-6.334Z"/></svg>
				</a>
				<?php echo do_shortcode('[fibosearch]'); ?>
				<a class="callNumberHeader generalButton noArrowButton" href="#">
					<span>09125005590</span>
					<svg width="20" height="20" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path fill="#d4dfeb" d="M12.2 10c-1.1-.1-1.7 1.4-2.5 1.8C8.4 12.5 6 10 6 10S3.5 7.6 4.1 6.3c.5-.8 2-1.4 1.9-2.5-.1-1-2.3-4.6-3.4-3.6C.2 2.4 0 3.3 0 5.1c-.1 3.1 3.9 7 3.9 7 .4.4 3.9 4 7 3.9 1.8 0 2.7-.2 4.9-2.6 1-1.1-2.5-3.3-3.6-3.4z"></path></svg>
				</a>
				<div class="mobMenuIcons">
					<a href="#"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(-90)"><path d="M19.062 20.218c-1.954 1.955-6.96.118-11.179-4.101-4.22-4.22-6.056-9.225-4.101-11.18l1.286-1.286c.889-.888 2.353-.865 3.27.053l1.993 1.993c.917.917.94 2.38.052 3.27l-.276.275a1.333 1.333 0 0 0-.08 1.794c.429.52.892 1.04 1.395 1.542.502.503 1.021.966 1.542 1.396.54.446 1.314.399 1.793-.081l.277-.276c.888-.889 2.352-.865 3.27.052l1.992 1.993c.918.917.941 2.381.053 3.27l-1.287 1.286Z" fill="#3F3F3F"/></svg></a>
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
					<a href="http://localhost/ahmadi/my-account/">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="4" cy="4" r="4" transform="matrix(-1 0 0 1 16 3)" fill="#3F3F3F" stroke="#3F3F3F" stroke-width="1.5"/><path d="M5 16.935c0-.86.54-1.628 1.351-1.917a16.794 16.794 0 0 1 11.298 0A2.036 2.036 0 0 1 19 16.934v1.315c0 1.188-1.052 2.1-2.227 1.932l-.955-.136a27.002 27.002 0 0 0-7.636 0l-.955.136A1.951 1.951 0 0 1 5 18.25v-1.315Z" fill="#3F3F3F" stroke="#3F3F3F" stroke-width="1.5"/></svg>
						<span>ورود / ثبت‌نام</span>
					</a>
					<a href="http://localhost/ahmadi/cart/">
						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M1.265 2.853a.75.75 0 0 1 .882-.588l1.05.21a2.75 2.75 0 0 1 2.197 2.422l.085.853h13.575a3.05 3.05 0 0 1 2.96 3.79l-1.124 4.49a4.25 4.25 0 0 1-4.123 3.22H7.774a2.75 2.75 0 0 1-2.73-2.422l-.99-8.246-.153-1.535a1.25 1.25 0 0 0-.999-1.102l-1.05-.21a.75.75 0 0 1-.587-.882ZM9 12.75a.75.75 0 0 0 0 1.5h4a.75.75 0 0 0 0-1.5H9Z" fill="#3F3F3F"/><circle cx="8.5" cy="20" r="1.5" fill="#3F3F3F"/><circle cx="17.5" cy="20" r="1.5" fill="#3F3F3F"/></svg>
						<span>سبد خرید</span>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="mobMenuStickyParent whiteBg">
		<div class="mobMenuSticky mainView">
			<a class="logoSection">
				<svg width="65" height="65" fill="#003470" viewBox="0 0 76 76" xmlns="http://www.w3.org/2000/svg" baseProfile="full" xml:space="preserve"><path d="M47.458 53.833h-7.983l-2.09-6.502H25.418l-2.068 6.502h-7.939l11.822-32.51h8.672l11.553 32.51ZM35.433 40.83l-3.41-10.777c-.267-.817-.45-1.792-.552-2.924h-.182a10.556 10.556 0 0 1-.573 2.83l-3.476 10.87h8.193Zm10.88-5.996H64.52v6.334H46.312v-6.334Z"/></svg>
			</a>
			<div class="mobMenuIcons">
				<a href="#"><svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" transform="rotate(-90)"><path d="M19.062 20.218c-1.954 1.955-6.96.118-11.179-4.101-4.22-4.22-6.056-9.225-4.101-11.18l1.286-1.286c.889-.888 2.353-.865 3.27.053l1.993 1.993c.917.917.94 2.38.052 3.27l-.276.275a1.333 1.333 0 0 0-.08 1.794c.429.52.892 1.04 1.395 1.542.502.503 1.021.966 1.542 1.396.54.446 1.314.399 1.793-.081l.277-.276c.888-.889 2.352-.865 3.27.052l1.992 1.993c.918.917.941 2.381.053 3.27l-1.287 1.286Z" fill="#3F3F3F"/></svg></a>
				<svg id="openMobMenu" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="#3f3f3f" viewBox="0 0 24.75 24.75" xml:space="preserve"><path d="M0 3.875a2 2 0 0 1 2-2h20.75a2 2 0 0 1 0 4H2a2 2 0 0 1-2-2zm22.75 6.5H2a2 2 0 0 0 0 4h20.75a2 2 0 0 0 0-4zm0 8.5H2a2 2 0 0 0 0 4h20.75a2 2 0 0 0 0-4z"/></svg>
			</div>
		</div>
	</div>