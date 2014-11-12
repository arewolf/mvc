<?php

// Controller
class Controller extends AppController {
	protected function init() {
	


		


		$sql = "
		SELECT *
		FROM customer
		";
		$output= '';
		$results = db::execute($sql);

		while($row = $results->fetch_assoc()){
			$customer_view_fragment = new CustomerViewFragment;
			$customer_view_fragment->firstname= $row['firstname'];
			$customer_view_fragment->lastname= $row['lastname'];
			$customer_view_fragment->customer_id= $row['customer_id'];
			$customer_view_fragment->age= $row['age'];
			$this->view->output .= $customer_view_fragment->render();

		

		}
	}
}

$controller = new Controller();

// Extract Main Controller Vars
extract($controller->view->vars);

?>

<!-- Notice this welcome variable was created above and passed into the view -->
<?php echo $output ?>

<a href="/customer/form">Add Customer</a>
	
