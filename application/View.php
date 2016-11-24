<?php

/*
 * -------------------------------------
 * www.dlancedu.com | Jaisiel Delance
 * framework mvc basico
 * View.php
 * -------------------------------------
 */

require_once ROOT . 'libs' . DS . 'smarty' . DS . 'libs' . DS . 'Smarty.class.php';

class View extends Smarty
{
    private $_request;
    private $_js;
	private $_css;
    private $_acl;
    private $_rutas;
    private $_jsPlugin;
    private $_template;
    private $_item;
    
    public function __construct(Request $peticion, ACL $_acl) 
    {
        parent::__construct();
        $this->_request = $peticion;
        $this->_js = array();
		$this->_css = array();
        $this->_acl = $_acl;
        $this->_rutas = array();
        $this->_jsPlugin = array();
        $this->_template = DEFAULT_LAYOUT;
        $this->_item = '';
        
        $modulo = $this->_request->getModulo();
        $controlador = $this->_request->getControlador();
        
        if($modulo){
            $this->_rutas['view'] = ROOT . 'modules' . DS . $modulo . DS . 'views' . DS . $controlador . DS;
            $this->_rutas['js'] = BASE_URL . 'modules/' . $modulo . '/views/' . $controlador . '/js/';
        }
        else{
            $this->_rutas['view'] = ROOT . 'views' . DS . $controlador . DS;
			$this->_rutas['actualView'] = BASE_URL . 'views' . DS . $controlador . DS;
            $this->_rutas['js'] = BASE_URL . 'views/' . $controlador . '/js/';
			$this->_rutas['css'] = BASE_URL . 'views/' . $controlador . '/css/';
			$this->_rutas['img'] = BASE_URL . 'views/' . $controlador . '/img/';
        }
    }
    
    public function renderizar($vista, $item = false, $noLayout = false)
    {
        if($item){
            $this->_item = $item;
        }
        
        $this->template_dir = ROOT . 'views' . DS . 'layout'. DS . $this->_template . DS;
        $this->config_dir = ROOT . 'views' . DS . 'layout' . DS . $this->_template . DS . 'configs' . DS;
        $this->cache_dir = ROOT . 'tmp' . DS .'cache' . DS;
        $this->compile_dir = ROOT . 'tmp' . DS .'template' . DS;
        
        $menu = array(
            array(
                'id' => 'inicio',
                'titulo' => 'Inicio',
                'enlace' => BASE_URL,
                'imagen' => '',
				'dropdown' => ''
                ),
				
			array(
                'id' => 'institucional',
                'titulo' => 'Institucional',
                'enlace' => BASE_URL,
                'imagen' => '',
                'dropdown' => array (
							  		array(
               					    	'id' => 'institucional',
                						'titulo' => 'Sobre Nosotros',
               							'enlace' => BASE_URL.'institucional/nosotros',
                						'imagen' => '',
										'dropdown' => ''
               						),
									
									array(
               					    	'id' => 'institucional',
                						'titulo' => 'Logo y Desarrollo',
               							'enlace' => BASE_URL.'institucional/logo',
                						'imagen' => '',
										'dropdown' => ''
										
               						),
									
									array(
               					    	'id' => 'institucional',
                						'titulo' => 'Fotos',
               							'enlace' => BASE_URL.'institucional/fotos',
                						'imagen' => '',
										'dropdown' => ''
               						),
							  )
                ),
			
			array(
                'id' => 'novedades',
                'titulo' => 'Novedades',
                'enlace' => BASE_URL . 'novedades',
                'imagen' => '',
				'dropdown' => ''
                ),
			
			array(
                'id' => 'socios',
                'titulo' => 'Socios',
                'enlace' => BASE_URL . 'socios',
                'imagen' => '',
				'dropdown' => ''
                ),
			
			array(
                'id' => 'provedores',
                'titulo' => 'Provedores',
                'enlace' => BASE_URL . 'proveedores',
                'imagen' => '',
				'dropdown' => ''
                ),
				
			array(
                'id' => 'contacto',
                'titulo' => 'Contacto',
                'enlace' => BASE_URL,
                'imagen' => '',
				'dropdown' => array (
							  		array(
                						'id' => 'contacto',
               							'titulo' => 'Sumate a la Red',
               							'enlace' => BASE_URL . 'contacto/sumate',
                						'imagen' => '',
										'dropdown' => ''
                					),
									
									array(
                						'id' => 'contacto',
               							'titulo' => 'Consulta',
               							'enlace' => BASE_URL . 'contacto',
                						'imagen' => '',
										'dropdown' => ''
                					)
							  )
                )
			
        );
        
        /*if(!Session::get('autenticado')){    PARA CUANDO SE NECESITA MANEJO DE USUARIOS 
            $menu[] = array(
                'id' => 'registro',
                'titulo' => 'Registro',
                'enlace' => BASE_URL . 'usuarios/registro',
                'imagen' => 'icon-book'
            );
        }*/
        
        
        $_params = array(
			'view' => $this->_rutas['actualView'],
            'ruta_css' => BASE_URL . 'views/layout/' . $this->_template . '/css/',
            'ruta_img' => BASE_URL . 'views/layout/' . $this->_template . '/img/',
            'ruta_js' => BASE_URL . 'views/layout/' . $this->_template . '/js/',
            'menu' => $menu,
            'item' => $this->_item,
			'img' => $this->_rutas['img'],
			'css' => $this->_css,
            'js' => $this->_js,
            'js_plugin' => $this->_jsPlugin,
            'root' => BASE_URL,
            'configs' => array(
                'app_name' => APP_NAME,
                'app_slogan' => APP_SLOGAN,
                'app_company' => APP_COMPANY
            )
        );
                
        if(is_readable($this->_rutas['view'] . $vista . '.tpl')){
            if($noLayout){
                $this->template_dir = $this->_rutas['view'];
                $this->display($this->_rutas['view'] . $vista . '.tpl');
                exit;
            }
            
            $this->assign('_contenido', $this->_rutas['view'] . $vista . '.tpl');
        } 
        else {
            throw new Exception('Error de vista');
        }
        
        $this->assign('widgets', $this->getWidgets());
        $this->assign('_acl', $this->_acl);
        $this->assign('_layoutParams', $_params);
        $this->display('template.tpl');
    }
	
	public function setCss(array $css)
    {
        if(is_array($css) && count($css)){
            for($i=0; $i < count($css); $i++){
                $this->_css[] = $this->_rutas['css'] . $css[$i] . '.css';
            }
        } 
        else {
            throw new Exception('Error de css');
        }
    }
    
    public function setJs(array $js)
    {
        if(is_array($js) && count($js)){
            for($i=0; $i < count($js); $i++){
                $this->_js[] = $this->_rutas['js'] . $js[$i] . '.js';
            }
        } 
        else {
            throw new Exception('Error de js');
        }
    }
    
    public function setJsPlugin(array $js)
    {
        if(is_array($js) && count($js)){
            for($i=0; $i < count($js); $i++){
                $this->_jsPlugin[] = BASE_URL . 'public/js/' .  $js[$i] . '.js';
            }
        } 
        else {
            throw new Exception('Error de js plugin');
        }
    }
    
    public function setTemplate($template)
    {
        $this->_template = (string) $template;
    }
    
    public function widget($widget, $method, $options = array())
    {
        if(!is_array($options)){
            $options = array($options);
        }
        
        if(is_readable(ROOT . 'widgets' . DS . $widget . '.php')){
            include_once ROOT . 'widgets' . DS . $widget . '.php';
            
            $widgetClass = $widget . 'Widget';
            
            if(!class_exists($widgetClass)){
                throw new Exception('Error clase widget');
            }
            
            if(is_callable($widgetClass, $method)){
                if(count($options)){
                    return call_user_func_array(array(new $widgetClass, $method), $options);
                }
                else{
                    return call_user_func(array(new $widgetClass, $method));
                }
            }
            
            throw new Exception('Error metodo widget');
        }
        
        throw new Exception('Error de widget');
    }
	
    
    public function getLayoutPositions()
    {
        if(is_readable(ROOT . 'views' . DS . 'layout' . DS . $this->_template . DS . 'configs.php')){
            include_once ROOT . 'views' . DS . 'layout' . DS . $this->_template . DS . 'configs.php';
            
            return get_layout_positions();
        }
        
        throw new Exception('Error configuracion layout');
    }
    
    private function getWidgets()
    {
        $widgets = array(
            'menu-sidebar' => array(
                'config' => $this->widget('menu', 'getConfig'),
                'content' => array('menu', 'getMenu')
            )
        );
        
        $positions = $this->getLayoutPositions();
        $keys = array_keys($widgets);
        
        foreach($keys as $k){
            /* verificar si la posicion del widget esta presente */
            if(isset($positions[$widgets[$k]['config']['position']])){
                /* verificar si esta deshabilitado para la vista */ 
                if(!isset($widgets[$k]['config']['hide']) || !in_array($this->_item, $widgets[$k]['config']['hide'])){
                    /* verificar si esta habilitado para la vista */
                    if($widgets[$k]['config']['show'] === 'all' || in_array($this->_item, $widgets[$k]['config']['show'])){
                        /* llenar la posicion del layout */
                        $positions[$widgets[$k]['config']['position']][] = $this->getWidgetContent($widgets[$k]['content']);
                    }
                }
            }
        }
        
        return $positions;
    }
    
    public function getWidgetContent(array $content)
    {
        if(!isset($content[0]) || !isset($content[1])){
            throw new Exception('Error contenido widget');
            return;
        }
        
        if(!isset($content[2])){
            $content[2] = array();
        }
        
        return $this->widget($content[0],$content[1],$content[2]);
    }
}

?>
