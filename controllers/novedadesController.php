<?PHP

class novedadesController extends Controller
{    
    public function __construct() 
    {
        parent::__construct();
    }
    
    public function index(){
		
        $this->_view->assign('titulo', 'Próximamente Novedades - ProRed Argentina');
        $this->_view->renderizar('index','novedades');
		
	}
    
}

?>