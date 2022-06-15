<?php 

// /**
// *  Corresponding Class to test YourClass class
// *
// *  For each class in your library, there should be a corresponding Unit-Test for it
// *  Unit-Tests should be as much as possible independent from other test going on.
// *
// *  @author yourname
// */
// class module_api_test extends PHPUnit_Framework_TestCase{
	
//   /**
//   * Just check if the YourClass has no syntax error 
//   *
//   * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
//   * any typo before you even use this library in a real project.
//   *
//   */
//   public function testIsThereAnySyntaxError(){
// 	$var = new Buonzz\Template\YourClass;
// 	$this->assertTrue(is_object($var));
// 	unset($var);
//   }
  
//   /**
//   * Just check if the YourClass has no syntax error 
//   *
//   * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
//   * any typo before you even use this library in a real project.
//   *
//   */
//   public function testMethod1(){
// 	$var = new Buonzz\Template\YourClass;
// 	$this->assertTrue($var->method1("hey") == 'Hello World');
// 	unset($var);
//   }
  
// }
ini_set("include_path", "iapp_ai/");
require_once 'iapp_ai\module_api.php';

  // Creates a new object of RandomQuotes class.
  $rq = new module_api;

  // Generates a random quote.
  print_r( $rq->idcard_front() );

  echo "\n";

?>