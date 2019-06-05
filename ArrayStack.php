<?php

/**
 * @Author: Jabin
 * @Date:   2019-04-26
 * @Email:  jpyan2906@gmail.com
 */

/**
 * 使用数组实现栈结构
 * LIFO
 */
class ArrayStack
{
	private $itemArrays = null;

	public function __construct()
	{
		$this->itemArrays = array();
	}

	public function isEmpty()
	{
		return count($this->itemArrays) == 0;
	}

	public function size()
	{
		return count($this->itemArrays);
	}

	public function push($data)
	{
		array_push($this->itemArrays, $data);
	}

	public function pop()
	{
		if($this->isEmpty()){
			return null;
		}
		$popItem = array_pop($this->itemArrays);
		return $popItem;
	}
}

/**
 * 使用数组实现队列结构
 * FIFO
 */
class ArrayQueue
{
	private $itemArrays = null;

	public function __construct()
	{
		$this->itemArrays = array();
	}

	public function isEmpty()
	{
		return count($this->itemArrays) == 0;
	}

	public function size()
	{
		return count($this->itemArrays);
	}

	public function enQueue($data)
	{
		array_push($this->itemArrays, $data);
	}

	public function deQueue()
	{
		if ($this->isEmpty()) {
			return null;
		}
		$deQueueItem = array_shift($this->itemArrays);
		return $deQueueItem;
	}
}

$arrayStack = new ArrayStack();
// push data
$arrayStack->push("0");
$arrayStack->push("A");
$arrayStack->push("B");
$arrayStack->push("C");
$arrayStack->push("D");
$arrayStack->push("E");

// pop data
echo "=====================\npop data\n=====================\n";
echo "pop1::".$arrayStack->pop().PHP_EOL;
echo "pop2::".$arrayStack->pop().PHP_EOL;
echo "pop3::".$arrayStack->pop().PHP_EOL;
echo "pop4::".$arrayStack->pop().PHP_EOL;
echo "pop5::".$arrayStack->pop().PHP_EOL;
echo "pop6::".$arrayStack->pop().PHP_EOL;

$arrayQueue = new ArrayQueue();
//enqueue data
$arrayQueue->enQueue("0");
$arrayQueue->enQueue("A");
$arrayQueue->enQueue("B");
$arrayQueue->enQueue("C");
$arrayQueue->enQueue("D");
$arrayQueue->enQueue("E");

//dequeue data
echo "=====================\ndequeue data\n=====================\n";
echo "dequeue1::".$arrayQueue->deQueue().PHP_EOL;
echo "dequeue2::".$arrayQueue->deQueue().PHP_EOL;
echo "dequeue3::".$arrayQueue->deQueue().PHP_EOL;
echo "dequeue4::".$arrayQueue->deQueue().PHP_EOL;
echo "dequeue5::".$arrayQueue->deQueue().PHP_EOL;
echo "dequeue6::".$arrayQueue->deQueue().PHP_EOL;
echo "dequeue7::".$arrayQueue->deQueue().PHP_EOL;