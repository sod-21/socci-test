<?php

interface iBookshelfItem
{
	/**
	 * Total Page count
	 * 
	 * @return int
	 * 
	 */
	public function totalPage();

	/**
	 * returns the page content
	 * 
	 * @param int $page
	 * @return string;
	 */
  	public function getPageContent(int $page);
}

interface iBook extends iBookshelfItem
{
	/**
	 * return author;
	 * 
	 * @return string
	 */
  	public function getAuthor();

	}

	/**
	 * return title
	 * 
	 * @return string
	 */
	public function getTitle();
}

interface iMagazine extends iBookshelfItem
{
	/**
	 * return Name
	 * 
	 * @return string
	 */
	public function getName();

	/**
	 * return date
	 * 
	 * @return date
	 */
	public function getIssueDate();
}

interface iNotebook extends iBookshelfItem
{
	/**
	 * return Owner
	 * 
	 * @return string
	 */
	public function getOwner();
}


interface iBookshelf
{
	/**
	 * return items
	 * 
	 * @return array
	 */	
  	public function getItems(): array;

	/**
	 * return the speical item
	 * 
	 * @param int $position
	 * @return iBookshelfItem;
	 */
  	public function getItem(int $position): iBookshelfItem;
	
	/**
	 * total count
	 * 
	 * @return int
	 */  
	public function countItems();

	/**
	 * total free slot
	 * 
	 * @return int
	 */
	public function countFreeSlots();

	/**
	 * total capacity
	 * 
	 * @return int
	 */
	public function getCapacity();

	/**
	 * add item
	 * 
	 * @param iBookshelfItem
	 * @return void
	 */
	public function addItem(iBookshelfItem $item);
}

?>