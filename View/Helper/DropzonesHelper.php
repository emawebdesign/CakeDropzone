<?php

App::uses('AppHelper', 'View/Helper');

class DropzonesHelper extends AppHelper {
	
	public $components = array('Session','Cookie','RequestHandler');
	
	public $helpers = array('Html', 'Form', 'Session');
	
	
	
	
	public function dropzone($url = "https://localhost") {
				
		echo $this->Html->css('/CakeDropzone/css/dropzone.min.css') ."\r\n";
        echo $this->Html->script('/CakeDropzone/js/dropzone.min.js') ."\r\n";

        echo '<div id="dropzone" class="dropzone"></div>';
		
		?>
        <script type="text/javascript">
		
        Dropzone.autoDiscover = false;

        var myDropzone = new Dropzone("#dropzone", { 
            url: "<?php echo $url; ?>/dropzone/upload",
            paramName: "myfile", // The name that will be used to transfer the file
            maxFilesize: 8, // MB
            acceptedFiles: "image/*"
        });

        myDropzone.on("complete", function(file) {
            alert("File caricato: " + file.name);
        });
		
		</script>
        <?php
		
	}
	
	
	
	
}

?>