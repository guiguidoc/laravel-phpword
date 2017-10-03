# Laravel PHPWord Bundle

---

PHPWord is a library written in PHP that create word documents.
No Windows operating system is needed for usage because the result are docx files (Office Open XML) that can be opened by all major office software.

---

## Installation

Run this command on the CLI:
```bash
composer require guiguidoc/laravel-phpword
```

### Registering the package

Laravel 5.5 uses Package Auto-Discovery, so doesn't require you to manually add the ServiceProvider.

If you don't use auto-discovery, add the ServiceProvider to the providers array in `config/app.php`

```php
guiguidoc\LaravelPhpWord\PhpWordProvider::class,
```

If you want to use the facade, add this to your facades in `config/app.php`:

```php
'PhpWord' => guiguidoc\LaravelPhpWord\PhpWordFacade::class,
```

### Usage ####

```php
$phpWord = new PHPWord;
$section = $phpWord->createSection();
$section->addText('Test PhpWord');
$writer = PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');;
$writer->save("testword.docx");
return Response::download('testword.docx', 'testword.docx');
```

More info about PHPWord , visit : http://phpword.codeplex.com
