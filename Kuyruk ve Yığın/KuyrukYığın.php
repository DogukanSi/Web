<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
/*Yığın(stack) yapısında kural son giren ilk çıkardır yani LIFO(Last in first out)

init – Yığın oluşturmak için kullanılır.
push – Yığının sonuna item eklemek için kullanılır.
pop – Yığının sonundaki yani son eklenen itemi siler.
top – Yığının sonundaki iteme bakar.
isEmpty – Yığın boş mu, dolu mu kontrol eder.

Eğer yığın dolu ise ve siz bi şey eklemeye çalışıyosanız bu duruma "stack overflow" denir.
Eğer yığın boş ise ve siz item silmeye çalışırsanız bu duruma "stack underflow" denir.
*/
class ReadingList
{
    protected $stack;
    protected $limit;
    
    public function __construct($limit = 10) {
        // initialize the stack
        $this->stack = array();
        // stack can only contain this many items
        $this->limit = $limit;
    }

    public function push($item) {
        // trap for stack overflow
        if (count($this->stack) < $this->limit) {
            // prepend item to the start of the array
            array_unshift($this->stack, $item);
        } else {
            throw new RunTimeException('Stack is full!'); 
        }
    }

    public function pop() {
        if ($this->isEmpty()) {
            // trap for stack underflow
	      throw new RunTimeException('Stack is empty!');
	  } else {
            // pop item from the start of the array
            return array_shift($this->stack);
        }
    }

    public function top() {
        return current($this->stack);
    }

    public function isEmpty() {
        return empty($this->stack);
    }
}
$myBooks = new ReadingList();
$myBooks->push('A Dream of Spring');
$myBooks->push('The Winds of Winter');
$myBooks->push('A Dance with Dragons');
$myBooks->push('A Feast for Crows');
$myBooks->push('A Storm of Swords'); 
$myBooks->push('A Clash of Kings');
$myBooks->push('A Game of Thrones');
// Yığından bi şeyler çıkartmak için
echo $myBooks->pop(); //'A Game of Thrones' Silindi
echo "<br>";
echo $myBooks->pop(); //'A Clash of Kings' Silindi
echo "<br>";
echo $myBooks->pop(); //'A Storm of Swords' Silindi
echo "<br>";
// Yığının en üstünü görmek için
echo $myBooks->top(); //'A Feast for Crows' Göstericek
echo "<br>";
// Silmek İstersek
echo $myBooks->pop(); //'A Feast for Crows' Göstericek
echo "<br>";
// Eğer bi şey eklemek istersek
$myBooks->push('The Armageddon Rag');
echo $myBooks->top(); //'The Armageddon Rag' Göstericek





?>
</body>
</html>