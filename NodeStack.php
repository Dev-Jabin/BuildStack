<?php

/**
 * @Author: Jabin
 * @Date:   2019-04-27
 * @Email:  jpyan2906@gmail.com
 */
class Node
{
	private $data = '';
	private $next = null;

	public function __construct($data, $next)
	{
		$this->data = $data;
		$this->next = $next;
	}

	public function __set($name, $value)
	{
		$this->$name = $value;
	}

	public function __get($name)
	{
		if (isset($this->$name)) {
			return $this->$name;
		}else{
			return null;
		}
	}
}

/**
 * 实现队列
 * FIFO
 */
class Queue
{
	private $front = null;//队头
	private $rear = null;//队尾
	private $size = 0;

	public function isEmpty()
	{
		if ($this->front === null || $this->rear === null) {
			return true;
		}else{
			return false;
		}
	}

	public function enQueue($data)
	{
		$oldRear = $this->rear;
		$this->rear = new Node($data, null);
		if ($this->isEmpty()) {
			$this->front = $this->rear;
			return;
		}
		$oldRear->next = $this->rear;
	}

	public function deQueue()
	{
		if ($this->isEmpty()) {
			return null;
		}
		$tempNode = $this->front->next;
		$data = $this->front->data;
		if ($this->rear == $this->front) {
			$this->rear == $tempNode;
		}
		$this->front = $tempNode;
		return $data;
	}
}

/**
 * 实现栈结构
 */
class Stack
{
	private $top = null;

	public function isEmpty()
	{
		if ($this->top === null) {
			return true;
		}else{
			return false;
		}
	}

	public function push($data)
	{
		$oldTop = $this->top;
		if ($this->isEmpty()) {
			$this->top = new Node($data, null);
			return;
		}
		$this->top = new Node($data,$oldTop);
	}

	public function pop()
	{
		if ($this->isEmpty()) {
			return null;
		}
		$node = $this->top->next;
		$data = $this->top->data;
		$this->top = $node;
		return $data;
	}

	public function getNode()
	{
		return $this->top;
	}
}


$stack = new Stack();
// push data
$stack->push("A");
$stack->push("B");
$stack->push("C");
$stack->push("D");
$stack->push("E");
$stack->push("F");
// pop data
echo "=====================\npop data\n=====================\n";
echo "pop1::".$stack->pop().PHP_EOL;
echo "pop2::".$stack->pop().PHP_EOL;
echo "pop3::".$stack->pop().PHP_EOL;
echo "pop4::".$stack->pop().PHP_EOL;
echo "pop5::".$stack->pop().PHP_EOL;
echo "pop6::".$stack->pop().PHP_EOL;
echo "pop7::".$stack->pop().PHP_EOL;

$queue = new Queue();
// enqueue data
$queue->enQueue("A");
$queue->enQueue("B");
$queue->enQueue("C");
$queue->enQueue("D");
$queue->enQueue("E");
$queue->enQueue("F");
// dequeue data
echo "=====================\ndequeue data\n=====================\n";
echo 'dequeue1::'.$queue->deQueue().PHP_EOL;
echo 'dequeue2::'.$queue->deQueue().PHP_EOL;
echo 'dequeue3::'.$queue->deQueue().PHP_EOL;
echo 'dequeue4::'.$queue->deQueue().PHP_EOL;
echo 'dequeue5::'.$queue->deQueue().PHP_EOL;
echo 'dequeue6::'.$queue->deQueue().PHP_EOL;
echo 'dequeue7::'.$queue->deQueue().PHP_EOL;