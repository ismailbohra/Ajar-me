<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('HomeM');
        $this->load->model('AdminM');
	}

	public function index()
	{
		$data['slider_image'] = $this->AdminM->get_slider_image();
		$data2['product_category'] = $this->AdminM->get_category();
		$data['featured_product']=$this->AdminM->get_featured_product();
		$i = 0;
		foreach ($data['featured_product'] as $p) {
			$product_image = $this->AdminM->get_product_image($p['id']);
			if (!empty($product_image)) {
				$data['featured_product'][$i]['product_image_url'] = $product_image[0]['product_image_url'];
			} else {
				$data['featured_product'][$i]['product_image_url'] = "";
			}
			$i++;
		}
		for ($j=0; $j < count($data['featured_product']); $j++) { 
            $desc = "";
            $data['featured_product'][$j]['product_description'] = json_decode($data['featured_product'][$j]['product_description'], true);
            foreach ($data['featured_product'][$j]['product_description'] as $pd) {
                if ($pd[0] == "#") {
                    $desc = $desc . " " . substr($pd, 1);
                } else {
                    $desc = $desc . " " . $pd;
                }
                $desc = str_replace(';', ',', $desc);
                $desc = str_replace('|', '"', $desc);
                $desc = str_replace('^', "'", $desc);
                $desc = str_replace('1001', '+', $desc);
                $desc = str_replace('1002', '-', $desc);
                $desc = str_replace('1003', '*', $desc);
                $desc = str_replace('1004', '/', $desc);
            }
            $data['featured_product'][$j]['product_description'] = $desc;
        }
		// echo '<pre>';
		// echo print_r($data['featured_product']);
		// die();
		$this->load->view('Home/Header',$data2);
		$this->load->view('Home/Home',$data);
		$this->load->view('Home/Footer');
	}
	
}
?>