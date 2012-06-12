<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class MyClass extends CI_Controller {

  function __construct() {
    parent::__construct();
  }

  function testHtml2pdfLib() {
    // load the library
    $this->load->library('html2pdf_lib');

    /********
     * $content = the html content to be converted
     * you can use file_get_content() to get the html from other location
     *
     * $filename = filename of the pdf file, make sure you put the extension as .pdf
     * $save_to = location where you want to save the file,
     *            set it to null will not save the file but display the file directly after converted
     * ******/
    $content = '<h1>hello world!</h1>';
    $filename = 'testing.pdf';
    $save_to = $this->config->item('upload_root');

    if ($this->html2pdf_lib->converHtml2pdf($content,$filename,$save_to)) {
      echo $save_to.'/'.$filename;
    } else {
      echo 'failed';
    }
  }

}
