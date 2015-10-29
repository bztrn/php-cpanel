<?php 
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PanelController extends Controller {
	/**
	 * @Route("/panel/")
	 */
	public function indexAction() {
		return $this->render('cpanel/index.html.twig');
	}
}

?>