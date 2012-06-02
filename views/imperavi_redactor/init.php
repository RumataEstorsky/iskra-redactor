$(document).ready(
		function()
		{
			$('#<?=$name?>').redactor({ 
                imageUpload : '/image/upload/',
                fileUpload : '/doc/upload/',
                fileDownload : '/doc/download/',
                fileDelete : '/doc/delete/',
                
            });
		}
	);
    