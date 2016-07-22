# Parsedown example for test documentation

For use:

* Upload file to the server
* Put your cursom *file.md* into *docs* folder
* Change correct path to the file into *index.php*

*index.php* - on 15 string

```
$text = file_get_contents('docs/file.md');
```

That all. After this action, you have to run project from browser for watching result

For highlight code using [https://highlightjs.org/](https://highlightjs.org/) library. You can change visual theme into *index.php* (by defalt solarized-light).
