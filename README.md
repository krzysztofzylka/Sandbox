# Install
```bash
composer require krzysztofzylka/sandbox
```
# Create sandbox instance
```php
$sandbox = new \Krzysztofzylka\Sandbox\Sandbox(null, '<?php echo "a" ?>');
$sandbox->setTimeLimit(6);
$sandbox->setMemoryLimit(64);
echo $sandbox->run();
```