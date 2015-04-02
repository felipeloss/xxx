<?php

add_action('init','propanel_of_options');

if (!function_exists('propanel_of_options')) {
function propanel_of_options(){

//Theme Shortname
$shortname = "agroshow";


//Populate the options array
global $tt_options;
$tt_options = get_option('of_options');


//Access the WordPress Pages via an Array
$tt_pages = array();
$tt_pages_obj = get_pages('sort_column=post_parent,menu_order');    
foreach ($tt_pages_obj as $tt_page) {
$tt_pages[$tt_page->ID] = $tt_page->post_name; }
$tt_pages_tmp = array_unshift($tt_pages, "Selecione a página:"); 


//Access the WordPress Categories via an Array
$tt_categories = array();  
$tt_categories_obj = get_categories('hide_empty=0');
foreach ($tt_categories_obj as $tt_cat) {
$tt_categories[$tt_cat->cat_ID] = $tt_cat->cat_name;}
$categories_tmp = array_unshift($tt_categories, "Select a category:");


//Sample Array for demo purposes
$sample_array = array("1","2","3","4","5");


//Sample Advanced Array - The actual value differs from what the user sees
$sample_advanced_array = array("image" => "Imagem","post" => "Postagem"); 


//Folder Paths for "type" => "images"
$sampleurl =  get_template_directory_uri() . '/admin/images/sample-layouts/';










/*-----------------------------------------------------------------------------------*/
/* Create The Custom Site Options Panel
/*-----------------------------------------------------------------------------------*/
$options = array(); // do not delete this line - sky will fall




/* Option Page 1 - Slider e Icones */
$options[] = array( "name" => __('Slider','framework_localize'),
			"type" => "heading");
			
			
$options[] = array( "name" => __('Atenção nene...','framework_localize'),
			"desc" => "",
			"id" => $shortname."_sample_callout",
			"std" => "Cuidado em alterar aqui =)",
			"type" => "info");
			
			
			
$options[] = array( "name" => __('Imagem do Slider','framework_localize'),
			"desc" => __('Imagem do Slider','framework_localize'),
			"id" => $shortname."_slider_imagem",
			"std" => "",
			"type" => "upload");

$options[] = array( "name" => __('Texto do Slider','framework_localize'),
			"desc" => "Texto do Slider",
			"id" => $shortname."_slider_texto",
			"std" => "",
			"type" => "textarea");

$options[] = array( "name" => __('Icones','framework_localize'),
"type" => "heading");

$options[] = array( "name" => __('Imagem do Icone 1','framework_localize'),
			"desc" => __('Imagem do Icone 1','framework_localize'),
			"id" => $shortname."_icone1_imagem",
			"std" => "",
			"type" => "upload");

$options[] = array( "name" => __('Titulo do Icone 1','framework_localize'),
			"desc" => "Titulo do Icone 1 ",
			"id" => $shortname."_icone1_titulo",
			"std" => "",
			"type" => "text");

$options[] = array( "name" => __('Texto do Icone 1','framework_localize'),
			"desc" => "Texto do Icone 1",
			"id" => $shortname."_icone1_texto",
			"std" => "",
			"type" => "textarea");


$options[] = array( "name" => __('Imagem do Icone 2','framework_localize'),
			"desc" => __('Imagem do Icone 2','framework_localize'),
			"id" => $shortname."_icone2_imagem",
			"std" => "",
			"type" => "upload");

$options[] = array( "name" => __('Titulo do Icone 2','framework_localize'),
			"desc" => "Titulo do Icone 2 ",
			"id" => $shortname."_icone2_titulo",
			"std" => "",
			"type" => "text");

$options[] = array( "name" => __('Texto do Icone 2','framework_localize'),
			"desc" => "Texto do Icone 2",
			"id" => $shortname."_icone2_texto",
			"std" => "",
			"type" => "textarea");

$options[] = array( "name" => __('Imagem do Icone 3','framework_localize'),
			"desc" => __('Imagem do Icone 3','framework_localize'),
			"id" => $shortname."_icone3_imagem",
			"std" => "",
			"type" => "upload");

$options[] = array( "name" => __('Titulo do Icone 3','framework_localize'),
			"desc" => "Titulo do Icone 3 ",
			"id" => $shortname."_icone3_titulo",
			"std" => "",
			"type" => "text");

$options[] = array( "name" => __('Texto do Icone 3','framework_localize'),
			"desc" => "Texto do Icone 3",
			"id" => $shortname."_icone3_texto",
			"std" => "",
			"type" => "textarea");

$options[] = array( "name" => __('Imagem do Icone 4','framework_localize'),
			"desc" => __('Imagem do Icone 4','framework_localize'),
			"id" => $shortname."_icone4_imagem",
			"std" => "",
			"type" => "upload");

$options[] = array( "name" => __('Titulo do Icone 4','framework_localize'),
			"desc" => "Titulo do Icone 4 ",
			"id" => $shortname."_icone4_titulo",
			"std" => "",
			"type" => "text");

$options[] = array( "name" => __('Texto do Icone 4','framework_localize'),
			"desc" => "Texto do Icone 4",
			"id" => $shortname."_icone4_texto",
			"std" => "",
			"type" => "textarea");


/* Option Page 2 - Sample Page */
$options[] = array( "name" => __('Seção 1','framework_localize'),
"type" => "heading");
			
			
			
			
$options[] = array( "name" => __('Imagem da Seção 1','framework_localize'),
			"desc" => __('Imagem da Seção 1','framework_localize'),
			"id" => $shortname."_secao1_imagem",
			"std" => "",
			"type" => "upload");

$options[] = array( "name" => __('Titulo da Seção 1','framework_localize'),
			"desc" => "Titulo da Seção 1",
			"id" => $shortname."_secao1_titulo",
			"std" => "",
			"type" => "text");

$options[] = array( "name" => __('Texto do Seção 1','framework_localize'),
			"desc" => "Texto do Seção 1",
			"id" => $shortname."_secao1_texto",
			"std" => "",
			"type" => "textarea");

/* Option Page 2 - Sample Page */
$options[] = array( "name" => __('Seção 2','framework_localize'),
"type" => "heading");
			
			
			
			
$options[] = array( "name" => __('Imagem da Seção 2','framework_localize'),
			"desc" => __('Imagem da Seção 2','framework_localize'),
			"id" => $shortname."_secao2_imagem",
			"std" => "",
			"type" => "upload");

$options[] = array( "name" => __('Texto da Seção 2','framework_localize'),
			"desc" => "Titulo da Seção 2",
			"id" => $shortname."_secao2_titulo",
			"std" => "",
			"type" => "text");

$options[] = array( "name" => __('Texto do Seção 2','framework_localize'),
			"desc" => "Texto do Seção 2",
			"id" => $shortname."_secao2_texto",
			"std" => "",
			"type" => "textarea");

/* Option Page 2 - Sample Page */
$options[] = array( "name" => __('Seção 3','framework_localize'),
"type" => "heading");
			
			
			
				

$options[] = array( "name" => __('Texto da Seção 3','framework_localize'),
			"desc" => "Titulo da Seção 3",
			"id" => $shortname."_secao3_titulo",
			"std" => "",
			"type" => "text");

$options[] = array( "name" => __('Texto do Seção 3','framework_localize'),
			"desc" => "Texto do Seção 3",
			"id" => $shortname."_secao3_texto",
			"std" => "",
			"type" => "textarea");

/* Option Page 2 - Sample Page */
$options[] = array( "name" => __('Seção 4','framework_localize'),
"type" => "heading");
			
			
			
				
$options[] = array( "name" => __('Imagem da Seção 4','framework_localize'),
			"desc" => __('Imagem da Seção 4','framework_localize'),
			"id" => $shortname."_secao4_imagem",
			"std" => "",
			"type" => "upload");

$options[] = array( "name" => __('Texto da Seção 4','framework_localize'),
			"desc" => "Titulo da Seção 4",
			"id" => $shortname."_secao4_titulo",
			"std" => "",
			"type" => "text");

$options[] = array( "name" => __('Texto do Seção 4','framework_localize'),
			"desc" => "Texto do Seção 4",
			"id" => $shortname."_secao4_texto",
			"std" => "",
			"type" => "textarea");

/* Option Page 2 - Sample Page */
$options[] = array( "name" => __('Depoimentos','framework_localize'),
"type" => "heading");
			
			
			
				
$options[] = array( "name" => __('Imagem Depoimento 1','framework_localize'),
			"desc" => __('Imagem Depoimento','framework_localize'),
			"id" => $shortname."_depoimento1_imagem",
			"std" => "",
			"type" => "upload");

$options[] = array( "name" => __('Nome Depoimento 1','framework_localize'),
			"desc" => "Nome Depoimento 1",
			"id" => $shortname."_depoimento1_nome",
			"std" => "",
			"type" => "text");

$options[] = array( "name" => __('Depoimento','framework_localize'),
			"desc" => "Texto do depoimento",
			"id" => $shortname."_depoimento1_texto",
			"std" => "",
			"type" => "textarea");

$options[] = array( "name" => __('Imagem Depoimento 2','framework_localize'),
			"desc" => __('Imagem Depoimento','framework_localize'),
			"id" => $shortname."_depoimento2_imagem",
			"std" => "",
			"type" => "upload");

$options[] = array( "name" => __('Nome Depoimento 2','framework_localize'),
			"desc" => "Nome Depoimento 2",
			"id" => $shortname."_depoimento2_nome",
			"std" => "",
			"type" => "text");

$options[] = array( "name" => __('Depoimento 2','framework_localize'),
			"desc" => "Texto do depoimento 2",
			"id" => $shortname."_depoimento2_texto",
			"std" => "",
			"type" => "textarea");
			
			
					
/* Option Page 2 - Sample Page */
$options[] = array( "name" => __('Outras Opções','framework_localize'),
"type" => "heading");					
					
					
											   
$options[] = array( "name" => __('Código de Rastreamento Google Analytics','framework_localize'),
			"desc" => __('Cole o código de rastreamento do Google Analytics aqui =) .','framework_localize'),
			"id" => $shortname."_google_analytics",
			"std" => "",
			"type" => "textarea");

	
			

/* Option Page 3 - Testando 


$options[] = array( "name" => __('Sample Page','framework_localize'),
			"type" => "heading");
			

$options[] = array( "name" => __('Website Logo','framework_localize'),
			"desc" => __('Upload a custom logo for your Website.','framework_localize'),
			"id" => $shortname."_sitelogo",
			"std" => "",
			"type" => "upload");
			
			
$options[] = array( "name" => __('Favicon','framework_localize'),
			"desc" => __('Upload a 16px x 16px image that will represent your website\'s favicon.<br /><br /><em>To ensure cross-browser compatibility, we recommend converting the favicon into .ico format before uploading. </em>','framework_localize'),
			"id" => $shortname."_favicon",
			"std" => "",
			"type" => "upload");
			
									   
$options[] = array( "name" => __('Tracking Code','framework_localize'),
			"desc" => __('Paste Google Analytics (or other) tracking code here.','framework_localize'),
			"id" => $shortname."_google_analytics",
			"std" => "",
			"type" => "textarea");


*/
				
										
					


update_option('of_template',$options); 					  
update_option('of_shortname',$shortname);

}
}
?>