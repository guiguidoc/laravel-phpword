# Laravel PHPWord Bundle

---

PHPWord is a library written in PHP that create word documents.
No Windows operating system is needed for usage because the result are docx files (Office Open XML) that can be opened by all major office software.

---

## Installation

Run this command on the CLI:

    php artisan bundle:install laravel-phpword

### Registering the Bundle

Place the following code in ``application/bundles.php``:


    'phpword'    => array(
        'auto'        => true
    )


### Usage ####

  		$objPHPWord = new PHPWord();
		$section = $objPHPWord->createSection();
		$section->addText('Test PhpWord');
		$writer = PHPWord_IOFactory::createWriter($objPHPWord, 'Word2007');;
		$writer->save("testword.docx");
		return Response::download('testword.docx', 'testword.docx');


More info about PHPWord , visit : http://phpword.codeplex.com/
